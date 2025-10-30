<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        return "Hello World";
    }

    public function aboutUs(){
        return "Code with Kenneth";
    }
}
