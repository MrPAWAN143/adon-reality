<div class="{{ $cardCls ?? '' }} ">
  <div class="{{ $imageWrapperClass ?? '' }} overflow-hidden">

    <img src="{{ $src ?? '' }}" alt="{{ $alt ?? '' }}" class="{{ $class}}  transform transition duration-300 ease-in-out hover:scale-125" />
  </div>
  <h4 class="clamp-2-lines">{{ $h4 ?? '' }}</h4>
  <p class="clamp-2-lines">{{ $p ?? '' }}</p>
  <x-button class="marketing-insights-button" text=" Learn More" :url="$url ?? ''" />
</div>