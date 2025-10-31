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

      <!-- acelera la fuente antes del primer render -->
  <link rel="preconnect" href="https://rsms.me" crossorigin>
  <link rel="preload" as="font" href="https://rsms.me/inter/font-files/Inter-roman.var.woff2" type="font/woff2" crossorigin>
  <link rel="preload" as="font" href="https://rsms.me/inter/font-files/Inter-italic.var.woff2" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");

 
   
    </style>
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
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">Entidades</h2>
                            <p>Listado</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->

            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">

                        <!-- Columna izquierda -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="mb-4">RAZON SOCIAL</h2>

                                    <div class="row align-items-center g-3">
                                        <div class="col-auto">
                                            <span class="avatar avatar-xl"
                                                style="background-image:url(./static/avatars/000m.jpg)"></span>
                                        </div>
                                        <div class="col-md">
                                            <input type="text" class="form-control" value="RAZÓN SOCIAL">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-4 ps-1 my-3">
                                        <label class="form-check form-switch form-switch-lg m-0">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-label">Es cliente</span>
                                        </label>
                                        <label class="form-check form-switch form-switch-lg m-0">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-label">Es proveedor</span>
                                        </label>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md">
                                            <label class="form-label">No. Cliente</label>
                                            <input type="text" class="form-control" value="No. Cliente">
                                        </div>
                                        <div class="col-md">
                                            <label class="form-label">No. Proveedor</label>
                                            <input type="text" class="form-control" value="No. Proveedor">
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-md">
                                            <label class="form-label">Sector</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                        <div class="col-md">
                                            <label class="form-label">Industria</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Fila adicional -->
                                    <div class="row g-3 mt-3">
                                        <div class="col-md">
                                            <label class="form-label">RFC</label>
                                            <input type="text" class="form-control" value="XXXXXXX">
                                        </div>
                                        <div class="col-md">
                                            <label class="form-label">Industria</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-md">
                                            <label class="form-label">Sector</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                        <div class="col-md">
                                            <label class="form-label">Industria</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-md">
                                            <label class="form-label">Sector</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                        <div class="col-md">
                                            <label class="form-label">Industria</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col-md">
                                            <label class="form-label">Sector</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                        <div class="col-md">
                                            <label class="form-label">Industria</label>
                                            <select class="form-select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select>
                                        </div>
                                    </div>

                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div><!-- /.col-lg-6 -->

                        <!-- Columna derecha -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <!-- tu contenido -->
                                </div>
                            </div>
                        </div>

                    </div><!-- /.row row-cards -->
                </div><!-- /.container-xl -->
            </div><!-- /.page-body -->
            <!-- FIN CONTENIDO -->


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
      <script>
    document.documentElement.setAttribute(
      'data-bs-theme',
      localStorage.getItem('tablerTheme') || 'light'
    );
  </script>
</body>

</html>
