<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedAndAwardController extends Controller
{
    public function index()
    {
        return view('Pages.awards-and-recognitions');
    }
    public function createAwards()
    {
        return view('Dashboard.Award.new-awards');
    }

    public function awardsList()
    {
        return view('Dashboard.Award.award-list');
    }

    public function editAwards()
    {
        return view('Dashboard.Award.edit-award');
    }
}
