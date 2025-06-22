@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Services</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
@endsection
@section('content')
<div class="container max-w-6xl mx-auto">
    <x-page-path class="path" path="Home > Services" />
</div>
<x-banner-section class="px-4 relative h-[75vh] max-h-[75vh]" image="{{ asset('assets/images/bannerImages/service-page-banner.webp') }}" title="Empowering Your Journey with Smart, Scalable Solutions" subtitle="At Adon, we provide customized digital services designed to streamline your business and drive success." buttonText="Get Started" buttonLink="#" buttonClass="banner-button" />

<section class="py-10 bg-white text-center mx-auto">
    <h2 class="text-2xl md:text-2xl font-bold mb-8">Our Core Services</h2>

    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 px-4">

        <x-choose-adon-reality>

            <div class="bg-[#f7f2f3] p-2 rounded-xl max-h-[20]">
                <img src="{{ asset('assets/images/icons/consultation-aadvisory.svg')}}" alt="" class="w-12 h-12">
            </div>
            <div class="text-txBlack text-start text-sm order-1">
                <h3 class="font-bold text-xs">Consultation & Advisory</h3>
                <p class="text-[10px] text-txBlack leading-3">
                    We offer expert guidance to help you make informed decisions, ensuring optimal returns on your investments.
                </p>
            </div>

        </x-choose-adon-reality>


         <!-- 2. Market Analysis & Insights -->
        <x-choose-adon-reality>
            <div class="bg-[#f7f2f3] p-2 rounded-xl">
                <img src="{{ asset('assets/images/icons/market-analysis.svg') }}" alt="Market Analysis & Insights" class="w-12 h-12">
            </div>
            <div class="text-txBlack text-start text-sm order-1">
                <h3 class="font-bold text-xs">Market Analysis & Insights</h3>
                <p class="text-[10px] leading-3">
                    Stay ahead with our in-depth market research, providing you with the latest trends and data-driven insights.
                </p>
            </div>
        </x-choose-adon-reality>

        <!-- 3. Property Valuation Services -->
        <x-choose-adon-reality>
            <div class="bg-[#f7f2f3] p-2 rounded-xl">
                <img src="{{ asset('assets/images/icons/property-valuation.svg') }}" alt="Property Valuation Services" class="w-12 h-12">
            </div>
            <div class="text-txBlack text-start text-sm order-1">
                <h3 class="font-bold text-xs">Property Valuation Services</h3>
                <p class="text-[10px] leading-3">
                    Accurate and transparent property valuations to help you understand the true worth of your assets.
                </p>
            </div>
        </x-choose-adon-reality>

        <!-- 4. Legal Assistance -->
        <x-choose-adon-reality>
            <div class="bg-[#f7f2f3] p-2 rounded-xl">
                <img src="{{ asset('assets/images/icons/legal-assistance.svg') }}" alt="Legal Assistance" class="w-12 h-12">
            </div>
            <div class="text-txBlack text-start text-sm order-1">
                <h3 class="font-bold text-xs">Legal Assistance</h3>
                <p class="text-[10px] leading-3">
                    Comprehensive support in navigating legalities, ensuring all documentation is accurate and compliant.
                </p>
            </div>
        </x-choose-adon-reality>

        <!-- 5. After-Sales Support -->
        <x-choose-adon-reality>
            <div class="bg-[#f7f2f3] p-2 rounded-xl">
                <img src="{{ asset('assets/images/icons/after-sales-support.svg') }}" alt="After-Sales Support" class="w-12 h-12">
            </div>
            <div class="text-txBlack text-start text-sm order-1">
                <h3 class="font-bold text-xs">After-Sales Support</h3>
                <p class="text-[10px] leading-3">
                    Our relationship doesn’t end at the sale. We offer continued support to address any post-purchase queries or needs.
                </p>
            </div>
        </x-choose-adon-reality>

        <!-- 6. Home Loan Assistance -->
        <x-choose-adon-reality>
            <div class="bg-[#f7f2f3] p-2 rounded-xl">
                <img src="{{ asset('assets/images/icons/home-loan.svg') }}" alt="Home Loan Assistance" class="w-12 h-12">
            </div>
            <div class="text-txBlack text-start text-sm order-1">
                <h3 class="font-bold text-xs">Home Loan Assistance</h3>
                <p class="text-[10px] leading-3">
                    We connect you with trusted financial partners for easy loan approvals, ensuring smooth and stress-free funding.
                </p>
            </div>
        </x-choose-adon-reality>
    </div>
