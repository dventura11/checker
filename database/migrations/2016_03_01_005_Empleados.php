<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empleados', function (Blueprint $table) {
            $table->increments('id_empleado');
            $table->string('tx_nombre', 30);
            $table->string('tx_apellido_paterno', 30);
            $table->string('tx_nombre_materno', 30);
            $table->time('entrada');
            $table->time('salida');
            $table->time('comida_e');
            $table->time('comida_s');
            $table->integer('id_area')->unsigned();
            $table->integer('id_puesto')->unsigned();
            $table->integer('id_tipo')->unsigned();
            $table->foreign('id_area')->references('id_area')->on('Areas')->onDelete('cascade');
            $table->foreign('id_puesto')->references('id_puesto')->on('Puestos')->onDelete('cascade');
            $table->foreign('id_tipo')->references('id_tipo')->on('TipoEmpleado')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Empleados');
    }
}
