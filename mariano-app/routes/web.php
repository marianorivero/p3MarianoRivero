<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ConfigSubjectsController;
use App\Http\Controllers\AssistenceController;
use App\Http\Controllers\StudentSubjectController;

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


    // Rutas student
    Route::resource('students', StudentController::class);
    Route::post( 'students', [StudentController::class, 'store'])->name('students.store') ;
    Route::post( 'students/{id}/edit' , [StudentController::class, 'edit'])->name('students.edit') ;
    Route::patch( 'students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete( 'students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
    
    
    // Rutas subjects
    Route::resource('subjects', SubjectController::class);
    Route::post( 'subjects', [SubjectController::class, 'store'])->name('subjects.store') ;
    Route::post( 'subjects/{id}/edit' , [SubjectController::class, 'edit'])->name('subjects.edit') ;
    Route::patch( 'subjects/{subjects}', [SubjectController::class, 'update'])->name('subjects.update');
    Route::delete( 'subjects/{subjects}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
    
    // Rutas careers
    Route::resource('careers', CareerController::class);
    Route::post( 'careers', [CareerController::class, 'store'])->name('careers.store') ;
    Route::post( 'careers/{id}/edit' , [CareerController::class, 'edit'])->name('careers.edit') ;
    Route::patch( 'careers/{careers}', [CareerController::class, 'update'])->name('careers.update');
    Route::delete( 'careers/{careers}', [CareerController::class, 'destroy'])->name('careers.destroy');
    
    //Ruta assistence
    Route::resource('assistence', AssistenceController::class);
    Route::post( 'assistences', [AssistenceController::class, 'store'])->name('assistence.store') ;

    //Ruta config_subjects
    Route::get('config', [ConfigSubjectsController::class, 'index'])->name('config.index');
    
    // Ruta audit
    Route::get('audits', [AuditController::class, 'index'])->name('audits.index');

    //Ruta students_subjects
    Route::get('studentsubjects', [StudentSubjectController::class, 'index'])->name('studentsubjects.index');
    
    

});


require __DIR__.'/auth.php';
