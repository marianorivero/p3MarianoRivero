<?php
/*
php artisan route:cache

CREAR ARCHIVO CON LA CONSIGNA DEL PROYECTO DENTRO DEL PROYECTO

EN EL ARCHIVO .ENV MODIFIQUE EL NOMBRE DE LA BASE DE DATOS

nombre de BD: proyecto
-php artisan make:migration create_students_table (crea una nueva migracion en database/migrations, es un archivo,
este codigo es la creacion de la las tablas en la base de datos pero no la ejecuta)

para ejecutar el codigo de estos archivos:
-php artisan migrate (ejecuta la creacion de las tablas)

-php artisan migrate:fresh (actualiza la base de datos MIENTRAS LA ESTOY CREANDO porque
elimina los datos de las tablas)


*/
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
