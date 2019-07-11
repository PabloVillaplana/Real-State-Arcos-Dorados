<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->bigInteger('costo');
            $table->string('descripcion');
            $table->string('image')->nullable();
            $table->string('localizacion')->nullable();
            $table->string('avaluo')->nullable();
            $table->string('plano')->nullable();
            $table->double('tamano_construccion')->nullable();
            $table->string('tamano_terreno')->nullable();
            $table->integer('provincia_codigo')->unsigned()->nullable();
            $table->integer('canton_codigo')->unsigned()->nullable();
            $table->integer('distrito_codigo')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('provincia_codigo')->references('codigo')->on('provincias');
            $table->foreign('canton_codigo')->references('codigo')->on('cantones');
            $table->foreign('distrito_codigo')->references('codigo')->on('distritos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedades');
    }
}
