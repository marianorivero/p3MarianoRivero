<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use app\Http\Controllers\StudentController;
=======
use App\Http\Controllers\StudentController;
>>>>>>> 43da327b29a299c6177be1ace7297b381d18dd94

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);

 