@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Verified Properties</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
@endsection
@section('content')
<div class="container max-w-6xl mx-auto">
    <x-page-path class="path" path="Home > FAQs for investors" />
</div>
<x-banner-section class="px-4 relative h-[60vh] max-h-[60vh]" image="{{ asset('assets/images/bannerImages/verified-properties-banner.png') }}" title="Verified Properties You Can Trust" subtitle="Every property listed here has been carefully verified to meet our highest standards of transparency and legal compliance." />

<section class="py-10 bg-white text-center max-w-3xl mx-auto">
    <h2 class="text-2xl md:text-2xl font-bold mb-8">A Legacy of Trust</h2>

    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
        <x-legacy-card class="legacy-card" title="10+" description="Years in the Real Estate Market" />
        <x-legacy-card class="legacy-card" title="500+" description="Happy Investors" />
        <x-legacy-card class="legacy-card" title="₹100 Cr+" description="Investment Managed" />
    </div>
</section>


<section class="py-4 bg-white text-center">
    <h2 class="text-2xl md:text-2xl font-bold mb-10">Why Choose Adon Realty</h2>

    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4">
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



<section class="py-4 bg-white text-center mt-4">
    <h2 class="text-2xl md:text-2xl font-bold mb-6">Verified Property Listings</h2>


    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
        <div class="featured-investment-card">
            <x-featured-investment-section src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}" alt="DLF Cyber City Tower" class="featured-investment-img" heading="DLF Cyber City Tower" location="Noida, Sector 62" rera="UPRERAI2345" status="Ongoing" roi="12%" developer="DLF" variety="Multiplex / Commercial" size="5000 sq. ft." price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>
        <div class="featured-investment-card">
            <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MCorporateHeights.png') }}" alt="M3M Corporate Heights" class="featured-investment-img" heading="M3M Corporate Heights" location="Sector 67, Gurgaon" rera="HRERAGGN20230911" status="Ready to Move" roi="10%" developer="M3M" variety="Commercial Office Tower" size="7000 sq. ft." price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>
        <div class="featured-investment-card">
            <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MAtrium.png') }}" alt="M3M Atrium" class="featured-investment-img" heading="M3M Atrium" location="Sector 140, Noida Expressway" rera="UPRERA-2023-0567" status="Pre-Launch" roi="12%" developer="M3M" variety="High Street Retail" size="4800 sq. ft." price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>

        <div class="featured-investment-card">
            <x-featured-investment-section src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}" alt="DLF Cyber City Tower" class="featured-investment-img" heading="DLF Cyber City Tower" location="Noida, Sector 62" rera="UPRERAI2345" status="Ongoing" roi="12%" developer="DLF" variety="Multiplex / Commercial" size="5000 sq. ft." price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>
        <div class="featured-investment-card">
            <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MCorporateHeights.png') }}" alt="M3M Corporate Heights" class="featured-investment-img" heading="M3M Corporate Heights" location="Sector 67, Gurgaon" rera="HRERAGGN20230911" status="Ready to Move" roi="10%" developer="M3M" variety="Commercial Office Tower" size="7000 sq. ft." price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>
        <div class="featured-investment-card">
            <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MAtrium.png') }}" alt="M3M Atrium" class="featured-investment-img" heading="M3M Atrium" location="Sector 140, Noida Expressway" rera="UPRERA-2023-0567" status="Pre-Launch" roi="12%" developer="M3M" variety="High Street Retail" size="4800 sq. ft." price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>
    </div>


        <div class="mt-10">
            <button class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </button>
        </div>

</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />
    

@endsection