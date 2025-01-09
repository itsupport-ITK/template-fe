<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Kurikulum FrontEnd

# Menjalankan proyek

```
   git clone 
```
```
   cd project
```
```
   composer install
```
```
   npm install
```
```
   npm run build
```
```
   php artisan key:generate
```

# Guide

### Components

Semua tag html yang digunakan berulang, perlu dibuatkan [component](https://laravel.com/docs/10.x/blade#components) 
```
php artisan make:component ComponentName
```

### Modify Bootstrap
Melakukan perubahan warna atau style default [bootstrap](https://getbootstrap.com/docs/5.3/customize/overview/) bisa dilakukan pada file 
```
resources/scss/app.scss
```

### Generate Repository

Membuat file repository
```
php artisan make:repository NamaFolder/NamaRepository
```
Repository digunakan untuk mengolah data sebelum dikembalikan ke controller, tujuan utamanya agar fungsi di dalam bisa direuse kembali

### Translation

Semua text/pesan yang ada di sistem, harap di daftarkan di dalam file sesuai fungsinya.
```
lang/en
```
dan
```
lang/id
```

### Enums/Constant

Nilai yang bersifat konstan seperti contohnya status, harap dibuatkan file dan class di dalam folder
```
app/Enums
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).