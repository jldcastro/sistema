<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateF37sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f37s', function (Blueprint $table) {
            $table->increments('numero');
            $table->date('fecha_solicitud');
            $table->string('vendedor');
            $table->string('cliente');
            $table->string('comuna_servicio');
            $table->string('lugar_servicio');
            $table->string('nombre_contacto');
            $table->string('fono_contacto');
            $table->string('correo_contacto');
            $table->string('direccion_cliente');
            $table->string('direccion_envio');
            $table->string('ciudad_envio');
            $table->string('direccion_despacho');
            $table->string('nota_venta');
            $table->string('orden_compra');
            $table->string('tipo_cliente');
            $table->text('observaciones');
            $table->text('comunicacion');
            $table->integer('preguhta1');
            $table->integer('pregunta2');
            $table->integer('pregunta3');
            $table->integer('nfactura');
            $table->integer('monto_neto');
            $table->integer('it');
            $table->integer('vt_cotizado');
            $table->integer('monto_neto2');
            $table->integer('diferencia');
            $table->string('estado');
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
        Schema::drop('f37s');
    }
}
