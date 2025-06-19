<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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