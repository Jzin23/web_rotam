<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class AdmArtigosController extends Controller
{
    /**
     * Exibir uma listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ArtigoAdmin');
    }

    public function store(Request $request)
    {
        $request->validate(['titulo' => 'required|max:255', 'subtitulo' => 'required']);
        Artigo::create($request->all());

        return redirect()->route('conf.artigos')->with('success', 'Artigo criado com sucesso!');
    }

    public function read   () {}

    public function update () {}

    public function delete () {}
}
