<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Galeria extends Migration
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
            $table->string('foto'); 
            $table->timestamps();

            $table->foreign('id_carrocel')->references('id_carrocel')->on('carrocel_galeria');  

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
