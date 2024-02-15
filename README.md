<center><h1>SIKAMU (Sistem Keamanan Masyarakat Umum)</h1></center>
<br>

# Cara Instalasi :

## 1. Unduh dan ekstrak file ZIP aplikasi

## 2. Buka di text editor kesayangan kalian

## 3. Buka terminal pada text editor dan jalankan 2 perintah berikut :

-   ### `npm install`
-   ### `composer install`

## 4. Nyalakan server localhost seperti XAMPP

## 5. Buka phpmyadmin di browser dan buat sebuah database yang bernama _"sikamu"_

## 6. Untuk membuat tabel pada database, jalankan perintah berikut di terminal :

-   ### `php artisan migrate`
-   ### `php artisan db:seed --class=DatabaseSeeder`

## 7. Untuk menjalankan aplikasi, ketik perintah berikut di terminal :

-   ### `php artisan serve`

## 8. Secara default, aplikasi sudah membuatkan 2 buah akun sebagai contoh, yaitu :

-   ### Akun admin :
    -   ### `Username : admin@gmail.com`
    -   ### `Password : admin123`
-   ### Akun user :
    -   ### `Username : user@gmail.com`
    -   ### `Password : user123`
