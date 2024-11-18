<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/course/users', [CourseController::class, 'getAllUsers']);
Route::get('/user-profiles', [ProfileController::class, 'showAllUsers']);
Route::get('/user/{id}/profile', [UserController::class, 'showProfile']);
Route::get('/user/{id}/courses', [UserController::class, 'getAllCourses']);