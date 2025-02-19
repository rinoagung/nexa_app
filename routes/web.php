<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/php_info', function () {
    echo phpinfo();
});
Route::get('/laravel_info', function () {
    return view('welcome');
});
