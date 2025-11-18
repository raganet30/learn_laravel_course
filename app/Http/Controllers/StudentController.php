<?php

namespace App\Http\Controllers;


use App\Http\Requests\StudentAddRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    
    public function index(Request $request)
    {
        $students = Student::when($request->search, function($query)use($request)
    {
        return $query->whereAny([
            'name',
            'email',
            'age',
            'date_of_birth',
            'gender'
        ],'like', '%'. $request->search . '%');
    })->paginate(10);
        return view('students.index', compact('students'));    
    }


    public function create(StudentAddRequest $request)
    {

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->date_of_birth = $request->date_of_birth;
        $student->save();
        
        return redirect('students');
    }


    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view ('students.edit', compact('student'));

    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail(($id));
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->date_of_birth = $request->date_of_birth;
        $student->update();

        return redirect ('students');

    }



    public function destroy(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect ('students');
    }


    // public function aboutUs(){
    //     return "Code with Kenneth";
    // }

    // //using query builder
    // public function addData()
    // {
    //     DB::table('students')->insert([
    //         'name' => 'tester',
    //         'email' => 'tester@email.com',
    //         'age' => 20,
    //         'date_of_birth' => '2010-01-01',
    //         'gender' => 'm'
    //     ]);

    //     return 'Added Successfully!'; 
    // }


    // public function getData()
    // {
    //     $items = DB::table('students')
    //     ->select('id', 'name')
    //     ->where('id',10)
    //     ->first();

    //     return $items;
    // }

    
    // public function updateData()
    // {
    //     DB::table('students')->where('id',101)->update([
    //         'name'=> 'kenneth',
    //         'age' => '25',
    //         'email' => ' neth3039@gmail.com'
    //     ]);

    //     return 'Updated Successfully!'; 

    // }

    // public function deleteData()
    // {
    //     DB::table('students')->where('id',101)->delete();
        
    //     return 'Deleted Successfully'; 
    // }
        //using query builder


        // using eloquent
    //     public function addData()
    //     {
    //         $item = new Student();
    //         $item->name = 'tester';
    //         $item->email = 'newtest@email.com';
    //         $item->age = 25;
    //         $item->date_of_birth = '2010-01-01';
    //         $item->gender = 'm';
    //         $item->save();

    //         return 'Saved Successfully';
    //     }
        
    //     public function getData()
    // {
    //     // $items = Student::select('id','name')
    //     // ->where('id',55)
    //     // ->first();

    //     // $items = Student::all();
    //     $items = Student::onlyTrashed()->get();
    //     return $items;
    // }

    // public function updateData()
    // {
    //     $item = Student::where('id',55)->first();
    //     $item->name = 'pogi';
    //     $item->age = 30;
    //     $item->update();

    //     return 'Updated Successfully';
    // }

    // public function deleteData()
    // {
    //     // $item = Student::findOrFail(1);
    //     // $item->delete();

    //     Student::find(2)->forceDelete();
    //     return 'Deleted Successfully';
    // }


    // public function whereConditions()
    // {
    //     $items = Student::where('age','>',18)
    //     // $items = Student::whereBetween('age', [18,25])
    //     // $items = Student::whereNotBetween('age', [18,25])
    //     ->get();

    //     return $items;
    // }

}
