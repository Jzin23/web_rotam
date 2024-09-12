<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigosController extends Controller
{
    public function inicioArtigos ()
    {
        return view('artigos');
    }
}
