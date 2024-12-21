<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Display all reviews
    public function index()
    {
        $reviews = Review::all();
        return view('reviews', compact('reviews'));
    }

    // Store a new review
    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Create the review
        Review::create($request->all());

        // Redirect with success message
        return redirect()->route('reviews')->with('success', 'Review submitted successfully!');
    }

}