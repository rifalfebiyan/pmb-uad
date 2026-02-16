# PMB Online UAD - Simulasi

Aplikasi simulasi Pendaftaran Mahasiswa Baru (PMB) UAD berbasis **CodeIgniter 3**.
Proyek ini dibuat untuk tujuan edukasi keamanan web (simulasi celah XSS, Upload, dll).

## Prasyarat
- **XAMPP** (dengan PHP 7.4 - 8.2) atau Web Server sejenis.
- **Git**

## Cara Instalasi & Menjalankan

Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer teman Anda:

### 1. Clone Repository
**Pengguna XAMPP:**
Buka terminal dan arahkan ke folder `htdocs`.
- Windows: `C:\xampp\htdocs\`
- macOS: `/Applications/XAMPP/xamppfiles/htdocs/`

**Pengguna Laragon:**
Buka terminal (Cmder) dan arahkan ke folder `www`.
- Windows: `C:\laragon\www\`

Jalankan perintah clone:
```bash
git clone https://github.com/USERNAME_ANDA/pmb-uad.git
```

### 2. Setup Database
**XAMPP:** Buka `http://localhost/phpmyadmin`.
**Laragon:** Buka `http://localhost/phpmyadmin` atau gunakan **HeidiSQL** (bawaan Laragon).

Langkah import sama:
1.  Buat database `pmb-uad`.
2.  Import file `db_schema.sql`.

### 3. Konfigurasi
Biasanya konfigurasi sudah disesuaikan, tapi pastikan hal berikut:

**Base URL**
Buka `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/pmb-uad/';
```

**Database**
Buka `application/config/database.php` dan sesuaikan dengan setting XAMPP teman Anda (default XAMPP biasanya user `root` tanpa password):
```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '', // Kosongkan jika default XAMPP
'database' => 'pmb-uad',
```

### 4. Menjalankan Aplikasi
**Cara Standar (XAMPP Apache):**
Buka browser dan akses:
```
http://localhost/pmb-uad/
```

**Cara Alternatif (via Terminal - Mirip `npm run dev`):**
Jika Anda malas memindahkan folder ke `htdocs` atau ingin jalan cepat, buka terminal di folder project ini dan ketik:

**Windows / Linux (Jika PHP sudah di PATH):**
```bash
php -S localhost:8000
```

**macOS (XAMPP):**
Jika perintah `php` tidak ditemukan, gunakan path lengkap:
```bash
/Applications/XAMPP/xamppfiles/bin/php -S localhost:8000
```
Lalu buka browser di: `http://localhost:8000`

*Catatan: Pastikan konfigurasi database tetap nyala lewat XAMPP (MySQL).*

### 5. Login Default
Gunakan akun yang telah tersedia di database (sql dump) pada tabel `login`.

Contoh user:
- Email: `test@uad.ac.id`
- Password: `12345`

Atau:
- Email: `pai@uad.ac.id`
- Password: `nasigoreng`

## Fitur Simulasi
- **Login**: Menggunakan MD5 (tidak aman).
- **Upload**: File upload tanpa validasi ketat.
- **XSS**: Simulasi celah XSS pada halaman Prodi.

---
**Catatan**: Jangan gunakan kode ini untuk production karena banyak celah keamanan yang sengaja dibuat untuk pembelajaran.
