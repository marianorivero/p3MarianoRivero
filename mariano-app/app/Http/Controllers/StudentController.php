<?php
/**php artisan make:controller StudentController --resource*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
		$students = Student::all()->sortBy('last_name');
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'dni' => 'required',
            'birthday' => 'required'
        ]);
        
        $student= Student::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            // 'state' => $request-> state,
            'dni' => $request->dni,
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('students.index');
    }
    
    

    public function show(/* string $id */)
    {
        //
    }


    public function edit(string $id)
    {
        $student= Student::where('id',$id)->get();
        // dd($student);
        return view('student.edit', compact('student'));
    }


    public function update(Request $request, string $id)
    { 
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'dni' => 'required',
            'birthday' => 'required'
        ]);

        $student= Student::find($id);
        $student->name= $request->name;
        $student->last_name= $request->last_name;
        $student->dni= $request->dni;
        $student->birthday= $request->birthday;
        $student->save();
        return redirect()->route('students.index');
    }


    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
