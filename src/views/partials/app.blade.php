<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel SEO Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
        }
        footer {
            background-color: #343a40; /* Dark background */
            color: #ffffff; /* White text */
        }
    </style>
    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('admin.seo.index')}}">Laravel SEO Manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(config('laravel-seo-manager.redirect_url')) }}">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">Developed By <a href="https://khanaldipesh.com.np" target="_blank" class="text-decoration-none">Dipesh Khanal</a>.</p>
</footer>
@stack('scripts')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
