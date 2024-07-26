# Pendaftaran Beasiswa

Proyek ini adalah sistem pendaftaran beasiswa berbasis web yang menggunakan PHP dan MySQL sebagai basis data, serta Bootstrap untuk tampilan antarmuka.

## Struktur/Hirarki Folder
jwd2024-pendaftaran-beasiswa/
│
├── assets/
│
├── database/
│ └── koneksi.php
│
├── view/
│ ├── daftar.php
│ └── hasil.php
│ └── proses_daftar.php
│
├── beasiswa.sql
├── index.php
└── README.md



### Penjelasan Struktur Folder:

1. **assets/**:
   - Folder ini digunakan untuk menyimpan file hasil upload.

2. **database/**:
   - **koneksi.php**: File ini berisi konfigurasi untuk koneksi ke database MySQL, termasuk informasi host, username, password, dan nama database.

3. **view/**:
   - **daftar.php**: Halaman untuk melakukan pendaftaran beasiswa. Formulir di halaman ini mencakup input data seperti NIM, nama, email, nomor HP, semester, IPK, pilihan beasiswa, dan berkas syarat.
   - **hasil.php**: Halaman untuk menampilkan hasil pendaftaran beasiswa. (Penjelasan rinci bisa ditambahkan sesuai implementasi di file ini).
   - **proses_daftar.php**: File yang menangani logika pemrosesan data pendaftaran setelah formulir dikirimkan.

4. **beasiswa.sql**: File SQL yang berisi struktur tabel dan data sample untuk database beasiswa.

5. **index.php**: Halaman ini berfungsi sebagai beranda dan menyediakan informasi mengenai kategori beasiswa yang tersedia.

6. **README.md**: File ini berisi penjelasan mengenai proyek, struktur folder, dan petunjuk penggunaan aplikasi.

### Instalasi dan Penggunaan

1. Clone repository ini:
    ```bash
    git clone https://github.com/choerulram/jwd2024-pendaftaran-beasiswa.git
    ```

2. Import database:
    - Buka `phpMyAdmin` atau alat manajemen database MySQL lainnya.
    - Buat database baru dengan nama `beasiswa`.
    - Import file `beasiswa.sql` ke dalam database yang baru dibuat.

3. Konfigurasi koneksi database:
    - Buka file `koneksi.php` di folder `database`.
    - Sesuaikan konfigurasi database (host, username, password, dan nama database) sesuai dengan pengaturan lokal Anda.

4. Jalankan aplikasi:
    - Buka browser dan akses `http://localhost/jwd2024-pendaftaran-beasiswa` untuk mulai menggunakan aplikasi.


