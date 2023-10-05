<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- Tambahkan CSS dan JavaScript yang dibutuhkan di sini -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <script src="{{ asset('js/status-check.js') }}"></script>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('images/logoyarsi.png') }}" alt="Layar Logo" class="logo-nav">
            <button class="btncheck">check server</button>

            
        </nav>
    </header>
    @yield('content')
</body>

</html>
