<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <!-- Decorative Elements -->
        <div class="decorative-element"></div>
        <div class="decorative-element"></div>
        
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('barang') }}">Barang</a>
            <a href="{{ route('admin') }}">Admin</a>
            <a href="{{ route('profile.edit') }}">Profile</a>
        </nav>
        
        <div class="container">
            <div class="content-card fade-in">
                @yield('judul_menu')
            </div>
            
            <div class="content-card fade-in">
                @yield('isi_menu')
            </div>
        </div>
    </body>
</html>