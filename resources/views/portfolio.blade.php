@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container my-5">
        <h1 class="display-4 text-center">My Portfolio</h1>
        <p class="lead text-center">Check out my completed and ongoing projects below:</p>

        <!-- Completed Projects Section -->
        <h2>Completed Projects</h2>
        <div class="row">
            @foreach($projects as $project)
                @if($project->status == 'completed')
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ $project->description }}</p>

                                <!-- Display Reviews for Project -->
                                <h6>Reviews:</h6>
                                @if($project->reviews->isEmpty())
                                    <p>No reviews yet.</p>
                                @else
                                    <ul>
                                        @foreach($project->reviews as $review)
                                            <li>
                                                <strong>{{ $review->name }}:</strong>
                                                {{ $review->review }} (Rating: {{ $review->rating }}/5)
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                                <!-- Review Form for Specific Project -->
                                <form action="{{ route('submit.review', $project->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="review">Your Review</label>
                                        <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating (1-5)</label>
                                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Ongoing Projects Section -->
        <h2>Ongoing Projects</h2>
        <div class="row">
            @foreach($projects as $project)
                @if($project->status == 'ongoing')
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ $project->description }}</p>

                                <!-- Display Reviews for Project -->
                                <h6>Reviews:</h6>
                                @if($project->reviews->isEmpty())
                                    <p>No reviews yet.</p>
                                @else
                                    <ul>
                                        @foreach($project->reviews as $review)
                                            <li>
                                                <strong>{{ $review->name }}:</strong>
                                                {{ $review->review }} (Rating: {{ $review->rating }}/5)
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                                <!-- Review Form for Specific Project -->
                                <form action="{{ route('submit.review', $project->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="review">Your Review</label>
                                        <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating (1-5)</label>
                                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- General Reviews Section -->
        <h2>Customer Reviews</h2>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Leave a Review About My Work</h5>

                        <!-- General Review Form -->
                        <form action="{{ route('submit.general.review') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="review">Your Review</label>
                                <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating (1-5)</label>
                                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
