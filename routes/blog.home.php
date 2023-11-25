<?php

use App\Http\Controllers\FrontEnd\Blogs\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('/blog')->group(function(){
    Route::get('/details/{slug}', [BlogController::class, 'singleBlogDetails'])->name('singleBlog.details');
    Route::get('/search', [BlogController::class, 'blogSearch'])->name('blog.search');
    Route::get('/all', [BlogController::class, 'allBlog'])->name('all.blog.list');
    Route::get('/category-post-for-category/{id}', [BlogController::class, 'blogForCategory'])->name('blog.category.post');
});

?>