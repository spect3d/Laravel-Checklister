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
    <base href="./../">
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
    <link rel="canonical" href="https://coreui.io/docs/components/buttons/">
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
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Buttons</a>
              </li>
              <li class="breadcrumb-item active"><span>Buttons</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">CoreUI includes a bunch of predefined Bootstrap buttons, each serving its own semantic purpose. CoreUI also offers some unique buttons styles.</p>
              <p class="text-medium-emphasis small">Buttons show what action will happen when the user clicks or touches it. Bootstrap buttons are used to initialize operations, both in the background or foreground of an experience.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-442" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#examples" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-442">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-primary" type="button">Primary</button>
                        <button class="btn btn-secondary" type="button">Secondary</button>
                        <button class="btn btn-success" type="button">Success</button>
                        <button class="btn btn-danger" type="button">Danger</button>
                        <button class="btn btn-warning" type="button">Warning</button>
                        <button class="btn btn-info" type="button">Info</button>
                        <button class="btn btn-light" type="button">Light</button>
                        <button class="btn btn-dark" type="button">Dark</button>
                        <button class="btn btn-link" type="button">Link</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" aria-pressed="true">Primary</button>
                        <button class="btn btn-secondary active" type="button" aria-pressed="true">Secondary</button>
                        <button class="btn btn-success active" type="button" aria-pressed="true">Success</button>
                        <button class="btn btn-danger active" type="button" aria-pressed="true">Danger</button>
                        <button class="btn btn-warning active" type="button" aria-pressed="true">Warning</button>
                        <button class="btn btn-info active" type="button" aria-pressed="true">Info</button>
                        <button class="btn btn-light active" type="button" aria-pressed="true">Light</button>
                        <button class="btn btn-dark active" type="button" aria-pressed="true">Dark</button>
                        <button class="btn btn-link active" type="button" aria-pressed="true">Link</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" disabled="">Primary</button>
                        <button class="btn btn-secondary active" type="button" disabled="">Secondary</button>
                        <button class="btn btn-success active" type="button" disabled="">Success</button>
                        <button class="btn btn-danger active" type="button" disabled="">Danger</button>
                        <button class="btn btn-warning active" type="button" disabled="">Warning</button>
                        <button class="btn btn-info active" type="button" disabled="">Info</button>
                        <button class="btn btn-light active" type="button" disabled="">Light</button>
                        <button class="btn btn-dark active" type="button" disabled="">Dark</button>
                        <button class="btn btn-link active" type="button" disabled="">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong><span class="small ms-1">with icons</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">You can combine button with our <a href="https://icons.coreui.io/">CoreUI Icons</a>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-900" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#with-icons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-900">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-primary" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Primary
                        </button>
                        <button class="btn btn-secondary" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Secondary
                        </button>
                        <button class="btn btn-success" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Success
                        </button>
                        <button class="btn btn-danger" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Danger
                        </button>
                        <button class="btn btn-warning" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Warning
                        </button>
                        <button class="btn btn-info" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Info
                        </button>
                        <button class="btn btn-light" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Light
                        </button>
                        <button class="btn btn-dark" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Dark
                        </button>
                        <button class="btn btn-link" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Link
                        </button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Primary
                        </button>
                        <button class="btn btn-secondary active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Secondary
                        </button>
                        <button class="btn btn-success active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Success
                        </button>
                        <button class="btn btn-danger active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Danger
                        </button>
                        <button class="btn btn-warning active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Warning
                        </button>
                        <button class="btn btn-info active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Info
                        </button>
                        <button class="btn btn-light active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Light
                        </button>
                        <button class="btn btn-dark active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Dark
                        </button>
                        <button class="btn btn-link active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Link
                        </button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Primary
                        </button>
                        <button class="btn btn-secondary active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Secondary
                        </button>
                        <button class="btn btn-success active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Success
                        </button>
                        <button class="btn btn-danger active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Danger
                        </button>
                        <button class="btn btn-warning active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Warning
                        </button>
                        <button class="btn btn-info active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Info
                        </button>
                        <button class="btn btn-light active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Light
                        </button>
                        <button class="btn btn-dark active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Dark
                        </button>
                        <button class="btn btn-link active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                          </svg>Link  
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">tags</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">The <code>.btn</code> classes are designed for <code> &lt;button&gt;</code> , <code> &lt;a&gt;</code> or <code> &lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>
              <p class="text-medium-emphasis small">If you’re using <code>.btn</code> classes on <code> &lt;a&gt;</code> elements that are used to trigger functionality ex. collapsing content, these links should be given a <code>role="button"</code> to adequately communicate their meaning to assistive technologies such as screen readers.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1158" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#button-tags" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158"><a class="btn btn-primary" href="#" role="button">Link</a>
                    <button class="btn btn-primary" type="submit">Button</button>
                    <input class="btn btn-primary" type="button" value="Input">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong><span class="small ms-1">outline</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">If you need a button, but without the strong background colors. Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background colors on any element with <code>.btn</code> class.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-195" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#outline-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-195">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary" type="button">Primary</button>
                        <button class="btn btn-outline-secondary" type="button">Secondary</button>
                        <button class="btn btn-outline-success" type="button">Success</button>
                        <button class="btn btn-outline-danger" type="button">Danger</button>
                        <button class="btn btn-outline-warning" type="button">Warning</button>
                        <button class="btn btn-outline-info" type="button">Info</button>
                        <button class="btn btn-outline-light" type="button">Light</button>
                        <button class="btn btn-outline-dark" type="button">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary active" type="button" aria-pressed="true">Primary</button>
                        <button class="btn btn-outline-secondary active" type="button" aria-pressed="true">Secondary</button>
                        <button class="btn btn-outline-success active" type="button" aria-pressed="true">Success</button>
                        <button class="btn btn-outline-danger active" type="button" aria-pressed="true">Danger</button>
                        <button class="btn btn-outline-warning active" type="button" aria-pressed="true">Warning</button>
                        <button class="btn btn-outline-info active" type="button" aria-pressed="true">Info</button>
                        <button class="btn btn-outline-light active" type="button" aria-pressed="true">Light</button>
                        <button class="btn btn-outline-dark active" type="button" aria-pressed="true">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary active" type="button" disabled="">Primary</button>
                        <button class="btn btn-outline-secondary active" type="button" disabled="">Secondary</button>
                        <button class="btn btn-outline-success active" type="button" disabled="">Success</button>
                        <button class="btn btn-outline-danger active" type="button" disabled="">Danger</button>
                        <button class="btn btn-outline-warning active" type="button" disabled="">Warning</button>
                        <button class="btn btn-outline-info active" type="button" disabled="">Info</button>
                        <button class="btn btn-outline-light active" type="button" disabled="">Light</button>
                        <button class="btn btn-outline-dark active" type="button" disabled="">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong><span class="small ms-1">ghost</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use <code>.btn-ghost-*</code> class for ghost buttons.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-132" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#ghost-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-132">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-ghost-primary" type="button">Primary</button>
                        <button class="btn btn-ghost-secondary" type="button">Secondary</button>
                        <button class="btn btn-ghost-success" type="button">Success</button>
                        <button class="btn btn-ghost-danger" type="button">Danger</button>
                        <button class="btn btn-ghost-warning" type="button">Warning</button>
                        <button class="btn btn-ghost-info" type="button">Info</button>
                        <button class="btn btn-ghost-light" type="button">Light</button>
                        <button class="btn btn-ghost-dark" type="button">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-ghost-primary active" type="button" aria-pressed="true">Primary</button>
                        <button class="btn btn-ghost-secondary active" type="button" aria-pressed="true">Secondary</button>
                        <button class="btn btn-ghost-success active" type="button" aria-pressed="true">Success</button>
                        <button class="btn btn-ghost-danger active" type="button" aria-pressed="true">Danger</button>
                        <button class="btn btn-ghost-warning active" type="button" aria-pressed="true">Warning</button>
                        <button class="btn btn-ghost-info active" type="button" aria-pressed="true">Info</button>
                        <button class="btn btn-ghost-light active" type="button" aria-pressed="true">Light</button>
                        <button class="btn btn-ghost-dark active" type="button" aria-pressed="true">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-ghost-primary active" type="button" disabled="">Primary</button>
                        <button class="btn btn-ghost-secondary active" type="button" disabled="">Secondary</button>
                        <button class="btn btn-ghost-success active" type="button" disabled="">Success</button>
                        <button class="btn btn-ghost-danger active" type="button" disabled="">Danger</button>
                        <button class="btn btn-ghost-warning active" type="button" disabled="">Warning</button>
                        <button class="btn btn-ghost-info active" type="button" disabled="">Info</button>
                        <button class="btn btn-ghost-light active" type="button" disabled="">Light</button>
                        <button class="btn btn-ghost-dark active" type="button" disabled="">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">sizes</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-931" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#sizes" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-931">
                    <button class="btn btn-primary btn-lg" type="button">Large button</button>
                    <button class="btn btn-secondary btn-lg" type="button">Large button</button>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-766" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#sizes" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-766">
                    <button class="btn btn-primary btn-sm" type="button">Small button</button>
                    <button class="btn btn-secondary btn-sm" type="button">Small button</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">pill</span></div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1163" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#pill-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1163">
                    <button class="btn btn-primary rounded-pill" type="button">Primary</button>
                    <button class="btn btn-secondary rounded-pill" type="button">Secondary</button>
                    <button class="btn btn-success rounded-pill" type="button">Success</button>
                    <button class="btn btn-danger rounded-pill" type="button">Danger</button>
                    <button class="btn btn-warning rounded-pill" type="button">Warning</button>
                    <button class="btn btn-info rounded-pill" type="button">Info</button>
                    <button class="btn btn-light rounded-pill" type="button">Light</button>
                    <button class="btn btn-dark rounded-pill" type="button">Dark</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">square</span></div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-964" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#square-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-964">
                    <button class="btn btn-primary rounded-0" type="button">Primary</button>
                    <button class="btn btn-secondary rounded-0" type="button">Secondary</button>
                    <button class="btn btn-success rounded-0" type="button">Success</button>
                    <button class="btn btn-danger rounded-0" type="button">Danger</button>
                    <button class="btn btn-warning rounded-0" type="button">Warning</button>
                    <button class="btn btn-info rounded-0" type="button">Info</button>
                    <button class="btn btn-light rounded-0" type="button">Light</button>
                    <button class="btn btn-dark rounded-0" type="button">Dark</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">disabled state</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add the <code>disabled</code> boolean attribute to any <code> &lt;button&gt;</code> element to make buttons look inactive. Disabled button has <code>pointer-events: none</code> applied to, disabling hover and active states from triggering.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-119" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#disabled-state" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-119">
                    <button class="btn btn-lg btn-primary" type="button" disabled="">Primary button</button>
                    <button class="btn btn-secondary btn-lg" type="button" disabled="">Button</button>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Disabled buttons using the <code> &lt;a&gt;</code> element act a little different:</p>
              <p class="text-medium-emphasis small"><code> &lt;a&gt;</code>s don’t support the <code>disabled</code> attribute, so you have to add <code>.disabled</code> class to make buttons look inactive. The disabled bootstrap button must have the <code>aria-disabled="true"</code> attribute to show the state of the element to assistive technologies.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-676" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#disabled-state" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-676"><a class="btn btn-primary btn-lg disabled" href="#" tabindex="-1" role="button" aria-disabled="true">Primary link</a><a class="btn btn-secondary btn-lg disabled" href="#" tabindex="-1" role="button" aria-disabled="true">Link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">block</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Create buttons that span the full width of a parent—by using utilities.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-820" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-820">
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Here we create a responsive variation, starting with vertically stacked buttons until the <code>md</code> breakpoint, where <code>.d-md-block</code> replaces the <code>.d-grid</code> class, thus nullifying the <code>gap-2</code> utility. Resize your browser to see them change.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-647" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-647">
                    <div class="d-grid gap-2 d-md-block">
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">You can adjust the width of your block buttons with grid column width classes. For example, for a half-width “block button”, use <code>.col-6</code>. Center it horizontally with <code>.mx-auto</code>, too.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-248" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-248">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Additional utilities can be used to adjust the alignment of buttons when horizontal. Here we’ve taken our previous responsive example and added some flex utilities and a margin utility on the button to right align the buttons when they’re no longer stacked.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-44" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-44">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button class="btn btn-primary me-md-2" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
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
    <script> 
    </script>
  </body>
</html>