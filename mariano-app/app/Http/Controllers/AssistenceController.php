<?php

namespace App\Http\Controllers;


use App\Models\Assistence;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


class AssistenceController extends Controller
{

    public function index()
    {
        $assistence = Assistence::all();
        // dd("ok");
        return view('assistence.index', compact('assistence'));
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $student = Student::where("dni",$request->dni)->first();
        dd($student->name);
        $classes = $student->subjects;
        // $actualDay = date("Y-m-d h:i:s");
        // dd($actualDay);
        //para cada clase en la que este registrada el alumno se buscara si coincide el horario actual y el horarario en que se imparte la clase, si hay coincidencia se marca la asistencia y se guarda la informacion en la tabla asistencia
    }

 
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
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
