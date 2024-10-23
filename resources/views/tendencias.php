<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'jhona', 'upeu2024!', 'analitica_db');

// Verificar si hay conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para exportar datos a CSV
if (isset($_POST['export_csv'])) {
    $query = "SELECT * FROM tendencias";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $filename = "tendencias_" . date('Ymd') . ".csv";
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv;");

        $file = fopen('php://output', 'w');

        // Columnas del archivo CSV
        $header = array("ID", "Fecha", "Fiesta Candelaria", "Lago Titicaca", "Turismo Puno", "Cultura Puno", "Es Parcial");
        fputcsv($file, $header);

        // Filas del archivo CSV
        while ($row = $result->fetch_assoc()) {
            fputcsv($file, $row);
        }

        fclose($file);
        exit;
    }
}

// Consulta para obtener los datos de la tabla tendencias
$query = "SELECT * FROM tendencias";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Tendencias</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-5">

    <!-- Encabezado y búsqueda -->
    <div class="grid items-center grid-cols-1 gap-3 mb-5 2xl:grid-cols-12">
        <div class="2xl:col-span-3">
            <h6 class="text-15">Datos de Tendencias</h6>
        </div><!--end col-->
        <div class="2xl:col-span-3 2xl:col-start-10">
            <div class="flex gap-3">
                <div class="relative grow">
                    <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                    <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                </div>
                <!-- Botón para exportar -->
                <form method="post" action="">
                    <button type="submit" name="export_csv" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                        <i class="align-baseline ltr:pr-1 rtl:pl-1 ri-download-2-line"></i> Exportar CSV
                    </button>
                </form>
            </div>
        </div><!--end col-->
    </div>

    <!-- Tabla de datos -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-collapse">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 border-b-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Fecha</th>
                    <th class="px-6 py-3 border-b-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Fiesta Candelaria</th>
                    <th class="px-6 py-3 border-b-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Lago Titicaca</th>
                    <th class="px-6 py-3 border-b-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Turismo Puno</th>
                    <th class="px-6 py-3 border-b-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Cultura Puno</th>
                    <th class="px-6 py-3 border-b-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Es parcial</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>" . $row['id'] . "</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" . $row['date'] . "</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" . $row['fiesta_candelaria'] . "</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" . $row['lago_titicaca'] . "</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" . $row['turismo_puno'] . "</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" . $row['cultura_puno'] . "</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" . $row['is_partial'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>No hay datos disponibles</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
