<?php
/**php artisan make:controller StudentController --resource*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//agrego ruta hacia el Modelo
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
		$students = Student::all();
       dd($students);
       
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        dd($id);
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
