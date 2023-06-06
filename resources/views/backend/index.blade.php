<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML backend Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-backend-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../backend/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../backend/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../backend/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../backend/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../backend/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../backend/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../backend/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../backend/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../backend/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">

    @foreach($users as $user)
    @if($user->id == $user_id_current)
      <div class="layout-container">
        <!-- Menu -->
        @include('backend.includes.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          @include('backend.includes.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                
                <div class="col-lg-6 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <img
                                src="../backend/assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                            />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1"><strong style="font-size: 20px;">Mac</strong></span>
                        <h3 class="card-title mb-2">{{$total_mac}}</h3>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <img
                                src="../backend/assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                            />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1"><strong style="font-size: 20px;">Ipad</strong></span>
                        <h3 class="card-title mb-2">{{$total_ipad}}</h3>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <img
                                src="../backend/assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                            />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1"><strong style="font-size: 20px;">Iphone</strong></span>
                        <h3 class="card-title mb-2">{{$total_iphone}}</h3>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <img
                                src="../backend/assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                            />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1"><strong style="font-size: 20px;">No. of Visit</strong></span>
                        <h3 class="card-title mb-2">{{$total_visit}}</h3>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <img
                                src="../backend/assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                            />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1"><strong style="font-size: 20px;">Contact</strong></span>
                        <h3 class="card-title mb-2">{{$total_contact}}</h3>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <img
                                src="../backend/assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                            />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1"><strong style="font-size: 20px;">No. Order</strong></span>
                        <h3 class="card-title mb-2">{{$total_order  }}</h3>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                
            </div>
            </div>
            <!-- / Content -->


                    
          <!-- / Content wrapper -->

          <!-- Footer -->
          @include('backend.includes.footer')
          <!-- / Layout page -->
      </div>
      @endif
      @endforeach

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../backend/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../backend/assets/vendor/libs/popper/popper.js"></script>
    <script src="../backend/assets/vendor/js/bootstrap.js"></script>
    <script src="../backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../backend/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../backend/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../backend/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../backend/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>