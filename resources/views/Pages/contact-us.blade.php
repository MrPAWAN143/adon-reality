@extends('Pages.layouts.app')
@section('metadata')
<title>Contact Us</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">


@endsection

@section('content')
<section class=" w-[96%] max-w-7xl py-0 px-4 sm:px-6 lg:px-8 mx-auto">
    <x-page-path class="path" path="Home > Contact Us" />
    <div class="grid md:grid-cols-1 w-[96%] lg:grid-cols-2 gap-x-6 md:w-[90%] mx-auto mt-10 gap-6 rounded">

        <div class="py-5 px-7 bg-bgSecondary/30 rounded-xl ">
            <x-heading-subheading heading="Let's get in touch" subheading="We're open for any suggestion or just to have a chat" headingClass="heading text-start !my-2" subHeadingClass="subheading mb-2 text-sm dev-start w-72" />
            <div class="mt-3 ">
                <div class="flex gap-2 items-center  ">
                    <div class="bg-primary rounded-full p-2">
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

                <div class="mt-8 rounded-md overflow-hidden ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8690.418021443968!2d77.08897509596531!3d28.638738868929316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d049a52c282c7%3A0xfa68b5f8baf734a4!2sTilak%20Nagar%2C%20Delhi%2C%20110018!5e1!3m2!1sen!2sin!4v1750417038138!5m2!1sen!2sin" class="w-full h-52  " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="">
                <ul class="flex justify-center gap-4 mt-4">
                    <li>
                        <a href="">
                            <i class="fa-brands fa-facebook text-primary text-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-youtube text-primary text-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a class=" " href="">
                            <i class="fa-brands fa-square-instagram text-primary text-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-linkedin text-primary text-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-x-twitter text-primary text-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="contactPage" class="">


            <x-heading-subheading heading="Connect with Adon realty" subheading="We'd love to hear from you! Share your Query below" headingClass="heading text-start !my-2" subHeadingClass="subheading mb-2 text-sm dev-start" />

            <form action="" class="queryform" method="POST" action="#">

                <div class=" lg:flex gap-2 mt-8">
                    <div class=" w-full ">
                        <label>Name </label>
                        <input type="text" class="!outline-none border-b-2  w-full" />
                    </div>
                    <div class="w-full ">
                        <label>Phone</label>
                        <input type="text" class="!outline-none border-b-2  w-full" />

                    </div>
                </div>
                <div class="mt-2">
                    <label class="">Email</label>
                    <input type="email" class="border-b-2 outline-none w-full" />
                </div>
                <div class="mt-2">
                    <label class="">Message</label>
                    <textarea type="text" class="border-b-2 outline-none w-full "></textarea>
                </div>
                <div class="flex gap-2 mt-2  ">
                    <div class=""><input class=" !accent-[#540313]" checked type="radio" /> </div>
                    <h1 class="text-sm lg:text-xl">By submitting this from,you here by grant us permission to contact you via SMS, WhatsApp, RCS, Email and any other channel </h1>

                </div>
                <button class="bg-[#540313] px-4 py-2 mb-3 mt-5 rounded-xl text-white">Send Message</button>
            </form>

        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="container max-w-5xl mx-auto px-4">
        <x-heading-subheading heading="Hear From Our Investors" subheading="Genuine testimonials and success stories from our valued investors." headingClass="heading text-center !my-2" subHeadingClass="subheading mb-2 text-sm" />

    </div>


    <div class="testimonial-slider max-w-5xl mx-auto px-4 gap-5">
        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">A trusted investment experience with great support.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Nathan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Nathan Kapoor</p>
                        <p class="text-xs text-gray-500">Software Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">The virtual property tour helped faster than ever.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Arjun" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Arjun Verma</p>
                        <p class="text-xs text-gray-500">UX Designer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-white rounded-xl shadow-md p-6 text-sm text-gray-800">
                <div class="flex items-center mb-3">
                    <div class="text-[#570713] text-xl">★★★★★</div>
                </div>
                <p class="mb-4">Detailed listings and quick support made the process seamless.</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Karan" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Karan Sethi</p>
                        <p class="text-xs text-gray-500">Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection


@section('scripts')

@endsection