<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;

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

// Route::get('/', )
Route::get('/', [home::class, 'categoriess']);
Route::get('/product/{id}', [home::class, 'product']);
