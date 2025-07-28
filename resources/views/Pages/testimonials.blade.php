@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Testimonials</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<style>
  .container {
    max-width: 100rem;
    padding: 0 1rem;
    margin: 0 auto;
  }

  .trending-slide video {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    background: #000;
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
    width: 100%;
    margin: auto;

  }


  .trending-slider {
    height: auto;
    padding: 5px 0;
    position: relative;

  }

  @media (min-width:1100px) {

    .trending-slider {
      width: 970px !important;
      max-width: 980px;
    }

    .swiper-slide.trending-slide.swiper-slide-prev {
      transform: translate3d(0px, 0px, -234.129px) rotateX(0deg) rotateY(-29.2903deg) scale(1) !important;
      z-index: -2;
      margin-right: 10px !important;
    }

    .swiper-slide.trending-slide.swiper-slide-next {
      transform: translate3d(0px, 0px, -234.129px) rotateX(0deg) rotateY(29.2903deg) scale(1) !important;
      z-index: -2;
      margin-right: 10px !important;
    }
  }

  .trending-slide {
    width: auto;
    height: 450px;
    position: relative;
  }

  @media (max-width:600px) {

    .trending-slide {
      width: auto;
      height: 320px;
      position: relative;
    }

    .trending-slide-img video {
      width: 150px !important;
      height: 273px !important;
      border-radius: 10px !important;
      object-fit: cover !important;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 70%) !important;
    }

    .trending-slider {
      width: 100% !important;
      height: auto;
      margin: 0 auto;

    }

    .swiper.trending-mobile-slider.swiper-coverflow.swiper-3d.swiper-initialized.swiper-horizontal.swiper-ios.swiper-watch-progress {
      width: 100%;
      height: auto;
      margin: 0 auto;
      perspective: 200px !important;
    }

    .swiper-slide.trending-slide.swiper-slide-prev {
      width: 398px;
      transform: translate3d(0px, 0px, -340.563px) rotateX(0deg) rotateY(-21.005deg) scale(2.2) !important;
      z-index: -2;
      transition-duration: 0ms;
      margin-right: 20px;
    }

    /* Next slide (right) */
    .swiper-slide.trending-slide.swiper-slide-next {
      width: 398px;
      transform: translate3d(0px, 0px, -340.563px) rotateX(0deg) rotateY(21.005deg) scale(2.2) !important;
      z-index: -2;
      transition-duration: 0ms;
      margin-right: 20px;
    }

  }




  .trending-slide-img {
    overflow: hidden;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  .trending-slide-img video {
    width: 280px;
    height: 400px;
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


  .swiper-slide.trending-slide.swiper-slide-duplicate {
    margin-right: 0px;
  }

  .swiper-slide.trending-slide.swiper-slide-visible.swiper-slide-active {
    margin-right: 20px !important;
  }

  .swiper.trending-slider.swiper-coverflow.swiper-3d.swiper-initialized.swiper-horizontal.swiper-pointer-events.swiper-watch-progress {
    width: 100%;
    height: 100%;
    perspective: 1000px !important;

  }
</style>
@endsection

@section('content')

@php
$videoList = [
'1753604457371-16911-82edf6a9480644d82ce564ae9efddad3.mp4',
'testimonal final.mp4',
'1753604457371-16911-82edf6a9480644d82ce564ae9efddad3.mp4',
'testimonal final.mp4',
'1753604457371-16911-82edf6a9480644d82ce564ae9efddad3.mp4',
'testimonal final.mp4',
];

@endphp
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
  <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('testimonials') }}">Testimonials</a> </div>
</section>
<section class="bg-white mb-10">
  <x-banner-section class="px-4 h-[25vh] md:h-[45vh] md:max-h-[45vh]" mobileBanner="{{ asset('assets/images/bannerImages/testimonial-banner.jpg') }}" image="{{ asset('assets/images/bannerImages/testimonial-banner.jpg') }}" title="What Our Clients Say" subtitle="Real stories from people who trust Adon to find their perfect space." headingClass="text-white md:text-[24px] text-[16px]" subheadingClass="text-white !text-[12px]" />
</section>

<section id="trending" class="md:block hidden ">
  <div class="container " style="margin-top: 40px !important;">
    <h2 class="md:text-3xl font-bold md:mb-6 !mt-8 text-center">Video Testimonials</h2>
    <div class="swiper trending-slider">
      <div class="swiper-wrapper">


        @foreach ($videoList as $video)
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">
            <video
              muted
              playsinline
              preload="metadata"
              class="w-full h-auto rounded-lg bg-black">
              <source src="{{ asset('assets/images/videoTestimonials/' . $video) }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>


<section id="trendingmobile" class="block md:hidden">
  <div class="container" style="margin-top: 40px !important;">
    <h2 class="md:text-3xl font-bold mb-4 mt-4 text-center">Video Testimonials</h2>
    <div class="swiper trending-mobile-slider">
      <div class="swiper-wrapper">

        @foreach ($videoList as $video)
        <div class="swiper-slide trending-slide">
          <div class="trending-slide-img">
            <video
              muted
              playsinline
              preload="metadata"
              class="w-full h-auto rounded-lg bg-black">
              <source src="{{ asset('assets/images/videoTestimonials/' . $video) }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


<section class="md:px-4 px-0 py-8 bg-white">
  <div class="container max-w-5xl mx-auto px-4">

    <x-heading-subheading heading="Hear From Our Investors" subheading="Genuine testimonials and success stories from our valued investors." headingClass="heading text-center" subHeadingClass="subheading text-center !mb-2" />
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


<section class=" max-w-5xl  mx-auto text-center md:my-8">
  <x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />
</section>
@endsection

@section('scripts')

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
  function handleVideoPlayback(swiperInstance) {
  swiperInstance.on('slideChangeTransitionEnd', function () {
    swiperInstance.slides.forEach(slide => {
      const video = slide.querySelector('video');
      if (video && !video.paused) {
        video.pause();
        video.currentTime = 0;
      }
    });

    setTimeout(() => {
      const activeSlide = swiperInstance.slides[swiperInstance.activeIndex];
      if (activeSlide) {
        const activeVideo = activeSlide.querySelector('video');
        if (activeVideo) {
          activeVideo.play().catch(err =>
            console.warn("Video play blocked:", err)
          );
        }
      }
    }, 300);
  });

  swiperInstance.on('init', function () {
    setTimeout(() => {
      const firstSlide = swiperInstance.slides[swiperInstance.activeIndex];
      if (firstSlide) {
        const firstVideo = firstSlide.querySelector('video');
        if (firstVideo) {
          firstVideo.play().catch(err =>
            console.warn("Initial video play blocked:", err)
          );
        }
      }
    }, 500);
  });

  swiperInstance.init();

  // 🔊 Click to unmute
  swiperInstance.slides.forEach(slide => {
    const video = slide.querySelector('video');
    if (video) {
      video.addEventListener('click', () => {
        video.muted = false;
        video.controls = true;
      });
    }
  });
}

  // Desktop Swiper
  let TrendingSlider = new Swiper('.trending-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    slidesPerView: 3,
    spaceBetween: 20,
    coverflowEffect: {
      rotate: -8,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
      slideShadows: false,
    },
    init: false
  });

  // Mobile Swiper
  let trendingMobileSlider = new Swiper('.trending-mobile-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    slidesPerView: 1,
    spaceBetween: 20,
    coverflowEffect: {
      rotate: -8,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
      slideShadows: false,
    },
    init: false
  });

  // Attach video playback logic
  handleVideoPlayback(TrendingSlider);
  handleVideoPlayback(trendingMobileSlider);
</script>


@endsection