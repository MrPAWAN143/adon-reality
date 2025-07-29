@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Terms and Conditions</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('terms-and-conditions') }}">Terms and Conditions</a> </div>
</section>
<section class="max-w-[1100px] mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-4">Terms & Conditions</h1>
  <div class="space-y-6 text-sm text-txBlack">
    <div>
      <h2 class="font-semibold text-lg">Introduction</h2>
      <p>These Terms govern your use of adonrealty.in and any services provided (“the Website”). By accessing the Website, you accept and agree to the Terms. Please read carefully.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Use of Contents</h2>
      <p>All content is for informational purposes only. You may not reproduce, distribute or alter any material without prior written permission.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Services & Projects</h2>
      <p>Descriptions, availability, and specifications of properties/projects are subject to change. Any sale or booking is contingent on prior written confirmation and execution of an appropriate agreement.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">User Obligations</h2>
      <p>Users shall provide accurate information and must not misuse the Website (e.g. hacking, automated scrapes).</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Limitation of Liability</h2>
      <p>adonrealty.in and its affiliates disclaim all liability arising from loss or damages due to use of the site or reliance on its content.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Governing Law</h2>
      <p>These Terms are governed by Indian law. Any disputes will be subject to courts in Delhi.</p>
    </div>
  </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection