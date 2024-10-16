<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use League\Csv\Reader; // Para manejar CSV

class TuristasSeeder extends Seeder
{
    public function run()
    {
        // Ruta al archivo CSV
        $csvFile = base_path('datos_demograficos_turistas.csv');
        
        // Leer el CSV
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0); // Para usar el encabezado como keys

        // Insertar cada fila en la base de datos
        foreach ($csv as $record) {
            DB::table('turistas')->insert([
                'nombre' => $record['nombre'],
                'edad' => $record['edad'],
                'genero' => $record['genero'],
                'pais_origen' => $record['pais_origen'],
                'interes_turistico' => $record['interes_turistico'],
            ]);
        }
    }
}
