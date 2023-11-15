# Lab7Web

Nama        : Zahra Nurhaliza

NIM         : 312210364

Kelas       : TI.22.A4


## Langkah-langkah Praktikum

1. *Install XAMPP*
Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan direktorinya (misal: d:\xampp).

2. *Menjalankan Web Server*
Untuk menjalankan web server dari menu XAMPP Control.

![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.1.png)

• Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost
Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.
• Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\
• Database MySQL
Direktori: \xampp\mysql\
Manajemen database: http://localhost/phpmyadmin

3. *Memulai PHP*
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.2.png)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/

![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.3.png)


### 1. PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
</body>
</html>
```
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php

Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.4.png)


### 2. Variable PHP
Menambahkan variable pada program.
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
    
    <h2>Menggunakan Variabel</h2>
    <?php
    $nim = "0411500400";
    $nama = 'Abdullah';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
</body>
</html>
```
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php

Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.5.png)


### 3. Predefine Variable $_GET
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>
```
Untuk mengaksesnya gunakan URL:
http://localhost/lab7_php_dasar/latihan2.php?nama=Zahra

Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.6.png)


### 4. Membuat Form Input
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
```
Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.7.png)


### 5. Operator
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Operator</h1>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
</body>
</html>
```
Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.8.png)


### 6. Kondisi IF
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Kondisi IF</h1>
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Senin";
    } else {
    echo "Selasa";
    }
?>
</body>
</html>
```
Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.9.png)


### 7. Kondisi Switch
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Kondisi Switch</h1>
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
    case "Sunday":
    echo "Minggu";
    break;
    case "Monday":
    echo "Senin";
    break;
    case "Tuesday":
        echo "Selasa";
        break;
        default:
        echo "Sabtu";
    }
    ?>
</body>
</html>
```
Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.10.png)


### 8. Perulangan for
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Perulangan For</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
</body>
</html>
```
Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.11.png)


### 9. Perulangan while
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Perulangan While</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
    ?>
</body>
</html>
```
Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.12.png)


### 10. Perulangan dowhile
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Perulangan Dowhile</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    } while ($i<=10);
    ?>
</body>
</html>
```
Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.13.png)



## Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

Output
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.14.png)
![image](https://github.com/ZahraNurhaliza/Lab6Web/blob/main/screenshot/ss.15.png)

# SELESAI