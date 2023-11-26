<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('cv-import', [CvController::class, 'create'])->name('cv-import');
Route::post('cv-import', [CvController::class, 'store'])->name('cv-import-store');
Route::get('cv-list', [CvController::class, 'index'])->name('cv-list');
Route::get('services', [ServiceController::class, 'index'])->name('services-list');

Route::get('users-add', [UserController::class, 'create'])->name('users-create');
Route::post('users-add', [UserController::class, 'store'])->name('users-store');
Route::get('users-list', [UserController::class, 'index'])->name('users-list');
Route::get('setting-add-service', [SettingsController::class, 'serviceCreate'])->name('service-create');
Route::post('setting-add-service', [HomeController::class, 'serviceStore'])->name('service-store');
Route::get('employee-detail/{id}', [EmployeController::class, 'show'])->name('employee-detail');
