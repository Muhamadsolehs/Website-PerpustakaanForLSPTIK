# Website Perpustakaan - LSP TIK

Aplikasi Web Sistem Manajemen Perpustakaan yang dikembangkan untuk Uji Kompetensi Keahlian / Sertifikasi LSP TIK menggunakan framework Laravel.

---

## 📌 Fitur Utama

- **Dashboard Interaktif**: Menampilkan ringkasan total koleksi buku serta data buku terbaru.
- **Manajemen Data Buku (CRUD)**:
  - Tambah Data Buku (Kode Buku, Judul, ISBN, Kategori, Lokasi Rak, Penulis, Penerbit, Tahun Terbit).
  - Edit & Update informasi buku.
  - Hapus data buku.
  - Validasi form input secara menyeluruh.
- **Pencarian & Filter**: Memudahkan pencarian koleksi buku perpustakaan.
- **Cetak Laporan (PDF & Print Preview)**: Fitur cetak data buku perpustakaan dalam format siap cetak / PDF.
- **Antarmuka Responsif**: Desain bersih dan mudah digunakan di perangkat desktop maupun mobile.

---

## 🛠️ Teknologi & Stack

- **Framework**: [Laravel 11](https://laravel.com)
- **Bahasa Pemrograman**: PHP >= 8.2
- **Template Engine**: Blade Templating
- **Styling**: Bootstrap / Custom CSS
- **PDF Generator**: `barryvdh/laravel-dompdf`
- **Penyimpanan Data**: Storage JSON / Database Support

---

## 🚀 Panduan Instalasi & Menjalankan

Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal:

### 1. Clone Repositori
```bash
git clone https://github.com/Muhamadsolehs/Website-PerpustakaanForLSPTIK.git
cd Website-PerpustakaanForLSPTIK
```

### 2. Install Dependensi PHP
```bash
composer install
```

### 3. Install Dependensi Frontend & Build Aset
```bash
npm install
npm run build
```
*(Atau `npm run dev` untuk mode pengembangan)*

### 4. Salin Konfigurasi Environment & Generate App Key
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Buat Storage Link (Jika Diperlukan)
```bash
php artisan storage:link
```

### 6. Jalankan Server Lokal
```bash
php artisan serve
```
Akses aplikasi melalui browser di: `http://localhost:8000` atau melalui virtual host Laragon di `http://perpustakaan.test`.

---

## 👤 Pengembang
- **Nama**: Muhamad Soleh
- **Repositori**: [Muhamadsolehs/Website-PerpustakaanForLSPTIK](https://github.com/Muhamadsolehs/Website-PerpustakaanForLSPTIK)
