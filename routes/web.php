<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

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






Route::get('/', [HomeController::class,'index']);

// admin part...

Route::get('/admins', [AdminController::class,'login']);




Route::post('/admin-dashboard', [AdminController::class,'Show_dashboard']);



Route::get('/dashboard', [SuperAdminController::class,'dashboard']);

Route::get('/logout', [SuperAdminController::class,'logout']);
