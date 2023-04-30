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
Route::get('/admin/editpista/{id}', [CarreraController::class, 'editpista'])->name('admin.editpista');
Route::get('/admin/editcarrera/{id}', [CarreraController::class, 'editcarrera'])->name('admin.editcarrera');
Route::post('/admin/storepista', [CarreraController::class, 'storepista'])->name('admin.storepista');
Route::put('/admin/updatepista/{id}', [CarreraController::class, 'updatepista'])->name('admin.updatepista');
Route::put('/admin/updatecarrera/{id}', [CarreraController::class, 'updatecarrera'])->name('admin.updatecarrera');
Route::post('/admin/storecarrera', [CarreraController::class, 'storecarrera'])->name('admin.storecarrera');
Route::delete('/admin/deletepista/{id}', [CarreraController::class, 'deletepista'])->name('admin.deletepista');
Route::delete('/admin/deletecarrera/{id}', [CarreraController::class, 'deletecarrera'])->name('admin.deletecarrera');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
