@extends('Dashboard.layouts.app')

@section('metadata')
<title>Edit Testimony</title>
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
                <a href="{{ route('testimony.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <div class="space-x-2">
                    <form id="deleteTestimony"
                        method="POST"
                        class="inline">
                        @csrf @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                            Delete
                        </button>
                    </form>

                    <button form="updateTestimony"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Edit Testimony
            </h1>

            {{-- FORM --}}
            <form id="updateTestimony"
                method="POST"
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                     @csrf @method('PUT')

                {{-- Name --}}
                <div class="md:col-span-2">
                    <label for="name" class="block font-semibold text-adminTextPrimary mb-1">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name', $testimony->name) }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Role --}}
                <div>
                    <label for="role" class="block font-semibold text-adminTextPrimary mb-1">Role</label>
                    <input id="role" name="role" type="text" value="{{ old('role', $testimony->role) }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Featured Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="profile_image">
                        Profile Image
                    </label>
                    <input type="file" id="profile_image" name="profile_image"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">

                    @if($testimony->photo)
                    <div class="mt-2">
                        <img src="{{ asset($testimony->photo) }}"
                            alt="Current Profile Image"
                            class="w-12 h-12 object-cover rounded-md shadow">
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No profile image uploaded</p>
                    @endif
                </div>

                {{-- review text --}}
                <div class="md:col-span-2">
                    <label for="review_text" class="block font-semibold text-adminTextPrimary mb-1">Review Text</label>
                    <textarea id="review_text" name="review_text" rows="3"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('review_text', $testimony->review_text) }}</textarea>
                </div>

                {{-- Save --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update Testimony
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="module">


    $('#updateTestimony').on('submit', function(e) {
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


    $('#deleteTestimony').on('submit', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this testimony?')) {
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
        update: "{{ route('testimony.update', $testimony->id) }}",
        list: "{{ route('testimony.list') }}",
        delete: "{{ route('testimony.delete', $testimony->id) }}"
    };
</script>

@endsection