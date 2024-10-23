<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampanaController extends Controller
{
    public function index()
    {
        // Conectar a la base de datos y obtener los datos agregados
        $result = DB::table('campanas')
            ->select(
                DB::raw('SUM(impresiones) as totalImpresiones'),
                DB::raw('SUM(clics) as totalClics'),
                DB::raw('SUM(conversiones) as totalConversiones'),
                DB::raw('SUM(ingresos_generados) as totalIngresos')
            )
            ->first();

        // Verificar si hay resultados
        
        if ($result) {
            // Pasar los datos a la vista
            return view('dashboard.home', [
                'totalImpresiones' => $result->totalImpresiones,
                'totalClics' => $result->totalClics,
                'totalConversiones' => $result->totalConversiones,
                'totalIngresos' => $result->totalIngresos
            ]);
        } else {
            // Si no hay resultados, pasar valores por defecto
            return view('dashboard.home', [
                'totalImpresiones' => 0,
                'totalClics' => 0,
                'totalConversiones' => 0,
                'totalIngresos' => 0
            ]);
        }
    }
}
