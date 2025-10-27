<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Menú SIA</title>

  @vite(['resources/js/app.js'])

  <!-- ESTILOS TABLER -->
  <link href="{{ asset('dist/libs/jsvectormap/dist/jsvectormap.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler-flags.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler-socials.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler-payments.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler-vendors.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler-marketing.css') }}" rel="stylesheet" />
  <link href="{{ asset('dist/css/tabler-themes.css') }}" rel="stylesheet" />
  <link href="{{ asset('preview/css/demo.css') }}" rel="stylesheet" />
  <style>@import url("https://rsms.me/inter/inter.css");</style>
</head>

<body>
  <script src="{{ asset('dist/js/tabler-theme.min.js') }}"></script>
  <script src="{{ asset('dist/js/tabler.min.js') }}"></script>

@php
  $tab = request('tab'); // puede venir null

  // ----- ENTIDADES -----
  $tabsEntidades = ['listado','titulos','sectores','departamentos','tipos'];
  $effectiveTabEntidades = in_array($tab, $tabsEntidades) ? $tab : 'listado';
  $isEntidadesRoute = request()->routeIs('entidades'); // padre activo solo en /entidades

  // ----- VENTAS -----
  // si aún no tienes tabs, usa solo las rutas hijas
  $isVentasRoute = request()->routeIs(['cotizaciones','ordenesventa']); // ajusta a tus names reales
@endphp

  <div class="page">
    <header class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
          <div class="container-xl">
            <div class="row flex-column flex-md-row flex-fill align-items-center">
              <div class="col">
                <ul class="navbar-nav">

                  <!-- INICIO -->
                  <li class="nav-item">
                    <a href="{{ route('inicio') }}"
                       class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <!-- icono -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon icon-1">
                          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                      </span>
                      <span class="nav-link-title">Inicio</span>
                    </a>
                  </li>

                  <!-- ENTIDADES 2 (Submenú que también va a /entidades, pero con ?tab=...) -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $isEntidadesRoute ? 'active' : '' }}"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                        aria-expanded="{{ $isEntidadesRoute ? 'true' : 'false' }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M3 21l18 0" />
                          <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                          <path d="M9 8l1 0" />
                          <path d="M9 12l1 0" />
                          <path d="M9 16l1 0" />
                          <path d="M14 8l1 0" />
                          <path d="M14 12l1 0" />
                          <path d="M14 16l1 0" />
                        </svg>
                      </span>
                        <span class="nav-link-title">Entidades</span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item {{ $isEntidadesRoute && $effectiveTabEntidades==='listado' ? 'active' : '' }}"
                        href="{{ route('entidades') }}">Listado</a>

                        <a class="dropdown-item {{ $isEntidadesRoute && $effectiveTabEntidades==='titulos' ? 'active' : '' }}"
                        href="#">Títulos</a>

                        <a class="dropdown-item {{ $isEntidadesRoute && $effectiveTabEntidades==='sectores' ? 'active' : '' }}"
                        href="#">Sectores</a>

                        <a class="dropdown-item {{ $isEntidadesRoute && $effectiveTabEntidades==='departamentos' ? 'active' : '' }}"
                        href="#">Departamentos</a>

                        <a class="dropdown-item {{ $isEntidadesRoute && $effectiveTabEntidades==='tipos' ? 'active' : '' }}"
                        href="#">Tipos de cuentas</a>
                    </div>
                    </li>

                  <!-- COMPRAS -->
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="9" cy="19" r="2" />
                          <circle cx="17" cy="19" r="2" />
                          <path d="M17 17h-11v-14h-2" />
                          <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                      </span>
                      <span class="nav-link-title">Compras</span>
                    </a>
                  </li>

                  <!-- VENTAS -->

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $isVentasRoute ? 'active' : '' }}"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                        aria-expanded="{{ $isVentasRoute ? 'true' : 'false' }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                          <path d="M4 5h16" />
                          <path d="M9 9h6" />
                          <path d="M9 13h4" />
                        </svg>
                      </span>
                        <span class="nav-link-title">Ventas</span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item {{ request()->routeIs('cotizaciones') ? 'active' : '' }}"
                        href="{{ route('cotizaciones') }}">Cotizaciones</a>

                        <a class="dropdown-item {{ request()->routeIs('ordenesventa') ? 'active' : '' }}"
                        href="#">Órdenes de Venta</a>
                    </div>
                    </li>
                <!--  
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                          <path d="M4 5h16" />
                          <path d="M9 9h6" />
                          <path d="M9 13h4" />
                        </svg>
                      </span>
                      <span class="nav-link-title">Ventas</span>
                    </a>
                  </li> -->

                  <!-- PRODUCTOS -->
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-desktop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="3" y="4" width="18" height="12" rx="1" />
                          <line x1="7" y1="20" x2="17" y2="20" />
                          <line x1="9" y1="16" x2="9" y2="20" />
                          <line x1="15" y1="16" x2="15" y2="20" />
                        </svg>
                      </span>
                      <span class="nav-link-title">Productos</span>
                    </a>
                  </li>

                  <!-- INVENTARIO -->
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon icon-tabler icon-tabler-package">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9z" />
                          <path d="M12 12l8 -4.5" />
                          <path d="M12 12v9" />
                          <path d="M12 12l-8 -4.5" />
                          <path d="M16 5.25l-8 4.5" />
                        </svg>
                      </span>
                      <span class="nav-link-title">Inventario</span>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
</body>
</html>