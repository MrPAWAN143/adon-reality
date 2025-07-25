<section class="{{ $class }} bg-cover bg-no-repeat bg-center relative"
    style="background-image: url('{{ $mobileBanner ?? $image }}');background-position: center; background-size: cover; background-repeat: no-repeat; @media(min-width: 768px) { background-image: url('{{ $image }}'); background-size: cover;background-position: center; background-repeat: no-repeat; }">

    <div class="absolute inset-0 bg-black bg-opacity-35"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4">
        <h1 class="text-md md:text-[24px] text-[16px] font-bold mb-0 text-center {{ $titleClass ?? '' }}">
            {{ $title ?? '' }}
        </h1>
        <p class="text-[12px] md:text-[16px] md:max-w-[50%] w-full max-w-[100%] font-normal text-center">{{ $subtitle ?? '' }}</p>
        <a href="{{ $buttonLink ?? '#' }}" class="{{ $buttonClass ?? '' }}">
            {{ $buttonText ?? '' }}
        </a>

    </div>
</section>