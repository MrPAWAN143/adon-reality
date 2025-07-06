<header class="w-full bg-white  z-50 sticky top-0 shadow-xl">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between py-2">

    <!-- Logo -->
    <div class="flex-shrink-0">
      <a href="/">
        <img src="{{asset('assets/images/logos/header-logo.png')}}" alt="Adon Realty" class="h-16 w-auto">
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden block text-gray focus:outline-none mobile-menu-button">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Desktop Navigation Menu -->
    <nav id="navMenu" class="hidden md:flex items-center space-x-6">
      <a href="/project-page" class="text-base text-txBlack hover:text-primary font-medium flex items-center justify-center">
        Projects
       <x-forkawesome-angle-down class="ml-1 w-auto h-5" />
      </a>
      <a href="/blog" class="text-base text-txBlack hover:text-primary font-medium">Blog</a>
      <a href="/developer" class="text-base text-txBlack hover:text-primary font-medium">Developers</a>
      <a href="#" class="text-base text-txBlack hover:text-primary font-medium">Testimonial</a>
      <a href="#" class="text-base text-txBlack hover:text-primary font-medium">About Us</a>
      <a href="/contact" class="ml-2 px-6 py-2 border-2 border-primary text-primary rounded-3xl text-base hover:bg-primary hover:text-white transition font-medium">
        Contact Us
      </a>
    </nav>
  </div>

  <!-- Slide-In Mobile Navigation -->
  <div id="mobileNav" class="fixed top-0 left-0 h-full w-72 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-40 p-6 md:hidden">
    <div class="flex items-center justify-between mb-6">
      <img src="{{asset('assets/images/logos/header-logo.png')}}" alt="Adon Realty" class="h-10 w-auto mb-6">
      <button class="close-mobile-menu text-gray mb-6">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <nav class="space-y-4">
      <a href="/project-page" class="block text-sm text-txBlack hover:text-black font-medium">Projects</a>
      <a href="/blog" class="block text-sm text-txBlack hover:text-black font-medium">Blog</a>
      <a href="/developer" class="block text-sm text-txBlack hover:text-black font-medium">Developers</a>
      <a href="#" class="block text-sm text-txBlack hover:text-black font-medium">Testimonial</a>
      <a href="#" class="block text-sm text-txBlack hover:text-black font-medium">About Us</a>
      <a href="/contact-us" class="block text-center px-6 py-2 border border-primary text-primary rounded-full text-base hover:bg-primary hover:text-white transition font-medium">
        Contact Us
      </a>
    </nav>
  </div>
</header>