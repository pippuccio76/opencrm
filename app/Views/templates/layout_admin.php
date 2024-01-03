<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Open CRM</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href=" <?=base_url('/assets/images/favicon.png') ?>"
    />
    <!-- Custom CSS -->
    <link href=" <?=base_url('/assets/libs/flot/css/float-chart.css') ?>" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?=base_url('/assets/css/style.min.css') ?>" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?= $this->renderSection('custom_css') ?>


  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src=" <?=base_url('/assets/images/openCRM_logo_stretto.png ') ?>"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img
                  src=" <?=base_url('/assets/images/openCRM_text.png') ?>" 
                  alt="homepage"
                  class="light-logo mt-1"
                  style='max-width: 70%;'
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> 
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>

              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">

              </li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">

              </li>
            </ul>
           
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">

              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">

              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="<?=base_url('/assets/images/users/1.jpg')?>"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                    Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-10">
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-success btn-rounded text-white"
                      >View Profile</a
                    >
                  </div>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>



              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-convert"></i
                  ><span class="hide-menu">Clienti </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Clienti/inserisciRecord') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Crea Clienti </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Clienti/lista_completa') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> Lista Clienti </span></a
                    >
                  </li>
                </ul>
              </li>


              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-martini"></i
                  ><span class="hide-menu">Prodotti </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Prodotti/inserisciRecord') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Crea Prodotto </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Prodotti/lista_completa') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> Lista Prodotti </span></a
                    >
                  </li>
                </ul>
              </li>


              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-cash-usd"></i
                  ><span class="hide-menu">Acquisti </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Acquisti/inserisciRecord') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Inserisci Acquisti </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Acquisti/lista_completa') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> Lista Acquisti </span></a
                    >
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Vendite </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Vendite/inserisciRecord') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Crea Vendite </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?=base_url('admin_Vendite/lista_completa') ?>" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> Lista Vendite </span></a
                    >
                  </li>
                </ul>
              </li>


              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="pages-buttons.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-relative-scale"></i
                  ><span class="hide-menu">Calendario</span></a
                >
              </li>
              

            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title"><?php 

                  if(isset($title)){

                    echo $title;

                  }else{

                    echo 'Titolo Pagina';

                  }


               ?></h4>

            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="card p-1" style="background-color: #f3f6f9;">


              <?= $this->renderSection('content') ?>

          </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          Open CRM created By <a href="mailto:stefanobanchelli@yahoo.it">Banchelli Stefano</a> 
          <br>
          <small>
          Template  Designed and Developed by WrapPixel.
          </small>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('/assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
    <script src="<?= base_url('/assets/extra-libs/sparkline/sparkline.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('/assets/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('/assets/js/sidebarmenu.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('/assets/js/custom.min.js') ?>"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.j') ?>s') ?>"></script> -->
    <!-- Charts js Files -->
    <script src="<?= base_url('/assets/libs/flot/excanvas.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/flot/jquery.flot.time.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/flot/jquery.flot.crosshair.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/pages/chart/chart-page-init.js') ?>"></script>

    <?= $this->renderSection('script') ?>


  </body>
</html>
