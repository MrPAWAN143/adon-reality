<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\FeaturedAndAward;
use App\Models\PropertiesDetails;
use App\Http\Controllers\Controller;
use App\Models\EventAndMedia;

class DashboardController extends Controller
{
    public function index()
    {
        $leads = Lead::count();
        $newLeads = Lead::where('is_new', true)->count();
        $totalProperties = PropertiesDetails::count();
        $totalBlogPosts = Blogs::count();
        $totalEvents = EventAndMedia::count();
        $totalAwards = FeaturedAndAward::count();

        return view('Dashboard.dashboard', compact('leads', 'newLeads', 'totalProperties', 'totalBlogPosts', 'totalEvents', 'totalAwards'));
    }

}

