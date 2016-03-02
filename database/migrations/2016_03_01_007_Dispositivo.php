<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dispositivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dispositivo', function (Blueprint $table) {
            $table->increments('id_dispositivo');
            $table->integer('id_empleado')->unsigned();
            $table->string('dispositivo', 30)->unique();
            $table->string('mac_adress', 30)->unique();
            $table->foreign('id_empleado')->references('id_empleado')->on('Empleados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Dispositivo');
    }
}
