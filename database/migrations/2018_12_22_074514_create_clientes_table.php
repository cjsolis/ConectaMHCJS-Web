<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
          $table->increments('id_cliente');
          $table->integer('id_carrito')->unsigned()->unique();
          $table->foreign('id_carrito')->references('id_carrito')->on('carritos');
          $table->integer('id_factura')->unsigned()->unique();
          $table->string('nombre');
          $table->string('correo');
          $table->string('contrasena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
