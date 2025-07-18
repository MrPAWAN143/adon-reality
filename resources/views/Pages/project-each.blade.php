@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Single Project</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">
@endsection

@section('content')
<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('projects') }}">Projects</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('projects.each', $property->property_slug) }}">{{ $property->property_name }}</a></div>
</section>

<x-banner-section class="px-4 relative md:h-[55vh] md:max-h-[55vh] h-[30vh] max-h-[30vh]" image="{{ asset('assets/images/bannerImages/single-project-banner.jpg') }}" title="DLF Prime Towers
Elevating Commercial Real Estate" subtitle="7.30 Cr. Onwards" titleClass="md:!w-[38%] !w-full" buttonLink="#" buttonClass=" " buttonText=""/>

<div class="w-full py-6 px-4 md:px-0">
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row justify-between items-start lg:items-start gap-6">

        <!-- Left Content -->
        <div class="space-y-3 md:inline-flex flex-col md:items-start items-center md:gap-2 w-full md:w-auto">
            <!-- Tag -->
            <div class="md:inline-flex flex items-center justify-center ">
                <span class="md:inline-block border border-txBlack font-light rounded-2xl px-8 py-2 md:text-[16px] text-[12px] text-txBlack">
                    Multiplex / Complex
                </span>
            </div>

            <!-- Title and Developer -->
            <div class="text-center md:text-left space-y-1">
                <h2 class="md:text-[32px] text-[16px] font-semibold text-txBlack ">DLF Cyber City Tower</h2>
                <p class="md:text-[24px] text-[12px] font-medium text-txBlack">By <span class="font-bold">DLF</span></p>
            </div>

            <!-- Meta Info -->
            <div class="md:text-sm text-[8px] md:text-left text-center text-gray-700 flex flex-wrap items-center justify-center gap-x-3 gap-y-1 md:gap-y-0 !md:mt-0">
                <span>Noida, Sector 62</span>
                <span class="text-txBlack">|</span>
                <span>5000 sq. ft.</span>
                <span class="text-txBlack">|</span>
                <span>STATUD - NL/RTM</span>
            </div>
        </div>

        <!-- Right Buttons -->
        <div class="flex flex-row items-center justify-between md:flex-row md:gap-4 gap-2">
            <!-- WhatsApp -->
            <button class="flex items-center justify-center md:gap-2 gap-1 border border-primary text-primary md:px-4 md:py-2 py-1 px-2 rounded-full text-[9px] md:text-[16px] hover:bg-primary hover:text-white transition">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="md:w-4 md:h-4 w-3 h-3">
                Get Details on Whats app
            </button>

            <!-- Download Brochure -->
            <button class="flex items-center justify-center md:gap-2 gap-1 border border-primary text-primary md:px-4 md:py-2 py-1 px-2 rounded-full text-[9px] md:text-[16px] hover:bg-primary hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16h16V4H4zm8 0v8m0 0l4-4m-4 4l-4-4" />
                </svg>
                Download Brochure
            </button>

            <!-- RERA -->
            <button class="flex items-center justify-center md:gap-2 gap-1 border border-primary text-primary md:px-4 md:py-2 py-1 px-2 rounded-full text-[9px] md:text-[16px] hover:bg-primary hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1 4h1v-4h1m4 4h-1v-4h-1m1 4h1v-4h1" />
                </svg>
                RERA - 0000000000
            </button>
        </div>
    </div>
</div>



