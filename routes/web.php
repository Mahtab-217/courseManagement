<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('users',[UserController::class,'index']);
Route::get('student',[StudentsController::class,'index']);
Route::get('teachers',[TeachersController::class,'index']);
Route::get('classes',[ClassesController::class,'index']);
Route::get('addTeacher',[TeachersController::class, 'showAddForm']);