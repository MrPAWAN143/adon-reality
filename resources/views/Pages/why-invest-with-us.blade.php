@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Why Invest With Us</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
@endsection
@section('content')
<div class="container max-w-6xl mx-auto">
    <x-page-path class="path" path="Home > Why Invest With us" />
</div>
<x-banner-section class="px-4 relative h-[65vh] max-h-[65vh]" image="{{ asset('assets/images/bannerImages/why-choose.webp') }}" title="Secure Your Future with Smart Investments" subtitle="Adon Realty helps you grow your wealth through
carefully planned real estate opportunities." />

<section class="py-10 bg-white text-center max-w-3xl mx-auto">
    <h2 class="text-2xl md:text-2xl font-bold mb-8">A Legacy of Trust</h2>

    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
        <x-legacy-card class="legacy-card" title="10+" description="Years in the Real Estate Market" />
        <x-legacy-card class="legacy-card" title="500+" description="Happy Investors" />
        <x-legacy-card class="legacy-card" title="₹100 Cr+" description="Investment Managed" />
    </div>
</section>


<section class="py-4 bg-white text-center">
    <h2 class="text-2xl md:text-2xl font-bold mb-10">Why Choose Adon Realty</h2>

    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4">
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Prime<br>Locations</p>
            </x-slot>
            <x-slot name="icon">
                <x-zondicon-location class="w-6 h-6 text-primary" />
            </x-slot>
        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Pre-approved,<br>RERA-Compliant Projects</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/pre-aproove-area.svg') }}" alt="Pre-approved Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Experienced<br>Advisory Team</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/experienced-advisory.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Secure & Verified<br>Properties</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/secure-verified-properties.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">High ROI<br>properties</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/high-roi-porperties.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Transparent<br>Dealings</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/transparent-dealings.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Complete<br>Legal Support</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/complete-legal-support.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>
        <x-choose-adon-reality>
            <x-slot name="content">
                <p class="font-semibold leading-5">Personalised<br>Investment Planning</p>
            </x-slot>
            <x-slot name="icon">
                <img src="{{ asset('assets/images/icons/personalised-investment-planning.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
            </x-slot>
        </x-choose-adon-reality>
    </div>

    <div class="py-8 mt-4">
        <h2 class="text-2xl md:text-2xl font-bold mb-4">
            Traditional Investments vs. Real Estate
        </h2>

        <div class="max-w-xl mx-auto overflow-hidden rounded-2xl border border-primary">


            <table class="w-full text-left border-collapse">
                <thead class="bg-white font-semibold">
                    <tr>
                        <th class="border-b-r border-primary px-3 py-2">Feature</th>
                        <th class="border-b border-l border-r border-primary px-3 py-2">Stocks/FDs</th>
                        <th class="border-b border-primary px-3 py-2">Real Estate with Adon</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="border-t border-primary px-3 py-2">Risk Level</td>
                        <td class="border border-primary px-3 py-2">High/Moderate</td>
                        <td class="border-t border-b border-l border-primary px-3 py-2">Low/Moderate</td>
                    </tr>
                    <tr>
                        <td class="border-t border-primary px-3 py-2">Tangibility</td>
                        <td class="border border-primary px-3 py-2">No</td>
                        <td class="border-t border-b border-l border-primary px-3 py-2">Yes</td>
                    </tr>
                    <tr>
                        <td class="border-t border-primary px-3 py-2">Long-Term Returns</td>
                        <td class="border border-primary px-3 py-2">Fluctuating</td>
                        <td class="border-t border-b border-l border-primary px-3 py-2">Stable & Growing</td>
                    </tr>
                    <tr>
                        <td class="border-t border-primary px-3 py-2">Control Over Asset</td>
                        <td class="border-l border-t border-r border-primary px-3 py-2">No</td>
                        <td class="border-t border-l border-primary px-3 py-2">Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<section class="px-4 py-8 bg-white">
    <div class="container max-w-5xl mx-auto px-4">

        <x-heading-subheading heading="Hear From Our Investors" subheading="Genuine testimonials and success stories from our valued investors." headingClass="heading text-center" subHeadingClass="subheading text-center" />
    </div>


  <div class="testimonial-slider max-w-5xl mx-auto px-3 !flex !gap-5 justify-center items-center overflow-x-auto">
        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center mb-3">
                    <div class="text-primary text-xl">★★★★★</div>
                </div>
                <p class="mb-4">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Nathan Kapoor</p>
                        <p class="text-xs text-txBlack">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="review-card">
            <div class="bg-white rounded-xl p-3 text-sm text-txBlack">
                <div class="flex items-center mb-3">
                    <div class="text-primary text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-txBlack">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-card">
            <div class="bg-white rounded-xl p-3 text-sm text-txBlack">
                <div class="flex items-center mb-3">
                    <div class="text-primary text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-txBlack">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-card">
            <div class="bg-white rounded-xl p-3 text-sm text-txBlack">
                <div class="flex items-center mb-3">
                    <div class="text-primary text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-txBlack">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-card">
            <div class="bg-white rounded-xl p-3 text-sm text-txBlack">
                <div class="flex items-center mb-3">
                    <div class="text-primary text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-txBlack">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-card">
            <div class="bg-white rounded-xl p-3 text-sm text-txBlack">
                <div class="flex items-center mb-3">
                    <div class="text-primary text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-txBlack">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection