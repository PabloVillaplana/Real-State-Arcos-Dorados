<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DivisionesTerritoriales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->integerIncrements('codigo');
            $table->string('nombre');
        });

        Schema::create('cantones', function (Blueprint $table) {
            $table->integerIncrements('codigo');
            $table->integer('provincia_codigo')->unsigned();
            $table->string('nombre');
        });

        Schema::create('distritos', function (Blueprint $table) {
            $table->integerIncrements('codigo');
            $table->integer('canton_codigo')->unsigned();
            $table->string('nombre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distritos');
        Schema::dropIfExists('cantones');
        Schema::dropIfExists('provincias');
    }
}
