@extends('frontend.layouts.app')
@section('metadata')
<title>Home page</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
@endsection
@section('homepage')
@include('frontend.Homepage.heroSection')
@include('frontend.Homepage.whyInvestSection')
@include('frontend.Homepage.primeLocationSection')
@include('frontend.Homepage.featuredInvestmentSection')
@include('frontend.Homepage.whatWeOfferSection')
@include('frontend.Homepage.propertiesVirtually')
@include('frontend.Homepage.developmentPartner')
@include('frontend.Homepage.marketingInsights')
@include('frontend.Homepage.testimonials')
@include('frontend.Homepage.contactFormSection')
@endsection


@section('scripts')
<script type="module">
    $(document).ready(function(){
        $('.testimonial-slider').slick({
            centerMode: true,
            centerPadding: '150px',
            slidesToShow: 3,
            arrows: false,
            dots: true,
            speed: 500,
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        centerPadding: '80px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        centerPadding: '30px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

@endsection

