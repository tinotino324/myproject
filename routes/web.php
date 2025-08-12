<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/check', function () {
    return view('mypage');
});

Route::get('/index', [Mycontroller::class, 'index'])->middleware('auth');
Route::get('/author', [Mycontroller::class, 'author'])->middleware('auth');
// Route::get('/books', [Mycontroller::class, 'books'])->middleware('CheckStatus');
Route::get('/books', [Mycontroller::class, 'books'])->middleware('auth');
Route::get('/chatbot', [Mycontroller::class, 'chatbot'])->middleware('auth');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [LoginController::class, 'registerForm'])->name('register');

Route::post('/create_user', [LoginController::class, 'create_user'])->name('create_user');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login_check', [LoginController::class, 'login_check'])->name('login_check');
Route::post('/save', [Mycontroller::class, 'save'])->name('save');
Route::post('/save_author', [Mycontroller::class, 'save_author'])->name('save_author');
Route::post('/get_authors', [Mycontroller::class, 'get_authors'])->name('get_authors');
Route::post('/delete', [Mycontroller::class, 'delete'])->name('delete');
Route::post('/save_book', [Mycontroller::class, 'save_book'])->name('save_book');
Route::post('/get_books', [Mycontroller::class, 'get_books'])->name('get_books');
Route::post('/book_delete', [Mycontroller::class, 'book_delete'])->name('book_delete');
Route::post('/get_answer', [Mycontroller::class, 'get_answer'])->name('get_answer');

