<?php
/**php artisan make:controller StudentController --resource*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Traits\AuditTrait;

class StudentController extends Controller
{
    use AuditTrait;


    public function index()
    {
        //$student = Student::find(10);
        //$student->subjects()->attach([2]);//insertar lo anterior por id de materia

		$students = Student::all()->sortBy('last_name');
        //return $students->ToJson();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        $subjects= DB::table('subjects')->get();

        return view('student.create', compact('subjects'));
    }

    public function store(Request $request)
    {  
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s'); 
         
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dni' => 'required',
            'birthday' => 'required'
        ]);
        
 
        $student= Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            // 'state' => $request-> state,
            'dni' => $request->dni,
            'birthday' => $request->birthday,
        ]);

        $IdStudent= Student::latest('id')->first();

        if ($request->materias) {
            foreach ($request->materias as $materia) {
                $studentSubject = DB::table('student_subjects')->insert([
                    'student_id'=>$IdStudent->id,
                    'subject_id'=>$materia,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                ]);
            }
        }


        $this->logChanges('ALTA','A');

        return redirect()->route('students.index');
    }
    
    

    public function show(/* string $id */)
    {
        //
    }


    public function edit(string $id)
    {
        $student = Student::where('id',$id)->get();
        $studentSubjects = $student[0]->subjects;
        // dd($studentsubjects[0]->id);
        $subjects = DB::table('subjects')->get();
        // dd($subjects[0]->id);
        
        return view('student.edit', compact('student', 'studentSubjects','subjects'));
    }


    public function update(Request $request, string $id)
    { 
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dni' => 'required',
            'birthday' => 'required'
        ]);

        $student= Student::find($id);
        $student->first_name= $request->first_name;
        $student->last_name= $request->last_name;
        $student->dni= $request->dni;
        $student->birthday= $request->birthday;
        $student->save();

        $studentSubjects = DB::table('student_subjects')->where('student_id',$id)->get();
        // dd($studentubjects[0]->student_id);

        foreach ($studentSubjects as $studentSubject) {
            DB::delete('delete from student_subjects where id = ?',[$studentSubject->id]);
        }

        if ($request->materias) {
            foreach ($request->materias as $materia) {
                $studentSubject = DB::table('student_subjects')->insert([
                    'student_id'=>$student->id,
                    'subject_id'=>$materia,
                    // 'created_at' => $created_at,
                    // 'updated_at' => $updated_at,
                ]);
            }
        }

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
