<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
    <title>SIAKAD | <?php echo $title ?></title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/toastr/toastr.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/dist/css/adminlte.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">

    <!-- //Date Range Picker -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins-bs/daterangpicker-pack-hk/daterangepicker.css') ?>">

    <!-- Animate for Carousel (Use Old Ver that works!)  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


    <style>
        /*  */
        /*  */
        /* Fixed Navbar */
        .layout-navbar-fixed .wrapper .brand-link {
            transition: width .0s ease-in-out !important;
        }


        /*  */
        /*  */
        /* Change Autocomplete styles in Chrome*/
        /* Dark Mode */
        .dark-mode input:-webkit-autofill,
        .dark-mode input:-webkit-autofill:hover,
        .dark-mode input:-webkit-autofill:focus,
        .dark-mode textarea:-webkit-autofill,
        .dark-mode textarea:-webkit-autofill:hover,
        .dark-mode textarea:-webkit-autofill:focus,
        .dark-mode select:-webkit-autofill,
        .dark-mode select:-webkit-autofill:hover,
        .dark-mode select:-webkit-autofill:focus,
        .dark-mode input:-internal-autofill-selected {
            border: 1px solid inherit;
            /* -webkit-text-fill-color: #000; */
            background: inherit !important;
            -webkit-box-shadow: inset 0 0 0 1px var(--dark), inset 0 0 0 100px var(--dark);
            box-shadow: inset 0 0 0 1px var(--dark), inset 0 0 0 100px var(--dark);
            transition: background-color 5000s ease-in-out 0s !important;
        }

        /* Normal Mode */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus,
        input:-internal-autofill-selected {
            border: 1px solid inherit;
            -webkit-text-fill-color: #000;
            background: inherit !important;
            -webkit-box-shadow: inset 0 0 0 1px var(--light), inset 0 0 0 100px var(--light);
            box-shadow: inset 0 0 0 1px var(--light), inset 0 0 0 100px var(--light);
            transition: background-color 5000s ease-in-out 0s !important;
        }



        /*  */
        /*  */
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
            z-index: 0 !important;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        /* ### Dasboard Welcome Images */

        /* Scrool2Top */
        :root {
            --footer-h: 6.5%;
            --scrool2top-m: 2%;
        }

        .layout-footer-fixed .wrapper .main-footer {
            height: calc(var(--footer-h) - 2) !important;
        }


        #scrool2Top {
            display: none;
            position: fixed;
            right: calc(var(--scrool2top-m) - 0.5%);
            bottom: calc(var(--footer-h) + var(--scrool2top-m));
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

        /* ### Scrollbar */
        /* # Vertical */
        ::-webkit-scrollbar {
            width: .45rem;
            height: .45rem;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(27, 27, 27, .4);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        /* # Horizontal */
        ::-webkit-scrollbar:horizontal {
            width: .45rem;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:horizontal {
            background-color: rgba(27, 27, 27, .4);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-track:horizontal {
            background: transparent;
        }

        ::-webkit-scroolbar-resizer:horizontal {
            display: none !important;
            -webkit-appearance: none !important;
        }

        ::-webkit-scroolbar-corner {
            display: none !important;
            -webkit-appearance: none !important;
        }


        /* ### Custom Scroolbar Bootsrap */

        .light-mode .breadcrumb-light {
            background-color: #fff0;
            color: var(--dark-gray) !important;
        }

        .breadcrumb-white {
            background-color: #fff0;
            color: var(--dark-gray);
        }

        .dark-mode .breadcrumb-dark {
            background-color: #fff0;
            color: var(--white) !important;
        }

        .breadcrumb-black {
            background-color: #fff0;
            color: var(--white);
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

        .user-panel.mt-3.pb-3.mb-3.d-flex {
            align-items: center;
        }

        .fullname.overflow-scroll {
            white-space: nowrap !important;
            overflow-x: scroll !important;
            text-overflow: clip;
        }


        /* DataTable Custom with X-ScroolBar */
        .dataTables_scroll {
            overflow: auto;
        }

        s .example1Wrapper {
            max-width: 100% !important;
            margin: 0 auto !important;
        }

        #example1 th,
        td {
            white-space: nowrap !important;
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em !important;
        }

        /* .DataTable Custom with X-ScroolBar */

        /* DataTable Button-Info Style */
        #datatables_buttons_info.dt-button-info,
        h2 {
            color: inherit !important;
            background-color: inherit !important;
        }


        /* .DataTable Colvis Style */
        .dt-button-collection {
            background-color: #6c757d !important;
            color: inherit !important;
        }



        /* FrontPage Navbar: Search1 hide */
        div.navbar-collapse>ul.navbar-nav>li.nav-item:nth-child(3) {
            display: none;
        }


        /* Sidebar: Help Default Hide */
        nav>ul.nav.nav-pills>li.nav-item:nth-child(16),
        div.addtional-nav {
            display: none !important;
        }

        /* ./navBar : Default Cond */


        /* Responsive Breakpoint */
        /* Tablet Size */
        @media (max-width: 768px) {
            .hide-for-mobile {
                display: none !important
            }
        }

        /* Mobile Size */
        @media (max-width: 576px) {

            /* FrontPage Navbar: Search1 hide */
            div.navbar-collapse>ul.navbar-nav>li.nav-item:nth-child(3) {
                display: block !important;
            }

            nav>div.container>ul>li.nav-item:nth-child(1) {
                display: none !important;
            }

            /* ./ frontPage Navbar: Search1 hide */


            /* DataTable : Colvis */
            .hide-for-mobile {
                display: none !important
            }



            /* NavBar: Home & News Show on mobile */
            li.nav-item.d-none.d-sm-inline-block:nth-child(1),
            .d-sm-inline-block:nth-child(2) {
                display: block !important;
            }

            /* Navbar: Help Hide on mobile */
            li.nav-item.d-none.d-sm-inline-block:nth-child(3) {
                display: none !important;
            }


            /* Sidebar: Help Show on mobile */
            nav>ul.nav.nav-pills>li.nav-item:nth-child(16),
            div.addtional-nav {
                display: block !important;
            }


        }

        /* .DataTable Responsive Breakpoint */



        /* BioData Table */
        table.table.table-striped>tbody>tr>td {
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        /* .BioData Table */

        /* No border */
        .no-border {
            border: 0 inset #eee;
            box-shadow: none;
            padding: 3px;
            background-color: inherit;
            color: inherit;
            width: 100%;
            /* You may want to include this as bootstrap applies these styles too */
        }



        /*  */
        /* Carousel Style */
        .carousel-indicators {
            bottom: 0;
        }

        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
        }

        .carousel-item {
            min-height: 350px;
            height: 100%;
            width: 100%;
        }

        .carousel-caption h3,
        .carousel .icon-container,
        .carousel-caption button {
            background-color: #09c;
        }

        .carousel-caption h3 {
            padding: .5em;
        }

        .carousel .icon-container {
            display: inline-block;
            font-size: 25px;
            line-height: 25px;
            padding: 1em;
            text-align: center;
            border-radius: 50%;
        }

        .carousel-caption button {
            z-index: 3;
            border-color: #00bfff;
            margin-top: 1em;
        }



        /* Animation delays */
        .carousel-caption h3:first-child {
            animation-delay: 1s;
        }

        .carousel-caption h3:nth-child(2) {
            animation-delay: 2s;
        }

        .carousel-caption button {
            animation-delay: 2s;
            pointer-events: auto;
        }


        .p {
            padding-top: 125px;
            text-align: center;
        }

        .p a {
            text-decoration: underline;
        }


        /* .Carousel Style */


        /*  */
        /*  */
    </style>


</head>