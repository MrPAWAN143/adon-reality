@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Project</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
@endsection
@section('content')
<section class="px-4 max-w-6xl mx-auto bg-white pb-8">
    <div class="container ">
        <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> > <a href="{{ route('projects') }}">Projects</a></div>
        <x-heading-subheading heading="Explore project that you need" subheading="Filter,short,and find the perfect property just the way you want" headingClass="heading text-center m-heading" subHeadingClass="subheading m-subheading mb-2" />

        <div class="max-w-3xl mx-auto px-4 py-4 md:pb-8 pb-3">
            <!-- Filters -->
            <div class="grid md:grid-cols-4 grid-cols-4 md:gap-4 gap-2">
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

            <div class="md:mb-6 mb-2 flex md:gap-5 gap-2 items-center justify-between mt-4">
                <div class="flex w-full items-center rounded-xl border border-bgSecondary px-4 md:py-1 py-0 shadow-sm">
                    <x-zondicon-search class="md:w-6 md:h-6 h-4 w-4 text-bgSecondary" />
                    <input type="text" placeholder="Search Property By Name Location..."
                        class="w-full outline-none placeholder:text-bgSecondary md:placeholder:text-sm placeholder:text-xs text-sm bg-transparent border-none focus:border-none focus:outline-none py-1 md:py-2" />
                </div>

                <select class="project-page-filter-btn filter md:w-40 w-24 !rounded-[20px] font-normal">
                    <option>Sort By</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest</option>
                </select>


            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-3 mx-auto">
           @foreach ($properties as $property)
          <div class="featured-investment-card m-featured-page-card">
                    <x-featured-investment-section featuredCardClass="project-page-image-dev" src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" imageClass="project-page-image" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" url="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                <x-button class="featured-investment-button !py-2" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
            </div>

              @endforeach

        </div>
    </div>
</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection

@section('scripts')

@endsection