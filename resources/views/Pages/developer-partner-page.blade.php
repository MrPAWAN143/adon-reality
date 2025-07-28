@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Developer Partners</title>
@endsection
@section('styles')

@endsection

@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
  <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('development-partners') }}">Developer Partners</a></div>
</section>
<section class="px-4 md:px-0 bg-white md:pb-8  max-w-[1100px] mx-auto ">

  <div class="flex md:flex-row flex-col md:items-center md:justify-between justify-center items-center md:mb-8 mb-3">
    <div class="flex-1 px-0">
      <x-heading-subheading heading="Our Partnered Developers" subheading="Explore top real estate developers and their best projects." headingClass="heading text-start !my-2 m-heading" subHeadingClass="subheading mb-2 dev-start m-subheading" />
    </div>
  </div>


  <div class="grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-4 place-items-center justify-center">
    @foreach ($developmentPartner as $partner)

    <x-developer-partner-card mobileClass="m-dev-partner-card" buttonText="View Projects" developerButtonClass="developer-page-btn" partnerLogo="{{ asset($partner->logo) }}" url="{{ route('development-partners.show',  $partner->slug) }}" alt="{{ $partner->developer_name }}" heading="{{ $partner->developer_name }}" description="{{ $partner->tags }}" projectsPartnered="{{ $partner->total_projects }}" presence="{{ implode(', ', $partner->operating_cities ?? []) }}" />
    @endforeach
  </div>


</section>

<section class="md:px-4 px-0 md:py-6 py-6 bg-white">
  <div class="container max-w-5xl mx-auto px-4">

    <x-heading-subheading heading="Hear From Our Investors" subheading="Genuine testimonials and success stories from our valued investors." headingClass="heading text-center" subHeadingClass="subheading text-center !mb-2" />
  </div>


  <div class="testimonial-slider max-w-5xl mx-auto px-3 !flex !gap-5 justify-center items-center overflow-x-auto">
    @if(isset($testimonials) && $testimonials->count() > 0)
    @foreach ($testimonials as $testimonial)
    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs clamp-2-lines">{{ $testimonial->review_text }}</p>
        <div class="flex items-center">
          <img src="{{ asset($testimonial->photo) }}" alt="{{ $testimonial->name }}" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">{{ $testimonial->name }}</p>
            <p class="text-[8px] md:text-xs text-txBlack single-line-ellipsis-homepage">{{ $testimonial->role }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @endif
  </div>

</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection



@section('scripts')


@endsection