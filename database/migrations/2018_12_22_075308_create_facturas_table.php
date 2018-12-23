<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
          $table->increments('id_factura');
          $table->integer('id_cliente')->unsigned()->unique();
          $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
          $table->integer('id_producto')->unsigned()->unique();
          $table->foreign('id_producto')->references('id_producto')->on('productos');
          $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
