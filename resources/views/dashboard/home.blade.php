@extends('layouts.master')

@section('content')
<!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Ecommerce</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Dashboards</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Ecommerce
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                <div class="relative col-span-12 overflow-hidden card 2xl:col-span-8 bg-slate-900">
                    <div class="absolute inset-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-100" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="1440" height="560" preserveaspectratio="none" viewbox="0 0 1440 560">
                            <g mask="url(&quot;#SvgjsMask1000&quot;)" fill="none">
                                <use xlink:href="#SvgjsSymbol1007" x="0" y="0"></use>
                                <use xlink:href="#SvgjsSymbol1007" x="720" y="0"></use>
                            </g>
                            <defs>
                                <mask id="SvgjsMask1000">
                                    <rect width="1440" height="560" fill="#ffffff"></rect>
                                </mask>
                                <path d="M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z" id="SvgjsPath1003"></path>
                                <path d="M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z" id="SvgjsPath1004"></path>
                                <path d="M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z" id="SvgjsPath1001"></path>
                                <path d="M2 -2 L-2 2z" id="SvgjsPath1005"></path>
                                <path d="M6 -6 L-6 6z" id="SvgjsPath1002"></path>
                                <path d="M30 -30 L-30 30z" id="SvgjsPath1006"></path>
                            </defs>
                            <symbol id="SvgjsSymbol1007">
                                <use xlink:href="#SvgjsPath1001" x="30" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="30" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="30" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="30" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="30" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="30" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="30" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="90" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="90" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="90" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="90" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="90" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="150" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="150" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="150" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="150" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="150" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="150" y="330" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1004" x="150" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="150" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="150" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="150" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="210" y="150" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="210" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="210" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="210" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="210" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="210" y="510" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1003" x="210" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="270" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="270" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="270" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="270" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="270" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="270" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="270" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="330" y="90" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="330" y="270" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1001" x="330" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="330" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="330" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="330" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="330" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="390" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="390" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="390" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="390" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="390" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="390" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="390" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="450" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="450" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="450" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="450" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="450" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="510" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="510" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="510" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1004" x="510" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="510" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1001" x="510" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="510" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="570" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="570" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="570" y="390" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1005" x="570" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="570" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="570" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="630" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="630" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="630" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="630" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="630" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="630" y="330" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1002" x="630" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="630" y="450" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1001" x="630" y="510" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="630" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="690" y="30" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="690" y="90" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="690" y="150" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1002" x="690" y="210" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1005" x="690" y="270" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1001" x="690" y="330" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="690" y="390" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1003" x="690" y="450" stroke="rgba(32, 43, 61, 1)"></use>
                                <use xlink:href="#SvgjsPath1006" x="690" y="510" stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                <use xlink:href="#SvgjsPath1003" x="690" y="570" stroke="rgba(32, 43, 61, 1)"></use>
                            </symbol>
                        </svg>
                    </div>
                    <div class="relative card-body">
                        <div class="grid items-center grid-cols-12">
                            <div class="col-span-12 lg:col-span-8 2xl:col-span-7">
                                <h5 class="mb-3 font-normal tracking-wide text-slate-200">Welcome StarCode Kh 🎉</h5>
                                <p class="mb-5 text-slate-400">An e-commerce dashboard has just that purpose. It provides your e-commerce team with a clear overview of key financial and website KPIs at any time.</p>
                                <button type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-500/20 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-500/20 dark:ring-custom-400/20">Take a Product</button>
                            </div>
                            <div class="hidden col-span-12 2xl:col-span-3 lg:col-span-2 lg:col-start-11 2xl:col-start-10 lg:block">
                                <img src="assets/images/dashboard.png" alt="" class="h-40 ltr:2xl:ml-auto rtl:2xl:mr-auto">
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-span-12 card 2xl:col-span-4 2xl:row-span-2">
    <div class="card-body">
        <div class="flex items-center mb-3">
            <h6 class="grow text-15">Reservas Completadas vs Abandonadas</h6>
            <div class="relative">
                <a href="#!" class="underline transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600">Ver Detalles <i data-lucide="move-right" class="inline-block align-middle size-4 ltr:ml-1 rtl:mr-1"></i></a>
            </div>
        </div>
        <div id="reservasChart" class="apex-charts" data-chart-colors='["bg-green-500", "bg-red-500"]' dir="ltr"></div>
    </div>
