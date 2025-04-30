<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return redirect()->route('turnos.index');
})->middleware('auth');

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

Route::resource('/turnos', \App\Http\Controllers\TurnosMayorController::class);
Route::post('/turnosdetalle/{detalleId}/sell', [\App\Http\Controllers\TurnosDetalleController::class, 'sellTurns']);
Route::resource('/turnosdetalle', \App\Http\Controllers\TurnosDetalleController::class);
Route::get('/turnosdetalle/{id}/pdf', [\App\Http\Controllers\TurnosDetalleController::class, 'exportToPDF'])->name('turnosdetalle.pdf');
Route::delete('turnosdetalle/{id}', [\App\Http\Controllers\TurnosDetalleController::class, 'destroy'])->name('turnosdetalle.destroy');
Route::get('/exportar-excel', [\App\Http\Controllers\TurnosDetalleController::class, 'exportToExcel'])->name('export.excel');

Route::resource('/velas', \App\Http\Controllers\TurnosVelasController::class);
Route::post('/velasdetalle/{detalleId}/sell', [\App\Http\Controllers\VelaDetalleController::class, 'sellTurns']);
Route::resource('/velasdetalle', \App\Http\Controllers\VelaDetalleController::class);
Route::get('/velasdetalle/{id}/pdf', [\App\Http\Controllers\VelaDetalleController::class, 'exportToPDF'])->name('velasdetalle.pdf');
Route::delete('velasdetalle/{id}', [\App\Http\Controllers\VelaDetalleController::class, 'destroy'])->name('velasdetalle.destroy');
Route::get('/exportar-velas-excel', [\App\Http\Controllers\VelaDetalleController::class, 'exportToExcel'])->name('velasexport.excel');
});