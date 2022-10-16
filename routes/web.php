<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/student',[StudentController::class,'get_all_student'])->name('student');
Route::get('/edit-student/{id}',[StudentController::class,'get_student_by_id']);
Route::post('/update-student/{id}', [StudentController::class, 'edit']);