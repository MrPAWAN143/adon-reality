<div class="{{ $featuredCardClass ?? '' }}">
    <img src="{{ $src }}" alt="{{ $alt }}" class="{{$imageClass ?? ''}} " />
</div>
<h3>{{ $heading }}</h3>
<p class="md:leading-6 font-normal">Location: {{ $location }}<br>
    RERA No: <a href="{{ $url ?? '#' }}" class=" text-sm text-blue-600 font-bold">{{ $rera }}</a><br>
    <span class=" featured-investment-status">Status: {{ $status }}</span>
   <span class=" !font-montserrat mb-2">Expected ROI: {{ $roi }}</span><br>
    By Developer: <span class="font-semibold ">{{ $developer }}</span><br>
    <span class=" md:tracking-normal tracking-tight">Variety: {{ $variety }}</span><br>
    Size: {{ $size }}<br>
  <span class="font-semibold">  ₹ {{ $price }}</span>
</p>