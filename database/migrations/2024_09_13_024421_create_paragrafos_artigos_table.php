<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParagrafosArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paragrafos_artigos', function (Blueprint $table) {
            $table->id('id_paragrafo');
            $table->unsignedBigInteger('id_artigo');
            $table->string('titulo_paragrafo')->default("Definir titulo do parágrafo"); 
            $table->string('texto_artigo',5000)->default("Definir o texto do artigo");
            $table->timestamps();

            $table->foreign('id_artigo')->references('id_artigo')->on('artigos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paragrafos_artigos');
    }
}
