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

        $assistences = DB::table('assistences')
            ->join('students', 'assistences.student_id', '=', 'students.id')
            ->join('subjects', 'assistences.subject_id', '=', 'subjects.id')
            ->select('students.last_name','students.first_name', 'subjects.name', 'assistences.created_at')
            ->get();
   

        return view('assistence.index', compact('assistences'));
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $student = Student::where("dni",$request->dni)->first();
        $noCursa = true;
        
        if ($student) { //si el estudiante se encuentra en la base de datos...

            $subjects = $student->subjects;  

            if ( !empty($subjects[0]) ) { //si el alumno cursa al menos una materia, es decir, si $subjects NO esta vacio 
                        
                foreach ($subjects as $subject){
                    
                    $configSubjects = $subject->configSubjects;

                    foreach ($configSubjects as $configSubject) {

                        $diaActual = date('N');
                        $diaCursada = $configSubject->dia;
    
                        $horaActual = Carbon::parse(date('H:i'));
                        $horaInicio = Carbon::parse($configSubject->hora_inicio);
                        $horarioLimite = $configSubject->hora_limite;
                        
                        if (empty($horarioLimite)) {//defino la hora limite para el between
                            $horaFin = Carbon::parse($configSubject->hora_fin);
                        } else {
                            $horaFin = Carbon::parse($configSubject->hora_limite);
                        }

                        $estaEnHorario = $horaActual->between($horaInicio, $horaFin);
                    
                        if ( ($diaActual == $diaCursada) && $estaEnHorario) {
                            $created_at = date('Y-m-d H:i:s');
                            $updated_at = date('Y-m-d H:i:s'); 

                            DB::table('assistences')->insert([
                                'subject_id'=>$subject->id,
                                'student_id'=>$student->id,
                                'created_at' => $created_at,
                                'updated_at' => $updated_at,
                            ]);
                            $noCursa = false;
                            return redirect()->route('assistence.index');
                        }else{
                            $noCursa = true;
                        } 
                    }  
                }
                if ($noCursa) {
                    echo('
                    <a href="/assistence"><button>Atras</button></a>
                    <a href="/"><button>Inicio</button></a>
                    <br><hr><br>
                    El estudiante seleccionado no cursa en este momento. . .<br> 
                    ');
                }
            } else {
                echo('
                <a href="/assistence"><button>Atras</button></a>
                <a href="/"><button>Inicio</button></a>
                <br><hr><br>
                El estudiante seleccionado no esta anotado en ninguna materia. . .<br>
                ');
            }
        } else {
            echo('
            <a href="/assistence"><button>Atras</button></a>
            <a href="/"><button>Inicio</button></a>
            <br><hr><br>
            Estudiante no encontrado<br>
            ');
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














