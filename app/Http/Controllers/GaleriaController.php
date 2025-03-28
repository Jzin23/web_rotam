<?php

namespace App\Http\Controllers;

use App\Models\GaleriaFoto;
use Illuminate\Http\Request;
use App\Models\CarrocelGaleria;

class GaleriaController extends Controller
{
    public function inicioGaleria ()
    {
        $fotos = GaleriaFoto::all();
        $galerias = CarrocelGaleria::with('imagens')->get();

        return view('Galeria', compact('fotos','galerias'));
    }
}
