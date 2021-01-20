<?php

namespace App\Http\Controllers\books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\booksModel;

class booksController extends Controller
{
    public function books() {
        return response()->json(booksModel::get(), 200);
    }

    public function booksById($id)
    {
        return response()->json(booksModel::find($id), 200);
    }

    public function booksSave(Request $req) {
        $books = booksModel::create($req->all());
        return response()->json($books, 201);
    }

    public function booksDelete(Request $req, booksModel $books) {
        $books->delete();
        return response()->json('', 204);
    }
}
