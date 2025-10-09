<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('about_us/{name}/{id}', function($name, $id){
    // $name = "kenneth";
    // $email = "kenneth@email.com";
    // return view('about_us')->with('name',$name)->with('email',$email);
    // return view('about_us',compact('name','email'));
    // return view('about_us', ['name'=>$name,'email'=>$email]);
    return view ('about_us', compact('name','id'));
});


// Route::view ('contact_us', 'contact_us', ['name'=>'KenKen','email'=>'KenKen@email.com']);

Route::view ('contact_us/{name}/{id}', 'contact_us');


// Route::get('/', function(){
//     return 'Hello World!';
// });

// Route::get('about', function(){
//     return 'About Us';
// });


// Route::get('details/teachers', function(){
//     return 'this is teacher';
// });

// Route::get('details/students', function(){
//     return 'this is student';
// });


// Route::prefix('details')->group(function()
// {
//         Route::get('teachers', function(){
//         return 'this is teacher';
//     })->name('student details');

//     Route::get('students', function(){
//         return 'this is student';
//     })->name('teacher details');

// });


// Route::get('student/{id}/{reg}', function($id,$reg){
//     return 'student number '. $id . ' student number '. $reg;
// });


Route:: fallback(function(){
    return '404 ERROR | PAGE NOT FOUND';
});