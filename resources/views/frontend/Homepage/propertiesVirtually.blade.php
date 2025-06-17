<section class="py-16 bg-white text-center">
    <div class="container mx-auto">
        <h2 class="heading">Explore Our Properties Virtually</h2>
        <p class="subheading">Take a digital walkthrough of our premium property listings.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="relative rounded-xl overflow-hidden shadow-md group">
                <img src="{{ asset('assets/images/allImages/property1.png') }}" alt="Skyline Edge Residences" class="w-full  object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black via-transparent to-transparent text-white text-left">
                    <h3 class="text-2xl font-medium mb-2">Skyline Edge Residences</h3>
                    <p class="text-xs">Sector 150, Noida</p>
                </div>
            </div>

            <!-- Property Card 2 -->
            <div class="relative rounded-xl overflow-hidden shadow-md group">
                <img src="{{ asset('assets/images/allImages/property2.png') }}" alt="Silverwood Manor" class="w-full  object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black via-transparent to-transparent text-white text-left">
                    <h3 class="text-2xl font-medium mb-2">Silverwood Manor</h3>
                    <p class="text-xs">DLF Phase 2, Gurugram</p>
                </div>
            </div>

            <!-- Property Card 3 -->
            <div class="relative rounded-xl overflow-hidden shadow-md group">
                <img src="{{ asset('assets/images/allImages/property3.png') }}" alt="BlueNest Towers" class="w-full  object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black via-transparent to-transparent text-white text-left">
                    <h3 class="text-2xl font-medium mb-2">BlueNest Towers</h3>
                    <p class="text-xs">Wakad, Pune</p>
                </div>
            </div>
        </div>


         <div class="mt-10">
            <button class="view-more-button ">
                See All Virtual Tours <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </button>
        </div>
    </div>
</section>
