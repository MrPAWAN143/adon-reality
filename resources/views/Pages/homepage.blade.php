@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Home page</title>

@endsection
@section('styles')
<style>

</style>
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">

@endsection
@section('homepage')
<section class="px-4 relative md:h-[80vh] md:max-h-[80vh] object-cover bg-cover bg-center" style="background-image: url('{{ asset('assets/images/bannerImages/hero-banner.webp') }}')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4 py-16">
        <!-- <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center">
            Discover High ROI Real Estate Projects in India
        </h1> -->
        <div class="flex flex-row items-center justify-start w-full max-w-3xl bg-white rounded-full md:py-2 py-1 px-2 mt-4 shadow-md">
            <div class="relative w-full md:w-[16%] ">
                <select class="hero-section-select home py-1 md:py-2">
                    <option>City</option>
                    <option>Delhi</option>
                    <option>Mumbai</option>
                    <option>Bangalore</option>
                </select>
            </div>
            <input
                type="text"
                placeholder="Search by city, ROI, project name..."
                class="search-input-homepage-herosection" />


            <!-- Button -->
            <button class="bg-primary border-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-semibold md:py-2 md:px-10 px-2 py-1 ml-[-20px] rounded-full  md:mt-0 md:ml-2 transition duration-300">
                Search
            </button>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap justify-center gap-3 mt-6">
            <span class="bg-bgSecondary  text-txBlack px-2 py-0  font-medium text-[16px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2  text-txBlack/0.4" /> 100% RERA-Approved Projects
            </span>
            <span class="bg-bgSecondary  text-txBlack px-2 py-0 font-medium text-[16px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2 text-txBlack/0.7" /> 12-18% Expected ROI
            </span>
            <span class="bg-bgSecondary  text-txBlack px-2 py-0 font-medium text-[16px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2 text-txBlack/0.7" /> End-to-End Legal Assistance
            </span>
            <span class="bg-bgSecondary  text-txBlack px-2 py-0 font-medium text-[16px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2 text-txBlack/0.7" /> Trusted by 2000+ Investors
            </span>
        </div>
    </div>
</section>
<section class="px-4 sm:py-4 py-8 md:pt-16 bg-white">
    <div class="container max-w-7xl mx-auto text-center">

        <x-heading-subheading heading="Why Invest with us" subheading=" Empowering You to Make Smarter, Safer, and More Profitable Investments." headingClass="heading" subHeadingClass="subheading" />
        <!-- Cards -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-5">

            <!-- Card 1 -->
            <div class="investCard">
                <div>
                    <h3 class="">Expert Investment Advisory</h3>
                    <p class="">
                        Get personalized guidance from seasoned real estate advisors to make informed investment decisions.
                    </p>
                </div>
                <img src="{{asset('assets/images/icons/advisory.png')}}" alt="Advisory" class=" " />
            </div>


            <!-- Card 2 -->
            <div class="investCard">
                <div>
                    <h3 class="">High-Performance Projects</h3>
                    <p class="">
                        Explore handpicked real estate projects offering consistent, high returns above market average benchmarks.
                    </p>
                </div>
                <span class="block w-12 h-12 m-auto shadow-[-1px_1px_0px_rgba(0,0,0,0.4)]">
                    <img src="{{ asset('assets/images/icons/performance.png') }}" alt="Performance" class="w-full h-full object-cover" />
                </span>

            </div>

            <!-- Card 3 -->
            <div class="investCard">
                <div>
                    <h3 class="">Complete Legal Transparency</h3>
                    <p>
                        All projects are RERA-approved with complete legal clarity, ensuring secure, trustworthy investments.
                    </p>
                </div>
                <img src="{{ asset('assets/images/icons/transparency.png') }}" alt="Legal" class="w-12 h-12" />
            </div>

            <!-- Card 4 -->
            <div class="investCard">
                <div>
                    <h3>NRI Investment Support</h3>
                    <p>
                        Comprehensive NRI support from property selection, documentation, compliance to final investment execution.
                    </p>
                </div>
                <img src="{{ asset('assets/images/icons/global.png') }}" alt="NRI" class="w-12 h-12" />
            </div>

            <div class="investCard">
                <div>
                    <h3>Data-Driven ROI Projections</h3>
                    <p>
                        Make smarter investment decisions using predictive analytics and accurate, data-driven ROI forecasts.
                    </p>
                </div>
                <img src="{{ asset('assets/images/icons/data-driven.png') }}" alt="Data" class="w-12 h-12" />
            </div>
            <div class="investCard">
                <div>
                    <h3>Exit & Rental Support</h3>
                    <p>
                        We provide smooth exit strategies and help manage rental income for hassle-free real estate returns.
                    </p>
                </div>
                <img src="{{ asset('assets/images/icons/support.png') }}" alt="Exit" class="w-12 h-12" />
            </div>

        </div>
    </div>
