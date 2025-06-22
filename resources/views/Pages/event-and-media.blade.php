@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Events and Media</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">


@endsection

@section('content')
<section class="px-4 py-8 sm:py-2 bg-white">
    <div class="container max-w-7xl mx-auto">
        <x-page-path class="path" path="Home > Events & Media" />
        <x-heading-subheading heading="Events and Media" subheading="Discover the moments that define XYZ’s journey" headingClass="heading text-center" subHeadingClass="subheading text-sm mb-4" />

        <div class="px-6 py-0 bg-white">
            <!-- Featured Event Section -->
            <h2 class="text-2xl font-bold mb-6">Featured Event</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
                <x-event image="{{ asset('assets/images/events/investor-connect.png') }}" alt="Investor Connect 2025" class="featured-investment-img" title="Investor Connect 2025" dateTime="June 10, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/property-power-meet.png') }}" alt="Property Power Meet" class="featured-investment-img" title="Property Power Meet" dateTime="June 18, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/realty-roundtable.png') }}" alt="The Realty Roundtable" class="featured-investment-img" title="The Realty Roundtable" dateTime="June 20, 2025" buttonText="Watch" />
            </div>

            <!-- Past Event Section -->
            <h2 class="text-2xl font-bold mb-6">Past Event</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <x-event image="{{ asset('assets/images/events/skyline-launch.png') }}" alt="Grand Launch of Skyline Residences" class="featured-investment-img" title="Grand Launch of Skyline Residences" dateTime="February 10, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/women-in-real-estate.png') }}" alt="Women in Real Estate: Breaking Barriers" class="featured-investment-img" title="Women in Real Estate: Breaking Barriers" dateTime="January 26, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/annual-meet.png') }}" alt="Adon Realty Annual Meet 2024" class="featured-investment-img" title="Adon Realty Annual Meet 2024" dateTime="December 10, 2024" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/csr-drive.png') }}" alt="CSR Drive: Homes of Hope Initiative" class="featured-investment-img" title="CSR Drive: Homes of Hope Initiative" dateTime="November 07, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/investment-seminar.png') }}" alt="Real Estate Investment Seminar" class="featured-investment-img" title="Real Estate Investment Seminar" dateTime="October 10, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/tech-summit.png') }}" alt="Tech in Real Estate – 2024 Summit" class="featured-investment-img" title="Tech in Real Estate – 2024 Summit" dateTime="September 10, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/celebration-gala.png') }}" alt="Adon’s 10+ Year Celebration Gala" class="featured-investment-img" title="Adon’s 10+ Year Celebration Gala" dateTime="August 10, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/skyline-launch-2.png') }}" alt="Grand Launch of Skyline Residences" class="featured-investment-img" title="Grand Launch of Skyline Residences" dateTime="July 16, 2025" buttonText="Watch" />
                <x-event image="{{ asset('assets/images/events/future-living.png') }}" alt="Future Living Expo 2025" class="featured-investment-img" title="Future Living Expo 2025" dateTime="May 10, 2025" buttonText="Watch" />
            </div>
        </div>




    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />
@endsection