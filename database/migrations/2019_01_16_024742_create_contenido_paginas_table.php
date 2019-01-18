<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidoPaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_paginas', function (Blueprint $table) {
            $table->increments('id_contenido');
            $table->string('titulo_contenido')->nullable();
            $table->longText('texto_contenido');
            $table->string('tipo_contenido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenido_paginas');
    }
}