</div>

<?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'jhona', 'upeu2024!', 'analitica_db');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener reservas completadas y abandonadas por mes
$query = "
    SELECT 
        MONTH(fecha_reserva) AS mes, 
        SUM(CASE WHEN estado_reserva = 'Completada' THEN 1 ELSE 0 END) AS completadas,
        SUM(CASE WHEN estado_reserva = 'Abandonada' THEN 1 ELSE 0 END) AS abandonadas
    FROM reservas
    GROUP BY mes
    ORDER BY mes
";

$result = $conn->query($query);

$meses = [];
$completadas = [];
$abandonadas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $meses[] = $row['mes'];
        $completadas[] = $row['completadas'];
        $abandonadas[] = $row['abandonadas'];
    }
}

$conn->close();
?>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Datos desde PHP a JavaScript
    var meses = <?php echo json_encode($meses); ?>;
    var completadas = <?php echo json_encode($completadas); ?>;
    var abandonadas = <?php echo json_encode($abandonadas); ?>;
    var meses = ['Oct 2023', 'Nov 2023', 'Dec 2023', 'Jan 2024', 'Feb 2024', 
             'Mar 2024', 'Apr 2024', 'May 2024', 'Jun 2024', 'Jul 2024', 
             'Aug 2024', 'Sep 2024', 'Oct 2024'];

    // Verificar los datos
    console.log("Meses: ", meses);
    console.log("Completadas: ", completadas);
    console.log("Abandonadas: ", abandonadas);

    // Verificar si los arrays no están vacíos
    if (meses.length && completadas.length && abandonadas.length) {
        var options = {
            series: [{
                name: 'Completadas',
                data: completadas
            }, {
                name: 'Abandonadas',
                data: abandonadas
            }],
            chart: {
                type: 'line',
                height: 310,
                toolbar: {
                    show: false,
                },
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            colors: ['#34c38f', '#f46a6a'],
            xaxis: {
                categories: meses,
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                show: true,
                padding: {
                    top: -20,
                    right: 0,
                }
            },
            markers: {
                hover: {
                    sizeOffset: 4
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#reservasChart"), options);
        chart.render();
    } else {
        console.error("Error: Datos no disponibles para generar el gráfico.");
    }
</script>

                <!--end col-->
                <!--end col-->
                <?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'jhona', 'upeu2024!', 'analitica_db');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los totales de la tabla campañas
$query = "
    SELECT 
        SUM(impresiones) AS totalImpresiones,
        SUM(clics) AS totalClics,
        SUM(conversiones) AS totalConversiones,
        SUM(ingresos_generados) AS totalIngresos
    FROM campanas
";

$result = $conn->query($query);

$totalImpresiones = 0;
$totalClics = 0;
$totalConversiones = 0;
$totalIngresos = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalImpresiones = $row['totalImpresiones'];
        $totalClics = $row['totalClics'];
        $totalConversiones = $row['totalConversiones'];
        $totalIngresos = $row['totalIngresos'];
    }
}

$conn->close();
?>

<!-- HTML para visualizar los totales -->
<div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
    <div class="text-center card-body">
        <div class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
            <i data-lucide="eye"></i>
        </div>
        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="<?php echo $totalImpresiones; ?>">0</span></h5>
        <p class="text-slate-500 dark:text-zink-200">Total Impresiones</p>
    </div>
</div><!--end col-->

<div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
    <div class="text-center card-body">
        <div class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
            <i data-lucide="mouse-pointer"></i>
        </div>
        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="<?php echo $totalClics; ?>">0</span></h5>
        <p class="text-slate-500 dark:text-zink-200">Total Clics</p>
    </div>
</div><!--end col-->

<div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
    <div class="text-center card-body">
        <div class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
            <i data-lucide="check-circle"></i>
        </div>
        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="<?php echo $totalConversiones; ?>">0</span></h5>
        <p class="text-slate-500 dark:text-zink-200">Total Conversiones</p>
    </div>
</div><!--end col-->

<div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
    <div class="text-center card-body">
        <div class="flex items-center justify-center mx-auto text-red-500 bg-red-100 rounded-full size-14 dark:bg-red-500/20">
            <i data-lucide="dollar-sign"></i>
        </div>
        <h5 class="mt-4 mb-2">$<span class="counter-value" data-target="<?php echo $totalIngresos; ?>">0</span></h5>
        <p class="text-slate-500 dark:text-zink-200">Total Ingresos</p>
    </div>
</div><!--end col-->


                <!--end col-->
                <?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'jhona', 'upeu2024!', 'analitica_db');

