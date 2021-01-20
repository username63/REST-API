<?php

namespace App\Http\Controllers\authors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\authorsModel;

class authorsController extends Controller
{
    public function authors() {
        return response()->json(authorsModel::get(), 200);
    }
}
