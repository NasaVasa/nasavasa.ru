# [nasavasa.ru](http://nasavasa.ru)
### Личный сайт-визитка 
14 Aug 2022 - 2 Feb 2023

![](laravel/public/img/logo.png)
## Установка

1. Скопировать репозиторий
```bash
git clone https://github.com/NasaVasa/nasavasa.ru.git
```
2. Переходим в созданную папку
```bash
cd nasavasa.ru
````
3. Создать файл .env в корне проекта и заполнить его (пример в .env.example)

4. Запустить контейнеры
```bash 
docker-compose up -d
```
P.S. Так как в проекте используется docker, то для запуска проекта необходимо установить docker и docker-compose

P.P.S. Так как в docker-compose Laravel подключается к уже созданной сети nginx-net, то необходимо создать контейнер с nginx, который будет проксировать запросы на Laravel.

