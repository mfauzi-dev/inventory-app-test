# Inventory System

## 📌 Overview

Proyek ini merupakan implementasi sistem inventori sederhana sesuai dengan coding exercise.
Sistem ini mencakup:

* Backend menggunakan Laravel
* Antarmuka web untuk CRUD inventory
* API untuk akses data inventory
* Mobile diimplementasikan dalam bentuk **responsive web**

---

## Requirements

Sebelum menjalankan proyek, pastikan sudah menginstall:

* PHP >= 8.1
* Composer
* MySQL / MariaDB
* Node.js & npm (optional)
* Git
* Web Browser (Chrome / Firefox)

---

## Struktur Repository

```
/web      -> Backend Laravel + Web + API
/mobile   -> Simulasi mobile (responsive web)
/README.md
```

---

## Cara Menjalankan Backend (/web)

1. Clone repository:

```bash
git clone <URL_REPOSITORY>
cd <NAMA_PROJECT>/web
```

2. Install dependency:

```bash
composer install
```

3. Copy file environment:

```bash
cp .env.example .env
```

4. Konfigurasi database di file `.env`:

```
DB_DATABASE=inventory_db
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Jalankan server:

```bash
php artisan serve
```

Akses aplikasi di:

```
http://127.0.0.1:8000
```

---

## Cara Menjalankan Migration Database

Jalankan perintah berikut untuk membuat tabel dari database kosong:

```bash
php artisan migrate
```

---

## 🌐 Fitur Web

Aplikasi web menyediakan fitur:

* Menambahkan data inventory
* Mengubah data inventory
* Menghapus data inventory
* Melihat daftar inventory (pagination)

Tampilan sudah dibuat **responsive** sehingga dapat diakses melalui perangkat mobile.

---

## API Endpoint

### 1. List Inventory

```
GET /api/inventories
```

### 2. Detail Inventory

```
GET /api/inventories/{id}
```

### Contoh Response

```json
{
  "success": true,
  "message": "List data inventory",
  "data": [
    {
      "id": 1,
      "name": "Laptop",
      "quantity": 10,
      "price": "15000000.00",
      "description": "Laptop kantor"
    }
  ]
}
```

---

## Cara Menjalankan Aplikasi Mobile (/mobile)

Aplikasi mobile pada proyek ini diimplementasikan dalam bentuk **responsive web**.

Cara menjalankan:

1. Jalankan backend:

```bash
php artisan serve
```

2. Buka di browser:

```
http://127.0.0.1:8000
```

3. Untuk simulasi mobile:

* Buka di browser HP, atau
* Gunakan fitur responsive mode di browser (Inspect → Toggle Device Toolbar)

---

## Catatan

* Backend menggunakan migration sehingga database dapat dibuat dari kondisi kosong
* Web interface mendukung CRUD lengkap
* API tersedia untuk integrasi dengan aplikasi lain
* Mobile diimplementasikan sebagai responsive web karena saya belum pernah membuat mobile apps

---

## Cara Test

1. Jalankan backend
2. Akses web di browser
3. Test API:

```
http://127.0.0.1:8000/api/inventories
```

