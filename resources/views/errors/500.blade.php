@extends('Pages.layouts.app')

@section('metadata')
    <title>Adon Realty - 500 Error</title>
@endsection

@section('content')
<!-- 500 Error Page -->
<section class="min-h-72 flex items-center justify-center bg-gradient-to-br from-gradientFrom to-gradientTo px-6 py-20">
    <div class="max-w-4xl w-full text-center space-y-10">

        <!-- Big Error Code -->
        <h1 class="text-[150px] leading-none font-extrabold text-primary">
            500
        </h1>

        <!-- Heading -->
        <h2 class="text-4xl md:text-5xl font-semibold text-txBlack">
            Internal Server Error
        </h2>

        <!-- Subtitle -->
        <p class="text-lg md:text-xl text-txBlack.gray max-w-2xl mx-auto">
            Oops! Something went wrong on our end. Please try again later or contact support if the issue persists.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="/" class="px-8 py-4 text-lg bg-primary text-white font-medium rounded-lg shadow hover:border-primary hover:bg-white hover:text-primary border-2 transition duration-300">
                Back to Homepage
            </a>
            <a href="/contact" class="px-8 py-4 text-lg border-2 border-primary text-primary rounded-lg hover:text-bgSecondary hover:bg-primary transition duration-300">
                Contact Support
            </a>
        </div>

    </div>
</section>
@endsection
