<?php

use App\Http\Controllers\RoupaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [RoupaController::class,'index'])->name('roupa.index');
Route::get('/roupa/produto', [RoupaController::class,'produtos']);
Route::get('/roupa/masculina', [RoupaController::class,'roupas_masculinas'])->name('roupas_masculinas');
Route::get('/roupa/feminina', [RoupaController::class,'roupas_femininas'])->name('roupas_femininas');
