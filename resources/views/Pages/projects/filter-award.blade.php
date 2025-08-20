 <h2 class="md:text-2xl font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 md:mt-0 mt-6">Featured Awards & Recognitions</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
            @if($awards->where('is_featured', 1)->count() > 0)
            @foreach($awards->where('is_featured', 1) as $award)
            <x-awards
                image="{{ asset($award->featured_image) }}"
                alt="{{ $award->title }}"
                class="featured-investment-img"
                newsAndPrCard="arawds-card"
                newsAndPrCardImgDiv="arwards-card-img-div"
                title="{{ $award->title }}"
                by="{{ $award->by }}"
                description="{{ $award->short_description }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No awards found.</p>
            @endif


        </div>

        <!-- Past Awards & Recognitions -->
        <h2 class="md:text-[24px] font-bold text-[16px] md:text-start text-center md:mb-6 mb-3 mt-10">Past Awards & Recognitions</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 md:gap-4 gap-3 mx-auto md:px-6 !place-items-start justify-center grid-items-center">
            @if( $awards->where('is_featured', 0)->count() > 0)
            @foreach($awards->where('is_featured', 0) as $award)
            <x-awards
                image="{{ asset($award->featured_image) }}"
                alt="{{ $award->title }}"
                class="featured-investment-img"
                newsAndPrCard="arawds-card"
                newsAndPrCardImgDiv="arwards-card-img-div"
                title="{{ $award->title }}"
                by="{{ $award->by }}"
                description="{{ $award->short_description }}" />
            @endforeach
            @else
            <p class="text-center text-gray-500">No awards found.</p>
            @endif
        </div>