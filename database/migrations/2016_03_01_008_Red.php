<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Red extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Red', function (Blueprint $table) {
            $table->increments('id_red');
            $table->integer('id_empresa')->unsigned();
            $table->string('red_empresa', 30);
            $table->foreign('id_empresa')->references('id_empresa')->on('Empresa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Red');
    }
}
