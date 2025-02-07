<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Cache;

class AuthorController extends Controller
{
    public function index()
    {
        return Cache::remember('authors', 60, function () {
            return Author::all();
        });
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'birth_date' => 'nullable|date',
        ]);

        $author = Author::create($validated);
        Cache::forget('authors');
        return response()->json($author, 201);
    }

    public function show(Author $author)
    {
        return response()->json($author);
    }

    public function update(Request $request, Author $author)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'bio' => 'nullable|string',
            'birth_date' => 'nullable|date',
        ]);

        $author->update($validated);
        Cache::forget('authors');
        return response()->json($author);
    }

    public function destroy(Author $author)
    {
        $author->delete();
        Cache::forget('authors');
        return response(null, 204);
    }

    public function books($id)
    {
        return Cache::remember("author_books_{$id}", 60, function () use ($id) {
            return Author::findOrFail($id)->books;
        });
    }
}
