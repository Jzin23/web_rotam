<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Portfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id('ID_PORTFOLIO');
            $table->string('NOME_ATLETA', 45);
            $table->string('DESCRICAO_BREVE', 45);
            $table->string('CAMINHO_CURRICULO_ATLETA', 45);
            $table->string('CAMINHO_FOTO_EXIBICAO', 45);
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
        Schema::dropIfExists('portfolios');
    }
}
