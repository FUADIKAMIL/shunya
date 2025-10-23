@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <img src="{{ asset('images/logo.png') }}" alt="Profile" class="w-120">
</div>
<div class="bg-white rounded-xl shadow grid md:grif-cols-3 gap-4 my-2 py-4 px-4 hover:shadow-lg transition">
    <h1 class="text-3xl font-bold text-center">SHUNYA</h1>
    <p class="text-gray-600 text-justify">
        Shunya lahir dari ruang hening, ruang di mana kita berhenti sejenak dari hiruk pikuk penilaian, stigma, dan stereotip.
    </p>
    <p class="text-gray-600 text-justify">
        Ia adalah fase kesadaran, saat manusia menyadari bahwa segala bentuk, suara, dan identitas
        hanyalah lapisan luar dari sesuatu yang jauh lebih dalam.
        Melalui Shunya, UKM Kesenian Universitas Jember menghadirkan perjalanan menuju kekosongan yang penuh makna.
    </p>
    <p class="text-gray-600 text-justify">
        Bukan kosong yang hampa, tapi kosong yang memberi ruang bagi makna baru untuk tumbuh.
        Pameran ini mempersatukan tujuh bidang seni, dari seni rupa, musik, tari, penulisan kreatif, fotografi, teater hingga karawitan
        masing-masing menafsirkan Shunya dengan caranya sendiri.
    </p>
    <p class="text-gray-600 text-justify">
        Di sini, setiap karya menjadi cermin
        mengajak kita melihat bukan apa yang tampak,
        melainkan apa yang diam di dalam kesadaran kita sendiri.
    </p>
</div>
<h1 class="text-3xl font-bold text-center mt-14 mb-10">Karya Bidang</h1>
<div class="grid md:grid-cols-3 gap-4">
    @foreach ($bidang as $item)
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            <img src="{{ asset($item['gambar']) }}" alt="{{ $item['bidang'] }}" class="w-full h-48 object-cover rounded-md mb-3">
            <h3 class="text-lg font-semibold">{{ $item['bidang'] }}</h3>
            <div class="flex">
                <p class="text-sm text-gray-500">Jumlah Karya:</p>
                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">{{ $item['jumlah'] }}</span>
            </div>
        </div>
    @endforeach
</div>
@endsection