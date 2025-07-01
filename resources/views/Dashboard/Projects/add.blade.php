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
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Back + Save -->
            <div class="flex justify-between items-center mb-2">
                <a href=""
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    ← Back to List
                </a>

                <button form="createProject"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Save
                </button>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                New Project
            </h1>

            <!-- FORM -->
            <form id="createProject"
                method="POST"
                action=""
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- ========== RELATION FKs ========== --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="category_id">Category</label>
                    <select id="category_id" name="category_id"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select category</option>

                    </select>
                </div>

                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="development_partner_id">Development Partner</label>
                    <select id="development_partner_id" name="development_partner_id"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="" disabled selected>Select partner</option>

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
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_slug">Slug (optional)</label>
                    <input type="text" id="property_slug" name="property_slug"
                        placeholder="URL‑friendly slug"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Price --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_price">Price (₹)</label>
                    <input type="number" step="0.01" id="property_price" name="property_price"
                        placeholder="e.g., 15000000"
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
                    <input type="number" step="0.01" id="property_size" name="property_size"
                        placeholder="e.g., 2700"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Status --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_status">Status</label>
                    <select id="property_status" name="property_status"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <option value="available">Available</option>
                        <option value="sold">Sold</option>
                        <option value="under development">Under Development</option>
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
                    <input type="number" step="0.01" id="starting_price" name="starting_price"
                        placeholder="e.g., 9500000"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Unit Size Text --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_size_text">Unit Size Text</label>
                    <input type="text" id="unit_size_text" name="unit_size_text"
                        placeholder="Starting from 2700 sq ft"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Unit Type tag builder --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_type_input">
                        Unit Type (press Enter / Add)
                    </label>
                    <div class="flex">
                        <input id="unit_type_input" type="text"
                            placeholder="3 BHK, 4 BHK, Villa, ..."
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button id="addUnitTypeBtn" type="button"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="unitTypeList" class="mt-2 space-y-1 text-base flex items-center gap-3"></ul>
                    <input type="hidden" name="unit_type" id="unit_type_hidden">
                </div>

                {{-- Total Units --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_units">Total Units</label>
                    <input type="number" id="total_units" name="total_units"
                        placeholder="e.g., 250"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Number of Towers --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="number_of_towers"># Towers</label>
                    <input type="number" id="number_of_towers" name="number_of_towers"
                        placeholder="e.g., 4"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Structure --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="structure_of_property">Structure</label>
                    <input type="text" id="structure_of_property" name="structure_of_property"
                        placeholder="G + 23 Floors"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Total Area of Land --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="total_area_of_land">Land Area (Acres)</label>
                    <input type="number" step="0.001" id="total_area_of_land" name="total_area_of_land"
                        placeholder="e.g., 6.015"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Unit Configurations (full) --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="unit_configurations">Unit Configurations</label>
                    <input type="text" id="unit_configurations" name="unit_configurations"
                        placeholder="3 BHK & 4 BHK Apartments"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Location Details (full) --}}
                <div class="md:col-span-2">
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


                {{-- Amenities tag builder --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="amenity_input">
                        Amenities (press Enter / Add)
                    </label>
                    <div class="flex">
                        <input type="text" id="amenity_input"
                            placeholder="Swimming pool, Gym, ..."
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                        <button type="button" id="addAmenityBtn"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>
                    <ul id="amenitiesList" class="mt-2 space-y-1 text-base"></ul>
                    <input type="hidden" name="property_amenities" id="property_amenities_hidden">
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
                    <label class=" block font-semibold text-adminTextPrimary mb-1" for="property_meta_description">Meta Description</label>
                    <textarea id="property_meta_description" name="property_meta_description" rows="5"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Expected Benefits / Who should invest --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_benefits">Benefits / Why Invest</label>
                    <textarea id="property_benefits" name="property_benefits" rows="5"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Location Advantages --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="property_location_advantages">Location Advantages</label>
                    <textarea id="property_location_advantages" name="property_location_advantages" rows="5"
                        class=" forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
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
    $(function() {

        /* ---------- Generic Tag‑Builder ---------- */
        function initTagBuilder({
            input,
            button,
            list,
            hidden,
            initial = ''
        }) {

            const $input = $(input);
            const $btn = $(button);
            const $list = $(list);
            const $hidden = $(hidden);

            // render any initial, comma‑separated values
            if (initial || $hidden.val()) {
                ($hidden.val() || initial).split(',').forEach(v => addChip(v.trim(), false));
            }

            // toggle Add button
            $input.on('input', () => $btn.toggle($.trim($input.val()).length > 0));

            // add via button or Enter
            $btn.on('click', addFromInput);
            $input.on('keydown', e => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addFromInput();
                }
            });

            // remove chip
            $list.on('click', '.remove-chip', function() {
                $(this).closest('li').remove();
                syncHidden();
            });

            /* helpers */
            function addFromInput() {
                const val = $.trim($input.val());
                if (val) addChip(val, true);
            }

            function addChip(text, clearInput) {
                /* avoid duplicates */
                const dup = $list.find('span').filter((_, el) =>
                    $(el).text().toLowerCase() === text.toLowerCase()).length;
                if (dup) {
                    if (clearInput) $input.val('').trigger('input');
                    return;
                }

                const chip = `
            <li class="flex items-center justify-between bg-gray-200 rounded px-2 py-1">
              <span>${text}</span>
              <button type="button"
                      class="remove-chip text-red-600 text-xs font-bold ml-3">&times;</button>
            </li>`;
                $list.append(chip);
                syncHidden();
                if (clearInput) $input.val('').trigger('input');
            }

            function syncHidden() {
                const items = $list.find('span').map((_, el) => $(el).text()).get();
                $hidden.val(items.join(','));
            }
        }

        /* ---------- Initialise for both fields ---------- */
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