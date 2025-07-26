@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Careers</title>
@endsection
@section('styles')

@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('career') }}" class="ml-[-5px]">Career</a></div>
</section>
<x-banner-section class="px-4 h-[25vh] md:h-[55vh] md:max-h-[45vh]" buttonClass="banner-button" mobileBanner="{{ asset('assets/images/bannerImages/career-banner.jpg') }}" image="{{ asset('assets/images/bannerImages/career-banner.jpg') }}" title="Join Our Team at ADON" subtitle="Passionate about making a difference? Explore your future with us." buttonText="View Opportunities" buttonLink="#" />

<section class="py-10 md:pb-8 pb-5 bg-white text-center mx-auto">
    <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center ">Our Core Services</h2>


    <div class="max-w-[1100px] mx-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-4 md:px-0 px-4 place-items-center">
        <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 " imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/collaboration.svg') }}" description="Collaboration" descriptionClass="!text-lg" />
        <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/innovation.svg') }}" description="Innovation" descriptionClass="!text-lg" />
        <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/work-life-balance.svg') }}" description="Work-Life Balance" descriptionClass="!text-lg" />
        <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/growth.svg') }}" description="Growth" descriptionClass="!text-lg" />
    </div>
</section>


<section class="md:px-4 px-0 py-4 bg-white">
  <div class="container max-w-[1100px] mx-auto px-4 text-center">

    <x-heading-subheading heading="Employee Testimonials" subheading=" " headingClass="heading text-center" subHeadingClass="subheading text-center !mb-2" />
  </div>


  <div class="testimonial-slider max-w-5xl mx-auto px-3 !flex !gap-5 justify-center items-center overflow-x-auto">
    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
            <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
          </div>
        </div>
      </div>
    </div>

    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
            <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
          </div>
        </div>
      </div>
    </div>
    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
            <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
          </div>
        </div>
      </div>
    </div>

    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
            <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
          </div>
        </div>
      </div>
    </div>

    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
            <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
          </div>
        </div>
      </div>
    </div>

    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
        <div class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
            <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>


<section class="">
    <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center ">Open Roles</h2>

    <div class="max-w-[1100px] mx-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-4 md:px-0 px-4 place-items-center">

        <!-- Role Card -->
        <div class="open-roles">
            <h3>Sales Executive</h3>
            <p class="first-p">Gurugram</p>
            <p class="clamp-3-lines">Drive property sales through client engagement and market knowledge.</p>
            <a>View More</a>
        </div>

        <!-- Repeat Cards -->
        <div class="open-roles">
            <h3>Site Supervisor</h3>
            <p class="first-p">Delhi</p>
            <p class="clamp-3-lines">Oversee construction sites ensuring quality, timelines, and safety standards.</p>
            <a>View More</a>
        </div>


        <div class="open-roles">
            <h3>Property Analyst</h3>
            <p class="first-p">Gurugram</p>
            <p class="clamp-3-lines">Evaluate market trends, ROI, and investment opportunities with insights.</p>
            <a>View More</a>
        </div>

        <div class="open-roles">
            <h3>Legal Advisor</h3>
            <p class="first-p">Noida</p>
            <p class="clamp-3-lines">Handle legal documentation, compliance, and property-related legal processes.</p>
            <a>View More</a>
        </div>

    </div>
</section>

<section class="md:px-0 px-4 bg-white mb-3">
    <div class="container max-w-[1100px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 pb-3 md:pt-12 pt-8 gap-4">

            <!-- Left Navigation -->
            <div class="space-y-4 text-sm font-medium text-gray-600">
                <div class="text-txBlack font-bold md:text-[22px] text-[16px]">Job Description</div>

            </div>

            <!-- Right FAQ Accordion -->
            <div class="md:col-span-2 space-y-4">

                <!-- 1 -->
                <button class="w-full text-left group focus:outline-none pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-[20px] text-[14px] md:font-medium font-normal text-txBlack group-hover:text-primary transition-all">
                            Role Summary
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack group-focus:block text-[12px] md:text-[16px] leading-relaxed">
                        We focus on long-term value creation through strategic location selection, sustainable construction, and data-driven decision-making to ensure stable returns and portfolio growth.
                    </div>
                </button>

                <!-- 2 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-[20px] text-[14px] md:font-medium font-normal text-txBlack group-hover:text-primary transition-all">
                            Responsibilities
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack group-focus:block text-[12px] md:text-[16px] leading-relaxed">
                        We analyze market trends, location demand, future infrastructure plans, and ROI forecasts to identify high-growth investment opportunities with low risk and strong potential.
                    </div>
                </button>

                <!-- 3 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-[20px] text-[14px] md:font-medium font-normal text-txBlack group-hover:text-primary transition-all">
                            Requirements
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack group-focus:block text-[12px] md:text-[16px] leading-relaxed">
                        Yes, we offer flexible partnership models for individual investors, groups, or institutions looking to invest in real estate with trusted guidance and transparent processes.
                    </div>
                </button>

                <!-- 4 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-[20px] text-[14px] md:font-medium font-normal text-txBlack group-hover:text-primary transition-all">
                            Perks & Benefits
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack group-focus:block text-[12px] md:text-[16px] leading-relaxed">
                        Returns generally start within 12–24 months, depending on the project type, with rental income or resale value offering steady or lump-sum gains.
                    </div>
                </button>

                <!-- 5 -->
                <button class="w-full text-left group focus:outline-none  pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-[20px] text-[14px] md:font-medium font-normal text-txBlack group-hover:text-primary transition-all">
                            Location & Department
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-primary" />
                    </div>
                    <div class="mt-2 hidden text-txBlack group-focus:block text-[12px] md:text-[16px] leading-relaxed">
                        We maintain a balanced strategy targeting strong rental yields for short-term income and appreciating assets for long-term capital growth and portfolio stability.
                    </div>
                </button>

                 <a href="#apply" class=" mt-2 hidden md:inline-flex bg-primary m-auto items-center px-16 text-white py-2 rounded-full hover:border-primary border hover:text-primary hover:bg-white transition duration-300"> Apply Now</a>

            </div>
            <a href="#apply" class="md:hidden bg-primary justify-self-center inline-flex items-center justify-center px-12 text-white py-2 rounded-full hover:border-primary border hover:text-primary hover:bg-white transition duration-300"> Apply Now</a>

           
        </div>
    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection