<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Assistence;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Day;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AssistenceController extends Controller
{

    public function index()
    {
        $assistence = Assistence::all();

        // $aa = $assistence[0]->students;
        // dd($aa);
        return view('assistence.index', compact('assistence'));
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $student = Student::where("dni",$request->dni)->first();
        
        if ($student) { //si el estudiante se encuentra en la base de datos...

            $subjects = $student->subjects;//busco las materias que el estudiante cursa  

            if ( !empty($subjects[0]) ) { //si el alumno cursa al menos una materia, es decir, si $subjects NO esta vacio 
                        
                foreach ($subjects as $subject){
                            
                    $diaActual = date('w');
                    $diaCursada = $subject->configSubjects->dia;//dia de la materia en posicion actual
                    $horaActual = Carbon::parse(date('H:i'));
                    $horaInicio = Carbon::parse($subject->configSubjects->hora_inicio); //seteo hora de inicio de materia
                    $horarioLimite = $subject->configSubjects->hora_limite;

                    if (empty($horarioLimite)) {//si no hay una hora limite
                        $horaFin = Carbon::parse($subject->configSubjects->hora_fin);
                    } else {
                        $horaFin = Carbon::parse($subject->configSubjects->hora_limite);
                    }

                    $estaEnHorario = $horaActual->between($horaInicio, $horaFin);

                    if ( ($diaActual == $diaCursada) && $estaEnHorario) {
                        
                        DB::table('assistences')->insert([ //registrar la asistencia a la materia correspondiente
                            'subject_id'=>$subject->id,
                            'student_id'=>$student->id,
                        ]);
                        return redirect()->route('assistence.index');
                    }else{
                        echo("El estudiante seleccionado no cursa en este momento. . . ");
                    }  
                }
            } else {
                echo("El estudiante seleccionado no esta anotado en ninguna materia. . . ");
            }
        } else {//si el estudiante NO se encuentra en la base de datos...
            echo("Estudiante no encontrado");
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














