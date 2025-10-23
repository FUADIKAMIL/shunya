SHUNYA

SHUNYA adalah website pameran seni yang dibuat sebagai implementasi dari UTS Praktikum Pemrograman Berbasis Website.  
Proyek ini terinspirasi dari kegiatan pameran seni SHUNYA yang diselenggarakan oleh UKM Kesenian Universitas Jember, dan menjadi dasar pembuatan sistem web sederhana.

Website ini menampilkan berbagai fitur seperti sistem login manual, halaman informasi pameran, galeri karya, dan sistem pembelian tiket.

Fitur Utama ->
Login
- Form login sederhana menggunakan username dan password.
- Data login disimpan sebagai array di controller.

Home (Dashboard)
- Halaman utama yang menampilkan berita terbaru seputar acara pameran Shunya.

Shunya
- Berisi penjelasan makna Shunya dan kontribusi setiap bidang dalam pameran.

Ticket
- Form pembelian tiket yang terhubung ke Google Form eksternal.

Arts
- Galeri digital karya seni yang ditampilkan dalam pameran.

Profile
- Menampilkan data diri pengguna yang sedang login, dan menyediakan tombol Logout untuk keluar.

Struktur Folder Proyek ->
/app/Http/Controllers
└── PageController.php

/resources/views
├── layouts
│   ├── app.blade.php
│   └── log.blade.php
├── components
│   ├── footer.blade.php
│   └── navbar.blade.php
├── dashboard.blade.php
├── login.blade.php
├── pengelolaan.blade.php
├── profile.blade.php
├── shunya.blade.php
└── ticket.blade.php
/routes
└── web.php
