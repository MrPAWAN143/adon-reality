@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Awards and Recognitions</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">


@endsection

@section('content')

<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('awards-and-recognitions') }}" class="ml-[-5px]">Awards & Recognitions</a></div>
</section>
<section class="md:px-0 px-0  md:max-w-6xl w-full  mx-auto md:py-8 sm:py-2 bg-white">
    <div>
        <x-heading-subheading heading="Awards & Recognitions" subheading="Celebrating Our Journey of Excellence in Real Estate" headingClass="heading text-center" subHeadingClass="subheading text-md mb-4" />
        </div>
        <div class="max-w-3xl m-auto px-6 mt-0">
            <p class="text-center text-sm">Over the years, Adon Realty has been recognized for our commitment to innovation, sustainability, and excellence. These accolades reflect the trust of our clients and our team’s unwavering dedication to redefining real estate experiences.</p>
        </div>


        <div class="max-w-2xl mx-auto px-4 py-4 pb-8 mt-4">
            <!-- Filters -->
            <div class="flex justify-center m-auto">
                <select class="border-2 border-primary bg-white text-txBlack-gray rounded-full px-4 m-auto py-2 w-36 focus:outline-none focus:ring-2 focus:ring-primary transition duration-300">
                    <option>Year</option>
                    <option>Architecture</option>
                    <option>Interior</option>
                    <option>Exterior</option>
                </select>

            </div>

            <div class="flex flex-col md:flex-row items-center justify-between w-full max-w-3xl bg-white rounded-2xl p-1 px-2 mt-4 border border-primary shadow-md">

                <div class="flex w-full items-center rounded-2xl px-4 py-1 ">
                    <x-zondicon-search class="w-6 h-6 " />
                    <input type="text" placeholder="Search blog articles..."
                        class="w-full outline-none text-sm bg-transparent border-none focus:border-none focus:outline-none" />
                </div>

                <!-- Button -->
                <button class="bg-primary border-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-semibold px-10 py-2 rounded-full mt-2 md:mt-0 md:ml-2 transition duration-300">
                    Search
                </button>
            </div>

        </div>

        <div class="px-6 py-0 mt-8 bg-white">
            <!-- Featured Awards & Recognitions -->
            <h2 class="text-2xl font-bold mb-6">Featured Awards & Recognitions</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <x-awards
                    image="{{ asset('assets/images/awards/best-commercial.png') }}"
                    alt="Best Commercial Project 2024"
                    class="featured-investment-img"
                    title="Best Commercial Project 2024"
                    by="By CREDAI India"
                    description="Recognised for our DLF Cyber Hub tower that redefines premium office spaces with smart tech and green design." />
                <x-awards
                    image="{{ asset('assets/images/awards/sustainable-design.png') }}"
                    alt="Excellence in Sustainable Design"
                    class="featured-investment-img"
                    title="Excellence in Sustainable Design"
                    by="By Green Building Council"
                    description="Awarded for incorporating eco-conscious architecture in our Noida residential and commercial developments." />
                <x-awards
                    image="{{ asset('assets/images/awards/realty-brand.png') }}"
                    alt="Realty Brand of the Year"
                    class="featured-investment-img"
                    title="Realty Brand of the Year"
                    by="By Realty + Awards"
                    description="Honored for our brand leadership and customer satisfaction in North India, reflecting our commitment to quality, trust, innovation." />
            </div>

            <!-- Past Awards & Recognitions -->
            <h2 class="text-2xl font-bold mb-6 mt-10">Past Awards & Recognitions</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-6">
                <x-awards image="{{ asset('assets/images/awards/smart-urban.png') }}" alt="Smart Urban Developer 2023" class="featured-investment-img" title="Smart Urban Developer 2023" by="By National Infrastructure Council" description="Awarded for our integration of smart-city technologies into residential and commercial spaces across Noida and Gurugram." />
                <x-awards image="{{ asset('assets/images/awards/real-estate-innovator.png') }}" alt="Top Real Estate Innovator 2022" class="featured-investment-img" title="Top Real Estate Innovator 2022" by="By Realty Tech Forum" description="Recognized for pioneering the use of AI-powered customer support and digital walkthroughs in real estate sales." />
                <x-awards image="{{ asset('assets/images/awards/luxury-living.png') }}" alt="Best Luxury Living Concept 2021" class="featured-investment-img" title="Best Luxury Living Concept 2021" by="By India Realty Awards" description="Celebrated for our flagship premium project offering luxury residences with concierge services and resort-style amenities." />
                <x-awards image="{{ asset('assets/images/awards/green-construction.png') }}" alt="Green Constructions Excellence 2020" class="featured-investment-img" title="Green Constructions Excellence 2020" by="By IGBC (Indian Green Building Council)" description="Appreciated for our sustainable design practices, rainwater harvesting systems, and energy-efficient architecture." />
                <x-awards image="{{ asset('assets/images/awards/trusted-developer.png') }}" alt="Most Trusted Developer 2019" class="featured-investment-img" title="Most Trusted Developer 2019" by="By Homebuyers’ Choice Awards" description="Earned for consistent on-time delivery, transparent processes, and high customer satisfaction ratings." />
                <x-awards image="{{ asset('assets/images/awards/customer-choice.png') }}" alt="Customer Choice Award 2018" class="featured-investment-img" title="Customer Choice Award 2018" by="By Property Insights Magazine" description="Voted as the most preferred builder in Delhi-NCR for residential and commercial properties." />
                <x-awards image="{{ asset('assets/images/awards/emerging-developer.png') }}" alt="Emerging Realty Star 2017" class="featured-investment-img" title="Emerging Realty Star 2017" by="By Business Realty Council" description="Recognized as a fast-rising developer transforming the real estate landscape with visionary projects." />
                <x-awards image="{{ asset('assets/images/awards/architectural-innovation.png') }}" alt="Architectural Innovation Award 2016" class="featured-investment-img" title="Architectural Innovation Award 2016" by="By Design & Build Forum" description="Awarded for bold, innovative architecture that blends functionality with striking aesthetics." />
                <x-awards image="{{ asset('assets/images/awards/community-planning.png') }}" alt="Excellence in Community Planning 2015" class="featured-investment-img" title="Excellence in Community Planning 2015" by="By Urban India Awards" description="Honored for crafting self-sustaining township designs with green zones, community hubs, and seamless connectivity." />
            </div>
        </div>




    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />
@endsection