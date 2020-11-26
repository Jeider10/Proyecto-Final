<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->string('nombre_empleado');
            $table->date('fecha_facturacion');
            $table->string('forma_pago');
            $table->bigInteger('iva');
            $table->bigInteger('total_factura');
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
        Schema::drop('Facturas');
    }
}
