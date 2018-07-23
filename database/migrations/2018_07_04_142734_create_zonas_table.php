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
            
            $table->string('nome',                  '50');
            $table->string('sigla',                 '20');
            $table->string('testada',               '20');
            $table->string('area',                  '20');
            $table->string('coeficiente_min',       '20');
            $table->string('coeficiente_bas',       '20');
            $table->string('coeficiente_max',       '20');
            $table->string('afastamento',           '20');
            $table->string('tx_ocupacao',           '20');
            $table->string('tx_permeabilidade',     '20');
            $table->string('vagas_estacionamento',  '20');


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
