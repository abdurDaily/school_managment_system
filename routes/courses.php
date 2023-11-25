<?php

use App\Http\Controllers\FrontEnd\Courses\CoursesController;
use Illuminate\Support\Facades\Route;


Route::prefix('/courses')->group(function(){
    Route::get('/record', [CoursesController::class, 'courseRecord'])->name('courses.record');
});

?>