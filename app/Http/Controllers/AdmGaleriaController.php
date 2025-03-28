<?php

namespace App\Http\Controllers;

use App\Models\GaleriaFoto;
use App\Models\CarrocelGaleria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use illuminate\support\Facades\Storage;

class AdmGaleriaController extends Controller
{

    public function index()
    {
        $fotos = GaleriaFoto::all();
        $galerias = CarrocelGaleria::with('imagens')->get();


        return view('admin.GaleriaAdmin', compact('fotos','galerias'));
    }

    public function store(Request $request)
    {
      //  dd($request->all(), $request->file('imagens'));

        $request->validate([
            'titulo'=>'required|string|max:255',
            'imagens' => 'required|array',
            'imagens.*' => 'image'
        ]);

        $carrossel = CarrocelGaleria::create([
            'TITULO_CARROCEL' => $request->titulo,
            'DESCRICAO_CARROCEL' => $request->descricao ?? 'Sem descrição'
        ]);

        $carrosselId = $carrossel->ID_CARROCEL ?? $carrossel->getKey(); 

        if (!$carrosselId) {
            return redirect()->back()->with('error', 'Erro ao criar o carrossel.');
        }

        if ($request->hasFile('imagens')) {

            foreach ($request->file('imagens') as $imagem) 
            {
                $path = $imagem->store('galeria', 'public');

                GaleriaFoto::create([
                    'CARROCEL_GALERIA_ID_CARROCEL' => $carrosselId,
                    'CAMINHO_FOTO' => $path,
                    'FORMATO_FOTO' => $imagem->extension(),
                    'TAMANHO_FOTO' => $imagem->getSize()
                ]);
            }
        }

        return Redirect()->route('conf.galeria')->with('success', 'Imagem adicionada com sucesso');
    }

    public function update(Request $request, $id)
    {
        $request->validate(['foto' => 'nullable|image']);

        $galeria = GaleriaFoto::findOrFail($id);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($galeria->foto); //exclui a imagem antiga

            $path = $request->file('foto')->store('galeria', 'public');
            $galeria->update(['foto'=>$path]);
        }

        return redirect()->route('conf.galeria')->with('success', 'Imagem atualizada com sucesso');
    }

    public function destroy($id)
    {
        $galeria = GaleriaFoto::findOrFail('$id');
        Storage::disk('public')->delete($galeria->foto);
        $galeria->delete();

        return redirect()->route('conf.galeria')->with('success', 'Imagem excluída com sucesso');
    }
}
