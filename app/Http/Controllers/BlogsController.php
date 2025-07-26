<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\PropertiesDetails;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    public function index()
    {
        // Fetch all blogs with their associated user
        $blogs = Blogs::where('is_active', 1)->with('user')->get();
        return view('Pages.blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blogs::where('slug', $slug)->firstOrFail();
        $projectOfTheDay = PropertiesDetails::where('is_active', 1)->inRandomOrder()->take(5)->get();
        $exploreOurBlog = Blogs::where('is_active', 1)->inRandomOrder()->take(5)->get();
        $similarBlogs = Blogs::where('is_active', 1)->where('id', '!=', $blog->id)->inRandomOrder()->take(3)->get();

        return view('Pages.single-blog', compact('blog', 'projectOfTheDay', 'exploreOurBlog', 'similarBlogs'));
    }

    public function create()
    {
        return view('Dashboard.Blog.new-blog');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string',
            'content' => 'required|string',
            'summary' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'user_id' => 'nullable|exists:users,id', // Assuming you have a users table
        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['title']));


        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = uniqid() .  '.' . $image->getClientOriginalExtension();
            $image->move('uploads/BlogImages', $filename);
            $validated['featured_image'] = 'uploads/BlogImages/' . $filename;
        } else {
            $validated['featured_image'] = null; // Set to null if no file is uploaded
        }

        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $filename = uniqid() .  '.' . $image->getClientOriginalExtension();
            $image->move('uploads/BlogImages', $filename);
            $validated['banner_image'] = 'uploads/BlogImages/' . $filename;
        } else {
            $validated['banner_image'] = null; // Set to null if no file is uploaded
        }

        $validated['user_id'] = Auth::user()->id; // Set the user_id to the currently authenticated user

        // Create the blog post
        $blog = Blogs::create($validated);

        if ($blog) {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog post created successfully.',
                'data' => $blog,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create blog post.',
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $blog = Blogs::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'content' => 'required|string',
            'summary' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'user_id' => 'nullable|exists:users,id', // Assuming you have a users table
        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['title']));


        if ($request->hasFile('featured_image')) {
            // Delete the old featured image if it exists
            if ($blog->featured_image && file_exists($blog->featured_image)) {
                unlink($blog->featured_image);
            }

            $image = $request->file('featured_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/BlogImages', $filename);
            $validated['featured_image'] = 'uploads/BlogImages/' . $filename;
        } else {
            // Keep the old featured image if no new file is uploaded
            $validated['featured_image'] = $blog->featured_image;
        }

        if ($request->hasFile('banner_image')) {
            // Delete the old banner image if it exists
            if ($blog->banner_image && file_exists($blog->banner_image)) {
                unlink($blog->banner_image);
            }

            $image = $request->file('banner_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/BlogImages', $filename);
            $validated['banner_image'] = 'uploads/BlogImages/' . $filename;
        } else {
            // Keep the old banner image if no new file is uploaded
            $validated['banner_image'] = $blog->banner_image;
        }

        $validated['user_id'] = Auth::user()->id;

        // Update the blog post
        $blog = $blog->update($validated);

        if ($blog) {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog post updated successfully.',
                'data' => $blog,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update blog post.',
            ], 500);
        }
    }

    public function blogList()
    {
        $blogs = Blogs::with('user')->get();
        return view('Dashboard.Blog.blog-list', compact('blogs'));
    }

    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);

        return view('Dashboard.Blog.edit-blog', compact('blog'));
    }

    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        if ($blog->featured_image && file_exists($blog->featured_image)) {
            unlink($blog->featured_image);
        }
        $blog->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog post deleted successfully.',
        ]);
    }

    public function toggleStatus($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->is_active = !$blog->is_active;
        $blog->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog post status updated successfully.',
            'data' => $blog,
        ]);
    }
}
