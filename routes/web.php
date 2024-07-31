<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FilmController,
    KritikController,
    CommentController,
};

Route::get('/', [FilmController::class, 'movieHome'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');
Route::get('/kritik', [KritikController::class, 'index']);
Route::post('/kritik', [KritikController::class, 'store']);
Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
Route::get('/comment', [CommentController::class, 'create'])->name('comment.create');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::get('/comment/{comment}', [CommentController::class, 'show'])->name('comment.show');
