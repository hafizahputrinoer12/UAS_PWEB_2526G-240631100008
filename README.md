Sistem Pendataan Mahasiswa

Nama:
PUTRI NOER HAFIZAH
NIM:
240631100008
Judul:
Sistem Pendataan Mahasiswa
Deskripsi Singkat:
    Aplikasi ini dibuat untuk mengelola data mahasiswa. Pengguna dapat menambahkan, melihat, mengubah, dan menghapus data mahasiswa   melalui aplikasi berbasis web menggunakan PHP Native dan MySQL.

Fitur:
* Menambahkan data mahasiswa
* Menampilkan daftar mahasiswa
* Mengedit data mahasiswa
* Menghapus data mahasiswa

Struktur Database:
Nama Database: `db_mahasiswa`
Tabel: `mahasiswa`
| Field   | Tipe Data                         |
| ------- | --------------------------------- |
| id      | INT (Primary Key, Auto Increment) |
| nim     | VARCHAR(20)                       |
| nama    | VARCHAR(100)                      |
| jurusan | VARCHAR(100)                      |
| alamat  | TEXT                              |

Cara Menjalankan Aplikasi:
1. Install XAMPP.
2. Jalankan Apache dan MySQL.
3. Import file `database.sql` ke phpMyAdmin.
4. Simpan folder project ke dalam `htdocs`.
5. Buka browser dan akses:

   `http://localhost/pendataan_mahasiswa`

Teknologi yang Digunakan:

* HTML5
* CSS3
* PHP Native
* MySQL
