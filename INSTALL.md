# Panduan Instalasi Project Corelasi

Berikut adalah langkah-langkah untuk menjalankan project **Corelasi** (Laravel + Node.js) di komputer lokal Anda.

## 1. Persiapan (Prerequisites)
Pastikan software berikut sudah terinstall di komputer Anda:
- **XAMPP** (dengan PHP >= 8.1 dan MySQL).
- **Composer** (untuk dependensi Laravel).
- **Node.js** (versi LTS, untuk Microservice).
- **Terminal** (CMD, PowerShell, atau Git Bash).

---

## 2. Setup Database
1.  Buka **XAMPP Control Panel**, nyalakan **Apache** dan **MySQL**.
2.  Buka browser, akses `http://localhost/phpmyadmin`.
3.  Buat database baru dengan nama: `corelasi`.

---

## 3. Setup Backend (Laravel)
Lakukan langkah ini di folder utama project (root).

1.  **Install Dependensi PHP**:
    ```bash
    composer install
    ```
    *Jika terjadi error "platform check", jalankan: `composer install --ignore-platform-reqs`*

2.  **Setup Environment**:
    - Copy file `.env.example` lalu ubah namanya menjadi `.env`.
    - Buka file `.env`, pastikan konfigurasi database sesuai:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=corelasi
      DB_USERNAME=root
      DB_PASSWORD=
      ```

3.  **Generate Key Aplikasi**:
    ```bash
    php artisan key:generate
    ```

4.  **Migrasi & Seeding Data**:
    Masukkan tabel dan data dummy awal ke database.
    ```bash
    php artisan migrate:fresh --seed
    ```

5.  **Jalankan Server Laravel**:
    ```bash
    php artisan serve
    ```
    Backend akan berjalan di: `http://127.0.0.1:8000`

---

## 4. Setup Microservice (Node.js)
Lakukan langkah ini di folder `node-service`.

1.  Buka terminal baru (jangan matikan terminal Laravel).
2.  Masuk ke folder service:
    ```bash
    cd node-service
    ```

3.  **Install Dependensi Node**:
    ```bash
    npm install
    ```

4.  **Setup Environment**:
    - Buat file baru bernama `.env` di dalam folder `node-service`.
    - Isi dengan konfigurasi database yang sama:
      ```env
      DB_HOST=127.0.0.1
      DB_USERNAME=root
      DB_PASSWORD=
      DB_DATABASE=corelasi
      PORT=3000
      ```

5.  **Jalankan Service**:
    ```bash
    npm start
    ```
    Service API akan berjalan di: `http://localhost:3000`

---

## 5. Cara Penggunaan
Setelah kedua server berjalan (Laravel di 8000, Node di 3000):

1.  Buka browser dan akses: `http://127.0.0.1:8000`.
2.  **Login Guru**:
    - Username: `nip123`
    - Password: `password`
3.  Fitur yang tersedia:
    - **Dashboard**: Melihat jadwal hari ini.
    - **Jadwal Mengajar**: Absensi & BAP.
    - **Materi/Tugas**: Upload materi & grading.
    - **Notifikasi**: Cek nilai/tugas baru (Realtime/Database).

**Selamat Mengoding! 🚀**
