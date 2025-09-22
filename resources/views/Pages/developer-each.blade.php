@extends('Pages.layouts.app')
@section('metadata')
<title>{{ $developmentPartner->developer_name }}</title>
<meta name="description" content="{{ Str::limit(strip_tags($developmentPartner->developer_description), 164 , '...') }}">
@endsection
@section('styles')
<style>

</style>
@endsection


@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('development-partners') }}">Developer Partners</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('development-partners.show', $developmentPartner->slug) }}">{{ $developmentPartner->developer_name }}</a></div>
</section>

<section class="px-4  md:px-0 max-w-[1100px] mx-auto bg-white pb-0">
    <div class="flex md:flex-row flex-col-reverse items-start justify-between mb-0">
        <div class=" md:max-w-[85%] max-w-full md:mb-0 mb-4">
            <x-heading-subheading heading="{{ 'Explore Projects by ' . $developmentPartner->developer_name }}" subheading="" headingClass="heading " subHeadingClass="devsubheading mb-0" />
            <div class="w-full -mt-2">
                <p class="md:pr-[15%] pr-0 text-[8px] md:text-sm pb-3">{!! $developmentPartner->developer_description !!}</p>
            </div>
        </div>

        <div class="flex justify-end items-center">
            <img src="{{ asset( $developmentPartner->logo) }}" alt="{{$developmentPartner->developer_name }}" class="md:w-24 md:h-24 w-16 h-16 object-contain bg-white rounded-full shadow-[0_0_10px_rgba(0,0,0,0.2)]" />
        </div>
    </div>


    <div class="md:max-w-5xl w-full mx-auto px-4 md:py-4 py-1 md:pb-4">
        <table class="min-w-full border border-gray-300 text-left md:text-sm text-[12px]">
            <tbody class="divide-y divide-gray-300">
                <tr class="bg-white">
                    <th class="font-bold md:p-4 p-2 w-1/4 align-top border-r">Founded in</th>
                    <th class="md:p-4 p-2 font-normal text-gray-700">{{ $developmentPartner->founded_in ?? 'N/A' }}</th>
                </tr>
                <tr class="bg-gray-50">
                    <th class="font-bold md:p-4 p-2 align-top border-r">Completed Projects</th>
                    <th class="md:p-4 p-2 font-normal text-gray-700">{{ $developmentPartner->total_completed_area ?? 'N/A' }}</th>
                </tr>
                <tr class="bg-white">
                    <th class="font-bold md:p-4 p-2 align-top border-r">On-going Projects</th>
                    <th class="md:p-4 p-2 font-normal text-gray-700">{{ $developmentPartner->ongoing_projects ?? 'N/A' }}</th>
                </tr>
                <tr class="bg-gray-50">
                    <th class="font-bold md:p-4 p-2 align-top border-r">Owner of Group</th>
                    <th class="md:p-4 p-2 font-normal text-gray-700">
                        {{ $developmentPartner->group_owners ?? 'N/A' }}
                    </th>
                </tr>
                <tr class="bg-white">
                    <th class="font-bold md:p-4 p-2 align-top border-r">Operating in Cities</th>
                    <th class="md:p-4 p-2 font-normal text-gray-700">
                        {{ implode(', ', $developmentPartner->operating_cities) ?? 'N/A' }}
                    </th>
                </tr>
                <tr class="bg-gray-50">
                    <th class="font-bold md:p-4 p-2 align-top border-r">Official Website</th>
                    <th class="md:p-4 p-2 font-normal text-blue-600 underline">
                        <a href="{{ $developmentPartner->official_website }}" target="_blank">{{ $developmentPartner->official_website }}</a>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>


    <form class="max-w-4xl mx-auto px-4 py-4 pb-8 mt-0 propertyFilterForm" >
        <!-- Filters -->
        @csrf
        <div class="grid grid-cols-4 md:grid-cols-4 md:gap-6 gap-4 ">
            <select class="project-page-filter-btn " name="location">
                <option value="" disabled selected>Location</option>
                @foreach ($properties->pluck('property_city')->unique() as $location)
                    <option value="{{ $location }}">{{ $location }}</option>
                @endforeach
            </select>

            <select class="project-page-filter-btn" name="project">
                <option value="" disabled >Project</option>
                 @foreach ($properties->pluck('developmentPartner.developer_name')->unique() as $developer)
                    <option selected value="{{ $developer }}">{{ $developer }}</option>
                    @endforeach
            </select>

            <select class="project-page-filter-btn" name="status">
                <option value="" disabled selected>Status</option>
                @foreach ($properties->pluck('property_status')->unique() as $status)
                    <option value="{{ $status }}">{{ $status }}</option>
                    @endforeach
            </select>

            <select class="project-page-filter-btn" name="budget">
                     <option value="" selected>Budget</option>
                    <option value="Below 20 Lacks">Below 20 Lacks</option>
                    <option value="20 Lacks - 40 Lacks">20 Lacks - 40 Lacks</option>
                    <option value="40 Lacks - 60 Lacks">40 Lacks - 60 Lacks</option>
                    <option value="60 Lacks - 80 Lacks">60 Lacks - 80 Lacks</option>
                    <option value="80 Lacks - 1 Cr">80 Lacks - 1 Cr</option>
                    <option value="1 Cr - 1.5 Cr">1 Crore - 1.5 Crore</option>
                    <option value="1.5 Cr - 2 Cr">1.5 Crore - 2 Crore</option>
                    <option value="2 Cr - 5 Cr">2 Crore - 5 Crore</option>
                    <option value="5 Cr +">5 Crore +</option>
            </select>
        </div>

        <div class="flex flex-row items-center justify-between w-[82%] md:max-w-xl mx-auto bg-white rounded-2xl py-1 px-1 md:p-1 md:px-2 mt-6 border border-bgSecondary shadow-md">

            <div class="flex w-full items-center justify-start rounded-2xl md:px-4 px-2 md:py-1 py-0 ">
                <x-zondicon-search class="md:w-6 md:h-6 w-4 h-4 text-bgSecondary" />
                <input type="text" placeholder="Search by Project Name or Location..." name="search"
                    class="propertysearchBar md:text-[16px] text-[10px] md:placeholder:text-[16px] placeholder:text-[10px] px-[5px] w-full placeholder:text-bgSecondary outline-none text-sm bg-transparent border-none focus:border-none focus:outline-none md:py-2 py-0" />
            </div>

            <!-- Button - Search -->
            <button class="bg-primary border-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-semibold md:px-8 text-[10px] md:text-[14px] px-4 md:py-2 py-1 rounded-full md:mt-0 md:ml-2 transition duration-300">
                Search
            </button>
        </div>

    </form>
