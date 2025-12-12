<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gymstagram @yield('titulo')</title>
    @vite(['resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-3xl md:text-3xl font-black">
                Gymstagram
            </h1>
            <nav class="flex gap-4 items-center">
                <a href="/login" class="font-bold uppercase text-gray-600 text-sm">Login</a>
                <a href="/crear" class="font-bold uppercase text-gray-600 text-sm">Crea cuenta</a>
            </nav>
        </div>
    </header>

    <main class="max-w-4xl mx-auto mt-10 px-6">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>

        @yield('contenido')
    </main>

    <footer class="mt-20">
        <div class="max-w-4xl mx-auto text-center p-5 text-gray-500 font-bold uppercase">
            Gymstagram - Todos los derechos reservados {{ now()->year }}
        </div>
    </footer>
</body>
</html>