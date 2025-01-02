# REST Server CRUD with Laravel

Sebuah aplikasi REST Server CRUD berbasis Laravel yang dirancang untuk pengelolaan post sederhana dengan fitur utama seperti create, read, update, dan delete post melalui API client. Aplikasi ini juga menyediakan dokumentasi penggunaan API dan halaman sederhana untuk menampilkan daftar post.

## Fitur Utama
- REST API CRUD
- Endpoint untuk membuat, membaca, mengubah, dan menghapus post.
- Dokumentasi API
- Halaman khusus untuk menjelaskan cara menggunakan API, termasuk endpoint, metode HTTP, dan parameter yang diperlukan.
- Halaman Post Viewer
- Tampilan sederhana untuk menampilkan daftar post yang ada di database.

## Teknologi yang Digunakan
- **Framework** : Laravel 11
- **Database**: MySQL
- **Frontend**: Bootstrap 5
- **Pengujian**: Postman

## Cara Setup Projek Agar Bisa Dijalankan
- Pastikan sudah menginstal Composer dan PHP.
- Clone atau download proyek ini:
```git clone https://github.com/Reehan242/laravel-crud-rest-server.git```

- Masuk ke folder proyek:
```cd laravel-crud-rest-server```

- Install dependency dengan Composer:
```composer install```

- Ubah nama file .env.example menjadi .env:
```mv .env.example .env```

- Konfigurasi file .env untuk database Anda (MySQL):
```
DB_DATABASE: Nama database Anda.

DB_USERNAME: Username database.

DB_PASSWORD: Password database.
```

- Migrasikan database:
```php artisan migrate```

- Jalankan server lokal:
```php artisan serve```

- Akses aplikasi Anda melalui browser di http://localhost:8000.

## Endpoint API

**Berikut adalah daftar endpoint untuk mengelola post:**

``GET /api/posts`` Mendapatkan semua post.

``GET /api/posts/{id}`` Mendapatkan post berdasarkan ID.

``POST /api/posts`` Menambahkan post baru.
Parameter:
- title (string): Judul post.
- body (string): Isi post.

``PUT /api/posts/{id}`` Mengupdate post berdasarkan ID.
Parameter:
- title (string): Judul post.
- body (string): Isi post.

``DELETE /api/posts/{id}`` Menghapus post berdasarkan ID.



Catatan Tambahan

Pastikan server MySQL aktif dan dapat diakses.

Gunakan tool seperti Postman atau cURL untuk pengujian API.

Dokumentasi API tersedia di halaman khusus pada aplikasi.

Selamat menggunakan aplikasi REST Server CRUD ini!
