<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Kernel\Router\Route;

//use App\Controllers\MovieController;
//use App\Controllers\RegisterController;
//use App\Middleware\AuthMiddleware;
//use App\Middleware\GuestMiddleware;

return [
   Route::get('/', [HomeController::class, 'index']),
   Route::get('/register', [RegisterController::class, 'index']),
   Route::post('/register', [RegisterController::class, 'register']),
   //Route::get('/movies', [MovieController::class, 'index']),
   //Route::get('/admin/movies/add', [MovieController::class, 'add'], [AuthMiddleware::class]),
   //Route::post('/admin/movies/add', [MovieController::class, 'store']),
   //Route::get('/register', [RegisterController::class, 'index'], [GuestMiddleware::class]),
   //Route::post('/register', [RegisterController::class, 'register']),
   Route::get('/login', [LoginController::class, 'index']),
   Route::post('/login', [LoginController::class, 'login']),
   //Route::post('/logout', [LoginController::class, 'logout']),
];
?>