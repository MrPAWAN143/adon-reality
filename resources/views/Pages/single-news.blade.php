@extends('Pages.layouts.app')
@section('metadata')
<title>{{ $news->meta_title }}</title>
<meta name="description" content="{{ Str::limit(strip_tags($news->meta_description), 164, '...') }}">
<meta name="keywords" content="{{ Str::limit(strip_tags($news->meta_keywords), 164, '...') }}">
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('news') }}">News</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a></div>
</section>
<section class="px-4 md:px-0 max-w-[1100px] mx-auto bg-white md:pb-8 pb-3">
    <!-- Featured Image -->
    <div class="w-full overflow-hidden rounded-[15px] mt-2">
        <img
            src="{{ asset($news->banner_image ?? 'No Image Available') }}"
            alt="Top Cities for Real Estate Investment"
            class="w-full h-auto object-cover md:max-h-[50vh] max-h-[30vh]" />
    </div>
</section>

<section class="md:pb-10 pt-0  max-w-[1100px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">
    <!-- Left Column (Blog Content) -->
    <div class="md:col-span-2 md:pe-10 md:border-r  border-gray/30">

        <x-heading-subheading heading="{{ $news->title }}" subheading="{{ $news->short_description }}" headingClass="heading text-start " subHeadingClass="subheading !pl-0 mb-4 text-start" />
        <div class="text-sm text-txBlack mb-6 flex items-center gap-2">
            <img src="{{ asset('assets/images/logos/avatar-1.jpg') }}" alt="{{ $news->user->name ?? 'Unknown' }}" class="w-4 h-4 rounded-full object-cover" />
            <span>{{ $news->user->name ?? 'Unknown' }}, {{ $news->created_at->format('M d, Y') }}</span>
        </div>

        <div class="prose max-w-none">
            {!! $news->long_description !!}
        </div>

    </div>



    <!-- Share Section -->
    <div class="text-center py-0 md:hidden block">
        <h3 class="text-[16px] md:text-[24px] text-txBlack font-semibold md:mb-4 mb-2">
            Enjoyed the article? Share it with your friends
        </h3>
        @php
        $shareUrl = urlencode(route('news.show', $news->slug));
        @endphp

        <div class="flex justify-center gap-3 text-[#560018] text-[16px] md:text-[24px]">
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" aria-label="LinkedIn" class="hover:scale-110 transition">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://t.me/share/url?url={{ $shareUrl }}" target="_blank" aria-label="Telegram" class="hover:scale-110 transition">
                <i class="fab fa-telegram-plane"></i>
            </a>
            <a href="https://wa.me/?text={{ $shareUrl }}" target="_blank" aria-label="WhatsApp" class="hover:scale-110 transition">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}" target="_blank" aria-label="X (Twitter)" class="hover:scale-110 transition">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" aria-label="Instagram" class="hover:scale-110 transition">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>

    <!-- Right Column (Sidebar) -->
    <aside class="space-y-6 md:col-span-1 sticky top-[100px] self-start">

        <!-- Enquiry Form -->
        <div class="bg-gradient-to-b from-primary/10 to-secondary/10 p-6  rounded-[15px] w-full max-w-[85%] md:max-w-sm mx-auto max-h-[80vh] overflow-y-auto">
            <form class="space-y-4 additional-form">
                @csrf
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Name*</label>
                    <input

                        type="text"
                        placeholder="Your name"
                        required
                        name="name"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Phone*</label>
                    <input
                        type="tel"
                        placeholder="xx-xxxxxx-xxxxx"
                        required
                        name="phone"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Email*</label>
                    <input
                        type="email"
                        placeholder="example@gmail.com"
                        required
                        name="email"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Message</label>
                    <textarea
                        rows="4"
                        placeholder="Message"
                        name="message"
                        class="w-full !border !border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-start">
                    <button type="submit" class="view-more-button !py-2 !m-0">Submit Enquiry</button>
                </div>
            </form>
        </div>

        <!-- Project of the Day -->
        <div class=" project-of-the-day md:px-0 px-4 ">
            <h3 class="md:text-[24px] text-[16px] font-semibold mx-5">Project of the Day</h3>
            <div class=" slick-slider-single-page" id="slick-slider">
                @if($projects->count() > 0)
                @foreach($projects as $project)
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section  src="{{ asset($project->property_featured_image) }}" featuredCardClass="featured-investment-card-single-page-div" alt="{{ $project->property_name }}" heading="{{ $project->property_name }}" location="{{ $project->property_location }}" url="{{ $project->property_rera_url }}" rera="{{ $project->property_rera_number }}" status="{{ $project->property_status }}" roi="{{ $project->property_expected_roi }}" developer="{{ $project->developmentPartner->developer_name }}" variety="{{ $project->category->name }}" size="{{ $project->property_size }}" price="{{ $project->starting_price }}" />
                    <x-button class="featured-investment-button-single-page" text="View Details" url="{{ route('projects.each', $project->property_slug) }}" />
                </div>
                @endforeach
                @else
                <p class="text-center text-gray-500">No projects available at the moment.</p>
                @endif

            </div>
        </div>

        <!-- Explore Blogs -->
        <div class="single-page-blog md:px-0 px-4">
            <h3 class="md:text-[24px] text-[16px] font-semibold mx-5">Explore our blogs</h3>
            <div class="pt-2 slick-slider-single-page" id="slick-slider2">
                @if($blogs->count() > 0)
                @foreach($blogs as $blog)
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{asset($blog->featured_image)}}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ $blog->short_description }}" url="{{ route('blog.each', $blog->slug) }}" />
                </div>
                @endforeach
                @else
                <p class="text-center text-gray-500">No blogs available at the moment.</p>
                @endif

            </div>
        </div>

    </aside>
