<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models;
use App\Models\Artigo;

class ArtigosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artigo::create([
            'titulo' => 'Inicio rotam 2',
            'subtitulo' => 'Metodo de vencer campeonato'
        ]);
    }
}
