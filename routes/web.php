<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books','BookController@index')->name('book.index');
Route::get('/books/create','BookController@create')->name('book.create');
Route::post('/books/store','BookController@store')->name('book.store');

// Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('pizza.index');
// Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create'])->name('pizza.create');
// Route::post('/books/store', [App\Http\Controllers\BookController::class, 'store'])->name('pizza.store');
