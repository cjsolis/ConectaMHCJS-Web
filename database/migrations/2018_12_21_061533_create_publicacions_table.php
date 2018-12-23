<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
          $table->increments('id_publicacion');
          $table->integer('id_imagen')->unsigned()->unique();
          $table->foreign('id_imagen')->references('id_imagen')->on('imagens');
          $table->string('tipo_publicacion');
          $table->string('nombre_publicacion');
          $table->integer('ano');
          $table->string('tipo_acabado');
          $table->string('dimensiones');
          $table->integer('num_paginas');
          $table->string('estado');
          $table->string('sintesis');
          $table->integer('precio');
          $table->string('autor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacions');
    }
}
