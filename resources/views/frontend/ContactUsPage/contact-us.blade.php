@extends('frontend.layouts.app')
@section('metadata')
<title>Contact Us</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/contact-us.css') }}">
@endsection

@section('content') 


      

@include('frontend.ContactUsPage.contactform')

@include('frontend.ContactUsPage.testimonials')

@endsection



@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('.testimonial-slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

@endsection