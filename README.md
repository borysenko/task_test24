Для запуска проекта необходимо собрать vendor
```
composer install
```
Выполнить миграции
```
php artisan migrate
```
Запустить Node
```
npm install
```
```
npm run dev
```
Для генерации новостей на разных языках воспользуйтесь коммандой:
Код языка долже состоять только из двух символов!
```
php artisan app:generation-news ru en by uk
```
Фронтенд представляет из себя swagger в котором описаны методы апи и которые можно протестировать.
В файл public/js/api.yaml пропишите урл локального домена
```
servers:
  - url: http://laravel.loc/api
    description: local server
```
