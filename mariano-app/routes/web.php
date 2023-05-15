<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route::resource('students', StudentController::class);
});


/*
Route::resource('students', 'index')->name('students.index');
Route::post( 'students' , [StudentController::class, 'store']->name('students.store') );
Route::post( 'students/{id}/edit' , [StudentController::class, 'edit']->name('students.edit') );
Route::patch( 'students/{student}', [StudentController::class, 'update']->name('students.update'));
Route::delete( 'students/{student}', [StudentController::class, 'destroy']->name('students.destroy'));
*/

require __DIR__.'/auth.php';
