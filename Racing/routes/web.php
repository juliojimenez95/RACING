<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Auth;

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
Route::get('/admin/indexEvento', [EventoController::class, 'indexEvento'])->name('admin.indexEvento');
Route::get('/admin/indexMoto', [MotoController::class, 'indexMoto'])->name('admin.indexMoto');
Route::get('/admin/crearmoto', [MotoController::class, 'crearmoto'])->name('admin.crearmoto');
Route::get('/admin/editmoto/{id}', [MotoController::class, 'editmoto'])->name('admin.editmoto');
Route::post('/admin/storemoto', [MotoController::class, 'storemoto'])->name('admin.storemoto');
Route::put('/admin/updatemoto/{id}', [MotoController::class, 'updatemoto'])->name('admin.updatemoto');
Route::delete('/admin/deletemoto/{id}', [MotoController::class, 'deletemoto'])->name('admin.deletemoto');
Route::get('/Registro/index', [RegisterController::class, 'index'])->name('Registro.index');
Route::post('/Registro/store', [RegisterController::class, 'store'])->name('Registro.store');
Route::get('/piloto/inscripcion', [CarreraController::class, 'inscripcion'])->name('piloto.inscripcion');
Route::post('/piloto/incribirse', [CarreraController::class, 'incribirse'])->name('piloto.incribirse');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