</section>
<section class="px-4 py-8 sm:py-2 bg-white">
    <div class="container max-w-7xl mx-auto text-center">

        <x-heading-subheading heading="Projects on prime location" subheading=" Discover top-tier properties situated in the most sought-after locations." headingClass="heading" subHeadingClass="subheading" />

        <div class="grid grid-cols-2 md:grid-cols-4 md:gap-5 !gap-4 max-w-full mx-auto ">

            @if(isset($primeLocation) && $primeLocation->count() > 0)
            @foreach ($primeLocation as $property)
            <!-- Card 1 -->
            <a href="{{ route('projects.each', $property->property_slug) }}" class="relative rounded-xl overflow-hidden group md:h-[300px] h-[200px] md:max-h-[300px]">
                <img src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" class="prime-location-image" />
                <div class="prime-location-overlay">
                    <span class="prime-location-name">{{ $property->property_city }}</span>
                </div>
            </a>
            @endforeach
            @endif



        </div>
    </div>
</section>

<section class="px-4 py-8 bg-white text-center hidden md:block">
    <div class="container max-w-7xl mx-auto text-center">

        <x-heading-subheading heading="Featured Investment Opportunities" subheading="Explore high-return investment options with trusted developers." headingClass="heading" subHeadingClass="subheading" />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">

            @if(isset($properties) && $properties->count() > 0)

            @foreach ($properties as $property)

            <div class="featured-investment-card">
                <x-featured-investment-section src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" class="featured-investment-img" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" reraUrl="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                <x-button class="featured-investment-button" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
            </div>

            @endforeach
            @endif




        </div>
        <div class="mt-10">
            <a href="{{ route('projects') }}" class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>

<section class="py-8 bg-white text-center block md:hidden ">
    <div class="container mx-auto text-center">

        <x-heading-subheading heading="Featured Investment Opportunities" subheading="Explore high-return investment options with trusted developers." headingClass="heading" subHeadingClass="subheading" />

        <div class="project-slider gap-8">

            @if(isset($properties) && $properties->count() > 0)

            @foreach ($properties as $property)

            <div class="featured-investment-card">
                <x-featured-investment-section src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" class="featured-investment-img" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" reraUrl="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                <x-button class="featured-investment-button" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
            </div>

            @endforeach
            @endif




        </div>
        <div class="mt-10">
            <a href="{{ route('projects') }}" class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>






<section class="px-4 py-8 bg-white text-center">
    <div class="container max-w-7xl mx-auto">
        <x-heading-subheading heading="What We Offer" subheading="Comprehensive solutions tailored to meet all your real estate needs." headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 ">
            <!-- Card -->
            <div class="what-we-offer-card">
                <h3>Property Investment Solutions</h3>
                <p>Maximize your returns with our real estate investment.</p>
                <a href="#" class="what-we-offer-button">Explore Opportunities</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Portfolio Management</h3>
                <p>Experts maximize profits and minimize risk.</p>
                <a href="#" class="what-we-offer-button">Schedule a Consultation</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Tax and Legal Advisory</h3>
                <p>Expert tax planning and legal consultation to ensure the compliant.</p>
                <a href="#" class="what-we-offer-button">Get Professional Advice</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Risk Management & Insurance</h3>
                <p>Mitigate risks by investing in property insurance.</p>
                <a href="#" class="what-we-offer-button">Get Insured</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Investment Planning for Startups</h3>
                <p>Provide tailored investment solutions to help startups.</p>
                <a href="#" class="what-we-offer-button">Start Your Journey</a>
            </div>

            <div class="what-we-offer-card">
                <h3>Property Leasing and Sales</h3>
                <p>We help lease and sell residential and commercial properties.</p>
                <a href="#" class="what-we-offer-button">List Your Property</a>
            </div>
        </div>
    </div>
</section>

