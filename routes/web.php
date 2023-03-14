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

//- Going to Students/Index Files
Route::get('/students', function () {
    return view('students.index');
})->middleware(['auth', 'verified'])->name('students');

//Navigate to Form Add Student
Route::get('/students/add', function () {
    return view('students.add');
})->middleware(['auth', 'verified'])->name('add-student');

//Store Student info to create function under StudentInfoController
Route::post('/students/add',[StudentInfoController::class, 'store'] )
->middleware(['auth', 'verified'])
->name('student-store');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
