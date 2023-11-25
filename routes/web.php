<?php

use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ApprovalController;
use App\Http\Controllers\Backend\Balance\BalanceController;
use App\Http\Controllers\Backend\SecondaryHomeController;
use App\Models\BlogSubCategory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 /**FACULTY DETAILS FOR WELCOME PAGE */

// Route::get('/', function () {
//     $allInfoTeachers = Teacher::all();
//     $blogDetails= BlogSubCategory::with('CategoryBlog')->latest()->paginate(6);
//     return view('welcome',compact('allInfoTeachers','blogDetails'));
// });

Auth::routes();

Route::get('/home', [SecondaryHomeController::class, 'homeIndex'])->name('home')->middleware('check');
Route::get('/account/general-report', [App\Http\Controllers\HomeController::class, 'report'])->name('general.report')->middleware('check');
Route::get('/waite', [App\Http\Controllers\HomeController::class, 'waite'])->name('waite');


Route::middleware('check')->prefix('/account')->group(function(){
  /*
    * BALANCE SECTION 
  */
  Route::get('insert', [BalanceController::class, 'insert'])->name('insert.blance');
  Route::post('insert-cost', [BalanceController::class, 'insertCost'])->name('insert.cost');
  Route::get('update-cost', [BalanceController::class, 'updateCost'])->name('update.blance');
  Route::get('update-edit/{id}', [BalanceController::class, 'costEdit'])->name('cost.edit');
  Route::put('update-edit/{id}', [BalanceController::class, 'costSheetUpdateData'])->name('update.cost');
  Route::get('balance-delete/{id}', [BalanceController::class, 'costSheetDeleteData'])->name('delete.cost');
  /*
    * APPROVE SECTION 
  */
  Route::get('/user-approve', [ApprovalController::class, 'approve'])->name('user.approve');
  Route::post('/user-approve', [ApprovalController::class, 'approveForm'])->name('approive.form');
});



/*
  * INVOICE 
*/
//Route::get('/invoice', [BalanceController::class, 'invoice'])->name('invoice.index')->middleware('check');

Route::get('/generate-pdf',[BalanceController::class,'generate_pdf'])->name('invoice.index')->middleware('check');



/**
 * SECONDARY HOME 
 */
Route::middleware('check')->prefix('/dashbord')->group(function(){

  Route::get('./index', [SecondaryHomeController::class, 'homeIndex'])->name('dashbord.index');
});