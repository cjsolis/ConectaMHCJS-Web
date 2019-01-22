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
        $table->string('institucion')->nullable();
        $table->integer('numpersonas');
        $table->integer('rangoedadmenor');
        $table->integer('rangoedadmayor');
        $table->date('fecha')->unique();
        $table->mediumText('materialeseducativos')->nullable();
        $table->mediumText('necesidadesespeciales')->nullable();
        $table->integer('telefono');
        $table->string('estado');
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
        Schema::dropIfExists('reserva_visita_guiadas');
    }
}
