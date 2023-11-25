<?php

use App\Http\Controllers\Frontend\Attendance\AttendanceController;
use Illuminate\Support\Facades\Route;


Route::prefix('/attendance')->group(function(){
    Route::get('/check-index', [AttendanceController::class, 'Attendanceindex'])->name('frontend.attendance.check.index');
    Route::get('/check-attendance-data', [AttendanceController::class, 'attendancePdfData'])->name('frontend.attendance.check.data');
});