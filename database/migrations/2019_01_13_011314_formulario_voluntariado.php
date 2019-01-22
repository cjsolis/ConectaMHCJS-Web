<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioVoluntariado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('formulario_voluntariados', function (Blueprint $table) {
        $table->increments('id_voluntariado');
        $table->string('nombre');
        $table->string('correo');
        $table->integer('telefono');
        $table->longText('motivo');
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
          Schema::dropIfExists('formulario_voluntariados');
    }
}
