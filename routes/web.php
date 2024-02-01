<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UtenteController;
use App\Models\Book;
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

Route::get('/', function () {
    return view('welcome');
});     



Route::get('/books', [BookController::class, 'main'])->name('books.main');
Route::get('/books/{book}', [BookController::class, 'show2'])->name('books.show2');
Route::get('/books/{book}/cart', [BookController::class, 'cart'])->name('books.cart'); /*carrello */

Route::get('/admin', [BookController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [BookController::class, 'create'])->name('admin.create');
Route::get('/admin/{book}', [BookController::class, 'show'])->name('admin.show');
Route::post('/admin/store', [BookController::class, 'store'])->name('admin.store');
Route::get('/admin/{book}/edit', [BookController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{book}/update', [BookController::class, 'update'])->name('admin.update');
Route::delete('/admin/{book}/destroy', [BookController::class, 'destroy'])->name('admin.destroy');



Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');