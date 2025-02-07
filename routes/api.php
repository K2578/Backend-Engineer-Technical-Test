<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// API Routes for Authors
Route::apiResource('authors', AuthorController::class);
Route::get('authors/{id}/books', [AuthorController::class, 'books']);

// API Routes for Books
Route::apiResource('books', BookController::class);
