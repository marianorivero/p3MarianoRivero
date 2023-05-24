<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;

class SubjectController extends Controller
{

    public function index()
    {
        //$subject= Subject::find(1);
        //dd($subject->student);

        


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
