@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Events and Media</title>
@endsection
@section('styles')
@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('event-and-media') }}">Events and Media</a></div>
</section>
<section class="md:px-0 mb-8 px-4 md:max-w-[1100px] w-full mx-auto bg-white">
    <x-heading-subheading heading="Events and Media" subheading="Discover the moments that define XYZ’s journey" headingClass="heading text-center !mt-0" subHeadingClass="subheading text-sm mb-4" />

    <div class=" py-0 md:mt-4 bg-white">
        <!-- Featured Event Section -->
        <h2 class="md:text-2xl font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 md:mt-0 mt-6">Featured Event</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
            @if($events->where('is_featured', 1)->count() > 0)
            @foreach($events->where('is_featured', 1) as $event)
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img" image="{{ asset($event->featured_image) }}" alt="{{ $event->alt }}" class="featured-investment-img" title="{{ $event->title }}" dateTime="{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}" buttonText="Watch" videoSrc="{{ $event->media_url }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No featured events available at the moment.</p>
            @endif

        </div>

        <!-- Past Event Section -->
        <h2 class="md:text-[24px] font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 mt-10">Past Event</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
            @if($events->where('is_featured', 0)->count() > 0)
            @foreach($events->where('is_featured', 0) as $event)
            <x-event eventCard="eventcard" eventCardImgDiv="eventcard-img" image="{{ asset($event->featured_image) }}" alt="{{ $event->alt }}" class="featured-investment-img" title="{{ $event->title }}" dateTime="{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}" buttonText="Watch" videoSrc="{{ $event->media_url }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No past events available at the moment.</p>
            @endif

        </div>
    </div>




    </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

{{-- …anywhere in your Blade view, normally near the bottom … --}}
<!-- modal container -->
<div id="videoModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm">
    <div class="relative w-full max-w-4xl h-[55vh] mx-4 flex">
        <!-- close icon -->
        <button id="closeModal" class="absolute top-2 z-20 right-3 text-gray-500 text-3xl 
           hover:text-red-500 transition duration-200 ease-in-out
           focus:outline-none">
            ×
        </button>

        <!-- iframe player -->
        <iframe
            id="modalVideo"
            class="w-full h-full rounded-xl shadow-2xl"
            src=""
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</div>


@endsection
@section('scripts')
<script type="module">
    $(function() {
        const $modal = $('#videoModal');
        const $iframe = $('#modalVideo');

        function extractYouTubeID(url) {
            try {
                const parsed = new URL(url);
                if (parsed.hostname.includes('youtube.com') || parsed.hostname.includes('youtu.be')) {
                    if (parsed.pathname.startsWith('/shorts/')) {
                        return parsed.pathname.split('/shorts/')[1].split(/[?&]/)[0];
                    }
                    if (parsed.pathname === '/watch') {
                        return parsed.searchParams.get('v');
                    }
                    if (parsed.hostname === 'youtu.be') {
                        return parsed.pathname.slice(1);
                    }
                    if (parsed.pathname.startsWith('/embed/')) {
                        return parsed.pathname.split('/embed/')[1];
                    }
                }
            } catch (e) {
                console.warn('Invalid YouTube URL:', url);
            }
            return null;
        }

        /* ---------- open modal ---------- */
        $(document).on('click', '.eventbtn, [data-video]', function() {
            const rawUrl = $(this).data('video');
            const videoId = extractYouTubeID(rawUrl);

            if (!videoId) return;

            const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&playsinline=1`;

            // Attempt to embed
            $iframe.attr('src', embedUrl);
            $('body').addClass('overflow-hidden');
            $modal.removeClass('hidden').addClass('flex');

            // Optional: fallback for known blocked videos
            // If you already know certain IDs are blocked, handle them like this:
            // const blockedVideos = ['D0ARpQCLOag']; // example
            // if (blockedVideos.includes(videoId)) {
            //     closeModal();
            //     window.open(`https://www.youtube.com/watch?v=${videoId}`, '_blank');
            // }
        });

        /* ---------- close modal ---------- */
        function closeModal() {
            $iframe.attr('src', '');
            $('body').removeClass('overflow-hidden');
            $modal.addClass('hidden').removeClass('flex');
        }

        $(document).on('click', '#closeModal', closeModal);

        $(document).on('click', '#videoModal', function(e) {
            if (e.target.id === 'videoModal') closeModal();
        });

        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && !$modal.hasClass('hidden')) closeModal();
        });
    });
</script>
@endsection