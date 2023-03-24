<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;

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

Route::get('/p', function () {
    return view('payment');
});

Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars.index');
Route::get('/admin/cars/{car}/show', [CarController::class, 'show'])->name('admin.cars.show');
Route::get('/admin/cars/create', [CarController::class, 'create'])->name('admin.cars.create');
Route::post('/admin/cars/store', [CarController::class, 'store'])->name('admin.cars.store');
Route::get('/admin/cars/{car}/edit', [CarController::class, 'edit'])->name('admin.cars.edit');
Route::put('/admin/cars/{car}', [CarController::class, 'update'])->name('admin.cars.update');
Route::delete('/admin/cars/{car}', [CarController::class, 'destroy'])->name('admin.cars.destroy');



Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/details/{carId}', [WebController::class, 'details'])->name('details');
Route::post('/rent/{carId}', [WebController::class, 'rent'])->name('rent');
Route::get('/search', [WebController::class, 'category'])->name('category');

Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/connexion',[UserController::class, 'connexion'])->name('connexion');
Route::post('/login',[UserController::class, 'login'])->name('login');
Route::get('/inscription',[UserController::class, 'inscription'])->name('inscription');

Route::get('/logout',[UserController::class, 'logout'])->name('logout');
