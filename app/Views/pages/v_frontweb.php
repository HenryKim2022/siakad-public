<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
    <title>SIAKAD | <?php echo $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/adminLTE/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/adminLTE/dist/css/adminlte.min.css">


    <style>
        /* Dark/Light Slider */
        .max-height-300 pre {
            max-height: 300px
        }

        .theme-switch {
            display: inline-block;
            height: 24px;
            position: relative;
            width: 50px
        }

        .theme-switch input {
            display: none
        }

        .slider {
            background-color: #ccc;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: 400ms
        }

        .slider::before {
            background-color: #fff;
            bottom: 4px;
            content: "";
            height: 16px;
            left: 4px;
            position: absolute;
            transition: 400ms;
            width: 16px
        }

        input:checked+.slider {
            background-color: #66bb6a
        }

        input:checked+.slider::before {
            transform: translateX(26px)
        }

        .slider.round {
            border-radius: 34px
        }

        .slider.round::before {
            border-radius: 50%
        }

        /* ###  Dark/Light Slider */


        /* Dasboard Welcome Images */
        /* Container holding the image and the text */
        .container.welcomeImg {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(https://i.ibb.co/ZTdsPbh/mul-1.png) bottom;
            pointer-events: none;
            border-radius: 25px;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            text-align: center;
            color: white;
            width: 100%;
            max-height: 9% !important;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .unselectable {
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        /* ### Dasboard Welcome Images */


        /* Scrool2Top */
        #scrool2Top {
            display: none;
            position: fixed;
            bottom: 0%;
            right: 0%;
            margin-right: 2%;
            margin-bottom: 2%;
            z-index: 99999;
            border: none;
            outline: none;
            background-color: rgba(255, 0, 0, 0.6);
            color: white;
            cursor: pointer;
            border-radius: 100%;
            transform: translateY(0%);
            padding: 0 auto;
        }

        #scrool2Top:hover {
            background-color: #555;
            background-color: rgba(255, 0, 0, 1);
        }

        /* ### Scrool2Top */


        /* Custom Scroolbar Bootsrap */
        body {
            /* Manual height for make scrollbar appear */
            font-family: 'Product Sans', sans-serif !important;
            overflow-y: overlay !important;
            /* For scrollbar overlay on content */
            overflow-x: hidden !important;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: .45rem;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(27, 27, 27, .4);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        /* ### Custom Scroolbar Bootsrap */

        .light-mode .navbar-light {
            background-color: #fff;
            color: #1f2d3d !important;
        }

        .navbar-white {
            background-color: #fff;
            color: #1f2d3d;
        }

        /* TextInput Area Dark/Light */
        .dark-mode .custom-control-label::before,
        .dark-mode .custom-file-label,
        .dark-mode .custom-file-label::after,
        .dark-mode .custom-select,
        .dark-mode .form-control:not(.form-control-navbar):not(.form-control-sidebar),
        .dark-mode .input-group-text {
            background-color: #343a40;
            color: #fff;
        }


        /* .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown ul {
            list-style: none;
            padding-left: 10px;
            background-color: #8e8e8e;
            width: 100px;
            position: absolute;
            margin: 0;
            display: none;
        }

        .dropdown:hover ul {
            display: block;
        } */

        /* NavBar FrontPage */
        /* .navbar-nav li:hover .dropdown-menu {
            display: block;
        } */


        nav.main-header>div.container {
            overflow: visible;
            white-space: nowrap;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand-md navbar-black navbar-dark">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="<?= base_url() ?>" class="navbar-brand">
                                <img src="<?= base_url() ?>/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                                <span class="brand-text font-weight-light"><?php echo $sitename ?></span>
                            </a>

                            <!-- Right navbar links -->
                            <ul class="light-mode order-3 order-md-3 navbar-nav navbar-no-expand ml-auto">
                                <!-- SEARCH FORM -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" data-toggle="dropdown" href="#">
                                        <i class="fas fa-search"></i>
                                        <span class="badge badge-warning navbar-badge"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right navbar-black">
                                        <form action="#" class="form-inline w-auto" method="post" autocomplete="on">
                                            <div class="input-group input-group-sm w-100">
                                                <input id="search" class="form-control" type="search" placeholder="Search" aria-label="Search" not=" ">
                                                <div class="input-group-append">
                                                    <button class="btn btn-navbar" type="submit">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                                <span class="autocomplete-result-list"></span>
                                            </div>
                                        </form>

                                    </div>
                                </li>

                                <!-- Accounts Dropdown Menu -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" data-toggle="dropdown" href="#">
                                        <i class="fas fa-user"></i>
                                        <span class="badge badge-warning navbar-badge"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right navbar-black">
                                        <a href="<?= 'auth/signin' ?>" class="dropdown-item" data-widget="signin">
                                            <i class="fas fa-sign-in-alt mr-2"></i>SignIn
                                            <span class="float-right text-muted text-sm"></span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="<?= 'auth/signup' ?>" class="dropdown-item" data-widget="signin">
                                            <i class="fas fa-user-plus mr-2"></i>SignUp
                                            <span class="float-right text-muted text-sm"></span>
                                        </a>
                                        <!-- <a href="#" class="dropdown-item dropdown-footer"></a> -->
                                    </div>
                                </li>

                                <!-- Page Settings - Dropdown Menu -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" data-toggle="dropdown">
                                        <i class="fas fa-cog"></i>
                                        <span class="badge badge-warning navbar-badge"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right navbar-black">
                                        <div class="dropdown-item justify-content-center align-items-center align-self-sm-center flex-column" data-widget="theme-switch" role="button">
                                            <div class="row" style="height: auto;">
                                                <label class="float-left theme-switch ml-2 mr-2 ml-0 mb-0" for="checkbox">
                                                    <input type="checkbox" id="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                                <span class="text-muted text-sm">Screen</span>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-widget="fullscreen" role="button">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                            <span class="float-right text-muted text-sm">Fullscreen</span>
                                        </a>
                                        <!-- <a class="dropdown-item dropdown-footer"></a> -->
                                    </div>
                                </li>

                                <!-- Buton 4 Left navbar links -->
                                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </ul>
                        </div>
                    </div>
                </nav>


                <nav id="subnav" class="navbar navbar-default" role="navigation">
                    <div class="collapse navbar-collapse order-2" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav d-flex">
                            <li class="nav-item">
                                <a href="index3.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">News</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Help</a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                                    <li><a href="#" class="dropdown-item">Abouts </a></li>
                                    <li><a href="#" class="dropdown-item">Carrers</a></li>

                                    <li class="dropdown-divider"></li>
                                    <!-- Level two dropdown-->
                                    <li class="dropdown-submenu dropdown-hover">
                                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Graduate</a>
                                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow" style="display: none;">
                                            <li>
                                                <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                            </li>

                                            <!-- Level three dropdown-->
                                            <li class="dropdown-submenu">
                                                <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                                <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Level three -->

                                            <li><a href="#" class="dropdown-item">level 2</a></li>
                                            <li><a href="#" class="dropdown-item">level 2</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Level two -->
                                </ul>
                            </li>
                        </ul>

                        <!-- SEARCH FORM -->
                        <div>
                            <form action="#" class="form-inline w-auto" method="post" autocomplete="on">
                                <div class="input-group input-group-sm w-100">
                                    <input id="search" class="form-control" type="search" placeholder="Search" aria-label="Search" not=" ">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <span class="autocomplete-result-list"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>














            </div>
        </nav>
        <!-- /.navbar -->
    </div>
    </nav>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> <?php echo $title ?> <small></small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <?php echo $breadcrumbs; ?>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div><!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php echo view('layouts/plugins/v_scrool_top'); ?>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer text-sm">
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
        <strong><a href=""></a>.</strong>
        <div id="copyright" class="float-left hidden-xs"></div>
        <script>
            let since = '2022';
            let now = new Date().getFullYear();

            const paragraph1 = `<p style='margin:0'>
                <i>
                    <strong>
                        Copyright &copy; ${now} <a href="<?= base_url(); ?>">Henry .K</a>.
                    </strong> 
                        All rights reserved
                </i>  
            </p>`;

            const paragraph2 = `<p style='margin:0'>
                <i>
                    <strong>
                        Copyright &copy; ${since}-${now} <a href="<?= base_url(); ?>">Henry .K</a>.
                    </strong> 
                        All rights reserved
                </i>  
            </p>`;

            if (since == now) {
                document.getElementById('copyright').innerHTML = paragraph1;
            } else {
                document.getElementById('copyright').innerHTML = paragraph2;
            }
        </script>
    </footer>
    <!-- ./wrapper -->





    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>/adminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?= base_url() ?>/adminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/adminLTE/dist/js/adminlte.js"></script>
    <script src="<?= base_url() ?>/adminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->





    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>



    <!-- Dark/Light Slider -->
    <script>
        var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        var currentTheme = localStorage.getItem('theme');
        var mainHeader = document.querySelector('.main-header');

        if (currentTheme) {
            if (currentTheme === 'dark') {
                if (!document.body.classList.contains('dark-mode')) {
                    document.body.classList.add("dark-mode");
                }
                if (mainHeader.classList.contains('navbar-dark')) {
                    mainHeader.classList.add('navbar-light');
                    mainHeader.classList.remove('navbar-dark');
                }
                toggleSwitch.checked = true;
            }
        }

        function switchTheme(e) {
            if (e.target.checked) {
                if (!document.body.classList.contains('dark-mode')) {
                    document.body.classList.add("dark-mode");
                }
                if (mainHeader.classList.contains('navbar-dark')) {
                    mainHeader.classList.add('navbar-light');
                    mainHeader.classList.remove('navbar-dark');
                }
                localStorage.setItem('theme', 'dark');
            } else {
                if (document.body.classList.contains('dark-mode')) {
                    document.body.classList.remove("dark-mode");
                }
                if (mainHeader.classList.contains('navbar-light')) {
                    mainHeader.classList.add('navbar-dark');
                    mainHeader.classList.remove('navbar-light');
                }

                localStorage.setItem('theme', 'light');
            }
        }

        toggleSwitch.addEventListener('change', switchTheme, false);
    </script>


    <script>
        const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        const dropdownList = dropdownElementList.map((dropdownToggleEl) => {
            return new mdb.Dropdown(dropdownToggleEl);
        });
    </script>


</body>

</html>