@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Katalog Karya</h2>

<div class="grid md:grid-cols-3 gap-4">
    @foreach ($var as $item)
        <div class="bg-white px-5 rounded-xl shadow hover:shadow-lg transition py-5 relative">
            <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}" class="object-cover rounded-md mb-3">
            <h3 class="text-lg font-semibold">{{ $item['judul'] }}</h3>
            <p class="text-sm text-gray-500 mb-6 text-justify">{{ $item['desk'] }}</p>
            <div class="absolute bottom-0 right-0 p-8">
                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded-md">{{ $item['bidang'] }}</span>
            </div>
        </div>
    @endforeach
</div>

@endsection


