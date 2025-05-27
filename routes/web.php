<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BilleteController;

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

// Ruta normal a la página de inicio (opcional)
Route::get('/', function () {
    return redirect()->route('billetes.index');
});

// Ruta a la lista de ítems (billetes)
Route::get('/billetes', [BilleteController::class, 'index'])->name('billetes.index');

// Ruta con parámetro para visualizar un ítem en detalle
Route::get('/billetes/{id}', [BilleteController::class, 'show'])->name('billetes.show');

// Ejemplo de otra ruta normal (sin usar en este proyecto, solo para ejemplificar)
Route::get('/acerca-de', function () {
    return "<h1>Acerca de este proyecto de billetes.</h1>";
})->name('acerca.de');

// Ejemplo de otra ruta con parámetro (sin usar en este proyecto, solo para ejemplificar)
Route::get('/buscar/{query}', function ($query) {
    return "<h2>Buscando billetes que contengan: " . $query . "</h2>";
})->name('buscar.billetes');