<section class="px-4 py-8 bg-white text-center hidden md:block">
    <div class="container max-w-7xl mx-auto">

        <x-heading-subheading heading="Explore Our Properties Virtually" subheading="Take a digital walkthrough of our premium property listings." headingClass="heading" subHeadingClass="subheading" />

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @if(isset($virtualTours) && $virtualTours->count() > 0)
            @foreach ($virtualTours as $property)
            <a href="{{ route('projects.each' , $property->property_slug) }}">
                <div class="relative rounded-xl overflow-hidden shadow-md group">
                    <img src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" class="w-full  object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black via-transparent to-transparent text-white text-left">
                        <h3 class="text-2xl font-medium mb-2">{{ $property->property_name }}</h3>
                        <p class="text-xs">{{ $property->property_location }} , {{ $property->property_city }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            @endif


        </div>


        <div class="mt-10">
            <a class="view-more-button inline-flex" href="{{ route('properties.virtual-tours' , ['property_type' => 'Virtual']) }}">
                See All Virtual Tours <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class="px-4 py-8 bg-white text-center md:hidden block">
    <div class="container max-w-7xl mx-auto">

        <x-heading-subheading heading="Explore Our Properties Virtually" subheading="Take a digital walkthrough of our premium property listings." headingClass="heading" subHeadingClass="subheading" />

        <div class="project-slider gap-6">
            @if(isset($virtualTours) && $virtualTours->count() > 0)
            @foreach ($virtualTours as $property)
            <a href="{{ route('projects.each' , $property->property_slug) }}">
                <div class="relative rounded-xl overflow-hidden shadow-md group">
                    <img src="{{ asset($property->property_featured_image) }}" alt="{{ $property->property_name }}" class="w-full  object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black via-transparent to-transparent text-white text-left">
                        <h3 class="text-2xl font-medium mb-2">{{ $property->property_name }}</h3>
                        <p class="text-xs">{{ $property->property_location }} , {{ $property->property_city }}</p>
                    </div>
                </div>
            </a>
            @endforeach
            @endif


        </div>


        <div class="mt-10">
            <a class="view-more-button inline-flex" href="{{ route('properties.virtual-tours' , ['property_type' => 'Virtual']) }}">
                See All Virtual Tours <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class="px-4 py-8 bg-white text-center hidden md:block">
    <div class="container max-w-7xl mx-auto">
        <x-heading-subheading heading="Our Development Partners" subheading="Collaborating with renowned names in real estate development." headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($developmentPartner as $partner)

            <x-developer-partner-card partnerLogo="{{ asset($partner->logo) }}" url="{{ route('development-partners.show',  $partner->slug) }}" alt="{{ $partner->developer_name }}" heading="{{ $partner->developer_name }}" description="{{ $partner->tags }}" projectsPartnered="{{ $partner->total_projects }}" presence="{{ implode(', ', $partner->operating_cities ?? []) }}" />

            <!-- Partner 2 -->
            @endforeach

        </div>

        <div class="mt-10">
            <a href="{{ route('development-partners') }}" class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class="px-4 py-8 bg-white text-center md:hidden block">
    <div class="container max-w-7xl mx-auto">
        <x-heading-subheading heading="Our Development Partners" subheading="Collaborating with renowned names in real estate development." headingClass="heading" subHeadingClass="subheading" />
        <div class="project-slider gap-6">

            @foreach ($developmentPartner as $partner)

            <x-developer-partner-card partnerLogo="{{ asset($partner->logo) }}" url="{{ route('development-partners.show',  $partner->slug) }}" alt="{{ $partner->developer_name }}" heading="{{ $partner->developer_name }}" description="{{ $partner->tags }}" projectsPartnered="{{ $partner->total_projects }}" presence="{{ implode(', ', $partner->operating_cities ?? []) }}" />

            <!-- Partner 2 -->
            @endforeach

        </div>

        <div class="mt-10">
            <a href="{{ route('development-partners') }}" class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class="px-4 py-8 bg-white text-center hidden md:block">
    <div class="container max-w-7xl mx-auto">
        <x-heading-subheading heading="Real Estate Marketing Insights" subheading="Stay ahead with industry trends, data, and marketing tips." headingClass="heading" subHeadingClass="subheading" />
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">
            @if(isset($blogs) && $blogs->count() > 0)

            @foreach ($blogs as $blog)
            <x-blog-card cardCls="marketing-insights-card" url="{{ route('blog.each', $blog->slug) }}" class="featured-investment-img" src="{{ asset( $blog->featured_image )}}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ $blog->summary }}" />
            @endforeach
            @endif

        </div>
        <div class="mt-10">
            <a href="{{ route('blog.show') }}" class="marketing-insights-view-more-button !inline-flex">
                View all Blog <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>


<section class="px-4 py-8 bg-white text-center md:hidden block">
    <div class="container max-w-7xl mx-auto">
        <x-heading-subheading heading="Real Estate Marketing Insights" subheading="Stay ahead with industry trends, data, and marketing tips." headingClass="heading" subHeadingClass="subheading" />
        <div class="project-slider gap-8 mx-auto">
            @if(isset($blogs) && $blogs->count() > 0)

            @foreach ($blogs as $blog)
            <x-blog-card cardCls="marketing-insights-card" url="{{ route('blog.each', $blog->slug) }}" class="featured-investment-img" src="{{ asset( $blog->featured_image )}}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ $blog->summary }}" />
            @endforeach
            @endif

        </div>
        <div class="mt-10">
            <a href="{{ route('blog.show') }}" class="marketing-insights-view-more-button !inline-flex">
                View all Blog <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </a>
        </div>
    </div>
</section>

<section class="px-4 py-8 bg-white">
    <div class="container max-w-5xl mx-auto px-4">

        <x-heading-subheading heading="Hear From Our Investors" subheading="Genuine testimonials and success stories from our valued investors." headingClass="heading text-center" subHeadingClass="subheading text-center !mb-2" />
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

<x-contact-us-form heading="Let’s Make Your Property Journey Effortless" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />
@endsection


@section('scripts')
<script type="module">
    $(document).ready(function() {

        $(document).ready(function() {
            $('.project-slider').slick({
                slidesToShow: 1.2,
                slidesToScroll: 1,
                infinite: false,
                autoplay: true,
                autoplaySpeed: 5000,
                dots: true,
                arrows: false,
                responsive: [{
                    breakpoint: 768, // sm only
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1,
                        centerMode: false,
                        variableWidth: false,
                        autoplay: true,
                        autoplaySpeed: 5000,
                        dots: true,
                    }
                }]
            });
        });


    });
</script>
@endsection