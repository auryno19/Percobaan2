<?php

use App\Models\Bio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controller\BiodataController;

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

Route::get('/', [\App\Http\Controllers\BioController::class, 'home']);

Route::get('/biodata', [\App\Http\Controllers\BiodataController::class, 'index']);

Route::get('/komentar', [\App\Http\Controllers\BioController::class, 'komentar']);