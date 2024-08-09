
# CRUD PHP Project - Belajar

Proyek ini adalah aplikasi sederhana berbasis PHP yang menerapkan operasi CRUD (Create, Read, Update, Delete) untuk belajar dan memahami dasar-dasar pengembangan aplikasi web dengan PHP.

## Struktur Direktori

Berikut adalah struktur direktori dasar dalam proyek ini:

- `index.php` - Halaman utama yang menampilkan daftar data.
- `create.php` - Halaman untuk menambahkan data baru.
- `update.php` - Halaman untuk memperbarui data yang ada.
- `delete.php` - Skrip untuk menghapus data.
- `db/` - Berisi skrip untuk koneksi database.
- `includes/` - Berisi file helper dan fungsi yang digunakan dalam proyek.

## Persyaratan Sistem

Sebelum menjalankan proyek ini, pastikan server atau mesin lokal Anda memenuhi persyaratan berikut:

- PHP >= 7.3
- MySQL
- Server web seperti Apache atau Nginx

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini:

1. Clone repository ini ke mesin lokal Anda:

    ```bash
    git clone https://github.com/MrsFaixall/Crudphp.git
    cd repository
    ```

2. Buat database baru di MySQL dan impor file `database.sql` yang disediakan di folder `db/`:

    ```bash
    mysql -u username -p database_name < db/database.sql
    ```

3. Konfigurasi koneksi database dengan mengedit file `db/config.php`:

    ```php
    <?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'username');
    define('DB_PASSWORD', 'password');
    define('DB_NAME', 'database_name');
    ?>
    ```
Jika Tidak Ada
    ```
        -- Membuat database bernama db_sekolah
CREATE DATABASE db_sekolah;

-- Menggunakan database db_sekolah
USE db_sekolah;

-- Membuat tabel tbl_siswa
CREATE TABLE tbl_siswa (
    NISN INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL
);

    ```


4. Jalankan proyek ini melalui server web Anda, misalnya dengan menggunakan XAMPP atau WAMP, dan akses melalui browser di `http://localhost/repository`.

## Penggunaan

1. **Create:** Gunakan halaman `create.php` untuk menambahkan data baru ke dalam database.
2. **Read:** Halaman `index.php` menampilkan semua data yang ada di database.
3. **Update:** Gunakan halaman `update.php` untuk memperbarui data yang ada.
4. **Delete:** Data dapat dihapus menggunakan tombol hapus di halaman `index.php`.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan lakukan fork dan kirimkan pull request dengan perubahan yang Anda usulkan.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
";

// Membuat dan menulis konten ke dalam file README.md
file_put_contents($filename, $content);


