<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('Pages.blog');
    }

    public function show($id)
    {
        return view('Pages.single-blog', ['id' => $id]);
    }

    public function create()
    {
        return view('Dashboard.Blog.new-blog');
    }

    public function blogList()
    {
        return view('Dashboard.Blog.blog-list');
    }

    public function edit()
    {
        return view('Dashboard.Blog.edit-blog');
    }
}
