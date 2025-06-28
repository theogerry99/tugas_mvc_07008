PENJELASAN ALUR KERJA PROGRAM (MVC)

Aplikasi ini dibangun menggunakan pola arsitektur Model-View-Controller (MVC) untuk mengelola data mahasiswa secara terstruktur.

ALUR KERJA:

1. Entry Point:
   Semua permintaan dari pengguna dimulai melalui file utama `index.php`. File ini bertindak sebagai router, yang menentukan aksi (`action`) berdasarkan parameter URL seperti `?action=...`. 
   Misalnya:
   - `?action=create` untuk menampilkan form tambah data
   - `?action=save` untuk menyimpan data baru
   - `?action=edit&id=1` untuk mengedit data
   - `?action=remove&id=1` untuk menghapus data

2. Controller (`StudentController.php`):
   - Menerima permintaan dari `index.php` dan menentukan logika apa yang harus dijalankan.
   - Jika pengguna ingin melihat daftar mahasiswa, controller akan memanggil `fetchAll()` dari model.
   - Jika pengguna ingin menambah, mengedit, atau menghapus data, controller akan menangani permintaan dan memanggil metode yang sesuai di Model, serta mengarahkan ke halaman View yang tepat.

3. Model (`StudentModel.php`):
   - Bertanggung jawab penuh atas interaksi dengan database MySQL.
   - Menyediakan fungsi seperti `fetchAll()`, `insert()`, `remove()`, `findById()`, dan `modify()` untuk menangani data di tabel `mahasiswa01`.
   - Model tidak terlibat dalam bagaimana data ditampilkan (hanya fokus pada logika dan koneksi data).

4. View (`views/`):
   - Berisi file HTML yang digunakan untuk menampilkan antarmuka kepada pengguna.
   - File seperti `student_list.php`, `student_create.php`, dan `student_edit.php` dipanggil oleh Controller untuk menampilkan halaman sesuai kebutuhan.
   - View hanya menangani tampilan, tanpa logika bisnis.

KEUNTUNGAN MENGGUNAKAN MVC:
- Kode lebih rapi dan terorganisir.
- Mudah dikembangkan dan dikelola.
- Memisahkan logika bisnis, data, dan tampilan secara jelas.

----------------------------------------------------------

STRUKTUR FOLDER PROYEK:

/
|-- controllers/
|   |-- StudentController.php
|-- models/
|   |-- StudentModel.php
|-- views/
|   |-- student_list.php
|   |-- student_create.php
|   |-- student_edit.php
|-- config.php
|-- index.php
|-- README.txt

----------------------------------------------------------

INSTRUKSI JALAN APLIKASI:

1. Pastikan Anda telah membuat database MySQL dengan nama `kampus01`.
2. Buat tabel bernama `mahasiswa01` dengan kolom:
   - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
   - `nama` (VARCHAR)
   - `nim` (VARCHAR)
3. Atur koneksi database di file `config.php` sesuai dengan konfigurasi lokal Anda.
4. Jalankan aplikasi melalui browser dengan membuka `index.php`.

Contoh:
http://localhost/nama_folder/index.php

