<footer class="text-white text-sm" style="background-image: url('{{ asset('assets/images/allImages/footerbackground.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;">
    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="flex flex-col md:flex-row md:justify-between md:space-x-8 border-b border-goldenColor pb-4 mb-4">
            <!-- Logo and Cities -->
            <div class="flex items-center space-x-3 mb-4 md:mb-0">
                <img src="{{ asset('assets/images/logos/footer-logo.png') }}" alt="Logo" class=""> 

            </div>

            <!-- Contact Right -->
            <div class="flex space-x-10 text-sm">
                <div>
                    <p class="font-semibold text-goldenColor text-[16px]">EMAIL ADDRESS</p>
                    <p class="text-white text-[12px] md:text-[16px]">connect@xyz.in</p>
                </div>
                <div>
                    <p class="font-semibold text-goldenColor text-[16px]">PHONE NUMBER</p>
                    <p class="text-white text-[12px] md:text-[16px]">+91 9876543210</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:justify-between  md:space-y-0 md:space-x-8 border-b border-goldenColor pb-4 mb-6">
            <!-- Cities -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-goldenColor mb-1 text-[16px]">CITIES</p>
                <div class="flex flex-wrap gap-x-2 gap-y-1 md:text-base sm:text-[12px] md:text-[16px]">
                   <a href="" class="text-white">Delhi</a>
                    <a href="" class="text-white">Gurugram</a>
                    <a href="" class="text-white">Pune</a>
                    <a href="" class="text-white">Hyderabad</a>
                </div>
            </div>

            <!-- Developers -->
            <div class="">
                <p class="text-sm font-semibold text-goldenColor mb-1 text-[16px]">DEVELOPER WE WORK WITH</p>
                <div class="flex flex-wrap gap-x-2 gap-y-1 md:text-base sm:text-[12px] md:text-[16px]">
                    <a href="" class="text-white">DLF</a>
                    <a href="" class="text-white">Prime</a>
                    <a href="" class="text-white">Space</a>
                    <a href="" class="text-white">Godrej</a>
                    <a href="" class="text-white">Arena</a>
                    <a href="" class="text-white">2A Company</a>
                    <a href="" class="text-white">Aura</a>
                    <a href="" class="text-white">Wave</a>
                    <a href="" class="text-white">M3M</a>
                </div>
            </div>
        </div>


        <div class="flex flex-col sm:flex-col md:flex-row justify-between mt-6 border-b border-goldenColor pb-6 mb-6 gap-y-6 gap-x-8 text-white">

            <!-- Certifications & Address -->
            <div class="w-full md:w-auto lg:w-[23%]">
                <p class="text-goldenColor font-semibold mb-4 text-[16px]">Certifications & Trust Badges</p>
                <ul class="list-disc list-inside space-y-1 md:text-[16px] text-[12px] md:text-base mb-4">
                    <li>RERA Approved</li>
                    <li>100% Verified Properties</li>
                    <li>Trusted by 1000+ Investors</li>
                    <li>SSL Secure Website Icon</li>
                    <li>ISO Certification Badge (if applicable)</li>
                </ul>
                <p class="text-goldenColor font-semibold mt-4 text-[16px]">CORPORATE OFFICE</p>
                <p class="mt-1 text-sm">D-27, Sector 2, Noida, Uttar Pradesh-201301</p>
            </div>

            <!-- Newsletter -->
            <div class="w-full md:w-[48%] lg:w-[23%] text-[12px] mb-4">
                <p class="text-goldenColor font-semibold mb-2">Your e-mail address</p>
                <div class="flex items-center space-x-1 mb-2">
                    <input type="email" placeholder="name@email.com"
                        class="flex-3 px-3 py-1 rounded-full text-black text-sm focus:outline-none" />
                    <button
                        class="flex-0 bg-primary hover:bg-primary text-bgSecondary px-2 py-1 rounded-full text-sm">Subscribe</button>
                </div>
                <label class="flex items-start space-x-2 text-xs mt-1">
                    <input type="checkbox"
                        class="mt-1 accent-transparent bg-transparent border border-white checked:bg-primary" />
                    <span>By subscribing I accept the Privacy Policy.</span>
                </label>
            </div>

            <!-- Quick Links -->
            <div class="w-full sm:w-1/2 md:w-[30%] lg:w-[15%]">
                <p class="text-goldenColor font-semibold text-sm md:text-base mb-2">Quick Links</p>
                <ul class="space-y-1 text-base">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">News & PR</a></li>
                    <li><a href="#" class="hover:underline">Events</a></li>
                    <li><a href="#" class="hover:underline">Projects</a></li>
                    <li><a href="#" class="hover:underline">Developers</a></li>
                    <li><a href="#" class="hover:underline">Blog</a></li>
                    <li><a href="#" class="hover:underline">Careers</a></li>
                    <li><a href="#" class="hover:underline">Awards</a></li>
                    <li><a href="#" class="hover:underline">Service</a></li>
                </ul>
            </div>

            <!-- Investor Info -->
            <div class="w-full sm:w-1/2 md:w-[30%] lg:w-[18%]">
                <p class="text-goldenColor font-semibold text-sm md:text-base mb-2">Investor Information</p>
                <ul class="space-y-1 text-base">
                    <li><a href="#" class="hover:underline">Why Invest With Us</a></li>
                    <li><a href="#" class="hover:underline">Verified Properties</a></li>
                    <li><a href="#" class="hover:underline">FAQs for Investors</a></li>
                </ul>
            </div>

            <!-- Legal & Compliance -->
            <div class="w-full sm:w-1/2 md:w-[30%] lg:w-[18%]">
                <p class="text-goldenColor font-semibold text-sm md:text-base mb-2">Legal & Compliance</p>
                <ul class="space-y-1 text-base">
                    <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Disclaimer</a></li>
                    <li><a href="#" class="hover:underline">RERA Disclosures</a></li>
                    <li><a href="#" class="hover:underline">Anti-Fraud Notice</a></li>
                    <li><a href="#" class="hover:underline">Cookie Policy</a></li>
                </ul>
            </div>

        </div>



        <div class="flex md:flex-row justify-between items-center  ">
            <!-- Left Side: Copyright -->
            <div class="flex items-center space-x-2 text-sm">
                <span>©</span>
                <p class="text-xs">2025 Adon Realty Real Estate Investment Platform. All Rights Reserved.</p>
            </div>

            <!-- Right Side: Social Media -->
            <div class="flex flex-col md:flex-col items-left gap-2 md:gap-4 ">
                <p class="text-sm font-semibold text-white">Follow us.</p>
                <div class="mt-4 text-center flex justify-center items-center md:gap-5 gap-2">
                    <a href=""><x-forkawesome-facebook-square class="text-bgSecondary w-5 h-5" /></a>
                    <a href=""><x-forkawesome-youtube-play class="text-bgSecondary w-5 h-5" /></a>
                    <a href=""><x-forkawesome-instagram class="text-bgSecondary w-5 h-5" /></a>
                    <a href=""><x-forkawesome-linkedin-square class="text-bgSecondary w-5 h-5" /></a>
                    <a href=""><x-si-x class="text-bgSecondary w-5 h-5" /></a>
                </div>
            </div>

        </div>
    </div>
</footer>