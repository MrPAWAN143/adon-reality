@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - About Us</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">

@endsection

@section('content')

<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('about-us') }}">About Us</a></div>
</section>
<section class=" bg-white ">

    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center " style="padding-top: 1rem; padding-bottom: 2rem;">

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
            <h2 class="text-3xl md:text-3xl font-bold mb-6 text-txBlack">Our Journey</h2>
            <div class="space-y-4 text-txBlack text-sm leading-relaxed">
                <p>To deliver thoughtfully designed real estate solutions that elevate everyday living. We strive to go beyond construction by creating spaces that inspire comfort, functionality, and beauty. Our goal is to build lasting relationships through trust, innovation, and excellence in every square foot we create.</p>

                <p>We believe that a home is more than just a structure — it’s a foundation for dreams, growth, and well-being. That’s why each of our projects is carefully planned, sustainably built, and backed by a commitment to transparency and integrity.</p>

                <p>At Adon Realty, we combine visionary architecture, prime locations, and modern amenities to craft communities that enrich lives. Whether you're buying your first home, investing in a high-ROI property, or seeking commercial space, we aim to be your most trusted partner in real estate success.</p>

                <p>Driven by passion and purpose, we continue to redefine urban living — one project at a time.</p>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 px-4 !pb-10">

        <x-choose-adon-reality>

            <div class="flex flex-row-reverse items-center justify-center ">
                <div class="bg-[#f7f2f3] p-2 rounded-xl max-h-[20] shadow-xl">
                    <img src="{{ asset('assets/images/icons/mission.svg')}}" alt="" class="w-12 h-12">
                </div>
                <div class="text-txBlack text-start text-sm order-1">
                    <h3 class="font-bold text-xs">Our Mission</h3>
                    <p class="text-[10px] text-txBlack leading-3">
                        To create smart, sustainable spaces with a focus on quality, innovation, and lasting relationships.
                    </p>
                </div>
            </div>

        </x-choose-adon-reality>
        <x-choose-adon-reality>

            <div class="flex flex-row-reverse items-center justify-center ">
                <div class="bg-[#f7f2f3] p-2 rounded-xl max-h-[20] shadow-2xl">
                    <img src="{{ asset('assets/images/icons/vision.svg')}}" alt="" class="w-12 h-12">
                </div>
                <div class="text-txBlack text-start text-sm order-1">
                    <h3 class="font-bold text-xs">Our Vision</h3>
                    <p class="text-[10px] text-txBlack leading-3">
                        To be a trusted name in real estate by shaping modern, future-ready communities.
                    </p>
                </div>
            </div>

        </x-choose-adon-reality>
    </div>
