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
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto shadow-md py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            {{-- Display any validation errors --}}

            <!-- Back • Delete • Update -->
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('development-partners.list') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Go Back
                </a>


                <div class="space-x-2">
                    <form id="deleteDeveloper"
                        method="POST"
                        class="inline">
                        @csrf @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                            Delete
                        </button>
                    </form>

                    <button form="updateDeveloper"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Update
                    </button>
                </div>
            </div>

            {{-- Title --}}
            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Edit Developer
            </h1>

            {{-- EDIT form --}}
            <form id="updateDeveloper"
                method="POST"
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
                        value="{{old('developer_name', $developmentPartner->developer_name)}}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- tags --}}
                <div class="md:col-span-2">
                    <label for="tags" class="block font-semibold text-adminTextPrimary mb-1">
                        Tags
                    </label>
                    <input type="text" id="tags" name="tags"
                        value="{{old('tags', $developmentPartner->tags)}}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Slug --}}
                <div>
                    <label for="slug" class="block font-semibold text-adminTextPrimary mb-1">
                        Slug <span class="text-xs text-gray-500">(auto-filled from Developer Name)</span>
                    </label>
                    <input type="text" id="slug" name="slug"
                        value="{{old('slug', $developmentPartner->slug)}}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Total Completed Area --}}
                <div>
                    <label for="total_completed_area" class="block font-semibold text-adminTextPrimary mb-1">
                        Total Completed Area
                    </label>
                    <input type="text" id="total_completed_area" name="total_completed_area"
                        value="{{old('total_completed_area', $developmentPartner->total_completed_area)}}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Ongoing Projects --}}
                <div>
                    <label for="ongoing_projects" class="block font-semibold text-adminTextPrimary mb-1">
                        Ongoing Projects
                    </label>
                    <input type="text" id="ongoing_projects" name="ongoing_projects"
                        value="{{old('ongoing_projects', $developmentPartner->ongoing_projects)}}"
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

                    @if($developmentPartner->logo)
                    <div class="mt-2">
                        <img src="{{ asset($developmentPartner->logo) }}"
                            alt="Current Logo"
                            class="w-12 h-12 object-cover rounded-md shadow">
                    </div>
                    @else
                    <p class="mt-2 text-sm text-gray-500">No logo uploaded</p>
                    @endif
                </div>

                {{-- Tags --}}

                {{-- Founded In (select) --}}
                <div>
                    <label for="founded_in" class="block font-semibold text-adminTextPrimary mb-1">
                        Founded In
                    </label>
                    <select id="founded_in" name="founded_in"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                   focus:border-adminPrimary focus:ring-adminPrimary">
                        <option disabled>Select year</option>
                        @for ($year = 1950; $year <= date('Y'); $year++)
                            <option value="{{ $year }}" {{ $year == old('founded_in', $developmentPartner->founded_in) ? 'selected' : '' }}>
                            {{ $year }}
                            </option>
                            @endfor
                    </select>
                </div>

                {{-- Group Owners --}}
                <div>
                    <label for="group_owners" class="block font-semibold text-adminTextPrimary mb-1">
                        Group Owners
                    </label>
                    <input type="text" id="group_owners" name="group_owners"
                        value="{{old('group_owners', $developmentPartner->group_owners)}}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Office Address --}}
                <div>
                    <label for="office_address" class="block font-semibold text-adminTextPrimary mb-1">
                        Office Address
                    </label>
                    <input type="text" id="office_address" name="office_address"
                        value="{{old('office_address', $developmentPartner->office_address)}}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Official Website --}}
                <div>
                    <label for="official_website" class="block font-semibold text-adminTextPrimary mb-1">
                        Official Website
                    </label>
                    <input type="url" id="official_website" name="official_website"
                        value="{{old('official_website', $developmentPartner->official_website)}}"
                        class="w-full border border-adminInputBorder rounded px-3 py-2
                                  focus:border-adminPrimary focus:ring-adminPrimary">
                </div>


                {{-- Operating Cities --}}
                <div>
                    <label for="operating_cities"
                        class="block font-semibold text-adminTextPrimary mb-1">
                        Operating Cities
                    </label>

                    {{-- input + button --}}
                    <div class="flex">
                        <input id="operating_cities"
                            type="text"
                            placeholder="Type a city and press Enter"
                            class="flex-1 border border-adminInputBorder rounded px-3 py-2
                       focus:border-adminPrimary focus:ring-adminPrimary">

                        <button type="button"
                            id="addCityBtn"
                            class="ml-2 bg-adminPrimary hover:bg-adminPrimaryHover
                       text-white px-4 py-2 rounded hidden">
                            Add
                        </button>
                    </div>

                    {{-- chip list --}}
                    <ul id="operatingCitiesList" class="mt-2 flex flex-wrap gap-2 text-sm"></ul>

                    {{-- single hidden input (CSV string) --}}
                    @php
                    $citiesRaw = old('operating_cities', $developmentPartner->operating_cities ?? '');
                    if (is_array($citiesRaw)) {
                    $citiesCsv = implode(',', $citiesRaw);
                    } elseif (is_string($citiesRaw) && str_starts_with($citiesRaw, '[')) {
                    $decoded = json_decode($citiesRaw, true) ?? [];
                    $citiesCsv = implode(',', $decoded);
                    } else {
                    $citiesCsv = $citiesRaw;
                    }
                    @endphp

                    <input type="hidden"
                        name=""
                        id="operating_cities_hidden"
                        value="{{ $citiesCsv }}">
                </div>





                {{-- Total projects --}}
                <div>
                    <label for="total_projects" class="block font-semibold text-adminTextPrimary mb-1">
                        Total Projects
                    </label>
                    <input type="number" id="total_projects" name="total_projects"
                        placeholder="e.g., 10"
                        value="{{old('total_projects', $developmentPartner->total_projects)}}"
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
                                     focus:border-adminPrimary focus:ring-adminPrimary">{{old('developer_description', $developmentPartner->developer_description)}}</textarea>
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



