<?php
/**php artisan make:controller StudentController --resource*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//agrego ruta hacia el Modelo
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
		$students = Student::all();
       //dd($students);
       return view('student.index', compact('students'));
       
    }


    public function create()
    {
        //
        return view('student.create');
    }


    public function store(Request $request)
    {
        //
        $student= Student::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'state' => $request-> state,
            'dni' => $request->dni,
            'birthday' => $request->birthday,
        ]);
    }
    
    

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        dd($id);
        $student= Student::where('id',$id)->get();
        return view('student.edit', compact('student'));
    }


    public function update(Request $request, string $id)
    {
        //
        $student= Student::find($id);
        $student->name= $request->name;
        $student->last_name= $request->last_name;
        $student->dni= $request->dni;
        $student->birthday= $request->birthday;
        $student->save();
        return redirect()->route('student.index');
    }


    public function destroy(string $id)
    {
        //
    }
}
