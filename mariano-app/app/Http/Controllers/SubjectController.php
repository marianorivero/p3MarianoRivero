<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Day;
use App\Models\Subject;
use App\Models\ConfigSubject;
use Carbon\Carbon;


class SubjectController extends Controller
{

    public function index()
    {
		$subjects = Subject::all()->sortBy('name');
        return view('subjects.index', compact('subjects'));
    }


    
    public function create()
    {
        $days = Day::all();
        return view('subjects.create', compact('days'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        DB::beginTransaction();
        try {

            $subject= Subject::create([
                'name' => $request->name,
            ]);
            $IdSubject= Subject::latest('id')->first();

    
            if ($request->dias) {

                $viejass           = array();
                $diasSuperposicion = array();
                $superpuesto       = false;


                foreach ($request->dias as $i => $nueva) {
                    array_push($viejass,   (DB::table('config_subjects')->where('dia', $nueva)->get())  );     
                }



                foreach ($request->dias as $dia) {
                    
                    $nuevaHoraInicio = Carbon::parse($request->hora_inicio[$dia-1]);
                    $nuevaHoraFin    = Carbon::parse($request->hora_fin[$dia-1]);

                    foreach ($viejass as $viejas) {
                        foreach ($viejas as $vieja) {
                            $inicio = Carbon::parse($vieja->hora_inicio);
                            $fin    = Carbon::parse($vieja->hora_fin);
                            $superpone1 = $nuevaHoraInicio->between($inicio, $fin);
                            $superpone2 = $nuevaHoraFin->between($inicio, $fin);  

                             
                            if ($dia == $vieja->dia) {
                                if ( ($superpone1) || ($superpone2)  ) {
                                    $superpuesto       = true;
                                    array_push($diasSuperposicion, $dia);
                                }
                            }
                            
                        }
                    }
                    
                    if ($superpuesto==false) {
                        $configSubject= ConfigSubject::create([
                            'subject_id'  => $IdSubject->id,
                            'dia'         => $dia,
                            'hora_inicio' => $request->hora_inicio[$dia-1],
                            'hora_fin'    => $request->hora_fin[$dia-1],
                            'hora_limite' => $request->hora_limite[$dia-1],
                        ]);
                    }

                    $superpuesto = false;

                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
        
        
        if ($request->dias) {
            if (!empty($diasSuperposicion)) {
                echo('
                    <br><br>
                    <a href="/subjects"><button>Atras</button></a>
                    <a href="/"><button>Inicio</button></a>
                    <br><hr><br>
                    <b>No se pudieron guardar todas las configuraciones ya que algunas se superponen con otros horarios:</b> <br>
                    Dias que se superponen (expresados en numeros):
                ');
                $dias = array_unique($diasSuperposicion);
                foreach ($dias as $dia) {
                    echo($dia.', ');
                }
            } else {
                return redirect()->route('subjects.index');
            }
            
        } else {
            echo('
                <br><br>
                <a href="/subjects"><button>Atras</button></a>
                <a href="/"><button>Inicio</button></a>
                <br><hr><br>
                <b>No ha seleccionado dias para la cofiguracion de la materia, sin embargo, la materia quedó guardada en la base de datos:</b> <br>
            ');
        }
        

    }




    public function edit(string $id)
    {
        $subject= Subject::find($id);
        $configSubjects = DB::table('config_subjects')->where('subject_id', $id)->get();
        $days = Day::all();


        return view('subjects.edit', compact('subject', 'configSubjects','days'));
    }



    public function update(Request $request, string $id)
    {
        if ($request->name) {


            DB::beginTransaction();
            try {
                $subjectId = DB::table('subjects')->where('id', $id)->get();
                $subject   = DB::table('subjects')->where('id', $id)->update([
                    'name' => $request->name
                ]);

                $configSubjects = ConfigSubject::where('subject_id',$id)->get();
    
                foreach ($configSubjects as $configSubject) {
                    $configSubject->delete();
                }
    
                if ($request->dias) {
                    foreach ($request->dias as $dia) {



                        



                        $configSubject= ConfigSubject::create([
                            'subject_id'  => $subjectId[0]->id,
                            'dia'         => $dia,
                            'hora_inicio' => $request->hora_inicio[$dia-1],
                            'hora_fin'    => $request->hora_fin[$dia-1],
                            'hora_limite' => $request->hora_limite[$dia-1],
                        ]);
                    }
                }
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                return $e->getMessage();
            }
        }
        return redirect()->route('subjects.index');
    }



    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}








        // $viejass = array();
        // foreach ($request->dias as $i => $nueva) {
        //     array_push($viejass,   (DB::table('config_subjects')->where('dia', $nueva)->get())  );     
        // }

        //DENTRO DE UN FOREACH  $request->dias as $i => $dia
        // $nuevaHoraInicio = Carbon::parse($request->hora_inicio[$dia-1]);
        // $nuevaHoraFin    = Carbon::parse($request->hora_fin[$dia-1]);

        // foreach ($viejass as $viejas) {
        //     foreach ($viejas as $vieja) {
        //         $inicio = Carbon::parse($vieja->hora_inicio);
        //         $fin    = Carbon::parse($vieja->hora_fin);

        //         $superpone1 = $nuevaHoraInicio->between($inicio, $fin);
        //         $superpone2 = $nuevaHoraFin->between($inicio, $fin);  
                
        //         if ( ($dia == $vieja->dia)  ($superpone1 == false) && ($superpone1 == false)  ) {
                    
                    
        //         }
        //     }
        // }