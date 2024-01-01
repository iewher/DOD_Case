# Проект DOD_Case "Интернет-магазин кроссовок"

Этот проект представляет собой интернет-магазин, разработанный с использованием PHP, Symfony, CSS и базы данных PostgreSQL. Здесь представлено краткое руководство по установке, настройке.

## Требования

1. PHP 8.1.2
2. Composer
3. Symfony 6.4.1
4. PostgreSQL

## Установка

1. Клонировать репозиторий:

    ```bash
    git clone https://github.com/iewher/DOD_Case.git
    ```

2. Перейти в директорию проекта:

    ```bash
    cd DOD_Case
    ```

3. Установить зависимости:

    ```bash
    composer install
    ```

4. Создать базу данных:

    ```bash
    php bin/console make:migrations
    ```

5. Применить миграции:

    ```bash
    php bin/console doctrine:migrations:migrate
    ```

6. Запустить встроенный веб-сервер Symfony:

    ```bash
    symfony server:start
    ```

7. Запустить базу данных:

    ```bash
    sudo docker-compose up
    ```

8. Открыть веб-браузер и перейти по адресу [http://localhost:8000](http://localhost:8000)

## Планы на будущее

1. Регистрация/Авторизация
2. Провал в карточку
3. Поиск

## Обзор

<img src="public/DOD_Case.png" alt="DOD_Case"/>