<div class="{{ $cardCls}}">
  <div class="featured-investment-image-dev">

    <img src="{{ $src }}" alt="{{ $alt }}" class="{{ $class}}" />
  </div>
  <h4 class="sm:text-sm text-md ">{{ $h4 }}</h4>
  <p class="sm:text-sm text-md">{{ $p }}</p>
  <x-button class="marketing-insights-button" text=" Learn More" :url="$url" />
</div>