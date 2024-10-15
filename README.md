<p align="center">
<a href='https://postimg.cc/bSgsxJFd' target='_blank'><img src='https://i.postimg.cc/bSgsxJFd/adu.png' style="width: 260px; height: auto !important;" alt='adu'/></a></p>

<p align="center">
<a href='https://postimg.cc/DWckyXWW' target='_blank'>
<img src="https://i.postimg.cc/s2kVmPsJ/Whats-App-Image-2024-10-15-at-14-44-00.jpg" style="width: 100%; height: auto !important;" alt="Public Complaints Picture">
</a>
</p>

## About Public Complaints

Public Complaints is a web-based application that allows users to easily report public complaints.

## Prerequisites

Before you start, make sure you have:

- PHP >= 8.2
- Composer
- MySQL or other supported database

## Installation Steps

Follow these steps to clone this project and run it locally:

### 1. Clone Repository

Clone repositori ini ke mesin lokal Anda menggunakan git:

```bash
git clone https://github.com/Programmer-2024/Public-Complaints.git
```

## 2. Run on Local

After successfully cloning the project, follow these steps:

- cd Public-Complaints
- composer install
- cp .env.example .env
- edit the connection to the database first
- php artisan key:generate
- php artisan migrate --seed
- php artisan serve
- please open http://localhost:8000