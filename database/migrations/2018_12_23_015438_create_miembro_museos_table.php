<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiembroMuseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro_museos', function (Blueprint $table) {
          $table->increments('id_miembro');
          $table->string('nombre');
          $table->string('correo');
          $table->string('puesto');
          $table->integer('esjuntaadmin');//es 1 si es de junta admin, 0 si es de equipo de trabajo.
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miembro_museos');
    }
}
