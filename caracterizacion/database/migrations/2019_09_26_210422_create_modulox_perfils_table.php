<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuloxPerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulox_perfils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('permiso');
            $table->bigInteger('perfil_id')->unsigned();
            $table->bigInteger('modulo_id')->unsigned();
            $table->timestamps();
            $table->foreign('perfil_id')->references('id')->on('perfils');
            $table->foreign('modulo_id')->references('id')->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulox_perfils');
    }
}
