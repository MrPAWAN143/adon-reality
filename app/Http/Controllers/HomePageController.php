<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\PropertiesDetails;
use App\Models\DevelopmentPartners;

class HomePageController extends Controller
{
    public function index($slug = null)
    {
        $developmentPartner = DevelopmentPartners::limit(3)->orderBy('created_at', 'asc')->get();
        $properties = PropertiesDetails::with(['category', 'developmentPartner'])->where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
          $blogs = Blogs::where('is_active', 1)->limit(3)->orderBy('created_at', 'desc')->get();
        return view('Pages.homepage', compact('developmentPartner', 'properties', 'blogs'));
    }

 
   
}
