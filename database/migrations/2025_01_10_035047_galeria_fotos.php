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
            $table->id('ID_FOTO');
            $table->unsignedBigInteger('CARROCEL_GALERIA_ID_CARROCEL');
            $table->string('CAMINHO_FOTO', 255);
            $table->string('FORMATO_FOTO', 45);
            $table->string('TAMANHO_FOTO', 45);
            $table->string('GALERIA_FOTOS', 45)->nullable();
            $table->timestamps();

            $table->foreign('CARROCEL_GALERIA_ID_CARROCEL')->references('ID_CARROCEL')->on('carrocel_galerias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
