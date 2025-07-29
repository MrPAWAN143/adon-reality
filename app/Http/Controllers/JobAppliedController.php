<?php

namespace App\Http\Controllers;

use App\Models\JobApplied;
use Illuminate\Http\Request;

class JobAppliedController extends Controller
{
    public function store(Request $request)
    {
        // Validate and process the job application data
        $validated = $request->validate([
            'applicant_name' => 'required|string|max:255',
            'applicant_email' => 'required|email|max:255',
            'applicant_phone' => 'nullable|string|max:20',
            'job_title' => 'required|string|max:255',
            'cover_letter' => 'nullable|string',
        ]);
        if ($request->hasFile('resume')) {
            $validated['resume'] = $request->file('resume')->store('resumes', 'public');
        } else {
            $validated['resume'] = null;
        }

        JobApplied::create($validated);

        return response()->json(['success' => "Job application submitted successfully."], 200);
    }
}
