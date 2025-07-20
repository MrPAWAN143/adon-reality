<?php

namespace App\Http\Controllers;

use App\Models\NewsAndPr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsAndPrController extends Controller
{
    public function index()
    {
        return view('Pages.news-and-pr');
    }

    public function show($slug)
    {
        // $news = NewsAndPr::where('slug', $slug)->firstOrFail();
        

        return view('Pages.single-news');
    }

    public function create()
    {
        return view('Dashboard.NewsAndPr.new-news');
    }

    public function newsList()
    {
        $news = NewsAndPr::with('user')->get();
        return view('Dashboard.NewsAndPr.news-list', compact('news'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'author' => 'nullable|exists:users,id', // Assuming you have a users table
        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['title']));


        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/NewsAndPr', $filename);
            $validated['featured_image'] = 'uploads/NewsAndPr/' . $filename;
        } else {
            $validated['featured_image'] = null; // Set to null if no file is uploaded
        }


        $validated['author'] = Auth::user()->id; // Set the user_id to the currently authenticated user

        // Create the news article
        $news = NewsAndPr::create($validated);

        if ($news) {
            return response()->json([
                'status' => 'success',
                'message' => 'News Article created successfully.',
                'data' => $news,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create news article.',
            ], 500);
        }
    
    }

    public function edit($id)
    {
        $news = NewsAndPr::findOrFail($id);
        return view('Dashboard.NewsAndPr.edit-news', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = NewsAndPr::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['title']));

        if ($request->hasFile('featured_image')) {
            // Delete the old featured image if it exists
            if ($news->featured_image && file_exists($news->featured_image)) {
                unlink($news->featured_image);
            }

            $image = $request->file('featured_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/NewsAndPr', $filename);
            $validated['featured_image'] = 'uploads/NewsAndPr/' . $filename;
        } else {
            // Keep the old featured image if no new file is uploaded
            $validated['featured_image'] = $news->featured_image;
        }

        $validated['user_id'] = Auth::user()->id;

        // Update the news article
        $news = $news->update($validated);

        if ($news) {
            return response()->json([
                'status' => 'success',
                'message' => 'News article updated successfully.',
                'data' => $news,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update news article.',
            ], 500);
        }

       
    }

   public function destroy($id)
    {
        $news = NewsAndPr::findOrFail($id);
        if ($news->featured_image && file_exists($news->featured_image)) {
            unlink($news->featured_image);
        }
        $news->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'News article deleted successfully.',
        ]);
    }

    public function toggleStatus($id)
    {
        $news = NewsAndPr::findOrFail($id);
        $news->is_active = !$news->is_active;
        $news->save();

        return response()->json([
            'status' => 'success',
            'message' => 'News Article status updated successfully.',
            'data' => $news,
        ]);
    }
}
