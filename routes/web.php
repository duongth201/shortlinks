<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;

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

Route::get('/', [ShortUrlController::class, 'index']);
Route::post('/shorten', [ShortUrlController::class, 'shorten'])->name('shorten');
Route::get('/{code}', [ShortUrlController::class, 'redirect']);
