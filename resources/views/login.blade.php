@extends('layouts.log')

@section('content')
<div>
    <img src="{{ asset('images/logo.png') }}" alt="Profile" class="w-120">
</div>
<div class="max-w-md mx-auto bg-white p-6 rounded-2xl mt-[-25px]">
    <h2 class="text-2xl font-bold text-center mb-4">Temukan Shunya-mu</h2>
    <form method="POST" action="/login" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Username</label>
            <input type="text" name="username"  placeholder="Nama kamu" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Password</label>
            <input type="password" name="password" placeholder="Masukkan apa saja...." class="w-full border rounded p-2" required>
        </div>
        <button class="bg-red-700 text-white w-full py-2 rounded hover:bg-red-800 cursor-pointer">Login</button>
    </form>
</div>
@endsection
