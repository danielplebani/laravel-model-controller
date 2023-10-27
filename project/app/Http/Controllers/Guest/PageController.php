<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        //dd(Movie::all());
        return view('main', ['movies' => Movie::all()]);
    }

    public function film()
    {
        return view('film');
    }

    public function serie()
    {
        return view('serie');
    }

    public function releases()
    {
        return view('releases');
    }
}
