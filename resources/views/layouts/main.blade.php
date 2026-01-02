<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nozulu and Ngonyama Trading Enterprises</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Sticky Navbar Styles */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #1e3a8a;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            color: #ef4444;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar-item {
            position: relative;
        }

        .navbar-link {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            display: block;
            transition: color 0.3s;
        }

        .navbar-link:hover {
            color: #ef4444;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #1e40af;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item {
            padding: 0.75rem 1rem;
        }

        .dropdown-item a {
            color: white;
            text-decoration: none;
            display: block;
        }

        .dropdown-item:hover {
            background-color: #2563eb;
        }

        /* Mobile Menu Toggle */
        .mobile-menu-button {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 100%;
                left: 0;
                background-color: #1e3a8a;
                padding: 1rem 0;
            }

            .navbar-menu.active {
                display: flex;
            }

            .mobile-menu-button {
                display: block;
            }

            .navbar-container {
                flex-wrap: wrap;
            }

            .dropdown-menu {
                position: static;
                display: none;
                box-shadow: none;
            }

            .dropdown.active .dropdown-menu {
                display: block;
            }
        }

        /* General Styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            color: #fca5a5;
        }

        footer {
            background-color: #1e3a8a;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }
    </style>
</head>
<body>
    <!-- Sticky Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ route('home') }}" class="navbar-brand">Nozulu & Ngonyama</a>
            
            <button class="mobile-menu-button" onclick="toggleMobileMenu()">
                ☰
            </button>

            <ul class="navbar-menu" id="navbarMenu">
                <li class="navbar-item">
                    <a href="{{ route('home') }}" class="navbar-link">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('about') }}" class="navbar-link">About Us</a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('contact') }}" class="navbar-link">Contact Us</a>
                </li>
                <li class="navbar-item dropdown">
                    <a href="#" class="navbar-link">Gallery ▼</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="{{ route('gallery', 'electrical') }}">Electrical Works</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('gallery', 'construction') }}">Construction Works</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Nozulu and Ngonyama Trading Enterprises. All rights reserved.</p>
        <p>Building and Electrical Construction Specialists</p>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('navbarMenu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