</section>

<section class="px-4 md:px-6 max-w-[1100px] bg-white pb-4 m-auto">

    <div class="grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-3 mx-auto propertysSection">
    @include('Pages.projects.filtered-properties', ['properties' => $properties])

    </div>

</section>

@if(isset($primeLocation) && $primeLocation->count() > 0)
<section class="px-4 md:px-6 md:py-4 py-4 bg-white">
    <div class="container max-w-[1100px] mx-auto text-center">
        <x-heading-subheading heading="Projects on prime location" subheading=" Discover top-tier properties situated in the most sought-after locations." headingClass="heading m-heading" subHeadingClass="subheading m-subheading" />

        <div class="grid grid-cols-2 md:grid-cols-4 md:gap-5 gap-2 pt-1 max-w-full mx-auto ">
            @foreach ($primeLocation as $property)
            <!-- Card 1 -->
            <a href="{{ route('projects.each', $property->property_slug) }}" class="relative rounded-[15px] overflow-hidden group md:min-h-[230px] md:max-h-[245px] md:w-[100%] md:h-[100%] md:min-w-[250px] w-[100%] h-[100%] min-w-[160px] min-h-[160px]  ">
                <img src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" class="prime-location-image" />
                <div class="prime-location-overlay">
                    <span class="prime-location-name">{{ $property->property_city }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection

@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('.propertyFilterForm select, .propertyFilterForm input[type="text"]').on('change input', function(e) {
            e.preventDefault();
            console.log($(this).val());

            let formData = new FormData($('.propertyFilterForm')[0]);

            $.ajax({
                url: "{{ route('developer.filter') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $(".propertysSection").html(response.html);
                },
                error: function(xhr) {
                    console.error("Error fetching filtered properties:", xhr.responseText);
                }
            });
        });
    });
</script>

@endsection