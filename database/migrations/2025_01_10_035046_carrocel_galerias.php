<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrocelGalerias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrocel_galerias', function (Blueprint $table) {
            $table->id('ID_CARROCEL');
            $table->string('TITULO_CARROCEL', 45);
            $table->string('DESCRICAO_CARROCEL', 45);
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
        Schema::dropIfExists('carrocel_galerias');
    }
}
