<?php

namespace App\Http\Controllers;

use App\Models\JobApplied;
use Illuminate\Http\Request;

class JobAppliedController extends Controller
{
    public function index()
    {
        $appliedJobs = JobApplied::orderBy('created_at', 'desc')->get();
        return view('Dashboard.Jobs.applied-job', compact('appliedJobs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'applicant_name' => 'required|string|max:255',
            'applicant_email' => 'required|email|max:255',
            'applicant_phone' => 'nullable|string|max:20',
            'job_title' => 'required|string|max:255',
            'cover_letter' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:5000', // Limit to 5MB
            'status' => 'nullable|string|in:pending,accepted,rejected',
        ]);

        // Handle file upload
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = uniqid() . '_resume.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/Resumes');

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $file->move($path, $filename);
            $validated['resume'] = 'uploads/Resumes/' . $filename; // Save relative path
        } else {
            $validated['resume'] = null;
        }

        $validated['status'] = $validated['status'] ?? 'pending'; // Default to 'pending'

        JobApplied::create($validated);

        return response()->json(['success' => "Job application submitted successfully."], 200);
    }
}
