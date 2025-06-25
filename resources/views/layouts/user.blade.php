<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Guidance Office Services')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/main.css')
    @yield('styles')
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-school"></i>
                Guidance Office
            </a>
            <ul class="navbar-nav">
                <li><a class="nav-link" href="{{ route('user.hotline') }}">
                    <i class="fas fa-phone-alt"></i>Emergency Hotlines
                </a></li>
                <li><a class="nav-link" href="{{ route('user.services') }}">
                    <i class="fas fa-concierge-bell"></i>Services
                </a></li>
                <li><a class="nav-link" href="{{ route('user.freedomwall.add') }}">
                    <i class="fas fa-heart"></i>e-Hayag
                </a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" class="nav-link" style="background: none; border: none; cursor: pointer;">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="mb-3">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2025 Guidance Office Services. All rights reserved.</p>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>