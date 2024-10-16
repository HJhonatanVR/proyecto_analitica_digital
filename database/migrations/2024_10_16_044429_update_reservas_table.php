<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateReservasTable extends Migration
{
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id(); // ID de la reserva
            $table->string('nombre'); // Nombre del turista
            $table->integer('edad'); // Edad del turista
            $table->string('genero'); // Género del turista
            $table->string('pais_origen'); // País de origen del turista
            $table->string('paquete_turistico'); // Paquete turístico reservado
            $table->timestamp('fecha_reserva'); // Fecha y hora de la reserva
            $table->enum('estado_reserva', ['Completada', 'Abandonada']); // Estado de la reserva
            $table->string('razon_abandono')->nullable(); // Razón del abandono (si aplica)
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
