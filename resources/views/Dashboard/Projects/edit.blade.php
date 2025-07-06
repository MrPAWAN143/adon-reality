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
<!-- This is the completed Edit Project form with all fields and demo data filled -->
<!-- Replaces your existing Edit form entirely -->

<!-- The same layout wrapping as before -->
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('project.list') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Go Back
                </a>

                <div class="space-x-2">
                    <form id="deleteProject"
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

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">Edit Project </h1>

            <form id="updateProject" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                <!-- Example fields pre-filled with demo data -->
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="category_id">Category</label>
                    <select id="category_id" name="category_id" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $property->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="development_partner_id">Development Partner</label>
                    <select id="development_partner_id" name="development_partner_id" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        @foreach ($developmentPartners as $partner)
                        <option value="{{ $partner->id }}"
                            {{ old('development_partner_id', $property->development_partner_id) == $partner->id ? 'selected' : '' }}>
                            {{ $partner->developer_name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_name">Property Name</label>
                    <input value="{{ old('property_name', $property->property_name) }}" id="property_name" name="property_name" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_slug">Slug</label>
                    <input value="{{ old('property_slug', $property->property_slug) }}" id="property_slug" name="property_slug" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_rera_number">RERA Number</label>
                    <input value="{{ old('property_rera_number', $property->property_rera_number) }}" id="property_rera_number" name="property_rera_number" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_rera_url">RERA URL</label>
                    <input value="{{ old('property_rera_url', $property->property_rera_url) }}" id="property_rera_url" name="property_rera_url" type="url" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_size">Size (sq ft)</label>
                    <input value="{{ old('property_size', $property->property_size) }}" id="property_size" name="property_size" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Property Type --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_type">Property Type</label>
                    <select id="property_type" name="property_type"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select property type</option>
                        <option value="Prime" {{ old('property_type', $property->property_type) == 'Prime' ? 'selected' : '' }}>Prime Location</option>
                        <option value="Featured" {{ old('property_type', $property->property_type) == 'Featured' ? 'selected' : '' }}>Featured Investment Opportunities</option>
                        <option value="Explore" {{ old('property_type', $property->property_type) == 'Explore' ? 'selected' : '' }}>Explore Our Properties Virtually</option>
                    </select>
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_status">Status</label>
                    <select id="property_status" name="property_status" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="Ongoing" {{ old('property_status', $property->property_status) == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                        <option value="Available" {{ old('property_status', $property->property_status) == 'Available' ? 'selected' : '' }}>Available</option>
                        <option value="Under Development" {{ old('property_status', $property->property_status) == 'Under Development' ? 'selected' : '' }}>Under Development</option>
                        <option value="Ready to Move" {{ old('property_status', $property->property_status) == 'Ready to Move' ? 'selected' : '' }}>Ready to Move</option>
                        <option value="Pre Launch" {{ old('property_status', $property->property_status) == 'Pre Launch' ? 'selected' : '' }}>Pre Launch</option>
                    </select>
                </div>

                {{-- Featured Image --}}
                <div>
                    <label for="property_featured_image" class="block font-semibold text-adminTextPrimary mb-1">
                        Featured Image <span class="text-xs text-gray-500">(leave blank to keep current)</span>
                    </label>

                    {{-- File input --}}
                    <input type="file" id="property_featured_image" name="property_featured_image"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white
               file:mr-3 file:rounded file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white
               hover:file:bg-adminPrimaryHover"
                        accept="image/*">

                    {{-- Existing image preview --}}
                    @if(!empty($property->property_featured_image))
                    <div class="mt-2">
                        <img src="{{ asset($property->property_featured_image) }}"
                            alt="Current Featured Image"
                            class="w-12 h-12 object-cover rounded-md shadow">
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No featured image uploaded</p>
                    @endif
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_expected_roi">Expected ROI</label>
                    <input value="{{ old('property_expected_roi', $property->property_expected_roi) }}" id="property_expected_roi" name="property_expected_roi" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="starting_price">Starting Price (₹)</label>
                    <input value="{{ old('starting_price', $property->starting_price) }}" id="starting_price" name="starting_price" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div id="grp_unit_size">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_size_text">Unit Size Text</label>
                    <input value="{{ old('unit_size_text', 'Starting from 2700 sq ft') }}" id="unit_size_text" name="unit_size_text" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Unit Type --}}
                <div id="grp_unit_type">
                    <label for="unit_type_input" class="block font-semibold text-adminTextPrimary mb-1">
                        Unit Type
                    </label>
                    <div class="flex">
                        <input id="unit_type_input"
                            type="text"
                            placeholder="e.g., 2 BHK, 3 BHK, Villa"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button type="button"
                            id="addUnitTypeBtn"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="unitTypeList" class="mt-2 flex flex-wrap gap-2 text-sm"></ul>

                    @php
                    $typeRaw = old('unit_type', $property->unit_type ?? '');
                    if (is_array($typeRaw)) {
                    $typeCsv = implode(',', $typeRaw);
                    } elseif (is_string($typeRaw) && str_starts_with($typeRaw, '[')) {
                    $decoded = json_decode($typeRaw, true) ?? [];
                    $typeCsv = implode(',', $decoded);
                    } else {
                    $typeCsv = $typeRaw;
                    }
                    @endphp

                    <input type="hidden" name="unit_type" id="unit_type_hidden" value="{{ $typeCsv }}">
                </div>


                <div id="grp_total_units">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_units">Total Units</label>
                    <input value="{{ old('total_units', $property->total_units) }}" id="total_units" name="total_units" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div id="grp_number_of_towers">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="number_of_towers"># Towers</label>
                    <input value="{{ old('number_of_towers', $property->number_of_towers) }}" id="number_of_towers" name="number_of_towers" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div id="grp_structure_of_property">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="structure_of_property">Structure</label>
                    <input value="{{ old('structure_of_property', $property->structure_of_property) }}" id="structure_of_property" name="structure_of_property" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_area_of_land">Land Area (Acres)</label>
                    <input value="{{ old('total_area_of_land', $property->total_area_of_land) }}" id="total_area_of_land" name="total_area_of_land" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div id="grp_unit_configurations">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_configurations">Unit Configurations</label>
                    <input value="{{ old('unit_configurations', '3 BHK & 4 BHK Apartments') }}" id="unit_configurations" name="unit_configurations" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_location">Location (Area)</label>
                    <input value="{{ old('property_location', 'Sector 56') }}" id="property_location" name="property_location" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_city">City</label>
                    <input value="{{ old('property_city', 'Mumbai') }}" id="property_city" name="property_city" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_state">State</label>
                    <input value="{{ old('property_state', 'Maharashtra') }}" id="property_state" name="property_state" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_country">Country</label>
                    <input value="{{ old('property_country', 'India') }}" id="property_country" name="property_country" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_zip_code">ZIP Code</label>
                    <input value="{{ old('property_zip_code', '400001') }}" id="property_zip_code" name="property_zip_code" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Amenities --}}
                <div class="md:col-span-2">
                    <label for="amenity_input" class="block font-semibold text-adminTextPrimary mb-1">
                        Amenities
                    </label>
                    <div class="flex">
                        <input id="amenity_input"
                            type="text"
                            placeholder="Type an amenity and press Enter"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button type="button"
                            id="addAmenityBtn"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="amenitiesList" class="mt-2 flex-col space-y-1 flex-wrap gap-2 text-sm"></ul>

                    @php
                    $amenitiesRaw = old('property_amenities', $property->property_amenities ?? '');
                    if (is_array($amenitiesRaw)) {
                    $amenitiesCsv = implode(',', $amenitiesRaw);
                    } elseif (is_string($amenitiesRaw) && str_starts_with($amenitiesRaw, '[')) {
                    $decoded = json_decode($amenitiesRaw, true) ?? [];
                    $amenitiesCsv = implode(',', $decoded);
                    } else {
                    $amenitiesCsv = $amenitiesRaw;
                    }
                    @endphp

                    <input type="hidden" name="property_amenities" id="property_amenities_hidden" value="{{ $amenitiesCsv }}">
                </div>


                {{-- Location Advantages --}}
                <div class="md:col-span-2">
                    <label for="location_input" class="block font-semibold text-adminTextPrimary mb-1">
                        Location Advantages
                    </label>
                    <div class="flex">
                        <input id="location_input"
                            type="text"
                            placeholder="e.g., Near school, Metro access"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button type="button"
                            id="addLocationBtn"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="locationAdvantagesList" class="mt-2 flex-col space-y-1 flex-wrap gap-2 text-sm"></ul>

                    @php
                    $locRaw = old('property_location_advantages', $property->property_location_advantages ?? '');
                    if (is_array($locRaw)) {
                    $locCsv = implode(',', $locRaw);
                    } elseif (is_string($locRaw) && str_starts_with($locRaw, '[')) {
                    $decoded = json_decode($locRaw, true) ?? [];
                    $locCsv = implode(',', $decoded);
                    } else {
                    $locCsv = $locRaw;
                    }
                    @endphp

                    <input type="hidden" name="property_location_advantages" id="property_location_advantages_hidden" value="{{ $locCsv }}">
                </div>


                {{-- Gallery (Multiple Images) --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_gallery">
                        Gallery (Images)
                    </label>

                    {{-- File input --}}
                    <input type="file" id="property_gallery" name="property_gallery[]" multiple
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white
               file:mr-3 file:rounded file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white
               hover:file:bg-adminPrimaryHover"
                        accept="image/*">

                    {{-- Existing images --}}
                    @if ($property->galleryImages->isNotEmpty())
                    <div class="mt-4 flex flex-wrap gap-4" id="galleryWrapper">
                        @foreach ($property->galleryImages as $image)
                        <div class="relative group" data-id="{{ $image->id }}">
                            <img src="{{ asset($image->image_path) }}"
                                alt="Gallery Image"
                                class="w-24 h-24 object-cover rounded-md shadow border">

                            {{-- Trash button (shown on hover) --}}
                            <button type="button"
                                data-url="{{ route('properties.gallery.destroy', $image->id) }}"
                                class="delete-gallery-img absolute top-0 right-0 m-1 p-1
                                   bg-red-600/80 hover:bg-red-700 text-white rounded-full opacity-0
                                   group-hover:opacity-100 transition"
                                data-url="{{ route('properties.gallery.destroy', $image->id) }}"
                                title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2
                                        2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M10 3h4a1
                                        1 0 011 1v2H9V4a1 1 0 011-1z" />
                                </svg>
                            </button>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No gallery images uploaded</p>
                    @endif
                </div>


                {{-- Brochure (PDF) --}}
                <div class="md:col-span-2">
                    <label for="property_brochure_url"
                        class="block font-semibold text-adminTextPrimary mb-1">
                        Brochure (PDF)
                        <span class="text-xs text-gray-500">(leave blank to keep current)</span>
                    </label>

                    {{-- File input --}}
                    <input type="file"
                        id="property_brochure_url"
                        name="property_brochure_url"
                        accept="application/pdf"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white
                  file:mr-3 file:rounded file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white
                  hover:file:bg-adminPrimaryHover">

                    @if (!empty($property->property_brochure_url))
                    <div class="mt-2 flex items-center gap-3">
                        <a href="{{ asset($property->property_brochure_url) }}"
                            target="_blank"
                            class="inline-flex items-center px-3 py-1 rounded bg-gray-100 hover:bg-gray-200 text-adminPrimary text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            View current brochure
                        </a>


                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No brochure uploaded</p>
                    @endif
                </div>


                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_title">Meta Title</label>
                    <input value="{{ old('property_meta_title', 'Best Luxury Apartments in Mumbai – Sunshine Group') }}" id="property_meta_title" name="property_meta_title" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_keywords">Meta Keywords</label>
                    <input value="{{ old('property_meta_keywords', 'apartments, mumbai, luxury, real estate') }}" id="property_meta_keywords" name="property_meta_keywords" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_description">Meta Description</label>
                    <textarea id="property_meta_description" name="property_meta_description" rows="5" class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('property_meta_description' , $property->property_meta_description) }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_description">Property Description</label>
                    <textarea id="property_description" name="property_description" rows="5" class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('property_description' , $property->property_description) }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_benefits">Who to invest in this project</label>
                    <textarea id="property_benefits" name="property_benefits" rows="5" class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">{{ old('property_benefits' , $property->property_benefits) }}</textarea>
                </div>

                <div class="md:col-span-2 flex justify-end">
                    <button class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update Project
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection



