<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <style>
        .cke_notification {
            display: none !important;
        }
    </style>

    @yield('metadata')

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>

    </style>
</head>

<body class="font-sans antialiased">

    @auth
    @include('Dashboard.layouts.header')
    @endauth

    @yield('login')
    <div class="max-h-[100vh] h-[100vh] bg-adminSidebar flex gap-6">
        <div
            class="relative flex h-[calc(100vh)] w-full max-w-[18rem] flex-col  bg-clip-border p-4 text-white shadow-xl shadow-blue-gray-900/5">
            <div class="p-4 mb-2">
                <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-white">
                    Sidebar
                </h5>
            </div>
            <nav class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-white">
                <!-- ── Development Partner ───────────────────────────── -->
                <div class="relative block w-full">
                    <a href="{{ route('dashboard') }}">
                        <div
                            class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80">
                            <button type="button"
                                class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left border-b-0 select-none text-blue-gray-700 hover:text-blue-gray-900">
                                <div class="grid mr-4 place-items-center">
                                    <x-ri-dashboard-fill class="w-6 h-6 text-white" />
                                </div>
                                <p class="mr-auto text-base font-normal leading-relaxed">Dashboard</p>
                            </button>
                        </div>
                    </a>

                </div>
                <!-- ── Development Partner ───────────────────────────── -->
                <div class="relative block w-full">
                    <div role="button"
                        class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80">
                        <button type="button"
                            class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left border-b-0 select-none text-blue-gray-700 hover:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M3 3h18v18H3z" />
                                </svg>
                            </div>
                            <p class="mr-auto text-base font-normal leading-relaxed">Developers</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                    stroke="currentColor" aria-hidden="true" class="w-4 h-4 mx-auto transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="overflow-hidden">
                        <div class="block w-full py-0 text-sm font-light">
                            <nav class="flex flex-col gap-1 p-0">
                                <a href="{{ route('development-partners.list') }}">
                                    <div role="button" class="flex items-center w-full px-3 py-1 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Developer List
                                    </div>
                                </a>
                                <a href="{{ route('development-partners.create') }}">
                                    <div role="button" class="flex items-center w-full px-3 py-1 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Add Developer
                                    </div>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- ── Projects ───────────────────────────────────────── -->
                <div class="relative block w-full">
                    <div role="button"
                        class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80">
                        <button type="button"
                            class="flex items-center justify-between w-full p-3 font-sans text-xl font-semibold leading-snug text-left border-b-0 select-none text-blue-gray-700 hover:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M3 3h18v18H3z" />
                                </svg>
                            </div>
                            <p class="mr-auto text-base font-normal leading-relaxed">Projects</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                    stroke="currentColor" class="w-4 h-4 mx-auto transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="overflow-hidden">
                        <div class="block w-full py-1 text-sm font-light">
                            <nav class="flex flex-col gap-1 p-0">
                                <a href="{{ route('project.list') }}">
                                    <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Projects List
                                    </div>
                                </a>
                                <a href="{{ route('projects.create') }}">
                                    <div class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Add Project
                                    </div>
                                </a>

                                <a href="{{ route('categories.list') }}">
                                    <div class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Categories List
                                    </div>
                                </a>

                                <a href="{{ route('categories.create') }}">
                                    <div class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Add Category
                                    </div>
                                </a>

                            </nav>
                        </div>
                    </div>
                </div>

                <!-- ── Others (Blog / News / etc.) ───────────────────── -->
                <div class="relative block w-full">
                    <div role="button"
                        class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80">
                        <button type="button"
                            class="flex items-center justify-between w-full p-3 font-sans text-xl font-semibold leading-snug text-left border-b-0 select-none text-blue-gray-700 hover:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M4 4h16v16H4z" />
                                </svg>
                            </div>
                            <p class="mr-auto text-base font-normal leading-relaxed">Blogs</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                    stroke="currentColor" class="w-4 h-4 mx-auto transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="overflow-hidden">
                        <div class="block w-full py-1 text-sm font-light">
                            <nav class="flex flex-col gap-1 p-0">
                                <!-- Blog -->
                                <a href="{{ route('blog.list') }}">
                                    <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Blog List
                                    </div>
                                </a>
                                <!-- Blog -->
                                <a href="{{ route('blog.create') }}">
                                    <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Add New Blog
                                    </div>
                                </a>

                            </nav>
                        </div>
                    </div>
                </div>

                <div class="relative block w-full">
                    <div role="button"
                        class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80">
                        <button type="button"
                            class="flex items-center justify-between w-full p-3 font-sans text-xl font-semibold leading-snug text-left border-b-0 select-none text-blue-gray-700 hover:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M4 4h16v16H4z" />
                                </svg>
                            </div>
                            <p class="mr-auto text-base font-normal leading-relaxed">Others</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                    stroke="currentColor" class="w-4 h-4 mx-auto transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="overflow-hidden">
                        <div class="block w-full py-1 text-sm font-light">
                            <nav class="flex flex-col gap-1 p-0">
                                <!-- News -->
                                <a href="{{ route('news.list') }}">
                                    <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        News List
                                    </div>
                                </a>
                                <a href="{{ route('news.create') }}">
                                    <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Add New News
                                    </div>
                                </a>
                                <!-- Events -->
                                <a href="{{ route('event.list') }}">
                                    <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Events List
                                    </div>
                                </a>
                                <a href="{{ route('event.create') }}">
                                    <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                        <div class="grid mr-4 place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        Add New Events
                                    </div>
                                </a>
                                <!-- Awards -->
                               <a href="{{ route('award.list') }}">
                                 <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                            <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Award List
                                </div>
                               </a>
                               <a href="{{ route('award.create') }}">
                                 <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                            <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Add New Award
                                </div>
                               </a>
                                <!-- Team -->
                                <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                            <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Team
                                </div>
                                <!-- Testimonials -->
                                <div role="button" class="flex items-center w-full p-3 rounded-lg hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="3" viewBox="0 0 24 24" fill="none" class="w-5 h-3">
                                            <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    Testimonials
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <hr class="my-2 border-blue-gray-50" />
                
                <div
                    class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                    <div class="grid mr-4 place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left">Log Out</button>
                    </form>
                </div>
            </nav>
        </div>
        <section class="px-0 mt-16 w-full h-[calc(100vh-4rem)] overflow-y-scroll bg-adminFormBg">

            @yield('content')
        </section>

    </div>




    <script type="module">
        $(document).ready(function() {
            $(function() {
                // keep everything collapsed on load
                $('.relative .overflow-hidden').hide();

                $('.relative > div[role="button"] > button').on('click', function(e) {
                    e.preventDefault();

                    const $parent = $(this).closest('.relative'); // the <div class="relative …">
                    const $submenu = $parent.find('.overflow-hidden').first();
                    const $chevron = $(this).find('svg').last();

                    // — Accordion behaviour —
                    $('.relative').not($parent).find('.overflow-hidden:visible').slideUp(200);
                    $('.relative').not($parent).find('svg.rotate-180').removeClass('rotate-180');

                    // — Toggle THIS submenu —
                    if ($submenu.is(':visible')) {
                        // it’s open → close it
                        $submenu.slideUp(200);
                        $chevron.removeClass('rotate-180');
                    } else {
                        // it’s closed → open it
                        $submenu.slideDown(200);
                        $chevron.addClass('rotate-180');
                    }
                });
            });


            $(function() {
                const $btn = $('#dropdownUserBtn');
                const $menu = $('#dropdownUserMenu');
                const $caret = $btn.find('svg').last();

                $btn.on('click', function(e) {
                    e.stopPropagation();
                    $menu.toggleClass('hidden');
                    $caret.toggleClass('rotate-180');
                });

                $(document).on('click', function(e) {
                    if (!$(e.target).closest('#dropdownUserBtn, #dropdownUserMenu').length) {
                        $menu.addClass('hidden');
                        $caret.removeClass('rotate-180');
                    }
                });
            });
        });
    </script>

    @yield('scripts')
</body>

</html>