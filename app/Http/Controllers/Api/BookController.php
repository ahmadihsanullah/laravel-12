<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() 
    {
        // $book = Book::with('authors')->first();
        

        // return response()->json([
        //     'data' => $book
        // ]);

        $author = Author::with('books')->first();
        // $author->books()->attach(3);
        // $author->books()->detach(3);
        return response()->json([
            'data' => $author
        ]);
    }
}
