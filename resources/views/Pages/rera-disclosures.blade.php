@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - RERA Disclosures</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('rera-disclosures') }}">RERA Disclosures</a> </div>
</section>
<section class="max-w-[1100px] mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-4">RERA Disclosures</h1>
  <div class="space-y-6 text-sm text-txBlack">
    <p>Adon Realty complies with the Real Estate (Regulation and Development) Act, 2016 (RERA). All our ongoing and future projects are registered under respective state RERA authorities.</p>
    <p>We provide full disclosure of project details, including registration number, sanctioned plans, layout, carpet area, completion timelines, and more.</p>
    <p>Customers can verify these details through the official RERA website or request disclosure from our support team.</p>
  </div>
</section>
<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection