@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - About Us</title>
@endsection
@section('styles')

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('about-us') }}">About Us</a></div>
</section>
<section class=" bg-white ">

    <div class="max-w-[1100px] mx-auto px-4 md:px-0 grid grid-cols-1 md:grid-cols-2 gap-8 items-center " style="padding-top: 1rem; padding-bottom: 2rem;">

        <!-- Images Column -->
        <div class="flex justify-between gap-3">
            <div class="w-full rounded-2xl overflow-hidden">
                <img src="{{ asset('assets/images/allImages/about-us-1.jpg') }}" alt="Villa with Pool" class="w-full h-full object-cover rounded-2xl" />
            </div>
            <div class="flex flex-col gap-4 w-full">
                <div class="rounded-2xl overflow-hidden">
                    <img src="{{ asset('assets/images/allImages/about-us-2.jpg') }}" alt="Modern Home on Cliff" class="w-full h-full object-cover rounded-2xl" />
                </div>
                <div class="rounded-2xl overflow-hidden">
                    <img src="{{ asset('assets/images/allImages/about-us-3.jpg') }}" alt="Luxury Home with Garden" class="w-full h-full object-cover rounded-2xl" />
                </div>
            </div>

        </div>

        <!-- Text Column -->
        <div>
            <h2 class="text-[16px] md:text-[24px] mb-3 text-center md:text-left font-semibold md:mb-6 text-txBlack">Our Journey</h2>
            <div class="space-y-4 text-txBlack text-[10px] md:text-[14px] leading-relaxed ">
                <p>To deliver thoughtfully designed real estate solutions that elevate everyday living. We strive to go beyond construction by creating spaces that inspire comfort, functionality, and beauty. Our goal is to build lasting relationships through trust, innovation, and excellence in every square foot we create.</p>

                <p>We believe that a home is more than just a structure — it’s a foundation for dreams, growth, and well-being. That’s why each of our projects is carefully planned, sustainably built, and backed by a commitment to transparency and integrity.</p>

                <p>At Adon Realty, we combine visionary architecture, prime locations, and modern amenities to craft communities that enrich lives. Whether you're buying your first home, investing in a high-ROI property, or seeking commercial space, we aim to be your most trusted partner in real estate success.</p>

                <p>Driven by passion and purpose, we continue to redefine urban living — one project at a time.</p>
            </div>
        </div>
    </div>

    <div class="max-w-[1050px] mx-auto grid grid-cols-2 md:grid-cols-2 md:gap-4 gap-2 md:px-0 px-4 !pb-4 items-center place-items-center">

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/mission.svg')}}" alt="" class="md:w-10 md:h-10 w-8 h-8">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-16">
                    <h3 class="font-bold text-[10px] md:text-[16px] ml-1">Our Mission</h3>
                    <p class="text-[8px] md:text-[12px]  text-txBlack leading-3 ml-1">
                        To create smart, sustainable spaces with a focus on quality
                    </p>
                </div>
            </div>

        </x-choose-adon-reality>
        <x-choose-adon-reality>

            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/vision.svg')}}" alt="" class="md:w-10 md:h-10 w-8 h-8">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-20">
                    <h3 class="font-bold text-[10px] md:text-[16px] ml-1">Our Vision</h3>
                    <p class="text-[8px] md:text-[12px]  text-txBlack leading-3 ml-1">
                        To be a trusted name in real estate by shaping modern.
                    </p>
                </div>
            </div>

        </x-choose-adon-reality>
    </div>
</section>

