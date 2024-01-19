<?php

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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\AnggotaController;

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
Route::get('anggota/{id}/delete', [AnggotaController::class, 'delete']) ->name('anggota.delete');
Route::delete('anggota/{id}/destroy', [AnggotaController::class, 'destroy'])->name('anggota.destroy');Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
Route::get('anggota/{id}/edit', [AnggotaController::class, 'edit']) ->name('anggota.edit');
Route::put('anggota/{id}/update', [AnggotaController::class, 'update']) ->name('anggota.update');