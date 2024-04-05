# Nombre de tu aplicación
<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>
![PHP](https://img.shields.io/badge/PHP-8.2-8892BF)
![Laravel](https://img.shields.io/badge/Laravel-11.0-FF2D20)
![Jetstream](https://img.shields.io/badge/Jetstream-5.0-FF2D20)
![Sanctum](https://img.shields.io/badge/Sanctum-4.0-FF2D20)
![Tinker](https://img.shields.io/badge/Tinker-2.9-FF2D20)
![Livewire](https://img.shields.io/badge/Livewire-3.0-FF2D20)
![Faker](https://img.shields.io/badge/Faker-1.23-FF2D20)
![Pint](https://img.shields.io/badge/Pint-1.13-FF2D20)
![Sail](https://img.shields.io/badge/Sail-1.26-FF2D20)
![Mockery](https://img.shields.io/badge/Mockery-1.6-FF2D20)
![Collision](https://img.shields.io/badge/Collision-8.0-FF2D20)
![PHPUnit](https://img.shields.io/badge/PHPUnit-11.0-FF2D20)
![Ignition](https://img.shields.io/badge/Ignition-2.4-FF2D20)


## Acerca de la aplicación

Este proyecto es un ejemplo de una aplicación CRUD (Crear, Leer, Actualizar, Eliminar) con una API desarrollada en Laravel 11. La aplicación permite realizar operaciones básicas en una base de datos, como añadir, leer, actualizar y eliminar registros.

## Características

- **Crear, Leer, Actualizar y Eliminar (CRUD) a través de una API:** La aplicación permite realizar operaciones básicas de creación, lectura, actualización y eliminación de registros mediante una API RESTful.
- **Autenticación de credenciales para generar tokens de acceso:** Utiliza Laravel sanctum para proporcionar autenticación de credenciales y generar tokens de acceso, lo que permite a los usuarios autenticarse y acceder a los recursos protegidos de la API.
- **Utiliza Laravel:** La aplicación está construida sobre Laravel, un framework PHP moderno y potente que facilita el desarrollo de aplicaciones web robustas y escalables.
- **Archivo de entorno para configuración:** Incluye un archivo de entorno (.env) que permite configurar fácilmente la aplicación según las necesidades del usuario, como la configuración de la base de datos, el entorno de la aplicación y las claves de API.


## Instalación

1. Clona este repositorio: `git clone https://github.com/moypulido/laravel11crud.git`
2. Instala las dependencias: `composer install`
3. Copia el archivo de entorno de ejemplo y modifica según tus necesidades: `cp .env.example .env`
4. Genera una clave de aplicación: `php artisan key:generate`
5. Ejecuta las migraciones para crear la estructura de la base de datos: `php artisan migrate`

## Uso

--**Obtener un token de acceso:**
```bash
curl -X POST \
  http://tu-domino.com/sanctum/token \
  -H 'Content-Type: application/json' \
  -d '{
    "email": "tu@email.com",
    "password": "tu-contraseña"
}'
```

--**Obtener información del usuario autenticado:**
```bash
curl -X GET \
  http://tu-domino.com/user \
  -H 'Authorization: Bearer TU-TOKEN-DE-ACCESO'
```

--**Obtener lista de estudiantes:**
```bash
curl -X GET \
  http://tu-domino.com/students \
  -H 'Authorization: Bearer TU-TOKEN-DE-ACCESO'
```

--**Crear un nuevo estudiante:**
```bash
curl -X POST \
  http://tu-domino.com/students \
  -H 'Content-Type: application/json' \
  -H 'Authorization: Bearer TU-TOKEN-DE-ACCESO' \
  -d '{
    "name": "Nombre del Estudiante",
    "age": 20
}'
```

## Contribuciones

Este proyecto tiene un enfoque puramente educativo. Estoy encantado de recibir contribuciones de cualquier persona que desee aprender o ayudarme a mejorar mis habilidades.

¡Gracias por considerar contribuir a esta aplicación!

## Código de Conducta

Para garantizar que la comunidad de esta aplicación sea acogedora para todos, por favor revisa y cumple con el [Código de Conducta](https://laravel.com/docs/contributions#code-of-conduct).

## Licencia

Esta aplicación está bajo la licencia de software de código abierto [MIT license](https://opensource.org/licenses/MIT).