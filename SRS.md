
<html>
<body>
<div align="center"><h1> Software Requirements Spesification</h1></div>

<p align="center"><b>Version 1.7 </b><br>
<p align="center">02 November 2023</b>
<p align="center">
<img src="https://raw.githubusercontent.com/jakariaaa27/RPL-D-1/master/Image/POLINDRA.png" width="250" height="250"/ >
</p>

<p align="center">Aplikasi Penghubung Individu Berkebutuhan Khusus<b><br>
</b>
<p align="center">Kelompok 1 <br>
 Joshua Algren           (2257301066)<br>
 Akbar Syahputra    (1603100)<br>
 Riffa Fayyaza      (1603101)<br><br><br>

<p align="center"><b>JProgram Studi Sistem Informasi</b><br>
<p align="center"><b>Politeknik Caltex Riau</b>
<p align="center"><b>2023</b>
</p>
</body>
</html>
 

**BAB I Pendahuluan**
----------
1.1 Tujuan
----------
Dokumen Software Requirement Specification (SRS) adalah dokumen spesifikasi perangkat lunak yang dirancang khusus untuk proyek "Aplikasi Penghubung Individu Berkebutuhan Khusus". Dokumen ini menjadi panduan teknis yang sangat penting bagi pengembangan perangkat lunak ini, yang bertujuan memfasilitasi hubungan antara individu berkebutuhan khusus yang sudah sukses dan individu berkebutuhan khusus lainnya. Aplikasi ini akan menjadi sarana yang sangat dibutuhkan bagi mereka untuk berinteraksi, berbagi pengalaman, dan memberikan dukungan satu sama lain. Dengan SRS ini, kami berharap dapat menciptakan solusi teknologi yang efektif dalam mencapai tujuan kemanusiaan ini dan membantu dalam membangun jaringan sosial yang kuat antara individu berkebutuhan khusus.

1.2   Lingkup
----------
Lingkup aplikasi "KuIstimewa" mencakup serangkaian fitur yang bertujuan untuk memfasilitasi interaksi dan pertukaran informasi antara individu berkebutuhan khusus yang sudah sukses dan individu berkebutuhan khusus lainnya. Aplikasi ini akan memungkinkan pendaftaran pengguna dengan akun pribadi, di mana mereka dapat mengisi profil mereka dengan informasi yang relevan. Proses ini akan memperhatikan aksesibilitas untuk memastikan penggunaan yang mudah bagi individu dengan berbagai jenis kebutuhan. Setelah pendaftaran, pengguna dapat membuat dan mengelola profil pribadi mereka, termasuk prestasi mereka, minat, dan preferensi. Aplikasi ini akan menggunakan algoritma pencocokan yang canggih untuk menghubungkan individu dengan minat dan pengalaman serupa, memungkinkan mereka untuk terhubung dan berinteraksi satu sama lain. Selain itu, aplikasi ini akan menyediakan berbagai fitur komunikasi, termasuk pesan teks, panggilan suara, dan konferensi video, untuk memfasilitasi interaksi yang mudah antara pengguna. Aplikasi juga akan menjadi sumber daya informasi dengan panduan, tutorial, dan acara yang relevan dengan kebutuhan mereka. Seluruh lingkup proyek ini akan mempertimbangkan keamanan dan privasi pengguna sebagai prioritas utama. Selain itu, aplikasi ini akan dirancang untuk pengembangan lanjutan, memungkinkan perluasan fungsionalitas di masa mendatang demi memenuhi kebutuhan lebih lanjut dari komunitas individu berkebutuhan khusus yang sudah sukses dan ingin berbagi pengalaman serta memberikan dukungan kepada rekan-rekan mereka.

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

Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah :
-  https://www.w3.org/WAI/
- Inclusive Design Patterns: Coding Accessibility into Web Design
- https://www.microsoft.com/design/inclusive/

1.5   Overview
----------

Bab selanjutnya yaitu menjelaskan sistem yang di terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.

**BAB II Gambaran umum**
----------
Dalam era globalisasi yang ditandai oleh pesatnya perkembangan teknologi, kami mengakui pentingnya pemanfaatan teknologi, khususnya dalam mendukung individu berkebutuhan khusus. Dalam konteks ini, kami mempersembahkan aplikasi "KuIstimewa" yang bertujuan untuk menjadi penghubung antara individu berkebutuhan khusus yang telah mencapai kesuksesan dan individu berkebutuhan khusus lainnya. Aplikasi ini dirancang dengan berfokus pada inklusi dan keberlanjutan komunikasi yang dapat membantu mereka dalam berinteraksi, berbagi pengalaman, dan memberikan dukungan satu sama lain.

