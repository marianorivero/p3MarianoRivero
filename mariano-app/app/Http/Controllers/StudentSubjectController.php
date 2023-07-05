<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
