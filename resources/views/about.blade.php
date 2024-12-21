@extends('layout')

@section('title', 'About Me')

@section('content')
    <div class="container text-center my-5">
        <h1 class="display-4">About Me</h1>
        <p class="lead">Hi, I'm Haniel Kamau, a passionate web developer, software developer, and designer.</p>

        <img src="{{ asset('images/profile.JPG') }}" alt="Profile Picture" class="rounded-circle" width="200">
        <div class="mt-4">
            <h3>Skills</h3>
            <p>I specialize in:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Web Development (PHP, Laravel, JavaScript, HTML, CSS)</li>
                <li class="list-group-item">Software Development</li>
                <li class="list-group-item">Web Design</li>
                <li class="list-group-item">Data Analytics</li>
            </ul>
        </div>

        <div class="mt-4">
            <h3>Connect with Me</h3>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="https://github.com/your-github" class="btn btn-dark" target="_blank">GitHub</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://linkedin.com/in/your-linkedin" class="btn btn-primary" target="_blank">LinkedIn</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://twitter.com/your-twitter" class="btn btn-info" target="_blank">Twitter</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://discord.com/users/your-discord" class="btn btn-secondary" target="_blank">Discord</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
