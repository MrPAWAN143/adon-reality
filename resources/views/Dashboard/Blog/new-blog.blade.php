@extends('Dashboard.Layouts.app')
@section('metadata')
<title>Create New Blog Post</title>
<style>
    .forBorder  {
        border-color: #49717B !important;
    }
    
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back + Save -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('blog.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    ← Back to List
                </a>

                <button form="createBlog"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Save
                </button>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Create New Blog Post
            </h1>

            <!-- FORM -->
            <form id="createBlog"
                method="POST"
                action=""
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="title">Title</label>
                    <input id="title" name="title" type="text"
                        placeholder="Exciting News in Real Estate"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="slug">Slug</label>
                    <input id="slug" name="slug" type="text"
                        placeholder="exciting-news-in-real-estate"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>
                {{-- Featured Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="featured_image">Featured Image</label>
                    <input type="file" id="featured_image" name="featured_image"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                              file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">
                </div>



                {{-- Summary --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="summary">Summary</label>
                    <textarea id="summary" name="summary" rows="3"
                        placeholder="A short overview shown in listing pages…"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>



                {{-- Content (full article) --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="content">Content</label>
                    <textarea id="content" name="content" rows="10"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                    {{-- If you use CKEditor/TinyMCE, replace this <textarea> with your editor component --}}
                </div>

                {{-- SEO Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_title">Meta Title</label>
                    <input id="meta_title" name="meta_title" type="text"
                        placeholder="Best Real‑Estate Investment Tips"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- SEO Keywords --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_keywords">Meta Keywords</label>
                    <input id="meta_keywords" name="meta_keywords" type="text"
                        placeholder="real estate, investment, property tips"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- SEO Description --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="meta_description">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" rows="3"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Save --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Save Blog
                    </button>
                </div>
            </form>
        </div>
    </div>

    @endsection