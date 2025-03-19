<?php

use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->group(function () {
    Route::resource('users', UserController::class);
});
    
