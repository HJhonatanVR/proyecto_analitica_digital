<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTendenciasTurismoTable extends Migration
{
    public function up()
    {
        Schema::create('tendencias', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Fecha de la tendencia
            $table->integer('fiesta_candelaria'); // Popularidad de "Fiesta de la Candelaria"
            $table->integer('lago_titicaca'); // Popularidad de "Lago Titicaca"
            $table->integer('turismo_puno'); // Popularidad de "Turismo Puno"
            $table->integer('cultura_puno'); // Popularidad de "Cultura Puno"
            $table->boolean('is_partial'); // Campo booleano
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tendencias');
    }
}
