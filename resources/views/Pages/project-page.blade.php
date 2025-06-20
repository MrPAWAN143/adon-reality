@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Project</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
@endsection
@section('content')
<section class="px-4  bg-white pb-8">
    <div class="container max-w-7xl mx-auto">
        <x-page-path class="path" path="Home > Project" />
        <x-heading-subheading heading="Explore project that you need" subheading="Filter,short,and find the perfect property just the way you want" headingClass="heading text-center " subHeadingClass="subheading mb-2" />

        <div class="max-w-3xl mx-auto px-4 py-4 pb-8">
            <!-- Filters -->
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <select class="hero-section-select ">
                    <option>Location</option>
                    <option>Architecture</option>
                    <option>Interior</option>
                    <option>Exterior</option>
                </select>

                <select class="hero-section-select">
                    <option>Project</option>
                    <option>2025</option>
                    <option>2024</option>
                    <option>2023</option>
                </select>

                <select class="hero-section-select">
                    <option>Status</option>
                    <option>Modern</option>
                    <option>Luxury</option>
                    <option>Minimal</option>
                </select>

                <select class="hero-section-select">
                    <option>Budget</option>
                    <option>Modern</option>
                    <option>Luxury</option>
                    <option>Minimal</option>
                </select>
            </div>

            <div class="mb-6 flex gap-5 items-center justify-between mt-4">
                <div class="flex w-full items-center rounded-2xl border border-gray px-4 py-1 shadow-sm">
                    <x-zondicon-search class="w-6 h-6 " />
                    <input type="text" placeholder="Search blog articles..."
                        class="w-full outline-none text-sm bg-transparent border-none focus:border-none focus:outline-none" />
                </div>

                <select class="hero-section-select w-40 font-normal">
                    <option>Sort By</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest</option>
                </select>


            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">
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

    </div>

</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />
    
@endsection

@section('scripts')

@endsection