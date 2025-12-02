# Sistem Informasi Manajemen Barbershop UMKM

Aplikasi berbasis web yang dirancang untuk membantu operasional bisnis Barbershop UMKM. Sistem ini mengintegrasikan profil usaha (company profile), fitur reservasi online untuk pelanggan, serta dashboard administrator untuk pengelolaan data dan laporan transaksi.

## 📋 Fitur Utama

### 1. Halaman Publik (Pelanggan)
* **Landing Page:** Informasi profil barbershop, jam operasional, dan lokasi.
* **Reservasi Online:** Fitur booking jadwal potong rambut secara real-time.
* **Katalog Layanan:** Daftar harga dan deskripsi layanan (haircut, shaving, dll).
* **Portofolio:** Galeri foto hasil potongan rambut.

### 2. Panel Administrator (Back-End)
* **Dashboard:** Ringkasan statistik reservasi dan layanan.
* **Manajemen Reservasi:** Melihat status booking, konfirmasi, dan riwayat pelanggan.
* **Manajemen Data:** CRUD (Create, Read, Update, Delete) untuk data Layanan dan Produk.
* **Laporan:** Rekap data transaksi atau kegiatan operasional.
* **Manajemen Akun:** Sistem login aman untuk admin.

## 🛠️ Teknologi yang Digunakan
* **Bahasa Pemrograman:** PHP (Native)
* **Basis Data:** MySQL
* **Frontend:** HTML5, CSS3, JavaScript
* **Server:** Apache (XAMPP/Laragon)

## 📂 Struktur Direktori

```text
barbershopumkm/
│
├── assets/           # Aset statis (CSS, Fonts, Images, JS)
├── database/         # File dump database SQL
├── include/          # Komponen modular (Koneksi DB, Header, Footer)
├── lamanadmin/       # Modul Dashboard Administrator
├── reservasi/        # Modul Fitur Reservasi Online
├── index.php         # Halaman Utama (Landing Page)
└── ...               # File halaman pendukung lainnya

