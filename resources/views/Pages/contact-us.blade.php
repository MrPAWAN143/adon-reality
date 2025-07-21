@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Contact Us</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">


@endsection

@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('contact') }}" class="ml-[-5px]">Contact Us</a></div>
</section>
<section class="max-w-[1100px] w-[100%] md:px-0 py-0 px-4 mx-auto">
    <x-heading-subheading class="" heading="Connect with Adon realty" subheading="We'd love to hear from you! Share your Query below" headingClass="heading md:hidden m-heading block" subHeadingClass="subheading m-subheading md:hidden block" />
    <div class=" grid md:grid-cols-2 gap-x-0 w-full md:w-[100%] mx-auto md:mt-6 mt-4 gap-0 rounded place-items-center justify-items-stretch">
        <div class="py-5 md:px-7 px-4 bg-gradient-to-b from-primary/10 to-secondary/10 rounded-xl w-[90%] md:w-[80%] mx-auto">
            <x-heading-subheading heading="Let's get in touch" subheading="We're open for any suggestion or just to have a chat" headingClass="heading text-start !my-2" subHeadingClass="subheading mb-4 text-sm dev-start w-72 -tracking-tighter" />
            <div class="mt-3 md:gap-3 gap-2 flex flex-col m-contact-details">
                <div class="flex gap-2 items-center  ">
                    <div class="bg-primary rounded-full p-2 ">
                        <x-zondicon-location class="w-3 h-3  text-white" />
                    </div>

                    <p class=" ">
                        Ground floor 4, DEEP SHIKHA BUILDING, Rajendra Place, New Delhi, Delhi, 110008
                    </p>
                </div>
                <div class="flex gap-2 items-center  mt-4 ">

                    <div class="bg-primary rounded-full p-2">
                        <x-zondicon-phone class="w-3 h-3  text-white" />
                    </div>

                    <p class=" "><a href="tel:+919355963568">+91 9355963568</a></p>
                </div>
                <div class="flex gap-2 items-center mt-4 ">

                    <div class="bg-primary rounded-full p-1">
                        <x-typ-mail class="w-5 h-5  text-white" />
                    </div>

                    <p class=" "><a href="mailto:contact@adonrealty.in">Contact@adonrealty.in</a></p>
                </div>
                <div class="flex gap-2 items-center mt-4 ">
                    <div class="bg-primary rounded-full p-1">
                        <x-forkawesome-globe-e class="w-5 h-5  text-white text-center" />
                    </div>


                    <p class=" "><a target="_blank" href="https://adonrealty.in">adonrealty.in</a></p>
                </div>

                <div class="md:mt-8 mt-4 rounded-[15px] overflow-hidden ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8690.418021443968!2d77.08897509596531!3d28.638738868929316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d049a52c282c7%3A0xfa68b5f8baf734a4!2sTilak%20Nagar%2C%20Delhi%2C%20110018!5e1!3m2!1sen!2sin!4v1750417038138!5m2!1sen!2sin" class="w-full h-44" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>


            <div class="mt-4 text-center flex justify-center items-center gap-5">
                <a href=""><x-forkawesome-facebook-square class="text-primary w-5 h-5" /></a>
                <a href=""><x-forkawesome-youtube-play class="text-primary w-5 h-5" /></a>
                <a href=""><x-forkawesome-instagram class="text-primary w-5 h-5" /></a>
                <a href=""><x-forkawesome-linkedin-square class="text-primary w-5 h-5" /></a>
                <a href=""><x-si-x class="text-primary w-5 h-5" /></a>
            </div>
        </div>
        <div id="contactPage" class="w-full md:w-[100%] md:px-4 px-2">
            <x-heading-subheading class="" heading="Connect with Adon realty" subheading="We'd love to hear from you! Share your Query below" headingClass="heading text-start !my-2 md:block hidden" subHeadingClass="subheading mb-2 text-sm dev-start md:block hidden" />

            <form class="contactUsForm" method="POST">
                @csrf
                <div class="flex flex-row md:flex-row gap-4 mt-4 md:mt-8">
                    <!-- Name Input -->
                    <div class="w-full">
                        <label class="block text-xs md:text-sm mb-1 text-primary" for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name"
                            class="w-full border-b-2 focus:outline-none md:h-8 h-5 text-sm px-1" />
                        <div class="error text-start text-base text-red-500 mt-1"></div>
                    </div>

                    <!-- Phone Input -->
                    <div class="w-full">
                        <label class="block text-xs md:text-sm mb-1 text-primary" for="phone">Phone</label>
                        <input type="text" name="phone" id="phone"
                            class="w-full border-b-2 focus:outline-none md:h-8 h-5 text-sm px-1" />
                        <div class="error text-start text-base text-red-500 mt-1"></div>
                    </div>
                </div>

                <div class="mt-2">
                    <label class="text-xs md:text-sm  text-primary">Email</label>
                    <input type="email" name="email" id="email" class="border-b-2 outline-none h-8 w-full" />
                    <div class="error text-start text-base text-red-500 mt-1"></div>
                </div>
                <div class="mt-2">
                    <label class="text-xs md:text-sm  text-primary">Message</label>
                    <textarea name="message" id="message" class="border-b-2 outline-none md:h-24 h-16 w-full "></textarea>
                    <div class="error text-start text-base text-red-500 mt-1"></div>
                </div>
                <div class="flex gap-2 mt-2  ">
                    <div class=""><input class=" !accent-[#540313]" name="checkbox" id="checkbox" type="radio" /> </div>
                    <p for="checkbox" class="text-xs md:text-sm">By submitting this from,you here by grant us permission to contact you via SMS, WhatsApp, RCS, Email and any other channel </h1>
                    <div class="error text-start text-base text-red-500 mt-1"></div>
                </div>
                <button class="bg-primary hover:bg-white hover:text-primary hover:border-primary border-2  md:px-8 px-6 md:py-4 py-3 mb-3 md:mt-8 mt-6 rounded-[20px] text-white">Send Message</button>
            </form>

        </div>
    </div>


