# CodeIgniter4

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)
## Apa itu codeIgniter?

![alt text](https://github.com/DwiEllya/CodeIgniter4/blob/main/assets/film/CodeIgniter-1024x576.png?raw=true)

CodeIgniter adalah Kerangka Pengembangan Aplikasi - toolkit - untuk orang yang membangun situs web menggunakan PHP. Tujuannya adalah untuk memungkinkan Anda mengembangkan proyek jauh lebih cepat daripada jika Anda menulis kode dari awal, dengan menyediakan kumpulan pustaka yang kaya untuk tugas-tugas yang biasanya dibutuhkan, serta antarmuka sederhana dan struktur logis untuk mengakses pustaka ini. CodeIgniter memungkinkan Anda secara kreatif fokus pada proyek Anda dengan meminimalkan jumlah kode yang diperlukan untuk tugas tertentu.

Jika memungkinkan, CodeIgniter dibuat sefleksibel mungkin, memungkinkan Anda untuk bekerja dengan cara yang Anda inginkan, tidak dipaksa bekerja dengan cara tertentu. Kerangka dapat memiliki bagian inti yang mudah diperpanjang atau diganti sepenuhnya untuk membuat sistem bekerja sesuai kebutuhan Anda. 

## Apakah CodeIgniter Tepat untuk Anda?
CodeIgniter tepat untuk Anda jika:

- Anda menginginkan kerangka kerja dengan footprint kecil.
- Anda membutuhkan kinerja yang luar biasa.
- Anda menginginkan kerangka kerja yang memerlukan konfigurasi hampir nol.
- Anda menginginkan kerangka kerja yang tidak mengharuskan Anda menggunakan baris perintah.
- Anda menginginkan kerangka kerja yang tidak mengharuskan Anda mematuhi aturan pengkodean yang ketat.
- Anda tidak tertarik dengan perpustakaan monolitik berskala besar seperti PEAR.
- Anda tidak ingin dipaksa untuk mempelajari bahasa template (walaupun pengurai template tersedia secara opsional jika Anda menginginkannya).
- Anda menghindari kerumitan, menyukai solusi sederhana.

## Install CodeIgniter4
✨Menggunakan Composer✨

✨Menggunakan Cara Manual✨

## Konsep MVC
![alt text](https://github.com/DwiEllya/CodeIgniter4/blob/main/assets/film/MVC.jpg?raw=true)
Model View Controller atau yang dapat disingkat MVC adalah sebuah pola arsitektur dalam membuat sebuah aplikasi dengan cara memisahkan kode menjadi tiga bagian yang terdiri dari:
- Model,
Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database.
- View,
Bagian yang bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).
- Controller,
Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.

## Membuat data film menggunakan CodeIgniter
1. Membuat file baru dengan nama ”Film.php” didalam folder App/Controllers. Untuk membuat file baru dapat mengetikkan perintah diterminal “php spark make:controllers Film”. Atau bisa juga dengan cara klik kanan dan “new file”.
2. Membuat file baru dengan nama ”FilmModel.php” didalam folder App/Models. . Untuk membuat file baru dapat mengetikkan perintah diterminal “php spark make:Model  FilmFilm”. Atau bisa juga dengan cara klik kanan dan “new file”.
![alt text](?raw=true)
3. Membuat Folder Film pada View, kemudian didalam folder tersebut buat sebuah file dengan nama Index.php.
![alt text](?raw=true)
4. Ketikkan perintah source code berikut pada file Film.php 
![alt text](?raw=true)
5. Ketikkan Perintah berikut pada FilmModel.php . yang menyimpan data-data film.
![alt text](?raw=true)
6. Ketikkan perintah berikut pada index.php.
![alt text](?raw=true)
7. sebelum menjalankan ke web browser jalankan perintah ”php spark serve” pada terminal.
![alt text](?raw=true)
8. akses localhost:8080/Film , apabila tampilan seperti ini maka terjadi kesalahan.
![alt text](?raw=true)
9. cara mengatasinya yaitu dengan menambahkan tanda titik pada env, menghapus ”#” dan ganti menjadi development.
![alt text](?raw=true)
10. pada file router/App/Config hapus tanda ”//” dan ubah menjadi true.
![alt text](?raw=true)
11. akses kembali localhost:8080/film . 
![alt text](?raw=true)
12. berhasil menampilkan data.
![alt text](?raw=true)

