<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function showForm()
    {
        return view('admin.review_information');
    }

    public function store(Request $request)
    {
        // Validate the request data for internal review
        $request->validate([
            'int_review1' => 'boolean',
            // Add validation rules for other internal review fields as needed
        ]);

        // Create a new internal review record
        IntReview::create($request->all());

        // Validate the request data for external review
        $request->validate([
            'ext_review1' => 'boolean',
            // Add validation rules for other external review fields as needed
        ]);

        // Create a new external review record
        ExtReview::create($request->all());

        // Redirect with a success message
        return redirect()->route('admin.review.showForm')
            ->with('success', 'Review information submitted successfully');
    }
}