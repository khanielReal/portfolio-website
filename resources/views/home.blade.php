@extends('layout')

@section('title', 'Home')

@section('content')
    <!-- Fullscreen Video Background -->
    <section class="hero">
        <div class="video-background">
            <video autoplay muted loop id="background-video">
                <source src="{{ asset('videos/mechanic-background.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="overlay"></div> <!-- Optional overlay for better text visibility -->

        <!-- Content Section over video -->
        <div class="container text-center" style="z-index: 2; position: relative;">
            <h1 class="display-4" data-aos="fade-up">Welcome to My Portfolio</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="500">Let's build something amazing together.</p>
            <a href="{{ route('portfolio') }}" class="btn btn-primary" data-aos="fade-up" data-aos-delay="1000">See My Work</a>
        </div>
    </section>
@endsection
