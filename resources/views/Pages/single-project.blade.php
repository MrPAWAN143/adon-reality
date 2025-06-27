@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Single Project</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">

@endsection

@section('content')

<div class="container max-w-7xl mx-auto">
    <x-page-path class="path" path="Home > project > Single Project" />
</div>
<x-banner-section class="px-4 relative h-[55vh] max-h-[55vh]" image="{{ asset('assets/images/bannerImages/single-project-banner.jpg') }}" title="DLF Prime Towers
Elevating Commercial Real Estate" subtitle="7.30 Cr. Onwards" titleClass="!w-[38%]" />

<div class="w-full py-6 px-10">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between items-start lg:items-start gap-6">

        <!-- Left Content -->
        <div class="space-y-3">
            <!-- Tag -->
            <div>
                <span class="inline-block border border-txBlack rounded-full px-8 py-2 text-md text-txBlack">
                    Multiplex / Complex
                </span>
            </div>

            <!-- Title and Developer -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900">DLF Cyber City Tower</h2>
                <p class="text-lg font-medium text-txBlack">By <span class="font-bold">DLF</span></p>
            </div>

            <!-- Meta Info -->
            <div class="text-sm text-gray-700 flex flex-wrap items-center gap-x-3 gap-y-1">
                <span>Noida, Sector 62</span>
                <span class="text-gray-400">|</span>
                <span>5000 sq. ft.</span>
                <span class="text-gray-400">|</span>
                <span>STATUD - NL/RTM</span>
            </div>
        </div>

        <!-- Right Buttons -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full lg:w-auto">
            <!-- WhatsApp -->
            <button class="flex items-center justify-center gap-2 border border-primary text-primary px-4 py-2 rounded-full text-sm hover:bg-primary hover:text-white transition">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-4 h-4">
                Get Details on Whats app
            </button>

            <!-- Download Brochure -->
            <button class="flex items-center justify-center gap-2 border border-primary text-primary px-4 py-2 rounded-full text-sm hover:bg-primary hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16h16V4H4zm8 0v8m0 0l4-4m-4 4l-4-4" />
                </svg>
                Download Broucher
            </button>

            <!-- RERA -->
            <button class="flex items-center justify-center gap-2 border border-primary text-primary px-4 py-2 rounded-full text-sm hover:bg-primary hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1 4h1v-4h1m4 4h-1v-4h-1m1 4h1v-4h1" />
                </svg>
                RERA - 0000000000
            </button>
        </div>
    </div>
</div>



