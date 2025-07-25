<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Lead;
use App\Models\LeadComment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class QueryController extends Controller
{
    public function index()
    {
        $leads = Lead::with('comments', 'user')->orderBy('created_at', 'desc')->get();
        return view('Dashboard.Lead.lead', compact('leads'));
    }

    public function showLeadDetails(Request $request, $id)
    {
        
        $lead = Lead::with('comments', 'user')->findOrFail($id);
        return view('Dashboard.Lead.details', compact('lead'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        if (empty($validated['first_name'])) {
            return response()->json([
                'error' => 'First name is required.'
            ], 422);
        }
        if (empty($validated['email'])) {
            return response()->json([
                'error' => 'Email is required.'
            ], 422);
        }
        if (empty($validated['phone']) || !preg_match('/^\+?[0-9]{10,15}$/', $validated['phone']) || strlen($validated['phone']) < 13) {
            return response()->json([
                'error' => 'Phone number is required and must be valid.'
            ], 422);
        }

        $validated = Lead::create([
            'name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'] ?? null,
            'is_new' => true, // Default status for new leads
            'is_read' => false, // Default status for unread leads
        ]);
        // Create a new lead

        if (! $validated) {
            return response()->json([
                'status' => 'error',
                'message' => 'Oops! We couldn’t save your details. Please try again.',
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! We’ve received your request. Our team will call you soon.',
        ], 200);
    }




    public function destroy($id)
    {
        // Delete the lead from the database
        $lead = Lead::findOrFail($id);
        $lead->delete();

        // Redirect back to the leads list with a success message
        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }

    public function storeMessage(Request $request, Lead $lead)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:1000',
            'date' => 'nullable|date_format:Y-m-d\TH:i',
        ]);

        $lead_id = $lead->id; // Get the lead ID from the route

        $leadComment = new LeadComment();
        $leadComment->lead_id  = $lead_id;
        $leadComment->message = $validated['message'];
        $leadComment->author_id = Auth::user()->id;
        $leadComment->next_update = $validated['date']
            ? Carbon::createFromFormat('Y-m-d\TH:i', $validated['date'])
            : null;
        $leadComment->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully.',
            'comment' => $leadComment->message,
            'author'  => $leadComment->author_id,
        ]);
    }

    public function toggleRead(Lead $lead)
    {
        $lead->is_read = ! $lead->is_read;       // flip
        $lead->is_new = false;                    // once read, no longer “new”
        $lead->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Lead status updated successfully.',
            'is_read' => $lead->is_read
        ]);
    }



    public function additionalEnquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        if (empty($validated['name'])) {
            return response()->json([
                'error' => 'Name is required.'
            ], 422);
        }
        if (empty($validated['email'])) {
            return response()->json([
                'error' => 'Email is required.'
            ], 422);
        }
        if (empty($validated['phone']) || !preg_match('/^\+?[0-9]{10,15}$/', $validated['phone']) || strlen($validated['phone']) < 13) {
            return response()->json([
                'error' => 'Phone number is required and must be valid.'
            ], 422);
        }

        Lead::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'] ?? null,
            'is_new' => true,
            'is_read' => false,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! We’ve received your request. Our team will call you soon.',
        ], 200);
    }
}
