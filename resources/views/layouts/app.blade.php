<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shunya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cover bg-center bg-no-repeat min-h-screen flex flex-col text-gray-800 overflow-x-hidden" style="background-image: url('{{ asset('images/bg5.png') }}')">
    <x-navbar />

    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 overflow-y-auto">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
