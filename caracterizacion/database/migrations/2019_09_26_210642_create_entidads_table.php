<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('crea_id')->unsigned();
            $table->integer('edita_id')->unsigned();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('representante_legal');
            $table->string('mail_contacto');
            $table->string('tel_contacto');
            $table->bigInteger('municipio_id')->unsigned();
            $table->timestamps();
            $table->foreign('municipio_id')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidads');
    }
}
