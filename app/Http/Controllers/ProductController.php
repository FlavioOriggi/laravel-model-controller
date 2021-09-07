<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function products(){
        $comics = Product::all();

        return view('comics', compact('comics'));



    }
     


}

// public function comicsitem () {

//     $data = config('comics');
//     $comics = ['comics' => $data];

//     return view('comics', $comics);
// }

// // @show

// public function show($id) {

//     $data = config('comics');
//     // dd($data)
//     $comics = ['comics dettaglio' => $data[$id]];
//     // dd($comics)
//     return view('dettaglio', $comics);
// }
