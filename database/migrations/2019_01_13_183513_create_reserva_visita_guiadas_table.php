<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaVisitaGuiadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reserva_visita_guiadas', function (Blueprint $table) {
        $table->increments('id_reserva');
        $table->integer('id_usuario')->unsigned();
      //  $table->integer('id_usuario')->unsigned()->unique();
        //$table->foreign('id_usuario')->references('id_usuario')->on('users');
        $table->string('institucion');
        $table->string('numpersonas');
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
        Schema::dropIfExists('reserva_visita_guiadas');
    }
}
