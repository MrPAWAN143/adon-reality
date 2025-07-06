<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PropertiesGalleryImages;
use Illuminate\Http\JsonResponse;

class PropertiesGalleryImagesController extends Controller
{
    public function destroy(PropertiesGalleryImages $image): JsonResponse
    {
        $property = $image->property;             // assuming you have belongsTo()

        // 1. Delete physical file
        Storage::disk('public')->delete($image->image_path);

        // 2. Remove from JSON array on properties table (if you keep one)
        if ($property && is_array($property->property_gallery)) {
            $property->property_gallery = array_values(
                array_filter(
                    $property->property_gallery,
                    fn($path) => $path !== $image->image_path
                )
            );
            $property->save();
        }
        $image->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Image deleted',
            'id'      => $image->id,
        ]);
    }
}
