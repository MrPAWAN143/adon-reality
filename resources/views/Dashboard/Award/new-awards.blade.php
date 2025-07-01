@extends('Dashboard.Layouts.app')

@section('metadata')
<title>Create New Award / Recognition</title>
<style>
    .forBorder {
        border-color: #49717B !important
    }
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            {{-- Back + Save --}}
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('award.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <button form="createAward"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Save
                </button>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Create New Award&nbsp;/&nbsp;Recognition
            </h1>

            {{-- FORM --}}
            <form id="createAward"
                method="POST"
                action=""
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- Title --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="title">Title</label>
                    <input id="title" name="title" type="text"
                        placeholder="Best Developer of the Year"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="slug">Slug</label>
                    <input id="slug" name="slug" type="text"
                        placeholder="best-developer-of-the-year"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Presented By --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="by">Presented By</label>
                    <input id="by" name="by" type="text"
                        placeholder="CNBC, CREDAI, etc."
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Year --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="year">Year</label>
                    <select id="year" name="year"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="">Select Year</option>
                        <!-- You can generate these dynamically with JavaScript or Blade -->
                        @for ($i = date('Y'); $i >= 2000; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                {{-- Featured Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="featured_image">Featured Image</label>
                    <input type="file" id="featured_image" name="featured_image"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">
                </div>

                {{-- Short Description --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="short_description">Short Description</label>
                    <textarea id="short_description" name="short_description" rows="3"
                        placeholder="Brief reason or summary of this achievement..."
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Toggles --}}
                <div class="flex items-center space-x-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="is_featured"
                            class="h-4 w-4 text-adminPrimary focus:ring-adminPrimary">
                        <span class="ml-2 text-sm">Is Featured</span>
                    </label>

                </div>

                {{-- Save --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Save Award
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection