<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Add custom styles here */

        /* Header styles */
        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Navigation styles */
        nav {
            background-color: #e0f2f1;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #4CAF50;
        }

        /* Main content styles */
        main {
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        /* Footer styles */
        footer {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="font-size: 36px;">Afif's Stir Mobil</h1>
        <p style="font-size: 18px;">Welcome to my website</p>
    </header>

    <nav>
        <ul>
            <li><a href="{{ url('/jadwal-belajar') }}">Jadwal Belajar</a></li>
            <li><a href="{{ url('/paket-jasa') }}">Paket Jasa</a></li>
            <li><a href="{{ url('/trainer') }}">Trainer</a></li>
            <li><a href="{{ url('/kendaraan') }}">Kendaraan</a></li>
            <li><a href="{{ url('/lokasi') }}">Lokasi</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Afif's Stir Mobil. All rights reserved.
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
