<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\ConfigSubject;

class ConfigSubjectsController extends Controller
{
   
    public function index()
    {
        $configSubjects = ConfigSubject::all();
        // dd($configSubjects[0]->subjects);
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
