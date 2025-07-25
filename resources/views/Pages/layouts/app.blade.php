<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logos/adon-fevicon.png') }}" class="favicon-logo object-cover">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    .single-line-ellipsis-homepage {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      display: block;
      width: 100%;
    }
  </style>
  @yield('metadata')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('styles')
</head>

<body class="!font-poppins antialiased bg-white text-gray-900">
  @include('Pages.layouts.header')
  @yield('homepage')
  @yield('content')
  @include('Pages.layouts.footer')





  <!-- javaScript for all pages -->
  <script type="module">
    $(document).ready(function() {
      $('.mobile-menu-button').click(function() {
        $('#mobileNav').removeClass('-translate-x-full').addClass('translate-x-0');
      });

      $('.close-mobile-menu, #mobileNav a').click(function() {
        $('#mobileNav').removeClass('translate-x-0').addClass('-translate-x-full');
      });
    });


    // Toggle Level 1
    document.querySelector('.toggle-l1').addEventListener('click', function() {
      this.nextElementSibling.classList.toggle('hidden');
      this.querySelector('svg').classList.toggle('rotate-180');
    });

    // Toggle Level 2
    document.querySelectorAll('.toggle-l2').forEach(btn => {
      btn.addEventListener('click', function() {
        this.nextElementSibling.classList.toggle('hidden');
        this.querySelector('svg').classList.toggle('rotate-180');
      });
    });

    $(document).ready(function() {
      // Helper: Validate email
      const emailIsValid = email => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

      // Phone auto-prefix +91 and clean input
      const $phone = $('input[name="phone"]');
      $phone.on('input', function() {
        if (!this.value.startsWith('+91')) {
          this.value = '+91' + this.value.replace(/^\+?91?/, '');
        }
        this.value = this.value.replace(/(?!^\+)\D/g, '');
      });

      $('.queryform').submit(function(e) {
        e.preventDefault();


        const form = this;
        const formData = new FormData(form);


        // Clear old errors
        $('.error').text('');
        $('input, textarea').removeClass('border-red-500');

        // Extract values
        const first_name = formData.get('first_name').trim();
        const last_name = formData.get('last_name').trim();
        const email = formData.get('email').trim();
        const phone = formData.get('phone').trim();
        const message = formData.get('message').trim();
        let button = $(this).find('button[type="submit"]');


        let hasError = false;

        // Client-side validation
        if (first_name.length < 2) {
          showFieldError('first_name', 'Enter First Name.');
          hasError = true;
        }
        if (last_name.length < 2) {
          showFieldError('last_name', 'Enter Last Name.');
          hasError = true;
        }
        if (!emailIsValid(email)) {
          showFieldError('email', 'Enter a valid email address.');
          hasError = true;
        }
        if (!/^\+91\d{10}$/.test(phone)) {
          showFieldError('phone', 'Phone must be +91 followed by 10 digits.');
          hasError = true;
        }
        if (hasError) return;

        button.prop('disabled', true).text('Submitting...');

        // AJAX submit
        $.ajax({
          url: "{{ route('leads.store') }}",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            let message = response.message || 'Thank you! We’ll contact you soon.';
            $('#thankYouModal').removeClass('hidden').addClass('flex');
            $('#thankYouModal').find('h3').text('Thank You!');
            $('#thankYouModal').find('p').text(message);
            button.prop('disabled', false).text('Book a Call');
            form.reset();
          },
          error: function(err) {
            if (err.responseJSON && err.responseJSON.errors) {
              $.each(err.responseJSON.errors, function(name, message) {
                showFieldError(name, message[0]);
              });
            } else {
              $('#thankYouModal').removeClass('hidden').addClass('flex');
              $('#thankYouModal').find('h3').text('Error!');
              $('#thankYouModal').find('p').text('Something went wrong. Please try again later.');
            }
            button.prop('disabled', false).text('Book a Call');
          }
        });
      });

      function showFieldError(name, message) {
        const input = $(`[name="${name}"]`);
        input.addClass('border-red-500');
        input.closest('div').find('.error').text(message);
      }



      $('#closeModal').on('click', function() {
        $('#thankYouModal').addClass('hidden').removeClass('flex');
      });

    });
  </script>
  @yield('scripts')
</body>

</html>