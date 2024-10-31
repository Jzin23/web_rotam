<?php

namespace Database\Seeders;

use App\Models\Artigo;
use App\Models\GaleriaFoto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //este metodo realiza o insert de 10 registros ficticios no banco de dados;
         \App\Models\Artigo::factory(10)->create();  
          

         // Já esse aqui realiza o insert dos dados definidos no ArtigosSeeder nos metodos create e estanciando.
         $this->call(ArtigosSeeder::class); 
         $this->call(GaleriaFotoSeeder::class); 
        
    }
}
