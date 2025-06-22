@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - FAQs page</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
@endsection
@section('content')
<div class="container max-w-6xl mx-auto">
    <x-page-path class="path" path="Home > FAQs for investors" />
</div>

<x-banner-section class="px-4 relative h-[60vh] max-h-[60vh] object-cover bg-center" image="{{ asset('assets/images/bannerImages/faq-banner.webp') }}" title="FAQs for Real Estate Investors" subtitle="Everything you need to know before investing in verified, high-value properties with XYZ Realty."  />


<!-- FAQ Accordion Matching Design -->
<section class="px-4  bg-white">
    <div class="container max-w-5xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 py-10 gap-8">

            <!-- Left Navigation -->
            <div class="space-y-4 text-sm font-medium text-gray-600">
                <div class="text-primary font-bold text-lg">Company & Vision</div>
                <div class="hover:text-primary cursor-pointer">Investment Opportunities</div>
                <div class="hover:text-primary cursor-pointer">Returns & Financials</div>
                <div class="hover:text-primary cursor-pointer">Safety & Regulations</div>
                <div class="hover:text-primary cursor-pointer">Project Development & Construction</div>
                <div class="hover:text-primary cursor-pointer">Payment & Exit Options</div>
                <div class="hover:text-primary cursor-pointer">Reporting & Communication</div>
            </div>

            <!-- Right FAQ Accordion -->
            <div class="md:col-span-2 space-y-6">

                <!-- 1 -->
                <button class="w-full text-left group focus:outline-none border-b border-goldenColor pb-4 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            What is your investment philosophy in real estate development?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We focus on long-term value creation through strategic location selection, sustainable construction, and data-driven decision-making to ensure stable returns and portfolio growth.
                    </div>
                </button>

                <!-- 2 -->
                <button class="w-full text-left group focus:outline-none border-b border-goldenColor pb-4 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            How do you identify high-potential investment opportunities?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We analyze market trends, location demand, future infrastructure plans, and ROI forecasts to identify high-growth investment opportunities with low risk and strong potential.
                    </div>
                </button>

                <!-- 3 -->
                <button class="w-full text-left group focus:outline-none border-b border-goldenColor pb-4 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            Can I invest with your company as a partner or client?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        Yes, we offer flexible partnership models for individual investors, groups, or institutions looking to invest in real estate with trusted guidance and transparent processes.
                    </div>
                </button>

                <!-- 4 -->
                <button class="w-full text-left group focus:outline-none border-b border-goldenColor pb-4 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            What is the typical timeline for returns on investment?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        Returns generally start within 12–24 months, depending on the project type, with rental income or resale value offering steady or lump-sum gains.
                    </div>
                </button>

                <!-- 5 -->
                <button class="w-full text-left group focus:outline-none border-b border-goldenColor pb-4 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            Do you focus more on rental yield or property appreciation?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We maintain a balanced strategy targeting strong rental yields for short-term income and appreciating assets for long-term capital growth and portfolio stability.
                    </div>
                </button>

                <!-- 6 -->
                <button class="w-full text-left group focus:outline-none border-b border-goldenColor pb-4 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            How do you ensure risk management in your investments?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We conduct in-depth due diligence, legal checks, market assessments, and diversification to minimize financial risks and safeguard every investment.
                    </div>
                </button>

                <!-- 7 -->
                <button class="w-full text-left group focus:outline-none border-b border-goldenColor pb-4 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="text-base font-semibold text-txBlack-gray group-hover:text-primary transition-all">
                            What types of markets or locations do you prioritize for investing?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block text-sm leading-relaxed">
                        We focus on urban hotspots, upcoming infrastructure zones, and high-demand rental areas to ensure liquidity, growth, and consistent returns.
                    </div>
                </button>

            </div>

        </div>
    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection
@section('scripts')

@endsection