@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Testimonials</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<style>
  .container {
    max-width: 124rem;
    padding: 0 1rem;
    margin: 0 auto;
  }

  .text-center {
    text-align: center;
  }

  .section-heading {
    font-size: 40px;
    color: black;
    padding: 1rem 0;
    font-weight: 600;
  }

  #trending {
    width: 70%;
    margin: 0 auto;

  }


  .trending-slider {
    height: auto;
    padding: 5px 0;
    position: relative;

  }

  @media (max-width:1440px) {
    .trending-slider {
      height: 450px;
    }
  }

  .trending-slide {
    width: auto;
    height: 430px;
    position: relative;
  }

  @media (max-width:500px) {
    .trending-slide {
      width: 280px !important;
      height: 320px !important;

    }

    .trending-slide-img img {
      width: 280px !important;
      height: 300px !important;

    }
  }

  .trending-slide-img {
    overflow: hidden;
  }

  .trending-slide-img img {
    width: 260px;
    height: 360px;
    border-radius: 10px;
    object-fit: cover;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 70%);
  }

  .swiper-slide-shadow-left,
  .swiper-slide-shadow-right {
    width: 0px !important;
  }

  .trending-slide-img:not(.swiper-slide-active .trending-slide-img) {
    filter: blur(3px);
  }
</style>
@endsection

@section('content')
<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
  <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('testimonials') }}">Testimonials</a> </div>
</section>
<section class=" bg-white ">
  <x-banner-section class="px-4 relative h-[65vh] max-h-[65vh]" image="{{ asset('assets/images/bannerImages/testimonial-banner.jpg') }}" title="What Our Clients Say" subtitle="Real stories from people who trust Adon to find their perfect space." headingClass="text-white text-3xl" subheadingClass="text-white !text-lg" />
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center " style="padding-top: 1rem; padding-bottom: 2rem;">

  </div>
</section>

<section id="trending">
  <div class="container">
    <h2 class="md:text-3xl font-bold mb-4 mt-4 text-center">Video Testimonials</h2>
    <div class="swiper trending-slider">
      <div class="swiper-wrapper">

        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property1.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property2.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property3.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property1.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property2.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property3.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property1.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
        <!-- SLide start -->
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">

            <img src="{{ asset('assets/images/allImages/property2.png') }}" alt="">
          </div>

        </div>
        <!-- SLide end -->
      </div>


    </div>
  </div>
</section>

<section class="px-4 py-0 mt-[-50px] bg-white">
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


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection

@section('scripts')

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
  let TrendingSlider = new Swiper('.trending-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    slidesPerView: 3, // Show exactly 3 slides
    spaceBetween: 20, // Optional: spacing between slides
    coverflowEffect: {
      rotate: -8,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
      slideShadows: false,
      blur: true,
    },
  });
</script>
@endsection