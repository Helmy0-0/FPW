<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS</title>
</head>
<body>
    <header>
        <h1>UTS Page</h1>
        <nav>
            <a href="{{ url('/uts/pemrograman') }}">Menu Pemrograman</a>
            <a href="{{ url('/uts/database') }}">Menu Database</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>UTS FPW Helmy Krisdin Garcia</p>
    </footer>
</body>
</html>