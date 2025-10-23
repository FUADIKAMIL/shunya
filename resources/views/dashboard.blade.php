@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="text-center py-12 bg-red-800 rounded-3xl shadow mb-8 px-5">
        <h1 class="text-4xl font-bold text-white mb-2">Selamat Datang, {{ $username ?? 'Sahabat Seni' }}</h1>
        <p class="text-white italic">Seni adalah cermin dari jiwamu, Temukan Shunya-mu.</p>
    </div>

    <h3 class="text-xl font-semibold mb-4">Berita & Kegiatan Shunya Terbaru</h3>

    <div class="grid md:grid-cols-3 sm:grid-cols-3 gap-6">
        @foreach($news as $item)
            <div class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-lg transition">
                <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}" class="w-full object-cover">
                <div class="p-4">
                    <h4 class="text-lg font-semibold mb-2">{{ $item['judul'] }}</h4>
                    <p class="text-gray-600 text-sm text-justify">{{ $item['desk'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
