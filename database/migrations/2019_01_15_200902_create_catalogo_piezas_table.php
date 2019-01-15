<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogoPiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_piezas', function (Blueprint $table) {
            $table->increments('id_pieza');
            $table->string('nombre_pieza');
            $table->longText('descripcion_pieza');
            $table->string('url_img_pieza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogo_piezas');
    }
}
