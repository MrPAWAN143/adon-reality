@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Blog</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">

@endsection

@section('content')
<section class="max-w-7xl mx-auto px-4 md:px-8 py-2">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('blog.show') }}" class="ml-[-5px]">Blog</a></div>
</section>
<section class="px-4 max-w-6xl mx-auto bg-white pb-8">
    <div class="container ">
        <x-heading-subheading heading="Our Blog & Insights" subheading="Get the latest updates, guides, and industry insights to help you make informed decisions about your next dream home." headingClass="heading text-center " subHeadingClass="subheading mb-2" />

        <div class="max-w-2xl mx-auto px-4 py-4 pb-8">
            <!-- Search Bar -->
            <div class="mb-6">
                <div class="flex items-center rounded-2xl border border-gray px-4 py-1 shadow-sm">
                    <x-zondicon-search class="w-6 h-6 " />
                    <input type="text" placeholder="Search blog articles..."
                        class="w-full outline-none text-sm bg-transparent border-none focus:border-none focus:outline-none" />
                </div>


            </div>

            <!-- Filters -->
            <div class="md:px-auto  grid grid-cols-3 gap-3">
                <select class="hero-section-select ">
                    <option>Category</option>
                    <option>Architecture</option>
                    <option>Interior</option>
                    <option>Exterior</option>
                </select>

                <select class="hero-section-select">
                    <option>Year</option>
                    <option>2025</option>
                    <option>2024</option>
                    <option>2023</option>
                </select>

                <select class="hero-section-select">
                    <option>Tags</option>
                    <option>Modern</option>
                    <option>Luxury</option>
                    <option>Minimal</option>
                </select>
            </div>
        </div>


        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto">
            @if(isset($blogs) && $blogs->count() > 0)
            @foreach ($blogs as $blog)
            <x-blog-card url="{{route('blog.each', $blog->slug )}}" imageWrapperClass="m-blog-page-image-dev" cardCls="marketing-insights-card blog-page" class="featured-investment-img" src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ $blog->summary }}" />
            @endforeach
            @endif

            
        </div>

    </div>

</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />
@endsection


@section('scripts')

@endsection