<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class,'index']);
    Route::get('/attendance', [AttendanceController::class, 'attendance']);
   });
Route::post('/', [AuthController::class, 'index']);
Route::post('/attendance', [AttendanceController::class, 'attendance']);
Route::get('/attendance', [AttendanceController::class, 'attendance']);
Route::get('/auth/register', [AuthController::class, 'register']);
Route::post('/index', [RegisterController::class, 'index']);
Route::post('/attendance', [RegisterController::class, 'attendance']);
