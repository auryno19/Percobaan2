<?php

use App\Models\Bio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;

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

Route::get('/', [BioController::class, 'home']);

Route::get('/about', [BioController::class, 'about']);

Route::get('/komentar', [BioController::class, 'komentar']);