@section('scripts')
<script type="module">
    // Initialize CKEditor for the description field
    CKEDITOR.replace('developer_description');
    /* -------- Comma‑string implementation -------- */
    $(function() {
        const $input = $('#operating_cities');
        const $btn = $('#addCityBtn');
        const $list = $('#operatingCitiesList');
        const $hidden = $('#operating_cities_hidden');

        /* ----- render chips on load ----- */
        if ($hidden.val().trim() !== '') {
            $hidden.val().split(',').forEach(c => addChip(c.trim(), false));
        }

        /* UI behaviour */
        $input.on('input', () =>
            $btn.toggle($.trim($input.val()).length > 0)
        );

        $btn.on('click', addFromInput);
        $input.on('keydown', e => {
            if (e.key === 'Enter') {
                e.preventDefault();
                addFromInput();
            }
        });

        $list.on('click', '.remove-city', function() {
            $(this).closest('li').remove();
            syncHidden();
        });

        /* helpers */
        function addFromInput() {
            const city = $.trim($input.val());
            if (city) addChip(city);
        }

        function addChip(city, clear = true) {
            if (isDuplicate(city)) {
                if (clear) clearInput();
                return;
            }

            $list.append(`
            <li class="flex items-center bg-gray-200 rounded px-2 py-1">
                <span>${escapeHtml(city)}</span>
                <button type="button"
                        class="remove-city text-adminDanger text-xs font-bold ml-2">&times;</button>
            </li>`);
            syncHidden();
            if (clear) clearInput();
        }

        function syncHidden() {
            const csv = $list.find('span')
                .map((_, el) => $(el).text())
                .get()
                .join(',');
            $hidden.val(csv);
        }

        function isDuplicate(city) {
            return $list.find('span').filter((_, el) =>
                $(el).text().toLowerCase() === city.toLowerCase()
            ).length > 0;
        }

        function clearInput() {
            $input.val('').trigger('input');
        }

        function escapeHtml(t) {
            return $('<div>').text(t).html();
        }
    });

    $(function() {
        // Handle form submission
        $('#updateDeveloper').on('submit', function(e) {
            e.preventDefault();
            $('.container').hide();
            $('.loadingbtn').show();
            const formData = new FormData(this);
            // Append CKEditor data
            const editorData = CKEDITOR.instances['developer_description'].getData();
            formData.append('developer_description', editorData);
            const $unitSpans = $('#operatingCitiesList li span');

            if ($unitSpans.length > 0) {
                $unitSpans.each(function() {
                    formData.append('operating_cities[]', $(this).text().trim());
                });
            } else {
                formData.append('operating_cities[]', '');
            }


            $.ajax({
                url: url.update,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
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

    // Handle delete confirmation
    $('#deleteDeveloper').on('submit', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this developer?')) {
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
                            window.location.href = "{{ route('development-partners.list') }}";
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
        $('#developer_name').on('input', function() {
            let title = $(this).val();
            let slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            $('#slug').val(slug);
        });
    });

    const url = {
        update: "{{ route('development-partners.update', $developmentPartner->id) }}",
        delete: "{{ route('development-partners.delete', $developmentPartner->id) }}",
        list: "{{ route('development-partners.list') }}"
    }
</script>
@endsection