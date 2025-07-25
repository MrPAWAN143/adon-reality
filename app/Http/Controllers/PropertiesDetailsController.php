<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PropertiesDetails;
use App\Models\PropertiesCategory;
use App\Models\DevelopmentPartners;
use Illuminate\Support\Facades\Auth;

use App\Models\PropertiesGalleryImages;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
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

        $projectOfTheDay = PropertiesDetails::where('is_active', 1)->limit(6)->inRandomOrder()->get();

        $exploreOurBlog = Blogs::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('Pages.project-each', compact('property', 'similarProperties', 'projectOfTheDay', 'exploreOurBlog'));
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
        try {

            $validated = $request->validate([
                'category_id' => 'required|integer',
                'development_partner_id' => 'required|integer',
                'property_name' => 'required|string|max:255',
                'property_slug' => 'nullable|string|max:255|unique:properties_details,property_slug',
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
                'prime_thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'explore_virtual_thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'property_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            ], [
                'property_name.required' => 'The property name is required.',
                'property_slug.unique' => 'The property slug must be unique.',
                'property_status.required' => 'Please select the property status.',
                'property_featured_image.image' => 'The featured image must be a valid image file.',
                'property_brochure_url.mimes' => 'The brochure must be a PDF file.',
                'property_brochure_url.max' => 'The brochure size must not exceed 5MB.',
                // Add more custom messages as needed
            ]);

            // Step 2: Sanitize Slug
            $validated['property_slug'] = Str::slug(strtolower($validated['property_slug'] ?? $validated['property_name']));

            // Step 3: Handle file uploads
            $featuredImagePath = null;
            if ($request->hasFile('property_featured_image')) {
                $image = $request->file('property_featured_image');
                $filename = uniqid() . '_featured.' . $image->getClientOriginalExtension();
                $path = 'uploads/PropertyFeaturedImages';
                if (!file_exists($path)) mkdir($path, 0755, true);
                $image->move($path, $filename);
                $featuredImagePath = $path . '/' . $filename;
            }

            $validated['prime_thumbnail_image'] = $this->uploadImage($request, 'prime_thumbnail_image', 'uploads/PropertyPrimeThumbnails');
            $validated['explore_virtual_thumbnail_image'] = $this->uploadImage($request, 'explore_virtual_thumbnail_image', 'uploads/PropertyExploreThumbnails');
            $validated['property_banner'] = $this->uploadImage($request, 'property_banner', 'uploads/PropertyBanners');

            // Gallery
            $galleryPaths = [];
            if ($request->hasFile('property_gallery')) {
                foreach ($request->file('property_gallery') as $index => $galleryImage) {
                    $filename = uniqid() . '_gallery_' . $index . '.' . $galleryImage->getClientOriginalExtension();
                    $path = 'uploads/PropertyGallery';
                    if (!file_exists($path)) mkdir($path, 0755, true);
                    $galleryImage->move($path, $filename);
                    $galleryPaths[] = $path . '/' . $filename;
                }
            }

            // Brochure
            $brochurePath = null;
            if ($request->hasFile('property_brochure_url')) {
                $file = $request->file('property_brochure_url');
                $filename = uniqid() . '_brochure.' . $file->getClientOriginalExtension();
                $path = 'uploads/PropertyBrochures';
                if (!file_exists($path)) mkdir($path, 0755, true);
                $file->move($path, $filename);
                $brochurePath = $path . '/' . $filename;
            }

            // Step 4: Create property
            $property = PropertiesDetails::create([
                ...$validated,
                'property_slug' => $validated['property_slug'],
                'property_featured_image' => $featuredImagePath,
                'property_brochure_url' => $brochurePath,
                'property_amenities' => json_encode($validated['property_amenities'] ?? []),
                'property_location_advantages' => json_encode($validated['property_location_advantages'] ?? []),
                'unit_type' => json_encode($validated['unit_type'] ?? []),
            ]);

            foreach ($galleryPaths as $path) {
                PropertiesGalleryImages::create([
                    'property_id' => $property->id,
                    'image_path' => $path,
                ]);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Project created successfully',
                'data' => $property
            ]);
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Duplicate entry detected. The slug or unique field must be unique.'
                ], 422);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Database error: ' . $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An unexpected error occurred: ' . $e->getMessage()
            ], 500);
        }
    }

    private function uploadImage($request, $fieldName, $path)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $filename = uniqid() . '_' . $fieldName . '.' . $image->getClientOriginalExtension();
            if (!file_exists($path)) mkdir($path, 0755, true);
            $image->move($path, $filename);
            return $path . '/' . $filename;
        }
        return null;
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
        try {
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
                'property_benefits' => 'nullable|string',
                'property_featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'property_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'property_brochure_url' => 'nullable|file|mimes:pdf|max:5120',
                'prime_thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'explore_virtual_thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'property_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            ]);

            $validated['property_slug'] = Str::slug(strtolower($validated['property_slug'] ?? $validated['property_name']));

            // File Uploads using shared image handler
            foreach (
                [
                    'property_featured_image' => 'uploads/PropertyFeaturedImages',
                    'prime_thumbnail_image' => 'uploads/PropertyPrimeThumbnails',
                    'explore_virtual_thumbnail_image' => 'uploads/PropertyExploreThumbnails',
                    'property_banner' => 'uploads/PropertyBanners',
                ] as $field => $path
            ) {
                if ($request->hasFile($field)) {
                    if ($property->$field && file_exists($property->$field)) {
                        unlink($property->$field);
                    }
                    $image = $request->file($field);
                    $filename = uniqid() . '_' . $field . '.' . $image->getClientOriginalExtension();
                    if (!file_exists($path)) mkdir($path, 0755, true);
                    $image->move($path, $filename);
                    $validated[$field] = $path . '/' . $filename;
                } else {
                    $validated[$field] = $property->$field;
                }
            }

            // Brochure Upload
            if ($request->hasFile('property_brochure_url')) {
                if ($property->property_brochure_url && file_exists($property->property_brochure_url)) {
                    unlink($property->property_brochure_url);
                }
                $file = $request->file('property_brochure_url');
                $filename = uniqid() . '_brochure.' . $file->getClientOriginalExtension();
                $path = 'uploads/PropertyBrochures';
                if (!file_exists($path)) mkdir($path, 0755, true);
                $file->move($path, $filename);
                $validated['property_brochure_url'] = $path . '/' . $filename;
            } else {
                $validated['property_brochure_url'] = $property->property_brochure_url;
            }

            // Gallery Uploads
            $galleryPaths = [];
            if ($request->hasFile('property_gallery')) {
                foreach ($request->file('property_gallery') as $index => $galleryImage) {
                    $filename = uniqid() . '_gallery_' . $index . '.' . $galleryImage->getClientOriginalExtension();
                    $path = 'uploads/PropertyGallery';
                    if (!file_exists($path)) mkdir($path, 0755, true);
                    $galleryImage->move($path, $filename);
                    $galleryPaths[] = $path . '/' . $filename;
                }
            }

            $property->update([
                ...$validated,
                'property_amenities' => json_encode($validated['property_amenities'] ?? []),
                'property_location_advantages' => json_encode($validated['property_location_advantages'] ?? []),
                'unit_type' => json_encode($validated['unit_type'] ?? []),
            ]);

            foreach ($galleryPaths as $path) {
                PropertiesGalleryImages::create([
                    'property_id' => $property->id,
                    'image_path' => $path,
                ]);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Project updated successfully',
                'data' => $property
            ]);
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Duplicate entry detected. The slug or unique field must be unique.'
                ], 422);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Database error: ' . $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An unexpected error occurred: ' . $e->getMessage()
            ], 500);
        }
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
