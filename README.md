<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Описание задачи

Необходимо написать простейшее API для каталога товаров.


Модель товара содержит:

- Название товара.
- Уникальный идентификатор в каталоге.
- Категория товара (строка)
- Цена товара.

API должно содержать маршруты:

- Добавление нового товара в каталог.
- Изменение товара по уникальному ключу. Изменяться может любое свойство. Свойства должны валидироваться на ваше усмотрение.
- Показ списка товаров с пажинацией и возможностью отбора по заданным категориям.
- Показ списка категорий товаров, с количеством наименований товара в каждой.

## Быстрый Старт


### Установка:

``` composer install ```

### Обязательно измените файл .env:

 DB_HOST=localhost  
 DB_DATABASE=homestead  
 DB_USERNAME=homestead  
 DB_PASSWORD=secret   

### Генерация ключа приложения:

``` php artisan key:generate ```

### Создание миграций и заполнение баз:

``` php artisan migrate --seed ```

### Запустить сервер:

``` php artisan serve ```

### Проверить список роутов:

``` php artisan route:list ```
