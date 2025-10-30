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
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Seni Rupa', 'karya' => '15', 'instalasi' => '2'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Tari', 'karya' => '25', 'instalasi' => '2'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Karawitan', 'karya' => '7', 'instalasi' => '2'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Musik', 'karya' => '7', 'instalasi' => '2'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Penulisan Kreatif', 'karya' => '7', 'instalasi' => '2'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Teater', 'karya' => '7', 'instalasi' => '2'],
            ['gambar' => 'images/art/a1.jpg', 'bidang' => 'Fotografi', 'karya' => '7', 'instalasi' => '2'],
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

    public function katalog()
    {
        $var = [
            [
                'gambar' => 'images/art/a1.jpg',
                'judul' => 'Cermin Tua di Rumah Ibu',
                'desk' => 'Cermin sebagai saksi bisu dari kehidupan seorang wanita tua. Coretan gincu yang berupa penggalan puisi di cermin merupakan cerita yang dirasakan oleh wanita itu di akhir kehidupannya. Pemilihan objek cermin dan gincu mempresentasikan stigma masyarakat terkait perempuan. Pandangan masyarakat terhadap perempuan yang harus selalu rapih dan menjaga penampilan diilustrasikan melalui puisi dan instalasi ini.',
                'bidang' => 'Seni Rupa',
                'src' => '',
            ],
            [
                'gambar' => 'images/art/a1.jpg',
                'judul' => 'Won',
                'desk' => 'Ini lagu won keren banget anjayy aowkoakowkoakwoka maaanteppp',
                'bidang' => 'Musik',
                'src' => '',
            ],
            [
                'gambar' => 'images/art/a1.jpg',
                'judul' => 'Nang Ning Nung',
                'desk' => 'Ini keren nang ning nang naning',
                'bidang' => 'Karawitan',
                'src' => '',
            ],
        ];

        return view('katalog', compact('var'));
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
