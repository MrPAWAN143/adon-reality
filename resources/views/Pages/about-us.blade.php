@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - About Us</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">

@endsection

@section('content')
<section class=" bg-white ">
    <div class="container max-w-6xl mx-auto">
        <x-page-path class="path" path="Home > About Us" />
    </div>

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

    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 px-4 !pb-10">

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

    <div class="m-auto">
        <h2 class="text-3xl md:text-3xl font-bold text-center text-txBlack mb-8">Services We Offer</h2>

        <div class="m-auto max-w-5xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 ">

            <!-- Card -->
            <div class="what-we-offer-card !px-4 !py-4 text-center">
                <h3 class="!text-[20px] ">Property Investment Solutions</h3>
                <p>Maximize your returns with our real estate investment.</p>
                <a href="#" class="what-we-offer-button">Explore Opportunities</a>
            </div>

            <div class="what-we-offer-card !px-4 !py-4 text-center">
                <h3 class="!text-[20px]">Portfolio Management</h3>
                <p>Experts maximize profits and minimize risk.</p>
                <a href="#" class="what-we-offer-button">Schedule a Consultation</a>
            </div>

            <div class="what-we-offer-card !px-4 !py-4 text-center">
                <h3 class="!text-[20px]">Tax and Legal Advisory</h3>
                <p>Expert tax planning and legal consultation to ensure the compliant.</p>
                <a href="#" class="what-we-offer-button">Get Professional Advice</a>
            </div>

            <div class="what-we-offer-card !px-4 !py-4 text-center">
                <h3 class="!text-[20px]">Risk Management & Insurance</h3>
                <p>Mitigate risks by investing in property insurance.</p>
                <a href="#" class="what-we-offer-button">Get Insured</a>
            </div>

            <div class="what-we-offer-card !px-4 !py-4 text-center">
                <h3 class="!text-[20px]">Investment Planning for Startups</h3>
                <p>Provide tailored investment solutions to help startups.</p>
                <a href="#" class="what-we-offer-button">Start Your Journey</a>
            </div>

            <div class="what-we-offer-card !px-4 !py-4 text-center">
                <h3 class="!text-[20px]">Property Leasing and Sales</h3>
                <p>We help lease and sell residential and commercial properties.</p>
                <a href="#" class="what-we-offer-button">List Your Property</a>
            </div>
        </div>
    </div>
</section>

<section class="px-4 py-8 bg-white text-center">
    <div class="container max-w-6xl mx-auto">
        <x-heading-subheading heading="Our Development Partners" subheading="Collaborating with renowned names in real estate development." headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">


            <x-developer-partner-card partnerLogo="{{ asset('assets/images/partnersLogo/dlf.png') }}" alt="DLF Limited" heading="DLF Limited" description="Building India" projectsPartnered="18" presence="Gurgaon, Noida, Chennai, Hyderabad" />

            <!-- Partner 2 -->
            <x-developer-partner-card partnerLogo="{{ asset('assets/images/partnersLogo/raheja.png') }}" alt="Raheja Develop" heading="Raheja Develop" description="Committed to Excellence" projectsPartnered="10" presence="Gurgaon, Delhi, Noida" />

            <!-- Partner 3 -->
            <x-developer-partner-card partnerLogo="{{ asset('assets/images/partnersLogo/m3m.png') }}" alt="M3M India" heading="M3M India" description="Magnificence in the Trinity of Men & Materials" projectsPartnered="8" presence="Gurgaon, Noida" />
        </div>

        <div class="mt-10">
            <button class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </button>
        </div>
    </div>
</section>

<section class="py-10 bg-[#ede7e8] ">
    <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-2 px-4">

        <!-- Founder Image -->
        <div class="w-full md:w-1/3 flex justify-center md:justify-center">
            <img src="{{ asset('assets/images/allImages/founder.png') }}" alt="Founder" class="rounded-xl w-48 h-48 object-cover shadow-md" />
        </div>

        <!-- Content -->
        <div class="w-full md:w-2/3 pr-16">
            <h3 class="text-lg font-bold mb-3 text-gray-900">FOUNDERS DESK</h3>
            <p class="text-sm text-gray-700 leading-relaxed">
                At Adon Realty, our mission goes beyond building structures—we build lifestyles. Every project we undertake is a reflection of our dedication to innovation, quality, and trust. We are committed to crafting spaces that truly feel like home and stand the test of time.
            </p>

            <!-- Signature -->
            <div class=" text-right inline-block rotate-[-15deg] ml-[250px] mt-[20px]">
                <div class="signature  text-emerald-950">
                    <span>Signature</span>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="py-10 bg-white">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Founder Talks -->
        <h2 class="text-center text-2xl font-semibold mb-6">Founder Talks</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <!-- Video 1 -->
            <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('assets/images/allImages/raj-talk.jpg') }}" alt="Founder Talk 1" class="w-full h-60 object-cover" />
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-4.586-2.65A1 1 0 009 9.35v5.3a1 1 0 001.166.982l4.586-2.65a1 1 0 000-1.764z" />
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('assets/images/allImages/meeting-room.jpg') }}" alt="Founder Talk 2" class="w-full h-60 object-cover" />
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-4.586-2.65A1 1 0 009 9.35v5.3a1 1 0 001.166.982l4.586-2.65a1 1 0 000-1.764z" />
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Meet Our Core allImages -->
        <h2 class="text-center text-2xl font-semibold mb-8">Meet Our Core Team</h2>
        <div class="max-w-5xl m-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- allImages Member -->
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



        <div class="px-6 py-0 mt-12 bg-white items-center">
            <!-- Featured Awards & Recognitions -->
            <h2 class="text-2xl text-center font-bold mb-6">Awards & Recognitions</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6 mb-12">

                <!-- Card 1 -->
                <div class="bg-white p-4 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col items-start text-start about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/best-commercial.png') }}" alt="Award 1" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Commercial Project 2024</h4>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-4 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col items-start text-start about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/sustainable-design.png') }}" alt="Award 2" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Sustainable Design 2024</h4>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-4 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col items-start text-start about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/realty-brand.png') }}" alt="Award 3" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Realty Brand 2024</h4>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-4 rounded-2xl shadow-md hover:shadow-lg transition flex flex-col items-start text-start about-us-awards-card">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/awards/realty-brand.png') }}" alt="Award 4" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                    <h4 class="text-sm font-bold text-txBlack">Best Commercial Project 2024</h4>
                </div>

            </div>

            <div class="mt-10">
                <button class="view-more-button ">
                    View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
                </button>
            </div>
        </div>
    </div>
</section>



<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />




@endsection