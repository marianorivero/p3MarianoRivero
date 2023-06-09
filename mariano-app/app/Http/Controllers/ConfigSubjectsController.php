<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;
use App\Models\ConfigSubject;
use Illuminate\Support\Facades\DB;


class ConfigSubjectsController extends Controller
{
   
    public function index()
    {

        $configSubjects = DB::table('config_subjects')
            ->orderBy('config_subjects.id')
            ->join('subjects', 'config_subjects.subject_id', '=', 'subjects.id')
            ->join('days', 'config_subjects.dia', '=', 'days.id')
            ->select('subjects.name', 'days.nombre', 'config_subjects.hora_inicio', 'config_subjects.hora_fin', 'config_subjects.hora_limite')
            ->get();

        return view('configSubjects.index', compact('configSubjects'));
        //
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
