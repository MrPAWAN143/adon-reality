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
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('categories.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <div class="space-x-2">
                    <form id="deleteCategory"
                        method="POST"
                        class="inline">
                        @csrf @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                            Delete
                        </button>
                    </form>

                    <button form="updateProject"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">Edit Category </h1>

            <form id="updateProject" method="POST"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                {{-- Category Name (full width) --}}
                <div class="md:col-span-2">
                    <label for="category_name" class="block font-semibold text-adminTextPrimary mb-1">
                        Category Name
                    </label>
                    <input type="text" id="category_name" name="category_name"
                        placeholder="Enter category name"
                        value="{{ $category->name }}"
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
                        value="{{ $category->slug }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Description --}}
                <div class="md:col-span-2">
                    <label for="description" class="block font-semibold text-adminTextPrimary mb-1">
                        Description
                    </label>
                    <input type="text" id="description" name="description"
                        placeholder="Enter category description"
                        value="{{ $category->description }}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- add button --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="module">
    $(document).ready(function() {
        // Handle form submission
        $('#updateProject').on('submit', function(e) {
            e.preventDefault();
            $('.container').hide();
            $('.loadingbtn').show();

            let form = this;
            let formData = new FormData(this);

            $.ajax({
                url: url.update,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
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


        // Handle delete confirmation
        $('#deleteCategory').on('submit', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this category?')) {
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
                            }, 2000);
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


        $(document).ready(function() {
            $('#category_name').on('input', function() {
                let title = $(this).val();
                let slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
                $('#slug').val(slug);
            });
        })

        const url = {
            update: "{{ route('categories.update', $category->id) }}",
            delete: "{{ route('categories.delete', $category->id) }}",
            list: "{{ route('categories.list') }}"
        };

    });
</script>

@endsection