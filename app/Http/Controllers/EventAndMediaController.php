<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventAndMediaController extends Controller
{
    public function index()
    {
        return view('Pages.event-and-media');
    }
    public function create()
    {
        return view('Dashboard.EventAndMedia.new-event');
    }

    public function eventList()
    {
        return view('Dashboard.EventAndMedia.list-event');
    }

    public function edit()
    {
        return view('Dashboard.EventAndMedia.edit-event');
    }
}
