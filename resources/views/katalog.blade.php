@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4 text-center">Katalog Karya</h2>

<div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 px-4">
    @foreach ($var as $item)
        <div class="bg-white px-5 rounded-xl shadow hover:shadow-lg transition py-5 relative">
            <a href="{{ $item['src'] }}">
                <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}" class="object-cover rounded-md mb-3 w-full">
            </a>
            <h3 class="text-lg font-semibold">{{ $item['judul'] }}</h3>
            <p class="text-sm text-gray-500 mb-1 text-justify">Oleh: {{ $item['oleh'] }}</p>
            <p class="text-sm text-gray-500 mb-6 text-justify">{!! nl2br(e($item['desk'])) !!}</p>
            <div class="absolute bottom-0 left-0 p-4">
                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded-md">{{ $item['bidang'] }}</span>
            </div>
        </div>
    @endforeach
</div>
@endsection


