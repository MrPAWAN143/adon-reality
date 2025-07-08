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
           @foreach ($properties as $property)
          <div class="featured-investment-card">
                    <x-featured-investment-section src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" class="featured-investment-img" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" url="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                <x-button class="featured-investment-button" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
            </div>

              @endforeach

        </div>

</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection

@section('scripts')

@endsection