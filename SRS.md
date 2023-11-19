
<html>
<body>
<div align="center"><h1> Software Requirements Spesification</h1></div>

<p align="center"><b>Version 1.7 </b><br>
<p align="center">02 November 2023</b>
<p align="center">
<img src="https://github.com/algrennn/Framework1/blob/48cf973f9fe16d71a60a9af1f267502d67bdf362/Image%20SRS/Logo_Resmi_PCR.png" width="250" height="250"/ >
</p>

<p align="center">Aplikasi Penghubung Individu Berkebutuhan Khusus<b><br>
</b>
<p align="center">Kelompok 1 
 <br>Joshua Algren      (2257301066)
 <br>Akbar Syahputra    (2257301008)
 <br>Riffa Fayyaza      (2257301117)
 <br>
 <br>
 <br>

<p align="center"><b>Program Studi Sistem Informasi</b><br>
<p align="center"><b>Politeknik Caltex Riau</b>
<p align="center"><b>2023</b>
</p>
</body>
</html>
 

**BAB I Pendahuluan (AKBAR)** 
----------
1.1 Tujuan
----------
Dokumen Spesifikasi Persyaratan Perangkat Lunak (SRS) adalah dokumen yang secara khusus dirancang untuk proyek "Aplikasi Pengelolaan Data Diri Guru dan Siswa". Dokumen ini memiliki peran sebagai panduan teknis yang esensial dalam pengembangan perangkat lunak ini, dengan tujuan memfasilitasi manajemen data diri guru dan siswa. Aplikasi ini diharapkan menjadi alat yang sangat diperlukan bagi para pengguna untuk mencatat, mengelola, dan menampilkan informasi terkait, serta membangun interaksi yang lebih baik di antara mereka. Melalui SRS ini, kami bermaksud menciptakan solusi teknologi yang efektif untuk mencapai tujuan ini dan mendukung pembentukan jaringan interaksi yang kuat di antara komunitas guru dan siswa.

1.2   Lingkup
----------
Manajemen Administrasi Data Profil Siswa dan Guru merupakan aplikasi yang kami bangun untuk mempermudah pengelolaan informasi di sekolah, termasuk data siswa dan guru. Aplikasi ini dirancang untuk memfasilitasi kepala sekolah dan admin dalam melihat serta mengelola data seperti perkembangan pendidikan, biodata siswa, kualifikasi pendidikan guru, dan informasi terkait lainnya.

1.3    Akronim, singkatan, definisi
----------

| Istilah | Definisi |
| ------ | ------ |
| SRS |Software Requirement Specification|
| Login | Digunakan untuk mengakses aplikasi |
| Software Requirement Specification | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna |
| Use Case | situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda |

1.4   Referensi
----------
1. Pengembangan Web atau Aplikasi Mobile:
Referensi Umum:

