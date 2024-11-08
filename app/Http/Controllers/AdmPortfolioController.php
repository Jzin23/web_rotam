<?php

namespace App\Http\Controllers;

use id;
use App\Models\Portfolio;
use App\Models\GaleriaFoto;
use Illuminate\Http\Request;

class AdmPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inicioPortfolio()
    {

        $portfolios = Portfolio::with('imagem')->get();
        
        return view('admin.portfolioAdmin', compact('portfolios'));
    }
    

    /**
     * Mostrar o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Exibe o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * Exibe o formulário para edição do recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit(Request $request, $id)
{   
     $portfolio = Portfolio::findOrFail($id);

    // Validação dos dados (caso necessário)
    $request->validate([
        'nome_atleta' => 'required|string|max:255',
        'descricao_breve' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);

    // Atualizar os dados do portfólio
    $portfolio->nome_atleta = $request->input('nome_atleta');
    $portfolio->descricao_breve = $request->input('descricao_breve');

    // Atualizar a foto (se houver uma nova)
    if ($request->hasFile('foto')) {
        $filePath = $request->file('foto')->store('public/images');
        $portfolio->imagem()->updateOrCreate(['portfolio_id' => $portfolio->id], ['foto' => basename($filePath)]);
    }

    $portfolio->save();

    // Redirecionar de volta para a página de portfólios
    return redirect()->route('conf.portfolio')->with('success', 'Portfólio atualizado com sucesso!');
}

    /**
     * Atualiza o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
