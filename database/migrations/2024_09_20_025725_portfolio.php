<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Portfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            
            $table->id('id_portfolio'); 
            $table->string('nome_atleta')->default("Definir Nome do atleta"); 
            $table->string('descricao_breve')->default("Definir descrição breve do atleta"); 
            $table->timestamps(); 
            $table->unsignedBigInteger('id_foto'); 

            $table->foreign('id_foto')->references('id_foto')->on('galeria_fotos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}