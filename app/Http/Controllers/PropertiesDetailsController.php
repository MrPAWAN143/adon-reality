<?php

namespace App\Http\Controllers;

use App\Models\PropertiesCategory;
use App\Models\PropertiesDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\DevelopmentPartners;

use Illuminate\Http\Request;
use App\Models\PropertiesGalleryImages;
use Illuminate\Database\Eloquent\Casts\Json;

class PropertiesDetailsController extends Controller
{


    public function index()
    {
        $properties = PropertiesDetails::with('category', 'developmentPartner')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.properties-page', compact('properties'));
    }

    public function virtualTours()
    {
        $properties = PropertiesDetails::with('category', 'developmentPartner')
            ->where('property_type', 'Virtual')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.properties-page', compact('properties'));
    }

    public function show($slug)
    {
        $property = PropertiesDetails::where('property_slug', $slug)
            ->with(['category', 'developmentPartner', 'galleryImages'])
            ->firstOrFail();

        $similarProperties = PropertiesDetails::where('id', '!=', $property->id)
            ->where('category_id', $property->category_id)
            ->with('galleryImages')
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('Pages.project-each', compact('property', 'similarProperties'));
    }

    public function verifiedProperties()
    {
        $properties = PropertiesDetails::with('category', 'developmentPartner')
            ->where('is_verified', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Pages.verified-properties', compact('properties'));
    }

    public function whyInvestWithUs()
    {
        return view('Pages.why-invest-with-us');
    }

    public function create()
    {
        $categories = PropertiesCategory::where('is_active', 1)->get();
        $developmentPartners = DevelopmentPartners::where('is_active', 1)->get();

        return view('Dashboard.Projects.add', compact('categories', 'developmentPartners'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'development_partner_id' => 'required|integer',
            'property_name' => 'required|string|max:255',
            'property_slug' => 'nullable|string|max:255',
            'property_rera_number' => 'nullable|string|max:255',
            'property_rera_url' => 'nullable|string',
            'property_size' => 'nullable|string|max:255',
            'property_type' => 'nullable|string|max:255',
            'property_status' => 'required|string|max:100',
            'property_expected_roi' => 'nullable|string|max:255',
            'starting_price' => 'nullable|string|max:255',
            'unit_size' => 'nullable|string|max:255',
            'unit_type' => 'nullable|array',
            'total_units' => 'nullable|string|max:255',
            'number_of_towers' => 'nullable|string|max:255',
            'structure_of_property' => 'nullable|string|max:255',
            'unit_configurations' => 'nullable|string|max:255',
            'total_area_of_land' => 'nullable|string|max:255',
            'property_location' => 'nullable|string|max:255',
            'property_city' => 'nullable|string|max:255',
            'property_state' => 'nullable|string|max:255',
            'property_country' => 'nullable|string|max:255',
            'property_zip_code' => 'nullable|string|max:20',
            'property_amenities' => 'nullable|array',
            'property_location_advantages' => 'nullable|array',
            'property_meta_title' => 'nullable|string|max:255',
            'property_meta_keywords' => 'nullable|string|max:255',
            'property_meta_description' => 'nullable|string',
            'property_description' => 'nullable|string',
            'property_benefits' => 'nullable|string',
            'property_featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'property_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'property_brochure_url' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        // Sanitize Slug
        $validated['property_slug'] = Str::slug(strtolower($validated['property_slug'] ?? $validated['property_name']));

        // Save Featured Image
        $featuredImagePath = null;
        if ($request->hasFile('property_featured_image')) {
            $image = $request->file('property_featured_image');
            $filename = uniqid() . '_featured.' . $image->getClientOriginalExtension();
            $path = 'uploads/PropertyFeaturedImages';
            if (!file_exists($path)) mkdir($path, 0755, true);
            $image->move($path, $filename);
            $featuredImagePath = 'uploads/PropertyFeaturedImages/' . $filename;
        }

        // Save Gallery Images
        $galleryPaths = [];
        if ($request->hasFile('property_gallery')) {
            foreach ($request->file('property_gallery') as $index => $galleryImage) {
                $gFilename = uniqid() . '_gallery_' . $index . '.' . $galleryImage->getClientOriginalExtension();
                $gPath = 'uploads/PropertyGallery';
                if (!file_exists($gPath)) mkdir($gPath, 0755, true);
                $galleryImage->move($gPath, $gFilename);
                $galleryPaths[] = 'uploads/PropertyGallery/' . $gFilename;
            }
        }

        // Save Brochure
        $brochurePath = null;
        if ($request->hasFile('property_brochure_url')) {
            $file = $request->file('property_brochure_url');
            $bFilename = uniqid() . '_brochure.' . $file->getClientOriginalExtension();
            $bPath = 'uploads/PropertyBrochures';
            if (!file_exists($bPath)) mkdir($bPath, 0755, true);
            $file->move($bPath, $bFilename);
            $brochurePath = 'uploads/PropertyBrochures/' . $bFilename;
        }

        // Create Property
        $property = PropertiesDetails::create([
            'category_id'                  => $validated['category_id'],
            'development_partner_id'      => $validated['development_partner_id'],
            'property_name'               => $validated['property_name'],
            'property_slug'               => $validated['property_slug'],
            'property_rera_number'        => $validated['property_rera_number'] ?? null,
            'property_rera_url'           => $validated['property_rera_url'] ?? null,
            'property_size'               => $validated['property_size'] ?? null,
            'property_type'               => $validated['property_type'] ?? null,
            'property_status'             => $validated['property_status'],
            'property_expected_roi'       => $validated['property_expected_roi'] ?? null,
            'starting_price'              => $validated['starting_price'] ?? null,
            'unit_size'                   => $validated['unit_size'] ?? null,
            'total_units'                 => $validated['total_units'] ?? null,
            'number_of_towers'            => $validated['number_of_towers'] ?? null,
            'structure_of_property'       => $validated['structure_of_property'] ?? null,
            'unit_configurations'         => $validated['unit_configurations'] ?? null,
            'total_area_of_land'          => $validated['total_area_of_land'] ?? null,
            'property_location'           => $validated['property_location'] ?? null,
            'property_city'               => $validated['property_city'] ?? null,
            'property_state'              => $validated['property_state'] ?? null,
            'property_country'            => $validated['property_country'] ?? null,
            'property_zip_code'           => $validated['property_zip_code'] ?? null,
            'property_amenities'          => json_encode($validated['property_amenities']) ?? null,
            'property_location_advantages' => json_encode($validated['property_location_advantages']) ?? null,
            'property_meta_title'         => $validated['property_meta_title'] ?? null,
            'property_meta_keywords'      => $validated['property_meta_keywords'] ?? null,
            'property_meta_description'   => $validated['property_meta_description'] ?? null,
            'property_description'        => $validated['property_description'] ?? null,
            'property_benefits'                  => $validated['property_benefits'] ?? null,
            'property_featured_image'     => $featuredImagePath,
            'property_brochure_url'       => $brochurePath,
            'unit_type'                   => json_encode($validated['unit_type']) ?? [],
        ]);

        // Store gallery images in separate table
        foreach ($galleryPaths as $path) {
            PropertiesGalleryImages::create([
                'property_id' => $property->id,
                'image_path'  => $path,
            ]);
        }

        return $property
            ? response()->json(['status' => 'success', 'message' => 'Property created successfully.', 'property_id' => $property->id])
            : response()->json(['status' => 'error', 'message' => 'Failed to create property.'], 500);
    }


    public function projectList()
    {
        $properties = PropertiesDetails::with('category', 'developmentPartner')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Dashboard.Projects.list', compact('properties'));
    }



    public function edit($id)
    {
        $property = PropertiesDetails::with('galleryImages', 'category', 'developmentPartner')->findOrFail($id);
        $categories = PropertiesCategory::where('is_active', 1)->get();
        $developmentPartners = DevelopmentPartners::where('is_active', 1)->get();
        return view('Dashboard.Projects.edit', compact('property', 'categories', 'developmentPartners'));
    }

    public function update(Request $request, $id)
    {

        $property = PropertiesDetails::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|integer',
            'development_partner_id' => 'required|integer',
            'property_name' => 'required|string|max:255',
            'property_slug' => 'nullable|string|max:255',
            'property_rera_number' => 'nullable|string|max:255',
            'property_rera_url' => 'nullable|string',
            'property_size' => 'nullable|string|max:255',
            'property_type' => 'nullable|string|max:255',
            'property_status' => 'required|string|max:100',
            'property_expected_roi' => 'nullable|string|max:255',
            'starting_price' => 'nullable|string|max:255',
            'unit_size' => 'nullable|string|max:255',
            'unit_type' => 'nullable|array',
            'total_units' => 'nullable|string|max:255',
            'number_of_towers' => 'nullable|string|max:255',
            'structure_of_property' => 'nullable|string|max:255',
            'unit_configurations' => 'nullable|string|max:255',
            'total_area_of_land' => 'nullable|string|max:255',
            'property_location' => 'nullable|string|max:255',
            'property_city' => 'nullable|string|max:255',
            'property_state' => 'nullable|string|max:255',
            'property_country' => 'nullable|string|max:255',
            'property_zip_code' => 'nullable|string|max:20',
            'property_amenities' => 'nullable|array',
            'property_location_advantages' => 'nullable|array',
            'property_meta_title' => 'nullable|string|max:255',
            'property_meta_keywords' => 'nullable|string|max:255',
            'property_meta_description' => 'nullable|string',
            'property_description' => 'nullable|string',
            'property_benefits' =>     'nullable|string',
            'property_featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'property_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'property_brochure_url' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        // Sanitize Slug
        $validated['property_slug'] = Str::slug(strtolower($validated['property_slug'] ?? $validated['property_name']));

        // Save Featured Image
        if ($request->hasFile('property_featured_image')) {
            if ($property->property_featured_image && file_exists($property->property_featured_image)) {
                unlink($property->property_featured_image);
            }
            $image = $request->file('property_featured_image');
            $filename = uniqid() . '_featured.' . $image->getClientOriginalExtension();
            $path = 'uploads/PropertyFeaturedImages';
            if (!file_exists($path)) mkdir($path, 0755, true);
            $image->move($path, $filename);
            $validated['property_featured_image'] = 'uploads/PropertyFeaturedImages/' . $filename;
        } else {
            $validated['property_featured_image'] = $property->property_featured_image; // Keep old image if not updated
        }
        // Save Gallery Images
        $galleryPaths = [];
        if ($request->hasFile('property_gallery')) {
            foreach ($request->file('property_gallery') as $index => $galleryImage) {
                $gFilename = uniqid() . '_gallery_' . $index . '.' . $galleryImage->getClientOriginalExtension();
                $gPath = 'uploads/PropertyGallery';
                if (!file_exists($gPath)) mkdir($gPath, 0755, true);
                $galleryImage->move($gPath, $gFilename);
                $galleryPaths[] = 'uploads/PropertyGallery/' . $gFilename;
            }
        }
        // Save Brochure
        if ($request->hasFile('property_brochure_url')) {
            if ($property->property_brochure_url && file_exists($property->property_brochure_url)) {
                unlink($property->property_brochure_url);
            }
            $file = $request->file('property_brochure_url');
            $bFilename = uniqid() . '_brochure.' . $file->getClientOriginalExtension();
            $bPath = 'uploads/PropertyBrochures';
            if (!file_exists($bPath)) mkdir($bPath, 0755, true);
            $file->move($bPath, $bFilename);
            $validated['property_brochure_url'] = 'uploads/PropertyBrochures/' . $bFilename;
        } else {
            $validated['property_brochure_url'] = $property->property_brochure_url; // Keep old brochure if not updated
        }

        $property->update($validated);

        // Update gallery images in separate table
        foreach ($galleryPaths as $path) {
            PropertiesGalleryImages::create([
                'property_id' => $property->id,
                'image_path'  => $path,
            ]);
        }

        if (!$property) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Failed to update property.'
                ],
                500
            );
        }
        return response()->json(
            [
                'status' => 'success',
                'message' => 'Property updated successfully.',
                'property_id' => $property->id
            ],
            200
        );
    }

    public function destroy($id)
    {
        $property = PropertiesDetails::findOrFail($id);
        $property->delete();
        // Delete featured image
        if ($property->property_featured_image && file_exists($property->property_featured_image)) {
            unlink($property->property_featured_image);
        }
        // Delete gallery images
        foreach ($property->galleryImages as $image) {
            if (file_exists($image->image_path)) {
                unlink($image->image_path);
            }
            $image->delete();
        }
        // Delete brochure file
        if ($property->property_brochure_url && file_exists($property->property_brochure_url)) {
            unlink($property->property_brochure_url);
        }
        return response()->json(['status' => 'success', 'message' => 'Property deleted successfully.']);
    }

    public function toggleStatus(Request $request, $id)
    {
        $property = PropertiesDetails::findOrFail($id);
        $property->is_active = !$property->is_active;
        $property->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Property status updated successfully.',
            'new_status' => $property->is_active ? 'Active' : 'Inactive'
        ]);
    }
}
