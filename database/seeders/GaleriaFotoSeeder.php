<?php

namespace Database\Seeders;

use App\Models\GaleriaFoto;
use GaleriaFotos;
use Illuminate\Database\Seeder;

class GaleriaFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GaleriaFoto::create([
           'foto' => 'equipe 2.jpg'
        ]);
    }
}