<section class="px-4 md:px-0 md:py-4 py-1 bg-white text-center">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="What We Offer" subheading="Comprehensive solutions tailored to meet all your real estate needs." headingClass="heading" subHeadingClass="subheading px-6" />
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-3 mx-auto">
            <!-- Card -->
            <div class="what-we-offer-card ">
                <h3>Property Investment Solutions</h3>
                <p>Maximize your returns with our real estate investment.</p>
                <a href="{{route('contact')}}" class="what-we-offer-button">Explore Opportunities</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Portfolio Management</h3>
                <p>Experts maximize profits and minimize risk.</p>
                <a href="{{route('contact')}}" class="what-we-offer-button">Schedule a Consultation</a>
            </div>

            <div class="what-we-offer-card ">
                <h3>Tax and Legal Advisory</h3>
                <p>Expert tax planning and legal consultation to ensure the compliant.</p>
                <a href="{{route('contact')}}" class="what-we-offer-button">Get Professional Advice</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Risk Management & Insurance</h3>
                <p>Mitigate risks by investing in property insurance.</p>
                <a href="{{route('contact')}}" class="what-we-offer-button">Get Insured</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Investment Planning for Startups</h3>
                <p>Provide tailored investment solutions to help startups.</p>
                <a href="{{route('contact')}}" class="what-we-offer-button">Start Your Journey</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Property Leasing and Sales</h3>
                <p>We help lease and sell residential and commercial properties.</p>
                <a href="{{route('contact')}}" class="what-we-offer-button">List Your Property</a>
            </div>
        </div>
    </div>
</section>



<section class="px-4 py-8 bg-white text-center hidden md:block">
    <div class="container max-w-6xl mx-auto">
        <x-heading-subheading heading="Our Development Partners" subheading="Collaborating with renowned names in real estate development." headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">

            @foreach ($developmentPartner as $partner)
            <x-developer-partner-card partnerLogo="{{ asset($partner->logo) }}" url="{{ route('development-partners.show',  $partner->slug) }}" alt="{{ $partner->developer_name }}" heading="{{ $partner->developer_name }}" description="{{ $partner->tags }}" projectsPartnered="{{ $partner->total_projects }}" presence="{{ implode(', ', $partner->operating_cities ?? []) }}" />
            @endforeach

        </div>

        <div class="mt-6">
            <a href="{{ route('development-partners') }}" class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class=" py-8 bg-white text-center md:hidden block">
    <div class="">
        <x-heading-subheading heading="Our Development Partners" subheading="Collaborating with renowned names in real estate development." headingClass="heading" subHeadingClass="subheading" />
        <div class="project-slider profist">
            @foreach ($developmentPartner as $partner)
            <x-developer-partner-card partnerLogo="{{ asset($partner->logo) }}" developerButtonClass="!text-primary !hover:text-white !hover:bg-primary  !bg-white !border-2 !border-primary " url="{{ route('development-partners.show',  $partner->slug) }}" alt="{{ $partner->developer_name }}" heading="{{ $partner->developer_name }}" description="{{ $partner->tags }}" projectsPartnered="{{ $partner->total_projects }}" presence="{{ implode(', ', $partner->operating_cities ?? []) }}" />
            @endforeach
        </div>
        <div class="mt-2">
            <a href="{{ route('development-partners') }}" class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class="md:py-10 py-5 bg-[#ede7e8] ">
    <div class="md:max-w-5xl mx-auto flex md:flex-row items-center justify-center gap-2 px-4">

        <!-- Founder Image -->
        <div class="w-[40%] md:w-1/3 flex justify-end items-center">
            <img src="{{ asset('assets/images/allImages/founder.png') }}" alt="Founder" class="rounded-xl md:w-48 w-36 h-36 md:h-48 object-cover shadow-md" />
        </div>

        <!-- Content -->
        <div class=" w-[60%] md:w-2/3 md:pr-16 md:ml-5 ml-3 items-center">
            <h3 class="md:text-[16px] text-[12px] font-bold md:mb-3 mb-1 text-gray-900">FOUNDERS DESK</h3>
            <p class="md:text-[12px] text-[8px] text-gray-700 leading-relaxed">
                At Adon Realty, our mission goes beyond building structures—we build lifestyles. Every project we undertake is a reflection of our dedication to innovation, quality, and trust. We are committed to crafting spaces that truly feel like home and stand the test of time.
            </p>

            <!-- Signature -->
            <div class="text-center mt-1 md:text-right inline-block rotate-[-8deg] ml-[50px] md:ml-[250px] md:mt-[20px]">
                <div class="signature  text-emerald-950">
                    <img src="{{ asset('assets/images/icons/signature.png') }}" alt="signature" class="w-8 h-auto object-contain">
                </div>
            </div>
        </div>

    </div>
