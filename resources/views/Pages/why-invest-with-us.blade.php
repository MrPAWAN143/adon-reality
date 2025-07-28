@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Why Invest With Us</title>
@endsection
@section('styles')
@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('why-invest-with-us') }}">Why Invest With Us</a> </div>
</section>
<x-banner-section class="px-4  max-h-[20vh] h-[20vh] md:h-[40vh] md:max-h-[40vh]" mobileBanner="{{ asset('assets/images/bannerImages/why-choose.webp') }}" image="{{ asset('assets/images/bannerImages/why-choose.webp') }}" title="Secure Your Future with Smart Investments" subtitle="Adon Realty helps you grow your wealth through
carefully planned real estate opportunities." />
<section class="md:py-10 py-5 bg-white text-center md:max-w-4xl mx-auto">
    <h2 class="text-[16px] md:text-[24px] text-txBlack font-semibold md:mb-4 mb-2">A Legacy of Trust</h2>

    <div class="flex flex-wrap md:justify-between justify-center items-center gap-6 px-4">
        <div class="w-[45%] md:w-[30%] max-w-xs">
            <x-legacy-card class="legacy-card" title="17+" description="Years in the Real Estate Market" />
        </div>
        <div class=" w-[45%] md:w-[30%] max-w-xs ">
            <x-legacy-card class="legacy-card" title="2000+" description="Happy Investors" />
        </div>
        <div class="w-auto md:w-[30%] max-w-xs flex justify-center">
            <x-legacy-card class="legacy-card" title="₹1500 Cr+" description="Investment Managed" />
        </div>
    </div>
</section>



<section class="py-4 bg-white text-center max-w-[1100px] mx-auto md:px-0 px-4">
    <h2 class="text-[16px] md:text-[24px] text-txBlack font-semibold mb-10">Why Choose Adon Realty</h2>

    <div class=" mx-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-4 justify-between items-center">



        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <x-zondicon-location class="w-6 h-6 text-primary" />
                </div>
                <div class="text-txBlack text-start order-1 md:pr-32 pr-20">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Prime<br>Locations</h3>
                </div>
            </div>

        </x-choose-adon-reality>


        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/pre-aproove-area.svg') }}" alt="Pre-approved Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-32 pr-20">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">High ROI<br>properties</h3>
                </div>
            </div>

        </x-choose-adon-reality>


        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/experienced-advisory.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Experience <br>dAdvisory Team</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/secure-verified-properties.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Secure & Verified<br>Properties</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/personalised-investment-planning.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Personalised Investment Planning</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/pre-aproove-area.svg') }}" alt="Pre-approved Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Pre-approved,<br>RERA-Compliant Projects</h3>
                </div>
            </div>

        </x-choose-adon-reality>

        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/transparent-dealings.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Transparent<br>Dealings</h3>
                </div>
            </div>

        </x-choose-adon-reality>


        <x-choose-adon-reality>
            <div class="flex flex-row-reverse items-center justify-between md:p-0 p-2">
                <div class="bg-[#f7f2f3] rounded-xl max-h-[20] shadow-xl ">
                    <img src="{{ asset('assets/images/icons/personalised-investment-planning.svg') }}" alt="Experienced Advisory Icon" class="w-6 h-6 text-primary">
                </div>
                <div class="text-txBlack text-start order-1 md:pr-12 pr-10">
                    <h3 class="font-semibold leading-5 text-[10px] md:text-[14px] ml-1">Complete<br>Legal Support</h3>
                </div>
            </div>

        </x-choose-adon-reality>

    </div>

    <div class="py-8 mt-4">
        <h2 class="text-[16px] md:text-[24px] text-txBlack font-semibold mb-10">
            Traditional Investments vs. Real Estate
        </h2>

        <div class="max-w-xl mx-auto overflow-hidden rounded-2xl border border-primary">


            <table class="w-full text-left border-collapse">
                <thead class="bg-white font-semibold">
                    <tr>
                        <th class="border-b-r border-primary px-3 py-2 md:text-[16px] text-[14px] font-semibold">Feature</th>
                        <th class="border-b border-l border-r border-primary px-3 py-2 md:text-[16px] text-[14px] font-semibold">Stocks/FDs</th>
                        <th class="border-b border-primary px-3 py-2 md:text-[16px] text-[14px] font-semibold">Real Estate with Adon</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="border-t border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Risk Level</td>
                        <td class="border border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">High/Moderate</td>
                        <td class="border-t border-b border-l border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Low/Moderate</td>
                    </tr>
                    <tr>
                        <td class="border-t border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Tangibility</td>
                        <td class="border border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">No</td>
                        <td class="border-t border-b border-l border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Yes</td>
                    </tr>
                    <tr>
                        <td class="border-t border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Long-Term Returns</td>
                        <td class="border border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Fluctuating</td>
                        <td class="border-t border-b border-l border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Stable & Growing</td>
                    </tr>
                    <tr>
                        <td class="border-t border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Control Over Asset</td>
                        <td class="border-l border-t border-r border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">No</td>
                        <td class="border-t border-l border-primary px-3 py-2 md:text-[12px] text-[10px] font-normal">Yes</td>
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
        @if(isset($testimonials) && $testimonials->count() > 0)
        @foreach ($testimonials as $testimonial)
        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center md:mb-3 mb-2">
                    <div class="text-primary md:text-xl text-base">★★★★★</div>
                </div>
                <p class="md:mb-4 mb-2 md:text-md text-xs clamp-2-lines">{{ $testimonial->review_text }}</p>
                <div class="flex items-center">
                    <img src="{{ asset($testimonial->photo) }}" alt="{{ $testimonial->name }}" class="w-10 h-10 rounded-[6px] mr-3">
                    <div>
                        <p class="font-semibold md:text-md text-xs">{{ $testimonial->name }}</p>
                        <p class="text-[8px] md:text-xs text-txBlack single-line-ellipsis-homepage">{{ $testimonial->role }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>


</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection