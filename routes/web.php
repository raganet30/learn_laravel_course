<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get ('about_us/{name}/{id}', function($name, $id){
//     // $name = "kenneth";
//     // $email = "kenneth@email.com";
//     // return view('about_us')->with('name',$name)->with('email',$email);
//     // return view('about_us',compact('name','email'));
//     // return view('about_us', ['name'=>$name,'email'=>$email]);
//     return view ('about_us', compact('name','id'));
// });


// // Route::view ('contact_us', 'contact_us', ['name'=>'KenKen','email'=>'KenKen@email.com']);

// Route::view ('contact_us/{name}/{id}', 'contact_us');


// // Route::get('/', function(){
// //     return 'Hello World!';
// // });

// // Route::get('about', function(){
// //     return 'About Us';
// // });


// // Route::get('details/teachers', function(){
// //     return 'this is teacher';
// // });

// // Route::get('details/students', function(){
// //     return 'this is student';
// // });


// // Route::prefix('details')->group(function()
// // {
// //         Route::get('teachers', function(){
// //         return 'this is teacher';
// //     })->name('student details');

// //     Route::get('students', function(){
// //         return 'this is student';
// //     })->name('teacher details');

// // });


// // Route::get('student/{id}/{reg}', function($id,$reg){
// //     return 'student number '. $id . ' student number '. $reg;
// // });


// Route:: fallback(function(){
//     return '404 ERROR | PAGE NOT FOUND';
// });



// Route::get('students',[StudentController::class,'index']);
// Route::get('about-us',[StudentController::class,'aboutUs']);


// Route::get('teachers', function(){
//     return Teacher::all();
// });

// Route::get('teachers',[TeacherController::class,'index']);
// Route::get('add-teacher',[TeacherController::class,'add']);
// Route::get('show-teacher/{id}',[TeacherController::class,'show']);
// Route::get('update-teacher/{id}', [TeacherController::class, 'update']);
// Route::get('delete-teacher/{id}', [TeacherController::class, 'delete']);

// Route::get('add-data',[StudentController::class, 'addData']);
// Route::get('get-data',[StudentController::class, 'getData']);
// Route::get('update-data',[StudentController::class, 'updateData']);
// Route::get('delete-data',[StudentController::class, 'deleteData']);

// Route::get('where-conditions', [StudentController::class, 'whereConditions']);



 Route::view ('about_us', 'about_us');


// Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::prefix('students')->controller(StudentController::class)->group(function()
{
    Route::get('/','index');
    Route::view('add','students.add');
    Route::post('create','create');
    Route::get('edit/{id}','edit');
    Route::post('update/{id}','update');
    Route::delete('delete/{id}','destroy');
    
});
