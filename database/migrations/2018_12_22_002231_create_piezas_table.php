<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piezas', function (Blueprint $table) {
          $table->increments('id_pieza');
          $table->string('nombre');
          $table->string('descripcion');
          $table->integer('id_imagen')->unsigned()->unique();
          $table->foreign('id_imagen')->references('id_imagen')->on('imagens');
          $table->integer('id_categoria_pieza')->unsigned()->unique();
          $table->foreign('id_categoria_pieza')->references('id_categoria_pieza')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piezas');
    }
}
