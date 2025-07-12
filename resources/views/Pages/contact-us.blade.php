@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Contact Us</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">


@endsection

@section('content')
<section class=" w-[96%] max-w-7xl py-0 md:px-4 px-0 lg:px-8 mx-auto">
    <x-page-path class="path" path="Home > Contact Us" />
    <x-heading-subheading class="" heading="Connect with Adon realty" subheading="We'd love to hear from you! Share your Query below" headingClass="heading md:hidden m-heading block" subHeadingClass="subheading m-subheading md:hidden block" />
    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-x-6 w-full md:w-[90%] mx-auto md:mt-10 mt-4 gap-6 rounded">
        <div class="py-5 md:px-7 px-4 bg-gradient-to-b from-bgSecondary/30 to-white rounded-xl w-[90%] md:w-[90%] mx-auto">
            <x-heading-subheading heading="Let's get in touch" subheading="We're open for any suggestion or just to have a chat" headingClass="heading text-start !my-2" subHeadingClass="subheading mb-4 text-sm dev-start w-72 -tracking-tighter" />
            <div class="mt-3 gap-3 flex flex-col m-contact-details">
                <div class="flex gap-2 items-center  ">
                    <div class="bg-primary rounded-full p-2 ">
                        <x-zondicon-location class="w-3 h-3  text-white" />
                    </div>

                    <p class=" ">
                        Building No 76, M3M Market 84, Sector 84,Gurugaon, Haryana
                        122004
                    </p>
                </div>
                <div class="flex gap-2 items-center  mt-4 ">

                    <div class="bg-primary rounded-full p-2">
                        <x-zondicon-phone class="w-3 h-3  text-white" />
                    </div>

                    <p class=" ">+91-9090906776</p>
                </div>
                <div class="flex gap-2 items-center mt-4 ">

                    <div class="bg-primary rounded-full p-1">
                        <x-typ-mail class="w-5 h-5  text-white" />
                    </div>

                    <p class=" ">info@adonrealty.co.in</p>
                </div>
                <div class="flex gap-2 items-center mt-4 ">
                    <div class="bg-primary rounded-full p-1">
                        <x-forkawesome-globe-e class="w-5 h-5  text-white text-center" />
                    </div>


                    <p class=" ">adonrealty.co.in</p>
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
        <div id="contactPage" class="w-full lg:w-[90%]">


            <x-heading-subheading class="" heading="Connect with Adon realty" subheading="We'd love to hear from you! Share your Query below" headingClass="heading text-start !my-2 md:block hidden" subHeadingClass="subheading mb-2 text-sm dev-start md:block hidden" />

            <form action="" class="queryform" method="POST" action="#">

                <div class="flex flex-row md:flex-row gap-4 mt-4 md:mt-8">
                    <!-- Name Input -->
                    <div class="w-full">
                        <label class="block text-xs md:text-sm mb-1 text-primary" for="name">Name</label>
                        <input type="text" id="name"
                            class="w-full border-b-2 focus:outline-none md:h-8 h-5 text-sm px-1" />
                    </div>

                    <!-- Phone Input -->
                    <div class="w-full">
                        <label class="block text-xs md:text-sm mb-1 text-primary" for="phone">Phone</label>
                        <input type="text" id="phone"
                            class="w-full border-b-2 focus:outline-none md:h-8 h-5 text-sm px-1" />
                    </div>
                </div>

                <div class="mt-2">
                    <label class="text-xs md:text-sm  text-primary">Email</label>
                    <input type="email" class="border-b-2 outline-none h-8 w-full" />
                </div>
                <div class="mt-2">
                    <label class="text-xs md:text-sm  text-primary">Message</label>
                    <textarea type="text" class="border-b-2 outline-none md:h-24 h-16 w-full "></textarea>
                </div>
                <div class="flex gap-2 mt-2  ">
                    <div class=""><input class=" !accent-[#540313]" checked type="radio" /> </div>
                    <h1 class="text-xs md:text-sm">By submitting this from,you here by grant us permission to contact you via SMS, WhatsApp, RCS, Email and any other channel </h1>

                </div>
                <button class="bg-primary hover:bg-white hover:text-primary hover:border-primary border-2  md:px-8 px-6 md:py-4 py-3 mb-3 md:mt-8 mt-6 rounded-[20px] text-white">Send Message</button>
            </form>

        </div>
    </div>


</section>

<section class="md:px-4 px-0 py-8 bg-white">
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

@endsection