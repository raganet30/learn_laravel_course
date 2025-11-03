<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    // public function index()
    // {
    //     return "Hello World";
    // }

    // public function aboutUs(){
    //     return "Code with Kenneth";
    // }

    public function addData()
    {
        DB::table('students')->insert([
            'name' => 'tester',
            'email' => 'tester@email.com',
            'age' => 20,
            'date_of_birth' => '2010-01-01',
            'gender' => 'm'
        ]);

        return 'Added Successfully!'; 
    }

    public function getData()
    {
        $items = DB::table('students')
        ->where('id',101)
        ->first();

        return $items;
    }
}