<section class="pb-10 pt-0  max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">



    <!-- Left Column (Blog Content) -->
    <div class="md:col-span-2 md:pe-10 border-r  border-gray/30">

        <x-heading-subheading heading="Property Description" subheading="DLF Cyber City Tower in Sector 62, Noida, is a premium commercial project by DLF, spanning 5000 sq. ft. Designed for modern businesses, it offers flexible spaces for multiplexes, offices, co-working, and more. With top-notch amenities, excellent connectivity, and sustainable architecture, it’s perfect for corporates and entertainment setups. Backed by DLF’s trusted legacy, the project promises high returns and a future-ready workspace." headingClass="heading project-each " subHeadingClass="subheading project-each mb-4 text-start !text-md" />
        <ul class="text-txBlack md:text-[16px] text-[12px] md:ml-4 space-y-0">
            <li class="flex items-center gap-2">
                <span class="w-1 h-1 mt-1 bg-gray rounded-full shrink-0"></span>
                <span>Located in Noida’s prime IT & business hub</span>
            </li>
            <li class="flex items-center gap-2">
                <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                <span>Ideal for offices, multiplexes, retail & service centers</span>
            </li>
            <li class="flex items-center gap-2">
                <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                <span>Features high-speed elevators, 24x7 security, and ample parking</span>
            </li>
            <li class="flex items-center gap-2">
                <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                <span>Developed by DLF – a leader in real estate</span>
            </li>
            <li class="flex items-center gap-2">
                <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                <span>Great investment with assured leasing and high footfall</span>
            </li>
        </ul>

        <div class="max-w-xl mr-auto py-8">
            <h3 class="md:text-[24px] text-[16px] mb-4 font-semibold text-txBlack md:mb-2 text-center md:text-start">Quick Summary of Project</h3>
            <div class="border border-primary rounded-lg overflow-hidden text-txBlack">
                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Address</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">DLF Cyber City Tower, Sector-62, Noida</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Pincode</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">201309</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Builder Name</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">DLF</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Property Status</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">Under Development</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Property Category</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">Commercial Multiplex & Office Complex</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">RERA Details</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">UPRERAPRJ000000/02/2025</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Possession by</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">Expected by 2025</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Starting Price*</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">On Request</div>
                </div>

                <div class="grid grid-cols-3">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-light">Strategic Location</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">Sector-62, Noida</div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto  md:py-4 py-2">
            <div class="grid grid-cols-4 md:gap-4 gap-2 h-auto items-start">

                <!-- Main Image -->
                <div class="col-span-3">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-3.jpg') }}" alt="Main Property" class="w-full h-auto rounded-2xl object-cover">
                </div>

                <!-- Thumbnails -->
                <div class="flex flex-col md:gap-4 gap-2 w-full md:w-auto content-between items-between h-full justify-between">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-3.png') }}" alt="Thumb 1" class="rounded-xl h-full w-full object-cover">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-2.png') }}" alt="Thumb 2" class="rounded-xl h-full w-full object-cover">
                    <img src="{{ asset('assets/images/allImages/project-gallery-image-1.png') }}" alt="Thumb 3" class="rounded-xl h-full w-full object-cover">
                </div>

            </div>
        </div>

        <div class="max-w-4xl mx-auto md:px-4 py-4 text-gray-800">

            <!-- Amenities Section -->
            <div class="mb-8">
                <h3 class="md:text-[24px] text-[16px] font-semibold mb-2">Amenities</h3>

                <ul class="text-txBlack md:text-[16px] text-[12px] md:ml-4 space-y-0">
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Modern Multi-level Parking Facility</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>I24×7 Security and CCTV Surveillance</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>High-speed Elevators and Escalators</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Power Backup for Common Areas and Offices</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Fire Safety and Prevention Systems</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Landscaped Open Spaces and Cafeteria Zones</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Dedicated Business Lounge and Conference Rooms</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Wi-Fi Enabled Public Areas</span>
                    </li>
                </ul>

            </div>

            <!-- Location Advantages Section -->
            <div class="mb-0">
                <h3 class="md:text-[24px] text-[16px] font-semibold mb-2">Location Advantages</h3>

                <ul class="text-txBlack md:text-[16px] text-[12px] md:ml-4 space-y-0">
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Prime location in Sector 62, Noida — a thriving commercial hub</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Excellent connectivity to NH-24 and Delhi-Meerut Expressway</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Close proximity to metro stations (Noida Sector 62 Metro)</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Surrounded by IT parks, educational institutions, and premium residential areas</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
                        <span>Easy access to hospitals, banks, restaurants, and hotels</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="max-w-5xl mx-auto md:px-4 py-4 md:block hidden">
            <!-- Embedded Map or Image -->
            <div class="rounded-2xl  overflow-hidden md:mb-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17383.336479488054!2d77.34828205607775!3d28.623641394275474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5456ef36d9f%3A0x3b7191b1286136c8!2sSector%2062%2C%20Noida%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1751018298195!5m2!1sen!2sin" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- Or replace the <img> with an <iframe> for an actual embedded map -->
            </div>

        </div>

        <div class="max-w-5xl mx-auto md:px-4 py-4 md:hidden block">
            <!-- Embedded Map or Image -->
            <div class="rounded-2xl  overflow-hidden md:mb-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17383.336479488054!2d77.34828205607775!3d28.623641394275474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5456ef36d9f%3A0x3b7191b1286136c8!2sSector%2062%2C%20Noida%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1751018298195!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- Or replace the <img> with an <iframe> for an actual embedded map -->
            </div>

        </div>

        <div class="md:max-w-xl mr-auto md:px-4 pb-4 px-6">
            <!-- Section Heading -->
            <h2 class="md:text-[24px] text-[16px] font-semibold mb-2 md:text-start text-center">DLF Riverine Size & Area Break–Down</h2>

            <!-- Info Table -->
            <div class="border !max-w-3xl border-primary rounded-xl overflow-hidden md:text-[16px] text-[10px]">
                <div class="grid grid-cols-2 border-b border-primary">
                    <div class="px-4 py-2 md:font-medium border-r font-light border-primary">Total Area of land</div>
                    <div class="px-4 py-2  font-light">6.015 Acres</div>
                </div>
                <div class="grid grid-cols-2 border-b border-primary">
                    <div class="px-4 py-2 md:font-medium border-r font-light border-primary">Number of Towers</div>
                    <div class="px-4 py-2 font-light">4</div>
                </div>
                <div class="grid grid-cols-2 border-b border-primary">
                    <div class="px-4 py-2 md:font-medium border-r font-light border-primary">Structure of Property</div>
                    <div class="px-4 py-2 font-light">G+23 Floors</div>
                </div>
                <div class="grid grid-cols-2 border-b border-primary">
                    <div class="px-4 py-2 md:font-medium border-r font-light border-primary">Total Units</div>
                    <div class="px-4 py-2 font-light">To be announced</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 md:font-medium border-r font-light border-primary">Configuration of Units available</div>
                    <div class="px-4 py-2 font-light">3 BHK and 4 BHK Apartments</div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto  py-8 text-gray-800 space-y-8">

            <!-- About Builder -->
            <div>
                <h2 class="md:text-[24px] text-[16px] font-semibold mb-2">About builder</h2>
                <p class="md:text-[16px] text-[12px] leading-relaxed">
                    DLF Limited is one of India's most prestigious and trusted real estate developers, with over seven decades of excellence.
                    Known for creating iconic residential, commercial, and retail properties across the country, DLF has redefined urban living
                    through thoughtful design, unmatched construction quality, and world-class amenities. With a legacy built on innovation and
                    integrity, DLF continues to shape skylines and create vibrant communities that stand the test of time.
                </p>
            </div>

            <!-- Project Snapshot (Right aligned table on larger screens if needed) -->
            <div class="md:max-w-full max-w-[85%] m-auto ">
                <h3 class="md:text-[16px] text-[12px] font-semibold mb-2 md:text-start text-center">At raising sector 44, Noida</h3>
                <div class="border border-primary rounded-lg overflow-hidden w-full md:w-2/3 text-[10px] md:text-[16px]">
                    <div class="grid grid-cols-2 border-b border-primary">
                        <div class="px-4 py-2 md:font-medium font-normal border-r border-primary">Unit Type</div>
                        <div class="px-4 py-2 font-light">3 BHK & 4 BHK Apartments</div>
                    </div>
                    <div class="grid grid-cols-2 border-b border-primary">
                        <div class="px-4 py-2 md:font-medium font-normal border-r border-primary">Size</div>
                        <div class="px-4 py-2 font-light">Starting from 2700 sq ft</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 md:font-medium font-normal border-r border-primary">Starting Price*</div>
                        <div class="px-4 py-2 font-light">Investments start from 7.30 Cr</div>
                    </div>
                </div>
            </div>

            <!-- Who Should Invest -->
            <div class="">
                <h3 class="md:text-[24px] text-[16px] font-semibold mb-2 md:text-start text-center">Who to invest in this project</h3>

                <ul class="text-txBlack md:text-[16px] text-[12px] md:ml-4 space-y-0">
                    <li class="flex items-start gap-2">
                        <span class="w-1 h-1 mt-3 bg-txBlack rounded-full shrink-0"></span>
                        <span>Luxury home buyers seeking spacious 3 & 4 BHK apartments with premium finishes and top-notch amenities</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="w-1 h-1 mt-3 bg-txBlack rounded-full shrink-0"></span>
                        <span>High-Net-Worth Individuals (HNIs) looking to diversify their portfolio with high-value real estate in a prime Noida location</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="w-1 h-1 mt-3 bg-txBlack rounded-full shrink-0"></span>
                        <span>NRI investors aiming for secure, high-return assets in India’s growing urban hubs</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="w-1 h-1 mt-3 bg-txBlack rounded-full shrink-0"></span>
                        <span>Professionals and business owners wanting a prestigious address in a well-connected, upscale neighborhood</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="w-1 h-1 mt-3 bg-txBlack rounded-full shrink-0"></span>
                        <span>Long-term real estate investors interested in properties by a reputed builder like DLF with strong appreciation potential</span>
                    </li>
                </ul>
            </div>

        </div>


    </div>



    <!-- Right Column (Sidebar) -->
    <aside class="space-y-6 md:col-span-1 sticky top-[100px] self-start">

        <!-- Enquiry Form -->
        <div class="bg-gradient-to-b from-bgSecondary/30 to-white p-6  rounded-[15px] w-full max-w-sm mx-auto max-h-[80vh] overflow-y-auto">
            <form class="space-y-4">
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Name*</label>
                    <input
                        type="text"
                        placeholder="Your name"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Phone*</label>
                    <input
                        type="tel"
                        placeholder="xx-xxxxxx-xxxxx"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Email*</label>
                    <input
                        type="email"
                        placeholder="hello@gmail.com"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Message</label>
                    <textarea
                        rows="4"
                        placeholder="Message"
                        class="w-full !border !border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-start">
                    <button type="submit" class="view-more-button !py-2 !m-0">Submit Enquiry</button>
                </div>
            </form>
        </div>

        <!-- Project of the Day -->
        <div class=" project-of-the-day md:px-0 px-4 ">
            <h3 class="md:text-[24px] text-[16px] font-semibold">Project of the Day</h3>
            <div class=" slick-slider-single-page" id="slick-slider">
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section imageClass=" " src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}" featuredCardClass="featured-investment-card-single-page-div" alt="DLF Cyber City Tower" heading="DLF Cyber City Tower" location="Noida, Sector 62" rera="UPRERAI2345" status="Ongoing" roi="12%" developer="DLF" variety="Multiplex / Commercial" size="5000 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section imageClass=" " src="{{ asset('assets/images/allImages/M3MCorporateHeights.png') }}" featuredCardClass="featured-investment-card-single-page-div" alt="M3M Corporate Heights" heading="M3M Corporate Heights" location="Sector 67, Gurgaon" rera="HRERAGGN20230911" status="Ready to Move" roi="10%" developer="M3M" variety="Commercial Office Tower" size="7000 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section imageClass=" " src="{{ asset('assets/images/allImages/M3MAtrium.png') }}" featuredCardClass="featured-investment-card-single-page-div" alt="M3M Atrium" heading="M3M Atrium" location="Sector 140, Noida Expressway" rera="UPRERA-2023-0567" status="Pre-Launch" roi="12%" developer="M3M" variety="High Street Retail" size="4800 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
            </div>
        </div>

        <!-- Explore Blogs -->
        <div class="single-page-blog md:px-0 px-4">
            <h3 class="md:text-[24px] text-[16px] font-semibold">Explore our blogs</h3>
            <div class="pt-2 slick-slider-single-page" id="slick-slider2">
                <div class="marketing-insights-card-single-page">
                    <x-blog-card  cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden" class="featured-investment-img !mb-0" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing4.png') }}" alt="M3M Corporate Heights" h4="The Future of Real Estate: Trends to Watch" p="Stay ahead of the curve with these emerging real estate trends." />
                </div>
            </div>
        </div>

    </aside>

</section>


@if($similarProperties->count() > 0)
<section class="md:px-8 px-4 pb-8 pt-0 md:mt-8 mt-[-100px] bg-white text-center">
    <div class="container max-w-6xl mx-auto">
        <x-heading-subheading heading="Similar Projects" subheading="" headingClass="heading mt-[65px]" subHeadingClass="subheading" />
        <div class="grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-3 mx-auto ">
            @foreach ($similarProperties as $property)
           <div class="featured-investment-card m-featured-page-card">
                    <x-featured-investment-section featuredCardClass="project-page-image-dev" src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" imageClass="project-page-image" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" url="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                <x-button class="featured-investment-button !py-2" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection


@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('.slick-slider-single-page').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });

      
    });
</script>

@endsection