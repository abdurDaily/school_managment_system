<?php

use App\Http\Controllers\FrontEnd\About\AboutController;
use App\Http\Controllers\Frontend\Club\ClubController;
use App\Http\Controllers\FrontEnd\Contact\ContactController;
use App\Http\Controllers\Frontend\Secondary\IndexController;
use App\Http\Controllers\Frontend\Teachers\TeachersProfileController;
use Illuminate\Support\Facades\Route;

/** HOME PAGE  */
  Route::get('/', [IndexController::class, 'index'])->name('secondary.index');
  Route::get('/about', [IndexController::class, 'about'])->name('secondary.about');


/** CLUB SECTION INSIDE THE HOME PAGE  */
Route::get('/club-index', [ClubController::class, 'clunIndex'])->name('club.index');


/** ABOUT INDEX PAGE  */
Route::get('/about-index', [AboutController::class, 'aboutIndex'])->name('about.index');


/**  CONTACT  */
Route::get('/contact', [ContactController::class, 'contactIndex'] )->name('contact.index');


/** TEACHERS PROFILE */
Route::get('/teacher-profile', [TeachersProfileController::class, 'teacherProfile'])->name('teacher.profile');
Route::get('/teacher-details/{slug}', [TeachersProfileController::class, 'teacherDetails'])->name('teacher.details');