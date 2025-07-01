@extends('Dashboard.layouts.app')

@section('metadata')
<title>Edit Project – Demo</title>
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

            <!-- Back / Delete -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('categories.list') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    ← Back to List
                </a>

                <form action="#" method="POST" onsubmit="return confirm('Delete this category?');">
                    @csrf @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Delete
                    </button>
                </form>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">Edit Category </h1>

            <form id="updateProject" method="POST" action="#"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                {{-- Category Name (full width) --}}
                <div class="md:col-span-2">
                    <label for="category_name" class="block font-semibold text-adminTextPrimary mb-1">
                        Category Name
                    </label>
                    <input type="text" id="category_name" name="category_name"
                        placeholder="Enter category name"
                        value="Residential"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label for="slug" class="block font-semibold text-adminTextPrimary mb-1">
                        Slug (optional)
                    </label>
                    <input type="text" id="slug" name="slug"
                        placeholder="Enter URL-friendly slug"
                        value="residential"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Description --}}
                <div class="md:col-span-2">
                    <label for="description" class="block font-semibold text-adminTextPrimary mb-1">
                        Description
                    </label>
                    <textarea id="ckeditor" name="description" rows="5"
                        placeholder="Enter category description"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">All types of homes and flats for living...</textarea>
                </div>

                {{-- add button --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection