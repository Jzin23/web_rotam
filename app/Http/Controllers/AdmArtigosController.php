<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class AdmArtigosController extends Controller
{
    /* Exibir a listagem de artigos. **/
    public function inicioArtigo()
    {
        $artigos = Artigo::all(); // Buscar todos os artigos
        return view('admin.ArtigoAdmin', compact('artigos')); // Exibir na view com os artigos
    }

    /* Armazenar um novo artigo no banco de dados. */
    public function store (Request $request)
    {
      
        try {
            $request->validate([
                'titulo_art' => 'required|string|max:45',
                'subtitulo_art' => 'required|string|max:45',
                'caminho_foto' => 'required|max:2048',
                'conteudo_art' => 'required|string|max:1000',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }

        $fotoPath = $request->file('caminho_foto')->store('artigos/fotos', 'public');  //salvar a foto
        $fotoNome = basename($fotoPath); //extrai apenas o nome do arquivo

        $artigos = new Artigo();
        $artigos->titulo_art = $request->titulo_art;
        $artigos->subtitulo_art = $request->subtitulo_art;
        $artigos->caminho_foto = $fotoNome ?? null;
        $artigos->conteudo_art = $request->conteudo_art;
        $artigos->link_art = $request->link_art;
        $artigos->save();

        return redirect()->back()->with('Sucesso', 'Artigo criado com exito!');
    }


}

