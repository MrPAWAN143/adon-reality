@extends('Dashboard.Layouts.app')

@section('metadata')
<title>Edit Media and Event – {{ $blog->title ?? 'Demo Title' }}</title>
<style>
    .forBorder {
        border-color: #49717B !important;
    }
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('event.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <div class="space-x-2">
                    <form action=""
                        method="POST"
                        class="inline"
                        onsubmit="return confirm('Delete this event media?');">
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
                Edit Event Media
            </h1>

            <!-- FORM -->
            <form id="updateEvent"
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


                {{-- Event Date --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="event_date">Event Date</label>
                    <input id="event_date" name="event_date" type="date"
                        value="{{ old('event_date', $blog->event_date ?? '') }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>
                {{-- Media URL --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="media_url">Media URL</label>
                    <input id="media_url" name="media_url" type="text"
                        value="{{ old('media_url', $blog->media_url ?? '') }}"
                        placeholder="https://example.com/media/video.mp4"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                  {{-- Toggles --}}
                <div class="flex items-center space-x-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" checked name="is_featured"
                               class="h-4 w-4 text-adminPrimary focus:ring-adminPrimary">
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