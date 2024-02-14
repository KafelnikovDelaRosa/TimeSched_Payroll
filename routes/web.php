<?php

use App\Http\Controllers\AdminController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogController;
use App\Models\Attendance;

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
Route::get('/', [LogController::class, 'index'])
    ->name('webcam.index');


Route::post('/webcam', [LogController::class, 'store'])
    ->name('webcam.capture');

Route::get('/admin', [AuthController::class,'index'])
    ->name('admin.index');


Route::get('/admin/login', [AuthController::class,'login'])
    ->name('admin.login');

Route::get('/admin/logs', [LogController::class,'index'])
->name('admin.logs');

Route::get('admin/logs/{id}', [LogController::class,'show'])
->name('admin.show');