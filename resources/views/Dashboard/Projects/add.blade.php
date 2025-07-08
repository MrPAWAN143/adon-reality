@extends('Dashboard.layouts.app')

@section('metadata')
<title>Add New Project</title>

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

            <!-- Action buttons -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('project.list') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Go Back
                </a>

                <button form="createProject"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Save Project
                </button>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                New Project
            </h1>

            <!-- FORM -->
            <form id="createProject"
                method="POST"
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- ========== RELATION FKs ========== --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="category_id">Category</label>
                    <select id="category_id" name="category_id"
                        class="w-full border border-adminInputBorder rounded px-4 py-3 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="development_partner_id">Development Partner</label>
                    <select id="development_partner_id" name="development_partner_id"
                        class="w-full border border-adminInputBorder rounded px-4 py-3 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select partner</option>
                        @foreach ($developmentPartners as $partner)
                        <option value="{{ $partner->id }}">{{ $partner->developer_name }}</option>
                        @endforeach

                    </select>
                </div>

                {{-- Property Name (full) --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_name">Property Name</label>
                    <input type="text" id="property_name" name="property_name"
                        placeholder="Enter property / project name"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_slug">Slug (auto-filled from Property Name)</label>
                    <input type="text" id="property_slug" name="property_slug"
                        placeholder="URL‑friendly slug"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Price --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_price">Price (₹)</label>
                    <input type="text" step="0.01" id="property_price" name="property_price"
                        placeholder="e.g., Price on Demand"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- RERA --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_rera_number">RERA Number</label>
                    <input type="text" id="property_rera_number" name="property_rera_number"
                        placeholder="e.g., PRM/KA/RERA/1251/310/PR/171015/004240"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_rera_url">RERA URL</label>
                    <input type="url" id="property_rera_url" name="property_rera_url"
                        placeholder="Official RERA page link"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Size --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_size">Size (sq ft)</label>
                    <input type="text" step="0.01" id="property_size" name="property_size"
                        placeholder="e.g., 2700"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Property Type --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_type">Property Type</label>
                    <select id="property_type" name="property_type"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select property type</option>
                        <option value="Prime">Prime Location</option>
                        <option value="Featured">Featured Investment Opportunities</option>
                        <option value="Virtual">Explore Our Properties Virtually</option>
                    </select>
                </div>


                {{-- Status --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_status">Status</label>
                    <select id="property_status" name="property_status"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select status</option>
                        <option value="Ongoing">Ongoing</option>
                        <option value="Available">Available</option>
                        <option value="Under Development">Under Development</option>
                        <option value="Ready to Move">Ready to Move</option>
                        <option value="Pre Launch">Pre Launch</option>
                    </select>
                </div>

                {{-- Featured Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_featured_image">Featured Image</label>
                    <input type="file" id="property_featured_image" name="property_featured_image"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">
                </div>

                {{-- Expected ROI --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_expected_roi">Expected ROI</label>
                    <input type="text" id="property_expected_roi" name="property_expected_roi"
                        placeholder="e.g., 12% in 3 years"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Starting Price --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="starting_price">Starting Price (₹)</label>
                    <input type="text" step="0.01" id="starting_price" name="starting_price"
                        placeholder="e.g., 9500000"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Unit Size --}}
                <div id="grp_unit_size">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_size">Unit Size</label>
                    <input type="text" id="unit_size" name="unit_size"
                        placeholder="Starting from 2700 sq ft"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Unit Type --}}
                <div id="grp_unit_type">
                    <label for="unit_type_input" class="block font-semibold text-adminTextPrimary mb-1">
                        Unit Type (press Enter / Add)
                    </label>
                    <div class="flex">
                        <input id="unit_type_input" type="text"
                            placeholder="3 BHK, 4 BHK, Villa …"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button id="addUnitTypeBtn" type="button"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="unitTypeList" class="mt-2 space-y-1 text-base flex items-center gap-3"></ul>
                </div>
                {{-- Total Units --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_units">Total Units</label>
                    <input type="text" id="total_units" name="total_units"
                        placeholder="e.g., 250"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Number of Towers --}}
                <div id="grp_number_of_towers">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="number_of_towers">Number of Towers</label>
                    <input type="text" id="number_of_towers" name="number_of_towers"
                        placeholder="e.g., 4"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Structure --}}
                <div id="grp_structure_of_property">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="structure_of_property">Structure of Property</label>
                    <input type="text" id="structure_of_property" name="structure_of_property"
                        placeholder="G + 23 Floors"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <!-- {{-- Total Area of Land --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_area_of_land">Land Area (Acres)</label>
                    <input type="text" step="0.001" id="total_area_of_land" name="total_area_of_land"
                        placeholder="e.g., 6.015"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div> -->

                {{-- Unit Configurations (full) --}}
                <div id="grp_unit_configurations">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_configurations">Configuration of Units available</label>
                    <input type="text" id="unit_configurations" name="unit_configurations"
                        placeholder="3 BHK & 4 BHK Apartments"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>
                {{-- Total area of lands --}}
                <div id="grp_total_area_of_land">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_area_of_land">Total Area of Land</label>
                    <input type="text" step="0.001" id="total_area_of_land" name="total_area_of_land"
                        placeholder="e.g., 6.015 Acres"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Location Details (full) --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_location">Location (Area)</label>
                    <input type="text" id="property_location" name="property_location"
                        placeholder="e.g., Sector 56"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_city">City</label>
                    <input type="text" id="property_city" name="property_city"
                        placeholder="Mumbai"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_state">State</label>
                    <input type="text" id="property_state" name="property_state"
                        placeholder="Maharashtra"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_country">Country</label>
                    <input type="text" id="property_country" name="property_country"
                        placeholder="India"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_zip_code">ZIP Code</label>
                    <input type="text" id="property_zip_code" name="property_zip_code"
                        placeholder="400001"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Amenities --}}
                <div class="md:col-span-2">
                    <label for="amenity_input" class="block font-semibold text-adminTextPrimary mb-1">
                        Amenities (press Enter / Add)
                    </label>
                    <div class="flex">
                        <input id="amenity_input" type="text"
                            placeholder="Swimming pool, Gym …"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button id="addAmenityBtn" type="button"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="amenitiesList" class="mt-2 space-y-1 text-base"></ul>
                </div>

                {{-- Location Advantages --}}
                <div class="md:col-span-2">
                    <label for="location_input" class="block font-semibold text-adminTextPrimary mb-1">
                        Location Advantages (press Enter / Add)
                    </label>
                    <div class="flex">
                        <input id="location_input" type="text"
                            placeholder="Location advantages…"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button id="addLocationBtn" type="button"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="locationAdvantagesList" class="mt-2 space-y-1 text-base"></ul>
                </div>


                {{-- gallery upload --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_gallery">Gallery (Images)</label>
                    <input type="file" id="property_gallery" name="property_gallery[]" multiple
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">
                </div>

                {{-- Brochure upload --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_brochure_url">Brochure (PDF)</label>
                    <input type="file" id="property_brochure_url" name="property_brochure_url"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">
                </div>

                {{-- SEO --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_title">Meta Title</label>
                    <input type="text" id="property_meta_title" name="property_meta_title"
                        placeholder="Best Luxury Apartments in Mumbai – Sunshine Group"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_keywords">Meta Keywords</label>
                    <input type="text" id="property_meta_keywords" name="property_meta_keywords"
                        placeholder="apartments, mumbai, luxury, real estate"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class=" block font-semibold text-adminTextPrimary mb-1" for="property_meta_description">Meta Description</label>
                    <textarea id="property_meta_description" name="property_meta_description" rows="5"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                <div class="md:col-span-2">
                    <label class=" block font-semibold text-adminTextPrimary mb-1" for="property_meta_description">Property Description</label>
                    <textarea id="property_description" name="property_description" rows="5"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Expected Benefits / Who should invest --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_benefits">Who to invest in this project</label>
                    <textarea id="property_benefits" name="property_benefits" rows="5"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Save --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Save Project
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


    $(function() {

        /* ---------- Generic Tag‑Builder ---------- */
        function initTagBuilder({
            input,
            button,
            list,
            initial = ''
        }) {

            const $input = $(input);
            const $btn = $(button);
            const $list = $(list);
            let items = []; // <- in‑memory store

            /* render any initial, comma‑separated values */
            (initial || '').split(',')
                .map(v => v.trim())
                .filter(Boolean)
                .forEach(v => addChip(v, false));

            /* toggle Add button */
            $input.on('input', () => $btn.toggle($.trim($input.val()).length > 0));

            /* add via button or Enter */
            $btn.on('click', addFromInput);
            $input.on('keydown', e => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addFromInput();
                }
            });

            /* remove chip */
            $list.on('click', '.remove-chip', function() {
                const txt = $(this).siblings('span').text();
                items = items.filter(i => i !== txt);
                $(this).parent().remove();
            });

            /* helpers */
            function addFromInput() {
                const val = $.trim($input.val());
                if (val) addChip(val, true);
            }

            function addChip(text, clearInput) {
                /* avoid duplicates (case‑insensitive) */
                if (items.some(i => i.toLowerCase() === text.toLowerCase())) {
                    if (clearInput) $input.val('').trigger('input');
                    return;
                }

                items.push(text);

                $list.append(`
    <li class="flex items-center justify-between bg-gray-200 rounded px-2 py-1">
        <span>${text}</span>
        <button type="button"
            class="remove-chip text-red-600 text-xs font-bold ml-3"
            aria-label="Remove">&times;</button>
    </li>`);

                if (clearInput) $input.val('').trigger('input');
            }

            /* expose the value list to caller */
            return {
                values() {
                    return [...items];
                },
                clear() {
                    items = [];
                    $list.empty();
                }
            };
        }

        /* ---------- Initialise each field ---------- */
        const amenityBuilder = initTagBuilder({
            input: '#amenity_input',
            button: '#addAmenityBtn',
            list: '#amenitiesList'
        });

        const unitTypeBuilder = initTagBuilder({
            input: '#unit_type_input',
            button: '#addUnitTypeBtn',
            list: '#unitTypeList'
        });

        const locAdvBuilder = initTagBuilder({
            input: '#location_input',
            button: '#addLocationBtn',
            list: '#locationAdvantagesList'
        });
    });

    $(document).ready(function() {
        $('#createProject').on('submit', function(e) {
            e.preventDefault();
            $('.container').hide();
            $('.loadingbtn').show();
            let form = this;

            let formData = new FormData(this);
            let property_description = CKEDITOR.instances['property_description'].getData();
            formData.append('property_description', property_description);

            let property_meta_description = CKEDITOR.instances['property_meta_description'].getData();
            formData.append('property_meta_description', property_meta_description);

            let property_benefits = CKEDITOR.instances['property_benefits'].getData();
            formData.append('property_benefits', property_benefits);

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
                url: url.store,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    let status = response.status;
                    let message = response.message
                    if (status == 'success') {
                        $('#messageTitle').text(status).addClass('text-green-600').removeClass('text-red-600');
                        $('#messageContent').text(message);
                        $('#messageModal').removeClass('hidden');
                    }else {
                        $('#messageTitle').text('Error').addClass('text-red-600').removeClass('text-green-600');
                        $('#messageContent').text(message);
                        $('#messageModal').removeClass('hidden');
                    }
                    $('.container').show();
                    $('.loadingbtn').hide();
                    $('#unitTypeList').empty();
                    $('#amenitiesList').empty();
                    $('#locationAdvantagesList').empty();
                    property_description = '';
                    property_meta_description = '';
                    property_benefits = '';
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


    $(document).ready(function() {
        $('#property_name').on('input', function() {
            let title = $(this).val();
            let slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            $('#property_slug').val(slug);
        });
    });

    const url = {
        store: "{{ route('projects.store') }}",
        list: "{{ route('project.list') }}"

    }
</script>
@endsection