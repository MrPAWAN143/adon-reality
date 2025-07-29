@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Disclaimer</title>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('disclaimer') }}">Disclaimer</a> </div>
</section>
<section class="max-w-[1100px] mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-4">Disclaimer</h1>
  <div class="space-y-6 text-sm text-txBlack">
    <p>The materials and information on this Website are provided "as is" and without warranties of any kind either expressed or implied. The Website may contain inaccuracies and typographical errors. Adon Realty does not warrant the accuracy or completeness of the materials or the reliability of any advice, opinion, statement or other information displayed or distributed through the Website.</p>
    <p>You acknowledge that any reliance on any such opinion, advice, statement, memorandum, or information shall be at your own risk.</p>
    <p>Adon Realty reserves the right, in its sole discretion, to correct any errors or omissions in any portion of the Website. Adon Realty may make any other changes to the Website and its content at any time without notice.</p>
  </div>
</section>
<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection