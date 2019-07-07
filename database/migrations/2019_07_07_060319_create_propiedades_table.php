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
            $table->bigInteger('provincia_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->string('localizacion')->nullable();
            $table->string('avaluo')->nullable();
            $table->string('plano')->nullable();
            $table->double('tamano_construccion')->nullable();
            $table->string('tamano_terreno')->nullable();
            $table->timestamps();
        });

        Schema::table('propiedades', function($table) {
            $table->foreign('provincia_id')->references('id')->on('provincias');
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
