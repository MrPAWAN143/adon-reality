@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - News</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('news') }}">News</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="#">Top cities for real estate investment 2025</a></div>
</section>
<section class="px-4 md:px-0 max-w-[1100px] mx-auto bg-white md:pb-8 pb-3">
    <!-- Featured Image -->
    <div class="w-full overflow-hidden rounded-[15px] mt-2">
        <img
            src="{{ asset('assets/images/bannerImages/news-and-pr-single-page-banner.jpg') }}"
            alt="Top Cities for Real Estate Investment"
            class="w-full h-auto object-cover" />
    </div>
</section>

<section class="md:pb-10 pt-0  max-w-[1100px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">
    <!-- Left Column (Blog Content) -->
    <div class="md:col-span-2 md:pe-10 md:border-r  border-gray/30">

        <x-heading-subheading heading="Property in Lucknow – Flats & Apartments for Sale | RERA Approved, Affordable & Luxury Options" subheading="Lucknow is the capital of Uttar Pradesh, known for its rich history, culture, and culinary delights. The city offers a range of properties to choose from, to cater to the growing diverse population of the city." headingClass="heading text-start " subHeadingClass="subheading !pl-0 mb-4 text-start" />
        <div class="text-sm text-txBlack mb-6 flex items-center gap-2">
            <img src="{{ asset('assets/images/logos/avatar-1.jpg') }}" alt="Neha" class="w-4 h-4 rounded-full object-cover" />
            <span>Neha, Jan 22, 2024</span>
        </div>

        <!-- Steps -->
        <ol class="text-md text-txBlack md:space-y-5 space-y-3 list-decimal list-inside">
            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Why Invest in Lucknow Real Estate?
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>The Real estate market of Lucknow is catching up to the big cities, and has become one of the prime destinations for real estate investment in India. While earlier known for its historical and cultural heritage, it has now become a lucrative Real estate investment opportunity due to the growing infrastructure and rapid urbanization as well as the growing economy. Whether you're looking at residential properties, commercial properties, or long-term real estate investment, Lucknow offers a variety of lucrative investment opportunities.</li>
                    <li>A Growing Hub for Residential & Commercial Properties</li>
                    <li>With rapid urbanization taking place in Lucknow and growing employment opportunities, more and more people are settling in, creating huge demand for not only residential properties but for commercial properties as well. areas like Gomti Nagar, Hazratganj, and Alambagh have become the prime choice for people looking for flats for sale in Lucknow, and apartments in Lucknow. The demand for duplex offices is also consistently rising in Lucknow.</li>
                </ul>
            </li>
            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    RERA Approved Projects for Safe Investment
                </strong>
                <p class="text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">RERA has become a life saver for both buyers and investors, as it provides transparency, reduces the risks of frauds as well as ensures timely delivery and quality projects by the developers and builders. Many new residential projects in Lucknow follow RERA compliance, making them safe for first-time buyers and seasoned investors.</p>
            </li>
            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Connectivity, Infrastructure, and Lifestyle Perks
                </strong>
                <p class="text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">With wide roads, expressways and upcoming plans to increase metro connectivity, as well as the presence of excellent schools, colleges and hospitals, lucknow has become a comfortable place to live in. This growth is attracting Lucknow builders and developers to launch more upcoming projects in Lucknow.</p>
            </li>

            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Types of Properties Available in Lucknow
                </strong>
                <p class="text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">Lucknow offers a range of properties to choose from, to cater to the growing diverse population of the city.</p>

            </li>
            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Residential Properties – Flats, Villas & Apartments
                </strong>
                <p class="text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">There are various residential properties available in Lucknow to choose from. From 2 BHK flats for sale in Lucknow to luxury villas, and ready-to-move flats in Lucknow. Lucknow offers a range of properties for varying budgets and lifestyle.</p>
            </li>
            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Commercial Properties – Shops, Showrooms & Office Spaces
                </strong>
                <p class="text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">The commercial real estate market of Lucknow is booming, with increase in demand for retail outlets to real estate duplex office setups due to the increasing tech and retail sectors.</p>
            </li>
            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Real Estate Duplex Office Options for Professionals
                </strong>
                <p class="text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">Real estate duplex offices have become a popular choice among individuals who want to work in a home-office environment.</p>
            </li>

            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Top Localities in Lucknow for Real Estate Investment <br>
                    High-End & Premium Investment
                </strong>

            </li>

            <li>
                <strong class="text-[12px] inline-block md:text-[16px] text-txBlack font-semibold md:my-2 my-1.5">
                    Gomti Nagar and Gomti Nagar Extension
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>It is one of the most desirable areas of lucknow due to being a well-planned area with modern infrastructure, metro connectivity, commercial hubs, malls, hospitals, and educational institutions (like IIM-Lucknow and SGPGI). The area offers a mix of commercial and residential properties with good appreciation potential and rental yields. The area has also witnessed tremendous growth due to the development of high-end residential projects and IT parks.</li>
                </ul>
            </li>
            <li>
                <strong class="text-[12px] inline-block md:text-[16px] text-txBlack font-semibold md:my-2 my-1.5">
                    Hazratganj
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>Hazratganj is the central business district of Lucknow with seamless connectivity and high visibility attracting high footfall for commercial investments.The area offers premium residential properties due to its central location and the close vicinity to key places. The property rate is higher in this area, but presents a lucrative potential for rental income and capital appreciation.</li>
                </ul>
            </li>
            <li>
                <strong class="text-[12px] inline-block md:text-[16px] text-txBlack font-semibold md:my-2 my-1.5">
                    Sushant Golf City
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>It is a significantly new and modern locality with integrated township with a golf course, malls, international schools, and a peaceful environment. The area attracts high end consumers as well as NRIs, looking for a quality and luxurious life.</li>
                </ul>
            </li>


            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Connectivity-Driven Growth Areas:
                </strong>

            </li>
            <li>
                <strong class="text-[12px] inline-block md:text-[16px] text-txBlack font-semibold md:my-2 my-1.5">
                    Amar Shaheed Path (Outer Ring Road)
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>If you're looking for places with good connectivity, Amar Shaheed Path is the perfect choice with its strategic location that allows seamless connectivity to key areas like Gomti Nagar and the airport. The area has a good potential for capital appreciation due to its connectivity and ongoing infrastructure development.</li>
                </ul>
            </li>
            <li>
                <strong class="text-[12px] inline-block md:text-[16px] text-txBlack font-semibold md:my-2 my-1.5">
                    Faizabad Road
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>Faizabad is connected to Ayodhya via expressway and it is witnessing rapid infrastructure growth and increase in demand. It also offers affordable housing options making it a lucrative investment option.</li>
                </ul>
            </li>

            <li>
                <strong class="text-[14px] inline-block md:text-[20px] text-txBlack font-semibold md:my-3 my-2">
                    Established Residential Areas with Stable Returns:
                </strong>

            </li>
            <li>
                <strong class="text-[12px] inline-block md:text-[16px] text-txBlack font-semibold md:my-2 my-1.5">
                    Indira Nagar
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>Indira Nagar is One of the largest and well-established residential areas in Lucknow that has great infrastructure, metro access, hospitals, and markets. Therefore, there is a consistent demand for mid-range housing in the area, ensuring a stable rental income..</li>
                </ul>
            </li>
            <li>
                <strong class="text-[12px] inline-block md:text-[16px] text-txBlack font-semibold md:my-2 my-1.5">
                    Faizabad Road
                </strong>
                <ul class="list-disc list-outside text-[12px] md:text-[16px] text-txBlack space-y-2 ml-8">
                    <li>Faizabad is connected to Ayodhya via expressway and it is witnessing rapid infrastructure growth and increase in demand. It also offers affordable housing options making it a lucrative investment option.</li>
                </ul>
            </li>

        </ol>

    </div>



    <!-- Share Section -->
    <div class="text-center py-0 md:hidden block">
        <h3 class="text-[16px] md:text-[24px] text-txBlack font-semibold md:mb-4 mb-2">
            Enjoyed the article? Share it with your friends
        </h3>
        <div class="flex justify-center gap-3 text-[#560018] text-[16px] md:text-[24px]">
            <a href="#" aria-label="LinkedIn" class="hover:scale-110 transition"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Telegram" class="hover:scale-110 transition"><i class="fab fa-telegram-plane"></i></a>
            <a href="#" aria-label="WhatsApp" class="hover:scale-110 transition"><i class="fab fa-whatsapp"></i></a>
            <a href="#" aria-label="X (Twitter)" class="hover:scale-110 transition"><i class="fab fa-x-twitter"></i></a>
            <a href="#" aria-label="Instagram" class="hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Right Column (Sidebar) -->
    <aside class="space-y-6 md:col-span-1 sticky top-[100px] self-start">

        <!-- Enquiry Form -->
        <div class="bg-gradient-to-b from-primary/10 to-secondary/10 p-6  rounded-[15px] w-full max-w-[85%] md:max-w-sm mx-auto max-h-[80vh] overflow-y-auto">
            <form class="space-y-4">
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Name*</label>
                    <input
                        type="text"
                        placeholder="Your name"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Phone*</label>
                    <input
                        type="tel"
                        placeholder="xx-xxxxxx-xxxxx"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Email*</label>
                    <input
                        type="email"
                        placeholder="hello@gmail.com"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm !focus:outline-none" />
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium text-txBlack mb-1">Message</label>
                    <textarea
                        rows="4"
                        placeholder="Message"
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
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section imageClass=" " src="{{ asset('assets/images/allImages/DlfCyberCity.png') }}" featuredCardClass="featured-investment-card-single-page-div" alt="DLF Cyber City Tower" heading="DLF Cyber City Tower" location="Noida, Sector 62" rera="UPRERAI2345" status="Ongoing" roi="12%" developer="DLF" variety="Multiplex / Commercial" size="5000 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section imageClass=" " src="{{ asset('assets/images/allImages/M3MCorporateHeights.png') }}" featuredCardClass="featured-investment-card-single-page-div" alt="M3M Corporate Heights" heading="M3M Corporate Heights" location="Sector 67, Gurgaon" rera="HRERAGGN20230911" status="Ready to Move" roi="10%" developer="M3M" variety="Commercial Office Tower" size="7000 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
                <div class="featured-investment-card-single-page">
                    <x-featured-investment-section imageClass=" " src="{{ asset('assets/images/allImages/M3MAtrium.png') }}" featuredCardClass="featured-investment-card-single-page-div" alt="M3M Atrium" heading="M3M Atrium" location="Sector 140, Noida Expressway" rera="UPRERA-2023-0567" status="Pre-Launch" roi="12%" developer="M3M" variety="High Street Retail" size="4800 sq. ft." price="Price on Demand" />
                    <x-button class="featured-investment-button-single-page" text="View Details" />
                </div>
            </div>
        </div>

        <!-- Explore Blogs -->
        <div class="single-page-blog md:px-0 px-4">
            <h3 class="md:text-[24px] text-[16px] font-semibold mx-5">Explore our blogs</h3>
            <div class="pt-2 slick-slider-single-page" id="slick-slider2">
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
                </div>
                <div class="marketing-insights-card-single-page">
                    <x-blog-card cardCls="marketing-insights-card  heading-h4 !p-3" imageWrapperClass="!h-52 w-full mb-2 overflow-hidden rounded-[15px]" class="featured-investment-img !mb-0" src="{{ asset('assets/images/allImages/marketing4.png') }}" alt="M3M Corporate Heights" h4="The Future of Real Estate: Trends to Watch" p="Stay ahead of the curve with these emerging real estate trends." />
                </div>
            </div>
        </div>

    </aside>
