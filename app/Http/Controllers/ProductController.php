<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function comicsitem () {

        $data = config('comics');
        $comics = ['comics' => $data];

        return view('comics', $comics);
    }
}
