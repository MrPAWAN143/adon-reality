@extends('Pages.layouts.app')

@section('content')
   <!-- 404 Error Page - Full Height with Your Theme -->
<section class="min-h-72 flex items-center justify-center bg-gradient-to-br from-gradientFrom to-gradientTo px-6 py-20">
  <div class="max-w-4xl w-full text-center space-y-10">

    <!-- Big Error Code -->
    <h1 class="text-[150px] leading-none font-extrabold text-primary">
      404
    </h1>

    <!-- Heading -->
    <h2 class="text-4xl md:text-5xl font-semibold text-txBlack">
      This page doesn’t exist
    </h2>

    <!-- Subtitle -->
    <p class="text-lg md:text-xl text-txBlack.gray max-w-2xl mx-auto">
      The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
    </p>

    <!-- CTA Buttons -->
    <div class="flex flex-col sm:flex-row justify-center gap-6">
      <a href="/" class="px-8 py-4 text-lg bg-primary text-white font-medium rounded-lg shadow hover:border-primary hover:bg-white hover:text-primary border-2 transition duration-300">
        Back to Homepage
      </a>
      <a href="/contact" class="px-8 py-4 text-lg border-2 border-primary text-primary rounded-lg hover:text-bgSecondary hover:bg-primary transition duration-300">
        Contact Us
      </a>
    </div>


  </div>
</section>

@endsection