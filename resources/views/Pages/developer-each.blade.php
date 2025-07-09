@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Projects Each Brand</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
@endsection

@section('content')
<section class="px-4  bg-white pb-8">
    <div class="container max-w-7xl mx-auto">

        <x-page-path class="path" path="Home > Developers > Single Developer Details" />

        <div class="flex md:flex-row flex-col-reverse items-center justify-between mb-0">
            <div class="flex-1 px-6">
                <x-heading-subheading heading="Explore Projects by DLF" subheading="Discover premium real estate offerings tailored to your lifestyle needs" headingClass="heading " subHeadingClass="subheading dev-start mb-4" />
            </div>

            <div class="flex-1 flex justify-end items-center">
                <img src="{{ asset('assets/images/partnersLogo/dlf.png') }}" alt="Brand Logo">
            </div>
        </div>
        <div class="w-full px-6 mt-0">
            <p class="pr-[10%] text-sm">DLF Limited is one of India's most prestigious and trusted real estate developers, with over seven decades of excellence. Known for creating iconic residential, commercial, and retail properties across the country, DLF has redefined urban living through thoughtful design, unmatched construction quality, and world-class amenities. With a legacy built on innovation and integrity, DLF continues to shape skylines and create vibrant communities that stand the test of time.</p>
        </div>



        <div class="max-w-3xl mx-auto px-4 py-4 pb-8 mt-4">
            <!-- Filters -->
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <select class="hero-section-select ">
                    <option>Location</option>
                    <option>Architecture</option>
                    <option>Interior</option>
                    <option>Exterior</option>
                </select>

                <select class="hero-section-select">
                    <option>Project</option>
                    <option>2025</option>
                    <option>2024</option>
                    <option>2023</option>
                </select>

                <select class="hero-section-select">
                    <option>Status</option>
                    <option>Modern</option>
                    <option>Luxury</option>
                    <option>Minimal</option>
                </select>

                <select class="hero-section-select">
                    <option>Budget</option>
                    <option>Modern</option>
                    <option>Luxury</option>
                    <option>Minimal</option>
                </select>
            </div>

            <div class="flex flex-row items-center justify-between w-full max-w-3xl bg-white rounded-2xl p-1 px-2 mt-4 border border-primary shadow-md">

                <div class="flex w-full items-center rounded-2xl px-4 py-1 ">
                    <x-zondicon-search class="w-6 h-6 " />
                    <input type="text" placeholder="Search blog articles..."
                        class="w-full outline-none text-sm bg-transparent border-none focus:border-none focus:outline-none" />
                </div>

                <!-- Button -->
                <button class="bg-primary border-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-semibold md:px-10 px-4 py-2 rounded-full md:mt-0 md:ml-2 transition duration-300">
                    Search
                </button>
            </div>

        </div>


       <div class="max-w-5xl mx-auto px-4 py-4 pb-8">
  <table class="min-w-full border border-gray-300 text-left text-sm">
    <tbody class="divide-y divide-gray-300">
      <tr class="bg-white">
        <th class="font-bold p-4 w-1/4 align-top border-r">Founded in</th>
        <th class="p-4 font-normal text-gray-700">1946</th>
      </tr>
      <tr class="bg-gray-50">
        <th class="font-bold p-4 align-top border-r">Completed Projects</th>
        <th class="p-4 font-normal text-gray-700">32 Million sq m area delivered</th>
      </tr>
      <tr class="bg-white">
        <th class="font-bold p-4 align-top border-r">On-going Projects</th>
        <th class="p-4 font-normal text-gray-700">N/A</th>
      </tr>
      <tr class="bg-gray-50">
        <th class="font-bold p-4 align-top border-r">Owner of Group</th>
        <th class="p-4 font-normal text-gray-700">
          Mr. Chaudhary Raghvendra Singh, Founder<br>
          Mr Rajiv Singh, Chairman
        </th>
      </tr>
      <tr class="bg-white">
        <th class="font-bold p-4 align-top border-r">Operating in Cities</th>
        <th class="p-4 font-normal text-gray-700">
          Gurgaon, New Delhi, Hyderabad, Bangalore, Kochi, Kolkata, Indore, New Chandigarh, Chennai, Lucknow, Shimla, Noida
        </th>
      </tr>
      <tr class="bg-gray-50">
        <th class="font-bold p-4 align-top border-r">Official Website</th>
        <th class="p-4 font-normal text-blue-600 underline">
          <a href="https://www.dlf.in/" target="_blank">https://www.dlf.in/</a>
        </th>
      </tr>
    </tbody>
  </table>
</div>



    </div>
</section>

<section class="px-4 max-w-7xl bg-white pb-8 m-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- 1. DLF Cyber City Tower -->
        <div class="featured-investment-card">
            <x-featured-investment-section
                src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}"
                alt="DLF Cyber City Tower"
                heading="DLF Cyber City Tower"
                location="Noida, Sector 62"
                rera="UPRERAI2345"
                status="Ongoing"
                roi="12%"
                developer="DLF"
                variety="Multiplex / Commercial"
                size="5000 sq. ft."
                price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>

        <!-- 2. M3M Corporate Heights -->
        <div class="featured-investment-card">
            <x-featured-investment-section
                src="{{ asset('assets/images/allImages/M3MCorporateHeights.png') }}"
                alt="M3M Corporate Heights"
                heading="M3M Corporate Heights"
                location="Sector 67, Gurgaon"
                rera="HRERA/GGN/2023/091"
                status="Ready to Move"
                roi="10%"
                developer="DLF"
                variety="Commercial Office Tower"
                size="7000 sq. ft."
                price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>

        <!-- 3. M3M Atrium -->
        <div class="featured-investment-card">
            <x-featured-investment-section
                src="{{ asset('assets/images/allImages/M3MAtrium.png') }}"
                alt="M3M Atrium"
                heading="M3M Atrium"
                location="Sector 140, Noida Expressway"
                rera="UPRERA-2023-0567"
                status="Pre-Launch"
                roi="12%"
                developer="DLF"
                variety="High Street Retail"
                size="4800 sq. ft."
                price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>

        <!-- 4. DLF Limited -->
        <div class="featured-investment-card">
            <x-featured-investment-section
                src="{{ asset('assets/images/allImages/DLFLimited.jpg') }}"
                alt="DLF Limited"
                heading="DLF Limited"
                location="Noida, Sector 63"
                rera="UPRERAI2356"
                status="Ongoing"
                roi="18%"
                developer="DLF"
                variety="Multiplex / Commercial"
                size="9000 sq. ft."
                price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>

        <!-- 5. Lodha Group -->
        <div class="featured-investment-card">
            <x-featured-investment-section
                src="{{ asset('assets/images/allImages/LodhaGroup.jpg') }}"
                alt="Lodha Group"
                heading="Lodha Group"
                location="Sector 23, Gurgaon"
                rera="HRERA/GGN/2023/291"
                status="Ready to Move"
                roi="20%"
                developer="DLF"
                variety="Commercial Office Tower"
                size="10,000 sq. ft."
                price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>

        <!-- 6. NCC Limited -->
        <div class="featured-investment-card">
            <x-featured-investment-section
                src="{{ asset('assets/images/allImages/NCCLimited.jpg') }}"
                alt="NCC Limited"
                heading="NCC Limited"
                location="Sector 23, Noida Expressway"
                rera="UPRERA-2025-0567"
                status="Pre-Launch"
                roi="23%"
                developer="DLF"
                variety="High Street Retail"
                size="4200 sq. ft."
                price="Price on Demand" />
            <x-button class="featured-investment-button" text="View Details" />
        </div>
    </div>

</section>
<section class="px-4 py-8 sm:py-2 bg-white ">
    <div class="container max-w-7xl mx-auto text-center">

        <x-heading-subheading heading="Projects on prime location" subheading=" Discover top-tier properties situated in the most sought-after locations." headingClass="heading" subHeadingClass="subheading" />

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-5 sm:gap-2 max-w-full mx-auto ">

            <!-- Card 1 -->
            <a href="" class="relative rounded-xl overflow-hidden group">

                <img src="{{asset('assets/images/allImages/noida.png')}}" alt="Noida" class="prime-location-image" />
                <div class="prime-location-overlay">
                    <span class="prime-location-name">Noida</span>
                </div>
            </a>

            <!-- Card 2 -->
            <a class="relative rounded-xl overflow-hidden group">
                <img src="{{asset('assets/images/allImages/gurugram.png')}}" alt="Gurugram" class="prime-location-image" />
                <div class="prime-location-overlay">
                    <span class="prime-location-name">Gurugram</span>
                </div>
            </a>

            <!-- Card 3 -->
            <a class="relative rounded-xl overflow-hidden group">
                <img src="{{asset('assets/images/allImages/delhi.png')}}" alt="Delhi" class="prime-location-image" />
                <div class="prime-location-overlay">
                    <span class="prime-location-name">Delhi</span>
                </div>
            </a>

            <!-- Card 4 -->
            <a class="relative rounded-xl overflow-hidden group">
                <img src="{{asset('assets/images/allImages/pune.png')}}" alt="Pune" class="prime-location-image" />
                <div class="prime-location-overlay">
                    <span class="prime-location-name">Pune</span>
                </div>
            </a>

        </div>
    </div>
</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection