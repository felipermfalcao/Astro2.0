<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesSeriesController extends Controller
{
    public function index()
    {
        return view('filmes');
    }
}
