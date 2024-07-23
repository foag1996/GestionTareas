<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto de Gestión de Tareas - Laravel 10 + Open Admin

Este proyecto es una aplicación de gestión de tareas desarrollada utilizando Laravel 10 y Open Admin, con MySQL como base de datos.

## Descripción del Proyecto

El sistema de Gestión de Tareas permite a los usuarios:
- Crear, ver, actualizar y eliminar tareas
- Filtrar tareas por título o descripción
- Mostrar tareas completadas y no completadas mediante filtros
- Gestionar tareas a través de una interfaz de administración intuitiva

## Requisitos previos

Asegúrate de tener instalado lo siguiente en tu sistema:

- PHP 8.1 o superior
- Composer
- MySQL

## Pasos de instalación

1. Clonar el repositorio:
   ```
   git clone [URL_DEL_REPOSITORIO]
   cd [NOMBRE_DEL_PROYECTO]
   ```

2. Instalar dependencias de PHP:
   ```
   composer install
   ```

3. Copiar el archivo de configuración:
   ```
   cp .env.example .env
   ```

4. Generar la clave de la aplicación:
   ```
   php artisan key:generate
   ```

5. Configurar la base de datos:
   Edita el archivo `.env` y configura los detalles de tu base de datos MySQL:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

6. Ejecutar las migraciones:
   ```
   php artisan migrate
   ```

7. Instalar Open Admin:
   ```
   composer require open-admin-org/open-admin
   php artisan admin:install
   ```

8. Iniciar el servidor de desarrollo:
   ```
   php artisan serve
   ```

Ahora deberías poder acceder a tu aplicación en `http://localhost:8000` y al panel de administración de Open Admin en `http://localhost:8000/admin`.

## Configuración adicional

- Para personalizar Open Admin, consulta la [documentación oficial](https://open-admin.org/).
- Asegúrate de configurar los permisos y roles según las necesidades de tu aplicación.

## API Documentation

Este proyecto incluye una API RESTful que puede ser probada utilizando el API Tester incorporado de Open Admin o herramientas externas como Postman.

### Rutas de la API

| Método HTTP | Ruta                | Descripción                           |
|-------------|---------------------|---------------------------------------|
| GET         | `/api/user`         | Obtener información del usuario actual|
| GET         | `/api/v1/tareas`    | Obtener lista de tareas               |
| POST        | `/api/v1/tareas`    | Crear una nueva tarea                 |
| GET         | `/api/v1/tareas/{id}`| Obtener detalles de una tarea específica |
| PUT         | `/api/v1/tareas/{id}`| Actualizar una tarea existente        |
| DELETE      | `/api/v1/tareas/{id}`| Eliminar una tarea                    |
| GET         | `/api/test`         | Ruta de prueba                        |

### Uso del API Tester

1. Accede al panel de administración de Open Admin.
2. Navega a la sección "Api tester".
3. Selecciona la ruta que deseas probar de la lista en el panel izquierdo.
4. Configura los parámetros necesarios en la sección "Request".
5. Si es necesario, proporciona credenciales de usuario en el campo "Login as".
6. Haz clic en "Send" para realizar la petición.

### Uso con Postman

1. Importa la colección de API a Postman (si está disponible).
2. Configura las variables de entorno necesarias (URL base, tokens de autenticación, etc.).
3. Selecciona la petición que deseas realizar.
4. Ajusta los parámetros, headers y body según sea necesario.
5. Envía la petición y examina la respuesta.

Nota: Asegúrate de incluir los headers de autenticación necesarios al realizar peticiones desde Postman o cualquier otro cliente HTTP externo.

## Autenticación

La API utiliza autenticación por token. Asegúrate de incluir el token de autenticación en el header de tus peticiones:

```
Authorization: Bearer [tu_token_aquí]
```

Para obtener un token de autenticación, debes iniciar sesión a través de la interfaz de usuario o utilizar el endpoint de login de la API.

## Contribuir

Si deseas contribuir a este proyecto, por favor [crea un pull request](URL_DEL_REPOSITORIO/pulls) o [reporta un issue](URL_DEL_REPOSITORIO/issues).

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
