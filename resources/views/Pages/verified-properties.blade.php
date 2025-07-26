@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Verified Properties</title>
@endsection
@section('styles')

@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('verified-properties') }}">Verified Properties</a> </div>
</section>
<x-banner-section class="px-4 relative h-[20vh] md:max-h-[45vh] md:h-[45vh]" mobileBanner="{{ asset('assets/images/bannerImages/verified-properties-banner.png') }}" image="{{ asset('assets/images/bannerImages/verified-properties-banner.png') }}" title="Verified Properties You Can Trust" subtitle="Every property listed here has been carefully verified to meet our highest standards of transparency and legal compliance." />

<section class="py-8 md:pb-8 pb-5 bg-white text-center mx-auto md:max-w-[1100px]">
    <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center">A Legacy of Trust</h2>

    <div class="flex flex-wrap md:justify-between justify-center items-center gap-6 px-4">
        <div class="w-[45%] md:w-[30%] max-w-xs">
            <x-legacy-card class="legacy-card" title="17+" description="Years in the Real Estate Market" />
        </div>
        <div class=" w-[45%] md:w-[30%] max-w-xs ">
            <x-legacy-card class="legacy-card" title="2000+" description="Happy Investors" />
        </div>
        <div class="w-auto md:w-[30%] max-w-xs flex justify-center">
            <x-legacy-card class="legacy-card" title="₹1500 Cr+" description="Investment Managed" />
        </div>
    </div>
</section>


<section class="py-4 bg-white text-center max-w-[1100px] mx-auto px-4 md:px-0">
    <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center">Why Choose Adon Realty</h2>

    
    <div class=" mx-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-4 justify-between items-center">



        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <x-zondicon-location class="w-6 h-6 text-primary" />
                </div>
                <div class="text-txBlack text-start order-1 md:pr-32 pr-20">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Prime<br>Locations</h3>
                </div>
            </div>

        </x-choose-adon-reality>


        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/pre-aproove-area.svg') }}" alt="Pre-approved Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-32 pr-20">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">High ROI<br>properties</h3>
                </div>
            </div>

        </x-choose-adon-reality>


        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/experienced-advisory.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Experience <br>dAdvisory Team</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/secure-verified-properties.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Secure & Verified<br>Properties</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/personalised-investment-planning.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Personalised Investment Planning</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/pre-aproove-area.svg') }}" alt="Pre-approved Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Pre-approved,<br>RERA-Compliant Projects</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/transparent-dealings.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-20 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Transparent<br>Dealings</h3>
                </div>
            </div>

        </x-choose-adon-reality>


        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/personalised-investment-planning.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-20 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Complete<br>Legal Support</h3>
                </div>
            </div>

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