// Verificar si hay conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los nombres de las campañas, ventas totales e ingresos generados
$query = "
    SELECT nombre, SUM(ingresos_generados) AS total_ventas, SUM(conversiones) AS total_ganancias
    FROM campanas
    GROUP BY nombre
    ORDER BY nombre
";

$result = $conn->query($query);

$nombres = [];
$totalVentas = [];
$totalGanancias = [];
$totalSales = 0;
$totalProfit = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombres[] = $row['nombre'];
        $totalVentas[] = (float)$row['total_ventas'];
        $totalGanancias[] = (float)$row['total_ganancias'];
        // Sumar los valores totales para las ventas y ganancias
        $totalSales += (float)$row['total_ventas'];
        $totalProfit += (float)$row['total_ganancias'];
    }
}

$conn->close();
?>


<!-- Código HTML para mostrar el gráfico y los totales -->
<div class="col-span-12 card 2xl:col-span-8">
    <div class="card-body">
        <div class="flex flex-col gap-4 mb-4 md:mb-3 md:items-center md:flex-row">
            <h6 class="grow text-15">Resumen de la Campaña de Marketing 2022-24</h6>
        </div>
        <div class="grid grid-cols-12 gap-4 mb-3">
            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                <div class="flex items-center gap-3">
                    <div class="flex items-center justify-center rounded-md size-12 text-sky-500 bg-sky-50 shrink-0">
                        <i data-lucide="bar-chart"></i>
                    </div>
                    <div class="grow">
                        <p class="mb-1 text-slate-500">Ventas Totales</p>
                        <h5 class="text-15">$<span id="totalSales"><?php echo number_format($totalSales, 2); ?></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                <div class="flex items-center gap-3">
                    <div class="flex items-center justify-center text-green-500 rounded-md size-12 bg-green-50">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <div class="grow">
                        <p class="mb-1 text-slate-500">Ganancias Totales</p>
                        <h5 class="text-15">$<span id="totalProfit"><?php echo number_format($totalProfit, 2); ?></span></h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Aquí va el gráfico -->
        <div id="salesRevenueOverview" class="apex-charts"></div>
    </div>
</div>

