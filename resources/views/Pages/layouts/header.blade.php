<header class="w-full bg-white  z-50 sticky top-0 shadow-xl">
  <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-8 flex items-center justify-between py-4">

    <!-- Logo -->
    <div class="flex-shrink-0">
      <a href="{{ route('home') }}" class="flex items-center">
        <img src="{{asset('assets/images/logos/header-logo.png')}}" alt="Adon Realty" class="h-14 w-auto">
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden block text-gray focus:outline-none mobile-menu-button">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

  <!-- DESKTOP NAVIGATION -->
<nav class="hidden md:flex items-center space-x-6">
  <!-- Projects Dropdown -->
  <div class="relative group">
    <a href="{{ route('projects') }}" class="flex items-center text-base text-txBlack hover:text-primary font-medium">
      Projects
      <svg class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M6 9l6 6 6-6" />
      </svg>
    </a>

    <!-- First Level Dropdown -->
    <ul class="absolute left-0 pt-2 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition z-40 py-2">
      <li><a href="{{ route('projects') }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">All</a></li>
      <li><a href="{{ route('projects' , ['category' => 'residential']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Residential</a></li>


      <!-- Studio Apartments with Submenu -->
      <li class="relative group/item">
        <a href="{{ route('projects' , ['category' => 'commercial']) }}" class="flex justify-between items-center px-4 py-2 text-sm text-txBlack hover:bg-gray-100">
        Commercial
          <svg class="ml-2 h-3 w-3 text-gray-500 group-hover/item:text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 18l6-6-6-6" />
          </svg>
        </a>

        <!-- Second Level Submenu -->
        <ul class="absolute top-0 left-full ml-[1px] w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition py-2 z-50">
          <li><a href="{{ route('projects' , ['category' => 'commercial' , 'location' => 'noida']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-rose-200">Noida</a></li>
          <li><a href="{{ route('projects' , ['category' => 'commercial' , 'location' => 'delhi']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Delhi</a></li>
          <li><a href="{{ route('projects' , ['category' => 'commercial' , 'location' => 'gurugram']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Gurugram</a></li>
          <li><a href="{{ route('projects' , ['category' => 'commercial' , 'location' => 'pune']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Pune</a></li>
          <li><a href="{{ route('projects' , ['category' => 'commercial' , 'location' => 'bangalore']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Bangalore</a></li>
        </ul>
      </li>

      <!-- Studio Apartments with Submenu -->
      <li class="relative group/item">
        <a href="#" class="flex justify-between items-center px-4 py-2 text-sm text-txBlack hover:bg-gray-100">
          Studio Apartments
          <svg class="ml-2 h-3 w-3 text-gray-500 group-hover/item:text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 18l6-6-6-6" />
          </svg>
        </a>

        <!-- Second Level Submenu -->
        <ul class="absolute top-0 left-full ml-[1px] w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition py-2 z-50">
          <li><a href="{{ route('projects' , ['category' => 'studio-apartments' , 'location' => 'noida']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-rose-200">Noida</a></li>
          <li><a href="{{ route('projects' , ['category' => 'studio-apartments' , 'location' => 'delhi']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Delhi</a></li>
          <li><a href="{{ route('projects' , ['category' => 'studio-apartments' , 'location' => 'gurugram']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Gurugram</a></li>
          <li><a href="{{ route('projects' , ['category' => 'studio-apartments' , 'location' => 'pune']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Pune</a></li>
          <li><a href="{{ route('projects' , ['category' => 'studio-apartments' , 'location' => 'bangalore']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Bangalore</a></li>
        </ul>
      </li>

      <li><a href="{{ route('projects' , ['category' => 'plots']) }}" class="block px-4 py-2 text-sm text-txBlack hover:bg-gray-100">Plots</a></li>
    </ul>
  </div>

  <!-- Other Links -->
  <a href="{{ route('blog.show') }}" class="text-base text-txBlack hover:text-primary font-medium">Blog</a>
  <a href="{{ route('development-partners') }}" class="text-base text-txBlack hover:text-primary font-medium">Developers</a>
  <a href="{{ route('testimonials') }}" class="text-base text-txBlack hover:text-primary font-medium">Testimonial</a>
  <a href="{{ route('about-us') }}" class="text-base text-txBlack hover:text-primary font-medium">About Us</a>
  <a href="{{ route('contact') }}" class="ml-2 px-6 py-2 border-2 border-primary text-primary rounded-3xl text-base hover:bg-primary hover:text-white transition font-medium">Contact Us</a>
</nav>


   <!-- MOBILE NAVIGATION -->
<div id="mobileNav" class="fixed top-0 left-0 h-full w-72 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-40 p-6 md:hidden">
  <div class="flex items-center justify-between mb-6">
    <img src="{{ asset('assets/images/logos/header-logo.png') }}" alt="Adon Realty" class="h-10 w-auto">
    <button class="close-mobile-menu text-gray">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <nav class="space-y-4">
    <!-- Projects Accordion -->
    <div>
      <button class="flex w-full items-center justify-between text-sm font-medium text-txBlack toggle-l1">
        Projects
        <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M6 9l6 6 6-6" />
        </svg>
      </button>

      <div class="l1 hidden mt-2 pl-4 space-y-2">
        <a href="#" class="block text-sm text-txBlack hover:text-black">All</a>
        <a href="#" class="block text-sm text-txBlack hover:text-black">Residential</a>
        <a href="#" class="block text-sm text-txBlack hover:text-black">Commercial</a>

        <!-- Studio Apartments Sub-Accordion -->
        <div>
          <button class="flex w-full items-center justify-between text-sm text-txBlack font-medium toggle-l2">
            Studio Apartments
            <svg class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </button>
          <div class="l2 hidden mt-1 pl-4 space-y-1">
            <a href="#" class="block text-sm text-txBlack hover:text-black">Noida</a>
            <a href="#" class="block text-sm text-txBlack hover:text-black">Delhi</a>
            <a href="#" class="block text-sm text-txBlack hover:text-black">Gurugram</a>
            <a href="#" class="block text-sm text-txBlack hover:text-black">Pune</a>
            <a href="#" class="block text-sm text-txBlack hover:text-black">Bangalore</a>
          </div>
        </div>

        <a href="#" class="block text-sm text-txBlack hover:text-black">Plots</a>
      </div>
    </div>

    <!-- Other Links -->
    <a href="/blog" class="block text-sm text-txBlack hover:text-black font-medium">Blog</a>
    <a href="/developer" class="block text-sm text-txBlack hover:text-black font-medium">Developers</a>
    <a href="#" class="block text-sm text-txBlack hover:text-black font-medium">Testimonial</a>
    <a href="#" class="block text-sm text-txBlack hover:text-black font-medium">About Us</a>
    <a href="/contact-us" class="block text-center px-6 py-2 border border-primary text-primary rounded-full text-base hover:bg-primary hover:text-white transition font-medium">Contact Us</a>
  </nav>
</div>

</header>