Dalam kasus proyek ini, kami merancang dan mengembangkan sistem aplikasi "KuIstimewa" dengan memahami kebutuhan mendasar dari individu berkebutuhan khusus. Aplikasi ini akan memungkinkan pengguna untuk mendaftar dan mengisi profil pribadi mereka dengan informasi yang relevan. Setelah pendaftaran, aplikasi ini akan menggunakan algoritma pencocokan untuk menghubungkan individu dengan minat atau pengalaman serupa, memfasilitasi pertemuan mereka. Aplikasi "Mitra Kasih" akan memberikan berbagai fitur komunikasi, termasuk obrolan teks, panggilan suara, dan konferensi video, untuk memungkinkan interaksi yang mudah dan efektif.

Selain itu, aplikasi ini akan menyediakan akses ke berbagai sumber daya, tutorial, dan informasi yang relevan untuk membantu pengguna dalam pengembangan keterampilan dan pengetahuan mereka. Keamanan dan privasi pengguna menjadi prioritas utama dalam perancangan aplikasi ini. Kami juga akan merancang aplikasi ini agar dapat dikembangkan lebih lanjut di masa mendatang sesuai dengan kebutuhan pengguna yang berkembang. Dengan "KuIstimewa", kami bertujuan untuk menciptakan platform yang inklusif dan mendukung bagi individu berkebutuhan khusus untuk saling memberikan dukungan, berinteraksi, dan tumbuh bersama.

2.1   Perspektif produk
----------
Aplikasi 'KuIstimewa' adalah sebuah platform yang dirancang untuk menghubungkan individu berkebutuhan khusus yang telah mencapai sukses dan individu berkebutuhan khusus lainnya. Aplikasi ini memiliki tiga jenis pengguna, yaitu pengguna reguler, pengguna berkebutuhan khusus yang telah mencapai kesuksesan, dan admin. Setiap pengguna memiliki peran dan akses yang berbeda dalam aplikasi ini. Pengguna berkebutuhan khusus yang telah sukses dapat berkontribusi dengan berbagi pengalaman dan memberikan dukungan, sementara pengguna berkebutuhan khusus lainnya dapat mencari inspirasi dan koneksi yang bermanfaat. Admin bertugas mengelola dan memastikan kelancaran operasional aplikasi ini.

**2.1.1 Antarmuka sistem**

