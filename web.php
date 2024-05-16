<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;



Route::get('/login', [RedirectController::class, 'loginpage']);

Route::get('/register', [RedirectController::class, 'registerpage']);

Route::get('/home', [RedirectController::class, 'homepage']);

Route::get('/notification', [RedirectController::class, 'notificationpage']);

Route::get('/fees', [RedirectController::class, 'feespage']);

Route::get('/payment', [RedirectController::class, 'paymentpage']);

Route::get('/setting', [RedirectController::class,'settingpage']);

Route::get('/logout', [RedirectController::class,'logoutpage']);
