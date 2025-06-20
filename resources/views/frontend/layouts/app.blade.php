<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('metadata')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>

<body>
    @include('frontend.layouts.header')
    @yield('homepage')
    @yield('content')
    @include('frontend.layouts.footer')
    <!-- javaScript for all pages -->
    <script type="module">
        
    $(document).ready(function () {
    $('.mobile-menu-button').click(function () {
      $('#mobileNav').removeClass('-translate-x-full').addClass('translate-x-0');
    });

    $('.close-mobile-menu, #mobileNav a').click(function () {
      $('#mobileNav').removeClass('translate-x-0').addClass('-translate-x-full');
    });
  });
    </script>
@yield('scripts')
</body>

</html>