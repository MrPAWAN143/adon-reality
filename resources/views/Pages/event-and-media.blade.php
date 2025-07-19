@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Events and Media</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">
@endsection

@section('content')

<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('event-and-media') }}">Events and Media</a></div>
</section>
<section class="md:px-0 px-0  md:max-w-6xl w-full  mx-auto md:py-8 sm:py-2 bg-white">
    <x-heading-subheading heading="Events and Media" subheading="Discover the moments that define XYZ’s journey" headingClass="heading text-center !mt-0" subHeadingClass="subheading text-sm mb-4" />

    <div class="py-0 bg-white">
        <!-- Featured Event Section -->
        <h2 class="md:text-2xl font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 md:mt-0 mt-10">Featured Event</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto px-6 !place-items-center justify-center grid-items-center">
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img" image="{{ asset('assets/images/events/investor-connect.png') }}" alt="Investor Connect 2025" class="featured-investment-img" title="Investor Connect 2025" dateTime="June 10, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img" image="{{ asset('assets/images/events/property-power-meet.png') }}" alt="Property Power Meet" class="featured-investment-img" title="Property Power Meet" dateTime="June 18, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img" image="{{ asset('assets/images/events/realty-roundtable.png') }}" alt="The Realty Roundtable" class="featured-investment-img" title="The Realty Roundtable" dateTime="June 20, 2025" buttonText="Watch" />
        </div>

        <!-- Past Event Section -->
        <h2 class="md:text-2xl font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 mt-10">Past Event</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto px-6">
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/skyline-launch.png') }}" alt="Grand Launch of Skyline Residences" class="featured-investment-img" title="Grand Launch of Skyline Residences" dateTime="February 10, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/women-in-real-estate.png') }}" alt="Women in Real Estate: Breaking Barriers" class="featured-investment-img" title="Women in Real Estate: Breaking Barriers" dateTime="January 26, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/annual-meet.png') }}" alt="Adon Realty Annual Meet 2024" class="featured-investment-img" title="Adon Realty Annual Meet 2024" dateTime="December 10, 2024" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/csr-drive.png') }}" alt="CSR Drive: Homes of Hope Initiative" class="featured-investment-img" title="CSR Drive: Homes of Hope Initiative" dateTime="November 07, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/investment-seminar.png') }}" alt="Real Estate Investment Seminar" class="featured-investment-img" title="Real Estate Investment Seminar" dateTime="October 10, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/tech-summit.png') }}" alt="Tech in Real Estate – 2024 Summit" class="featured-investment-img" title="Tech in Real Estate – 2024 Summit" dateTime="September 10, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/celebration-gala.png') }}" alt="Adon’s 10+ Year Celebration Gala" class="featured-investment-img" title="Adon’s 10+ Year Celebration Gala" dateTime="August 10, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/skyline-launch-2.png') }}" alt="Grand Launch of Skyline Residences" class="featured-investment-img" title="Grand Launch of Skyline Residences" dateTime="July 16, 2025" buttonText="Watch" />
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img"  image="{{ asset('assets/images/events/future-living.png') }}" alt="Future Living Expo 2025" class="featured-investment-img" title="Future Living Expo 2025" dateTime="May 10, 2025" buttonText="Watch" />
        </div>
    </div>




    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

{{-- …anywhere in your Blade view, normally near the bottom … --}}
<div id="videoModal"
    class="fixed inset-0 z-50 hidden items-center justify-center
            bg-black/70 backdrop-blur-sm">

    <div class="relative w-full max-w-4xl  
                h-[55vh] mx-4 flex">
        <!-- close icon -->
        <button id="closeModal"
            class="absolute -right-4 -top-4 w-6 h-6     
                       rounded-full bg-red-400 text-white text-2xl
                       flex items-center justify-center
                       shadow-lg hover:bg-red-500
                       hover:ring-2 hover:ring-red-300 transition">
            &times;
        </button>

        <!-- video player -->
        <video id="modalVideo"
            class="w-full h-full object-contain rounded-xl shadow-2xl"
            controls preload="metadata" playsinline>
            <source src="" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
</div>

@endsection
@section('scripts')
<script type="module">
    $(function() {
        const $modal = $('#videoModal');
        const videoEl = $('#modalVideo').get(0);
        const $source = $('#modalVideo source');

        /* ----------  open modal  ---------- */
        $(document).on('click', '.eventbtn', function() {
            const src = $(this).data('video');
            // if (!src) return; // guard

            $source.attr('src', src);
            videoEl.load();
            videoEl.currentTime = 0;
            videoEl.play().catch(() => {});

            $('body').addClass('overflow-hidden');
            $modal.removeClass('hidden').addClass('flex');
        });

        /* ----------  close modal  ---------- */
        function closeModal() {
            videoEl.pause();
            videoEl.currentTime = 0;
            $modal.addClass('hidden').removeClass('flex');
            $('body').removeClass('overflow-hidden');
        }

        // ❶  close button – delegated
        $(document).on('click', '#closeModal', closeModal);

        // ❷  backdrop click – delegated & tolerant
        $(document).on('click', '#videoModal', function(e) {
            if (e.target.id === 'videoModal') closeModal();
        });

        // ❸  Esc key
        $(document).on('keydown', e => {
            if (e.key === 'Escape' && !$modal.hasClass('hidden')) closeModal();
        });
    });
</script>
@endsection