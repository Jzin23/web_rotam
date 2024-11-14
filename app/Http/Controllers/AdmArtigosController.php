<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class AdmArtigosController extends Controller
{
    /* Exibir a listagem de artigos. **/
    public function index()
    {
        $artigos = Artigo::all(); // Buscar todos os artigos
        return view('admin.ArtigoAdmin', compact('artigos')); // Exibir na view com os artigos
    }

    /* Exibir o formulário para criar um novo artigo. */
    public function create()
    {
        return view('admin.ArtigoAdmin'); // Aqui você pode criar um formulário para adicionar um novo artigo
    }

    /* Armazenar um novo artigo no banco de dados. */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'titulo' => 'required|max:100',
            'subtitulo' => 'nullable|max:800',
        ]);

        // Criando o artigo no banco
        Artigo::create([
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
        ]);

        // Redirecionando com mensagem de sucesso
        return redirect()->route('conf.artigos.index')->with('success', 'Artigo adicionado com sucesso!');
    }

    /* Exibir o formulário para editar o artigo especificado. */
    public function edit($id)
    {
        $artigo = Artigo::findOrFail($id); // Buscar o artigo pelo id
        return view('admin.ArtigoAdmin', compact('artigo')); // Passar o artigo para a view de edição
    }

    /* Atualizar os dados do artigo no banco de dados. */
    public function update(Request $request, $id)
    {
        $artigo = Artigo::findOrFail($id); // Encontrar o artigo pelo id

        // Validar os dados de entrada
        $request->validate([
            'titulo' => 'required|max:100',
            'subtitulo' => 'nullable|max:800',
        ]);

        // Atualizar os dados do artigo
        $artigo->update([
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
        ]);

        // Redirecionar de volta com mensagem de sucesso
        return redirect()->route('conf.artigos.index')->with('success', 'Artigo atualizado com sucesso!');
    }

    /* Remover o artigo do banco de dados. */
    public function destroy($id)
    {
        $artigo = Artigo::findOrFail($id); // Buscar o artigo
        $artigo->delete(); // Excluir o artigo

        // Redirecionar com mensagem de sucesso
        return redirect()->route('conf.artigos.index')->with('success', 'Artigo excluído com sucesso!');
    }
}

