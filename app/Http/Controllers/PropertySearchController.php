<?php

namespace App\Http\Controllers;

use App\Models\PropertiesDetails;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertySearchController extends Controller
{
    public function suggestions(Request $request)
    {
        $query = $request->input('query');
        $city = $request->input('city');

        $results = PropertiesDetails::query()
            ->select('id', 'property_name', 'property_city', 'property_expected_roi', 'property_price' , 'property_slug')
            ->when($query, fn($q) => $q->where('property_name', 'like', "%{$query}%"))
            ->when($city, fn($q) => $q->where('property_city', $city))
            ->where('is_active', 1)
            ->limit(10)
            ->get();

        return response()->json($results);
    }
}

