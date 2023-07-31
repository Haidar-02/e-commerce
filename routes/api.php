<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('user',[App\Http\Controllers\AuthController::class]);


Route::get('/', [ItemController::class,'index'])->name('items.index');
Route::get('/items/create', [ItemController::class,'create'])->name('items.create');
Route::post('/items/store', [ItemController::class,'store'])->name('items.store');
Route::get('/items/{id}/edit', [ItemController::class,'edit']);
Route::put('/items/{id}/update', [ItemController::class,'update']);
Route::get('/items/{id}/delete', [ItemController::class,'destroy']);
