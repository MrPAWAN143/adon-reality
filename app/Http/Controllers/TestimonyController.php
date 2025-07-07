<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    public function createTestimony()
    {
        return view('Dashboard.Testimony.new-testimony');
    }

    public function testimonyList()
    {
        $testimonies = Testimony::all();
        return view('Dashboard.Testimony.testimony-list', compact('testimonies'));
    }

    public function editTestimony($id)
    {
        // Logic to retrieve and return the specific testimony for editing
        $testimony = Testimony::findOrFail($id);
        return view('Dashboard.Testimony.edit-testimony', compact('testimony'));
    }



    public function storeTestimony(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'review_text' => 'nullable|string|max:500',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/Testimony', $filename);
            $validated['profile_image'] = 'uploads/Testimony/' . $filename;
        }

        $testimony = Testimony::create([
            'name' => $validated['name'],
            'role' => $validated['role'] ?? null,
            'review_text' => $validated['review_text'] ?? null,
            'photo' => $validated['profile_image'] ?? null, // Use the updated profile_image path if available
            'is_active' => true, // Default to active
            'is_verified' => true, // Default to verified
            'is_featured' => false, // Default to not featured
        ]);

        if ($testimony) {
            return response()->json([
                'status' => 'success',
                'message' => 'Testimony created successfully.',
                'data' => $testimony,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create testimony.',
            ], 500);
        }
    }

    public function updateTestimony(Request $request, $id)
    {
        $testimony = Testimony::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'review_text' => 'nullable|string|max:500',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);


        if ($request->hasFile('profile_image')) {
            // Delete the old photo if it exists
            if ($testimony->photo && file_exists($testimony->photo)) {
                unlink($testimony->photo);
            }

            $image = $request->file('profile_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/Testimony', $filename);
            $validated['profile_image'] = 'uploads/Testimony/' . $filename;
        } else {
            // Keep the old photo if no new file is uploaded
            $validated['profile_image'] = $testimony->photo;
        }

        $testimony = $testimony->update([
            'name' => $validated['name'],
            'role' => $validated['role'] ?? null,
            'review_text' => $validated['review_text'] ?? null,
            'photo' => $validated['profile_image'] ?? null, // Use the updated photo path if available
            'is_active' => true, // Default to active
            'is_verified' => true, // Default to verified
            'is_featured' => false, // Default to not featured
        ]);

        if ($testimony) {
            return response()->json([
                'status' => 'success',
                'message' => 'Testimony updated successfully.',
                'data' => $testimony,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update testimony.',
            ], 500);
        }
    }

    public function destroyTestimony($id)
    {
        $testimony = Testimony::findOrFail($id);
        if ($testimony->photo && file_exists($testimony->photo)) {
            unlink($testimony->photo);
        }
        $testimony->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Testimony deleted successfully.',
        ]);
    }

    public function toggleTestimonyStatus($id)
    {
        // Logic to toggle the status of a testimony
        return response()->json(['message' => 'Testimony status toggled successfully']);
    }
}
