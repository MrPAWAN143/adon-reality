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
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back / Delete -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('project.list') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    ← Back to List
                </a>

                <form action="#" method="POST" onsubmit="return confirm('Delete this project?');">
                    @csrf @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Delete
                    </button>
                </form>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">Edit Project (Sky Residences)</h1>

            <form id="updateProject" method="POST" action="#" enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf @method('PUT')

                <!-- Example fields pre-filled with demo data -->
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="category_id">Category</label>
                    <select id="category_id" name="category_id" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="1" selected>Residential</option>
                        <option value="2">Commercial</option>
                    </select>
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="development_partner_id">Development Partner</label>
                    <select id="development_partner_id" name="development_partner_id" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="3" selected>Sunshine Group</option>
                        <option value="4">Evergreen Builders</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_name">Property Name</label>
                    <input value="Sky Residences" id="property_name" name="property_name" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_slug">Slug</label>
                    <input value="sky-residences" id="property_slug" name="property_slug" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_price">Price (₹)</label>
                    <input value="15000000" id="property_price" name="property_price" type="number" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_rera_number">RERA Number</label>
                    <input value="PRM/KA/RERA/1251/310/PR/171015/004240" id="property_rera_number" name="property_rera_number" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_rera_url">RERA URL</label>
                    <input value="https://rera.karnataka.gov.in/project/sky-residences" id="property_rera_url" name="property_rera_url" type="url" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_size">Size (sq ft)</label>
                    <input value="2700" id="property_size" name="property_size" type="number" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_status">Status</label>
                    <select id="property_status" name="property_status" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="available" selected>Available</option>
                        <option value="sold">Sold</option>
                        <option value="under development">Under Development</option>
                    </select>
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_featured_image">Featured Image</label>
                    <input type="file" id="property_featured_image" name="property_featured_image" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_expected_roi">Expected ROI</label>
                    <input value="12% in 3 years" id="property_expected_roi" name="property_expected_roi" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="starting_price">Starting Price (₹)</label>
                    <input value="9500000" id="starting_price" name="starting_price" type="number" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_size_text">Unit Size Text</label>
                    <input value="Starting from 2700 sq ft" id="unit_size_text" name="unit_size_text" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                <!-- === Unit Type === -->
                <div>
                    <label for="unit_type_input"
                        class="block font-semibold text-adminTextPrimary mb-1">
                        Unit&nbsp;Type <span class="text-sm font-normal">(press Enter / Add)</span>
                    </label>

                    <div class="relative flex">
                        <input id="unit_type_input"
                            type="text"
                            class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">

                        <button id="addUnitTypeBtn"
                            type="button"
                            class="absolute right-2 top-1/2 -translate-y-1/2
                       bg-adminPrimary text-white text-sm px-3 py-1 rounded hidden">
                            Add
                        </button>
                    </div>

                    <ul id="unitTypeList" class="flex flex-wrap items-center gap-2 mt-2"></ul>
                    <input type="hidden" name="unit_type"
                        id="unit_type_hidden"
                        value="3 BHK,4 BHK">
                </div>



                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_units">Total Units</label>
                    <input value="250" id="total_units" name="total_units" type="number" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="number_of_towers"># Towers</label>
                    <input value="4" id="number_of_towers" name="number_of_towers" type="number" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="structure_of_property">Structure</label>
                    <input value="G + 23 Floors" id="structure_of_property" name="structure_of_property" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_area_of_land">Land Area (Acres)</label>
                    <input value="6.015" id="total_area_of_land" name="total_area_of_land" type="number" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_configurations">Unit Configurations</label>
                    <input value="3 BHK & 4 BHK Apartments" id="unit_configurations" name="unit_configurations" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_location">Location (Area)</label>
                    <input value="Sector 56" id="property_location" name="property_location" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_city">City</label>
                    <input value="Mumbai" id="property_city" name="property_city" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_state">State</label>
                    <input value="Maharashtra" id="property_state" name="property_state" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_country">Country</label>
                    <input value="India" id="property_country" name="property_country" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_zip_code">ZIP Code</label>
                    <input value="400001" id="property_zip_code" name="property_zip_code" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                <!-- === Amenities === -->
                <div class="md:col-span-2">
                    <label for="amenity_input"
                        class="block font-semibold text-adminTextPrimary mb-1">
                        Amenities <span class="text-sm font-normal">(press Enter / Add)</span>
                    </label>

                    <div class="relative flex">
                        <input id="amenity_input"
                            type="text"
                            class="w-full border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">

                        <!-- Add button (initially hidden) -->
                        <button id="addAmenityBtn"
                            type="button"
                            class="absolute right-2 top-1/2 -translate-y-1/2
                       bg-adminPrimary text-white text-sm px-3 py-1 rounded hidden">
                            Add
                        </button>
                    </div>

                    <ul id="amenitiesList" class="mt-2 space-y-1 text-base"></ul>
                    <input type="hidden" name="property_amenities"
                        id="property_amenities_hidden"
                        value="Swimming pool,Gym,Clubhouse">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_gallery">Gallery (Images)</label>
                    <input type="file" id="property_gallery" name="property_gallery[]" multiple class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_brochure_url">Brochure (PDF)</label>
                    <input type="file" id="property_brochure_url" name="property_brochure_url" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_title">Meta Title</label>
                    <input value="Best Luxury Apartments in Mumbai – Sunshine Group" id="property_meta_title" name="property_meta_title" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_keywords">Meta Keywords</label>
                    <input value="apartments, mumbai, luxury, real estate" id="property_meta_keywords" name="property_meta_keywords" type="text" class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_meta_description">Meta Description</label>
                    <textarea id="property_meta_description" name="property_meta_description" rows="5" class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">Luxury project located in prime Sector 56, Mumbai with premium 3 & 4 BHK homes.</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_benefits">Benefits / Why Invest</label>
                    <textarea id="property_benefits" name="property_benefits" rows="5" class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">High ROI potential, strategic location, trusted builder, and luxury amenities.</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_location_advantages">Location Advantages</label>
                    <textarea id="property_location_advantages" name="property_location_advantages" rows="5" class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">Close to metro, airport, IT parks, schools, and hospitals.</textarea>
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
    $(function() {

        /* ------- Generic tag‑builder helper ------- */
        function initTagBuilder({
            input,
            button,
            list,
            hidden
        }) {

            const $i = $(input); // text field
            const $b = $(button); // “Add” button
            const $l = $(list); // <ul> holding chips
            const $h = $(hidden); // hidden comma‑separated field

            // ---------- 1. preload existing values ----------
            if ($h.val()) {
                $h.val().split(',').forEach(v => addChip(v.trim(), false));
            }

            // ---------- 2. show/hide the Add button ----------
            $i.on('input', () =>
                $b.toggleClass('hidden', $.trim($i.val()).length === 0)
            );

            // ---------- 3. click or Enter adds a chip ----------
            $b.on('click', addFromInput);
            $i.on('keydown', e => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addFromInput();
                }
            });

            // ---------- 4. delete chip ----------
            $l.on('click', '.remove-chip', function() {
                $(this).closest('li').remove();
                syncHidden();
            });

            // ===== helpers =====
            function addFromInput() {
                const v = $.trim($i.val());
                if (v) addChip(v, true);
            }

            function addChip(txt, clearInput) {

                // prevent duplicates (case‑insensitive)
                const dup = $l.find('span').filter((_, el) =>
                    $(el).text().toLowerCase() === txt.toLowerCase()
                ).length;
                if (dup) {
                    if (clearInput) $i.val('').trigger('input');
                    return;
                }

                // append chip
                $l.append(`
               <li class="flex items-center justify-between bg-gray-200 rounded px-2 py-1">
              <span>${txt}</span>
              <button type="button"
                      class="remove-chip text-red-600 text-xs font-bold ml-3">&times;</button>
            </li>
            `);

                syncHidden();

                if (clearInput) {
                    $i.val('').trigger('input');
                }
            }

            function syncHidden() {
                const arr = $l.find('span').map((_, el) => $(el).text()).get();
                $h.val(arr.join(','));
            }
        }

        /* ------- Initialise both tag builders ------- */
        initTagBuilder({
            input: '#amenity_input',
            button: '#addAmenityBtn',
            list: '#amenitiesList',
            hidden: '#property_amenities_hidden'
        });

        initTagBuilder({
            input: '#unit_type_input',
            button: '#addUnitTypeBtn',
            list: '#unitTypeList',
            hidden: '#unit_type_hidden'
        });
    });
</script>
@endsection