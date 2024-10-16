<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use League\Csv\Reader; // Para manejar CSV

class CampanasSeeder extends Seeder
{
    public function run()
    {
        // Ruta al archivo CSV
        $csvFile = base_path('campañas_marketing.csv');
        
        // Leer el CSV
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0); // Para usar el encabezado como keys

        // Insertar cada fila en la base de datos
        foreach ($csv as $record) {
            DB::table('campanas')->insert([
                'nombre' => $record['Campaña'], // Cambiado a 'Campaña' según el CSV
                'impresiones' => $record['Impresiones'], // Ajustado a 'Impresiones'
                'clics' => $record['Clics'], // Ajustado a 'Clics'
                'ctr' => $record['CTR (%)'], // Ajustado a 'CTR (%)'
                'conversiones' => $record['Conversiones'], // Ajustado a 'Conversiones'
                'tasa_conversion' => $record['Tasa de conversión (%)'], // Ajustado a 'Tasa de conversión'
                'cpc' => $record['CPC ($)'], // Ajustado a 'CPC ($)'
                'gasto_total' => $record['Gasto total ($)'], // Ajustado a 'Gasto total ($)'
                'ingresos_generados' => $record['Ingresos generados ($)'], // Ajustado a 'Ingresos generados ($)'
            ]);
        }
    }
}