
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <div class="flex items-center space-x-2">
          <img src="{{asset('assets/images/logos/header-logo.png')}}" alt="Logo" class="h-20" />
        
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
          <a href="#" class="hover:text-primary">Projects</a>
          <a href="#" class="hover:text-primary">Blog</a>
          <a href="#" class="hover:text-primary">Developers</a>
          <a href="#" class="hover:text-primary">Testimonial</a>
          <a href="#" class="hover:text-primary">About Us</a>
        </nav>

        <!-- Contact Button (Desktop) -->
        <div class="hidden md:block">
          <a href="#" class="px-4 py-2 border border-primary text-primary rounded-full hover:bg-primary hover:text-white transition">
            Contact Us
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
           <x-zondicon-menu  class="text-txBlack w-8 menu " id="mobile-menu-button"/>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2 text-sm font-medium text-gray-700">
      <a href="#" class="block hover:text-primary">Projects</a>
      <a href="#" class="block hover:text-primary">Blog</a>
      <a href="#" class="block hover:text-primary">Developers</a>
      <a href="#" class="block hover:text-primary">Testimonial</a>
      <a href="#" class="block hover:text-primary">About Us</a>
      <a href="#" class="block mt-2 px-4 py-2 border border-primary text-primary rounded-full text-center hover:bg-primary hover:text-white transition">
        Contact Us
      </a>
    </div>
  </header>