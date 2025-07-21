@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Projects Each Brand</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
@endsection

@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('development-partners') }}">Developer Partners</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('development-partners.show', $developmentPartner->slug) }}">{{ $developmentPartner->developer_name }}</a></div>
</section>

<section class="px-4  md:px-0 max-w-[1100px] mx-auto bg-white pb-0">
    <div class="flex md:flex-row flex-col-reverse items-center justify-between mb-0">
        <div class="flex-1">
            <x-heading-subheading heading="{{ 'Explore Projects by ' . $developmentPartner->developer_name }}" subheading="Discover premium real estate offerings tailored to your lifestyle needs" headingClass="heading " subHeadingClass="devsubheading mb-4" />
        </div>

        <div class="flex-1 flex justify-end items-center">
            <img src="{{ asset( $developmentPartner->logo) }}" alt="{{$developmentPartner->developer_name }}" class="md:w-24 md:h-24 w-16 h-16 object-cover rounded-full shadow-md" />
        </div>
    </div>
    <div class="w-full mt-0">
        <p class="md:pr-[10%] pr-0 text-[8px] md:text-sm pb-3">DLF Limited is one of India's most prestigious and trusted real estate developers, with over seven decades of excellence. Known for creating iconic residential, commercial, and retail properties across the country, DLF has redefined urban living through thoughtful design, unmatched construction quality, and world-class amenities. With a legacy built on innovation and integrity, DLF continues to shape skylines and create vibrant communities that stand the test of time.</p>
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
                    <th class="md:p-4 p-2 font-normal text-gray-700">{{ $developmentPartner->completed_projects ?? 'N/A' }}</th>
                </tr>
                <tr class="bg-white">
                    <th class="font-bold md:p-4 p-2 align-top border-r">On-going Projects</th>
                    <th class="md:p-4 p-2 font-normal text-gray-700">{{ $developmentPartner->ongoing_projects ?? 'N/A' }}</th>
                </tr>
                <tr class="bg-gray-50">
                    <th class="font-bold md:p-4 p-2 align-top border-r">Owner of Group</th>
                    <th class="md:p-4 p-2 font-normal text-gray-700">
                    {{ $developmentPartner->owner_of_group ?? 'N/A' }}
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


    <div class="max-w-4xl mx-auto px-4 py-4 pb-8 mt-0">
        <!-- Filters -->
        <div class="grid grid-cols-4 md:grid-cols-4 md:gap-6 gap-4">
            <select class="project-page-filter-btn ">
                <option>Location</option>
                <option>Architecture</option>
                <option>Interior</option>
                <option>Exterior</option>
            </select>

            <select class="project-page-filter-btn">
                <option>Project</option>
                <option>2025</option>
                <option>2024</option>
                <option>2023</option>
            </select>

            <select class="project-page-filter-btn">
                <option>Status</option>
                <option>Modern</option>
                <option>Luxury</option>
                <option>Minimal</option>
            </select>

            <select class="project-page-filter-btn">
                <option>Budget</option>
                <option>Modern</option>
                <option>Luxury</option>
                <option>Minimal</option>
            </select>
        </div>

        <div class="flex flex-row items-center justify-between w-[82%] md:max-w-xl mx-auto bg-white rounded-2xl py-1 px-1 md:p-1 md:px-2 mt-6 border border-bgSecondary shadow-md">

            <div class="flex w-full items-center justify-start rounded-2xl md:px-4 px-2 md:py-1 py-0 ">
                <x-zondicon-search class="md:w-6 md:h-6 w-4 h-4 text-bgSecondary" />
                <input type="text" placeholder="Search by Project Name or Location..."
                    class="md:text-[16px] text-[10px] md:placeholder:text-[16px] placeholder:text-[10px] px-[5px] w-full placeholder:text-bgSecondary outline-none text-sm bg-transparent border-none focus:border-none focus:outline-none md:py-2 py-0" />
            </div>

            <!-- Button - Search -->
            <button class="bg-primary border-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-semibold md:px-8 text-[10px] md:text-[14px] px-4 md:py-2 py-1 rounded-full md:mt-0 md:ml-2 transition duration-300">
                Search
            </button>
        </div>

    </div>
</section>

<section class="px-4 md:px-6 max-w-[1100px] bg-white pb-4 m-auto">

    <div class="grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-3 mx-auto">
        @foreach ($properties as $property)
        <div class="featured-investment-card m-featured-page-card">
            <x-featured-investment-section featuredCardClass="project-page-image-dev" src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" imageClass="project-page-image" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" url="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
            <x-button class="featured-investment-button !py-2" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
        </div>

        @endforeach

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