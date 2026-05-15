<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Brand Parfum' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #0e0e0e;
            color: white;
        }

        /* ================= NAVBAR ================= */

        nav {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 18px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(255, 215, 0, 0.15);
            box-sizing: border-box;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 35px;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 400;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #d9b24c;
        }

        .logo-img {
            height: 52px;
            width: auto;
            object-fit: contain;
        }

        /* ================= HAMBURGER ================= */

        .menu-toggle {
            display: none;
            font-size: 28px;
            cursor: pointer;
        }

        /* ================= CONTENT OFFSET ================= */

        main {
            padding-top: 90px; /* biar gak ketutup navbar */
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 992px) {
            nav {
                padding: 18px 30px;
            }
        }

        @media (max-width: 768px) {

            nav {
                padding: 15px 20px;
            }

            nav ul {
                position: absolute;
                top: 80px;
                right: 0;
                width: 100%;
                background: #0e0e0e;
                flex-direction: column;
                text-align: center;
                gap: 25px;
                padding: 30px 0;
                display: none;
                border-top: 1px solid rgba(255,215,0,0.1);
            }

            nav ul.active {
                display: flex;
                animation: fadeDown 0.3s ease forwards;
            }

            .menu-toggle {
                display: block;
                color: white;
            }
        }

        /* Smooth dropdown animation */
        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>

    @stack('styles')
</head>

<body>

    <nav>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Vancouver Parfume" class="logo-img">
        </div>

        <div class="menu-toggle" onclick="toggleMenu()">☰</div>

        <ul id="nav-menu">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('product.index') }}">Produk</a></li>
            <li><a href="{{ route('about') }}">Tentang</a></li>
            <li><a href="{{ url('/#contact') }}">Kontak</a></li>
        </ul>
    </nav>

    @yield('content')

    <script>
        function toggleMenu() {
            document.getElementById('nav-menu').classList.toggle('active');
        }
    </script>

    @stack('scripts')
</body>
</html>
