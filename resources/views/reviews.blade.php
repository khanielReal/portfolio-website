@extends('layout')

@section('title', 'Reviews')

@section('content')
    <div class="container text-center my-5">
        <h1 class="display-4">Customer Reviews</h1>
        <p class="lead">Here are some reviews from my clients:</p>

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Review Submission Form -->
        <form action="{{ url('/reviews') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Your Review</label>
                <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating (1 to 5)</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>

        <hr>

        <!-- Display Reviews -->
        @foreach($reviews as $review)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $review->name }}</h5>
                    <p class="card-text">{{ $review->review }}</p>
                    <p class="card-text">
                        <strong>Rating:</strong>
                        @for($i = 1; $i <= 5; $i++)
                            <span class="fa fa-star{{ $i <= $review->rating ? ' checked' : '' }}"></span>
                        @endfor
                    </p>
                </div>
            </div>
        @endforeach

    </div>
@endsection
