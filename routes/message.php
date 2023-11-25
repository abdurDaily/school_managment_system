<?php

use App\Http\Controllers\Backend\Message\SendMessageController;
use Illuminate\Support\Facades\Route;


Route::prefix('/message')->group(function(){
    Route::post('/send', [SendMessageController::class, 'sendMessage'])->name('send.message');
});

?>