@section('scripts')
<script type="module">
    CKEDITOR.replace('property_description', {
        height: 200,
    });
    CKEDITOR.replace('property_benefits', {
        height: 200,
    });
    CKEDITOR.replace('property_meta_description', {
        height: 200,
    });


    $(function() {

        const commercialIds = [6, 7, 8];

        const residentialFields = [
            '#grp_unit_size',
            '#grp_unit_type',
            '#grp_total_units',
            '#grp_number_of_towers',
            '#grp_structure_of_property',
            '#grp_unit_configurations',
            '#grp_total_area_of_land',

        ];

        function toggleFields() {
            const selectedId = Number($('#category_id').val());
            const isCommercial = commercialIds.includes(selectedId);

            residentialFields.forEach(sel =>
                $(sel).toggleClass('hidden', isCommercial) // Tailwind’s `hidden` util
            );
        }

        // ③  Run once on page‑load + every time the category changes
        toggleFields();
        $('#category_id').on('change', toggleFields);
    });


    $(document).ready(function() {
        function initChips({
            input,
            button,
            list,
            hidden
        }) {
            const $input = $(input);
            const $btn = $(button);
            const $list = $(list);
            const $hidden = $(hidden);

            const existing = $hidden.val().trim();
            if (existing !== '') {
                existing.split(',').forEach(item => addChip(item.trim()));
            }

            $input.on('input', () => $btn.toggle($.trim($input.val()).length > 0));
            $btn.on('click', addFromInput);
            $input.on('keydown', e => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addFromInput();
                }
            });

            $list.on('click', '.remove-chip', function() {
                $(this).closest('li').remove();
                syncHidden();
            });

            function addFromInput() {
                const val = $.trim($input.val());
                if (val) {
                    addChip(val);
                    $input.val('').trigger('input');
                }
            }

            function addChip(text) {
                if ($list.find('span').filter((_, el) => $(el).text().toLowerCase() === text.toLowerCase()).length) return;

                const chip = `
            <li class="flex items-center justify-between bg-gray-200 rounded px-2 py-1">
                <span>${$('<div>').text(text).html()}</span>
                <button type="button" class="remove-chip text-red-600 text-xs font-bold ml-2">&times;</button>
            </li>`;
                $list.append(chip);
                syncHidden();
            }

            function syncHidden() {
                const items = $list.find('span').map((_, el) => $(el).text()).get();
                $hidden.val(items.join(','));
            }
        }
        initChips({
            input: '#amenity_input',
            button: '#addAmenityBtn',
            list: '#amenitiesList',
            hidden: '#property_amenities_hidden'
        });

        initChips({
            input: '#location_input',
            button: '#addLocationBtn',
            list: '#locationAdvantagesList',
            hidden: '#property_location_advantages_hidden'
        });

        initChips({
            input: '#unit_type_input',
            button: '#addUnitTypeBtn',
            list: '#unitTypeList',
            hidden: '#unit_type_hidden'
        });


        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let deleteRoute = null,
                deleteId = null;
            $('#galleryWrapper').on('click', '.delete-gallery-img', function() {
                deleteRoute = $(this).data('url');
                deleteId = $(this).closest('[data-id]').data('id');
                $('#deleteImageModal').removeClass('hidden');
            });
            $('#cancelDelete').on('click', () => {
                $('#deleteImageModal').addClass('hidden');
                deleteRoute = deleteId = null;
            });

            $('#confirmDelete').on('click', function() {
                if (!deleteRoute) return;

                const $btn = $(this).prop('disabled', true).text('Deleting…');

                $.ajax({
                    url: deleteRoute,
                    type: 'DELETE',
                    success: res => {
                        if (res.status === 'success') {
                            $('#galleryWrapper').find(`[data-id="${deleteId}"]`)
                                .fadeOut(200, function() {
                                    $(this).remove();
                                });
                        }
                        alert(res.message || 'Image deleted successfully.');
                        closeModal();
                    },
                    error: () => {
                        alert('Could not delete image, please try again.');
                        closeModal();
                    }
                });

                function closeModal() {
                    $('#deleteImageModal').addClass('hidden');
                    $btn.prop('disabled', false).text('Delete');
                    deleteRoute = deleteId = null;
                }
            });

        });


        $(function() {
            // Handle form submission
            $('#updateProject').on('submit', function(e) {
                e.preventDefault();
                $('.container').hide();
                $('.loadingbtn').show();
                let formData = new FormData(this);
                // Append CKEditor data
                const property_description = CKEDITOR.instances['property_description'].getData();
                formData.append('property_description', property_description);
                const property_benefits = CKEDITOR.instances['property_benefits'].getData();
                formData.append('property_benefits', property_benefits);
                const property_meta_description = CKEDITOR.instances['property_meta_description'].getData();
                formData.append('property_meta_description', property_meta_description);
                // Append operating cities as a CSV string

                const $unitSpans = $('#unitTypeList li span');

                if ($unitSpans.length > 0) {
                    $unitSpans.each(function() {
                        formData.append('unit_type[]', $(this).text().trim());
                    });
                } else {
                    formData.append('unit_type[]', '');
                }

                $('#amenitiesList li span').each(function() {
                    formData.append('property_amenities[]', $(this).text().trim());
                });

                $('#locationAdvantagesList li span').each(function() {
                    formData.append('property_location_advantages[]', $(this).text().trim());
                });

                $.ajax({
                    url: url.update,
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        _method: 'PUT',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        let status = response.status;
                        let message = response.message
                        if (status == 'success') {
                            $('#messageTitle').text(status).addClass('text-green-600').removeClass('text-red-600');
                            $('#messageContent').text(message);
                            $('#messageModal').removeClass('hidden');
                        }
                        $('.container').show();
                        $('.loadingbtn').hide();
                        setTimeout(() => {
                            window.location.href = url.list;
                        }, 1000);
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
        });
    });

    // Handle delete confirmation
    $('#deleteProject').on('submit', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this project?')) {
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


    $(document).ready(function() {
        $('#property_name').on('input', function() {
            let title = $(this).val();
            let slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            $('#property_slug').val(slug);
        });
    })


    const url = {
        update: "{{route('projects.update', $property->id)}}",
        delete: "{{ route('projects.destroy', $property->id) }}",
        list: '{{ route("project.list") }}'
    };
</script>
@endsection