</section>

<section class="md:px-4 px-0 py-8 bg-white max-w-[1100px] mx-auto">
    <div class="container max-w-5xl mx-auto px-4">

        <x-heading-subheading heading="Hear From Our Investors" subheading="Genuine testimonials and success stories from our valued investors." headingClass="heading text-center" subHeadingClass="subheading text-center !mb-2" />
    </div>


    <div class="testimonial-slider max-w-5xl mx-auto px-3 !flex !gap-5 justify-center items-center overflow-x-auto">
        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center md:mb-3 mb-2">
                    <div class="text-primary md:text-xl text-base">★★★★★</div>
                </div>
                <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
                    <div>
                        <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
                        <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center md:mb-3 mb-2">
                    <div class="text-primary md:text-xl text-base">★★★★★</div>
                </div>
                <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
                    <div>
                        <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
                        <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center md:mb-3 mb-2">
                    <div class="text-primary md:text-xl text-base">★★★★★</div>
                </div>
                <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
                    <div>
                        <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
                        <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center md:mb-3 mb-2">
                    <div class="text-primary md:text-xl text-base">★★★★★</div>
                </div>
                <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
                    <div>
                        <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
                        <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center md:mb-3 mb-2">
                    <div class="text-primary md:text-xl text-base">★★★★★</div>
                </div>
                <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
                    <div>
                        <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
                        <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-card">
            <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
                <div class="flex items-center md:mb-3 mb-2">
                    <div class="text-primary md:text-xl text-base">★★★★★</div>
                </div>
                <p class="md:mb-4 mb-2 md:text-md text-xs">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-[6px] mr-3">
                    <div>
                        <p class="font-semibold md:text-md text-xs">Nathan Kapoor</p>
                        <p class="text-[8px] md:text-xs text-txBlack">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection


@section('scripts')
<script type="module">
    $(document).ready(function() {
        // Helper: Validate email
        const emailIsValid = email => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

        // Phone auto-prefix +91 and clean input
        const $phone = $('input[name="phone"]');
        $phone.on('input', function() {
            if (!this.value.startsWith('+91')) {
                this.value = '+91' + this.value.replace(/^\+?91?/, '');
            }
            this.value = this.value.replace(/(?!^\+)\D/g, '');
        });

        $('.contactUsForm').submit(function(e) {
            e.preventDefault();


            const form = this;
            const formData = new FormData(form);


            // Clear old errors
            $('.error').text('');
            $('input, textarea').removeClass('border-red-500');

            // Extract values
            const first_name = formData.get('first_name').trim();
            const email = formData.get('email').trim();
            const phone = formData.get('phone').trim();
            const message = formData.get('message').trim();
            const checkbox = formData.get('checkbox') ? formData.get('checkbox') : false;
            if (!checkbox) {
                showFieldError('checkbox', 'You must agree to the terms.');
                return;
            }
            let button = $(this).find('button[type="submit"]');


            let hasError = false;

            // Client-side validation
            if (first_name.length < 2) {
                showFieldError('first_name', 'Enter Full Name.');
                hasError = true;
            }
            if (!emailIsValid(email)) {
                showFieldError('email', 'Enter a valid email address.');
                hasError = true;
            }
            if (!/^\+91\d{10}$/.test(phone)) {
                showFieldError('phone', 'Enter a valid phone number.');
                hasError = true;
            }
            if (hasError) return;

            button.prop('disabled', true).text('Submitting...');

            // AJAX submit
            $.ajax({
                url: "{{ route('leads.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
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

        function showFieldError(name, message) {
            const input = $(`[name="${name}"]`);
            input.addClass('border-red-500');
            input.closest('div').find('.error').text(message);
        }



        $('#closeModal').on('click', function() {
            $('#thankYouModal').addClass('hidden').removeClass('flex');
        });

    });
</script>
@endsection