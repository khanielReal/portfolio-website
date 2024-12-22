<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Add Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- Link to Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- Navbar Brand (First Item on Left) -->
            <a class="navbar-brand ms-4" href="{{ route('home') }}">
                <i class="fas fa-cogs"></i> It's Haniel.
            </a>

            <!-- Social Media Links (Left Side) -->
            <div class="d-flex ms-auto">
                <a href="https://www.facebook.com/your-profile" target="_blank" class="nav-link social-link">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.linkedin.com/in/haniel-kamau-166218247?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="nav-link social-link">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://x.com/Haniel_real?s=09" target="_blank" class="nav-link social-link">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://wa.me/254741425768?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20services" target="_blank" class="nav-link social-link">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('reviews') ? 'active' : '' }}" href="{{ route('reviews') }}">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Content Section -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white py-3">
        <p>&copy; 2024 Haniel Kamau. All rights reserved.</p>
    </footer>

    <!-- Add Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
    AOS.init(); // Initialize AOS
    </script>

</body>
</html>
