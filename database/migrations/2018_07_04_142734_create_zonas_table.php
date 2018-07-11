<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zonas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nome', '50');
            $table->string('sigla', '10');
            $table->float('testada', 8, 2);
            $table->float('area', 8, 2);
            $table->float('coeficiente_min', 8, 1);
            $table->float('coeficiente_bas', 8, 1);
            $table->float('coeficiente_max', 8, 1);
            $table->float('afastamento', 8, 2);
            $table->string('tx_ocupacao', 10);
            $table->string('tx_permeabilidade', 10);
            $table->string('vagas_estacionamento', 10);


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
        Schema::dropIfExists('zonas');
    }
}
