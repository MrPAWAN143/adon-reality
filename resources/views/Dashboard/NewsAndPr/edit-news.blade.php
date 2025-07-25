@extends('Dashboard.layouts.app')

@section('metadata')
<title>Edit news Post – {{ $blog->title ?? 'Demo Title' }}</title>
<style>
    .forBorder  { border-color: #49717B !important; }
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('news.list') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <div class="space-x-2">
                    <form id="deleteNews"
                          method="POST"
                          class="inline">
                        @csrf @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                            Delete
                        </button>
                    </form>

                    <button form="updateNews"
                            class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Edit News Post
            </h1>

            <!-- FORM -->
            <form id="updateNews"
                  method="POST"
                  enctype="multipart/form-data"
                  class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="title">Title</label>
                    <input id="title" name="title" type="text"
                           value="{{ old('title', $news->title) }}"
                           class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="slug">Slug</label>
                    <input id="slug" name="slug" type="text"
                           value="{{ old('slug', $news->slug) }}"
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

                    @if($news->featured_image)
                    <div class="mt-2">
                        <img src="{{ asset($news->featured_image) }}"
                            alt="Current Featured Image"
                            class="w-12 h-12 object-cover rounded-md shadow">
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No featured image uploaded</p>
                    @endif
                </div>



                {{-- Summary --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="short_description">Summary</label>
                    <textarea id="short_description" name="short_description" rows="3"

                              class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('short_description', $news->short_description) }}</textarea>
                </div>

                {{-- SEO Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_title">Meta Title</label>
                    <input id="meta_title" name="meta_title" type="text"
                           value="{{ old('meta_title', $news->meta_title) }}"
                           class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- SEO Keywords --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_keywords">Meta Keywords</label>
                    <input id="meta_keywords" name="meta_keywords" type="text"
                           value="{{ old('meta_keywords', $news->meta_keywords) }}"
                           class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- SEO Description --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_description">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" rows="3"
                              class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('meta_description', $news->meta_description) }}</textarea>
                </div>

                 {{-- Content --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="long_description">Content</label>
                    <textarea id="long_description" name="long_description" rows="10"
                              class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('long_description', $news->long_description) }}</textarea>
                    {{-- Replace textarea with CKEditor/TinyMCE if you use a WYSIWYG editor --}}
                </div>

                {{-- Update --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                            class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update News Article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('scripts')

<script type="module">
    CKEDITOR.replace('long_description', {
        height: 200
    });


    // Handle form submission
    $('#updateNews').on('submit', function(e) {
        e.preventDefault();
        $('.container').hide();
        $('.loadingbtn').show();

        let form = this;
        let formData = new FormData(this);

        let long_description = CKEDITOR.instances.long_description.getData();
        formData.append('long_description', long_description);



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


    $('#deleteNews').on('submit', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this news article?')) {
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


    // Handle slug generation
    $(document).ready(function() {
        $('#title').on('input', function() {
            let title = $(this).val();
            let slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            $('#slug').val(slug);
        });
    });

    const url = {
        update: "{{ route('news.update', $news->id) }}",
        list: "{{ route('news.list') }}",
        delete: "{{ route('news.delete', $news->id) }}"
    };
</script>

@endsection
