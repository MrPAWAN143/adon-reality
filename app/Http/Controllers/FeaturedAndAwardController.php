<?php

namespace App\Http\Controllers;

use App\Models\FeaturedAndAward;
use Illuminate\Http\Request;

class FeaturedAndAwardController extends Controller
{
    public function index()
    {
        $awards = FeaturedAndAward::where('is_active', 1)->get();
        return view('Pages.awards-and-recognitions', compact('awards'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'nullable|string|max:255',
            'year' => 'nullable|integer|between:1900,' . date('Y'),
        ]);

        $query = FeaturedAndAward::where('is_active', 1);

        if ($request->filled('search')) {
            $search = '%' . $request->search . '%';
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', $search)
                    ->orWhere('short_description', 'like', $search);
            });
        }

        if ($request->filled('year')) {
            $query->where('year', $request->year);
        }

        $awards = $query->orderBy('created_at', 'desc')->get();
        $html = view('Pages.projects.filter-award', compact('awards'))->render();
        return response()->json(['html' => $html]);
    }

    
    public function createAwards()
    {
        return view('Dashboard.Award.new-awards');
    }

    public function awardsList()
    {
        $awards = FeaturedAndAward::all();
        return view('Dashboard.Award.award-list', compact('awards'));
    }
    public function store(Request $request)
    {
        $request->merge([
            'is_featured' => $request->boolean('is_featured') ? 1 : 0,
        ]);

        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:event_and_media,title',
            'by' => 'nullable|string|max:255',
            'year' => 'required|integer|between:1900,' . date('Y'),
            'short_description' => 'nullable',
            'is_featured' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/FeaturedAndAward', $filename);
            $validated['featured_image'] = 'uploads/FeaturedAndAward/' . $filename;
        } else {
            $validated['featured_image'] = null; // Set to null if no file is uploaded
        }


        $eventMedia = FeaturedAndAward::create([
            'title' => $validated['title'],
            'year' => $validated['year'],
            'by' => $validated['by'],
            'short_description' => $validated['short_description'],
            'is_featured' => $validated['is_featured'] ?? false,
            'featured_image' => $validated['featured_image'],
            'is_active' => true, // Default to active
        ]);

        if ($eventMedia) {
            return response()->json([
                'status' => "success",
                'message' => 'Event created successfully.',
                'data' => $eventMedia
            ]);
        } else {
            return response()->json([
                'status' => "error",
                'message' => 'Event creation failed.',

            ]);
        }
    }

    public function update(Request $request, $id)
    {
       $award = FeaturedAndAward::findOrFail($id);

        $request->merge([
            'is_featured' => $request->boolean('is_featured') ? 1 : 0,
        ]);

        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:event_and_media,title,' . $award->id,
            'by' => 'nullable|string|max:255',
            'year' => 'required|integer|between:1900,' . date('Y'),
            'short_description' => 'nullable|string|max:255',
            'is_featured' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            // Delete the old featured image if it exists
            if ($award->featured_image && file_exists($award->featured_image)) {
                unlink($award->featured_image);
            }

            $image = $request->file('featured_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/FeaturedAndAward', $filename);
            $validated['featured_image'] = 'uploads/FeaturedAndAward/' . $filename;
        } else {
            // Keep the old featured image if no new file is uploaded
            $validated['featured_image'] = $award->featured_image;
        }


        $award = $award->update([
            'title' => $validated['title'],
            'by' => $validated['by'],
            'year' => $validated['year'],
            'short_description' => $validated['short_description'],
            'is_featured' => $validated['is_featured'] ?? false,
            'featured_image' => $validated['featured_image'],
        ]);

        if ($award) {
            return response()->json([
                'status' => "success",
                'message' => 'Award and Recognition updated successfully.',
                'data' => $award
            ]);
        } else {
            return response()->json([
                'status' => "error",
                'message' => 'Award and Recognition update failed.',
            ]);
        }
    }

    public function destroy($id)
    {
        $award = FeaturedAndAward::findOrFail($id);
        $award->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Award deleted successfully.',
        ]);
    }

    public function toggleStatus($id)
    {
        $award = FeaturedAndAward::findOrFail($id);
        $award->is_active = !$award->is_active;
        $award->save();

        return response()->json([
            'status' => "success",
            'message' => 'Award status updated successfully.',
            'data' => $award
        ]);
    }

    public function toggleFeatured($id)
    {
        $award = FeaturedAndAward::findOrFail($id);
        $award->is_featured = !$award->is_featured;
        $award->save();

        return response()->json([
            'status' => "success",
            'message' => 'Award featured status updated successfully.',
            'data' => $award
        ]);
    }

    public function editAwards($id)
    {
        $award = FeaturedAndAward::findOrFail($id);
        return view('Dashboard.Award.edit-award', compact('award'));
    }
}
