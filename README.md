# Sistem Perpustakaan Digital Kampus

Aplikasi web berbasis Laravel 12 untuk mengelola data buku, anggota, dan transaksi peminjaman perpustakaan. Project ini dibangun dengan arsitektur MVC (Model-View-Controller).

## Cara Menjalankan Project Secara Lokal

1. Clone repository ini ke komputer lokal.
2. Jalankan perintah `composer install` pada terminal.
3. Copy file `.env.example` dan ubah namanya menjadi `.env`.
4. Sesuaikan konfigurasi database pada file `.env`.
5. Jalankan perintah `php artisan key:generate`.
6. Jalankan server lokal dengan perintah `php artisan serve`.
7. Buka `http://127.0.0.1:8000` di browser.

Pemahaman MVC:
Model bertugas sebagai otak yang mengurus struktur data dan komunikasi dengan database. View berfungsi sebagai wajah aplikasi yang mengatur tampilan antarmuka untuk pengguna. Controller bertindak sebagai manajer penghubung yang menerima permintaan dari View, mengambil atau menyimpan data ke Model, lalu mengembalikan responsnya kembali ke View.