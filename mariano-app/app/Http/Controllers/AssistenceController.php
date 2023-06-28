<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Assistence;
use App\Models\Student;
use App\Models\Day;
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
        $subjects = $student->subjects;


        //Para cada clase ($classes) en la que este registrada el alumno se buscara si 
        //coincide el horario actual y el horarario en que se imparte la clase, 
        //si hay coincidencia se marca la asistencia y se guarda la informacion en la tabla asistencia

        foreach ($subjects as $subject){
            
            $diaActual = (date('w'));
            $diaCursada = $subject->configSubjects->dia;

            
            if ($diaActual == $diaCursada) {
                dd("hoy cursa ".$subject->name);
            } 
            
            //dd($subject->configSubjects->dia);//dia de la materia en posicion actual del foreach(expresada como numero)
        }
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

// $time = Carbon::now()->format('H:i:s'); //hora actual
// $day = date('w'); //dia actual

// foreach ($materias as $key =>$materia){
//     //dd($materia->settingSubjects);
//     $config = $materias[$key]->settingSubjects; //meto en una variable la config de la primer materia recorrida
//    //dd($config);
   
//    foreach ($config as $c){
   
//     $dia = $c->day; 
//     $start_time = $c->start_time;
//     $limit_time = $c->limit_time;
//     $this->validaYGuardaAsistencia($day,$dia,$time,$start_time,$limit_time,$estudiante,$materia);
//    }
// }












