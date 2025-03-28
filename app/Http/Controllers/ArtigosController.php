<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigosController extends Controller
{
    public function inicioArtigos ()
    {

        $artigos = Artigo::all();
        return view('artigos', compact('artigos'));
        
    }

}
