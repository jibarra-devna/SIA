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
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">Entidades</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->

            <!-- INICIO TABLA -->
            <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="card-table">
                    <div class="card-header">
                      <div class="row w-full">
                        <div class="col">
                          <h3 class="card-title mb-0">Empleado</h3>
                          <p class="text-secondary m-0">Table description.</p>
                        </div>
                        <div class="col-md-auto col-sm-12">
                          <div class="ms-auto d-flex flex-wrap btn-list">
                            <div class="input-group input-group-flat w-auto">
                              <span class="input-group-text">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="icon icon-1"
                                >
                                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                  <path d="M21 21l-6 -6" />
                                </svg>
                              </span>
                              <input id="advanced-table-search" type="text" class="form-control" autocomplete="off" />
                              <span class="input-group-text">
                                <kbd>ctrl + K</kbd>
                              </span>
                            </div>
                            <a href="#" class="btn btn-0"> Añadir nueva </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="advanced-table">
                      <div class="table-responsive">
                        <table class="table table-vcenter table-selectable">
                          <thead>
                            <tr>
                              <th class="w-1"></th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-name">Nombre</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-city">City</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-status">Status</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-date">Start date</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-tags">Tags</button>
                              </th>
                              <th>
                                <button class="table-sort d-flex justify-content-between" data-sort="sort-category">Category</button>
                              </th>
                            </tr>
                          </thead>
                          <tbody class="table-tbody">
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                                Paweł Kuna
                              </td>
                              <td class="sort-city">Peimei, China</td>
                              <td class="sort-status">
                                <span class="badge bg-success-lt">Active</span>
                              </td>
                              <td class="sort-date">December 08, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">Event</span>
                                  <span class="badge">Tickets</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Individual </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-2"
                                      >
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  class="form-check-input m-0 align-middle table-selectable-check"
                                  type="checkbox"
                                  aria-label="Select invoice"
                                  value="true"
                                />
                              </td>
                              <td class="sort-name">
                                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                                Jeffie Lewzey
                              </td>
                              <td class="sort-city">Indaial, Brazil</td>
                              <td class="sort-status">
                                <span class="badge bg-danger-lt">Inactive</span>
                              </td>
                              <td class="sort-date">January 01, 2024</td>
                              <td class="sort-tags">
                                <div class="badges-list">
                                  <span class="badge">QTA</span>
                                  <span class="badge">Event</span>
                                </div>
                              </td>
                              <td class="sort-category py-0">
                                <span class="on-unchecked"> Agencies </span>
                                <div class="on-checked">
                                  <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                      <!-- Download SVG icon from http://tabler.io/icons/icon/dots -->
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-2"
                                      >
                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer d-flex align-items-center">
                        <div class="dropdown">
                          <a class="btn dropdown-toggle" data-bs-toggle="dropdown">
                            <span id="page-count" class="me-1">20</span>
                            <span>registros</span>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="10">10 records</a>
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="20">20 records</a>
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="50">50 records</a>
                            <a class="dropdown-item" onclick="setPageListItems(event)" data-value="100">100 records</a>
                          </div>
                        </div>
                        <ul class="pagination m-0 ms-auto">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-1"
                              >
                                <path d="M15 6l-6 6l6 6" />
                              </svg>
                            </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">4</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">5</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">6</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">7</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">8</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">9</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">10</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-1"
                              >
                                <path d="M9 6l6 6l-6 6" />
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  const advancedTable = {
                    headers: [
                      { "data-sort": "sort-name", name: "Name" },
                      { "data-sort": "sort-city", name: "City" },
                      { "data-sort": "sort-status", name: "Status" },
                      { "data-sort": "sort-date", name: "Start date" },
                      { "data-sort": "sort-tags", name: "Tags" },
                      { "data-sort": "sort-category", name: "Category" },
                    ],
                  };
                  const setPageListItems = (e) => {
                    window.tabler_list["advanced-table"].page = parseInt(e.target.dataset.value);
                    window.tabler_list["advanced-table"].update();
                    document.querySelector("#page-count").innerHTML = e.target.dataset.value;
                  };
                  window.tabler_list = window.tabler_list || {};
                  document.addEventListener("DOMContentLoaded", function () {
                    const list = (window.tabler_list["advanced-table"] = new List("advanced-table", {
                      sortClass: "table-sort",
                      listClass: "table-tbody",
                      page: parseInt("20"),
                      pagination: {
                        item: (value) => {
                          return `<li class="page-item"><a class="page-link cursor-pointer">${value.page}</a></li>`;
                        },
                        innerWindow: 1,
                        outerWindow: 1,
                        left: 0,
                        right: 0,
                      },
                      valueNames: advancedTable.headers.map((header) => header["data-sort"]),
                    }));
                    const searchInput = document.querySelector("#advanced-table-search");
                    if (searchInput) {
                      searchInput.addEventListener("input", () => {
                        list.search(searchInput.value);
                      });
                    }
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
            <!-- FIN TABLA -->


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
