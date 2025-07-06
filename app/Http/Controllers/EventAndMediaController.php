<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventAndMedia;

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
        $events = EventAndMedia::all();
        return view('Dashboard.EventAndMedia.list-event', compact('events'));
    }

    public function store(Request $request)
    {

        $request->merge([
            'is_featured' => $request->boolean('is_featured') ? 1 : 0,
        ]);

        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:event_and_media,title',
            'event_date' => 'required|date',
            'media_url' => 'nullable|string|max:255',
            'is_featured' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/EventAndMedia'), $filename);
            $validated['featured_image'] = 'uploads/EventAndMedia/' . $filename;
        } else {
            $validated['featured_image'] = null; // Set to null if no file is uploaded
        }


        $eventMedia = EventAndMedia::create([
            'title' => $validated['title'],
            'event_date' => $validated['event_date'],
            'media_url' => $validated['media_url'],
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
        $event = EventAndMedia::findOrFail($id);

        $request->merge([
            'is_featured' => $request->boolean('is_featured') ? 1 : 0,
        ]);

        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:event_and_media,title,' . $event->id,
            'event_date' => 'required|date',
            'media_url' => 'nullable|string|max:255',
            'is_featured' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            // Delete the old featured image if it exists
            if ($event->featured_image && file_exists(public_path($event->featured_image))) {
                unlink(public_path($event->featured_image));
            }

            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/EventAndMedia'), $filename);
            $validated['featured_image'] = 'uploads/EventAndMedia/' . $filename;
        } else {
            // Keep the old featured image if no new file is uploaded
            $validated['featured_image'] = $event->featured_image;
        }


        $event = $event->update([
            'title' => $validated['title'],
            'event_date' => $validated['event_date'],
            'media_url' => $validated['media_url'],
            'is_featured' => $validated['is_featured'] ?? false,
            'featured_image' => $validated['featured_image'],
        ]);

        if ($event) {
            return response()->json([
                'status' => "success",
                'message' => 'Event updated successfully.',
                'data' => $event
            ]);
        } else {
            return response()->json([
                'status' => "error",
                'message' => 'Event update failed.',
            ]);
        }
    }

    public function edit($id)
    {
        $event = EventAndMedia::findOrFail($id);
        return view('Dashboard.EventAndMedia.edit-event', compact('event'));
    }

    public function destroy($id)
    {
        $event = EventAndMedia::findOrFail($id);

        // Delete the featured image if it exists
        if ($event->featured_image && file_exists(public_path($event->featured_image))) {
            unlink(public_path($event->featured_image));
        }

        if ($event->delete()) {
            return response()->json([
                'status' => "success",
                'message' => 'Event deleted successfully.',
            ]);
        } else {
            return response()->json([
                'status' => "error",
                'message' => 'Event deletion failed.',
            ]);
        }
    }

    public function toggleStatus($id)
    {
        $event = EventAndMedia::findOrFail($id);
        $event->is_active = !$event->is_active; // Toggle the status
        $event->save();

        return response()->json([
            'status' => "success",
            'message' => 'Event status updated successfully.',
            'data' => $event
        ]);
    }

    public function toggleFeatured($id)
    {
        $event = EventAndMedia::findOrFail($id);
        $event->is_featured = !$event->is_featured; // Toggle the featured status
        $event->save();

        return response()->json([
            'status' => "success",
            'message' => 'Event featured status updated successfully.',
            'data' => $event
        ]);
    }


}