<!-- Script para el gráfico con ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Datos obtenidos desde PHP
    var nombres = <?php echo json_encode($nombres); ?>;
    var totalVentas = <?php echo json_encode($totalVentas); ?>;
    var totalGanancias = <?php echo json_encode($totalGanancias); ?>;

    // Verificar que los datos se pasen correctamente
    console.log("Nombres de campañas: ", nombres);
    console.log("Total Ventas: ", totalVentas);
    console.log("Total Ganancias: ", totalGanancias);

    // Opciones del gráfico
    var options = {
        series: [{
            name: 'Ventas Totales',
            data: totalVentas
        }, {
            name: 'Ganancias Totales',
            data: totalGanancias
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: nombres
        },
        yaxis: {
            title: {
                text: '$ (USD)'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$" + val;
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#salesRevenueOverview"), options);
    chart.render();
</script>

                <!--end col-->
                <div class="col-span-12 2xl:col-span-4">
                    <div class="grid grid-cols-12 gap-x-5">
                    <?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'jhona', 'upeu2024!', 'analitica_db');

// Verificar si hay conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los nombres de las campañas y sus ingresos generados
$query = "
    SELECT nombre, SUM(ingresos_generados) AS total_ventas
    FROM campanas
    GROUP BY nombre
    ORDER BY nombre
";

$result = $conn->query($query);

$nombres = [];
$totalVentas = [];
$ventasTotales = 0;

// Obtener los datos y calcular el total de ventas
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombres[] = $row['nombre'];
        $totalVentas[] = $row['total_ventas'];
        $ventasTotales += $row['total_ventas']; // Sumar todas las ventas
    }
}

$conn->close();

// Calcular los porcentajes
$porcentajes = [];
foreach ($totalVentas as $venta) {
    $porcentajes[] = round(($venta / $ventasTotales) * 100, 2); // Calcula el porcentaje
}
?>

<!-- Código HTML para el gráfico radial -->
<div class="col-span-12 card lg:col-span-6 2xl:col-span-12">
    <div class="card-body">
        <div class="flex items-center mb-3">
            <h6 class="grow text-15">Recursos de Tráfico</h6>
            <div class="relative">
                <a href="#!" class="transition-all duration-300 ease-linear text-custom-500 hover:text-custom-700">Ver Estado <i data-lucide="move-right" class="inline-block align-middle size-4 ltr:ml-1 rtl:mr-1"></i></a>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-6 2xl:col-span-7">
                <div id="trafficResourcesChart" class="apex-charts" data-chart-colors='["bg-sky-500", "bg-purple-500", "bg-green-500", "bg-yellow-500"]' dir="ltr"></div>
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-5">
                <ul class="flex flex-col gap-3">
                    <?php foreach ($nombres as $index => $nombre): ?>
                        <li class="flex items-center gap-2">
                            <div class="bg-custom-<?= $index ?> size-3 shrink-0 clip-triangle"></div>
                            <p class="text-custom-<?= $index ?>"><?= $nombre ?> (<?= $porcentajes[$index] ?>%)</p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Script para el gráfico circular -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var nombres = <?php echo json_encode($nombres); ?>;
    var porcentajes = <?php echo json_encode($porcentajes); ?>;
    var totalVentas = <?php echo json_encode(array_sum($totalVentas)); ?>;

    // Traffic Resources Chart
    var options = {
        series: porcentajes,
        chart: {
            height: 222,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                dataLabels: {
                    total: {
                        show: true,
                        label: 'Total',
                        formatter: function (w) {
                            return totalVentas; // Mostrar el total de ventas en el centro
                        }
                    }
                }
            }
        },
        grid: {
            show: true,
            padding: {
                top: -8,
                bottom: -15,
                left: 0,
                right: 0,
            }
        },
        colors: ['#34c38f', '#f46a6a', '#50a5f1', '#f1b44c'],
        labels: nombres,  // Mostrar los nombres de las campañas
    };

    var chart = new ApexCharts(document.querySelector("#trafficResourcesChart"), options);
    chart.render();
</script>

                        <!--end col-->
                        <div class="col-span-12 card lg:col-span-6 2xl:col-span-12">
    <div class="card-body">
        <div class="flex items-center mb-2">
            <h5 class="grow"><span class="counter-value" data-target="875">0</span></h5>
            <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-green-100 text-green-500 dark:bg-zink-700 dark:border-green-900"><i data-lucide="trending-up" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> 15%</span>
        </div>
        <h6 class="mb-0">Meta de Conversión de la Campaña (1000+)</h6>
        <div>
            <div class="flex items-center justify-between mt-5 mb-2">
                <p class="text-slate-500 dark:text-zink-200">Conversión Total</p>
                <h6 class="mb-0 text-custom-500">85%</h6>
            </div>
            <div class="w-full bg-slate-200 rounded-full h-2.54 dark:bg-zink-600">
                <div class="bg-custom-500 h-2.5 rounded-full" style="width: 85%"></div>
            </div>
        </div>
    </div>
