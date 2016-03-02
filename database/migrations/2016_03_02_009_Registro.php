<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Registro', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->integer('id_empleado')->unsigned();
            $table->integer('id_dispositivo')->unsigned();
            $table->foreign('id_dispositivo')->references('id_dispositivo')->on('Dispositivo')->onDelete('cascade');
            $table->foreign('id_empleado')->references('id_empleado')->on('Empleados')->onDelete('cascade');
            $table->string('ip_registro', 30);
            $table->date('fecha');
            $table->time('hora');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Registro');
    }
}
