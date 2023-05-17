<?php
/**php artisan make:controller StudentController --resource*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Traits\AuditTrait;

class StudentController extends Controller
{
    use AuditTrait;

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

        $this->logChanges('ALTA','A');

        return redirect()->route('students.index');
    }
    
    

    public function show(/* string $id */)
    {
        //
    }


    public function edit(string $id)
    {
        $student= Student::where('id',$id)->get();
        
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

        $this->logChanges('MODIFICACION','M');

        return redirect()->route('students.index');
    }


    public function destroy(Student $student)
    {
        $student->delete();
        $this->logChanges('BAJA','B');
        return redirect()->route('students.index');
    }
}
