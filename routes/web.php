<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('landing');
});

// UsersController routes
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store'])->name('add_user');
Route::get('/users/{user}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
Route::get('/users/{user}/showToRemove', [App\Http\Controllers\UsersController::class, 'showToRemove']);
Route::put('/users/{user}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{user}', [App\Http\Controllers\UsersController::class, 'destroy']);

// DriversController routes
Route::get('/drivers', [App\Http\Controllers\DriversController::class, 'index']);
Route::post('/drivers', [App\Http\Controllers\DriversController::class, 'store']);
Route::get('/drivers/{driver}/edit', [App\Http\Controllers\DriversController::class, 'edit']);
Route::get('/drivers/{driver}/showToRemove', [App\Http\Controllers\DriversController::class, 'showToRemove']);
Route::put('/drivers/{driver}', [App\Http\Controllers\DriversController::class, 'update']);
Route::delete('/drivers/{driver}', [App\Http\Controllers\DriversController::class, 'destroy']);

// VehiclesController routes
Route::get('/vehicles', [App\Http\Controllers\VehiclesController::class, 'index']);
Route::post('/vehicles', [App\Http\Controllers\VehiclesController::class, 'store'])->name('add_vehicle');
Route::get('/vehicles/{vehicle}/edit', [App\Http\Controllers\VehiclesController::class, 'edit']);
Route::put('/vehicles/{vehicle}', [App\Http\Controllers\VehiclesController::class, 'update']);
Route::get('/vehicles/{vehicle}/showToRemove', [App\Http\Controllers\VehiclesController::class, 'showToRemove']);
Route::delete('/vehicles/{vehicle}', [App\Http\Controllers\VehiclesController::class, 'destroy']);

// Authenticaton routes
Auth::routes();

// Dashboard route
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
