<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Content Management</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('heroes.index') }}">Heroes</a></li>
                <li><a href="{{ route('services.index') }}">Services</a></li>
                <li><a href="{{ route('footers.index') }}">Footers</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
