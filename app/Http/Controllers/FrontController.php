<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'DESC')->paginate(6);
        $authors = Author::orderBy('id', 'DESC')->paginate(6);

        return view('index', compact('books', 'authors'));
    }
}
