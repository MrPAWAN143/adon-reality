@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Verified Properties</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">

@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('verified-properties') }}">Verified Properties</a> </div>
</section>
<x-banner-section class="px-4 relative h-[20vh] md:max-h-[45vh] md:h-[45vh]" mobileBanner="{{ asset('assets/images/bannerImages/verified-properties-banner.png') }}" image="{{ asset('assets/images/bannerImages/verified-properties-banner.png') }}" title="Verified Properties You Can Trust" subtitle="Every property listed here has been carefully verified to meet our highest standards of transparency and legal compliance." />

<section class="py-8 md:pb-8 pb-5 bg-white text-center mx-auto">
    <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center">A Legacy of Trust</h2>

    <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-4 px-4">
        <x-legacy-card class="legacy-card verified-property" title="10+" description="Years in the Real Estate Market" />
        <x-legacy-card class="legacy-card verified-property" title="500+" description="Happy Investors" />
        <x-legacy-card class="legacy-card verified-property" title="₹100 Cr+" description="Investment Managed" />
    </div>
</section>


<section class="py-4 bg-white text-center">
    <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center">Why Choose Adon Realty</h2>

    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 px-4">
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Prime<br>Locations</p>
            </x-slot>
            <x-slot name="icon">
                <x-zondicon-location class="w-6 h-6 text-primary" />
            </x-slot>
        </x-choose-adon-reality>


        <!-- Item 2 -->
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Pre-approved,<br>RERA-Compliant Projects</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/pre-aproove-area.svg') }}" alt="Pre-approved Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>

        <!-- Item 3 -->
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Experienced<br>Advisory Team</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/experienced-advisory.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>

        <!-- Item 4 -->
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Secure & Verified<br>Properties</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/secure-verified-properties.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>

        <!-- Item 5 -->
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">High ROI<br>properties</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/high-roi-porperties.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>

        <!-- Item 6 -->
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Transparent<br>Dealings</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/transparent-dealings.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>

        <!-- Item 7 -->
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Complete<br>Legal Support</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/complete-legal-support.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>

        <!-- Item 8 -->
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Personalised<br>Investment Planning</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/personalised-investment-planning.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>
    </div>
</section>


<div class="container m-auto ">
    <section class="max-w-[1100px] mx-auto px-4 md:px-0 py-4 bg-white text-center mt-4">
        <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center">Verified Property Listings</h2>

        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-3 mx-auto">
            @foreach ($properties as $property)
            <div class="featured-investment-card m-featured-page-card">
                <x-featured-investment-section featuredCardClass="project-page-image-dev" src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" imageClass="project-page-image" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" url="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                <x-button class="featured-investment-button !py-2" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
            </div>

            @endforeach

        </div>
    </section>
</div>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection