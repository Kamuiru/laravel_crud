<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/students', [StudentController::class, 'index'])->name('students');

Route::get('/students/create', [StudentController::class, 'createNew'])->name('studs.create');
Route::post('/students/create', [StudentController::class, 'store'])->name('studs.create');


Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('studs.edit');

Route::put('/students-data/{id}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students-delete/{id}',[StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/', function(){
    return view('home');
});
