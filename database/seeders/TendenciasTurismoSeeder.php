<?php

namespace Database\Seeders;

use League\Csv\Reader;
use Illuminate\Database\Seeder;
use DB;

class TendenciasTurismoSeeder extends Seeder
{
    public function run()
    {
        // Ruta al archivo CSV
        $csvFile = base_path('tendencias_turismo_puno_2017_2024.csv');

        // Leer el archivo CSV
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0); // Usar la primera fila como encabezado

        // Iterar sobre las filas del CSV e insertar los datos en la tabla 'tendencias'
        foreach ($csv as $record) {
            DB::table('tendencias')->insert([
                'date' => $record['date'], // Ajustado a 'date'
                'fiesta_candelaria' => $record['Fiesta de la Candelaria'],
                'lago_titicaca' => $record['Lago Titicaca'],
                'turismo_puno' => $record['Turismo Puno'],
                'cultura_puno' => $record['Cultura Puno'],
                'is_partial' => filter_var($record['isPartial'], FILTER_VALIDATE_BOOLEAN), // Ajustado a 'isPartial'
            ]);
        }
    }
}
