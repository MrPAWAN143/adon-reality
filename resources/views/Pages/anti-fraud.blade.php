@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Anti-Fraud Notice</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('anti-fraud') }}">Anti-Fraud Notice</a> </div>
</section>
<section class="max-w-[1100px] mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-4">Anti-Fraud Notice</h1>
  <div class="space-y-6 text-sm text-txBlack">
    <ul class="list-disc list-inside">
      <li>Adon Realty never asks for payment outside official banking channels or platforms.</li>
      <li>Verify agent identity before sharing personal or financial details.</li>
      <li>Report suspicious activities or fraudulent offers immediately at support@adonrealty.com.</li>
    </ul>
  </div>
</section>
<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection