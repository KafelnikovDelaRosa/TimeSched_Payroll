<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CaptureController;
use App\Http\Controllers\LogController;

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
Route::get('/admin', [AuthController::class,'index'])
    ->name('admin.index'); 

Route::get('/admin/login', [AuthController::class,'login'])
    ->name('admin.login');

Route::get('/', [LogController::class, 'index'])
    ->name('webcam.index');    
    
Route::get('/admin/logs', [LogController::class,'index'])
    ->name('admin.logs');
    
Route::get('admin/logs/{id}', [LogController::class,'show'])
    ->name('logs.show');

Route::get('/webcam', [CaptureController::class, 'index'])
    ->name('webcam');

Route::post('/webcam', [CaptureController::class, 'store'])
    ->name('webcam.capture');