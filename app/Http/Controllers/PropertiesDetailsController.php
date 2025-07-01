<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesDetailsController extends Controller
{


      public function index()
    {
        return view('Pages.properties-page');
    }

    public function show()
    {
        return view('Pages.project-each' );
    }
    
     public function verifiedProperties()
    {
        return view('Pages.verified-properties');
    }

    public function whyInvestWithUs()
    {
        return view('Pages.why-invest-with-us');
    }

    public function create()
    {
        return view('Dashboard.Projects.add');
    }

    public function projectList()
    {
        return view('Dashboard.Projects.list');
    }

    public function edit()
    {
        return view('Dashboard.Projects.edit');
    }

   
}
