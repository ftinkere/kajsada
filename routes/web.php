<?php

use App\Http\Controllers\AddWordController;
use App\Http\Controllers\KajsadaController;
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

Route::get('/', [KajsadaController::class, 'show']);
Route::post('/add', [AddWordController::class, 'show']);
