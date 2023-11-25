<?php

use App\Http\Controllers\Backend\Question\QuestionController;
use App\Models\Semester;
use Illuminate\Support\Facades\Route;

Route::middleware('check')->prefix('/question')->group(function(){
    Route::get('/', [QuestionController::class, 'questionIndex'])->name('question.index');
    Route::get('/details', [QuestionController::class, 'details'])->name('question.insert');
    Route::post('/details', [QuestionController::class, 'detailsUpload'])->name('question.upload');
    Route::get('/edit-details/{id}', [QuestionController::class, 'deleteQsn'])->name('question.update');
    Route::get('/delete-column/{id}', [QuestionController::class, 'deleteQsnColumn'])->name('delete.question.column');
    Route::get('/details-list', [QuestionController::class, 'detailsList'])->name('question.details.list');
    Route::get('/add-subject', [QuestionController::class, 'addSubject'])->name('add.subject');
    Route::post('/add-subject', [QuestionController::class, 'insertSubject'])->name('insert.subject');
    Route::get('/subject-list', [QuestionController::class, 'subjectList'])->name('subject.list');
    Route::get('/search-subject-list', [QuestionController::class, 'searchSubjectList'])->name('search.subject');
    Route::get('/search-qestionu-list', [QuestionController::class, 'searchQuesiontList'])->name('search.question');
    Route::get('/subject-edit/{id}', [QuestionController::class, 'subjectEdit'])->name('subject.edit');
    Route::put('/subject-edit/{id}', [QuestionController::class, 'subjectUpdate'])->name('subject.update');
    Route::get('/select-subject', [QuestionController::class, 'selectSubject'])->name('select.subject');
    Route::get('/delete-subject/{id}', [QuestionController::class, 'deleteSubject'])->name('delete.subject');
  })->middleware('check');
  
?>