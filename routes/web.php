<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin#index');
    })->name('dashboard');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',[StudentController::class,'index'])->name('admin#index');
    Route::get('/register',[StudentController::class,'register'])->name('admin#register');
    Route::post('/registerStudent',[StudentController::class,'registerStudent'])->name('admin#registerStudent');
    Route::get('/delete/{id}',[StudentController::class,'delete'])->name('admin#delete');
    Route::get('/studentInfo/{id}',[StudentController::class,'studentInfo'])->name('admin#studentInfo');
    Route::get('/editStudent/{id}',[StudentController::class,'editStudent'])->name('admin#editStudent');
    Route::post('updateStudent/{id}',[StudentController::class,'updateStudent'])->name('admin#updateStudent');
});
