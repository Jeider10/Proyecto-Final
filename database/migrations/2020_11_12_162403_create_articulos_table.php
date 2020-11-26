<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->bigInteger('precio_venta');
            $table->bigInteger('precio_costo');
            $table->string('tipo_articulo');
            $table->string('proveedor');
            $table->date('fecha_ibgreso');
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
        Schema::drop('Articulos');
    }
}
