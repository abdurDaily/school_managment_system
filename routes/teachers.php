<?php

use App\Http\Controllers\Backend\Attendance\AttendanceController;
use App\Http\Controllers\Backend\Teachers\TeachersController;
use App\Http\Controllers\Frontend\Teachers\FrontTeachersController;
use Illuminate\Support\Facades\Route;

Route::middleware('check')->prefix('/faculty')->group(function(){
  Route::get('/insert', [TeachersController::class, 'insert'])->name('faculty.insert');
  Route::post('/insert', [TeachersController::class, 'insertData'])->name('faculty.insert.data');
  Route::get('/list-teachers', [TeachersController::class, 'teachcersList'])->name('teachers.list');
  Route::get('/teachers-list-update/{id}', [TeachersController::class, 'teachcersListUpdate'])->name('teacher.list.update');
  Route::put('/teachers-list-update/{id}', [TeachersController::class, 'teachcersListUpdateData'])->name('teacher.list.update.data');
});


/**FRONT-END TEACHERS */
Route::prefix('/faculty')->group(function(){
  Route::get('/index', [FrontTeachersController::class, 'index'])->name('teachers.index');
  Route::get('/details/{slug}', [FrontTeachersController::class, 'facultyDetails'])->name('faculty.details');
});