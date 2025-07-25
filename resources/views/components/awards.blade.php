<div class="marketing-insights-card {{ $newsAndPrCard ?? '' }}">
  <div class="featured-investment-image-dev {{ $newsAndPrCardImgDiv ?? '' }}">
    <img src="{{ $image ?? '' }}" alt="{{ $alt }}" class="{{ $class}}" />
  </div>
  <h4 class="!text-sm !font-bold clamp-2-lines">{{ $title ?? '' }}</h4>

    <p class="text-base !font-light ">{{ $by ?? '' }}</p>
    <p class="text-sm clamp-4-lines">{{ $description ?? '' }}</p>
    <a href="{{ $buttonLink ?? '' }}" class="{{ $buttonClass ?? '' }} inline-flex justify-center items-center">{{ $buttonText ?? '' }}</a>


</div>