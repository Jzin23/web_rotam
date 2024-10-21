<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaleriaFotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('galeria_fotos', function (Blueprint $table) {
            
            $table->id('id_foto'); 
            $table->unsignedBigInteger('id_carrocel'); 
            $table->string('foto',100)->default("Imagem não definida no banco de dados"); 
            $table->timestamps();

            $table->foreign('id_carrocel')->references('id_carrocel')->on('carrocel_galerias');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria_fotos');
    }
}