<p align="center"><img src="https://raw.githubusercontent.com/Programmer-2024/Public-Complaints/refs/heads/master/public/images/adu.png?token=GHSAT0AAAAAACVWLE5F6XH7ZBZVPN7QDV2AZYODHNA" style="width: 160px; height: auto !important;" alt="Public Complaints Logo"></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Public Complaints

Public Complaints adalah aplikasi berbasis web yang memungkinkan pengguna untuk melaporkan keluhan publik dengan mudah.

## Prerequisites

Sebelum memulai, pastikan Anda memiliki:

- PHP >= 8.2
- Composer
- MySQL atau database lain yang didukung
- Node.js dan npm (jika menggunakan frontend assets)

## Langkah-langkah Instalasi

Ikuti langkah-langkah berikut untuk meng-clone proyek ini dan menjalankannya di lokal:

### 1. Clone Repository

Clone repositori ini ke mesin lokal Anda menggunakan git:

```bash
git clone https://github.com/Programmer-2024/Public-Complaints.git
```

## Jalankan di Local

Setelah berhasil cloning project maka ikuti langkah-langkah berikut ini:

- cd Public-Complaints
- composer install
- cp .env.example .env
- Edit terlebih dahulu koneksi ke databse
- php artisan key:generate
- php artisan migrate --seed
- php artisan serve
- silahkan buka http://localhost:8000