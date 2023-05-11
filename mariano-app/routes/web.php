<?php

use Illuminate\Support\Facades\Route;
//agrego ruta hacia el controlador
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});



// Route::controller(StudentController::class)->group(function(){
//     Route::resource('students', 'index')->name('students.index');
//     Route::resource('students/create', 'create')->name('students.create');
// });

Route::resource('students', 'index')->name('students.index');

Route::post( 'students' , [StudentController::class, 'store']->name('students.store') );
Route::post( 'students/{id}/edit' , [StudentController::class, 'edit']->name('students.edit') );
Route::patch( 'students/{student}', [StudentController::class, 'update']->name('students.update'));
Route::delete( 'students/{student}', [StudentController::class, 'destroy']->name('students.destroy'));
 