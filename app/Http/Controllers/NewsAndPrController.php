<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAndPrController extends Controller
{
    public function index()
    {
        return view('Pages.news-and-pr');
    }

    public function create()
    {
        return view('Dashboard.NewsAndPr.new-news');
    }

    public function newsList()
    {
        return view('Dashboard.NewsAndPr.news-list');
    }

    public function edit()
    {
        return view('Dashboard.NewsAndPr.edit-news');
    }
}
