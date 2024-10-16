<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use League\Csv\Reader; // Para manejar CSV

class ReservasSeeder extends Seeder
{
    public function run()
    {
        // Ruta al archivo CSV
        $csvFile = base_path('analisis_reservas.csv');

        // Leer el archivo CSV
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0); // Usar la primera fila como encabezado

        // Iterar sobre las filas del CSV e insertar los datos en la tabla 'reservas'
        foreach ($csv as $record) {
            DB::table('reservas')->insert([
                'nombre' => $record['Nombre'], // Ajustado a 'Nombre'
                'edad' => $record['Edad'], // Ajustado a 'Edad'
                'genero' => $record['Género'], // Ajustado a 'Género'
                'pais_origen' => $record['País de Origen'], // Ajustado a 'País de Origen'
                'paquete_turistico' => $record['Paquete Turístico'], // Ajustado a 'Paquete Turístico'
                'fecha_reserva' => $record['Fecha Reserva'], // Ajustado a 'Fecha Reserva'
                'estado_reserva' => $record['Estado Reserva'], // Ajustado a 'Estado Reserva'
                'razon_abandono' => $record['Razón Abandono'], // Ajustado a 'Razón Abandono'
            ]);
        }
    }
}
