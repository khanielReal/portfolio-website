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
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