</section>




<!-- Share Section -->
<div class="text-center py-0 md:block hidden">
    <h3 class="text-[16px] md:text-[24px] text-txBlack font-semibold md:mb-4 mb-2">
        Enjoyed the article? Share it with your friends
    </h3>
    <div class="flex justify-center gap-6 text-[#560018] text-[16px] md:text-[24px]">
        <a href="#" aria-label="LinkedIn" class="hover:scale-110 transition"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Telegram" class="hover:scale-110 transition"><i class="fab fa-telegram-plane"></i></a>
        <a href="#" aria-label="WhatsApp" class="hover:scale-110 transition"><i class="fab fa-whatsapp"></i></a>
        <a href="#" aria-label="X (Twitter)" class="hover:scale-110 transition"><i class="fab fa-x-twitter"></i></a>
        <a href="#" aria-label="Instagram" class="hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
    </div>
</div>

<section class="px-4 py-8 bg-white text-center md:block hidden">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="Similar Blogs" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="grid md:grid-cols-3 gap-6 mx-auto place-items-center">
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />
        </div>

    </div>
</section>


<section class="px-4 py-8 bg-white text-center md:hidden block">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="Similar Blogs" subheading="" headingClass="heading" subHeadingClass="subheading" />
        <div class="project-slider profist gap-8 mx-auto">
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{asset('assets/images/allImages/marketing2.png')}}" alt="DLF Cyber City Tower" h4="Top Cities for Real Estate Investment in 2025" p="Discover where smart investors are putting their money this year." />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing3.png') }}" alt="M3M Corporate Heights" h4="5 Mistakes Every Property Investor Should Avoid" p="Learn common pitfalls and how to protect your real estate investment" />
            <x-blog-card cardCls="marketing-insights-card" class="featured-investment-img" src="{{ asset('assets/images/allImages/marketing1.png') }}" alt="M3M Atrium" h4="Rental Income: Which Strategy Wins?" p="Compare long-term rental income with short-term property flipping profits." />

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
</script>

@endsection