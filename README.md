<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requisitos

PHP
```
sudo apt install php8.1
```
Composer
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## Adicional

- **Tailwind**: https://tailwindcss.com/docs/guides/laravel

## Pasos

1. Crear un proyecto
```
composer create-project laravel/laravel <example-app>
```

2. Comandos de inicio
```
php artisan serve
```
```
npm run dev
```

## Directory Structure

- **app**: código principal de la aplicación.
- **bootstrap**: contiene el archivo *app.php* que arranca el framework. También contiene un directorio para la caché.
- **config**: archivos de configuración de la aplicación.
- **database**: database migrations, model factories, and seeds.
- **public**: assets como JavaScript, imágenes o CSS. También contiene el archivo *index.php* que es la entrada para todas las peticiones y configura el autoloading.
- **resources**: vistas y assets no compilados.
- **routes**: rutas definidas para la aplicación.
- **storage**: logs, plantillas Blade compiladas, ficheros de sesiones, ficheros de caché y otros ficheros generados por laravel.
- **tests**: test automatizados.
- **vendor**: dependencias de Composer
