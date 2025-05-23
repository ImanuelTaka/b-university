# Company Profile Web Universitas

Website ini merupakan proyek company profile bergaya portal universitas yang dikembangkan menggunakan Laravel. Fitur utama mencakup halaman beranda, berita, pengumuman, form pendaftaran online yang terhubung ke database, serta sistem pengelolaan konten dinamis melalui database (CMS sederhana).

## Teknologi

-   Laravel 11
-   PHP 8.x
-   MySQL
-   Blade Template Engine
-   Tailwind CSS
-   Bootstrap Icons
-   Git
-   Filament

## Fitur

-   Halaman Beranda, Berita, Pengumuman
-   Form Pendaftaran Online yang langsung tersimpan ke database
-   Konten halaman dapat diubah melalui database (CMS sederhana)
-   Validasi form input
-   Responsive Design

## Instalasi

1. Clone repositori:
   `git clone https://github.com/ImanuelTaka/web-universitas.git && cd web-universitas`
2. Install dependency:
   `composer install`
3. Copy file konfigurasi:
   `cp .env.example .env`
4. Generate key:
   `php artisan key:generate`
5. Atur koneksi database di file `.env`
6. Jalankan migrasi:
   `php artisan migrate`
7. Buat user admin Filament
   `php artisan make:filament-user`
8. Jalankan server:
   `php artisan serve`

## Keterangan

Proyek ini dibuat untuk keperluan pembelajaran dan portofolio pribadi. Semua konten dapat disesuaikan melalui database, termasuk informasi pada halaman beranda, berita, dan pengumuman.

## Lisensi

Bebas digunakan untuk keperluan pembelajaran dan pengembangan pribadi.
