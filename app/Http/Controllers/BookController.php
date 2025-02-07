<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Cache;

class BookController extends Controller
{
    public function index()
    {
        return Cache::remember('books', 60, function () {
            return Book::all();
        });
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'publish_date' => 'nullable|date',
            'author_id' => 'required|exists:authors,id',
        ]);

        $book = Book::create($validated);
        Cache::forget('books');
        return response()->json($book, 201);
    }

    public function show(Book $book)
    {
        return response()->json($book);
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'publish_date' => 'nullable|date',
            'author_id' => 'sometimes|required|exists:authors,id',
        ]);

        $book->update($validated);
        Cache::forget('books');
        return response()->json($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        Cache::forget('books');
        return response(null, 204);
    }
}
