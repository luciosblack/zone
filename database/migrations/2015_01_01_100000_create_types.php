<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypes extends Migration
{
   /**
    * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      //usado na 'usos_zonas'
      DB::statement(" CREATE TYPE tp_usos_zonas AS ENUM ('A','T','P') ");

   }

   /**
    * Reverse the migrations.
   *
   * @return void
   */
   public function down()
   {
      DB::statement(" DROP TYPE tp_usos_zonas ");
   }
}
