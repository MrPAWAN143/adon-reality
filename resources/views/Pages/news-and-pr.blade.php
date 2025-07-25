@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - News and PR</title>
@endsection
@section('styles')
@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('news') }}">News & PR</a></div>
</section>
<section class="md:px-0 mb-8 px-4 md:max-w-[1100px] w-full  mx-auto  bg-white">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="News & PR" subheading="We provide full articles or story links featuring Adon in reputed publications and PR coverage." headingClass="heading text-center" subHeadingClass="subheading text-sm mb-4" />
    </div>



    <div class="md:px-6 py-0 mt-4 bg-white">
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
            <x-awards
                image="{{ asset('assets/images/news-pr/best-commercial.jpg') }}"
                alt="Best Commercial Project 2024"
                class="featured-investment-img news-page"
                title="Best Commercial Project 2024"
                by="By CREDAI India"
                description="Recognised for our DLF Cyber Hub tower that redefines premium office spaces with smart tech and green design."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'best-commercial-project-2024']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />


            <x-awards
                image="{{ asset('assets/images/news-pr/sustainable-future.jpg') }}"
                alt="The Future of Sustainable Living in Urban India"
                class="featured-investment-img"
                title="The Future of Sustainable Living in Urban India"
                by="April 15, 2025"
                description="Discover how eco-friendly technologies are reshaping modern residences into sustainable havens."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'the-future-of-sustainable-living-in-urban-india']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/urban-living.jpg') }}"
                alt="Innovations in Sustainable Urban Living in India"
                class="featured-investment-img"
                title="Innovations in Sustainable Urban Living in India"
                by="October 10, 2025"
                description="Explore how green technologies are transforming the cities into eco-friendly sanctuaries."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'innovations-in-sustainable-urban-living-in-india']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/condo-changing.jpg') }}"
                alt="Luxury Condo Developments Changing City Skylines"
                class="featured-investment-img"
                title="Luxury Condo Developments Changing City Skylines"
                by="March 11, 2025"
                description="Explore the latest trends in luxury condos and their impact on urban landscapes. Hello lorem ipsum dolor sit amet, consectetur adipiscing elit."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'luxury-condo-developments-changing-city-skylines']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/metro-housing.jpg') }}"
                alt="Affordable Housing Initiatives in Metro Areas"
                class="featured-investment-img"
                title="Affordable Housing Initiatives in Metro Areas"
                by="January 16, 2025"
                description="Explore innovative solutions combating the affordable housing crisis in major cities. Hello lorem ipsum dolor sit amet, consectetur adipiscing elit."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'affordable-housing-initiatives-in-metro-areas']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/estate-practices.jpg') }}"
                alt="Sustainable Real Estate Practices on the Rise"
                class="featured-investment-img"
                title="Sustainable Real Estate Practices on the Rise"
                by="June 22, 2025"
                description="Understanding how eco-friendly practices are becoming the norm in the real estate industry. Hello lorem ipsum dolor sit amet, consectetur adipiscing elit."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'sustainable-real-estate-practices-on-the-rise']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/green-future.jpg') }}"
                alt="Sustainable Housing Solutions For a Greener Future"
                class="featured-investment-img"
                title="Sustainable Housing Solutions For a Greener Future"
                by="March 9, 2025"
                description="Explore eco-friendly homes that prioritize sustainability and energy efficiency."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'sustainable-housing-solutions-for-a-greener-future']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/smart-home-innovation.jpg') }}"
                alt="Smart Home Innovations Revolutionizing Living Spaces"
                class="featured-investment-img"
                title="Smart Home Innovations Revolutionizing Living Spaces"
                by="March 10, 2025"
                description="Uncover the latest smart technologies transforming the way we live in homes."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'smart-home-innovations-revolutionizing-living-spaces']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/housing-communities.jpg') }}"
                alt="Affordable Housing Initiatives Building Communities"
                class="featured-investment-img"
                title="Affordable Housing Initiatives Building Communities"
                by="June 04, 2025"
                description="Find out about ongoing projects aimed at creating affordable living spaces in urban areas."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'affordable-housing-initiatives-building-communities']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/suburban-retreat.jpg') }}"
                alt="Serene Suburban Retreat Embrace Tranquility and Space"
                class="featured-investment-img"
                title="Serene Suburban Retreat Embrace Tranquility and Space"
                by="March 10, 2025"
                description="Explore spacious homes surrounded by nature, perfect for families. Hello lorem ipsum dolor sit amet, consectetur adipiscing elit."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'serene-suburban-retreat-embrace-tranquility-and-space']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/coastal-dreams.jpg') }}"
                alt="Coastal Dream Homes Breathe in the Ocean Breeze"
                class="featured-investment-img"
                title="Coastal Dream Homes Breathe in the Ocean Breeze"
                by="March 02, 2025"
                description="Find stunning beachfront properties with breathtaking views and easy access to the shore."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'coastal-dream-homes-breathe-in-the-ocean-breeze']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />

            <x-awards
                image="{{ asset('assets/images/news-pr/timeless-charm.jpg') }}"
                alt="Explore the Timeless Charm of Our Neighborhoods"
                class="featured-investment-img"
                title="Explore the Timeless Charm of Our Neighborhoods"
                by="November 18, 2025"
                description="Experience the perfect fusion of vintage elegance and contemporary living in our beautifully renovated homes."
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', ['slug' => 'explore-the-timeless-charm-of-our-neighborhoods']) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />


        </div>

    </div>

</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection