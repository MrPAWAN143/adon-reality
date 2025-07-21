@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Single Project</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">
@endsection

@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="md:w-4 md:h-4 w-3 h-3 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('projects') }}">Projects</a> <x-forkawesome-angle-right class="md:w-4 md:h-4 w-3 h-3 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('projects.each', $property->property_slug) }}">{{ $property->property_name }}</a></div>
</section>

<x-banner-section class="px-4 relative md:h-[55vh] md:max-h-[55vh] h-[20vh] max-h-[20vh]" mobileBanner="{{ asset('assets/images/bannerImages/project-banner-image.jpg') }}" image="{{ asset('assets/images/bannerImages/single-project-banner.jpg') }}" title="DLF Prime Towers
Elevating Commercial Real Estate" subtitle="7.30 Cr. Onwards" titleClass="md:!w-[38%] !w-full tracking-wide leading-6" buttonLink="#" buttonClass=" " buttonText="" />

<div class="w-full py-6 px-4 md:px-0">
    <div class="max-w-[1100px] mx-auto flex flex-col lg:flex-row justify-between items-start lg:items-start md:gap-6 gap-4">

        <!-- Left Content -->
        <div class="space-y-3 md:space-y-2 md:inline-flex flex-col md:items-start items-center md:gap-2 w-full md:w-auto">
            <!-- Tag -->
            <div class="md:inline-flex flex items-center justify-center ">
                <span class="md:inline-block border border-txBlack font-normal rounded-2xl px-8 py-2 md:text-[12px] text-[12px] text-txBlack">
                    Multiplex / Complex
                </span>
            </div>

            <!-- Title and Developer -->
            <div class="text-center md:text-left space-y-1">
                <h2 class="md:text-[32px] text-[16px] font-semibold text-txBlack ">DLF Cyber City Tower</h2>
                <p class="md:text-[24px] text-[12px] font-noraml text-txBlack">By <span class="font-semibold">DLF</span></p>
            </div>

            <!-- Meta Info -->
            <div class="md:text-[12px] font-normal text-[8px] md:text-left text-center text-txBlack flex flex-wrap items-center justify-center gap-x-3 gap-y-1 md:gap-y-0 !md:mt-0">
                <span>Noida, Sector 62</span>
                <span class="text-txBlack">|</span>
                <span>5000 sq. ft.</span>
                <span class="text-txBlack">|</span>
                <span>STATUS - NL/RTM</span>
            </div>
        </div>

        <!-- Right Buttons -->
        <div class=" flex flex-row items-center justify-between md:flex-row md:gap-4 gap-2">
            <!-- WhatsApp -->
            <button class=" brochurebtnxx flex items-center justify-center md:gap-2 md:font-normal gap-1 md:border-2 border border-primary text-txBlack md:px-4 md:py-2 py-2 px-2 rounded-full text-[8px] md:text-[12px] hover:bg-primary hover:text-white transition">
                <svg width="18" height="16" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2521_2859)">
                        <path d="M1.13861 10.9496C1.1381 12.7981 1.62108 14.6029 2.53945 16.1938L1.05078 21.6291L6.6132 20.1706C8.1517 21.0082 9.87546 21.447 11.6272 21.4471H11.6318C17.4144 21.4471 22.1217 16.7416 22.1241 10.9579C22.1252 8.15531 21.0348 5.51991 19.0536 3.53719C17.0728 1.55463 14.4383 0.462217 11.6313 0.460938C5.84798 0.460938 1.14108 5.16621 1.1387 10.9496" fill="url(#paint0_linear_2521_2859)" />
                        <path d="M0.767022 10.947C0.766425 12.8619 1.26671 14.7313 2.21783 16.3791L0.675781 22.0093L6.43765 20.4985C8.02523 21.3641 9.81269 21.8205 11.6315 21.8212H11.6362C17.6264 21.8212 22.5027 16.9464 22.5052 10.9557C22.5063 8.05234 21.3766 5.32221 19.3246 3.26845C17.2724 1.21495 14.5437 0.083225 11.6362 0.0820312C5.64505 0.0820312 0.769409 4.95614 0.767022 10.947ZM4.19842 16.0953L3.98328 15.7538C3.0789 14.3158 2.60155 12.654 2.60223 10.9476C2.60411 5.96823 6.65654 1.91707 11.6396 1.91707C14.0528 1.91809 16.3207 2.85881 18.0264 4.5656C19.7321 6.27256 20.6707 8.54163 20.6701 10.955C20.6679 15.9344 16.6154 19.9861 11.6362 19.9861H11.6326C10.0114 19.9852 8.42132 19.5498 7.03463 18.727L6.70463 18.5313L3.28542 19.4278L4.19842 16.0953Z" fill="url(#paint1_linear_2521_2859)" />
                        <path d="M8.91956 6.40525C8.7161 5.95306 8.50199 5.94394 8.30851 5.93601C8.15007 5.92918 7.96896 5.9297 7.78801 5.9297C7.60689 5.9297 7.31262 5.99783 7.06389 6.26942C6.81489 6.54126 6.11328 7.19819 6.11328 8.53431C6.11328 9.87042 7.08648 11.1618 7.22215 11.3431C7.35799 11.5242 9.10093 14.3538 11.8613 15.4424C14.1555 16.347 14.6223 16.1671 15.1202 16.1217C15.6182 16.0766 16.7271 15.465 16.9533 14.8308C17.1797 14.1968 17.1797 13.6532 17.1118 13.5396C17.044 13.4265 16.8628 13.3585 16.5912 13.2228C16.3197 13.087 14.9844 12.4299 14.7355 12.3393C14.4865 12.2487 14.3055 12.2035 14.1244 12.4755C13.9432 12.747 13.4232 13.3585 13.2646 13.5396C13.1063 13.7212 12.9478 13.7438 12.6763 13.608C12.4045 13.4717 11.5299 13.1853 10.4922 12.2602C9.68487 11.5403 9.13982 10.6513 8.98138 10.3794C8.82295 10.1079 8.96441 9.96073 9.10059 9.8254C9.22261 9.70372 9.37227 9.50828 9.50819 9.34976C9.6436 9.19115 9.68879 9.078 9.77935 8.89688C9.86999 8.7156 9.82463 8.55699 9.75684 8.42115C9.68879 8.28532 9.16105 6.94221 8.91956 6.40525Z" fill="white" />
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_2521_2859" x1="1054.72" y1="2117.28" x2="1054.72" y2="0.460938" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#1FAF38" />
                            <stop offset="1" stop-color="#60D669" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_2521_2859" x1="1092.15" y1="2192.81" x2="1092.15" y2="0.0820312" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F9F9F9" />
                            <stop offset="1" stop-color="white" />
                        </linearGradient>
                        <clipPath id="clip0_2521_2859">
                            <rect width="21.835" height="21.835" fill="white" transform="translate(0.667969 0.0820312)" />
                        </clipPath>
                    </defs>
                </svg>

                Get Details on Whats app
            </button>

            <!-- Download Brochure -->
            <button class="brochurebtnxx flex items-center justify-center md:font-normal md:gap-2 gap-1 md:border-2 border border-primary text-black md:px-4 md:py-2 py-2 px-2 rounded-full text-[8px] md:text-[12px] hover:bg-primary hover:text-white transition">
                <svg width="12" height="12" viewBox="0 0 16 16" fill="black" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.83724 11.2745C7.71502 11.2745 7.60043 11.2555 7.49349 11.2176C7.38655 11.1798 7.28724 11.1147 7.19557 11.0224L3.89557 7.7224C3.71224 7.53907 3.62424 7.32518 3.63157 7.08073C3.63891 6.83629 3.72691 6.6224 3.89557 6.43907C4.07891 6.25573 4.29677 6.1604 4.54916 6.15307C4.80155 6.14573 5.0191 6.23343 5.20182 6.41615L6.92057 8.1349V1.58073C6.92057 1.32101 7.00857 1.10345 7.18457 0.928066C7.36057 0.752677 7.57813 0.664677 7.83724 0.664066C8.09635 0.663455 8.31421 0.751455 8.49082 0.928066C8.66743 1.10468 8.75513 1.32223 8.75391 1.58073V8.1349L10.4727 6.41615C10.656 6.23282 10.8739 6.14482 11.1262 6.15215C11.3786 6.15948 11.5962 6.25512 11.7789 6.43907C11.947 6.6224 12.035 6.83629 12.0429 7.08073C12.0508 7.32518 11.9629 7.53907 11.7789 7.7224L8.47891 11.0224C8.38724 11.1141 8.28793 11.1791 8.18099 11.2176C8.07405 11.2561 7.95946 11.2751 7.83724 11.2745ZM2.33724 15.3307C1.83307 15.3307 1.40163 15.1514 1.04291 14.7926C0.684184 14.4339 0.504517 14.0022 0.503906 13.4974V11.6641C0.503906 11.4043 0.591906 11.1868 0.767906 11.0114C0.943906 10.836 1.16146 10.748 1.42057 10.7474C1.67968 10.7468 1.89754 10.8348 2.07416 11.0114C2.25077 11.188 2.33846 11.4056 2.33724 11.6641V13.4974H13.3372V11.6641C13.3372 11.4043 13.4252 11.1868 13.6012 11.0114C13.7772 10.836 13.9948 10.748 14.2539 10.7474C14.513 10.7468 14.7309 10.8348 14.9075 11.0114C15.0841 11.188 15.1718 11.4056 15.1706 11.6641V13.4974C15.1706 14.0016 14.9912 14.4333 14.6325 14.7926C14.2738 15.152 13.842 15.3313 13.3372 15.3307H2.33724Z" />
                </svg>

                Download Brochure
            </button>

            <!-- RERA -->
            <button class="brochurebtnxx flex items-center justify-center md:gap-2 gap-1 md:border-2 border border-primary md:font-normal text-black md:px-4 md:py-2 py-2 px-2 rounded-full text-[8px] md:text-[12px] hover:bg-primary hover:text-white transition">
                <svg width="16" height="16" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.33594 11.917C8.7296 12.4432 9.23185 12.8787 9.80861 13.1938C10.3854 13.5089 11.0232 13.6963 11.6787 13.7433C12.3342 13.7902 12.9922 13.6956 13.608 13.4659C14.2238 13.2362 14.783 12.8768 15.2476 12.412L17.9976 9.66196C18.8325 8.79753 19.2945 7.63977 19.284 6.43804C19.2736 5.2363 18.7916 4.08675 17.9418 3.23696C17.092 2.38717 15.9424 1.90515 14.7407 1.8947C13.539 1.88426 12.3812 2.34624 11.5168 3.18113L9.9401 4.74863" stroke="black" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11.999 10.0841C11.6054 9.55782 11.1031 9.12236 10.5264 8.80725C9.94961 8.49214 9.31183 8.30475 8.65628 8.2578C8.00073 8.21085 7.34276 8.30544 6.72698 8.53514C6.1112 8.76485 5.55202 9.1243 5.08738 9.58911L2.33738 12.3391C1.50249 13.2035 1.04051 14.3613 1.05095 15.563C1.0614 16.7648 1.54342 17.9143 2.39321 18.7641C3.243 19.6139 4.39255 20.0959 5.59429 20.1064C6.79602 20.1168 7.95378 19.6548 8.81821 18.8199L10.3857 17.2524" stroke="black" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                RERA - 0000000000
            </button>
        </div>
    </div>
</div>



<section class="md:pb-10  pt-0  max-w-[1100px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">



    <!-- Left Column (Blog Content) -->
    <div class="md:col-span-2 md:pe-10 md:border-r  border-txBlack">

        <x-heading-subheading heading="Property Description" subheading="DLF Cyber City Tower in Sector 62, Noida, is a premium commercial project by DLF, spanning 5000 sq. ft. Designed for modern businesses, it offers flexible spaces for multiplexes, offices, co-working, and more. With top-notch amenities, excellent connectivity, and sustainable architecture, it’s perfect for corporates and entertainment setups. Backed by DLF’s trusted legacy, the project promises high returns and a future-ready workspace." headingClass="heading project-each " subHeadingClass="subheading project-each mb-4 text-start !text-md" />
        <ul class="text-txBlack md:text-[16px] text-[12px] md:ml-4 ml-4 space-y-0">
            <li class="flex items-center gap-2">
                <span class="w-1 h-1 mt-1 bg-txBlack rounded-full shrink-0"></span>
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

        <div class="max-w-xl mr-auto md:py-6 py-4">
            <h3 class="md:text-[24px] text-[16px] mb-4 font-semibold text-txBlack md:mb-2 text-center md:text-start">Quick Summary of Project</h3>
            <div class="border border-primary rounded-lg overflow-hidden text-txBlack">
                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Address</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">DLF Cyber City Tower, Sector-62, Noida</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Pincode</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">201309</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Builder Name</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">DLF</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Property Status</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">Under Development</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Property Category</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">Commercial Multiplex & Office Complex</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">RERA Details</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">UPRERAPRJ000000/02/2025</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Possession by</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">Expected by 2025</div>
                </div>

                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Starting Price*</div>
                    <div class="px-4 md:py-2 py-2 col-span-2 md:font-light md:text-[16px] text-[10px] font-light">On Request</div>
                </div>

                <div class="grid grid-cols-3">
                    <div class="px-4 md:py-2 py-2 border-r md:font-medium border-primary md:text-[16px] text-[10px] font-normal">Strategic Location</div>
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

        <div class="max-w-4xl mx-auto md:px-4 py-4 text-tx`Black ">

            <!-- Amenities Section -->
            <div class="md:mb-6 mb-4">
                <h3 class="md:text-[24px] text-[16px] font-semibold mb-1">Amenities</h3>

                <ul class="text-txBlack md:text-[16px] text-[12px] ml-4  space-y-0">
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

                <ul class="text-txBlack md:text-[16px] text-[12px] ml-4 space-y-0">
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

        <div class="max-w-5xl mx-auto md:px-4 py-2 md:block hidden">
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
                    <div class="px-4 md:py-2 py-1.5 md:font-medium border-r font-normal border-primary">Total Area of land</div>
                    <div class="px-4 py-1.5 md:py-2  font-light">6.015 Acres</div>
                </div>
                <div class="grid grid-cols-2 border-b border-primary">
                    <div class="px-4 md:py-2 py-1.5 md:font-medium border-r font-normal border-primary">Number of Towers</div>
                    <div class="px-4 py-1.5 md:py-2 font-light">4</div>
                </div>
                <div class="grid grid-cols-2 border-b border-primary">
                    <div class="px-4 md:py-2 py-1.5 md:font-medium border-r font-normal border-primary">Structure of Property</div>
                    <div class="px-4 md:py-2 py-1.5 font-light">G+23 Floors</div>
                </div>
                <div class="grid grid-cols-2 border-b border-primary">
                    <div class="px-4 md:py-2 py-1.5 md:font-medium border-r font-normal border-primary">Total Units</div>
                    <div class="px-4 md:py-2 py-1.5 font-light">To be announced</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 md:py-2 py-1.5 md:font-medium border-r font-normal border-primary">Configuration of Units available</div>
                    <div class="px-4 md:py-2 py-1.5 font-light">3 BHK and 4 BHK Apartments</div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto  md:py-6 py-2 text-txBlack md:space-y-4 space-y-3">

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
            <div class="md:max-w-full max-w-[85%] m-auto text-txBlack">
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
                <h3 class="md:text-[24px] text-[16px] font-semibold mb-2 text-start">Why to invest in this project</h3>

                <ul class="text-txBlack md:text-[16px] text-[12px] ml-4 space-y-0">
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
        <div class="bg-gradient-to-b from-primary/10 to-secondary/10 p-6  rounded-[15px] w-full max-w-[85%] md:max-w-sm mx-auto max-h-[80vh] overflow-y-auto">
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
            <h3 class="md:text-[24px] text-[16px] font-semibold mx-5">Project of the Day</h3>
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
            <h3 class="md:text-[24px] text-[16px] font-semibold mx-5">Explore our blogs</h3>
            <div class="pt-2 slick-slider-single-page" id="slick-slider2">
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing4.png') }}" alt="M3M Corporate Heights" h4="The Future of Real Estate: Trends to Watch" p="Stay ahead of the curve with these emerging real estate trends." />
                </div>
            </div>
        </div>

    </aside>

</section>


@if($similarProperties->count() > 0)
<section class="md:px-8 px-4 pb-8 pt-0 md:mt-8 mt-[-100px] bg-white text-center md:block hidden">
    <div class="container max-w-6xl mx-auto">
        <x-heading-subheading heading="Similar Projects" subheading="" headingClass="heading mt-[65px]" subHeadingClass="subheading" />
        <div class="grid md:grid-cols-4 md:gap-4  mx-auto ">
            @foreach ($similarProperties as $property)
            <div class="featured-investment-card m-featured-page-card simmilar-project-card">
                <x-featured-investment-section featuredCardClass="project-page-image-dev" src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" imageClass="project-page-image" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" url="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                <x-button class="featured-investment-button !py-2" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif



@if($similarProperties->count() > 0)
<section class="md:px-8 px-4 pb-0 pt-0 md:mt-4 bg-white text-center block md:hidden">
    <div class="container max-w-6xl mx-auto ">
        <x-heading-subheading heading="Similar Projects" subheading="" headingClass="heading mt-[65px]" subHeadingClass="subheading" />
        <div class=" gap-2 mx-auto project-each-slider-mobile">
            @foreach ($similarProperties as $property)
            <div class="featured-investment-card m-featured-page-card ">
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
            loop: true,
            autoplaySpeed: 3000,
        });
    });



    $(document).ready(function() {
        $(document).ready(function() {
            $('.project-each-slider-mobile').slick({
                 slidesToShow: 1.2,
                slidesToScroll: 1,
                infinite: false,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768, // sm only
                    settings: {
                        slidesToShow: 2.3,
                        slidesToScroll: 1,
                        centerMode: false,
                        variableWidth: false,
                        autoplay: true,
                        loop: true,
                        autoplaySpeed: 3000,
                        dots: false,
                    }
                }]
            });


        });


    });

</script>

@endsection