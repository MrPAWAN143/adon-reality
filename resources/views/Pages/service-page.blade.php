@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Services</title>
@endsection
@section('styles')

@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('service') }}" class="ml-[-5px]">Services</a></div>
</section>
<x-banner-section class="px-4 h-[25vh] md:h-[55vh] md:max-h-[45vh]" buttonClass="banner-button" mobileBanner="{{ asset('assets/images/bannerImages/career-banner.jpg') }}" image="{{ asset('assets/images/bannerImages/career-banner.jpg') }}" title="Empowering Your Journey with Smart, Scalable Solutions" subtitle="At Adon, we provide customized digital services designed to streamline your business and drive success." buttonText="Get Started" buttonLink="#" />

<section class="py-10 md:pb-8 pb-5 bg-white text-center mx-auto">
    <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center ">Our Core Services</h2>

    <div class="max-w-[1100px] mx-auto grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-4 px-4">

        <x-choose-adon-reality>

            <div class="flex md:flex-row flex-col items-center justify-center gap-2 md:p-0 p-4">
                <div class="bg-[#f7f2f3] md:py-0 md:px-4 p-4 rounded-xl">
                    <img src="{{ asset('assets/images/icons/consultation-aadvisory.svg')}}" alt="" class="md:w-16 md:h-16 w-8 h-8">
                </div>
                <div class="text-txBlack md:text-start text-center order-1">
                    <h3 class="font-semibold text-[12px] mb-1 md:text-[14px]">Consultation & Advisory</h3>
                    <p class="text-[8px] md:text-[12px] text-txBlack md:leading-4">
                        We offer expert guidance to help you make informed decisions, ensuring optimal returns on your investments.
                    </p>
                </div>
            </div>

        </x-choose-adon-reality>
        <!-- 2. Property Listings & Marketing -->
        <x-choose-adon-reality>
            <div class="flex md:flex-row flex-col items-center justify-center gap-2 md:p-0 p-4">
                <div class="bg-[#f7f2f3] md:py-0 md:px-4 p-4 rounded-xl">
                    <img src="{{ asset('assets/images/icons/market-analysis.svg') }}" alt="" class="md:w-16 md:h-16 w-8 h-8">
                </div>
                <div class="text-txBlack md:text-start text-center order-1">
                    <h3 class="font-semibold text-[12px] mb-1 md:text-[14px]">Market Analysis & Insights</h3>
                    <p class="text-[8px] md:text-[12px] text-txBlack md:leading-4">
                        Stay ahead with our in-depth market research, providing you with the latest trends and data-driven insights.
                    </p>
                </div>
            </div>

        </x-choose-adon-reality>

        <!-- 3. Property Valuation Services -->
        <x-choose-adon-reality>
            <div class="flex md:flex-row flex-col items-center justify-center gap-2 md:p-0 p-4">
                <div class="bg-[#f7f2f3] md:py-0 md:px-4 p-4 rounded-xl">
                    <img src="{{ asset('assets/images/icons/property-valuation.svg') }}" alt="Property Valuation Services" class="md:w-16 md:h-16 w-8 h-8">
                </div>
                <div class="text-txBlack md:text-start text-center order-1">
                    <h3 class="font-semibold text-[12px] mb-1 md:text-[14px]">Property Valuation Services</h3>
                    <p class="text-[8px] md:text-[12px] text-txBlack md:leading-4">
                        Accurate and transparent property valuations to help you understand the true worth of your assets.
                    </p>
                </div>
            </div>
        </x-choose-adon-reality>

        <!-- 4. Legal Assistance -->
        <x-choose-adon-reality>
            <div class="flex md:flex-row flex-col items-center justify-center gap-2 md:p-0 p-4">
                <div class="bg-[#f7f2f3] md:py-0 md:px-4 p-4 rounded-xl">
                    <img src="{{ asset('assets/images/icons/legal-assistance.svg') }}" alt="Legal Assistance" class="md:w-16 md:h-16 w-8 h-8">
                </div>
                <div class="text-txBlack md:text-start text-center order-1">
                    <h3 class="font-semibold text-[12px] mb-1 md:text-[14px]">Legal Assistance</h3>
                    <p class="text-[8px] md:text-[12px] text-txBlack md:leading-4">
                        Comprehensive support in navigating legalities, ensuring all documentation is accurate and compliant.
                    </p>
                </div>
            </div>
        </x-choose-adon-reality>

        <!-- 5. After-Sales Support -->
        <x-choose-adon-reality>
            <div class="flex md:flex-row flex-col items-center justify-center gap-2 md:p-0 p-4">
                <div class="bg-[#f7f2f3] md:py-0 md:px-4 p-4 rounded-xl">
                    <img src="{{ asset('assets/images/icons/after-sales-support.svg') }}" alt="After-Sales Support" class="md:w-16 md:h-16 w-8 h-8">
                </div>
                <div class="text-txBlack md:text-start text-center order-1">
                    <h3 class="font-semibold text-[12px] mb-1 md:text-[14px]">After-Sales Support</h3>
                    <p class="text-[8px] md:text-[12px] text-txBlack md:leading-4">
                        Our relationship doesn’t end at the sale. We offer continued support to address any post-purchase queries or needs.
                    </p>
                </div>
            </div>
        </x-choose-adon-reality>

        <!-- 6. Home Loan Assistance -->
        <x-choose-adon-reality>
            <div class="flex md:flex-row flex-col items-center justify-center gap-2 md:p-0 p-4">
                <div class="bg-[#f7f2f3] md:py-0 md:px-4 p-4 rounded-xl">
                    <img src="{{ asset('assets/images/icons/home-loan.svg') }}" alt="Home Loan Assistance" class="md:w-16 md:h-16 w-8 h-8">
                </div>
                <div class="text-txBlack md:text-start text-center order-1">
                    <h3 class="font-semibold text-[12px] mb-1 md:text-[14px]">Home Loan Assistance</h3>
                    <p class="text-[8px] md:text-[12px] text-txBlack md:leading-4">
                        We connect you with trusted financial partners for easy loan approvals, ensuring smooth and stress-free funding.
                    </p>
                </div>
            </div>
        </x-choose-adon-reality>
    </div>
