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
Route::get('/admin/indexpista', [CarreraController::class, 'indexpista'])->name('admin.indexpista');
Route::get('/admin/indexcarrera', [CarreraController::class, 'indexcarrera'])->name('admin.indexcarrera');
Route::post('/admin/storepista', [CarreraController::class, 'storepista'])->name('admin.storepista');
Route::post('/admin/storecarrera', [CarreraController::class, 'storecarrera'])->name('admin.storecarrera');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
