@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - FAQs page</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('faq') }}">FAQs for investors</a></div>
</section>

<x-banner-section class="px-4 relative h-[20vh] md:h-[50vh] md:max-h-[50vh] object-cover bg-center" mobileBanner="{{ asset('assets/images/bannerImages/faq-banner.webp') }}" image="{{ asset('assets/images/bannerImages/faq-banner.webp') }}" title="FAQs for Real Estate Investors" subtitle="Everything you need to know before investing in verified, high-value properties with XYZ Realty." />


<!-- FAQ Accordion Matching Design -->
<section class="px-4  bg-white">
    <div class="container max-w-[1100px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 md:py-10 py-4 gap-3 place-items-start justify-center items-start">

            <!-- Left Navigation -->
            <div class="md:space-y-4 space-x-2 text-sm font-medium text-txBlack ">
                <div class="text-primary font-bold text-lg md:block hidden ">Company & Vision</div>
                <div class="md:hidden flex items-center justify-start cursor-pointer hover:text-primary transition-colors" id="mobile-nav-toggle">
                    <div class="text-primary font-bold text-lg mr-2">Company & Vision</div>
                    <x-forkawesome-angle-down id="mobile-nav-arrow" class="w-5 h-5 transform transition-transform duration-300 text-gray-500" />
                </div>

                <!-- Mobile Dropdown Button -->
                <div class="md:hidden">
                    <!-- Mobile Dropdown Menu -->
                    <div id="mobile-nav-menu" class="hidden mt-2  rounded-lg ">
                        <div class="py-2">
                            <div class="px-4 py-2 hover:bg-gray-50 hover:text-primary cursor-pointer transition-colors border-b border-gray-100">Investment Opportunities</div>
                            <div class="px-4 py-2 hover:bg-gray-50 hover:text-primary cursor-pointer transition-colors border-b border-gray-100">Returns & Financials</div>
                            <div class="px-4 py-2 hover:bg-gray-50 hover:text-primary cursor-pointer transition-colors border-b border-gray-100">Safety & Regulations</div>
                            <div class="px-4 py-2 hover:bg-gray-50 hover:text-primary cursor-pointer transition-colors border-b border-gray-100">Project Development & Construction</div>
                            <div class="px-4 py-2 hover:bg-gray-50 hover:text-primary cursor-pointer transition-colors border-b border-gray-100">Payment & Exit Options</div>
                            <div class="px-4 py-2 hover:bg-gray-50 hover:text-primary cursor-pointer transition-colors">Reporting & Communication</div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Navigation (unchanged) -->
                <div class="space-y-4 text-sm font-medium text-gray-600 hidden md:block">
                    <div class="hover:text-primary cursor-pointer">Investment Opportunities</div>
                    <div class="hover:text-primary cursor-pointer">Returns & Financials</div>
                    <div class="hover:text-primary cursor-pointer">Safety & Regulations</div>
                    <div class="hover:text-primary cursor-pointer">Project Development & Construction</div>
                    <div class="hover:text-primary cursor-pointer">Payment & Exit Options</div>
                    <div class="hover:text-primary cursor-pointer">Reporting & Communication</div>
                </div>
            </div>

            <!-- Right FAQ Accordion -->
            <div class="md:col-span-2 md:space-y-6 space-y-2 ">

                <!-- 1 -->
                <button class="w-full text-left group focus:outline-none border-b border-bgSecondary md:pb-4 pb-1 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-base text-[10px] font-semibold text-txBlack-gray group-hover:text-primary transition-all tracking-lighter">
                            What is your investment philosophy in real estate development?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block md:text-sm text-[9px] leading-relaxed">
                        We focus on long-term value creation through strategic location selection, sustainable construction, and data-driven decision-making to ensure stable returns and portfolio growth.
                    </div>
                </button>

                <!-- 2 -->
                <button class="w-full text-left group focus:outline-none border-b border-bgSecondary md:pb-4 pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-base text-[10px] font-semibold text-txBlack-gray group-hover:text-primary transition-all tracking-lighter">
                            How do you identify high-potential investment opportunities?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block md:text-sm text-[9px] leading-relaxed">
                        We analyze market trends, location demand, future infrastructure plans, and ROI forecasts to identify high-growth investment opportunities with low risk and strong potential.
                    </div>
                </button>

                <!-- 3 -->
                <button class="w-full text-left group focus:outline-none border-b border-bgSecondary md:pb-4 pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-base text-[10px] font-semibold text-txBlack-gray tracking-lighter group-hover:text-primary transition-all">
                            Can I invest with your company as a partner or client?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block md:text-sm text-[9px] leading-relaxed">
                        Yes, we offer flexible partnership models for individual investors, groups, or institutions looking to invest in real estate with trusted guidance and transparent processes.
                    </div>
                </button>

                <!-- 4 -->
                <button class="w-full text-left group focus:outline-none border-b border-bgSecondary md:pb-4 pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-base text-[10px] font-semibold text-txBlack-gray tracking-lighter group-hover:text-primary transition-all">
                            What is the typical timeline for returns on investment?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block md:text-sm text-[9px] leading-relaxed">
                        Returns generally start within 12–24 months, depending on the project type, with rental income or resale value offering steady or lump-sum gains.
                    </div>
                </button>

                <!-- 5 -->
                <button class="w-full text-left group focus:outline-none border-b border-bgSecondary md:pb-4 pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-base text-[10px] font-semibold text-txBlack-gray tracking-lighter group-hover:text-primary transition-all">
                            Do you focus more on rental yield or property appreciation?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block md:text-sm text-[9px] leading-relaxed">
                        We maintain a balanced strategy targeting strong rental yields for short-term income and appreciating assets for long-term capital growth and portfolio stability.
                    </div>
                </button>

                <!-- 6 -->
                <button class="w-full text-left group focus:outline-none border-b border-bgSecondary md:pb-4 pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-base text-[10px] font-semibold text-txBlack-gray tracking-lighter group-hover:text-primary transition-all">
                            How do you ensure risk management in your investments?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block md:text-sm text-[9px] leading-relaxed">
                        We conduct in-depth due diligence, legal checks, market assessments, and diversification to minimize financial risks and safeguard every investment.
                    </div>
                </button>

                <!-- 7 -->
                <button class="w-full text-left group focus:outline-none border-b border-bgSecondary md:pb-4 pb-2 !mt-2">
                    <div class="flex justify-between items-center">
                        <span class="md:text-base text-[10px] font-semibold text-txBlack-gray tracking-lighter group-hover:text-primary transition-all">
                            What types of markets or locations do you prioritize for investing?
                        </span>
                        <x-forkawesome-angle-down class="ml-3 w-6 h-6 transform transition-transform duration-800 group-focus:rotate-180 text-gray-500" />
                    </div>
                    <div class="mt-2 hidden text-txBlack-gray group-focus:block md:text-sm text-[9px] leading-relaxed">
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('mobile-nav-toggle');
        const dropdownMenu = document.getElementById('mobile-nav-menu');
        const arrow = document.getElementById('mobile-nav-arrow');

        if (toggleButton && dropdownMenu && arrow) {
            toggleButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!toggleButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                    arrow.classList.remove('rotate-180');
                }
            });

            // Handle category selection
            const categoryItems = dropdownMenu.querySelectorAll('div[class*="cursor-pointer"]');
            categoryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const selectedText = this.textContent.trim();
                    toggleButton.querySelector('span').textContent = selectedText;
                    dropdownMenu.classList.add('hidden');
                    arrow.classList.remove('rotate-180');

                    // Optional: You can add functionality here to filter FAQs based on selected category
                    console.log('Selected category:', selectedText);
                });
            });
        }
    });
</script>
@endsection