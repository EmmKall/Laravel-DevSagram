<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        @yield('css')

        @yield('js')

    </head>
    <body class="bg-gray-100">
        
        <header class="p-5 bg-white shadow border-b-4 border-b-blue-600">
            <div class="container mx-auto flex justify-between">
                <h1 class="text-3xl font-black">DevStagram</h1>

                <nav class="flex gap-2 items-center">
                    <a href="" class="px-2 py-1 mx-3 font-bold text-gray-600 text-sm uppercase border-b-2 border-gray-400">Login</a>
                    <a href="" class="px-2 py-1 mx-3 font-bold text-gray-600 text-sm uppercase border-b-2 border-gray-400">Registrarse</a>
                </nav>

            </div>

        </header>
        
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-3xl text-center mb-5">@yield('titulo')</h2>
            @yield('content')
        </main>

        <footer>

        </footer>

    </body>
</html>
