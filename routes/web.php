<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\EnrolledSubjectsController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\BalancesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addstudent',[StudentInfoController:: class, 'index']);
Route::get('/enrolledsubjects',[EnrolledSubjectsController:: class, 'index']);
Route::get('/grades',[GradesController:: class, 'index']);
Route::get('/balances',[BalancesController:: class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//STUDENT INFO

//Navigate to Form Add Student
Route::get('/students/add', function () {
    return view('students.add');
})->middleware(['auth', 'verified'])->name('add-student');

//Store Student info to create function under StudentInfoController
Route::post('/students/add',[StudentInfoController::class, 'store'] )
->middleware(['auth', 'verified'])
->name('student-store');

//- Get All Data From the Student Info Table
Route::get('/students', [StudentInfoController::class, 'index']) 
   ->middleware(['auth', 'verified'])
   ->name('students');

//View Student Info
Route::get('/students/{stuno}', [StudentInfoController::class, 'show']) 
   ->middleware(['auth', 'verified'])
   ->name('students-show');

Route::delete('/students/delete/{stuno}', [StudentInfoController::class, 'destroy']) 
   ->middleware(['auth', 'verified'])
   ->name('students-delete');

//Transfer Record to Edit Form
Route::get('/students/edit/{stuno}', [StudentInfoController::class, 'edit']) 
   ->middleware(['auth', 'verified'])
   ->name('students-edit');

//Save The Updated Data
Route::patch('/students/update/{stuno}', [StudentInfoController::class, 'update']) 
   ->middleware(['auth', 'verified'])
   ->name('students-update');

//ENROLLED SUBJECTS

   //Navigate to Form Add Enrolled Subjects
   Route::get('/enrolledsubjects/add', function () {
       return view('enrolledsubjects.add');
   })->middleware(['auth', 'verified'])->name('add-enrolledsubjects');
   
   //Store Student info to create function under StudentInfoController
   Route::post('/enrolledsubjects/add',[EnrolledSubjectsController::class, 'store'] )
   ->middleware(['auth', 'verified'])
   ->name('enrolledsubjects-store');
   
   //- Get All Data From the Student Info Table
   Route::get('/enrolledsubjects', [EnrolledSubjectsController::class, 'index']) 
      ->middleware(['auth', 'verified'])
      ->name('enrolledsubjects');
   
   //View Student Info
   Route::get('/enrolledsubjects/{esNo}', [EnrolledSubjectsController::class, 'show']) 
      ->middleware(['auth', 'verified'])
      ->name('enrolledsubjects-show');
   
   //Delete Enrolled Subjects
   Route::delete('/enrolledsubjects/delete/{esNo}', [EnrolledSubjectsController::class, 'destroy']) 
      ->middleware(['auth', 'verified'])
      ->name('enrolledsubjects-delete');
   
   //Transfer Record to Edit Form
   Route::get('/enrolledsubjects/edit/{esNo}', [EnrolledSubjectsController::class, 'edit']) 
      ->middleware(['auth', 'verified'])
      ->name('enrolledsubjects-edit');
   
   //Save The Updated Data
   Route::patch('/enrolledsubjects/update/{esNo}', [EnrolledSubjectsController::class, 'update']) 
      ->middleware(['auth', 'verified'])
      ->name('enrolledsubjects-update');
   
   //GRADES
   
   //Navigate to Form Add Enrolled Subjects
  Route::get('/grades/add', function () {
  return view('grades.add');
  })->middleware(['auth', 'verified'])->name('add-grades');
  
  //Store Student info to create function under StudentInfoController
  Route::post('/grades/store',[GradesController::class, 'store'] )
  ->middleware(['auth', 'verified'])
  ->name('grades-store');
  
  //- Get All Data From the Student Info Table
  Route::get('/grades', [GradesController::class, 'index']) 
     ->middleware(['auth', 'verified'])
     ->name('grades');
  
  //View Student Info
  Route::get('/grades/{esNo}', [GradesController::class, 'show']) 
     ->middleware(['auth', 'verified'])
     ->name('grades-show');
  
  //Delete Enrolled Subjects
  Route::delete('/grades/delete/{esNo}', [GradesController::class, 'destroy']) 
     ->middleware(['auth', 'verified'])
     ->name('grades-delete');
  
  //Transfer Record to Edit Form
  Route::get('/grades/edit/{esNo}', [GradesController::class, 'edit']) 
     ->middleware(['auth', 'verified'])
     ->name('grades-edit');
  
  //Save The Updated Data
  Route::patch('/grades/update/{esNo}', [GradesController::class, 'update']) 
     ->middleware(['auth', 'verified'])
     ->name('grades-update');

  Route::get('/grades/add', [GradesController::class, 'getStudentInfo']) 
    ->middleware(['auth', 'verified'])
    ->name('add-grades');
  
   //BALANCES

   //Navigate to Form Add Enrolled Subjects
  // Route::get('/balances/add', function () {
      //return view('balances.add');
 // })->middleware(['auth', 'verified'])->name('add-balances');
  
  //Store Student info to create function under StudentInfoController
  Route::post('/balances/store',[BalancesController::class, 'store'] )
  ->middleware(['auth', 'verified'])
  ->name('balances-store');
  
  //- Get All Data From the Student Info Table
  Route::get('/balances', [BalancesController::class, 'index']) 
     ->middleware(['auth', 'verified'])
     ->name('balances');
   
   Route::get('/balances/add', [BalancesController::class, 'getStudentInfo']) 
     ->middleware(['auth', 'verified'])
     ->name('add-balance');
  
  //View Student Info
  Route::get('/balances/{bNo}', [BalancesController::class, 'show']) 
     ->middleware(['auth', 'verified'])
     ->name('balances-show');
  
  //Delete Enrolled Subjects
  Route::delete('/balances/delete/{bNo}', [BalancesController::class, 'destroy']) 
     ->middleware(['auth', 'verified'])
     ->name('balances-delete');
  
  //Transfer Record to Edit Form
  Route::get('/balances/edit/{bNo}', [BalancesController::class, 'edit']) 
     ->middleware(['auth', 'verified'])
     ->name('balances-edit');
  
  //Save The Updated Data
  Route::patch('/balances/update/{bNo}', [BalancesController::class, 'update']) 
     ->middleware(['auth', 'verified'])
     ->name('balances-update');
  
  
   
   


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
