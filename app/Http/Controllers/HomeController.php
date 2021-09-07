<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('layouts.app');
    }

    public function movie() {
        return view('movie');
    }

    public function tv() {
        return view('tv');
    }

    public function games() {
        return view('games');
    }

    public function collectibles() {
        return view('collectibles');
    }

    public function videos() {
        return view('videos');
    }

    public function fans() {
        return view('fans');
    }

    public function news() {
        return view('news');
    }

    public function shop() {
        return view('shop');
    }


}
