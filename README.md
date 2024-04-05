# CRUD for Laravel 11
<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>
<p align="center">
    <img src="https://img.shields.io/badge/PHP-8.2-8892BF" alt="PHP">
    <img src="https://img.shields.io/badge/Laravel-11.0-FF2D20" alt="Laravel">
    <img src="https://img.shields.io/badge/Jetstream-5.0-FF2D20" alt="Jetstream">
    <!-- Add other badges here -->
</p>

## About the application

This project is an example of a CRUD (Create, Read, Update, Delete) application with an API developed in Laravel 11. The application allows basic operations on a database, such as adding, reading, updating, and deleting records.

## Features

- **Create, Read, Update, and Delete (CRUD) through an API:** The application allows basic operations of creating, reading, updating, and deleting records through a RESTful API.
- **Credential authentication to generate access tokens:** It uses Laravel sanctum to provide credential authentication and generate access tokens, allowing users to authenticate and access the API's protected resources.
- **Uses Laravel:** The application is built on Laravel, a modern and powerful PHP framework that facilitates the development of robust and scalable web applications.
- **Environment file for configuration:** Includes an environment file (.env) that allows the application to be easily configured according to the user's needs, such as database configuration, application environment, and API keys.

## Installation

1. Clone this repository: `git clone https://github.com/moypulido/laravel11crud.git`
2. Install the dependencies: `composer install`
3. Copy the example environment file and modify it according to your needs: `cp .env.example .env`
4. Generate an application key: `php artisan key:generate`
5. Run the migrations to create the database structure: `php artisan migrate`

## Usage

--**Get an access token:**
```bash
curl -X POST \
  http://your-domain.com/sanctum/token \
  -H 'Content-Type: application/json' \
  -d '{
    "email": "your@email.com",
    "password": "your-password"
}'
```

--**Get information about the authenticated user:**
```bash
curl -X GET \
    http://your-domain.com/user \
    -H 'Authorization: Bearer YOUR-ACCESS-TOKEN'
```

--**Get a list of students:**
```bash
curl -X GET \
  http://your-domain.com/students \
  -H 'Authorization: Bearer YOUR-ACCESS-TOKEN'
```

--**Create a new student:**
```bash
curl -X POST \
  http://your-domain.com/students \
  -H 'Content-Type: application/json' \
  -H 'Authorization: Bearer YOUR-ACCESS-TOKEN' \
  -d '{
    "name": "Student Name",
    "age": 20
}'
```

Contributions
This project has a purely educational focus. I am delighted to receive contributions from anyone who wants to learn or help me improve my skills.

Thank you for considering contributing to this application!

Code of Conduct
To ensure that this application's community is welcoming to all, please review and comply with the Code of Conduct.

License
This application is under the open-source software MIT license.