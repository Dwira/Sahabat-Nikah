Sahabat-Nikah
=============

Sahabat Nikah Project

Installation
=============

1. Download & Install XAMPP
2. Buka folder C:\xampp\apache\conf, tambahkan folder baru bernama alias
3. Pindahkan sahabatnikah.conf dari github ke dalam folder alias (C:\xampp\apache\conf\alias) tersebut
4. Buka sahabatnikah.conf, ganti alamat directory sesuai dengan folder github di komputer anda
5. Buka file httpd.conf di C:\xampp\apache\conf, tambahkan Include conf/alias/* di baris paling akhir, save
6. Restart apache (Buka XAMPP Control Panel, Stop Apache, Tunggu sebentar, Start Apache)