# Company Profile Web Universitas

Website ini merupakan proyek company profile bergaya portal universitas yang dikembangkan menggunakan Laravel. Fitur utama mencakup halaman beranda, berita, pengumuman, form pendaftaran online yang terhubung ke database, serta sistem pengelolaan konten dinamis melalui database (CMS sederhana).

## Teknologi

-   Laravel 12
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
2. Install dependencies PHP
   ```bash
   composer install
   ```
3. Copy file environment
   ```bash
   cp .env.example .env
   ```
4. Generate key:
   ```bash
   php artisan key:generate
   ```
5. Atur koneksi database di file `.env`
6. Jalankan migrasi:
    ```bash
   php artisan migrate
   ```
7. Buat user admin Filament
    ```bash
   php artisan make:filament-user
   ```
8. Jalankan server:
   ```bash
   php artisan serve
   ```

## Cara Login Admin Panel

Buka browser ke:

```
http://localhost:8000/admin/login
```

Gunakan user admin yang sudah dibuat lewat perintah `php artisan make:filament-user`.

---

## Catatan

- Jangan commit file `.env` dan folder `node_modules` atau `vendor`
- Proyek ini dibuat untuk portofolio

---

## Keterangan

Proyek ini dibuat untuk keperluan pembelajaran dan portofolio pribadi. Semua konten dapat disesuaikan melalui database, termasuk informasi pada halaman beranda, berita, dan pengumuman.

## Lisensi

Bebas digunakan untuk keperluan pembelajaran dan pengembangan pribadi.

Terima kasih sudah melihat proyek ini!
