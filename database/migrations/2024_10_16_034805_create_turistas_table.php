<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('turistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del turista
            $table->integer('edad'); // Edad
            $table->string('genero'); // Género (Masculino/Femenino)
            $table->string('pais_origen'); // País de origen
            $table->string('interes_turistico'); // Tipo de interés turístico
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turistas');
    }
};
