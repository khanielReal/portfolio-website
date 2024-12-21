<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Models\Project;

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
    $projects = Project::all();  // Fetch all projects from the database
    return view('portfolio', compact('projects')); // Pass the projects to the view
})->name('portfolio');

// Reviews Page
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Handle Contact Form Submission
Route::post('/contact', [ContactController::class, 'send']);

// Route to handle review submission
Route::post('/reviews', [ReviewController::class, 'store']);
