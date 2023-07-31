<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', [ItemController::class,'index'])->name('items.index');
Route::get('/items/create', [ItemController::class,'create'])->name('items.create');
Route::post('/items/store', [ItemController::class,'store'])->name('items.store');
Route::get('/items/{id}/edit', [ItemController::class,'edit']);
Route::put('/items/{id}/update', [ItemController::class,'update']);
Route::get('/items/{id}/delete', [ItemController::class,'destroy']);
