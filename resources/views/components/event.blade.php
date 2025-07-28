<div class="marketing-insights-card-event {{ $eventCard ?? ''}}">
   <div class="featured-investment-image-dev {{ $eventCardImgDiv ?? '' }}">
     <img src="{{ $image ?? '' }}" alt="{{ $alt ?? '' }}" class="{{ $class ?? ''}}" />
   </div>
    <h4 class="single-line-ellipsis-homepage">{{ $title ?? '' }}</h4>
    <p class="">{{ $dateTime ?? '' }}</p>
    <x-button class="marketing-insights-button rounded-3xl eventbtn" dataVideo="{{ $videoSrc ?? '' }}" text="{{ $buttonText ?? '' }}" />
</div>
