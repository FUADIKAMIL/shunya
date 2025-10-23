@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <img src="{{ asset('images/profile.svg') }}" alt="Profile" class="w-45 my-20">
</div>
<div class="max-w-md mx-auto text-white bg-red-800 p-6 rounded-2xl shadow-md">
    <h2 class="text-xl font-bold mb-2">Profile Pengguna</h2>
    <p><strong>Username:</strong> {{ $username ?? 'King' }}</p>
    <p><strong>Status:</strong> Shunya Enthusiast</p>
    <form action="{{ route('logout') }}" method="GET" class="flex justify-end">
        <button type="submit" class="mt-4 px-2 py-2 bg-white-500 text-white font-semibold rounded-lg hover:bg-red-700 transition duration-200 cursor-pointer">
            <img src="{{ asset('images/logout.svg') }}" alt="Profile" class="w-6 h-6">
        </button>
    </form>
</div>
@endsection
