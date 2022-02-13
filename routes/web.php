<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;

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

Route::get('/', [HomeController::class,"Index"]);
Route::get('/cadastro', [HomeController::class,"Cadastro"]);
Route::get('/clientes', [HomeController::class,"Clientes"]);
