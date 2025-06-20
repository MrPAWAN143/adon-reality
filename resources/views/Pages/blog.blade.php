@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Blog</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">

@endsection

@section('content')
<section class="px-4  bg-white pb-8">
    <div class="container max-w-7xl mx-auto">
        <x-page-path class="path" path="Home > Blog" />
        <x-heading-subheading heading="Our Blog & Insights" subheading="Get the latest updates, guides, and industry insights to help you make informed decisions about your next dream home." headingClass="heading text-center " subHeadingClass="subheading mb-2" />

        <div class="max-w-2xl mx-auto px-4 py-4 pb-8">
            <!-- Search Bar -->
            <div class="mb-6">
                <div class="flex items-center rounded-2xl border border-gray px-4 py-1 shadow-sm">
                  <x-zondicon-search  class="w-6 h-6 "/>
                    <input type="text" placeholder="Search blog articles..."
                        class="w-full outline-none text-sm bg-transparent border-none focus:border-none focus:outline-none" />
                </div>
                

            </div>

            <!-- Filters -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <select class="hero-section-select ">
                    <option>Category</option>
                    <option>Architecture</option>
                    <option>Interior</option>
                    <option>Exterior</option>
                </select>

                <select class="hero-section-select">
                    <option>Year</option>
                    <option>2025</option>
                    <option>2024</option>
                    <option>2023</option>
                </select>

                <select class="hero-section-select">
                    <option>Tags</option>
                    <option>Modern</option>
                    <option>Luxury</option>
                    <option>Minimal</option>
                </select>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
        </div>

    </div>

</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />
@endsection


@section('scripts')

@endsection