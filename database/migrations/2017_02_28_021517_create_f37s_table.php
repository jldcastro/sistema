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
            $table->string('nombre_contacto')->nullable();
            $table->string('fono_contacto')->nullable();
            $table->string('correo_contacto')->nullable();
            $table->string('direccion_cliente')->nullable();
            $table->string('direccion_envio')->nullable();
            $table->string('ciudad_envio')->nullable();
            $table->string('direccion_despacho')->nullable();
            $table->string('nota_venta')->nullable();
            $table->string('orden_compra')->nullable();
            $table->string('tipo_cliente');
            $table->text('observaciones');
            $table->text('comunicacion')->nullable();
            $table->integer('pregunta1')->nullable();
            $table->integer('pregunta2')->nullable();
            $table->integer('pregunta3')->nullable();
            $table->integer('nfactura')->nullable();
            $table->integer('monto_neto')->nullable();
            $table->integer('it')->nullable();
            $table->integer('vt_cotizado')->nullable();
            $table->integer('monto_neto2')->nullable();
            $table->integer('diferencia')->nullable();
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
