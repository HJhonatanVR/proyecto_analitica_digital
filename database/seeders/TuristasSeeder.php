<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TuristasSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        // Lista de países de América Latina, Europa y Estados Unidos
        $paises = [
            // América Latina
            'Argentina', 'Bolivia', 'Brasil', 'Chile', 'Colombia', 'Costa Rica', 'Cuba', 'Ecuador', 'El Salvador', 
            'Guatemala', 'Honduras', 'México', 'Nicaragua', 'Panamá', 'Paraguay', 'Perú', 'Uruguay', 'Venezuela',
            // Europa
            'Alemania', 'Francia', 'España', 'Italia', 'Reino Unido', 'Países Bajos', 'Portugal', 'Suiza', 'Bélgica',
            'Dinamarca', 'Noruega', 'Suecia', 'Finlandia', 'Austria', 'Grecia', 'Polonia', 'Irlanda', 'Hungría', 
            'Rusia', 'Rumanía',
            // Estados Unidos
            'Estados Unidos'
        ];

        foreach (range(1, 1000) as $index) {
            DB::table('turistas')->insert([
                'nombre' => $faker->unique()->name,
                'edad' => $faker->numberBetween(18, 80),
                'genero' => $faker->randomElement(['Masculino', 'Femenino', 'Otro']),
                'pais_origen' => $faker->randomElement($paises), // Selección de un país de la lista
                'interes_turistico' => $faker->randomElement(['Lago Titicaca', 'Fiesta de la Candelaria', 'Turismo Cultural', 'Puno', 'Aventura']),
            ]);
        }
    }
}
