<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Tambahkan CSS dan JavaScript yang dibutuhkan di sini -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/status-check.js') }}"></script>
</head>
<body>
    <header>
        <nav>
            <img src="{{ asset('images/logoyarsi.png') }}" alt="Layar Logo" class="logo-nav">
            
        </nav>
    </header>
    @yield('content')
</body>
</html>
