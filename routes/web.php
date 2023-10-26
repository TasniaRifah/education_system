<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/teacher', function () {
//     return view('auth.login');
// })->name('teacher.loginpage');

// Route::get('/dashboard', function () {
//     $teachers=User::all();
//     $students=Student::all();
//     return view('dashboard',compact('teachers','students'));
// })->middleware(['auth', 'verified'])->;
Route::get('/dashboard', function () {
    $teachers=User::all();
    $students=Student::all();
    return view('dashboard',compact('teachers','students'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/students',StudentController::class);
    Route::resource('/results',ResultController::class);
    
   
});

require __DIR__.'/auth.php';
