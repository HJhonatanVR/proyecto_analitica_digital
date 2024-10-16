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
        Schema::create('campanas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre de la campaña
            $table->integer('impresiones'); // Impresiones del anuncio
            $table->integer('clics'); // Clics generados
            $table->float('ctr'); // Click-through rate (CTR)
            $table->integer('conversiones'); // Número de conversiones
            $table->float('tasa_conversion'); // Tasa de conversión
            $table->float('cpc'); // Costo por clic (CPC)
            $table->float('gasto_total'); // Gasto total de la campaña
            $table->float('ingresos_generados'); // Ingresos generados por la campaña
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campanas');
    }
};
