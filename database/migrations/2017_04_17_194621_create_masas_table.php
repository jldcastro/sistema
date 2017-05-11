<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('f37_id')->unsigned()->nullable();
            $table->foreign('f37_id')->references('numero')->on('f37s')->onDelete('cascade');
            $table->integer('cantidad3');
            $table->integer('tipoEquipo3_id')->unsigned()->nullable();
            $table->foreign('tipoEquipo3_id')->references('id')->on('tipos_equipos')->onDelete('cascade');
            $table->integer('marca3_id')->unsigned()->nullable();
            $table->foreign('marca3_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('modelo3_id')->unsigned()->nullable();
            $table->foreign('modelo3_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->integer('material_id')->unsigned()->nullable();
            $table->foreign('material_id')->references('id')->on('materiales')->onDelete('cascade');
            $table->string('clase_oiml');
            $table->string('ubicacion3');
            $table->integer('capacidad3');
            $table->integer('unidadc3_id')->unsigned()->nullable();
            $table->foreign('unidadc3_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->integer('graduacion3');
            $table->integer('unidadg3_id')->unsigned()->nullable();
            $table->foreign('unidadg3_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->integer('condicion3_id')->unsigned()->nullable();
            $table->foreign('condicion3_id')->references('id')->on('condiciones')->onDelete('cascade');
            $table->string('r_ajuste');
            $table->string('r_mantencion');
            $table->integer('v_referencial3');
            $table->integer('v_unitario3')->nullable();
            $table->date('f_tentativa3');
            $table->time('h_tentativo3');
            $table->text('observacion3');
            $table->integer('periocidad3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('masas');
    }
}