</section>




<!-- Share Section -->
<div class="text-center py-0 md:block hidden">
    <h3 class="text-[16px] md:text-[24px] text-txBlack font-semibold md:mb-4 mb-2">
        Enjoyed the article? Share it with your friends
    </h3>
    <div class="flex justify-center gap-3 text-[#560018] text-[16px] md:text-[24px]">
        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" aria-label="LinkedIn" class="hover:scale-110 transition">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://t.me/share/url?url={{ $shareUrl }}" target="_blank" aria-label="Telegram" class="hover:scale-110 transition">
            <i class="fab fa-telegram-plane"></i>
        </a>
        <a href="https://wa.me/?text={{ $shareUrl }}" target="_blank" aria-label="WhatsApp" class="hover:scale-110 transition">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}" target="_blank" aria-label="X (Twitter)" class="hover:scale-110 transition">
            <i class="fab fa-x-twitter"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram" class="hover:scale-110 transition">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>

<section class="px-4 py-8 bg-white text-center md:block hidden">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="Similar News" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="grid md:grid-cols-3 gap-6 mx-auto place-items-center">
            @if($similarNews->count() > 0)
            @foreach($similarNews as $news)
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset($news->featured_image)}}" alt="{{ $news->title }}" h4="{{ $news->title }}" p="{{ $news->short_description }}" url="{{ route('news.show', $news->slug) }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No similar blogs available at the moment.</p>
            @endif

        </div>

    </div>
</section>


<section class="px-4 py-8 bg-white text-center md:hidden block">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="Similar News" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="project-slider profist gap-8 mx-auto">
            @if($similarNews->count() > 0)
            @foreach($similarNews as $news)
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset($news->featured_image)}}" alt="{{ $news->title }}" h4="{{ $news->title }}" p="{{ $news->short_description }}" url="{{ route('news.show', $news->slug) }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No similar news articles available at the moment.</p>
            @endif

        </div>
    </div>
</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection


@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('.slick-slider-single-page').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000
        });
    });

    $(document).ready(function() {
        $('.project-slider').slick({
            slidesToShow: 1.2,
            slidesToScroll: 1,
            infinite: false,
            autoplay: true,
            loop: true,
            autoplaySpeed: 3000,
            dots: false,
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
                    dots: false,
                }
            }]
        });

    });


    $(document).ready(function() {
        $('.additional-form').on('submit', function(e) {
            e.preventDefault();
            const form = this;
            const formData = new FormData(form); // ✅ proper FormData
            let button = $(form).find('button[type="submit"]');
            button.prop('disabled', true).text('Submitting...');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('additionalEnquiry.store') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    let message = response.message || 'Thank you! We’ll contact you soon.';
                    $('#thankYouModal').removeClass('hidden').addClass('flex');
                    $('#thankYouModal').find('h3').text('Thank You!');
                    $('#thankYouModal').find('p').text(message);
                    button.prop('disabled', false).text('Book a Call');
                    form.reset();
                },
                error: function(err) {
                    if (err.responseJSON && err.responseJSON.errors) {
                        $.each(err.responseJSON.errors, function(name, message) {
                            showFieldError(name, message[0]);
                        });
                    } else {
                        $('#thankYouModal').removeClass('hidden').addClass('flex');
                        $('#thankYouModal').find('h3').text('Error!');
                        $('#thankYouModal').find('p').text('Something went wrong. Please try again later.');
                    }
                    button.prop('disabled', false).text('Book a Call');
                }
            });

        });
    })
</script>

@endsection