![enter image description here](https://raw.githubusercontent.com/algrennn/Framework1/master/Image%20SRS/UseCaseDiagram1.jpg)

**2.1.2 Antarmuka pengguna**

   - **Mockup Admin ( Website )**

|  |  |
|--|--|
| ![enter image description here](https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/LamanLogin.png) Pada halaman login admin diminta untuk mengisi username dan password.
| ![enter image description here](https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/lamanUtama.png) Pada Laman Utama admin terdapat panel-panel yang menunjukkan Motivator yang sudah bekerjasama, laman home, search icon, notification icon, dan myProfile icon.|
| ![enter image description here](https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/LamanProfile.png) Pada Halaman data lengkap Motivator, terdapat data Motivator yang lebih lengkap dan detail
| ![enter image description here](https://github.com/algrennn/Framework1/blob/ea7bdcacabaa63a0f2579070bc664e43a591c2b5/Image%20SRS/lamanRegister.png) Pada halaman register dapat mendaftar akun baru| |
 
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
   
**2.2.1 Pengguna Login**

Use Case: Login
Deskripsi Singkat : 
Pengguna melakukan login terlebih dahulu sebelum masuk ke tampilan home
1. Pengguna melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan

Xref: Bagian 3.2.1, Login Pengguna
   
**2.2.2 Pengguna melihat data Motivator**

Use Case: Melihat data Motivator
Deskripsi Singkat:
Pengguna dapat melihat data Motivator yang ada.
Deskripsi Langkah-langkah:
1. Pengguna menekan arrowbar yang ada sesuai gambar Motivator yang diinginkan
2. Sistem akan menampilkan hasil data Motivator yang dipilih.

**2.2.3 Pengguna interaksi dengan Motivator**

Use Case: Interaksi dengan Motivator
Deskripsi Singkat:
Pengguna dapat berinteraksi dengan Motivator yang ada melalui contact person.
Deskripsi Langkah-langkah:
1. Pengguna menekan simbol contact person seperti Email
2. Sistem akan menampilkan template pesan yang akan dikirim
   kepada Motivator dan akan disesuaikan dengan identitas anda.

**2.2.5 Admin login**

Use Case: Login
Deskripsi Singkat:
Admin melakukan login dengan memasukan username password.
Deskripsi Langkah-langkah:
1. Admin melakukan login dengan username dan password
2. Sistem melakukan validasi login
3. Bila sukses sistem akan mengarahkan ke halaman beranda
4. Bila gagal sistem akan menampilkan peringatan

Xref: Bagian 3.2.3, Login admin
      
**2.2.6 Admin Mengelola data Motivator**

Use Case: Mengelola data Motivator
Deskripsi Singkat:
Admin melakukan pengelolaan data Motivator dan sistem menyimpan data pada database.
Deskripsi Langkah-langkah:
1. Admin melakukan input data motivator seperti pekerjaan, agama, pendidikan, riwayat sakit, dll.
2. Admin mengklik tombol simpan.
3. Sistem menyimpan data Motivator.
4. Bila data sudah ada sistem akan menampilkan peringatan

Xref: Bagian 3.2.4, Mengelola data kependudukan

**2.2.7 Admin melihat data Motivator**

Use Case: Melihat data Motivator
Deskripsi Singkat:
Admin dapat melihat data Motivator yang ada.
Deskripsi Langkah-langkah:
1. Admin menekan arrowbar yang ada sesuai gambar Motivator yang diinginkan
2. Sistem akan menampilkan hasil data Motivator yang dipilih.

Xref: Bagian 3.2.5, Melihat data Motivator

**2.2.8 Admin melihat data Pengguna**

Use Case: Melihat data Motivator
Deskripsi Singkat:
Admin dapat melihat data Motivator yang ada.
Deskripsi Langkah-langkah:
1. Admin menekan navbar yang akan menampilkan list data Pengguna
2. Sistem akan menampilkan hasil data Pengguna yang ada.
    
**2.2.9 Admin mengelola Pengguna**

Use Case: Mengelola data pengguna
Deskripsi Singkat:
Sistem akan menampilkan form user dan admin dapat menambah user sesuai kebutuhan.
Deskripsi Langkah-langkah:
1. Admin mengklik manajemen user, lalu mengisi form kemudian klik tambah
2. Sistem akan menyimpan data user ke database dan menampilkan data user yang dipilih.
3. Admin bisa menghapus hak akses user.

Xref: Bagian 3.2.7, Mengelola data pengguna

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

BAB III Requirement Specification
----------
3.1 Persyaratan Antarmuka Eksternal
----------
Salah satu cara mengakses aplikasi ini yaitu dengan hak akses yang di berikan oleh admmin, login melalui aplikasi ini dengan mencantumkan username kemudian sistem akan mencocokkan username. Setelah login berhasil maka akan dapat menggunakan fitur fitur yang ada pada aplikasi.
      
3.2 Functional Requirement
----------
Logika Struktur terdapat pada bagian 3.3.1
      
**3.2.1 Pengguna Login**

|  |  |
|--|--|
| Nama Fungsi | Login |
| Xref | Bagian 2.2.1, Login Pengguna |
| Trigger | Membuka Aplikasi Penghubung Individu Berkebutuhan Khusus |
| Precondition | Halaman login |
| Basic Path | 1. Pengguna mengisi form login dengan username dan password <br> 2.Pengguna mengklik tombol login <br> 3. Sistem melakukan validasi login <br> 4. Bila sukses sistem akan mengarahkan ke halaman beranda <br> 5. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Pengguna dapat login dan mengakses Aplikasi Penghubung Individu Berkebutuhan Khusus|
| Exception Push | Username dan password salah |
      
**3.2.2 Pengguna melihat Data Motivator**

|  |  |
|--|--|
| Nama Fungsi | View Data Motivator |
| Xref | Bagian 2.2.2, View Data Motivator |
| Trigger | Membuka Aplikasi Penghubung Individu Berkebutuhan Khusus |
| Precondition | Halaman Data Motivator |
| Basic Path | 1. Pengguna mengklik navbar yang ada dibawah gambar Motivator <br> 2. Sitem akan menampilkan Data Motivator |
| Alternative | Tidak ada |
| Post Condition | Pengguna melihat Data Motivator |
| Exception Push | Tidak ada koneksi |
   
**3.2.3 Admin login**

|  |  |
|--|--|
| Nama Fungsi | Login |
| Xref | Bagian 2.2.3, Login admin |
| Trigger | Membuka Aplikasi Penghubung Individu Berkebutuhan Khusus |
| Precondition | Halaman login admin |
| Basic Path | 1. Admin melakukan login dengan username dan password <br> 2. Sistem melakukan validasi login <br> 3. Bila sukses sistem akan mengarahkan ke halaman beranda <br> 4. Bila gagal sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Admin berhasil login dan mengakses Aplikasi Penghubung Individu Berkebutuhan Khusus |
| Exception Push | Username dan password salah |
   
**3.2.4 Admin mengelola Data Motivator**

|  |  |
|--|--|
| Nama Fungsi | Mengelola data Motivator |
| Xref | Bagian 2.2.4, Mengelola data Motivator |
| Trigger | Membuka Aplikasi Penghubung Individu Berkebutuhan Khusus |
| Precondition | Halaman utama admin |
| Basic Path | 1. Admin melakukan input data Motivator seperti pekerjaan, agama, pendidikan, riwayat penyakit, dan lain lain <br> 2. Admin mengklik tombol simpan <br> 3. Sistem menyimpan data Motivator <br> 4. Bila data sudah ada sistem akan menampilkan peringatan |
| Alternative | Tidak ada |
| Post Condition | Data Motivator berhasil dikelola |
| Exception Push | Tidak ada koneksi |
   
**3.2.5 Admin melihat data Motivator**

|  |  |
|--|--|
| Nama Fungsi | View Data Motivator |
| Xref | Bagian 2.2.5, View Data Motivator |
| Trigger | Membuka Aplikasi Penghubung Individu Berkebutuhan Khusus |
| Precondition | Halaman Data Motivator |
| Basic Path | 1. Admin mengklik navbar yang ada dibawah gambar Motivator <br> 2. Sitem akan menampilkan Data Motivator |
| Alternative | Tidak ada |
| Post Condition | Admin melihat Data Motivator |
| Exception Push | Tidak ada koneksi |
   
**3.2.6  Admin mengelola Pengguna**

|  |  |
|--|--|
| Nama Fungsi | Mengelola user |
| Xref | Bagian 2.2.7, Mengelola user |
| Trigger | Membuka Aplikasi Penghubung Individu Berkebutuhan Khusus | 
| Precondition | halaman utama admin |
| Basic Path | 1. Sistem menampilkan form.<br>2. Admin mengisi form user identitas Pengguna lalu kemudian klik tombol simpan.<br>3. Sistem akan menyimpan data user ke database.  |
| Post Condition | Halaman user |
| Exception Push | Tidak ada koneksi, data belum diinput |

**3.2.7 Admin melihat data Pengguna**

|  |  |
|--|--|
| Nama Fungsi | View Data Pengguna |
| Xref | Bagian 2.2.5, View Data Motivator |
| Trigger | Membuka Aplikasi Penghubung Individu Berkebutuhan Khusus |
| Precondition | Halaman Data Motivator |
| Basic Path | 1. Admin mengklik navbar yang ada di kiri untuk menampilkan list data Pengguna <br> 2. Sistem akan menampilkan Data Pengguna |
| Alternative | Tidak ada |
| Post Condition | Admin melihat Data Pengguna |
| Exception Push | Tidak ada koneksi |
   
3.3 Struktur Detail Kebutuhan Non-Fungsional
----------

**3.3.1 Logika Struktur Data**
Struktur data logika pada sistem Aplikasi Penghubung Individu Berkebutuhan Khusus terdapat struktur Database yang dijelaskan menggunakan ERD.

![enter image description here](https://github.com/algrennn/Framework1/blob/81df7e092814406b0cf73d0674508a7d2814be9a/Image%20SRS/ERDD.jpg)

**Tabel User**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| Id_user| int | Nomer auto increment Id_user|
| NAMA_USER | varchar |  |
| STATUS_USER | varchar |  |

**Tabel Lihat**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| ID_HISTORY | int | Nomer auto increment ID_HISTORY|
| WAKTU_LIHAT | varchar | |
| ID_USER | int | |
| ID_MOTIVATOR | int | |

**Tabel Interaksi Online**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| ID_INTERAKSI| int | Nomer auto increment ID_INTERAKSI|
| WAKTU_LIHAT | varchar |  |
| ID_USER | int | |
| ID_MOTIVATOR | int | |

**Tabel Motivator**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| ID_MOTIVATOR| int | Nomer auto increment ID_MOTIVATOR|
| NAMA_MOTIVATOR | varchar | |
| DESKRIPSI_MOTIVATOR | varchar | |

**Tabel Kategori**

| Data Item | Type | Deskripsi |
| ------ | ------ | ------ |
| ID_KATEGORI| int | Nomer auto increment ID_KATEGORI|
| NAMA_KATEGORI | varchar |  |





