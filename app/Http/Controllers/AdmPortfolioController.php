<?php

namespace App\Http\Controllers;

use id;
use App\Models\Portfolio;
use App\Models\GaleriaFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inicioPortfolio()
    {
        $portfolios = Portfolio::all();

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

        // Validação dos dados enviados pelo formulário
        try {
            $request->validate([
                'nome_atleta' => 'required|string|max:45',
                'descricao_breve' => 'required|string|max:255',
                'caminho_foto_exibicao' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'caminho_curriculo_atleta' => 'required|file|max:2048',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }


        $fotoPath = $request->file('caminho_foto_exibicao')->store('portfolios/fotos', 'public');  //salvar a foto
        $fotoNome = basename($fotoPath); //extrai apenas o nome do arquivo


        $curriculoPath = $request->file('caminho_curriculo_atleta')->store('portfolios/curriculos', 'public'); //salvar o currículo
        $curriculoNome = basename($curriculoPath); //extrai apenas o nome do arquivo

        $portfolio = new Portfolio();
        $portfolio->nome_atleta = $request->nome_atleta;
        $portfolio->descricao_breve = $request->descricao_breve;
        $portfolio->caminho_curriculo_atleta = $curriculoNome ?? null;
        $portfolio->caminho_foto_exibicao = $fotoNome ?? null;
        $portfolio->save();

        return redirect()->back()->with('Sucesso', 'Portfólio criado com exito!');

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
        dd('Método destroy acionado', $id);
    }
}
