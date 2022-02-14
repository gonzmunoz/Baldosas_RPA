<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FloorTileController;
use App\Http\Controllers\BudgetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Vista del index
Route::get('/', [MainController::class, 'index'])->name('index');

// Vista de inicio de sesión
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Función para cerrar la sesión de usuario
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Validación de inicio de sesión
Route::post('/login/checkLogin', [LoginController::class, 'checkLogin'])->name('checkLogin');

// Mostrar productos
Route::get('/listFloorTiles', [FloorTileController::class, 'listFloorTiles'])->name('listFloorTiles');

// Pedir presupuesto
Route::get('/askBudget/{id}', [BudgetController::class, 'askBudget'])->name('askBudget');

// Guardar los datos para el presupuesto solicitado por el cliente
Route::post('/saveBudget', [BudgetController::class, 'saveBudget'])->name('saveBudget');

// Mostrar presupuestos
Route::get('/listBudgets', [BudgetController::class, 'listBudgets'])->name('listBudgets');
