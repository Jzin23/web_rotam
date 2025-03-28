<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Artigos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->id('ID_ARTIGO');
            $table->string('TITULO_ART', 45);
            $table->string('SUBTITULO_ART', 45);
            $table->string('CONTEUDO_ART', 45);
            $table->string('LINK_ART', 45)->nullable();
            $table->string('CAMINHO_FOTO', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}
