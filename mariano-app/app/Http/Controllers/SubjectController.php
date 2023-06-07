<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('subjects.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        



        $subject= Subject::create([
            'name' => $request->name,
        ]);



        $IdSubject= Subject::latest('id')->first();

        // dd($request);

        $configSubject= ConfigSubject::create([
            'subject_id'=> $IdSubject->id,
            'dia'=> $request->dia,
            'hora_inicio'=> $request->hora_inicio,
            'hora_fin'=> $request->hora_fin,
            'hora_limite'=> $request->hora_limite,
        ]);

        return redirect()->route('subjects.index');
    }



    public function edit(string $id)
    {
        $subject= Subject::where('id', $id)->get();
        return view('subjects.edit', compact('subject'));
    }



    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $subject= Subject::find($id);
        $subject->name= $request->name;
        $subject->save();
        return redirect()->route('subjects.index');
    }



    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}