</section>

<section class="py-4 bg-white">
    <div class="text-center mb-8">
        <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center ">How We Work</h2>
    </div>

    <div class="max-w-2xl mx-auto grid grid-cols-2 md:grid-cols-2 md:gap-6 gap-4 px-4 place-items-center justify-center items-start">

        <!-- Card 1 -->
        <div class="md:min-h-[200px] bg-gradient-to-b from-primary/10 to-secondary/10 md:p-6 p-4 rounded-xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-center mb-4">
                <img src="{{ asset('assets/images/icons/client-centric.svg') }}" alt="Client Centric" class="w-10 h-10 text-primary" />
            </div>
            <h3 class="font-semibold text-[12px] mb-1 md:text-[14px] text-center">Client-Centric Approach</h3>
            <p class="text-[8px] md:text-[12px] text-gray-600 md:leading-4 text-center">
                We focus on deeply understanding your unique needs and aspirations, offering personalised real estate solutions that align perfectly with your lifestyle, budget, and long-term goals.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="md:min-h-[200px] bg-gradient-to-b from-primary/10 to-secondary/10 md:p-6 p-4 rounded-xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-center mb-4">
                <img src="{{ asset('assets/images/icons/expert-team.svg') }}" alt="Expert Team" class="w-10 h-10 text-primary" />
            </div>
            <h3 class="font-semibold text-[12px] mb-1 md:text-[14px] text-center">Expert Team</h3>
            <p class="text-[8px] md:text-[12px] text-gray-600 md:leading-4 text-center">
                Our skilled professionals guide you through every stage of the journey — from initial property discovery and site visits to legal documentation and final possession.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="md:min-h-[200px] bg-gradient-to-b from-primary/10 to-secondary/10 md:p-6 p-4 rounded-xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-center mb-4">
                <img src="{{ asset('assets/images/icons/transparent-process.svg') }}" alt="Transparent Process" class="w-10 h-10 text-primary" />
            </div>
            <h3 class="font-semibold text-[12px] mb-1 md:text-[14px] text-center">Transparent Processes</h3>
            <p class="text-[8px] md:text-[12px] text-gray-600 md:leading-4 text-center">
                You stay informed at every step with clear pricing, timely updates, and complete transparency. From the first consultation to final handover, we ensure you’re never in the dark.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="md:min-h-[200px] bg-gradient-to-b from-primary/10 to-secondary/10 md:p-6 p-4 rounded-xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-center mb-4">
                <img src="{{ asset('assets/images/icons/diverse-portfolio.svg') }}" alt="Diverse Portfolio" class="w-10 h-10 text-primary" />
            </div>
            <h3 class="font-semibold text-[12px] mb-1 md:text-[14px] text-center">Diverse Portfolio</h3>
            <p class="text-[8px] md:text-[12px] text-gray-600 md:leading-4 text-center">
                Whether you're looking for premium villas, modern apartments, or affordable flats, we have the perfect match for your lifestyle and budget.
            </p>
        </div>

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



<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection