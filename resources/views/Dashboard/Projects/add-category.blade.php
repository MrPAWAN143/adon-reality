@extends('Dashboard.layouts.app')
@section('metadata')
<title>New Category</title>
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

            <!-- Action buttons -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('categories.list') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Go Back
                </a>

                <button form="createCategory"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Save
                </button>
            </div>

            <!-- Form title -->
            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-6">
                New Category
            </h1>
            <form id="createCategory"
                method="POST"
                action=""
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- Developer Name (full width) --}}
                <div class="md:col-span-2">
                    <label for="developer_name" class="block font-semibold text-adminTextPrimary mb-1">
                        Category Name
                    </label>
                    <input type="text" id="category_name" name="category_name"
                        placeholder="Enter category name"
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
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>   
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

@section('scripts')
<script type="module">
    $(document).ready(function() {
        const $select = $('#founded_in');
        const currentYear = new Date().getFullYear();

        for (let year = currentYear; year >= 1950; year--) {
            $select.append(`<option value="${year}">${year}</option>`);
        }

        // Handle operating cities input

        $(function() {
            const $input = $('#operating_cities');
            const $btn = $('#addCityBtn');
            const $list = $('#operatingCitiesList');

            /* ───── Show / hide button on typing ───── */
            $input.on('input', function() {
                $btn.toggle($.trim(this.value).length > 0);
            });

            /* ───── Add item: button click or Enter key ───── */
            $btn.on('click', addCityFromInput);
            $input.on('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addCityFromInput();
                }
            });

            /* ───── Remove item click ───── */
            $list.on('click', '.remove-city', function() {
                $(this).closest('li').remove();
            });

            /* ---------- helper ---------- */
            function addCityFromInput() {
                const city = $.trim($input.val());
                if (!city) return;

                const item = `
            <li class="flex items-center justify-between bg-gray-200 rounded px-2 py-1">
                <span>${city}</span>
                <button type="button"
                        class="remove-city text-adminDanger text-xs font-bold ml-3">&times;</button>
            </li>`;
                $list.append(item);

                $input.val('').trigger('input'); // clear & hide button
            }
        });
    });
    CKEDITOR.replace('ckeditor');
</script>
@endsection