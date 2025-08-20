@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Awards and Recognitions</title>
@endsection
@section('styles')
@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('awards-and-recognitions') }}" class="ml-[-5px]">Awards & Recognitions</a></div>
</section>
<section class="md:px-0 mb-8 px-4 md:max-w-[1100px] w-full mx-auto bg-white">
    <div>
        <x-heading-subheading heading="Awards & Recognitions" subheading="Celebrating Our Journey of Excellence in Real Estate" headingClass="heading awards text-center !text-primary" subHeadingClass="subheading text-md mb-4" />
    </div>
    <div class="md:max-w-4xl w-full m-auto mt-0">
        <p class="text-center font-normal md:text-[14px] text-[10px] tracking-tight">Over the years, Adon Realty has been recognized for our commitment to innovation, sustainability, and excellence. These accolades reflect the trust of our clients and our team’s unwavering dedication to redefining real estate experiences.</p>
    </div>


    <form class="md:max-w-lg w-full md:px-0 px-4 mx-auto md:pb-5 mt-4 propertyFilterForm block">
        @csrf
        <!-- Filters -->
        <div class="flex justify-center m-auto ">
            <select name="year" class="border-2  border-primary bg-white text-txBlack-gray rounded-full px-4 m-auto md:py-2 py-1 w-36 focus:outline-none focus:ring-2 focus:ring-primary transition duration-300">
                <option selected disabled>Year</option>
                <option value="">All Years</option>
                @foreach ($awards->pluck('year')->unique() as $year)
                <option value="{{ $year }}">{{ $year }}</option> 
                @endforeach
            </select>

        </div>

        <div class="flex flex-row items-center justify-between w-full md:max-w-3xl bg-white rounded-2xl px-1 py-0 mt-4 border border-primary shadow-md">

            <div class="flex w-full items-center rounded-2xl px-2 md:py-1 ">
                <x-zondicon-search class="md:w-6 w-4 md:h-6 h-4 text-gray" />
                <input type="text" placeholder="Search Awards & Recognitions..." name="search"
                    class="w-full placeholder:text-[10px] md:placeholder:text-[14px] text-[10px] md:text-[14px] outline-none bg-transparent border-none focus:border-none focus:outline-none" />
            </div>

            <!-- Button -->
            <button class="bg-primary md:text-[14px] text-[12px] border-primary hover:bg-white border-2 hover:border-primary text-white hover:text-txBlack font-medium md:px-8 px-4 md:py-1.5 py-1  rounded-full md:ml-2 transition duration-300">
                Search
            </button>
        </div>

    </form>

    <div class=" py-0 md:mt-4 bg-white awardShowSection">
        <!-- Featured Awards & Recognitions -->
       @include('Pages.projects.filter-award', ['awards' => $awards])
    </div>

</section>

<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />
@endsection

@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('input[type="text"], select').on('input change', function(e) {
            e.preventDefault();
            let formData = new FormData($('.propertyFilterForm')[0]);

            $.ajax({
                url: "{{ route('awards.search') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $(".awardShowSection").html(response.html);
                },
                error: function(xhr) {
                    console.error("Error fetching filtered properties:", xhr.responseText);
                }
            });
        });
    });
</script>
@endsection