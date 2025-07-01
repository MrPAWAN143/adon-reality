<nav class="bg-adminHeader border-b border-white fixed z-30 w-full">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <!-- Left side -->
            <div class="flex items-center justify-start">
                <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                    class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-adminPrimary focus:bg-adminPrimary focus:ring-2 focus:ring-adminPrimary rounded">
                    <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
                    <img src="{{asset('assets/images/logos/footer-logo.png')}}" class="h-10 mr-2" alt="Windster Logo">

                </a>
                <form action="#" method="GET" class="hidden lg:block lg:pl-36">
                    <label for="topbar-search" class="sr-only">Search</label>
                    <div class="mt-1 relative lg:w-64">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="topbar-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5"
                            placeholder="Search">
                    </div>
                </form>
            </div>

            <!-- Right side -->
            <div class="flex items-center">
                <!-- Mobile Search -->
                <button id="toggleSidebarMobileSearch" type="button"
                    class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-adminPrimary p-2 rounded-lg">
                    <span class="sr-only">Search</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Profile avatar + dropdown -->
                <div class="relative ml-3">
                    <button id="dropdownUserBtn"
                        type="button"
                        class="flex items-center text-sm rounded-full focus:ring-2 focus:ring-adminPrimary hover:bg-adminPrimary p-1">
                        <span class="sr-only">Open user menu</span>
                        <img src="https://i.pravatar.cc/32?img=4" class="w-8 h-8 rounded-full" alt="user photo">
                        <svg class="w-4 h-4 ml-1 text-gray-500 transition-transform" fill="currentColor"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.24 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div id="dropdownUserMenu"
                         class="hidden absolute text-white right-0 mt-2 w-48 origin-top-right bg-adminHeader divide-y divide-adminPrimary rounded-lg shadow-lg z-50">
                        <div class="px-4 py-3">
                            <p class="text-sm">Neil Sims</p>
                            <p class="text-sm font-medium text-white truncate">neil.sims@example.com</p>
                        </div>
                        <ul class="py-1">
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-adminPrimary">Dashboard</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-adminPrimary">Profile</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-adminPrimary">Settings</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm hover:bg-adminPrimary">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
