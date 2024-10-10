<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConquistaHistoriaPortfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conquista_historia_portfolio', function (Blueprint $table) {
            
            $table->id('id_conquista_historia_portfolio'); 
            $table->unsignedBigInteger('id_portfolio'); 
            $table->string('titulo',100)->default("Definir o titulo"); 
            $table->string('descricao',1000)->default("Definir uma descrição"); 
            $table->timestamps();

           
            $table->foreign('id_portfolio')->references('id_portfolio')->on('portfolios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conquista_historia_portfolio');
    }
}