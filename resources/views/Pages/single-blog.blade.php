@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Blog</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/mastr.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')
<section class="px-4  max-w-7xl mx-auto bg-white pb-8">
    <div class="container mx-auto">
        <x-page-path class="path" path="Home > Blog > Top cities for real estate investment 2025" />
    </div>
    <!-- Featured Image -->
    <div class="w-full overflow-hidden rounded-2xl mt-4">
        <img
            src="{{ asset('assets/images/bannerImages/single-blog-page-banner.jpg') }}"
            alt="Top Cities for Real Estate Investment"
            class="w-full h-auto object-cover" />
    </div>
</section>

<section class="pb-10 pt-0 px-4 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Left Column (Blog Content) -->
    <div class="md:col-span-2 px-4 border-r border-gray/30">

        <x-heading-subheading heading="Top Cities For Real Estates Investment in 2025" subheading="Discover where smart investors are putting their money this year." headingClass="heading text-start " subHeadingClass="subheading mb-4 text-start" />
        <div class="text-sm text-gray mb-6 flex items-center gap-2">
            <svg class="w-4 h-4 text-gray" fill="currentColor" viewBox="0 0 20 20">
                <circle cx="10" cy="10" r="10" />
            </svg>
            <span>Neha, Jan 22, 2024</span>
        </div>

        <!-- Blog Sections -->
        <h2 class="text-xl font-bold mt-6 mb-2">Understanding the Mumbai Real Estate Market</h2>
        <ul class="list-disc list-inside text-sm text-txBlack space-y-2">
            <li>High demand, premium locations</li>
            <li>Price trends in South Mumbai vs. suburbs</li>
            <li>Infrastructure and metro expansion</li>
        </ul>

        <h2 class="text-lg font-semibold mt-6 mb-2">Step-by-Step Property Selection Process</h2>

        <!-- Steps -->
        <ol class="text-md text-txBlack space-y-8 list-decimal list-inside">
            <li>
                <strong>Define Your Budget</strong>
                <ul class="list-disc list-inside pl-4 mt-1 space-y-2">
                    <li>Check eligibility for a home loan</li>
                    <li>Keep 10–15% buffer for legal/registration costs</li>
                    <li>Use EMI calculators</li>
                </ul>
            </li>
            <li>
                <strong>Choose the Right Locality</strong>
                <ul class="list-disc list-inside pl-4 mt-1 space-y-2">
                    <li>Commute to work</li>
                    <li>Safety & amenities</li>
                    <li>School/college proximity</li>
                </ul>
            </li>
            <li>
                <strong>Verify Builder Reputation</strong>
                <ul class="list-disc list-inside pl-4 mt-1 space-y-2">
                    <li>Check past projects</li>
                    <li>Look for RERA registration</li>
                    <li>Read online reviews</li>
                </ul>
            </li>
            <li>
                <strong>Check Legal Documents</strong>
                <ul class="list-disc list-inside pl-4 mt-1 space-y-2">
                    <li>Title Deed</li>
                    <li>Sale Agreement</li>
                    <li>Occupancy Certificate (OC)</li>
                    <li>Encumbrance Certificate (EC)</li>
                </ul>
            </li>
            <li>
                <strong>Site Visit and Final Decision</strong>
                <ul class="list-disc list-inside pl-4 mt-1 space-y-2">
                    <li>Visit during different times of day</li>
                    <li>Talk to existing residents</li>
                    <li>Look at sunlight, ventilation, parking</li>
                </ul>
            </li>
        </ol>
    </div>

    <!-- Right Column (Sidebar) -->
    <aside class="space-y-8 md:col-span-1 ">
        <!-- Enquiry Form -->
        <div class="bg-gradient-to-b from-bgSecondary/30 to-white p-6 rounded-xl shadow-md w-full max-w-sm mx-auto">
            <form class="space-y-4">
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Name*</label>
                    <input
                        type="text"
                        placeholder="Your name"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none " />
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Phone*</label>
                    <input
                        type="tel"
                        placeholder="xx-xxxxxx-xxxxx"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none " />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Email*</label>
                    <input
                        type="email"
                        placeholder="hello@gmail.com"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none " />
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Message</label>
                    <textarea
                        rows="4"
                        placeholder="Message"
                        class="w-full !border !border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none "></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-start">
                    <button
                        type="submit"
                        class="view-more-button !py-2 !m-0">
                        Submit Enquiry
                    </button>
                </div>
            </form>
        </div>

        <div class="">
            <h3 class="text-lg mb-4 absolute pt-[10px] font-bold">Project of the Day</h3>
            <div class=" pt-16 slick-slider-single-page" id="slick-slider">
                <div class="featured-investment-card-single-page ">
                    <x-featured-investment-section src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}" alt="DLF Cyber City Tower" class="featured-investment-img-single-page" heading="DLF Cyber City Tower" location="Noida, Sector 62" rera="UPRERAI2345" status="Ongoing" roi="12%" developer="DLF" variety="Multiplex / Commercial" size="5000 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MCorporateHeights.png') }}" alt="M3M Corporate Heights" class="featured-investment-img-single-page" heading="M3M Corporate Heights" location="Sector 67, Gurgaon" rera="HRERAGGN20230911" status="Ready to Move" roi="10%" developer="M3M" variety="Commercial Office Tower" size="7000 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MAtrium.png') }}" alt="M3M Atrium" class="featured-investment-img-single-page" heading="M3M Atrium" location="Sector 140, Noida Expressway" rera="UPRERA-2023-0567" status="Pre-Launch" roi="12%" developer="M3M" variety="High Street Retail" size="4800 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
            </div>

        </div>

        <!-- Explore Blogs -->
        <div class="single-page-blog relative">
            <h3 class="text-lg mb-4 absolute top-[-20px] font-bold">Explore our blogs</h3>
            <div class="pt-6 slick-slider-single-page" id="slick-slider2">
                <x-blog-card cardCls="marketing-insights-card heading-h4 !p-3" class="featured-investment-img" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
                <x-blog-card cardCls="marketing-insights-card heading-h4 !p-3" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
                <x-blog-card cardCls="marketing-insights-card heading-h4 !p-3" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
                <x-blog-card cardCls="marketing-insights-card heading-h4 !p-3" class="featured-investment-img" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
                <x-blog-card cardCls="marketing-insights-card heading-h4 !p-3" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
                <x-blog-card cardCls="marketing-insights-card heading-h4 !p-3" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
            </div>

        </div>
    </aside>
</section>



<!-- Share Section -->
<div class="text-center py-0">
    <h3 class="text-2xl font-bold mb-4">
        Enjoyed the article? Share it with your friends
    </h3>
    <div class="flex justify-center gap-6 text-[#560018] text-2xl">
        <a href="#" aria-label="LinkedIn" class="hover:scale-110 transition"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Telegram" class="hover:scale-110 transition"><i class="fab fa-telegram-plane"></i></a>
        <a href="#" aria-label="WhatsApp" class="hover:scale-110 transition"><i class="fab fa-whatsapp"></i></a>
        <a href="#" aria-label="X (Twitter)" class="hover:scale-110 transition"><i class="fab fa-x-twitter"></i></a>
        <a href="#" aria-label="Instagram" class="hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
    </div>
</div>

<section class="px-4 py-8 bg-white text-center">
    <div class="container max-w-6xl mx-auto">
        <x-heading-subheading heading="Similar Blogs" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
        </div>
        <div class="mt-10">
            <button class="marketing-insights-view-more-button">
                View all Blog <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </button>
        </div>
    </div>
</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection


@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('.slick-slider-single-page').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000
        });
    });
</script>

@endsection