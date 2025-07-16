<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/check', function () {
    return view('mypage');
});

Route::get('/index', [Mycontroller::class, 'index']);
Route::get('/author', [Mycontroller::class, 'author']);
Route::get('/books', [Mycontroller::class, 'books']);
Route::get('/chatbot', [Mycontroller::class, 'chatbot']);

Route::post('/save', [Mycontroller::class, 'save'])->name('save');
Route::post('/save_author', [Mycontroller::class, 'save_author'])->name('save_author');
Route::post('/get_authors', [Mycontroller::class, 'get_authors'])->name('get_authors');
Route::post('/delete', [Mycontroller::class, 'delete'])->name('delete');
Route::post('/save_book', [Mycontroller::class, 'save_book'])->name('save_book');
Route::post('/get_books', [Mycontroller::class, 'get_books'])->name('get_books');
Route::post('/book_delete', [Mycontroller::class, 'book_delete'])->name('book_delete');
Route::post('/get_answer', [Mycontroller::class, 'get_answer'])->name('get_answer');

