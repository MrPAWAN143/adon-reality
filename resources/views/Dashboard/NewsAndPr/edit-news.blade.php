@extends('Dashboard.Layouts.app')

@section('metadata')
<title>Edit news Post – {{ $blog->title ?? 'Demo Title' }}</title>
<style>
    .forBorder  { border-color: #49717B !important; }
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('news.list') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <div class="space-x-2">
                    <form action=""
                          method="POST"
                          class="inline"
                          onsubmit="return confirm('Delete this news post?');">
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
                Edit News Post
            </h1>

            <!-- FORM -->
            <form id="updateNews"
                  method="POST"
                  action=""
                  enctype="multipart/form-data"
                  class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="title">Title</label>
                    <input id="title" name="title" type="text"
                           value="{{ old('title', $blog->title ?? 'Why Real Estate Still Rules') }}"
                           class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="slug">Slug</label>
                    <input id="slug" name="slug" type="text"
                           value="{{ old('slug', $blog->slug ?? 'real-estate-still-rules') }}"
                           class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Featured Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="featured_image">
                        Featured Image
                        @if(!empty($blog->featured_image))
                            <span class="text-xs text-gray-600">(Current file: {{ basename($blog->featured_image) }})</span>
                        @endif
                    </label>
                    <input type="file" id="featured_image" name="featured_image"
                           class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">
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
