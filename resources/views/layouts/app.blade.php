<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper {
            flex: 1;
            display: flex;
        }

        .sidebar {
            width: 220px;
            background-color: #343a40;
            color: #fff;
            min-height: 100vh;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px 15px;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar .active {
            background-color: #495057;
        }

        .content {
            flex: 1;
            padding: 20px;
            background: #f8f9fa;
        }

        footer {
            background: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .card {
            transition: 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>

    @yield('styles')
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Wrapper: Sidebar + Content --}}
    <div class="wrapper">
        <div class="sidebar">
            <h5 class="p-3">Menu</h5>
            <a href="#" class="active">Dashboard</a>
            <a href="#">Students</a>
            <a href="#">Reports</a>
            <a href="#">Settings</a>
        </div>

        <div class="content">
            <h3>@yield('page-title', 'Dashboard')</h3>
            <hr>
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <footer>
        <p class="mb-0">&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>

</html>