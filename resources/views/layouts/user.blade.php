<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NU Laguna Center for Guidance Services')</title>
    @vite('resources/css/main.css')
    @yield('styles')
</head>
<body class="@yield('body-class')">
    <header class="header">
        <div class="header-container">
            <div class="logo-section">
                <div class="logo">NU</div>
                <div class="logo-text">
                    NU LAGUNA<br>
                    CENTER FOR<br>
                    GUIDANCE SERVICES
                </div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('user.hotline') }}" class="nav-link {{ request()->routeIs('user.hotline') ? 'active' : '' }}">Hotlines</a></li>
                    <li><a href="{{ route('user.services') }}" class="nav-link {{ request()->routeIs('user.services*') ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('user.freedomwall.add') }}" class="nav-link {{ request()->routeIs('user.freedomwall*') ? 'active' : '' }}">e-Hayag</a></li>
                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <button type="submit" class="nav-link" style="background: none; border: none; cursor: pointer;">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-section">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <div class="logo">NU</div>
                        <div>
                            <h3>NU LAGUNA<br>CENTER FOR<br>GUIDANCE SERVICES</h3>
                        </div>
                    </div>
                    <p>Our platform connects students to counseling services, professional support, and online consultations—all in one place.</p>
                    <p><strong>Every step forward is progress. Every conversation matters. You're not alone on this journey.</strong></p>
                    <div class="social-links">
                        <a href="#" class="social-link">f</a>
                        <a href="#" class="social-link">@</a>
                        <a href="#" class="social-link">in</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('user.hotline') }}">Hotlines</a>
                    <a href="{{ route('user.services') }}">Services</a>
                    <a href="{{ route('user.freedomwall.add') }}">e-Hayag</a>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>📍 National Highway, Laguna</p>
                    <p>📞 (02) 1234-5678</p>
                    <p>✉️ cgs@nu-laguna.edu.ph</p>
                </div>
                <div class="footer-section">
                    <h3>Hours</h3>
                    <p>Monday - Friday: 8AM - 5PM</p>
                    <p>Saturday: 9AM - 3PM</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Guidance Office Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
