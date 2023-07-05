<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentSubjectController extends Controller
{

    public function index()
    {
        
        $studentSubjects = DB::table('student_subjects')
            ->orderBy('student_subjects.id')
            ->join('subjects', 'student_subjects.subject_id', '=', 'subjects.id')
            ->join('students', 'student_subjects.student_id', '=', 'students.id')
            ->select('subjects.name', 'students.first_name', 'students.last_name')
            ->get();

        return view('studentSubjects.index', compact('studentSubjects'));
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
