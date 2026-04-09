# 📘 Panduan Pengguna: Sistem Manajemen Inventaris (Laravel + React)
**Lingkungan:** Arch Linux |
**Tujuan:** Implementasi Relasi Database One-to-Many (1:N)

---

## 🛠️ Alur Pengembangan Sistem
Berikut adalah tabel rekapitulasi langkah-langkah yang telah dilakukan untuk membangun sistem ini:

| Kategori | Aktivitas | Lokasi File / Terminal | Deskripsi Singkat |
| :--- | :--- | :--- | :--- |
| **Database** | Membuat DB | Terminal (`sudo mariadb`) | Perintah `CREATE DATABASE structure;` untuk wadah data. |
| **Migration** | Skema Supplier | `database/migrations/...` | Menentukan kolom `nama_supplier` dan `alamat`. |
| **Migration** | Skema Produk | `database/migrations/...` | Menentukan `nama_produk`, `harga`, dan `supplier_id`. |
| **Model** | Setup Relasi | `app/Models/Supplier.php` | Menambahkan fungsi `hasMany(Produk::class)`. |
| **Model** | Setup Relasi | `app/Models/Produk.php` | Menambahkan fungsi `belongsTo(Supplier::class)`. |
| **Controller**| Logic Data | `app/Http/Controllers/...` | Mengambil data dengan `with('supplier')` (Eager Loading). |
| **Routing** | Registrasi URL | `routes/web.php` | Mendaftarkan URL `/produk` agar bisa diakses di browser. |
| **Frontend** | UI (React) | `resources/js/Pages/Produk/Index.jsx` | Membuat tabel responsif dengan Tailwind CSS. |
| **Execution** | Migrasi Tabel | Terminal (`php artisan migrate:fresh`) | Membangun ulang struktur tabel agar sinkron. |
| **Data Entry** | Testing Data | Terminal (`php artisan tinker`) | Input data contoh manual untuk tes relasi. |
| **Build Tool** | Kompilasi Aset | Terminal (`npm run dev`) | Menjalankan Vite untuk memproses file JSX/React. |

---

## 🚀 Cara Menjalankan Proyek di Arch Linux

Pastikan service MariaDB Anda sudah berjalan sebelum memulai.

### 1. Persiapan Database
Pastikan service MariaDB aktif:
```bash
sudo systemctl start mariadb