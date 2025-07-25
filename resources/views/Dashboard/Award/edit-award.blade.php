@extends('Dashboard.layouts.app')

@section('metadata')
<title>Edit Award / Recognition</title>
<style>
    .forBorder {
        border-color: #49717B !important
    }
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('award.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <div class="space-x-2">
                    <form id="deleteAward"
                        method="POST"
                        class="inline">
                        @csrf @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                            Delete
                        </button>
                    </form>

                    <button form="updateAward"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Edit Award&nbsp;/&nbsp;Recognition
            </h1>

            {{-- FORM --}}
            <form id="updateAward"
                method="POST"
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                     @csrf @method('PUT')

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label for="title" class="block font-semibold text-adminTextPrimary mb-1">Title</label>
                    <input id="title" name="title" type="text" value="{{ old('title', $award->title) }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Presented By --}}
                <div>
                    <label for="by" class="block font-semibold text-adminTextPrimary mb-1">Presented By</label>
                    <input id="by" name="by" type="text" value="{{ old('by', $award->by) }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Year --}}
                <div>
                    <label for="year" class="block font-semibold text-adminTextPrimary mb-1">Year</label>
                    <select id="year" name="year"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="">Select Year</option>
                        @for ($i = 1900; $i <= date('Y'); $i++)
                            <option value="{{ $i }}" {{ old('year', $award->year) == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                    </select>
                </div>


                {{-- Featured Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="featured_image">
                        Featured Image
                    </label>
                    <input type="file" id="featured_image" name="featured_image"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">

                    @if($award->featured_image)
                    <div class="mt-2">
                        <img src="{{ asset($award->featured_image) }}"
                            alt="Current Featured Image"
                            class="w-12 h-12 object-cover rounded-md shadow">
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No featured image uploaded</p>
                    @endif
                </div>

                {{-- Short Description --}}
                <div class="md:col-span-2">
                    <label for="short_description" class="block font-semibold text-adminTextPrimary mb-1">Short Description</label>
                    <textarea id="short_description" name="short_description" rows="3"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('short_description', $award->short_description) }}</textarea>
                </div>

                {{-- Toggles --}}
                <div class="flex items-center space-x-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="is_featured" value="1"
                            {{ old('is_featured', $award->is_featured) ? 'checked' : '' }}
                            class="h-4 w-4 text-adminPrimary focus:ring-adminPrimary">
                        <span class="ml-2 text-sm">Is Featured</span>
                    </label>


                </div>

                {{-- Save --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update Award
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="module">

    
    $('#updateAward').on('submit', function(e) {
        e.preventDefault();
        $('.container').hide();
        $('.loadingbtn').show();

        let form = this;
        let formData = new FormData(this);
        formData.append('is_featured', $('input[name="is_featured"]').is(':checked') ? 1 : 0);


        $.ajax({
            url: url.update,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                _method: 'PUT',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                let status = response.status;
                let message = response.message;
                if (status == 'success') {
                    $('#messageTitle').text(status).addClass('text-green-600').removeClass('text-red-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                    setTimeout(() => {
                        window.location.href = url.list;
                    }, 1000);
                }
                $('.container').show();
                $('.loadingbtn').hide();
            },
            error: function(err) {
                let error = err.responseJSON.errors;
                $.each(error, (field, message) => {
                    $('#messageTitle').text(field).addClass('text-red-600').removeClass('text-green-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                })
                $('.container').show();
                $('.loadingbtn').hide();
            }
        });
    });


    $('#deleteAward').on('submit', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this award?')) {
            $('.container').hide();
            $('.loadingbtn').show();
            $.ajax({
                url: url.delete,
                method: 'POST',
                data: {
                    _method: 'DELETE',
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    let status = response.status;
                    let message = response.message;
                    if (status == 'success') {
                        $('#messageTitle').text(status).addClass('text-green-600').removeClass('text-red-600');
                        $('#messageContent').text(message);
                        $('#messageModal').removeClass('hidden');
                        setTimeout(() => {
                            window.location.href = url.list;
                        }, 1000);
                    }
                    $('.container').show();
                    $('.loadingbtn').hide();
                },
                error: function(err) {
                    let error = err.responseJSON.errors;
                    $.each(error, (field, message) => {
                        $('#messageTitle').text(field).addClass('text-red-600').removeClass('text-green-600');
                        $('#messageContent').text(message);
                        $('#messageModal').removeClass('hidden');
                    })
                    $('.container').show();
                    $('.loadingbtn').hide();
                }
            });
        }
    });


    const url = {
        update: "{{ route('award.update', $award->id) }}",
        list: "{{ route('award.list') }}",
        delete: "{{ route('award.delete', $award->id) }}"
    };
</script>

@endsection