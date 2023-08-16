# Project IDPLAY

Sebuah Layanan internet dengan jangkauan yang luas dengan pemakaian internet sepuasnya selama 24jam! dan tentunya bisa bayar sesuai kebutuhan kamu!

## Tahap Installation

Install my-project with composer

```bash
  composer install
  cp .env.example .env
```

buat sebuah database baru dan samakan nama database dengan konfigurasi di .env

```bash
  php artisan key:generate
  php artisan migrate
```

jalankan seeder pada project ini :

```bash
  php artisan db:seed --class=AdminSeeder
```

jika dirasa sudah selesai semua, jalankan project :

```bash
  php artisan serve
```
