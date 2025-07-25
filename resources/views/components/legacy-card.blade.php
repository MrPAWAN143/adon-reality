        <div class="{{ $class  ?? '' }}">
            <h3 class="">{{ $title ?? '' }}</h3>
            <img src="{{ $image ?? '' }}" alt="{{ $alt ?? '' }}" class="{{ $imgClass ?? '' }}">
            <p class="text-primary p-0 text-sm {{ $descriptionClass ?? '' }}">{{ $description ?? '' }}</p>
        </div>
