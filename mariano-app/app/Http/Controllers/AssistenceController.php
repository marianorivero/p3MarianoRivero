<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Assistence;
use App\Models\Student;
use App\Models\Day;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
        $student = Student::where("dni",$request->dni)->first();//busco el estudiante que ingresaron por dni
        
        if ($student) { //si el estudiante se encuentra en la base de datos...

            ///$x =Carbon::now();

            $subjects = $student->subjects;//busco las materias que el estudiante cursa

            if ( !empty($subjects[0]) ) { //si el alumno cursa al menos una materia, es decir, si $subjects NO esta vacio 
            
                foreach ($subjects as $subject){
                    
                    $diaActual = date('w');
                    $diaCursada = $subject->configSubjects->dia;//dia de la materia en posicion actual del foreach(expresada como numero)
                            
                    if ($diaActual == $diaCursada) {
                        
                        DB::table('assistences')->insert([ //registrar la asistencia a la materia correspondiente
                            'subject_id'=>$subject->id,
                            'student_id'=>$student->id,
                        ]);
        
                        return redirect()->route('assistence.index');
                    }else{
                        dd("El estudiante seleccionado hoy no cursa ninguna materia");
                    }
                }
            } else {
                dd("El estudiante seleccionado no cursa ninguna materia");
            }
        } else {//si el estudiante NO se encuentra en la base de datos...
            dd("Estudiante no encontrado");
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














