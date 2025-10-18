<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/menu-active-line.css'])
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="./dist/libs/jsvectormap/dist/jsvectormap.css?1752393272" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="./dist/css/tabler.css?1752393272" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link href="./dist/css/tabler-flags.css?1752393272" rel="stylesheet" />
    <link href="./dist/css/tabler-socials.css?1752393272" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.css?1752393272" rel="stylesheet" />
    <link href="./dist/css/tabler-vendors.css?1752393272" rel="stylesheet" />
    <link href="./dist/css/tabler-marketing.css?1752393272" rel="stylesheet" />
    <link href="./dist/css/tabler-themes.css?1752393272" rel="stylesheet" />
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN DEMO STYLES -->
    <link href="./preview/css/demo.css?1752393272" rel="stylesheet" />
    <!-- END DEMO STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
</head>

<body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="./dist/js/tabler-theme.min.js?1752393272"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
        <!-- BEGIN NAVBAR  -->
        @include('componentes.header')
        @include('componentes.menu')
        <!-- END NAVBAR  -->
        <div class="page-wrapper">
            <!-- BEGIN PAGE HEADER -->
            <div class="page-header d-print-none" aria-label="Page header">
                <div class="container-xl d-flex flex-column align-items-center justify-content-center" style="height: 70px;">
                    <h3 class="page-title mb-0 text-center">Bienvenido</h3>
                    <div class="page-pretitle text-center">Carlos</div>
                </div>
            </div>
            <!-- END PAGE HEADER -->


            <!-- BEGIN PAGE BODY -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('entidades') }}" class="card" rel="noopener"
                                aria-label="Sponsor Tabler!"
                                style="background: var(--tblr-bg-surface)">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase"
                                                style="width: 50%; height: 50%;">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                                <path d="M12 12l0 .01" />
                                                <path d="M3 13a20 20 0 0 0 18 0" />
                                            </svg>
                                            <h2 class="page-title">Entidades</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="" class="card" rel="noopener"
                                aria-label="Sponsor Tabler!"
                                style="background: var(--tblr-bg-surface))">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-tags"
                                                style="width: 50%; height: 50%;">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M3 8v4.172a2 2 0 0 0 .586 1.414l5.71 5.71a2.41 2.41 0 0 0 3.408 0l3.592 -3.592a2.41 2.41 0 0 0 0 -3.408l-5.71 -5.71a2 2 0 0 0 -1.414 -.586h-4.172a2 2 0 0 0 -2 2z" />
                                                <path d="M18 19l1.592 -1.592a4.82 4.82 0 0 0 0 -6.816l-4.592 -4.592" />
                                                <path d="M7 10h-.01" />
                                            </svg>
                                            <h2 class="page-title">Compras</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="" class="card" target="_blank" rel="noopener"
                                aria-label="Sponsor Tabler!"
                                style="var(--tblr-bg-surface))">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-coin"
                                                style="width: 50%; height: 50%;">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                <path
                                                    d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                                                <path d="M12 7v10" />
                                            </svg>
                                            <h2 class="page-title">Ventas</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="" class="card" target="_blank" rel="noopener"
                                aria-label="Sponsor Tabler!"
                                style="var(--tblr-bg-surface))">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-file-description"
                                                style="width: 50%; height: 50%;">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path
                                                    d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                <path d="M9 17h6" />
                                                <path d="M9 13h6" />
                                            </svg>
                                            <h2 class="page-title">Inventario</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BODY -->


            <!--  BEGIN FOOTER  -->
            <footer>
                <div>
                    <div>
                        @include('componentes.footer')
                    </div>
                </div>
            </footer>
            <!--  END FOOTER  -->
        </div>
    </div>
    
    <!-- BEGIN PAGE LIBRARIES -->
    <script src="./dist/libs/apexcharts/dist/apexcharts.min.js?1752393272" defer></script>
    <script src="./dist/libs/jsvectormap/dist/jsvectormap.min.js?1752393272" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world.js?1752393272" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world-merc.js?1752393272" defer></script>
    <!-- END PAGE LIBRARIES -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="./dist/js/tabler.min.js?1752393272" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN DEMO SCRIPTS -->
    <script src="./preview/js/demo.min.js?1752393272" defer></script>
    <!-- END DEMO SCRIPTS -->
</body>

</html>
