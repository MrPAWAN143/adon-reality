@extends('Dashboard.layouts.app')

@section('metadata')
<title>Edit Media and Event – {{ $blog->title ?? 'Demo Title' }}</title>
<style>
    .forBorder {
        border-color: #49717B !important;
    }
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('event.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <div class="space-x-2">
                    <form id="deleteEvent"
                        method="POST"
                        class="inline">
                        @csrf @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                            Delete
                        </button>
                    </form>

                    <button form="updateEvent"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Edit Event Media
            </h1>

            <!-- FORM -->
            <form id="updateEvent"
                method="POST"
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="title">Title</label>
                    <input id="title" name="title" type="text"
                        value="{{ old('title', $event->title) }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Featured Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="featured_image">
                        Featured Image
                    </label>
                    <input type="file" id="featured_image" name="featured_image"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">

                    @if($event->featured_image)
                    <div class="mt-2">
                        <img src="{{ asset($event->featured_image) }}"
                            alt="Current Featured Image"
                            class="w-12 h-12 object-cover rounded-md shadow">
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No featured image uploaded</p>
                    @endif
                </div>


                {{-- Event Date --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="event_date">Event Date</label>
                    <input id="event_date" name="event_date" type="date"
                        value="{{ old('event_date', isset($event->event_date) ? \Carbon\Carbon::parse($event->event_date)->format('Y-m-d') : '') }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Media URL --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="media_url">Media URL</label>
                    <input id="media_url" name="media_url" type="text"
                        value="{{ old('media_url', $event->media_url) }}"
                        placeholder="https://example.com/media/video.mp4"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Toggles --}}
                <div class="flex items-center space-x-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="is_featured"
                            class="h-4 w-4 text-adminPrimary focus:ring-adminPrimary"
                            {{ $event->is_featured ? 'checked' : '' }}>
                        <span class="ml-2 text-sm">Is Featured</span>
                    </label>
                </div>

                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update Event Media
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="module">
    // Handle form submission
    $('#updateEvent').on('submit', function(e) {
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


    $('#deleteEvent').on('submit', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this event?')) {
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
        update: "{{ route('event.update', $event->id) }}",
        list: "{{ route('event.list') }}",
        delete: "{{ route('event.delete', $event->id) }}"
    };
</script>

@endsection