@extends('Dashboard.Layouts.app')

@section('metadata')
<title>Edit Blog Post – {{ $blog->title ?? 'Demo Title' }}</title>
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
                <a href="{{ route('blog.list') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Go Back
                </a>


                <div class="space-x-2">
                    <form id="deleteBlog"
                        method="POST"
                        class="inline">
                        @csrf @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                            Delete
                        </button>
                    </form>

                    <button form="updateBlog"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Edit Blog Post
            </h1>

            <!-- FORM -->
            <form id="updateBlog"
                method="POST"
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="title">Title</label>
                    <input id="title" name="title" type="text"
                        value="{{ old('title', $blog->title) }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="slug">Slug</label>
                    <input id="slug" name="slug" type="text"
                        value="{{ old('slug', $blog->slug ) }}"
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

                    @if($blog->featured_image)
                    <div class="mt-2">
                        <img src="{{ asset($blog->featured_image) }}"
                            alt="Current Featured Image"
                            class="w-12 h-12 object-cover rounded-md shadow">
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No featured image uploaded</p>
                    @endif
                </div>


                {{-- Summary --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="summary">Summary</label>
                    <textarea id="summary" name="summary" rows="3"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('summary', $blog->summary ?? 'A short overview shown in listing pages…') }}</textarea>
                </div>

                {{-- Content --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="content">Content</label>
                    <textarea id="content" name="content" rows="10"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('content', $blog->content ?? 'Hellw') }}</textarea>
                    {{-- Replace textarea with CKEditor/TinyMCE if you use a WYSIWYG editor --}}
                </div>

                {{-- SEO Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_title">Meta Title</label>
                    <input id="meta_title" name="meta_title" type="text"
                        value="{{ old('meta_title', $blog->meta_title ?? 'Best Real‑Estate Investment Tips') }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- SEO Keywords --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_keywords">Meta Keywords</label>
                    <input id="meta_keywords" name="meta_keywords" type="text"
                        value="{{ old('meta_keywords', $blog->meta_keywords ?? 'real estate, investment, property tips') }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- SEO Description --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_description">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" rows="3"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
                </div>

                {{-- Update --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update Blog
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="module">
    CKEDITOR.replace('content', {
        height: 200
    });
    CKEDITOR.replace('meta_description', {
        height: 200
    });


    // Handle form submission
    $('#updateBlog').on('submit', function(e) {
        e.preventDefault();
        $('.container').hide();
        $('.loadingbtn').show();

        let form = this;
        let formData = new FormData(this);

        let meta_description = CKEDITOR.instances.meta_description.getData();
        formData.append('meta_description', meta_description);
        let content = CKEDITOR.instances.content.getData();
        formData.append('content', content);


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


    $('#deleteBlog').on('submit', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this blog post?')) {
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
        update: "{{ route('blog.update', $blog->id) }}",
        list: "{{ route('blog.list') }}",
        delete: "{{ route('blog.delete', $blog->id) }}"
    };
</script>

@endsection