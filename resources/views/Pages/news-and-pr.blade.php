@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - News and PR</title>
@endsection
@section('styles')
@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('news') }}">News & PR</a></div>
</section>
<section class="md:px-0 mb-8 px-4 md:max-w-[1100px] w-full  mx-auto  bg-white">
    <div class="container max-w-[1100px] mx-auto">
        <x-heading-subheading heading="News & PR" subheading="We provide full articles or story links featuring Adon in reputed publications and PR coverage." headingClass="heading text-center" subHeadingClass="subheading text-sm mb-4" />
    </div>



    <div class="md:px-6 py-0 mt-4 bg-white">
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
          @if($news->count() > 0)
            @foreach($news as $item)
           <x-awards
                image="{{ asset($item->featured_image) }}"
                alt="{{ $item->alt }}"
                class="featured-investment-img news-page"
                title="{{ $item->title }}"
                by="{{ $item->created_at->format('d M Y') }}"
                description="{{ $item->short_description }}"
                buttonText="Read More"
                buttonClass="newsAndPrButton"
                newsAndPrCard="newsAndPrCard"
                buttonLink="{{ route('news.show', $item->slug) }}"
                newsAndPrCardImgDiv="newsAndPrCardImgDiv" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No news articles available at the moment.</p>
            @endif



        </div>

    </div>

</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection