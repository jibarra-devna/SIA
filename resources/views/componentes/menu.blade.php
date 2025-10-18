<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('dist/libs/jsvectormap/dist/jsvectormap.css') }}" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('dist/css/tabler.css') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link href="{{ asset('dist/css/tabler-flags.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-socials.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-payments.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-marketing.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-themes.css') }}" rel="stylesheet" />
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN DEMO STYLES -->
    <link href="{{ asset('preview/css/demo.css') }}" rel="stylesheet" />
    <!-- END DEMO STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
</head>

<body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('dist/js/tabler-theme.min.js') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
        <!-- BEGIN NAVBAR  -->
        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <div class="row flex-column flex-md-row flex-fill align-items-center">
                            <div class="col">
                                <!-- BEGIN NAVBAR MENU -->
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="{{ route('inicio') }}" class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">
                                            <span
                                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-1">
                                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                                </svg></span>
                                            <span class="nav-link-title"> Inicio </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('entidades') }}" class="nav-link {{ request()->routeIs('entidades') ? 'active' : '' }}">
                                            <span
                                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
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
                                                </svg></span>
                                            <span class="nav-link-title"> Entidades </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./">
                                            <span
                                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <circle cx="9" cy="19" r="2" />
                                                <circle cx="17" cy="19" r="2" />
                                                <path d="M17 17h-11v-14h-2" />
                                                <path d="M6 5l14 1l-1 7h-13" />
                                                </svg></span>
                                            <span class="nav-link-title"> Compras </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./">
                                            <span
                                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                                                <path d="M4 5h16" />
                                                <path d="M9 9h6" />
                                                <path d="M9 13h4" />
                                                </svg></span>
                                            <span class="nav-link-title"> Ventas </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./">
                                            <span
                                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-desktop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <rect x="3" y="4" width="18" height="12" rx="1" />
                                                    <line x1="7" y1="20" x2="17" y2="20" />
                                                    <line x1="9" y1="16" x2="9" y2="20" />
                                                    <line x1="15" y1="16" x2="15" y2="20" />
                                                </svg></span>
                                            <span class="nav-link-title"> Productos </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./">
                                            <span
                                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-package">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                                    <path d="M12 12l8 -4.5" />
                                                    <path d="M12 12l0 9" />
                                                    <path d="M12 12l-8 -4.5" />
                                                    <path d="M16 5.25l-8 4.5" />
                                                </svg></span>
                                            <span class="nav-link-title"> Inventario </span>
                                        </a>
                                    </li>
                                    <!--<li class="nav-item active dropdown">
                                        <a class="nav-link dropdown-toggle" href="#navbar-layout"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="false">
                                            <span
                                                class="nav-link-icon d-md-none d-lg-inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="icon icon-1">
                                                    <path
                                                        d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                    <path
                                                        d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                    <path
                                                        d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                    <path
                                                        d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                </svg></span>
                                            <span class="nav-link-title"> Layout </span>
                                        </a>
                                         <div class="dropdown-menu">
                                            <div class="dropdown-menu-columns">
                                                <div class="dropdown-menu-column">
                                                    <a class="dropdown-item" href="./layout-boxed.html"> Boxed </a>
                                                    <a class="dropdown-item" href="./layout-combo.html"> Combined
                                                    </a>
                                                    <a class="dropdown-item" href="./layout-condensed.html">
                                                        Condensed </a>
                                                    <a class="dropdown-item" href="./layout-fluid.html"> Fluid </a>
                                                    <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                                        Fluid vertical </a>
                                                    <a class="dropdown-item" href="./layout-horizontal.html">
                                                        Horizontal </a>
                                                    <a class="dropdown-item active"
                                                        href="./layout-navbar-dark.html"> Navbar dark </a>
                                                </div>
                                                <div class="dropdown-menu-column">
                                                    <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                                        Navbar overlap </a>
                                                    <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                                        Navbar sticky </a>
                                                    <a class="dropdown-item" href="./layout-vertical-right.html">
                                                        Right vertical </a>
                                                    <a class="dropdown-item" href="./layout-rtl.html"> RTL mode </a>
                                                    <a class="dropdown-item" href="./layout-vertical.html"> Vertical
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="./layout-vertical-transparent.html"> Vertical
                                                        transparent </a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </li>
                                </ul>
                                <!-- END NAVBAR MENU -->
                            </div>
                            <!--<div class="col col-md-auto">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasSettings">
                                            <span class="badge badge-sm bg-red text-red-fg">New</span>
                                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="icon icon-1">
                                                    <path
                                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                </svg>
                                            </span>
                                             <span class="nav-link-title"> Theme Settings </span> 
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>

</html>
