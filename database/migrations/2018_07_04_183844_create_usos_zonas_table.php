<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsosZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usos_zonas', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('uso',['A','T','P']) ->default('P'); //A = Adequado, T = Tolerado, P = Proibido 


            //------------------------FOREIGN--------------------------------
            $table->integer('zona_id')->unsigned();
            $table->integer('uso_id')->unsigned();
            //---------------------------------------------------------------

            $table->timestamps();
        });

        //para usar com postgres
        DB::statement(" 
            ALTER TABLE usos_zonas 
	            ALTER COLUMN uso DROP DEFAULT,
	            ALTER COLUMN uso type tp_usos_zonas USING (uso::tp_usos_zonas),
	            ALTER COLUMN uso SET DEFAULT 'P'
        ");

        Schema::table('usos_zonas', function($table){
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('cascade');
            $table->foreign('uso_id')->references('id')->on('usos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usos_zonas');
    }
}
