<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesCategoryController extends Controller
{
    public function create()
    {
        return view('Dashboard.Projects.add-category');
    }

    public function categoryList()
    {
        return view('Dashboard.Projects.category-list');
    }

    public function edit()
    {
        return view('Dashboard.Projects.edit-category');
    }
}
