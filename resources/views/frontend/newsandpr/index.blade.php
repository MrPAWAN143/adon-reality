 @extends('frontend.layouts.app')
@section('metadata')
<title>News & PR</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/contact-us.css') }}">
@endsection

@section('content')  
 
 <div class=' py-2 m-2  w-[96%] max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto '>
      <div class="">
        <h1 class='font-bold text-center '> NEWS & PR </h1>
      <p class="text-center"> We provide full article or story links featuring Adon in reputed publications and PR coverage. </p>
      </div>
<div class='mt-10'>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-7 ">
 

                @for ($i=0;$i<9;$i++)
                    
         <div class="bg-white shadow-2xl rounded-lg overflow-hidden px-4 py-2">
<img class="rounded pt-3" src="https://www.naturepl.com/blog/wp-content/uploads/2025/04/1756582-2400x1800.jpg" alt="" />
    <div class="py-4 px-2">
      <h2 class="text-start font-bold ">The Rise Of Smart Homes in Urg=ban India </h2>
      <p class="text-gray-600">March 10,2025</p>
      <p> Explore how technology is <br />transforming homes into intelligent living spaces </p>
      <button class="bg-[#5c0a0a] text-white rounded-full mt-5 px-2 py-2 w-full"> Read More</button>
    </div>
    </div>
 
                    
                @endfor
     
  </div>
  </div>



  </div>


@endsection
