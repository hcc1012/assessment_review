<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Assessment; // Make sure to import the Assessment model

class AssessmentController extends Controller
{
    public function showForm()
    {
        return view('admin.assessment_information');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'assessment_type' => 'required|in:quiz,exam,group assessment,individual assessment',
            'weighting' => 'required|integer',
            'assessment_deliverable' => 'required|in:presentation,coding assignment,essay',
            'other_deliverables' => 'nullable|string',
            'issue_date' => 'required|date',
            'submission_date' => 'required|date',
            'date_submitted_for_moderation' => 'required|date',
            'date_moderated' => 'required|date',
            'date_form_received' => 'required|date',
        ]);

        // Create a new assessment record
        Assessment::create($request->all());

        // Redirect with a success message
        return redirect()->route('admin.assessment_information.showForm')
            ->with('success', 'Assessment information submitted successfully');
    }
}