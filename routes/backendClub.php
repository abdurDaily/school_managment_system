<?php

use App\Http\Controllers\Backend\Club\ClubController;
use Illuminate\Support\Facades\Route;


Route::middleware('check')->prefix('/backend-club')->group(function(){
  Route::get('/insert', [ClubController::class, 'clubInsert'])->name('club.insert');
  Route::post('/insert', [ClubController::class, 'clubInsertData'])->name('club.insert');
  Route::get('/list', [ClubController::class, 'clubList'])->name('club.list');
  Route::get('/list-update/{id}', [ClubController::class, 'clubListUpdate'])->name('club.list.update');
  Route::put('/list-update/{id}', [ClubController::class, 'clubListUpdateData'])->name('club.list.update.data');
  Route::get('/list-delete/{id}', [ClubController::class, 'clubListDelete'])->name('club.list.delete');
});

?>