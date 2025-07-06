<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $leads = Lead::count();
        $newLeads = Lead::where('is_new', true)->count();
        return view('Dashboard.dashboard', compact('leads', 'newLeads'));
    }

    
}