</section>

<section class="py-12 bg-white">
  <div class="text-center mb-10">
    <h2 class="text-2xl md:text-2xl font-bold mb-8">How We Work</h2>
  </div>

  <div class="max-w-2xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 px-4">

    <!-- Card 1 -->
    <div class="bg-gradient-to-b from-[#f3eceb] to-white p-6 rounded-xl shadow hover:shadow-md transition">
      <div class="flex justify-center mb-4">
        <img src="{{ asset('assets/images/icons/client-centric.svg') }}" alt="Client Centric" class="w-10 h-10 text-primary" />
      </div>
      <h3 class="text-center font-bold text-lg mb-2">Client-Centric Approach</h3>
      <p class="text-sm text-center text-gray-600">
        We focus on deeply understanding your unique needs and aspirations, offering personalised real estate solutions that align perfectly with your lifestyle, budget, and long-term goals.
      </p>
    </div>

    <!-- Card 2 -->
    <div class="bg-gradient-to-b from-[#f3eceb] to-white p-6 rounded-xl shadow hover:shadow-md transition">
      <div class="flex justify-center mb-4">
        <img src="{{ asset('assets/images/icons/expert-team.svg') }}" alt="Expert Team" class="w-10 h-10 text-primary" />
      </div>
      <h3 class="text-center font-bold text-lg mb-2">Expert Team</h3>
      <p class="text-sm text-center text-gray-600">
        Our skilled professionals guide you through every stage of the journey — from initial property discovery and site visits to legal documentation and final possession.
      </p>
    </div>

    <!-- Card 3 -->
    <div class="bg-gradient-to-b from-[#f3eceb] to-white p-6 rounded-xl shadow hover:shadow-md transition">
      <div class="flex justify-center mb-4">
        <img src="{{ asset('assets/images/icons/transparent-process.svg') }}" alt="Transparent Process" class="w-10 h-10 text-primary" />
      </div>
      <h3 class="text-center font-bold text-lg mb-2">Transparent Processes</h3>
      <p class="text-sm text-center text-gray-600">
        You stay informed at every step with clear pricing, timely updates, and complete transparency. From the first consultation to final handover, we ensure you’re never in the dark.
      </p>
    </div>

    <!-- Card 4 -->
    <div class="bg-gradient-to-b from-[#f3eceb] to-white p-6 rounded-xl shadow hover:shadow-md transition">
      <div class="flex justify-center mb-4">
        <img src="{{ asset('assets/images/icons/diverse-portfolio.svg') }}" alt="Diverse Portfolio" class="w-10 h-10 text-primary" />
      </div>
      <h3 class="text-center font-bold text-lg mb-2">Diverse Portfolio</h3>
      <p class="text-sm text-center text-gray-600">
        Whether you're looking for premium villas, modern apartments, or affordable flats, we have the perfect match for your lifestyle and budget.
      </p>
    </div>

  </div>
</section>
<section class="px-4 py-8 bg-white">
    <div class="container max-w-5xl mx-auto px-4">

        <x-heading-subheading heading="Hear From Our Investors" subheading="Genuine testimonials and success stories from our valued investors." headingClass="heading text-center" subHeadingClass="subheading text-center" />
    </div>


    <div class="testimonial-slider max-w-5xl mx-auto px-4 gap-5">
        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Nathan Kapoor</p>
                        <p class="text-xs text-gray-500">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">The virtual property tour helped faster than ever.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Arjun" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Arjun Verma</p>
                        <p class="text-xs text-gray-500">UX Designer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />
    

@endsection