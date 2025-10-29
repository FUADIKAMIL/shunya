<nav class="flex justify-between items-center bg-stone-50 shadow px-6  h-18 px-1">
    @php
        $username = request()->query('username');
    @endphp
    <a href="{{ route('dashboard', ['username' => $username]) }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Shunya" class="w-24 h-13">
    </a>
    <div class="flex items-center gap-5">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-red-600">Home</a>
        <a href="{{ route('shunya', ['username' => $username]) }}" class="hover:text-red-600">Shunya</a>
        <a href="{{ route('katalog', ['username' => $username]) }}" class="hover:text-red-600">Katalog</a>
    </div>
</nav>
