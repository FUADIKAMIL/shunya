<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username', 'King');
        $password = $request->input('password');

        if ($username && $password)
        {
            session(['username' => $username]);
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        $news = [
            [
                'judul' => 'Extend Presale 2 & Paket Bundling',
                'desk' => 'Jadi, MinKe extend Presale 2 nyaa dan sekarang ada Tiket Bundling lohhh!!
                           Udah, gausah ditunda-tunda lagi, sekarang ajak besti, hts, atau pasangan kalian buat dateng ke pameran yaaww',
                'gambar' => 'images/news/n1.jpg',
            ],
        ];

        return view('dashboard', compact('username', 'news'));
    }

    public function shunya()
    {
        $bidang = [
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Seni Rupa', 'jumlah' => '15'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Tari', 'jumlah' => '25'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Karawitan', 'jumlah' => '7'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Musik', 'jumlah' => '7'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Penulisan Kreatif', 'jumlah' => '7'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Teater', 'jumlah' => '7'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Fotografi', 'jumlah' => '7'],
        ];

        return view('shunya', compact('bidang'));
    }

    public function pengelolaan()
    {
        $arts = [
            ['gambar' => 'images/art/a1.jpg', 'judul' => 'Starry Night', 'pencipta' => 'Van Gogh', 'desk' => 'lukisan terkenal karya pelukis pasca-Impresionis Belanda, Vincent van Gogh, yang dibuat pada Juni 1889.'],
            ['gambar' => 'images/art/a2.jpg', 'judul' => 'Mona Lisa', 'pencipta' => 'Leonardo Da Vinci', 'desk' => 'Lukisan ini menggambarkan potret setengah badan seorang wanita misterius, yang dipercaya sebagai Lisa del Giocondo, istri seorang saudagar Florentine.'],
            ['gambar' => 'images/art/a3', 'judul' => 'Renungan Mas Fuad', 'pencipta' => 'Mas Fuad', 'desk' => 'Renungan Mas Fuad dikala sedang membuat adonan donat'],
        ];

        return view('pengelolaan', compact('arts'));
    }

    public function ticket()
    {
        $var = [
            ['gambar' => 'images/logo.png', 'jenis' => 'Tiket Satuan', 'harga' => 'Rp.15000'],
            ['gambar' => 'images/couple.png', 'jenis' => 'Tiket Bundling Couple', 'harga' => 'Rp.25000'],
        ];

        return view('ticket', compact('var'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function logout(Request $request)
    {
        session()->forget('username');

        return redirect()->route('login');
    }
}
