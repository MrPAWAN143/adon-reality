<div class="development-partner-card {{$mobileClass ?? ''}}">
    <div class="md:p-4 p-0">
        <div class="flex items-center gap-4 mb-4">
            <img src="{{ $partnerLogo ?? '' }}" alt="{{ $alt ?? '' }}" class="w-16 h-16 rounded-full object-cover bg-white">
            <div class="overflow-hidden !mt-0">
                <h3 class="single-line-ellipsis-homepage">{{ $heading ?? '' }}</h3>
                <p class="development-partner-description single-line-ellipsis-homepage">{{ $description ?? '' }}</p>
            </div>
        </div>
        <p class="text-[16px] mb-2 font-semibold text-txBlack tracking-tight !font-montserrat">Projects Partnered: <span class="font-normal">{{ $projectsPartnered ?? '' }}</span></p>
        <p class="text-[16px] text-txBlack mt-1 tracking-tight font-montserrat leading-snug md:min-h-[42px] min-h-[36px] clamp-2-lines">
            Presence: {{ $presence ?? '' }}
        </p>
    </div>
    <div class="mt-4">
        <a href="{{ $url ?? '' }}" class="{{$developerButtonClass ?? ''}} m-dev-button">
           {{ $buttonText ?? '' }}
            <x-tabler-arrow-up-right class="ml-2" />
        </a>
    </div>
</div>