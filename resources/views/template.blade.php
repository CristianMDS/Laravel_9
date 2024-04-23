<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}"> Home </a>

        @auth
            <a href="{{ route('dashboard') }}"> Dashboard </a>
        @else
            <a href="{{ route('login') }}"> Login </a>
        @endauth
    </nav>

    @yield('content')
</body>
</html>
