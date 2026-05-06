# Laravel CRUD Tutorial

Repository ini berisi contoh sederhana implementasi **CRUD (Create, Read, Update, Delete)** menggunakan Laravel.

Project ini dibuat untuk kebutuhan pembelajaran dasar Laravel agar mudah dipahami oleh pemula.

---

## 📦 Requirements

Sebelum menjalankan project ini, pastikan sudah install:

* PHP >= 8.2
* Composer
* MySQL / MariaDB
* Node.js & NPM (opsional)

---

## 🚀 Installation Guide

Ikuti langkah-langkah berikut:

### 1. Clone Repository

```bash
git clone https://github.com/obipranata/laravel-crud-tutorial.git
cd laravel-crud-tutorial
```

---

### 2. Install Dependency

```bash
composer install
```

---

### 3. Setup File Environment

```bash
cp .env.example .env
```

---

### 4. Generate Application Key

```bash
php artisan key:generate
```

---

### 5. Setup Database

Buka file `.env`, lalu sesuaikan:

```env
DB_DATABASE=nama_database_anda
DB_USERNAME=username_anda
DB_PASSWORD=password_anda
```

> Pastikan database sudah dibuat di MySQL

---

### 6. Run Migration

```bash
php artisan migrate
```

Laravel menggunakan sistem migrasi untuk membuat struktur database secara otomatis ([Cloudways][1])

---

### 7. Jalankan Server

```bash
php artisan serve
```

---

### 8. Akses di Browser

Buka:

```
http://127.0.0.1:8000
```

---

## 🐘 Optional: Menggunakan Laravel Herd

Jika kamu menggunakan **Laravel Herd**, kamu tidak perlu menjalankan:

```bash
php artisan serve
```

---

### Cara Menjalankan Project di Herd

Masuk ke folder project:

```bash
cd laravel-crud-tutorial
```

Lalu jalankan:

```bash
herd link
```

---

### Akses di Browser

Buka:

```
http://laravel-crud-tutorial.test
```

---

### Catatan

* Pastikan aplikasi Herd sedang berjalan
* Tidak perlu `php artisan serve` jika menggunakan Herd


## ✨ Features

* Create data
* Read data
* Update data
* Delete data

---

## 📚 Tujuan Pembelajaran

Dengan project ini, mahasiswa akan belajar:

* Struktur dasar Laravel
* Routing
* Controller
* Model & Migration
* Blade Template
* CRUD flow

---

## ⚠️ Catatan

Project ini dibuat untuk pembelajaran dasar, jadi:

* Tidak menggunakan authentication
* Tidak menggunakan fitur advanced
* Fokus ke konsep CRUD

---

## 👨‍🏫 Author

Dibuat oleh:
**Obi Pranata**

[1]: https://www.cloudways.com/blog/laravel-crud/?utm_source=chatgpt.com "Build & Deploy a Laravel CRUD Application: Complete Tutorial"
