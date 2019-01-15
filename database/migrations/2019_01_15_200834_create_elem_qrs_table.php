<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElemQrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elem_qrs', function (Blueprint $table) {
            $table->increments('id_elemqr');
            $table->string('nombre_elemqr');
            $table->longText('descripcion_elemqr');
            $table->string('url_img_elemqr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elem_qrs');
    }
}
