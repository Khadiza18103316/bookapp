<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index()
    {
        return "list of index page";
    }
    public function create()
    {
        return view ('book.create');
    }
    public function store(Request $request)
    {
        Book::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category'=>$request->category,

        ]);
        return back();
    }
}