<section class="pb-10 pt-0 px-4 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- Left Column (Blog Content) -->
    <div class="md:col-span-2 px-4 pe-10 border-r border-gray/30">

        <x-heading-subheading heading="Property Description" subheading="DLF Cyber City Tower in Sector 62, Noida, is a premium commercial project by DLF, spanning 5000 sq. ft. Designed for modern businesses, it offers flexible spaces for multiplexes, offices, co-working, and more. With top-notch amenities, excellent connectivity, and sustainable architecture, it’s perfect for corporates and entertainment setups. Backed by DLF’s trusted legacy, the project promises high returns and a future-ready workspace." headingClass="heading text-start " subHeadingClass="subheading mb-4 text-start !text-md" />
        <!-- Bullet Points -->
        <ul class="list-disc list-inside text-txBlack text-base space-y-1">
            <li>Located in Noida’s prime IT & business hub</li>
            <li>Ideal for offices, multiplexes, retail & service centers</li>
            <li>Features high-speed elevators, 24x7 security, and ample parking</li>
            <li>Developed by DLF – a leader in real estate</li>
            <li>Great investment with assured leasing and high footfall</li>
        </ul>

        <div class="max-w-xl mr-auto px-4 py-8">
            <h3 class="text-xl font-semibold text-txBlack mb-4">Quick Summary of Project</h3>
            <div class="border-2 border-primary rounded-lg overflow-hidden text-txBlack">
                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary text-lg">Address</div>
                    <div class="px-4 py-3 col-span-2 text-md">DLF Cyber City Tower, Sector-62, Noida</div>
                </div>

                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">Pincode</div>
                    <div class="px-4 py-3 col-span-2">201309</div>
                </div>

                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">Builder Name</div>
                    <div class="px-4 py-3 col-span-2">DLF</div>
                </div>

                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">Property Status</div>
                    <div class="px-4 py-3 col-span-2">Under Development</div>
                </div>

                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">Property Category</div>
                    <div class="px-4 py-3 col-span-2">Commercial Multiplex & Office Complex</div>
                </div>

                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">RERA Details</div>
                    <div class="px-4 py-3 col-span-2">UPRERAPRJ000000/02/2025</div>
                </div>

                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">Possession by</div>
                    <div class="px-4 py-3 col-span-2">Expected by 2025</div>
                </div>

                <div class="grid grid-cols-3 border-b-2 border-primary">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">Starting Price*</div>
                    <div class="px-4 py-3 col-span-2">On Request</div>
                </div>

                <div class="grid grid-cols-3">
                    <div class="px-4 py-3 border-r-2 font-semibold border-primary">Strategic Location</div>
                    <div class="px-4 py-3 col-span-2">Sector-62, Noida</div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-auto items-start">

                <!-- Main Image -->
                <div class="md:col-span-3">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-3.jpg') }}" alt="Main Property" class="w-full h-auto rounded-2xl object-cover">
                </div>

                <!-- Thumbnails -->
                <div class="flex md:flex-col gap-4 w-full md:w-auto content-between items-between ">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-3.png') }}" alt="Thumb 1" class="rounded-xl w-full object-cover">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-2.png') }}" alt="Thumb 2" class="rounded-xl w-full object-cover">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-1.png') }}" alt="Thumb 3" class="rounded-xl w-full object-cover">
                </div>

            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 py-8 text-gray-800">

            <!-- Amenities Section -->
            <div class="mb-8">
                <h3 class="text-2xl font-bold mb-4">Amenities</h3>
                <ul class="list-disc list-inside font-medium text-md text-txBlack">
                    <li>Modern Multi-level Parking Facility</li>
                    <li>24×7 Security and CCTV Surveillance</li>
                    <li>High-speed Elevators and Escalators</li>
                    <li>Power Backup for Common Areas and Offices</li>
                    <li>Fire Safety and Prevention Systems</li>
                    <li>Landscaped Open Spaces and Cafeteria Zones</li>
                    <li>Dedicated Business Lounge and Conference Rooms</li>
                    <li>Wi-Fi Enabled Public Areas</li>
                </ul>
            </div>

            <!-- Location Advantages Section -->
            <div>
                <h3 class="text-2xl font-bold mb-4">Location Advantages</h3>
                <ul class="list-disc list-inside text-md font-medium text-txBlack">
                    <li>Prime location in Sector 62, Noida — a thriving commercial hub</li>
                    <li>Excellent connectivity to NH-24 and Delhi-Meerut Expressway</li>
                    <li>Close proximity to metro stations (Noida Sector 62 Metro)</li>
                    <li>Surrounded by IT parks, educational institutions, and premium residential areas</li>
                    <li>Easy access to hospitals, banks, restaurants, and hotels</li>
                </ul>
            </div>

        </div>

        <div class="max-w-5xl mx-auto px-4 py-8">
            <!-- Embedded Map or Image -->
            <div class="rounded-2xl  overflow-hidden mb-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17383.336479488054!2d77.34828205607775!3d28.623641394275474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5456ef36d9f%3A0x3b7191b1286136c8!2sSector%2062%2C%20Noida%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1751018298195!5m2!1sen!2sin" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- Or replace the <img> with an <iframe> for an actual embedded map -->
            </div>

            <!-- Section Heading -->
            <h2 class="text-xl font-semibold mb-4">DLF Riverine Size & Area Break–Down</h2>

            <!-- Info Table -->
            <div class="border-2 max-w-4xl border-primary rounded-xl overflow-hidden">
                <div class="grid grid-cols-2 border-b-2 border-primary">
                    <div class="px-4 py-3 font-semibold border-r-2 border-primary">Total Area of land</div>
                    <div class="px-4 py-3">6.015 Acres</div>
                </div>
                <div class="grid grid-cols-2 border-b-2 border-primary">
                    <div class="px-4 py-3 font-semibold border-r-2 border-primary">Number of Towers</div>
                    <div class="px-4 py-3">4</div>
                </div>
                <div class="grid grid-cols-2 border-b-2 border-primary">
                    <div class="px-4 py-3 font-semibold border-r-2 border-primary">Structure of Property</div>
                    <div class="px-4 py-3">G+23 Floors</div>
                </div>
                <div class="grid grid-cols-2 border-b-2 border-primary">
                    <div class="px-4 py-3 font-semibold border-r-2 border-primary">Total Units</div>
                    <div class="px-4 py-3">To be announced</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-3 font-semibold border-r-2 border-primary">Configuration of Units available</div>
                    <div class="px-4 py-3">3 BHK and 4 BHK Apartments</div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 py-8 text-gray-800 space-y-8">

            <!-- About Builder -->
            <div>
                <h2 class="text-xl font-semibold mb-2">About builder</h2>
                <p class="text-base leading-relaxed">
                    DLF Limited is one of India's most prestigious and trusted real estate developers, with over seven decades of excellence.
                    Known for creating iconic residential, commercial, and retail properties across the country, DLF has redefined urban living
                    through thoughtful design, unmatched construction quality, and world-class amenities. With a legacy built on innovation and
                    integrity, DLF continues to shape skylines and create vibrant communities that stand the test of time.
                </p>
            </div>

            <!-- Project Snapshot (Right aligned table on larger screens if needed) -->
            <div>
                <h3 class="text-lg font-semibold mb-4">At raising sector 44, Noida</h3>
                <div class="border-2 border-primary rounded-lg overflow-hidden w-full md:w-2/3">
                    <div class="grid grid-cols-2 border-b-2 border-primary">
                        <div class="px-4 py-3 font-semibold border-r-2 border-primary">Unit Type</div>
                        <div class="px-4 py-3">3 BHK & 4 BHK Apartments</div>
                    </div>
                    <div class="grid grid-cols-2 border-b-2 border-primary">
                        <div class="px-4 py-3 font-semibold border-r-2 border-primary">Size</div>
                        <div class="px-4 py-3">Starting from 2700 sq ft</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-3 font-semibold border-r-2 border-primary">Starting Price*</div>
                        <div class="px-4 py-3">Investments start from 7.30 Cr</div>
                    </div>
                </div>
            </div>

            <!-- Who Should Invest -->
            <div >
                <h3 class="text-lg font-semibold mb-4">Who to invest in this project</h3>
                <ul class="list-disc list-outside space-y-1 text-txBlack">
                    <li class="">Luxury Home Buyers seeking spacious 3 & 4 BHK apartments with premium finishes and top-notch amenities.</li>
                    <li>High-Net-Worth Individuals (HNIs) looking to diversify their portfolio with high-value real estate in a prime Noida location.</li>
                    <li>NRI Investors aiming for secure, high-return assets in India’s growing urban hubs.</li>
                    <li>Professionals and Business Owners wanting a prestigious address in a well-connected, upscale neighborhood.</li>
                    <li>Long-term Real Estate Investors interested in properties by a reputed builder like DLF with strong appreciation potential.</li>
                </ul>
            </div>

        </div>


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

