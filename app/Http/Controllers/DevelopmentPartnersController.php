<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopmentPartnersController extends Controller
{
    public function index()
    {
        return view('Pages.developer-partner-page');
    }

    public function show($id)
    {
        return view('Pages.developer-each', compact('id'));
    }

    public function create()
    {
        return view('Dashboard.Developer.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Development partner created successfully',
            'data' => $request->all()
        ]);
    }

    public function developerPartnerList()
    {
        // Logic to retrieve and display the list of development partners
        return view('Dashboard.Developer.list');
    }
    public function edit()
    {
        // Logic to show form for editing an existing development partner
        return view('Dashboard.Developer.edit');
    }
}
