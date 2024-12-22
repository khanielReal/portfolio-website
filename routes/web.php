<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Models\Project;
use App\Models\Review;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Portfolio Page
Route::get('/portfolio', function () {
    $projects = Project::with('reviews')->get(); // Fetch projects with reviews
    return view('portfolio', compact('projects'));
})->name('portfolio');

// Reviews Page
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Handle Contact Form Submission
Route::post('/contact', [ContactController::class, 'send']);

// Route to handle review submission (for specific project)
Route::post('/submit-review/{project}', function ($projectId) {
    $project = Project::find($projectId);
    if ($project) {
        $review = new Review();
        $review->name = request('name');
        $review->review = request('review');
        $review->rating = request('rating');
        $review->project_id = $project->id; // Assuming a foreign key 'project_id' exists
        $review->save();

        return redirect()->route('portfolio')->with('success', 'Your review has been submitted!');
    }

    return redirect()->route('portfolio')->with('error', 'Project not found.');
})->name('submit.review');

// Route for general reviews (not associated with any specific project)
Route::post('/submit-general-review', function () {
    $review = new \App\Models\Review();
    $review->name = request('name');
    $review->review = request('review');
    $review->rating = request('rating');
    $review->save();

    return redirect()->route('portfolio')->with('success', 'Your general review has been submitted!');
})->name('submit.general.review');
