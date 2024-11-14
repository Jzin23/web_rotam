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

        return view('admin.PortfolioAdmin', compact('portfolios'));
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome_atleta' => 'required|string|max:255',
            'descricao_breve' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Validação da foto
        ]);

        // Criando um novo Portfólio
        $portfolio = new Portfolio();
        $portfolio->nome_atleta = $request->input('nome_atleta');
        $portfolio->descricao_breve = $request->input('descricao_breve');

        // Salvar o portfólio (sem a imagem)
        $portfolio->save();

        // Caso tenha uma imagem, faça o upload
        if ($request->hasFile('foto')) {
            // Armazenar a foto na pasta 'public/images' e recuperar o caminho
            $filePath = $request->file('foto')->store('public/images');

            // Criar uma nova entrada na tabela 'galeria_fotos' associada ao portfólio
            $foto = new GaleriaFoto();
            $foto->foto = basename($filePath);  // Salvar o nome do arquivo (sem o caminho)
            $foto->save();  // Salvar a foto no banco de dados

            // Associa a foto ao portfólio
            $portfolio->id_foto = $foto->id_foto;
            $portfolio->save();
        }

        // Redirecionar de volta para a página de portfólios com uma mensagem de sucesso
        return redirect()->route('conf.portfolios.index')->with('success', 'Portfólio criado com sucesso!');
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
        // Encontre o portfólio pelo ID
        $portfolio = Portfolio::findOrFail($id);

        // Retorne a visão com os dados do portfólio para edição
        return view('admin.portfolioEdit', compact('portfolio'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_portfolio)
    {
        // Encontre o portfólio
        $portfolio = Portfolio::findOrFail($id_portfolio);

        // Validação dos dados do formulário
        $request->validate([
            'nome_atleta' => 'required|string|max:255',
            'descricao_breve' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Atualizar os dados
        $portfolio->nome_atleta = $request->input('nome_atleta');
        $portfolio->descricao_breve = $request->input('descricao_breve');

        // Verifique se foi enviado uma nova foto e atualize
        if ($request->hasFile('foto')) {
            $filePath = $request->file('foto')->store('public/images');
            // Atualize a foto associada ao portfólio
            $foto = new GaleriaFoto();
            $foto->foto = basename($filePath);
            $foto->save();

            // Atualize o relacionamento de foto
            $portfolio->id_foto = $foto->id_foto;
        }

        // Salve as alterações no portfólio
        $portfolio->save();

        // Redirecione de volta para a lista de portfólios com uma mensagem de sucesso
        return redirect()->route('conf.portfolio');
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
