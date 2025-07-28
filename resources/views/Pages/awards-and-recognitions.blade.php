@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Awards and Recognitions</title>
@endsection
@section('styles')
@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('awards-and-recognitions') }}" class="ml-[-5px]">Awards & Recognitions</a></div>
</section>
<section class="md:px-0 mb-8 px-4 md:max-w-[1100px] w-full mx-auto bg-white">
    <div>
        <x-heading-subheading heading="Awards & Recognitions" subheading="Celebrating Our Journey of Excellence in Real Estate" headingClass="heading awards text-center !text-primary" subHeadingClass="subheading text-md mb-4" />
    </div>
    <div class="md:max-w-4xl w-full m-auto mt-0">
        <p class="text-center font-normal md:text-[14px] text-[10px] tracking-tight">Over the years, Adon Realty has been recognized for our commitment to innovation, sustainability, and excellence. These accolades reflect the trust of our clients and our team’s unwavering dedication to redefining real estate experiences.</p>
    </div>


    <div class="md:max-w-lg w-full md:px-0 px-4 mx-auto md:pb-5 mt-4">
        <!-- Filters -->
        <div class="flex justify-center m-auto">
            <select class="border-2 border-primary bg-white text-txBlack-gray rounded-full px-4 m-auto md:py-2 py-1 w-36 focus:outline-none focus:ring-2 focus:ring-primary transition duration-300">
                <option>Year</option>
                <option>Architecture</option>
                <option>Interior</option>
                <option>Exterior</option>
            </select>

        </div>

        <div class="flex flex-row items-center justify-between w-full md:max-w-3xl bg-white rounded-2xl px-1 py-0 mt-4 border border-primary shadow-md">

            <div class="flex w-full items-center rounded-2xl px-2 md:py-1 ">
                <x-zondicon-search class="md:w-6 w-4 md:h-6 h-4 text-gray" />
                <input type="text" placeholder="Search Awards & Recognitions..."
                    class="w-full placeholder:text-[10px] md:placeholder:text-[14px] text-[10px] md:text-[14px] outline-none bg-transparent border-none focus:border-none focus:outline-none" />
            </div>

            <!-- Button -->
            <button class="bg-primary md:text-[14px] text-[12px] border-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-medium md:px-8 px-4 md:py-1.5 py-1  rounded-full md:ml-2 transition duration-300">
                Search
            </button>
        </div>

    </div>

    <div class=" py-0 md:mt-4 bg-white">
        <!-- Featured Awards & Recognitions -->
        <h2 class="md:text-2xl font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 md:mt-0 mt-6">Featured Awards & Recognitions</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
            @if($awards->where('is_featured', 1)->count() > 0)
            @foreach($awards->where('is_featured', 1) as $award)
            <x-awards
                image="{{ asset($award->featured_image) }}"
                alt="{{ $award->title }}"
                class="featured-investment-img"
                newsAndPrCard="arawds-card"
                newsAndPrCardImgDiv="arwards-card-img-div"
                title="{{ $award->title }}"
                by="{{ $award->by }}"
                description="{{ $award->short_description }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No awards found.</p>
            @endif


        </div>

        <!-- Past Awards & Recognitions -->
        <h2 class="md:text-[24px] font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 mt-10">Past Awards & Recognitions</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
            @if( $awards->where('is_featured', 0)->count() > 0)
            @foreach($awards->where('is_featured', 0) as $award)
            <x-awards
                image="{{ asset($award->featured_image) }}"
                alt="{{ $award->title }}"
                class="featured-investment-img"
                newsAndPrCard="arawds-card"
                newsAndPrCardImgDiv="arwards-card-img-div"
                title="{{ $award->title }}"
                by="{{ $award->by }}"
                description="{{ $award->short_description }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No awards found.</p>
            @endif
        </div>
    </div>




    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />
@endsection