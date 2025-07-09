<div class="{{ $cardCls}}">
  <div class="featured-investment-image-dev md:max-h-52 md:h-52 max-h-48 h-48 overflow-hidden">

    <img src="{{ $src }}" alt="{{ $alt }}" class="{{ $class}}" />
  </div>
  <h4 class="text-sm !md:text-md ">{{ $h4 }}</h4>
  <p class="!md:text-base !text-xs">{{ $p }}</p>
  <x-button class="marketing-insights-button" text=" Learn More" :url="$url" />
</div>