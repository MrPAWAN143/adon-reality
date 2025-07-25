<div class="{{ $featuredCardClass ?? '' }}">
    <img src="{{ $src }}" alt="{{ $alt }}" class="{{$imageClass ?? ''}} " />
</div>
<h3 class="single-line-ellipsis-homepage">{{ $heading ?? '' }}</h3>
<p class="md:leading-6 font-normal single-line-ellipsis-homepage">Location: {{ $location ?? '' }}</p>
   <p class="md:leading-6 font-normal single-line-ellipsis-homepage"> RERA No: <a href="{{ $url ?? '#' }}" class=" text-sm text-blue-600 font-bold">{{ $rera ?? '' }}</a></p>
   <p class="md:leading-6 font-normal single-line-ellipsis-homepage"> <span class=" featured-investment-status">Status: {{ $status ?? '' }}</span> </p>
   <p class="md:leading-6 font-normal single-line-ellipsis-homepage"> <span class=" !font-montserrat mb-2">Expected ROI: {{ $roi ?? '' }}</span></p>
   <p class="md:leading-6 font-normal single-line-ellipsis-homepage"> By Developer: <span class="font-semibold ">{{ $developer ?? '' }}</span></p>
   <p class="md:leading-6 font-normal single-line-ellipsis-homepage"> <span class=" md:tracking-normal tracking-tight">Variety: {{ $variety ?? '' }}</span></p>
   <p class="md:leading-6 font-normal single-line-ellipsis-homepage"> Size: {{ $size ?? '' }}</p>
   <p class="md:leading-6 font-normal single-line-ellipsis-homepage"><span class="font-semibold">  ₹ {{ $price ?? '' }}</span> </p>
</p>