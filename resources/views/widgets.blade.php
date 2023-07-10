<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">
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
        <li class="nav-title">Theme</li>
        <li class="nav-item"><a class="nav-link" href="colors.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-drop"></use>
            </svg> Colors</a></li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-pencil"></use>
            </svg> Typography</a></li>
        <li class="nav-title">Components</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
            </svg> Base</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Breadcrumb</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a></li>
            <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span> Carousel</a></li>
            <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span> Collapse</a></li>
            <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span> List group</a></li>
            <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"></span> Navs &amp; Tabs</a></li>
            <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span> Pagination</a></li>
            <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span class="nav-icon"></span> Placeholders</a></li>
            <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span> Popovers</a></li>
            <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span> Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span> Scrollspy</a></li>
            <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span> Spinners</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span> Tables</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span> Tooltips</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-cursor"></use>
            </svg> Buttons</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span> Buttons</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> Buttons Group</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> Dropdowns</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="charts.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
            </svg> Charts</a></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-notes"></use>
            </svg> Forms</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="forms/form-control.html"> Form Control</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/select.html"> Select</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Checks and radios</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/range.html"> Range</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/input-group.html"> Input group</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"> Floating labels</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/layout.html"> Layout</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/validation.html"> Validation</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
            </svg> Icons</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
            </svg> Notifications</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="widgets.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-calculator"></use>
            </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
            </svg> Pages</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                </svg> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                </svg> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                </svg> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-description"></use>
            </svg> Docs</a></li>
        <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-layers"></use>
            </svg> Try CoreUI
            <div class="fw-semibold">PRO</div></a></li>
      </ul>
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
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
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
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
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
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Components</a>
              </li>
              <li class="breadcrumb-item active"><span>Widgets</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header">
              <string>Widgets</string>
            </div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-658" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-658">
                    <div class="row">
                      <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-primary">
                          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                              <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                                  <svg class="icon">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-bottom"></use>
                                  </svg>)</span></div>
                              <div>Users</div>
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                          </div>
                          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-info">
                          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                              <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
                                  <svg class="icon">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-top"></use>
                                  </svg>)</span></div>
                              <div>Income</div>
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                          </div>
                          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart2" height="70"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-warning">
                          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                              <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                                  <svg class="icon">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-top"></use>
                                  </svg>)</span></div>
                              <div>Conversion Rate</div>
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                          </div>
                          <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-danger">
                          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                              <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                                  <svg class="icon">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-bottom"></use>
                                  </svg>)</span></div>
                              <div>Sessions</div>
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                                </svg>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                          </div>
                          <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart4" height="70"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-460" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-460"> 
                    <div class="row">
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Widget title</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">12.124</div>
                            <div>Widget title</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">$98.111,00</div>
                            <div>Widget title</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">2 TB</div>
                            <div>Widget title</div>
                            <div class="progress progress-thin my-2">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1276" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1276">
                    <div class="row">
                      <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-primary">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">89.9%</div>
                            <div>Widget title</div>
                            <div class="progress progress-white progress-thin my-2">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-warning">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">12.124</div>
                            <div>Widget title</div>
                            <div class="progress progress-white progress-thin my-2">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-danger">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">$98.111,00</div>
                            <div>Widget title</div>
                            <div class="progress progress-white progress-thin my-2">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-info">
                          <div class="card-body">
                            <div class="fs-4 fw-semibold">2 TB</div>
                            <div>Widget title</div>
                            <div class="progress progress-white progress-thin my-2">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-383" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-383">
                    <div class="row">
                      <div class="col-md-2 col-sm-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <div class="text-medium-emphasis small text-uppercase fw-semibold">Title</div>
                            <div class="fs-6 fw-semibold py-3">1,123</div>
                            <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                              <canvas class="chart chart-bar" id="sparkline-chart-1" height="40" width="80"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-md-2 col-sm-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <div class="text-medium-emphasis small text-uppercase fw-semibold">Title</div>
                            <div class="fs-6 fw-semibold py-3">1,123</div>
                            <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                              <canvas class="chart chart-bar" id="sparkline-chart-2" height="40" width="80"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-md-2 col-sm-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <div class="text-medium-emphasis small text-uppercase fw-semibold">Title</div>
                            <div class="fs-6 fw-semibold py-3">1,123</div>
                            <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                              <canvas class="chart chart-bar" id="sparkline-chart-3" height="40" width="80"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-md-2 col-sm-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <div class="text-medium-emphasis small text-uppercase fw-semibold">Title</div>
                            <div class="fs-6 fw-semibold py-3">1,123</div>
                            <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                              <canvas class="chart chart-line" id="sparkline-chart-4" height="40" width="100"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-md-2 col-sm-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <div class="text-medium-emphasis small text-uppercase fw-semibold">Title</div>
                            <div class="fs-6 fw-semibold py-3">1,123</div>
                            <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                              <canvas class="chart chart-line" id="sparkline-chart-5" height="40" width="100"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-md-2 col-sm-4">
                        <div class="card">
                          <div class="card-body text-center">
                            <div class="text-medium-emphasis small text-uppercase fw-semibold">Title</div>
                            <div class="fs-6 fw-semibold py-3">1,123</div>
                            <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
                              <canvas class="chart chart-line" id="sparkline-chart-6" height="40" width="100"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1249" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1249">
                    <div class="row">
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-primary text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-primary">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-info text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-laptop"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-info">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-warning text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-warning">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-danger text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-danger">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-978" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-978">
                    <div class="row">
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-primary text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-primary">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                          <div class="card-footer px-3 py-2"><a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#"><span class="small fw-semibold">View More</span>
                              <svg class="icon">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chevron-right"></use>
                              </svg></a></div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-info text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-laptop"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-info">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                          <div class="card-footer px-3 py-2"><a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#"><span class="small fw-semibold">View More</span>
                              <svg class="icon">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chevron-right"></use>
                              </svg></a></div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-warning text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-warning">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                          <div class="card-footer px-3 py-2"><a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#"><span class="small fw-semibold">View More</span>
                              <svg class="icon">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chevron-right"></use>
                              </svg></a></div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card">
                          <div class="card-body p-3 d-flex align-items-center">
                            <div class="bg-danger text-white p-3 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-danger">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                          <div class="card-footer px-3 py-2"><a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#"><span class="small fw-semibold">View More</span>
                              <svg class="icon">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chevron-right"></use>
                              </svg></a></div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1179" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1179">
                    <div class="row">
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-primary text-white p-4 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-primary">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-info text-white p-4 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-laptop"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-info">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-warning text-white p-4 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-warning">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-danger text-white p-4 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-danger">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-106" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-106">
                    <div class="row">  
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-primary text-white py-4 px-5 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-primary">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-info text-white py-4 px-5 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-laptop"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-info">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-warning text-white py-4 px-5 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-warning">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-danger text-white py-4 px-5 me-3">
                              <svg class="icon icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                              </svg>
                            </div>
                            <div>
                              <div class="fs-6 fw-semibold text-danger">$1.999,50</div>
                              <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1044" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1044">
                    <div class="row">
                      <div class="col-sm-6 col-lg-4">
                        <div class="card" style="--cui-card-cap-bg: #3b5998">
                          <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon icon-3xl text-white my-4">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-facebook-f"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                              <canvas id="social-box-chart-1" height="90"></canvas>
                            </div>
                          </div>
                          <div class="card-body row text-center">
                            <div class="col">
                              <div class="fs-5 fw-semibold">89k</div>
                              <div class="text-uppercase text-medium-emphasis small">friends</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                              <div class="fs-5 fw-semibold">459</div>
                              <div class="text-uppercase text-medium-emphasis small">feeds</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-4">
                        <div class="card" style="--cui-card-cap-bg: #00aced">
                          <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon icon-3xl text-white my-4">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-twitter"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                              <canvas id="social-box-chart-2" height="90"></canvas>
                            </div>
                          </div>
                          <div class="card-body row text-center">
                            <div class="col">
                              <div class="fs-5 fw-semibold">973k</div>
                              <div class="text-uppercase text-medium-emphasis small">followers</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                              <div class="fs-5 fw-semibold">1.792</div>
                              <div class="text-uppercase text-medium-emphasis small">tweets</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-lg-4">
                        <div class="card" style="--cui-card-cap-bg: #4875b4">
                          <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon icon-3xl text-white my-4">
                              <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-linkedin"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                              <canvas id="social-box-chart-3" height="90"></canvas>
                            </div>
                          </div>
                          <div class="card-body row text-center">
                            <div class="col">
                              <div class="fs-5 fw-semibold">500+</div>
                              <div class="text-uppercase text-medium-emphasis small">contacts</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                              <div class="fs-5 fw-semibold">292</div>
                              <div class="text-uppercase text-medium-emphasis small">feeds</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1157" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1157">
                    <div class="card-group">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-people"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">87.500</div><small class="text-medium-emphasis text-uppercase fw-semibold">Visitors</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user-follow"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">385</div><small class="text-medium-emphasis text-uppercase fw-semibold">New Clients</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-basket"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">1238</div><small class="text-medium-emphasis text-uppercase fw-semibold">Products sold</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">28%</div><small class="text-medium-emphasis text-uppercase fw-semibold">Returning Visitors</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">5:34:11</div><small class="text-medium-emphasis text-uppercase fw-semibold">Avg. Time</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-62" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-62">
                    <div class="row">
                      <div class="col-sm-6 col-md-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="text-medium-emphasis text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-people"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">87.500</div><small class="text-medium-emphasis text-uppercase fw-semibold">Visitors</small>
                            <div class="progress progress-thin mt-3 mb-0">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="text-medium-emphasis text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user-follow"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">385</div><small class="text-medium-emphasis text-uppercase fw-semibold">New Clients</small>
                            <div class="progress progress-thin mt-3 mb-0">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="text-medium-emphasis text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-basket"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">1238</div><small class="text-medium-emphasis text-uppercase fw-semibold">Products sold</small>
                            <div class="progress progress-thin mt-3 mb-0">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="text-medium-emphasis text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">28%</div><small class="text-medium-emphasis text-uppercase fw-semibold">Returning Visitors</small>
                            <div class="progress progress-thin mt-3 mb-0">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="text-medium-emphasis text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">5:34:11</div><small class="text-medium-emphasis text-uppercase fw-semibold">Avg. Time</small>
                            <div class="progress progress-thin mt-3 mb-0">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="text-medium-emphasis text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speech"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">972</div><small class="text-medium-emphasis text-uppercase fw-semibold">Comments</small>
                            <div class="progress progress-thin mt-3 mb-0">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1215" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1215">
                    <div class="row">
                      <div class="col-sm-6 col-md-2">
                        <div class="card text-white bg-info">
                          <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-people"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">87.500</div><small class="text-medium-emphasis-inverse text-uppercase fw-semibold">Visitors</small>
                            <div class="progress progress-white progress-thin mt-3">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card text-white bg-success">
                          <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user-follow"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">385</div><small class="text-medium-emphasis-inverse text-uppercase fw-semibold">New Clients</small>
                            <div class="progress progress-white progress-thin mt-3">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card text-white bg-warning">
                          <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-basket"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">1238</div><small class="text-medium-emphasis-inverse text-uppercase fw-semibold">Products sold</small>
                            <div class="progress progress-white progress-thin mt-3">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card text-white bg-primary">
                          <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">28%</div><small class="text-medium-emphasis-inverse text-uppercase fw-semibold">Returning Visitors</small>
                            <div class="progress progress-white progress-thin mt-3">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card text-white bg-danger">
                          <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">5:34:11</div><small class="text-medium-emphasis-inverse text-uppercase fw-semibold">Avg. Time</small>
                            <div class="progress progress-white progress-thin mt-3">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-6 col-md-2">
                        <div class="card text-white bg-info">
                          <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                              <svg class="icon icon-xxl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speech"></use>
                              </svg>
                            </div>
                            <div class="fs-4 fw-semibold">972</div><small class="text-medium-emphasis-inverse text-uppercase fw-semibold">Comments</small>
                            <div class="progress progress-white progress-thin mt-3">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> &copy; 2022 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="node_modules/simplebar/dist/simplebar.min.js"></script>
    <script src="node_modules/chart.js/dist/chart.min.js"></script>
    <script src="node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>
    <script src="node_modules/@coreui/utils/dist/coreui-utils.js"></script>
    <script src="js/widgets.js"></script>
    <script> 
    </script>
  </body>
</html>