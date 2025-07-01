@extends('Dashboard.layouts.app')
@section('metadata')
<title>New Development Partner</title>
<style>
    #developer_description {
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
                <a href="{{ route('development-partners.list') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Go Back
                </a>

                <button form="createPartner"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Save
                </button>
            </div>

            <!-- Form title -->
            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-6">
                New Development Partner
            </h1>
            <form id="createPartner"
                method="POST"
                action=""
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- Developer Name (full width) --}}
                <div class="md:col-span-2">
                    <label for="developer_name" class="block font-semibold text-adminTextPrimary mb-1">
                        Developer Name
                    </label>
                    <input type="text" id="developer_name" name="developer_name"
                        placeholder="Enter developer or company name"
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

                {{-- Total Completed Area --}}
                <div>
                    <label for="total_completed_area" class="block font-semibold text-adminTextPrimary mb-1">
                        Total Completed Area
                    </label>
                    <input type="number" id="total_completed_area" name="total_completed_area"
                        placeholder="e.g., 2.5 million sq.ft"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Ongoing Projects --}}
                <div>
                    <label for="ongoing_projects" class="block font-semibold text-adminTextPrimary mb-1">
                        Ongoing Projects
                    </label>
                    <input type="number" id="ongoing_projects" name="ongoing_projects"
                        placeholder="e.g., 5"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Logo (file) --}}
                <div>
                    <label for="logo" class="block font-semibold text-adminTextPrimary mb-1">
                        Logo
                    </label>
                    <input type="file" id="logo" name="logo"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white
                      file:mr-3 file:rounded file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white
                      hover:file:bg-adminPrimaryHover">
                </div>

                {{-- Founded In --}}
                <div>
                    <label for="founded_in" class="block font-semibold text-adminTextPrimary mb-1">
                        Founded In
                    </label>
                    <select id="founded_in" name="founded_in"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                   focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select year</option>
                        <!-- Years will be added here via jQuery -->
                    </select>
                </div>

                {{-- Group Owners --}}
                <div>
                    <label for="group_owners" class="block font-semibold text-adminTextPrimary mb-1">
                        Group Owners
                    </label>
                    <input type="text" id="group_owners" name="group_owners"
                        placeholder="Enter owner or group names"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Office Address --}}
                <div>
                    <label for="office_address" class="block font-semibold text-adminTextPrimary mb-1">
                        Office Address
                    </label>
                    <input type="text" id="office_address" name="office_address"
                        placeholder="Enter head office address"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Official Website --}}
                <div>
                    <label for="official_website" class="block font-semibold text-adminTextPrimary mb-1">
                        Official Website
                    </label>
                    <input type="url" id="official_website" name="official_website"
                        placeholder="https://example.com"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Operating Cities --}}
                <div>
                    <label for="operating_cities" class="block font-semibold text-adminTextPrimary mb-1">
                        Operating Cities
                    </label>

                    {{-- input + add button side‑by‑side --}}
                    <div class="flex">
                        <input type="text"
                            id="operating_cities"
                            name="operating_cities"
                            placeholder="e.g., Mumbai, Delhi, Bangalore"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">

                        {{-- hidden until user types --}}
                        <button type="button"
                            id="addCityBtn"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>

                    {{-- Inline TODO list --}}
                    <ul id="operatingCitiesList" class="mt-2 space-y-1 text-md flex items-center gap-3"></ul>
                </div>


                {{-- Total projects --}}
                <div>
                    <label for="total_projects" class="block font-semibold text-adminTextPrimary mb-1">
                        Total Projects
                    </label>
                    <input type="number" id="total_projects" name="total_projects"
                        placeholder="e.g., 10"
                        class="w-full !border !border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Developer Description (full width) --}}
                <div class="md:col-span-2">
                    <label for="developer_description" class="block font-semibold text-adminTextPrimary mb-1">
                        Developer Description
                    </label>
                    <textarea id="developer_description" name="developer_description" rows="4"
                        placeholder="Brief description about the developer or group"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                         focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
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
    CKEDITOR.replace('developer_description');

    $(document).ready(function() {
        const $select = $('#founded_in');
        const currentYear = new Date().getFullYear();

        for (let year = currentYear; year >= 1950; year--) {
            $select.append(`<option value="${year}">${year}</option>`);
        }


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


        // Handle form submission
        $('#createPartner').on('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            formData.set(
                'developer_description',
                CKEDITOR.instances.developer_description.getData()
            );
            $.ajax({
                url: url.store,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle success response
                    window.location.href = url.list;
                },
                error: function(xhr) {
                    // Handle error response
                    alert('Error saving development partner. Please try again.');
                }
            });
        });
    });

    const url = {
        store: "{{ route('development-partners.store') }}",
        list: "{{ route('development-partners.list') }}"
    };
</script>
@endsection