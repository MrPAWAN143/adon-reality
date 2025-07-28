@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - FAQs page</title>
@endsection
@section('styles')
@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('faq') }}">FAQs for investors</a></div>
</section>

<x-banner-section class="px-4 relative h-[20vh] md:h-[50vh] md:max-h-[50vh] object-cover bg-center" mobileBanner="{{ asset('assets/images/bannerImages/faq-banner.webp') }}" image="{{ asset('assets/images/bannerImages/faq-banner.webp') }}" title="FAQs for Real Estate Investors" subtitle="Everything you need to know before investing in verified, high-value properties with XYZ Realty." />


<!-- FAQ Accordion Matching Design -->
<section class="px-4  bg-white">
    <div class="container max-w-[1100px] mx-auto">
        <div class="md:py-10 py-4 gap-3 place-items-start justify-center items-start">

            <section class="px-4 py-8  max-w-6xl mx-auto bg-white " x-data="{ tab: 'investment' }">
                <div class="container mx-auto grid md:grid-cols-3 gap-8 items-start justify-center">

                    <!-- LEFT SIDE MENU -->
                    <div class="space-y-4 text-sm font-medium text-gray-700 md:col-span-1">
                        <div @click="tab = 'investment'" :class="tab === 'investment' ? 'text-[#560018] font-bold' : ''" class="cursor-pointer hover:text-[#560018] transition">
                            About the Company
                        </div>
                        <div @click="tab = 'returns'" :class="tab === 'returns' ? 'text-[#560018] font-bold' : ''" class="cursor-pointer hover:text-[#560018] transition">
                            Investments & Returns

                        </div>
                        <div @click="tab = 'safety'" :class="tab === 'safety' ? 'text-[#560018] font-bold' : ''" class="cursor-pointer hover:text-[#560018] transition">
                            Legal & Documentation Support
                        </div>
                        <div @click="tab = 'development'" :class="tab === 'development' ? 'text-[#560018] font-bold' : ''" class="cursor-pointer hover:text-[#560018] transition">
                            Post-Sales Support
                        </div>
                        <div @click="tab = 'payment'" :class="tab === 'payment' ? 'text-[#560018] font-bold' : ''" class="cursor-pointer hover:text-[#560018] transition">
                            For Builders & Developers
                        </div>
                        <div @click="tab = 'reporting'" :class="tab === 'reporting' ? 'text-[#560018] font-bold' : ''" class="cursor-pointer hover:text-[#560018] transition">
                            Property Buying/ Investment Process
                        </div>
                    </div>

                    <!-- RIGHT SIDE CONTENT -->
                    <div class="md:col-span-2 space-y-0">

                        <!-- INVESTMENT TAB -->
                        <div x-show="tab === 'investment'" x-transition>
                            <div x-data="{ items: [
                    { q: 'What is ADON REALTY ?', a: 'We are a trusted real estate channel partner specializing in connecting buyers with premium residential and commercial properties across major cities. We work closely with top developers to provide the best property options and investment advice.' },
                    { q: 'Are you a real estate developer or broker?', a: 'We are a channel partner, which means we bridge the gap between real estate developers and buyers by offering professional consulting and access to verified property listings.' },
                    { q: 'What cities do you operate in?', a: 'We currently operate in Gurgaon, New Delhi, Delhi NCR, Haryana and are continuously expanding to serve more cities.' },
                    { q: 'What sets your company apart from others?', a: 'We provide curated property listings, transparent dealing, end-to-end support, and exclusive offers negotiated directly with builders.' },
                ] }">
                                <template x-for="(item, index) in items" :key="index">
                                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-3 mb-2 max-w-[500px]">
                                        <button @click="open = !open" class="w-full flex justify-between items-center text-left text-gray-800 font-medium">
                                            <span x-text="item.q"></span>
                                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div x-show="open" x-collapse class="mt-2 text-gray-600 text-sm" x-text="item.a"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- RETURNS TAB -->
                        <div x-show="tab === 'returns'" x-transition>
                            <div x-data="{ items: [
                    { q: 'Do you assist with property investment advice?', a: 'Absolutely. Our team helps investors identify high-growth areas and projects with promising ROI based on market trends and developer reputation.' },
                    { q: 'What type of properties offer better rental yield?', a: 'Commercial spaces, studio apartments in metro cities, and affordable housing units often provide better rental returns. Our experts can guide you based on your goals.' },
                    { q: 'Can you help me with resale properties or exit strategies?', a: 'Yes, we assist with resale of properties and provide market evaluation, legal help, and buyer connections for a smooth exit.' }
                ] }">
                                <template x-for="(item, index) in items" :key="index">
                                    <div x-data="{ open: false }" class="border-b border-gray-200 py-3  max-w-[500px]">
                                        <button @click="open = !open" class="w-full flex justify-between items-center text-left text-gray-800 font-medium">
                                            <span x-text="item.q"></span>
                                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div x-show="open" x-collapse class="mt-2 text-gray-600 text-sm" x-text="item.a"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- SAFETY TAB -->
                        <div x-show="tab === 'safety'" x-transition>
                            <div x-data="{ items: [
                    { q: 'Do you help with legal verification of property documents?', a: 'Yes, we ensure all our listed properties have clean titles and help you connect with legal experts for due diligence.' },
                    { q: 'What documents are needed to buy a property?', a: 'Typically, you will need ID proof, PAN card, address proof, income proof, and property-related documents provided by the builder.' },
                    { q: 'Can NRI buyers invest through your platform?', a: 'Yes, we assist NRIs with property investment, legal documentation, and remote bookings across India.' }
                ] }">
                                <template x-for="(item, index) in items" :key="index">
                                    <div x-data="{ open: false }" class="border-b border-gray-200 py-3  max-w-[500px]">
                                        <button @click="open = !open" class="w-full flex justify-between items-center text-left text-gray-800 font-medium">
                                            <span x-text="item.q"></span>
                                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div x-show="open" x-collapse class="mt-2 text-gray-600 text-sm" x-text="item.a"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- DEVELOPMENT TAB -->
                        <div x-show="tab === 'development'" x-transition>
                            <div x-data="{ items: [
                    { q: 'Do you provide support after booking the property?', a: 'Yes, we stay connected even after booking to help with loan processing, agreement registration, interior references, and possession coordination.' },
                    { q: 'What if I want to cancel a booking?', a: 'Cancellation policies depend on the developer. We assist in understanding refund terms and negotiating with the builder wherever possible.' }
                ] }">
                                <template x-for="(item, index) in items" :key="index">
                                    <div x-data="{ open: false }" class="border-b border-gray-200 py-3  max-w-[500px]">
                                        <button @click="open = !open" class="w-full flex justify-between items-center text-left text-gray-800 font-medium">
                                            <span x-text="item.q"></span>
                                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div x-show="open" x-collapse class="mt-2 text-gray-600 text-sm" x-text="item.a"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- PAYMENT TAB -->
                        <div x-show="tab === 'payment'" x-transition>
                            <div x-data="{ items: [
  { q: 'How can developers list their projects with you?', a: 'Developers can reach out to our team via the &quot;List Your Project&quot; section. We’ll verify the project and onboard it after due diligence.' },
  { q: 'What kind of marketing support do you offer to builders?', a: 'We offer digital marketing, lead generation, project promotions, site visit coordination, and event-based campaigns.' }
] }">

                                <template x-for="(item, index) in items" :key="index">
                                    <div x-data="{ open: false }" class="border-b border-gray-200 py-3  max-w-[500px]">
                                        <button @click="open = !open" class="w-full flex justify-between items-center text-left text-gray-800 font-medium">
                                            <span x-text="item.q"></span>
                                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div x-show="open" x-collapse class="mt-2 text-gray-600 text-sm" x-text="item.a"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- REPORTING TAB -->
                        <div x-show="tab === 'reporting'" x-transition>
                            <div x-data="{ items: [
                    { q: 'How can I find the right property through your platform?', a: 'Simply browse our listings, filter by your preferences (location, budget, type), and connect with our experts for personalized recommendations and site visits.' },
                    { q: 'Do you assist with home loan and financing options?', a: 'Yes, we have tie-ups with major banks and financial institutions to offer hassle-free loan assistance and quick approvals.' },
                    { q: 'Is there any cost for your services to the buyer?', a: 'No, our services are usually free for buyers as we are compensated by the developers for our marketing and sales support.' },
                    { q: 'Do you offer virtual property tours?', a: 'Yes, we provide 3D walkthroughs, video tours, and live virtual consultations for selected projects.' }
                ] }">
                                <template x-for="(item, index) in items" :key="index">
                                    <div x-data="{ open: false }" class="border-b border-gray-200 py-3  max-w-[500px]">
                                        <button @click="open = !open" class="w-full flex justify-between items-center text-left text-gray-800 font-medium">
                                            <span x-text="item.q"></span>
                                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div x-show="open" x-collapse class="mt-2 text-gray-600 text-sm" x-text="item.a"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

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