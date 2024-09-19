<?php

namespace App\Http\Controllers;

use App\Models\Artigos;
use Illuminate\Http\Request;

class ArtigosController extends Controller
{
    public function inicioArtigos ()
    {
        return view('artigos');
    }

    public function create()
    {
        return view('artigos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
        ]);

        artigos::create($request->all());

        return redirect()->route('artigos')->with('success', 'artigos criado com sucesso!');
    }

    public function edit($id)
    {
        $artigo = artigos::find($id);
        return view('artigos.edit', compact('artigo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
        ]);

        $artigo = artigos::find($id);
        $artigo->update($request->all());

        return redirect()->route('artigos')->with('success', 'artigos atualizado com sucesso!');
    }

}
