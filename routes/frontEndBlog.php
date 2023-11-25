<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\Blogs\BlogController;


/**
  * FRONTEND 
 */
Route::prefix('/blogs')->group(function(){
    Route::get('/index', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/post-details/{slug}', [BlogController::class, 'postDetails'])->name('blog.detail');
});

/**
  * BACKEND 
 */
Route::group(['prefix' => 'backend/blogs'],function(){
    Route::get('/category', [BlogController::class, 'category'])->name('category.insert');
    Route::post('/category-insert', [BlogController::class, 'categoryInsert'])->name('category.data.insert');
    Route::get('/sub-category', [BlogController::class, 'subCategory'])->name('subcategory.insert');
    Route::post('/sub-category-insert', [BlogController::class, 'subCategoryInsert'])->name('subcategory.data.insert');
})->middleware('check');

?>