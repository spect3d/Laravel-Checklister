<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendors styles-->
    <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <title>{{ config ('app.name', 'Laravel') }}</title>
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="index.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Admin</li>
        <li class="nav-item"><a class="nav-link" href="colors.html">
        <li class="nav-title">Accounts</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
            </svg> Savings</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Card Types</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a></li>
            <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span> Currencies</a></li>
            <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span> Credit Card</a></li>
            <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span> Transactions</a></li>
            <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"></span> Money Plan</a></li>
            <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span> Pagination</a></li>
            <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span class="nav-icon"></span> Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span> Cashflow</a></li>
            <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span> Reports</a></li>
            <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span> Products</a></li>
            <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span> Services</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span> Linked Services</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span> Settings</a></li>
          </ul>
      </li>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>

          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div></a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">0</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">0</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">0</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">0</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">0</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">0</span></a>
                <div class="dropdown-divider"></div>
                <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                    <a class="dropdown-item" class="dropdown-item" href="./"></svg> Lock Account</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                                   </form>
                                </svg> Logout
                            </a>
               </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-50 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span></span>
              </li>
              <li class="breadcrumb-item active"><span></span></li>
            </ol>
          </nav>
        </div>
      </header>


              <main class="py-4">
            @yield('content')
        </main>
    </div>
 <!-- CoreUI and necessary plugins-->
 <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="node_modules/simplebar/dist/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/chart.min.js"></script>
    <script src="node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>
    <script src="node_modules/@coreui/utils/dist/coreui-utils.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

