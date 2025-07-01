
@extends('Dashboard.layouts.app')

@section('metadata')
<title>Edit Developer</title>
<style>
    #developer_description {
        border-color: #49717B !important;
    }
</style>
@endsection



@section('content')
<div class="container my-4 mx-auto max-w-6xl">
    <div class="my-5">
        <div class="mx-auto shadow-md py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            {{-- Action buttons --}}
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('development-partners.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    ← Back to List
                </a>

                <form action=""
                    method="POST"
                    onsubmit="return confirm('Delete this developer?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Delete
                    </button>
                </form>
            </div>

            {{-- Title --}}
            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Edit Developer
            </h1>

            {{-- EDIT form --}}
            <form id="updateDeveloper"
                method="POST"
                action=""
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf
                @method('PUT')

                {{-- Developer Name --}}
                <div class="md:col-span-2">
                    <label for="developer_name" class="block font-semibold text-adminTextPrimary mb-1">
                        Developer Name
                    </label>
                    <input type="text" id="developer_name" name="developer_name"
                        value=""
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label for="slug" class="block font-semibold text-adminTextPrimary mb-1">
                        Slug
                    </label>
                    <input type="text" id="slug" name="slug"
                        value=""
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Total Completed Area --}}
                <div>
                    <label for="total_completed_area" class="block font-semibold text-adminTextPrimary mb-1">
                        Total Completed Area
                    </label>
                    <input type="text" id="total_completed_area" name="total_completed_area"
                        value=""
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Ongoing Projects --}}
                <div>
                    <label for="ongoing_projects" class="block font-semibold text-adminTextPrimary mb-1">
                        Ongoing Projects
                    </label>
                    <input type="text" id="ongoing_projects" name="ongoing_projects"
                        value=""
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Logo --}}
                <div>
                    <label for="logo" class="block font-semibold text-adminTextPrimary mb-1">
                        Logo <span class="text-xs text-gray-500">(leave blank to keep current)</span>
                    </label>
                    <input type="file" id="logo" name="logo"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 bg-white
                                  file:mr-3 file:rounded file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white
                                  hover:file:bg-adminPrimaryHover">

                </div>

                {{-- Founded In (select) --}}
                <div>
                    <label for="founded_in" class="block font-semibold text-adminTextPrimary mb-1">
                        Founded In
                    </label>
                    <select id="founded_in" name="founded_in"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                   focus:border-adminPrimary focus:ring-adminPrimary">
                        <option disabled>Select year</option>
                        <option value=""></option>
                    </select>
                </div>

                {{-- Group Owners --}}
                <div>
                    <label for="group_owners" class="block font-semibold text-adminTextPrimary mb-1">
                        Group Owners
                    </label>
                    <input type="text" id="group_owners" name="group_owners"
                        value=""
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Office Address --}}
                <div>
                    <label for="office_address" class="block font-semibold text-adminTextPrimary mb-1">
                        Office Address
                    </label>
                    <input type="text" id="office_address" name="office_address"
                        value=""
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Official Website --}}
                <div>
                    <label for="official_website" class="block font-semibold text-adminTextPrimary mb-1">
                        Official Website
                    </label>
                    <input type="url" id="official_website" name="official_website"
                        value=""
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Operating Cities (full‑width) --}}
                <div >
                    <label for="operating_cities" class="block font-semibold text-adminTextPrimary mb-1">
                        Operating Cities
                    </label>

                    {{-- input + button --}}
                    <div class="flex">
                        <input type="text"
                            id="operating_cities"
                            placeholder="Type a city and press Enter"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2
                      focus:border-adminPrimary focus:ring-adminPrimary">

                        <button type="button"
                            id="addCityBtn"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>

                    {{-- chip list --}}
                    <ul id="operatingCitiesList" class="mt-2 space-y-1 text-sm"></ul>

                    {{-- comma‑separated value --}}
                    <input type="hidden"
                        name="operating_cities"
                        id="operating_cities_hidden"
                        value="delhi,gurgaon,noida">
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

                {{-- Developer Description --}}
                <div class="md:col-span-2">
                    <label for="developer_description" class="block font-semibold text-adminTextPrimary mb-1">
                        Developer Description
                    </label>
                    <textarea id="developer_description" name="developer_description" rows="4"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                     focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Update button --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



@push('scripts')
<script type="module">
   $(function () {
    const $input  = $('#operating_cities');
    const $btn    = $('#addCityBtn');
    const $list   = $('#operatingCitiesList');
    const $hidden = $('#operating_cities_hidden');

    /* ---------- render saved cities on load ---------- */
    if ($hidden.val()) {
        $hidden.val().split(',').forEach(city => addChip(city.trim(), false));
    }

    /* show / hide Add button */
    $input.on('input', () => $btn.toggle($.trim($input.val()).length > 0));

    /* add city via button or Enter */
    $btn.on('click', addFromInput);
    $input.on('keydown', e => { if (e.key === 'Enter') { e.preventDefault(); addFromInput(); }});

    /* remove chip */
    $list.on('click', '.remove-city', function () {
        $(this).closest('li').remove();
        syncHidden();
    });

    /* ---------- helpers ---------- */
    function addFromInput () {
        const city = $.trim($input.val());
        if (city) addChip(city, true);
    }

    function addChip (city, clear) {
        const dup = $list.find('span').filter((_, el) =>
                    $(el).text().toLowerCase() === city.toLowerCase()).length;
        if (dup) { if (clear) $input.val('').trigger('input'); return; }

        const chip = `
            <li class="flex items-center justify-between bg-gray-200 rounded px-2 py-1">
                <span>${city}</span>
                <button type="button"
                        class="remove-city text-red-600 text-xs font-bold ml-3">&times;</button>
            </li>`;
        $list.append(chip);
        syncHidden();
        if (clear) $input.val('').trigger('input');
    }

    function syncHidden () {
        const cities = $list.find('span').map((_, el) => $(el).text()).get();
        $hidden.val(cities.join(','));
    }
});
</script>
@endpush