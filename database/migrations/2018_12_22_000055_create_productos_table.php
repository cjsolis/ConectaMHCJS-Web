<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
          $table->increments('id_producto');
          $table->integer('id_imagen')->unsigned()->unique();
          $table->foreign('id_imagen')->references('id_imagen')->on('imagens');
          $table->string('nombre');
          $table->string('descripcion');
          $table->integer('precio');
          $table->integer('disponibles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
