<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shunya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cover bg-center bg-no-repeat min-h-screen text-gray-800 flex items-center justify-center" style="background-image: url('{{ asset('images/bg5.png') }}')">
    <main class="bg-white bg-opacity-80 backdrop-blur-md rounded-2xl shadow-lg p-6 max-w-md w-full mx-auto">
        @yield('content')
    </main>
</body>
</html>
