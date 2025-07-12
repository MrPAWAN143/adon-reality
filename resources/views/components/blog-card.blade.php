<div class="{{ $cardCls}} ">
  <div class="{{ $imageWrapperClass }} ">

    <img src="{{ $src }}" alt="{{ $alt }}" class="{{ $class}}  transform transition duration-300 ease-in-out hover:scale-125" />
  </div>
  <h4 class="text-sm !md:text-md ">{{ $h4 }}</h4>
  <p class="!md:text-base !text-xs">{{ $p }}</p>
  <x-button class="marketing-insights-button" text=" Learn More" :url="$url" />
</div>