@extends('Pages.layouts.app')
@section('metadata')
<title>{{ $blog->meta_title }}</title>
<meta name="description" content="{{ Str::limit(strip_tags($blog->meta_description), 164, '...') }}">
<meta name="keywords" content="{{ Str::limit(strip_tags($blog->meta_keywords), 164, '...') }}">
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('blog.show') }}" class="ml-[-5px]">Blog</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('blog.each', $blog->slug) }}" class="ml-[-5px]">{{ $blog->title }}</a></div>
</section>
<section class="px-4 md:px-0 max-w-[1100px] mx-auto bg-white md:pb-8 pb-3">
    <!-- Featured Image -->
    <div class="w-full overflow-hidden rounded-[15px] mt-2">
        <img
            src="{{ asset($blog->banner_image ?? ' ') }}"
            alt="{{ $blog->title }}"
            class="w-full h-auto object-cover md:max-h-[50vh] max-h-[30vh]" />
    </div>
</section>

<section class="md:pb-10 pt-0  max-w-[1100px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">

    <!-- Left Column (Blog Content) -->
    <div class="md:col-span-2 md:pe-10 md:border-r  border-gray/30">

        <x-heading-subheading heading="{{ $blog->title }}" subheading="{{ $blog->summary }}" headingClass="heading text-start " subHeadingClass="subheading !pl-0 mb-4 text-start" />
        <div class="text-sm text-txBlack mb-6 flex items-center gap-2">
            <img src="{{ asset('assets/images/logos/avatar-1.jpg') }}" alt="Neha" class="w-4 h-4 rounded-full object-cover" />
            <span>Neha, Jan 22, 2024</span>
        </div>
        <div class="blog-content text-txBlack text-[16px] leading-7">
            {!! $blog->content !!}
        </div>

    </div>

    <!-- Share Section for Mobile -->
    <div class="text-center py-0 md:hidden block">
        <h3 class="text-[16px] md:text-[24px] text-txBlack font-semibold md:mb-4 mb-2">
            Enjoyed the article? Share it with your friends
        </h3>
        @php
        $shareUrl = urlencode(route('blog.each', $blog->slug));
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
                @if($projectOfTheDay && $projectOfTheDay->count() > 0)
                @foreach ($projectOfTheDay as $property)
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section imageClass=" " src="{{ asset($property->property_featured_image) }}" featuredCardClass="featured-investment-card-single-page-div" alt="{{ $property->property_name }}" heading="{{ $property->property_name }}" location="{{ $property->property_location }}" url="{{ $property->property_rera_url }}" rera="{{ $property->property_rera_number }}" status="{{ $property->property_status }}" roi="{{ $property->property_expected_roi }}" developer="{{ $property->developmentPartner->developer_name }}" variety="{{ $property->category->name }}" size="{{ $property->property_size }}" price="{{ $property->starting_price }}" />
                    <x-button class="featured-investment-button-single-page" url="{{ route('projects.each' , $property->property_slug) }}" text="View Details" />
                </div>
                @endforeach
                @else
                <div class="text-center text-txBlack md:text-[16px] text-[12px] font-light">
                    No project of the day available.
                </div>
                @endif
            </div>
        </div>

        <!-- Explore Blogs -->
        <div class="single-page-blog md:px-0 px-4">
            <h3 class="md:text-[24px] text-[16px] font-semibold mx-5">Explore our blogs</h3>
            <div class="pt-2 slick-slider-single-page" id="slick-slider2">
                @if($exploreOurBlog && $exploreOurBlog->count() > 0)
                @foreach ($exploreOurBlog as $blog)
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ $blog->excerpt }}" url="{{ route('blog.each', $blog->slug) }}" />
                </div>
                @endforeach
                @else
                <div class="text-center text-txBlack md:text-[16px] text-[12px] font-light">
                    No blogs available.
                </div>
                @endif
            </div>
        </div>

    </aside>
</section>


@php
$shareUrl = urlencode(url()->current());
$shareText = urlencode("Check out this great read on Addon Reality!");
@endphp


<!-- Share Section -->
<div class="text-center py-0 md:block hidden">
    <h3 class="text-[16px] md:text-[24px] text-txBlack font-semibold md:mb-4 mb-2">
        Enjoyed the article? Share it with your friends
    </h3>

    <div class="flex justify-center flex-wrap gap-5 text-[#560018] text-xl md:text-2xl">
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}"
            target="_blank" aria-label="LinkedIn" class="hover:scale-110 transition transform">
            <i class="fab fa-linkedin-in"></i>
        </a>

        <!-- Telegram -->
        <a href="https://t.me/share/url?url={{ $shareUrl }}&text={{ $shareText }}"
            target="_blank" aria-label="Telegram" class="hover:scale-110 transition transform">
            <i class="fab fa-telegram-plane"></i>
        </a>

        <!-- WhatsApp -->
        <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}"
            target="_blank" aria-label="WhatsApp" class="hover:scale-110 transition transform">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- X (Twitter) -->
        <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
            target="_blank" aria-label="X" class="hover:scale-110 transition transform">
            <i class="fab fa-x-twitter"></i>
        </a>

        <!-- Instagram (placeholder link) -->
        <a href="https://www.instagram.com/addonreality"
            target="_blank" aria-label="Instagram" class="hover:scale-110 transition transform">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>

<section class="px-4 py-8 bg-white text-center md:block hidden">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="Similar Blogs" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="grid md:grid-cols-3 gap-6 mx-auto place-items-center">
            @if($similarBlogs && $similarBlogs->count() > 0)
            @foreach ($similarBlogs as $blog)
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ Str::limit($blog->excerpt, 100) }}" url="{{ route('blog.each', $blog->slug) }}" />
            @endforeach
            @else
            <div class="text-center text-txBlack md:text-[16px] text-[12px] font-light">
                No similar blogs available.
            </div>
            @endif
        </div>

    </div>
</section>


<section class="px-4 py-8 bg-white text-center md:hidden block">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="Similar Blogs" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="project-slider profist gap-8 mx-auto">
            @if($similarBlogs && $similarBlogs->count() > 0)
            @foreach ($similarBlogs as $blog)
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset($blog->featured_image)}}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ Str::limit($blog->excerpt, 100) }}" url="{{ route('blog.each', $blog->slug) }}" />
            @endforeach
            @else
            <div class="text-center text-txBlack md:text-[16px] text-[12px] font-light">
                No similar blogs available.
            </div>
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
            autoplay: true,
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