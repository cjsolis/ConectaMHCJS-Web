<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservaVisitaGuiada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reservavisitaguiada', function (Blueprint $table) {
        $table->increments('id_reserva');
        $table->integer('id_usuario')->unsigned()->unique();
        
        $table->string('institucion');
        $table->integer('numpersonas');
        $table->string('rangoedad');
        $table->string('fecha');
        $table->string('hora');
        $table->string('materialeseducativos');
        $table->string('necesidadesespeciales');
        $table->string('telefono');





      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('reservavisitaguiada');
    }
}
