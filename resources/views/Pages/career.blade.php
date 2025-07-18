@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Careers</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
@endsection
@section('content')
<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('career') }}" class="ml-[-5px]">Career</a></div>
</section>
<x-banner-section class="px-4 relative h-[75vh] max-h-[75vh]" image="{{ asset('assets/images/bannerImages/service-page-banner.webp') }}" title="Join Our Team at ADON" subtitle="Passionate about making a difference? Explore your future with us." buttonText="View Opportunities" buttonLink="#" buttonClass="banner-button" />

<section class="py-10 bg-white text-center mx-auto">
    <h2 class="text-2xl md:text-2xl font-bold mb-8">Our Core Services</h2>


    <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4">
        <x-legacy-card class="legacy-card flex flex-col items-center justify-center gap-3 " imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/collaboration.svg') }}" description="Collaboration" descriptionClass="!text-lg"/>
        <x-legacy-card class="legacy-card flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/innovation.svg') }}" description="Innovation" descriptionClass="!text-lg" />
        <x-legacy-card class="legacy-card flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/work-life-balance.svg') }}" description="Work-Life Balance" descriptionClass="!text-lg" />
        <x-legacy-card class="legacy-card flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/growth.svg') }}" description="Growth" descriptionClass="!text-lg"/>
    </div>
</section>


<section class="py-8 pt-6 px-4">
  <h2 class="text-2xl font-bold text-center mb-8">Open Roles</h2>

  <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4">
    
    <!-- Role Card -->
    <div class="bg-gradient-to-b from-[#f4f1f1] to-white py-4 px-4 rounded-xl shadow hover:shadow-md transition border hover:border-primary">
      <h3 class="font-bold text-lg">Sales Executive</h3>
      <p class="font-semibold text-sm text-gray mb-2">Gurugram</p>
      <p class="text-xs text-gray-700 mb-4">Drive property sales through client engagement and market knowledge.</p>
      <button class="bg-primary hover:bg-white border-2 hover:text-primary hover:border-primary text-white text-sm px-6 py-2 rounded-2xl w-full transition duration-300">View More</button>
    </div>

    <!-- Repeat Cards -->
    <div class="bg-gradient-to-b from-[#f4f1f1] to-white py-4 px-4 rounded-xl shadow hover:shadow-md transition border   hover:border-primary">
      <h3 class="font-bold text-lg">Site Supervisor</h3>
      <p class="font-semibold text-sm text-gray mb-2">Delhi</p>
      <p class="text-xs text-gray mb-4">Oversee construction sites ensuring quality, timelines, and safety standards.</p>
      <button class="bg-primary hover:bg-white border-2 hover:text-primary hover:border-primary text-white text-sm px-6 py-2 rounded-2xl w-full transition duration-300">View More</button>
    </div>


    <div class="bg-gradient-to-b from-[#f4f1f1] to-white py-4 px-4 rounded-xl shadow hover:shadow-md transition border  hover:border-primary">
      <h3 class="font-bold text-lg">Property Analyst</h3>
      <p class="font-semibold text-sm text-gray mb-2">Gurugram</p>
      <p class="text-xs text-gray mb-4">Evaluate market trends, ROI, and investment opportunities with insights.</p>
      <button class="bg-primary hover:bg-white border-2 hover:text-primary hover:border-primary text-white text-sm px-6 py-2 rounded-2xl w-full transition duration-300">View More</button>
    </div>

    <div class="bg-gradient-to-b from-[#f4f1f1] to-white py-4 px-4 rounded-xl shadow hover:shadow-md transition border   hover:border-primary">
      <h3 class="font-bold text-lg">Legal Advisor</h3>
      <p class="font-semibold text-sm text-gray mb-2">Noida</p>
      <p class="text-xs text-gray mb-4">Handle legal documentation, compliance, and property-related legal processes.</p>
      <button class="bg-primary hover:bg-white border-2 hover:text-primary hover:border-primary text-white text-sm px-6 py-2 rounded-2xl w-full transition duration-300">View More</button>
    </div>

  </div>
</section>

<section class="px-4  bg-white">
    <div class="container max-w-5xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 pb-3 pt-10 gap-8">

            <!-- Left Navigation -->
            <div class="space-y-4 text-sm font-medium text-gray-600">
                <div class="text-txBlack font-bold text-lg">Job Description</div>
              
            </div>

            <!-- Right FAQ Accordion -->
            <div class="md:col-span-2 space-y-6">

                <!-- 1 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                          Role Summary
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We focus on long-term value creation through strategic location selection, sustainable construction, and data-driven decision-making to ensure stable returns and portfolio growth.
                    </div>
                </button>

                <!-- 2 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                           Responsibilities
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We analyze market trends, location demand, future infrastructure plans, and ROI forecasts to identify high-growth investment opportunities with low risk and strong potential.
                    </div>
                </button>

                <!-- 3 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            Requirements
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        Yes, we offer flexible partnership models for individual investors, groups, or institutions looking to invest in real estate with trusted guidance and transparent processes.
                    </div>
                </button>

                <!-- 4 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            Perks & Benefits
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        Returns generally start within 12–24 months, depending on the project type, with rental income or resale value offering steady or lump-sum gains.
                    </div>
                </button>

                <!-- 5 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            Location & Department
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We maintain a balanced strategy targeting strong rental yields for short-term income and appreciating assets for long-term capital growth and portfolio stability.
                    </div>
                </button>

                <button class="bg-primary text-white py-1 px-16 rounded-full hover:border-primary border hover:text-primary hover:bg-white transition duration-300"> Apply Now</button>
            </div>

            
      

        </div>
    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection