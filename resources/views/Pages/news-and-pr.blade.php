@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - News and PR</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">


@endsection

@section('content')

<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('news') }}">News & PR</a></div>
</section>
<section class="px-4 pt-8 pb-0 sm:py-2 bg-white max-w-7xl mx-auto">
    <div class="container max-w-6xl mx-auto">
        <x-page-path class="path" path="Home > News & PR" />
        <x-heading-subheading heading="News & PR" subheading="We provide full articles or story links featuring Adon in reputed publications and PR coverage." headingClass="heading text-center" subHeadingClass="subheading text-sm mb-4" />
    </div>



    <div class="px-6 py-0 mt-8 bg-white">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-6 mb-12 ">
            <x-awards
                image="{{ asset('assets/images/news-pr/best-commercial.jpg') }}"
                alt="Best Commercial Project 2024"
                class="featured-investment-img"
                title="Best Commercial Project 2024"
                by="By CREDAI India"
                description="Recognised for our DLF Cyber Hub tower that redefines premium office spaces with smart tech and green design."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />
                

            <x-awards
                image="{{ asset('assets/images/news-pr/sustainable-future.jpg') }}"
                alt="The Future of Sustainable Living in Urban India"
                class="featured-investment-img"
                title="The Future of Sustainable Living in Urban India"
                by="April 15, 2025"
                description="Discover how eco-friendly technologies are reshaping modern residences into sustainable havens."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/urban-living.jpg') }}"
                alt="Innovations in Sustainable Urban Living in India"
                class="featured-investment-img"
                title="Innovations in Sustainable Urban Living in India"
                by="October 10, 2025"
                description="Explore how green technologies are transforming the cities into eco-friendly sanctuaries."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/condo-changing.jpg') }}"
                alt="Luxury Condo Developments Changing City Skylines"
                class="featured-investment-img"
                title="Luxury Condo Developments Changing City Skylines"
                by="March 11, 2025"
                description="Explore the latest trends in luxury condos and their impact on urban landscapes."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/metro-housing.jpg') }}"
                alt="Affordable Housing Initiatives in Metro Areas"
                class="featured-investment-img"
                title="Affordable Housing Initiatives in Metro Areas"
                by="January 16, 2025"
                description="Explore innovative solutions combating the affordable housing crisis in major cities."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/estate-practices.jpg') }}"
                alt="Sustainable Real Estate Practices on the Rise"
                class="featured-investment-img"
                title="Sustainable Real Estate Practices on the Rise"
                by="June 22, 2025"
                description="Understanding how eco-friendly practices are becoming the norm in the real estate industry."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/green-future.jpg') }}"
                alt="Sustainable Housing Solutions For a Greener Future"
                class="featured-investment-img"
                title="Sustainable Housing Solutions For a Greener Future"
                by="March 9, 2025"
                description="Explore eco-friendly homes that prioritize sustainability and energy efficiency."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/smart-home-innovation.jpg') }}"
                alt="Smart Home Innovations Revolutionizing Living Spaces"
                class="featured-investment-img"
                title="Smart Home Innovations Revolutionizing Living Spaces"
                by="March 10, 2025"
                description="Uncover the latest smart technologies transforming the way we live in homes."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/housing-communities.jpg') }}"
                alt="Affordable Housing Initiatives Building Communities"
                class="featured-investment-img"
                title="Affordable Housing Initiatives Building Communities"
                by="June 04, 2025"
                description="Find out about ongoing projects aimed at creating affordable living spaces in urban areas."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/suburban-retreat.jpg') }}"
                alt="Serene Suburban Retreat Embrace Tranquility and Space"
                class="featured-investment-img"
                title="Serene Suburban Retreat Embrace Tranquility and Space"
                by="March 10, 2025"
                description="Explore spacious homes surrounded by nature, perfect for families."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/coastal-dreams.jpg') }}"
                alt="Coastal Dream Homes Breathe in the Ocean Breeze"
                class="featured-investment-img"
                title="Coastal Dream Homes Breathe in the Ocean Breeze"
                by="March 02, 2025"
                description="Find stunning beachfront properties with breathtaking views and easy access to the shore."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />

            <x-awards
                image="{{ asset('assets/images/news-pr/timeless-charm.jpg') }}"
                alt="Explore the Timeless Charm of Our Neighborhoods"
                class="featured-investment-img"
                title="Explore the Timeless Charm of Our Neighborhoods"
                by="November 18, 2025"
                description="Experience the perfect fusion of vintage elegance and contemporary living in our beautifully renovated homes."
                buttonText="Read More"
                buttonClass="newsAndPrButton" />


        </div>

    </div>

</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection