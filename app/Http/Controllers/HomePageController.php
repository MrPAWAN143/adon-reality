<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Testimony;
use Illuminate\Http\Request;
use App\Models\PropertiesDetails;
use App\Models\DevelopmentPartners;

class HomePageController extends Controller
{
    public function index($slug = null)
    {
        $developmentPartner = DevelopmentPartners::where('is_active', 1)->limit(3)->orderBy('created_at', 'asc')->get();
        $properties = PropertiesDetails::where('is_active', 1)->where('property_type', 'Featured')->with(['category', 'developmentPartner'])
            ->orderBy('created_at', 'asc')
            ->limit(3)
            ->get();
        $primeLocation = PropertiesDetails::where('is_active', 1)->where('property_type', 'Prime')->with(['category', 'developmentPartner'])
            ->orderBy('created_at', 'asc')
            ->limit(4)
            ->get();

        // Fetch properties for virtual tours
        $virtualTours = PropertiesDetails::where('is_active', 1)
            ->where('property_type', 'Virtual')
            ->with(['category', 'developmentPartner'])
            ->orderBy('created_at', 'asc')
            ->limit(3)
            ->get();
        $blogs = Blogs::where('is_active', 1)->limit(3)->orderBy('created_at', 'desc')->get();

        $testimonials = Testimony::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.homepage', compact('developmentPartner', 'properties', 'blogs', 'primeLocation', 'virtualTours', 'testimonials'));
    }
}
