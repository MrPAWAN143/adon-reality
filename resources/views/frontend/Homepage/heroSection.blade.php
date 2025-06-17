<section class="relative h-[80vh] max-h-[80vh] object-cover bg-cover bg-center" style="background-image: url('{{ asset('assets/images/bannerImages/hero-banner.webp') }}')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center">
            Discover High ROI Real Estate Projects in India
        </h1>
        <div class="flex flex-col md:flex-row items-center justify-between w-full max-w-3xl bg-white rounded-full py-2 px-2 mt-4 shadow-md">
            <div class="relative w-full md:w-[13%]">
                <select class="w-full font-semibold appearance-none bg-white text-txBlack 
                 hover:text-white px-4 hover:bg-primary 
                 border-2 border-primary  py-2 rounded-full 
                 focus:outline-none focus:ring-0 focus:border-primary transition duration-300">
                    <option>City</option>
                    <option>Delhi</option>
                    <option>Mumbai</option>
                    <option>Bangalore</option>
                </select>
            </div>
            <input
                type="text"
                placeholder="Search by city, ROI, project name..."
                class="search-input-homepage-herosection" />


            <!-- Button -->
            <button class="bg-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-semibold px-6 py-2 rounded-full mt-2 md:mt-0 md:ml-2 transition duration-300">
                Search
            </button>
        </div>

        <!-- Badges -->
        <div class="flex flex-wrap justify-center gap-3 mt-6">
            <span class="bg-bgSecondary  text-txBlack px-3 py-1 font-semibold text-[18px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2 text-txBlack"/> 100% RERA-Approved Projects
            </span>
            <span class="bg-bgSecondary  text-txBlack px-3 py-1 font-semibold text-[18px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2 text-txBlack"/> 12-18% Expected ROI
            </span>
            <span class="bg-bgSecondary  text-txBlack px-3 py-1 font-semibold text-[18px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2 text-txBlack"/> End-to-End Legal Assistance
            </span>
            <span class="bg-bgSecondary  text-txBlack px-3 py-1 font-semibold text-[18px] rounded-full flex items-center shadow">
                <x-fwb-s-check class="w-4 h-4 mr-2 text-txBlack"/> Trusted by 2000+ Investors
            </span>
        </div>
    </div>
</section>