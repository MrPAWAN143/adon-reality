@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Privacy Policy</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('privacy-policy') }}">Privacy Policy</a> </div>
</section>
<section class="max-w-[1100px] mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-4">Privacy Policy</h1>
  <div class="space-y-6 text-sm text-txBlack">
    <div>
      <h2 class="font-semibold text-lg">Overview</h2>
      <p>We respect your privacy and commit to protecting your personal data. This policy explains what information we collect, how we use it, and how you can control it.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Information We Collect</h2>
      <ul class="list-disc list-inside">
        <li>Provided by you: name, email, phone, address, etc.</li>
        <li>Automatically: IP, browser type, usage patterns, form submissions, via cookies/analytics.</li>
      </ul>
    </div>
    <div>
      <h2 class="font-semibold text-lg">How We Use It</h2>
      <ul class="list-disc list-inside">
        <li>To respond to inquiries, provide updates, process listings and bookings</li>
        <li>To improve Website functionality, personalize experience, analyze traffic</li>
        <li>To communicate marketing or industry insights (only if you opt in)</li>
      </ul>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Data Sharing</h2>
      <ul class="list-disc list-inside">
        <li>With third-party service providers (e.g. CRM, marketing, analytics) under contract</li>
        <li>To comply with legal/regulatory obligations (e.g. RERA filings)</li>
        <li>Never sold or shared otherwise</li>
      </ul>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Security & Retention</h2>
      <p>We use industry-standard measures (e.g. encryption, access controls) to secure data and retain only as long as needed.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Your Rights</h2>
      <p>You may request access, correction, deletion, or withdraw consent by contacting our Data Officer at [email address].</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Children’s Privacy</h2>
      <p>Our site is not directed at children under 13; we do not knowingly collect their personal information.</p>
    </div>
    <div>
      <h2 class="font-semibold text-lg">Updates</h2>
      <p>Policy may be updated; the “Last Updated” date will reflect changes.</p>
    </div>
  </div>
</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection