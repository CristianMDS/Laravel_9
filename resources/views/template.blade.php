<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center px-4">
            <div class="flex flex-grow items-center gap-4 my-2">
                <a href="{{ route('home') }}">
                    <img src="{{asset('images/logo.png')}}" alt="logo" class="h-12">
                </a>
                <form action="">
                    <input 
                        type="text" 
                        name="buscar" 
                        id="buscar" 
                        placeholder="buscar..." 
                        class="rounded-full border-indigo-800 px-2 w-max" />
                </form>
            </div>

            @auth
                <a href="{{ route('dashboard') }}"> Dashboard </a>
            @else
                <a href="{{ route('login') }}"> Login </a>
            @endauth

        </header>
        @yield('content')
    </div>
</body>
</html>
