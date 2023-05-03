<?php

use Illuminate\Support\Facades\Route;
//agrego ruta hacia el controlador
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create', [StudentController::class, 'create'])->name(StudentController.create)

Route::resource('students', StudentController::class);

 