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
      Schema::create('formulario_uso_espacios', function (Blueprint $table) {
        $table->increments('id_usoespacios');
        $table->string('nombre');
        $table->string('correo');
        $table->integer('telefono');
        $table->string('institucion')->nullable();
        $table->date('fecha');
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
        Schema::dropIfExists('formulario_uso_espacios');
    }
}
