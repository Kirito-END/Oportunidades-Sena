<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('fecha_seguimiento');
            $table->string('descripcion');
            $table->integer('porcentaje_ejecucion');
            $table->bigInteger('estado_id')->unsigned();
            $table->bigInteger('oportunidad_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->timestamps();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos');
    }
}
