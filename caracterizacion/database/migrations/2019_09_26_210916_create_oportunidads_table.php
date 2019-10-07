<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOportunidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidads', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->integer('edita_id')->unsigned();
            $table->integer('crea_id')->unsigned();
            $table->bigInteger('responsable_id')->unsigned();            
            $table->string('descripcion');            
            $table->date('fecha_origen');            
            $table->string('compromiso_aleado');            
            $table->string('compromiso_centro');            
            $table->string('resultado_relacional');
            $table->bigInteger('seguimiento_id')->unsigned();
            $table->bigInteger('entidad_id')->unsigned();            
            $table->bigInteger('estado_id')->unsigned();            
            $table->bigInteger('cod_oportunidad')->unsigned();            
            $table->timestamps();
            $table->foreign('entidad_id')->references('id')->on('entidads');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('cod_oportunidad')->references('id')->on('tipo_oportunidads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oportunidads');
    }
}
