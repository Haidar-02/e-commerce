<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;

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
Route::get('/', [ItemController::class,'landing'])->name('landing');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerPost', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost'); 

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/items/index', [ItemController::class,'index'])->name('index');
    Route::get('/items/create', [ItemController::class,'create'])->name('items.create');
    Route::post('/items/store', [ItemController::class,'store'])->name('items.store');
    Route::get('/items/{id}/edit', [ItemController::class,'edit'])->name('items.edit');
    Route::put('/items/{id}/update', [ItemController::class,'update'])->name('items.update');
    Route::post('/items/{id}/delete', [ItemController::class,'destroy'])->name('items.destroy');
    Route::get('/items/favorites', [ItemController::class, 'getFavorites'])->name('items.favorites');
    Route::get('/items/cart', [ItemController::class, 'getCart'])->name('items.cart');
    Route::post('/items/addToCart/{item_id}', [ItemController::class, 'addToCart'])->name('items.addToCart');
    Route::post('/items/addToFavorites/{item_id}', [ItemController::class, 'addToFavorites'])->name('items.addToFavorites');
});