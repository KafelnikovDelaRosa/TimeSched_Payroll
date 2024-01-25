<?php

use App\Http\Controllers\AdminController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebcamController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [WebcamController::class, 'index'])
    ->name('webcam.index');


Route::post('/webcam', [WebcamController::class, 'store'])
    ->name('webcam.capture');

Route::get('/admin', [AuthController::class,'index'])
    ->name('admin.index');


Route::get('/admin/login', [AuthController::class,'login'])
    ->name('admin.login');

Route::get('/admin/logs', [AdminController::class,'logs'])
->name('admin.logs');