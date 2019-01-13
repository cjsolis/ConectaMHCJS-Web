<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioUsoEspacios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('formulariousoespacios', function (Blueprint $table) {
        $table->increments('id_usoespacios');
        $table->string('nombre');
        $table->string('correo');
        $table->string('telefono');
        $table->string('institucion');
        $table->string('numpersonas');
        $table->string('fecha');
        $table->string('hora');
        $table->string('motivo');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulariousoespacios');
    }
}
