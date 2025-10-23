@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4 my-13">Beli Tiketnya Sammm</h2>

<div class="grid md:grid-cols-3 gap-4">
    @foreach ($var as $item)
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            <img src="{{ asset($item['gambar']) }}" alt="{{ $item['jenis'] }}" class="w-full h-48 object-cover rounded-md mb-3">
            <h3 class="text-lg font-semibold">{{ $item['jenis'] }}</h3>
            <p class="text-sm text-gray-500">{{ $item['harga'] }}</p>
            <div class="flex justify-end">
                <button class="text-xs bg-red-100 text-red-700 px-5 py-1 mt-2 rounded">
                    <a href="https://forms.gle/aAK2iArpo6hjYxcb8">Beli</a>
                </button>
            </div>
        </div>
    @endforeach
</div>
@endsection