<section class="px-4 py-8 bg-white text-center">
    <div class="container max-w-6xl mx-auto">
        <x-heading-subheading heading="Similar Projects" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mx-auto">
            <div class="featured-investment-card featured-investment-card-single-project !px-3 !py-3">
                <x-featured-investment-section src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}" alt="DLF Cyber City Tower" class="featured-investment-img !w-full !h-16" heading="DLF Cyber City Tower" location="Noida, Sector 62" rera="UPRERAI2345" status="Ongoing" roi="12%" developer="DLF" variety="Multiplex / Commercial" size="5000 sq. ft." price="Price on Demand" />
                <x-button class="featured-investment-button py-2" text="View Details" />
            </div>
            <div class="featured-investment-card featured-investment-card-single-project !px-3 !py-3">
                <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MCorporateHeights.png') }}" alt="M3M Corporate Heights" class="featured-investment-img !w-full !h-16" heading="M3M Corporate Heights" location="Sector 67, Gurgaon" rera="HRERAGGN20230911" status="Ready to Move" roi="10%" developer="M3M" variety="Commercial Office Tower" size="7000 sq. ft." price="Price on Demand" />
                <x-button class="featured-investment-button py-2" text="View Details" />
            </div>
            <div class="featured-investment-card featured-investment-card-single-project !px-3 !py-3">
                <x-featured-investment-section src="{{ asset('assets/images/allImages/M3MAtrium.png') }}" alt="M3M Atrium" class="featured-investment-img !w-full !h-24" heading="M3M Atrium" location="Sector 140, Noida Expressway" rera="UPRERA-2023-0567" status="Pre-Launch" roi="12%" developer="M3M" variety="High Street Retail" size="4800 sq. ft." price="Price on Demand" />
                <x-button class="featured-investment-button py-2" text="View Details" />
            </div>

            <div class="featured-investment-card featured-investment-card-single-project !px-3 !py-3">
                <x-featured-investment-section src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}" alt="DLF Cyber City Tower" class="featured-investment-img !w-full !h-24" heading="DLF Cyber City Tower" location="Noida, Sector 62" rera="UPRERAI2345" status="Ongoing" roi="12%" developer="DLF" variety="Multiplex / Commercial" size="5000 sq. ft." price="Price on Demand" />
                <x-button class="featured-investment-button" text="View Details" />
            </div>
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