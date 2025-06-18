<section class="py-8 bg-white text-center">
    <div class="container max-w-7xl mx-auto">
        <h2 class="heading">Our Development Partners</h2>
        <p class="subheading">Collaborating with renowned names in real estate development.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="development-partner-card">
                <div class="p-4">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="{{asset('assets/images/partnersLogo/dlf.png')}}" alt="DLF Limited" class="w-16 h-16 rounded-full object-contain">
                        <div>
                            <h3>DLF Limited</h3>
                            <p class="development-partner-description">Building India</p>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-txBlack">Projects Partnered: <span class="font-normal">18</span></p>
                    <p class="text-lg text-txBlack mt-1">Presence: Gurgaon, Noida, Chennai, Hyderabad</p>
                </div>
                <div class="mt-6">
                    <a href="#" class="development-partner-button">
                        Explore Projects
                      <x-tabler-arrow-up-right class="ml-2"/>
                    </a>
                </div>
            </div>

            <!-- Partner 2 -->
            <div class="development-partner-card">
                <div>
                    <div class="flex items-center gap-4 mb-4">
                        <img src="{{asset('assets/images/partnersLogo/raheja.png')}}" alt="Raheja Develop" class="w-16 h-16 rounded-full object-contain">
                        <div>
                            <h3>Raheja Develop</h3>
                            <p class="development-partner-description">Committed to Excellence</p>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-txBlack">Projects Partnered: <span class="font-normal">10</span></p>
                    <p class="text-lg text-txBlack mt-1">Presence: Gurgaon, Delhi, Noida</p>
                </div>
                <div class="mt-6">
                    <a href="#" class="development-partner-button">
                        Explore Projects
                        <x-tabler-arrow-up-right class="ml-2"/>
                    </a>
                </div>
            </div>

            <!-- Partner 3 -->
            <div class="development-partner-card">
                <div>
                    <div class="flex items-center gap-4 mb-4">
                        <img src="{{asset('assets/images/partnersLogo/m3m.png')}}" alt="M3M India" class="w-16 h-16 rounded-full object-contain">
                        <div>
                            <h3>M3M India</h3>
                            <p class="development-partner-description">Magnificence in the Trinity of Men & Materials</p>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-txBlack">Projects Partnered: <span class="font-normal">8</span></p>
                    <p class="text-lg text-txBlack mt-1">Presence: Gurgaon, Noida</p>
                </div>
                <div class="mt-6">
                    <a href="#" class="development-partner-button">
                        Explore Projects
                        <x-tabler-arrow-up-right  class="ml-2"/>
                    </a>
                </div>
            </div>
        </div>

       <div class="mt-10">
            <button class="view-more-button ">
                View More <x-forkawesome-angle-down class="ml-3 w-6 h-6" />
            </button>
        </div>
    </div>
</section>
