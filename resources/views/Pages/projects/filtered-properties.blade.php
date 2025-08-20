
@foreach ($properties as $property)
    <div class="featured-investment-card m-featured-page-card">
        <x-featured-investment-section 
            featuredCardClass="project-page-image-dev"
            src="{{ asset($property->property_featured_image) }}"
            alt="{{ $property->property_name }}"
            imageClass="project-page-image"
            heading="{{ $property->property_name }}"
            location="{{ $property->property_location }}"
            url="{{ $property->property_rera_url }}"
            rera="{{ $property->property_rera_number }}"
            status="{{ $property->property_status }}"
            roi="{{ $property->property_expected_roi }}"
            developer="{{ $property->developmentPartner->developer_name ?? '' }}"
            variety="{{ $property->category->name ?? '' }}"
            size="{{ $property->property_size }}"
            price="{{ $property->starting_price }}"
        />
        <x-button 
            class="featured-investment-button !py-2" 
            url="{{ route('projects.each', $property->property_slug) }}" 
            text="View Details" 
        />
    </div>
@endforeach

@if ($properties->isEmpty())
    <p class="col-span-full text-center text-gray-500 py-6">No projects found matching your filters.</p>
@endif