MDN Web Docs (https://developer.mozilla.org/): Sumber daya lengkap untuk pengembangan web.
Google Developers (https://developers.google.com/): Dokumentasi dan panduan pengembangan Google.
Framework Web:

Django (https://www.djangoproject.com/): Framework Python untuk pengembangan web.
Flask (https://flask.palletsprojects.com/): Micro-framework Python untuk web.
Framework Mobile:

Flutter (https://flutter.dev/): Framework UI untuk pengembangan aplikasi mobile.
React Native (https://reactnative.dev/): Framework JavaScript untuk membuat aplikasi mobile.

2. Database:
MySQL (https://www.mysql.com/):
Database relasional yang dapat diintegrasikan dengan banyak aplikasi web.
MongoDB (https://www.mongodb.com/):
Database NoSQL yang cocok untuk penyimpanan data dokumen.

1.5   Overview
----------

Bab selanjutnya yaitu menjelaskan sistem yang di terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

**BAB II Gambaran umum (RIFA)**
----------
Dalam menghadapi era globalisasi dan perkembangan teknologi yang cepat, kami sebagai tim software engineering telah mengembangkan aplikasi Manajemen Administrasi Data Profil Siswa dan Guru. Aplikasi ini didesain khusus untuk memenuhi kebutuhan sekolah, mempermudah pengelolaan data profil siswa dan guru.

2.1   Perspektif produk
----------

**2.1.1 Antarmuka sistem**

![enter image description here](https://raw.githubusercontent.com/algrennn/Framework1/master/Image%20SRS/UseCaseDiagram1.jpg)

**2.1.2 Antarmuka pengguna**

   - **Mockup Admin ( Website )**

|  |  |
|--|--|
| ![enter image description here]([https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/LamanLogin.png](https://github.com/algrennn/Framework1/blob/33b60eb4e003361fb1b80ec705f04a7c89400c19/Image%20SRS/DASHBOARD.png)) 
| ![enter image description here](https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/lamanUtama.png) 
| ![enter image description here](https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/LamanProfile.png)
| ![enter image description here](https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/lamanRegister.png) | |
 
**2.1.3 Antarmuka perangkat keras**

![enter image description here](https://raw.githubusercontent.com/jakariaaa27/RPL-D-1/master/Image%20SRS/antarmuka%20perangkat%20keras%202.png)

Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak KuIstimewa antara lain :

1. HP/PC/Laptop
Untuk menjalankan Aplikasi ini admin membutuhkan sebuah perangkat yang menggunakan OS Windows, Linux, atau MAC dan sudah terinstall browser .

**2.1.4 Antarmuka perangkat lunak**

Tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Manajemen Administrasi Data Kependudukan Desa Lohbener antara lain :
1. Kabel Lan UTP RJ45
2. Modem
3. wifi

**2.1.6 Batasan memori**

Tidak ada

**2.1.7 Operasi-operasi**

| Operasi | Fungsi |
| ------ | ------ |
| Login | Digunakan untuk mengakses aplikasi |
| Input Data | Digunakan untuk memasukkan data-data |
| Kembali | Digunakan untuk kembali ke halaman sebelumnya |
| Hapus | Digunakan untuk menghapus data |
| Edit | Digunakan untuk mengubah data |
| View | Digunakan untuk menampilkan data |
| Simpan | Digunakan untuk menyimpan data |

**2.1.8 Kebutuhan adaptasi**

Tidak ada
   
2.2 Spesifikasi Kebutuhan fungsional
----------
![](https://github.com/algrennn/Framework1/blob/master/Image%20SRS/UseCaseDiagram2.jpg)
   
**2.2.1 Guru Login**

Use Case: Login
Deskripsi Singkat : 
Pengguna melakukan login terlebih dahulu sebelum masuk ke tampilan home
1. Guru melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan

Xref: Bagian 3.2.1, Login Guru
   
**2.2.2 Guru melihat data Siswa**

Use Case: Melihat data Siswa
Deskripsi Singkat:
Pengguna dapat melihat data Siswa yang ada.
Deskripsi Langkah-langkah:
1. Pengguna menekan arrowbar yang ada di sebelah kiri dengan icon siswa
2. Sistem akan menampilkan hasil data Siswa yang dipilih.


**2.2.3 Admin login**

Use Case: Login
Deskripsi Singkat:
Admin melakukan login dengan memasukan username password.
Deskripsi Langkah-langkah:
1. Admin melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan

Xref: Bagian 3.2.3, Login admin
      
**2.2.4 Admin Mengelola data Siswa**

Use Case: Mengelola data Siswa
Deskripsi Singkat:
Admin melakukan pengelolaan data Siswa dan sistem menyimpan data pada database.
Deskripsi Langkah-langkah:
1. Admin melakukan input data Siswa/
2. Admin mengklik tombol simpan.
3. Sistem menyimpan data Siswa.
4. Bila data sudah ada sistem akan menampilkan peringatan

Xref: Bagian 3.2.4, Mengelola data Siswa

**2.2.5 Admin melihat data Siswa**

Use Case: Melihat data Motivator
Deskripsi Singkat:
Admin dapat melihat data Siswa yang ada.
Deskripsi Langkah-langkah:
1. Admin menekan navbar yang ada di sebelah kiri di icon Siswa
2. Sistem akan menampilkan hasil data Siswa yang dipilih.

Xref: Bagian 3.2.5, Melihat data Siswa

**2.2.6 Admin melihat data Guru**

Use Case: Melihat data Guru
Deskripsi Singkat:
Admin dapat melihat data Guru yang ada.
Deskripsi Langkah-langkah:
1. Admin menekan navbar yang ada di sebelah kiri di icon Guru
2. Sistem akan menampilkan hasil data Guru yang ada.
    
**2.2.7 Admin mengelola Guru**

Use Case: Mengelola data Guru
Deskripsi Singkat:
Sistem akan menampilkan form Guru dan admin dapat menambah Guru sesuai kebutuhan.
Deskripsi Langkah-langkah:
1. Admin mengklik manajemen user, lalu mengisi form kemudian klik tambah
2. Sistem akan menyimpan data user ke database dan menampilkan data user yang dipilih.
3. Admin bisa menghapus hak akses user.

Xref: Bagian 3.2.7, Mengelola data GURU

2.3   Spesifikasi Kebutuhan non-fungsional
----------
- Tabel Kebutuhan Non-Fungsional 

   | No | Deskripsi |
   | ------ | ------ |
   | 1 | Semua interface dan fungsi menggunakan Bahasa Indonesia |
   | 2 | Perangkat Lunak dapat dipakai di semua platofrm OS 
 
2.4   Karakteristik pengguna
----------
Karakteristik pengguna dari perangkat lunak ini adalah pengguna langsung berinteraksi dengan sistem tanpa harus dihubungkan dengan hak akses atau level autentikasi.

2.5   Batasan-batasan
----------
- Perangkat lunak web hanya dijalankan di windows (7,8,10). 
- Waktu pengembangan perangkat lunak yang singkat membuat adanya kemungkinan tidak semua fungsi yang ada dapat dilaksanakan.

2.6   Asumsi-asumsi
----------
Maksimal penginputan id atau memasukkan kode pada aplikasi ini adalah 9999, lebih dari itu program akan muncul peringatan "Anda telah melebihi batas maksimum".

2.7   Kebutuhan Penyeimbang
----------
Tidak ada

BAB III Requirement Specification (JOSHUA)
----------
3.1 Persyaratan Antarmuka Eksternal
----------
Salah satu cara mengakses aplikasi ini yaitu dengan hak akses yang di berikan oleh admmin, login melalui aplikasi ini dengan mencantumkan username kemudian sistem akan mencocokkan username. Setelah login berhasil maka akan dapat menggunakan fitur fitur yang ada pada aplikasi.
      
3.2 Functional Requirement
----------
Logika Struktur terdapat pada bagian 3.3.1
      
**3.2.1 Guru Login**

|  |  |
|--|--|
| Nama Fungsi | Login |
| Xref | Bagian 2.2.1, Login Pengguna |
| Trigger | Membuka Aplikasi |
| Precondition | Halaman login |
| Basic Path | 1. Pengguna mengisi form login dengan username dan password <br> 2.Pengguna mengklik tombol login <br> 3. Sistem melakukan validasi login <br> 4. Bila sukses sistem akan mengarahkan ke halaman beranda <br> 5. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Pengguna dapat login dan mengakses Aplikasi|
| Exception Push | Username dan password salah |
      
**3.2.2 Guru melihat Data Siswa**

|  |  |
|--|--|
| Nama Fungsi | View Data Siswa |
| Xref | Bagian 2.2.2, View Data Motivator |
| Trigger | Membuka Aplikasi |
| Precondition | Halaman Data Siswa |
| Basic Path | 1. Pengguna mengklik navbar yang ada di kiri dengan icon Siswa <br> 2. Sistem akan menampilkan Data Siswa |
| Alternative | Tidak ada |
| Post Condition | Pengguna melihat Data Siswa |
| Exception Push | Tidak ada koneksi |
   
**3.2.3 Admin login**

|  |  |
|--|--|
| Nama Fungsi | Login |
| Xref | Bagian 2.2.3, Login admin |
| Trigger | Membuka Aplikasi |
| Precondition | Halaman login admin |
| Basic Path | 1. Admin melakukan login dengan username dan password <br> 2. Sistem melakukan validasi login <br> 3. Bila sukses sistem akan mengarahkan ke halaman beranda <br> 4. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Admin berhasil login dan mengakses Aplikasi |
| Exception Push | Username dan password salah |
   
**3.2.4 Admin mengelola Data Siswa**

|  |  |
|--|--|
| Nama Fungsi | Mengelola data Siswa |
| Xref | Bagian 2.2.4, Mengelola data Siswa |
| Trigger | Membuka Aplikasi |
| Precondition | Halaman utama admin |
| Basic Path | 1. Admin melakukan input data Siswa <br> 2. Admin mengklik tombol simpan <br> 3. Sistem menyimpan data Siswa <br> 4. Bila data sudah ada sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Data Siswa berhasil dikelola |
| Exception Push | Tidak ada koneksi |
   
**3.2.5 Admin melihat data Siswa**

|  |  |
|--|--|
| Nama Fungsi | View Data Siswa |
| Xref | Bagian 2.2.5, View Data Siswa |
| Trigger | Membuka Aplikasi |
| Precondition | Halaman Data Siswa |
| Basic Path | 1. Admin mengklik navbar di sebelah kiri yang ada icon Siswa <br> 2. Sistem akan menampilkan Data Siswa |
| Alternative | Tidak ada |
| Post Condition | Admin melihat Data Siswa |
| Exception Push | Tidak ada koneksi |
   
**3.2.6  Admin mengelola data Guru**

|  |  |
|--|--|
| Nama Fungsi | Mengelola data Guru |
| Xref | Bagian 2.2.4, Mengelola data Guru |
| Trigger | Membuka Aplikasi |
| Precondition | Halaman utama admin |
| Basic Path | 1. Admin melakukan input data Guru <br> 2. Admin mengklik tombol simpan <br> 3. Sistem menyimpan data Guru <br> 4. Bila data sudah ada sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Data Guru berhasil dikelola |
| Exception Push | Tidak ada koneksi |

**3.2.7 Admin melihat data Guru**

|  |  |
|--|--|
| Nama Fungsi | View Data Guru |
| Xref | Bagian 2.2.5, View Data Guru |
| Trigger | Membuka Aplikasi |
| Precondition | Halaman Data Siswa |
| Basic Path | 1. Admin mengklik navbar di sebelah kiri yang ada icon Guru <br> 2. Sistem akan menampilkan Data Guru |
| Alternative | Tidak ada |
| Post Condition | Admin melihat Data Guru |
| Exception Push | Tidak ada koneksi |
   
3.3 Struktur Detail Kebutuhan Non-Fungsional
----------

**3.3.1 Logika Struktur Data**
Struktur data logika pada sistem Aplikasi Penghubung Individu Berkebutuhan Khusus terdapat struktur Database yang dijelaskan menggunakan ERD.

![enter image description here](https://github.com/algrennn/Framework1/blob/81df7e092814406b0cf73d0674508a7d2814be9a/Image%20SRS/ERDD.jpg)

**Tabel Siswa**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| Id_siswa| int | Nomer auto increment Id_user|
| NAMA_SISWA | varchar |  |
| KELAS_SISWA|  varchar |  |
| TELP_SISWA | varchar |  |
| STATUS_SISWA | varchar |  |


**Tabel Guru**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| Id_guru| int | Nomer auto increment Id_user|
| NAMA_GURU| varchar |  |
| KELAS_GURU|  varchar |  |
| TELP_GURU | varchar |  |
| STATUS_GURU | varchar |  |

**Tabel View*

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| Id_view| int | Nomer auto increment Id_user|
| WAKTU_VIEW| varchar |  |







