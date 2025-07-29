@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Cookie Policy</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('cookie-policy') }}">Cookie Policy</a> </div>
</section>
<section class="max-w-[1100px] mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-4">Cookie Policy</h1>
  <div class="space-y-6 text-sm text-txBlack">
    <div>
      <h2 class="font-semibold text-lg">What Are Cookies?</h2>
      <p>Cookies are small text files stored on your browser or device to collect information about your activity on the website. They help improve your experience and site performance.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Types of Cookies We Use</h2>
      <ul class="list-disc list-inside">
        <li>Essential Cookies: Necessary for core site functionality like security and navigation.</li>
        <li>Performance Cookies: Help analyze site usage to improve functionality.</li>
        <li>Marketing Cookies: Used to deliver relevant ads and track campaign effectiveness.</li>
      </ul>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Managing Cookies</h2>
      <p>You can control or disable cookies through your browser settings. Note that some site features may not function properly if you disable cookies.</p>
    </div>
  </div>
</section>
<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection