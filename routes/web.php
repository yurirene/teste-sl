<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/primeira-questao', [HomeController::class, 'store'])->name('primeira-questao.store');
Route::post('/primeira-questao-buscar', [HomeController::class, 'search'])->name('primeira-questao.search');