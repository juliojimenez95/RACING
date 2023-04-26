<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/crearcarrera', [CarreraController::class, 'crearcarrera'])->name('admin.crearcarrera');
Route::get('/admin/crearpista', [CarreraController::class, 'crearpista'])->name('admin.crearpista');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
