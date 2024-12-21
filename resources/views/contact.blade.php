@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container text-center my-5">
        <h1 class="display-4">Contact Me</h1>
        <p class="lead">Feel free to get in touch with me!</p>

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <form action="{{ url('/contact') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
