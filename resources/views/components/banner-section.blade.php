<section class="{{ $class }}" style="background-image: url('{{ $image }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black bg-opacity-35"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4">
        <h1 class="text-md md:text-3xl font-bold mb-4 text-center {{ $titleClass }}">
            {{ $title }}
        </h1>
        <p class="text-sm md:text-base md:max-w-[50%] w-full max-w-[100%] font-normal text-center">{{ $subtitle }}</p>
        <a href="{{ $buttonLink }}" class="{{ $buttonClass }}">
            {{ $buttonText }}
        </a>

    </div>
</section>