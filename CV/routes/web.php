<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
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

/* Route::get('employee/{id}/edit', [EmployeController::class, 'edit'])->name('employee.edit');
Route::PUT('/employee/{id}', [EmployeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{id}', [EmployeController::class, 'destroy'])->name('employee.destroy');
Route::put('/cv-import/{employee}', [CvImportController::class, 'update'])->name('cv-import-update');
Route::put('/cv-import/{id}', [CvImportController::class, 'update'])->name('cv-import-update');
 */
Route::get('/edit-employee/{id}', [EmployeController::class, 'edit'])->name('edit.employee');
Route::post('/update-employee/{id}', [EmployeController::class, 'update'])->name('update.employee');

