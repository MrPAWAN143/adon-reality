@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Developer Partners</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">

@endsection

@section('content')
<section class="px-4  bg-white pb-8">
    <div class="container max-w-7xl mx-auto">
        <x-page-path class="path" path="Home > Blog" />

        <div class="flex flex-row items-center justify-between mb-8">
            <div class="flex-1 px-6">
                <x-heading-subheading heading="Our Partnered Developers" subheading="Explore top real estate developers and their best projects." headingClass="heading text-start !my-2" subHeadingClass="subheading mb-2 dev-start" />
            </div>

            <div class="flex-1 flex justify-end">
                <select class="hero-section-select w-40 font-normal">
                    <option>Filter By</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest</option>
                </select>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-10 gap-x-6">

            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/dlf.png') }}"
                alt="DLF Limited"
                heading="DLF Limited"
                description="Building India"
                projectsPartnered="18"
                presence="Gurgaon, Noida, Chennai" />

            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/raheja.png') }}"
                alt="Raheja Develop"
                heading="Raheja Develop"
                description="Committed to Excellence"
                projectsPartnered="10"
                presence="Gurgaon, Delhi, Noida" />

            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/m3m.png') }}"
                alt="M3M India"
                heading="M3M India"
                description="Magnificence in the Trinity of Men & Materials"
                projectsPartnered="8"
                presence="Gurgaon, Noida" />

            {{-- Row 2 --}}
            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/prima.jpg') }}"
                alt="Prima"
                heading="Prima"
                description="Building India"
                projectsPartnered="18"
                presence="Gurgaon, Noida, Chennai" />

            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/space.jpg') }}"
                alt="Space"
                heading="Space"
                description="Committed to Excellence"
                projectsPartnered="10"
                presence="Gurgaon, Delhi, Noida" />

            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/godrej.jpg') }}"
                alt="Godrej"
                heading="Godrej"
                description="Magnificence in the Trinity"
                projectsPartnered="8"
                presence="Gurgaon, Noida" />

            {{-- Row 3 --}}
            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/arena.jpg') }}"
                alt="Arena"
                heading="Arena"
                description="Building India"
                projectsPartnered="18"
                presence="Gurgaon, Noida, Chennai" />

            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/aura.jpg') }}"
                alt="Aura"
                heading="Aura"
                description="Committed to Excellence"
                projectsPartnered="10"
                presence="Gurgaon, Delhi, Noida" />

            <x-developer-partner-card
                partnerLogo="{{ asset('assets/images/partnersLogo/wave.jpg') }}"
                alt="Wave"
                heading="Wave"
                description="Magnificence in the Trinity"
                projectsPartnered="8"
                presence="Gurgaon, Noida" />

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



<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection



@section('scripts')


@endsection