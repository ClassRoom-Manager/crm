<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Versiones y  que se utilizaran para este proyecto
Laravel 9, Xampp (Para descargar la version estable de Php), composer, Descargar Docker


## Como crear archivo .yml para la conexion de la base de datos

Crear un archivo global llamado docker-compose.yml en caso omiso que no este; agregar el siguiente codigo

```
version: '3.9'

services:

  postgresdb:
    image: postgres
    restart: always
    ports:
      - 5432:5432
    environment:
      DATABASE_HOST: 127.0.0.1
      POSTGRES_USER: root
      POSTGRES_PASSWORD: root
      POSTGRES_DB: whitetravelDb
  admin:
    image: dpage/pgadmin4
    restart: always
    environment:
      PGADMIN_DEFAULT_EMAIL: admin@admin.com
      PGADMIN_DEFAULT_PASSWORD: admin
    ports:
      - 80:80
    depends_on:
      - postgresdb
```

## Archivo .env

Agregar la conexion de la base de datos

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=whitetravelDb
DB_USERNAME=root
DB_PASSWORD=root
```
Si te ocurre algun error en la conexion, veriifica el archivo que esta ubicado en la folder Xampp
\php\php.ini y habilita la conexion a "Pgsql" quitandole el comentario ";"

## Ejecucion de la base de datos

Abrir una terminal y ejecutar el codigo

```
docker-compose up
```

```
Nota: si necesitas ayuda en la instalacion de postgres y docker https://www.youtube.com/watch?v=uKlRp6CqpDg

minuto 8:54

```
## Cargar la estructura de las tablas

Abrimos una terminal desde nuestro proyecto

pegamos el siguiente comando

```
php artisan migrate
```

Este comando nos permitira cargar la estructura de nuestras tablas


## Cargar informacion de las tablas

Se adjuntara un archivo tablas.rar el cual tendra las lineas sql para cada tabla

 - **hotels**
 - **touristic_places**
 - **restaurants**
 - **users**

### Como cargar la informacion de las tablas?

- 1 Buscamos el archivo **tablas.rar**

- 2 Extraemos la informacion de cada una de las tablas

- 3 Abrimos Pgadmin y nos dirigimos al apartado donde se encuentran las tablas

- 4  Damos clic derecho a cualquier tabla y buscamos la opcion **script** y seleccionamos **script Insert**

- 5 Copiamos la informacion que se encuentrar en cada uno de los sql y pegamos en cada tabla correspondiente reemplazando **El codigo Insert**.