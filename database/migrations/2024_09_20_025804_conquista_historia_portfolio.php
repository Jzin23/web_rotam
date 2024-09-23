<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConquistaHistoriaPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conquista_historia_portfolios', function (Blueprint $table) {
            
            $table->id(); 
            $table->unsignedBigInteger('id_portfolio'); 
            $table->string('titulo'); 
            $table->text('descricao'); 
            $table->timestamps();

           
            $table->foreign('id_portfolio')->references('id_portfolio')->on('portfolio');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conquista_historia_portfolios');
    }
}