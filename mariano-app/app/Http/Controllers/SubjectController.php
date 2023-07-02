<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Day;
use App\Models\Subject;
use App\Models\ConfigSubject;

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
    
            foreach ($request->dias as $dia) {

                $configSubject= ConfigSubject::create([
                    'subject_id'=> $IdSubject->id,
                    'dia'=> $dia,
                    'hora_inicio'=> $request->hora_inicio[$dia-1],
                    'hora_fin'=> $request->hora_fin[$dia-1],
                    'hora_limite'=> $request->hora_limite[$dia-1],
                ]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
        return redirect()->route('subjects.index');
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
        // $request->validate([
        //     'name' => 'required',
        //     'dia' => 'required',
        //     'hora_inicio' => 'required',
        //     'hora_fin' => 'required',
        // ]);

        dd($request->dias);

        DB::beginTransaction();
        try {

            $subject = DB::table('subjects')->where('id', $id)
            ->update([
                'name' => $request->name
            ]);
    
            $configSubject = DB::table('config_subjects')->where('subject_id', $id)
            ->update([
                'dia' => $request->dia,
                'hora_inicio' => $request->hora_inicio, 
                'hora_fin' => $request->hora_fin, 
                'hora_limite' => $request->hora_limite
            ]);
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        return redirect()->route('subjects.index');
    }



    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}