</section>

<section class="md:py-10 md:pt-10 pt-6 pb-0 bg-white">
    <div class="max-w-5xl mx-auto px-4">

        <!-- Founder Talks -->
        <h2 class="text-center text-[16px] md:text-2xl font-semibold md:mb-4 mb-3">Founder Talks</h2>
        <div class="grid grid-cols-2 md:grid-cols-2 gap-2 md:gap-6 md:mb-6 mb-6">
            <!-- Video 1 -->
            <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('assets/images/allImages/raj-talk.jpg') }}" alt="Founder Talk 1" class="w-full md:h-60 h-24 object-cover" />
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-4.586-2.65A1 1 0 009 9.35v5.3a1 1 0 001.166.982l4.586-2.65a1 1 0 000-1.764z" />
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('assets/images/allImages/meeting-room.jpg') }}" alt="Founder Talk 2" class="w-full md:h-60 h-24 object-cover" />
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-4.586-2.65A1 1 0 009 9.35v5.3a1 1 0 001.166.982l4.586-2.65a1 1 0 000-1.764z" />
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Meet Our Core Team -->
        <h2 class="text-center text-[16px] md:text-2xl font-semibold md:mt-8 my-4">Meet Our Core Team</h2>
        <div class="max-w-5xl m-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-2">
            <!-- Team Member -->
            @if($teamMembers && $teamMembers->count() > 0)
            @foreach ($teamMembers as $member)
            <div class="our-core-team ">
                <img src="{{ asset($member->photo) }}" alt="{{ $member->full_name }}" class="w-full h-44 rounded-lg mb-1 object-cover" />
                <h3 class="">{{ $member->full_name }}</h3>
                <p class="text-sm text-txBlack ">{{ $member->position }}</p>
                <!-- <p class="text-[10px] text-gray-500 mt-1">{{ $member->description }}</p> -->
            </div>
            @endforeach
            @else
            <div class="text-center text-txBlack md:text-[16px] text-[12px] font-light">
                No team members available.
            </div>
            @endif
        </div>

        <div class="md:px-6 py-8 md:mt-8 bg-white items-center">
            <!-- Featured Awards & Recognitions -->
            <h2 class="text-[16px] md:text-2xl text-center font-bold mb-6">Awards & Recognitions</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-2 md:mb-12">
                @if($awards->count() > 0)
                @foreach($awards as $award)
                <x-awards
                    image="{{ asset($award->featured_image) }}"
                    alt="{{ $award->title }}"
                    class="featured-investment-img"
                    newsAndPrCard="arawds-card about"
                    newsAndPrCardImgDiv="arwards-card-img-div about"
                    title="{{ $award->title }}" />
                @endforeach
                @else
                <p class="text-center text-gray-500">No awards found.</p>
                @endif
            </div>

            <div class="md:mt-4 justify-center md:flex hidden">
                <a class="view-more-button inline-flex items-center justify-center" href="{{ route('awards-and-recognitions') }}">
                    View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
                </a>
            </div>
        </div>
    </div>
</section>



<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />




@endsection


@section('scripts')
<script type="module">
    $(document).ready(function() {

        $(document).ready(function() {
            $('.project-slider').slick({
                slidesToShow: 1.2,
                slidesToScroll: 1,
                infinite: false,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768, // sm only
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1,
                        centerMode: false,
                        variableWidth: false,
                        autoplay: true,
                        autoplaySpeed: 5000,
                        dots: false,
                    }
                }]
            });


        });


    });
</script>
@endsection