</div>

                        <!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
                <div class="col-span-12 card 2xl:col-span-12">
                    <div class="card-body">
                        <div class="grid items-center grid-cols-1 gap-3 mb-5 2xl:grid-cols-12">
                            <div class="2xl:col-span-3">
                                <h6 class="text-15">Product Orders</h6>
                            </div><!--end col-->
                            <div class="2xl:col-span-3 2xl:col-start-10">
                                <div class="flex gap-3">
                                    <div class="relative grow">
                                        <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                    <button type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i class="align-baseline ltr:pr-1 rtl:pl-1 ri-download-2-line"></i> Export</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->
                        <div class="overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                                    <tr>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                            #
                                        </th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Order ID</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Customer Name</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Location</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Order Date</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Payments</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Quantity</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Price</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Total Amount</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Status</th>
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            01
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="apps-ecommerce-order-overview.html">#TWT5015100365</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Marie Prohaska</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Germany</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">08 Jun, 2023</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Credit Card</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">05</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$146.99</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$749.95</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20">Delivered</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="relative dropdown">
                                                <button id="orderAction1" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction1">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="apps-ecommerce-order-overview.html">#TWT5015100366</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Jaqueline Hammes</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">France</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">11 July, 2023</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Paypal</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">02</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$450.00</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$900.00</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-purple-100 border-purple-200 text-purple-500 dark:bg-purple-500/20 dark:border-purple-500/20">Shipping</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="relative dropdown">
                                                <button id="orderAction2" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction2">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            03
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="apps-ecommerce-order-overview.html">#TWT5015100367</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Marlene Hirthe</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Argentina</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">21 Aug, 2023</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Visa Card</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">03</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$147.23</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$294.46</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-200 text-sky-500 dark:bg-sky-500/20 dark:border-sky-500/20">New</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="relative dropdown">
                                                <button id="orderAction3" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction3">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            04
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="apps-ecommerce-order-overview.html">#TWT5015100368</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Reagan Larson</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Belgium</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">28 Nov, 2023</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">American Express</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">01</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$579.12</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$579.12</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20">Delivered</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="relative dropdown">
                                                <button id="orderAction4" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction4">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            05
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="apps-ecommerce-order-overview.html">#TWT5015100369</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Glennie Langosh</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Australia</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">11 Oct, 2023</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">American Express</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">01</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$349.00</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$349.00</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-yellow-100 border-yellow-200 text-yellow-500 dark:bg-yellow-500/20 dark:border-yellow-500/20">Pending</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="relative dropdown">
                                                <button id="orderAction5" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction5">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            06
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="apps-ecommerce-order-overview.html">#TWT5015100370</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Rickie Cremin</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">United States</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">16 Feb, 2023</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">COD</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">03</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$89.49</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$268.47</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20">Delivered</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="relative dropdown">
                                                <button id="orderAction6" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction6">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            07
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500"><a href="apps-ecommerce-order-overview.html">#TWT5015100371</a></td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Domenic Tromp</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">Afghanistan</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">21 Jan, 2024</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">PayPal</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">02</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$739.79</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">$1,479.58</td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <span class="delivery_status px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-200 text-sky-500 dark:bg-sky-500/20 dark:border-sky-500/20">New</span>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="relative dropdown">
                                                <button id="orderAction6" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction6">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex flex-col items-center mt-5 md:flex-row">
                            <div class="mb-4 grow md:mb-0">
                                <p class="text-slate-500 dark:text-zink-200">Showing <b>07</b> of <b>19</b> Results</p>
                            </div>
                            <ul class="flex flex-wrap items-center gap-2 shrink-0">
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 w-8 h-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 w-8 h-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">2</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 w-8 h-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">3</a>
                                </li>
                                <li>
                                    <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">Next <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end col-->

                <?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'jhona', 'upeu2024!', 'analitica_db');

// Verificar si hay conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los principales turistas
$query = "
    SELECT nombre, pais_origen, interes_turistico
    FROM turistas
    ORDER BY id DESC
    LIMIT 4
";

$result = $conn->query($query);

$turistas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $turistas[] = $row;
    }
}

$conn->close();
?>

