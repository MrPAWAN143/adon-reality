@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Reality - Project</title>
@endsection
@section('styles')
@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 py-0">
    <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('projects') }}" class="ml-[-5px]">Projects</a></div>
</section>
<section class="px-4 md:px-8 max-w-[1100px] mx-auto bg-white py-6">
    <div class="container ">

        <x-heading-subheading heading="Explore project that you need" subheading="Filter,short,and find the perfect property just the way you want" headingClass="heading text-center m-heading" subHeadingClass="subheading m-subheading mb-2" />

        <form class="max-w-full mx-auto md:px-12 py-4 md:pb-6 pb-3 propertyFilterForm">
            @csrf
            <!-- Filters -->
            <div class="grid md:grid-cols-4 grid-cols-4 md:gap-4 gap-2 md:pb-5">
                <select class="project-page-filter-btn " name="location">
                    <option value="" selected>Location</option>
                    @foreach ($properties->pluck('property_city')->unique() as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                    @endforeach
                </select>

                <select class="project-page-filter-btn" name="project">
                    <option value="" selected>Project</option>
                    @foreach ($properties->pluck('developmentPartner.developer_name')->unique() as $developer)
                    <option value="{{ $developer }}">{{ $developer }}</option>
                    @endforeach
                </select>


                <select class="project-page-filter-btn" name="status">
                    <option value="" selected>Status</option>
                    @foreach ($properties->pluck('property_status')->unique() as $status)
                    <option value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>

                <select class="project-page-filter-btn" name="budget">
                    <option value="" selected>Budget</option>
                    <option value="Below 20 Lacks">Below 20 Lacks</option>
                    <option value="20 Lacks - 40 Lacks">20 Lacks - 40 Lacks</option>
                    <option value="40 Lacks - 60 Lacks">40 Lacks - 60 Lacks</option>
                    <option value="60 Lacks - 80 Lacks">60 Lacks - 80 Lacks</option>
                    <option value="80 Lacks - 1 Cr">80 Lacks - 1 Cr</option>
                    <option value="1 Cr - 1.5 Cr">1 Crore - 1.5 Crore</option>
                    <option value="1.5 Cr - 2 Cr">1.5 Crore - 2 Crore</option>
                    <option value="2 Cr - 5 Cr">2 Crore - 5 Crore</option>
                    <option value="5 Cr +">5 Crore +</option>
                </select>
            </div>

            <div class="md:mb-6 mb-2 flex md:gap-5 gap-2 items-center justify-between mt-4">
                <div class="flex w-full items-center md:rounded-xl rounded-[20px] border border-bgSecondary md:px-4 px-2 md:py-1 py-0 shadow-sm">
                    <x-zondicon-search class="md:w-6 md:h-6 h-4 w-4 text-bgSecondary" />
                    <input type="text" placeholder="Search Property By Name Location..." name="search"
                        class="propertysearchBar w-full outline-none placeholder:text-bgSecondary md:placeholder:text-[16px] placeholder:text-[10px] text-[10px] md:text-[16px] px-1 bg-transparent border-none focus:border-none focus:outline-none py-1  md:py-2" />
                </div>

                <select class="project-page-filter-btn w-30 focus:bg-primary  md:w-auto rounded-[20px] bg-white text-primary border-2 border-primary px-4 py-2 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50" name="sort">
                    <option disabled selected>Sort by</option>
                    <option value="price_asc">Price: Low To High</option>
                    <option value="price_desc">Price: High To Low</option>
                    <option value="newest">Newest Listings</option>
                    <option value="most_viewed">Most Viewed</option>
                    <option value="best_roi">Best ROI Potential</option>
                </select>



            </div>
        </form>

        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-3 mx-auto propertysSection">
            @include('Pages.projects.filtered-properties', ['properties' => $properties])

        </div>

    </div>
</section>


<x-contact-us-form heading="Still Have a Question?"
    subheading="Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way." />

@endsection

@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('.propertyFilterForm select, .propertyFilterForm input[type="text"]').on('change input', function(e) {
            e.preventDefault();
            let formData = new FormData($('.propertyFilterForm')[0]);

            $.ajax({
                url: "{{ route('projects.filter') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $(".propertysSection").html(response.html);
                },
                error: function(xhr) {
                    console.error("Error fetching filtered properties:", xhr.responseText);
                }
            });
        });
    });
</script>
@endsection