</section>
<section class="px-4 md:py-8 py-0 bg-white text-center">
    <div class="container max-w-6xl mx-auto">
        <x-heading-subheading heading="What We Offer" subheading="Comprehensive solutions tailored to meet all your real estate needs." headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-8 lg:gap-10 gap-6 mx-auto">
            <!-- Card -->
            <div class="what-we-offer-card md:w-[350px] md:h-[250px] w-[195px] h-[140px]">
                <h3>Property Investment Solutions</h3>
                <p>Maximize your returns with our real estate investment.</p>
                <a href="#" class="what-we-offer-button">Explore Opportunities</a>
            </div>

            <div class="what-we-offer-card md:w-[350px] md:h-[250px] w-[195px] h-[140px]">
                <h3>Portfolio Management</h3>
                <p>Experts maximize profits and minimize risk.</p>
                <a href="#" class="what-we-offer-button">Schedule a Consultation</a>
            </div>

            <div class="what-we-offer-card md:w-[350px] md:h-[250px] w-[195px] h-[140px]">
                <h3>Tax and Legal Advisory</h3>
                <p>Expert tax planning and legal consultation to ensure the compliant.</p>
                <a href="#" class="what-we-offer-button">Get Professional Advice</a>
            </div>

            <div class="what-we-offer-card md:w-[350px] md:h-[250px] w-[195px] h-[140px]">
                <h3>Risk Management & Insurance</h3>
                <p>Mitigate risks by investing in property insurance.</p>
                <a href="#" class="what-we-offer-button">Get Insured</a>
            </div>

            <div class="what-we-offer-card md:w-[350px] md:h-[250px] w-[195px] h-[140px]">
                <h3>Investment Planning for Startups</h3>
                <p>Provide tailored investment solutions to help startups.</p>
                <a href="#" class="what-we-offer-button">Start Your Journey</a>
            </div>

            <div class="what-we-offer-card md:w-[350px] md:h-[250px] w-[195px] h-[140px]">
                <h3>Property Leasing and Sales</h3>
                <p>We help lease and sell residential and commercial properties.</p>
                <a href="#" class="what-we-offer-button">List Your Property</a>
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
        <div class="mt-6">
            <a href="{{ route('development-partners') }}" class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class="py-10 bg-[#ede7e8] ">
    <div class="md:max-w-5xl mx-auto flex md:flex-row items-center gap-2 px-4">

        <!-- Founder Image -->
        <div class="w-[40%] md:w-1/3 flex justify-center md:justify-center">
            <img src="{{ asset('assets/images/allImages/founder.png') }}" alt="Founder" class="rounded-xl md:w-48 w-36 h-36 md:h-48 object-cover shadow-md" />
        </div>

        <!-- Content -->
        <div class=" w-[60%] md:w-2/3 md:pr-16">
            <h3 class="md:text-lg text-[16px] font-bold mb-3 text-gray-900">FOUNDERS DESK</h3>
            <p class="md:text-sm text-[8px] text-gray-700 leading-relaxed">
                At Adon Realty, our mission goes beyond building structures—we build lifestyles. Every project we undertake is a reflection of our dedication to innovation, quality, and trust. We are committed to crafting spaces that truly feel like home and stand the test of time.
            </p>

            <!-- Signature -->
            <div class="text-center mt-3 md:text-right inline-block rotate-[-15deg] md:ml-[250px] md:mt-[20px]">
                <div class="signature  text-emerald-950">
                    <span>Signature</span>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="md:py-10 pt-10 pb-0 bg-white">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Founder Talks -->
        <h2 class="text-center text-[16px] md:text-2xl font-semibold mb-6">Founder Talks</h2>
        <div class="grid grid-cols-2 md:grid-cols-2 gap-2 md:gap-6 mb-10">
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
        <h2 class="text-center text-[16px] md:text-2xl font-semibold mb-8">Meet Our Core Team</h2>
        <div class="max-w-5xl m-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-2">
            <!-- Team Member -->
            <div class="our-core-team ">
                <img src="{{ asset('assets/images/allImages/raj-malhotra.jpg') }}" alt="Raj Malhotra" class="w-full h-48 rounded-lg mb-3 object-cover" />
                <h3 class="font-semibold text-md">Raj Malhotra</h3>
                <p class="text-sm text-txBlack">Chief Executive Officer</p>
                <p class="text-[12px] text-gray-500 mt-1">“Driven by purpose. Building with passion.”</p>
            </div>

            <div class="our-core-team">
                <img src="{{ asset('assets/images/allImages/arjun-mehra.jpg') }}" alt="Arjun Mehra" class="w-full h-48 rounded-lg mb-3 object-cover" />
                <h3 class="font-semibold text-md">Arjun Mehra</h3>
                <p class="text-xs text-txBlack">Chief Operating Officer</p>
                <p class="text-[10px] text-gray-500 mt-1">“Every square foot tells a story.”</p>
            </div>

            <div class="our-core-team">
                <img src="{{ asset('assets/images/allImages/vikram-desai.jpg') }}" alt="Vikram Desai" class="w-full h-48 rounded-lg mb-3 object-cover" />
                <h3 class="font-semibold text-md">Vikram Desai</h3>
                <p class="text-xs text-txBlack">Chief Architect</p>
                <p class="text-[10px] text-gray-500 mt-1">“Design is where life begins.”</p>
            </div>

            <div class="our-core-team">
                <img src="{{ asset('assets/images/allImages/meera-sethi.jpg') }}" alt="Meera Sethi" class="w-full h-48 rounded-lg mb-3 object-cover" />
                <h3 class="font-semibold text-md">Meera Sethi</h3>
                <p class="text-xs text-txBlack">Chief Marketing Officer</p>
                <p class="text-[10px] text-gray-500 mt-1">“Creating connections through spaces.”</p>
            </div>
        </div>



        <div class="md:px-6 py-0 mt-12 bg-white items-center">
            <!-- Featured Awards & Recognitions -->
            <h2 class="text-[16px] md:text-2xl text-center font-bold mb-6">Awards & Recognitions</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-2 md:mb-12">

                <!-- Card 1 -->
                <div class="bg-white md:p-4 p-2 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col md:items-start md:text-start text-center about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/best-commercial.png') }}" alt="Award 1" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Commercial Project 2024</h4>
                </div>

                <!-- Card 2 -->
                <div class="bg-white md:p-4 p-2 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col md:items-start md:text-start text-center about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/sustainable-design.png') }}" alt="Award 2" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Sustainable Design 2024</h4>
                </div>

                <!-- Card 3 -->
                <div class="bg-white md:p-4 p-2 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col md:items-start md:text-start text-center about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/realty-brand.png') }}" alt="Award 3" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Realty Brand 2024</h4>
                </div>

                <!-- Card 4 -->
                <div class="bg-white md:p-4 p-2 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col md:items-start md:text-start text-center about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/realty-brand.png') }}" alt="Award 4" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Commercial Project 2024</h4>
                </div>

            </div>

            <div class="mt-10 justify-center md:flex hidden">
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