<!-- Código HTML para mostrar los clientes principales -->
<div class="col-span-12 card lg:col-span-6 2xl:col-span-3">
    <div class="card-body">
        <div class="flex items-center mb-3">
            <h6 class="grow text-15">Clientes Principales Recurrentes</h6>
            <div class="relative dropdown shrink-0">
                <button type="button" class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="customServiceDropdown" data-bs-toggle="dropdown">
                    <i data-lucide="more-vertical" class="inline-block size-4"></i>
                </button>
                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="customServiceDropdown">
                    <li><a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a></li>
                    <li><a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a></li>
                </ul>
            </div>
        </div>

        <h6 class="mt-4 mb-3">Top Clientes</h6>
        <ul class="divide-y divide-slate-200 dark:divide-zink-500">
            <?php foreach ($turistas as $turista): ?>
            <li class="flex items-center gap-3 py-2 first:pt-0 last:pb-0">
                <div class="w-8 h-8 rounded-full shrink-0 bg-slate-100 dark:bg-zink-600">
                    <img src="assets/images/avatar-<?= rand(1, 5); ?>.png" alt="" class="w-8 h-8 rounded-full">
                </div>
                <div class="grow">
                    <h6 class="font-medium"><?php echo $turista['nombre']; ?></h6>
                    <p class="text-slate-500 dark:text-zink-200">País: <?php echo $turista['pais_origen']; ?> | Interés: <?php echo $turista['interes_turistico']; ?></p>
                </div>
                <div class="shrink-0">
                    <h6>$<?= rand(900, 3000); ?></h6>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


                <!--end col-->
                <!--end col-->
                    <!--end col-->

                    <?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'jhona', 'upeu2024!', 'analitica_db');

// Verificar si hay conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos de género agrupados por intereses turísticos
$query = "
    SELECT 
        COUNT(CASE WHEN genero = 'Masculino' THEN 1 END) AS total_male,
        COUNT(CASE WHEN genero = 'Femenino' THEN 1 END) AS total_female,
        interes_turistico
    FROM turistas
    GROUP BY interes_turistico
";

$result = $conn->query($query);

$intereses = [];
$totalMale = [];
$totalFemale = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $intereses[] = $row['interes_turistico'];
        $totalMale[] = $row['total_male'];
        $totalFemale[] = $row['total_female'];
    }
}

$conn->close();
?>

<!-- Código HTML para mostrar el gráfico -->
<div class="col-span-12 card lg:col-span-6 2xl:col-span-3">
    <div class="card-body">
        <h6 class="relative mb-3 grow text-15">Audience</h6>
        <div id="audienceChart" class="-mt-9 apex-charts" data-chart-colors='["bg-sky-500", "bg-orange-400"]' dir="ltr"></div>
    </div>
</div>

<!-- Script para el gráfico con ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Datos obtenidos desde PHP
    var intereses = <?php echo json_encode($intereses); ?>;
    var totalMale = <?php echo json_encode($totalMale); ?>;
    var totalFemale = <?php echo json_encode($totalFemale); ?>;

    // Verificar que los datos se pasen correctamente
    console.log("Intereses turísticos: ", intereses);
    console.log("Total Masculino: ", totalMale);
    console.log("Total Femenino: ", totalFemale);

    // Opciones del gráfico de barras apiladas
    var options = {
        series: [{
            name: 'Masculino',
            data: totalMale
        }, {
            name: 'Femenino',
            data: totalFemale
        }],
        chart: {
            type: 'bar',
            height: 390,
            stacked: true,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: true
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                borderRadius: 6,
                columnWidth: '44%',
                dataLabels: {
                    total: {    
                        enabled: true,
                        style: {
                            fontSize: '13px',
                            fontWeight: 600
                        }
                    }
                }
            },
        },
        xaxis: {
            categories: intereses,
        },
        colors: ['#34c38f', '#f46a6a'],
        legend: {
            position: 'top',
            horizontalAlign: 'right',
        },
        fill: {
            opacity: 1
        }
    };

    var chart = new ApexCharts(document.querySelector("#audienceChart"), options);
    chart.render();
</script>


                    <!--end col-->
            </div><!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>
<!-- End Page-content -->
@endsection


