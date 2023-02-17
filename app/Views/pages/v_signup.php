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
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/plugins/toastr/toastr.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('adminLTE/dist/css/adminlte.min.css') ?>">




    <style>
        body {
            background: #f2f2f2 url(https://assets.siakadcloud.com/assets/v1/img/pattern/pat_04.png) repeat;
            margin-top: 0 !important;
        }

        .login-box-footer-msg {
            margin: 0;
            padding: 0 20px;
            text-align: center;
        }

        login-box,
        .register-box {
            width: auto !important;
            padding: 0% 5% !important;
            overflow: hidden;
            text-align: center;
        }

        /* Change Autocomplete styles in Chrome*/
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus {
            border: 1px solid #17a2b8;
            -webkit-text-fill-color: green;
            -webkit-box-shadow: 0 0 0px 1000px inherit inset;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>



<body class="hold-transition register-page">
    <div class="register-box w-25">
        <div class="card card-outline card-primary">
            <!-- <div class="card-header text-center">
                <a href="<?= base_url(); ?>" class="h1"><b>SIAKAD</b> CAMPUS</a>


            </div> -->


            <div class="card-header text-center">
                <div class="row d-flex justify-content-center">
                    <div class="d-flex justify-content-end">
                        <div class="col-sm mt-auto mb-auto">
                            <img class="float-right" src="<?= base_url() ?>/Logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8; height: 48px; width: 48px;">
                        </div>
                        <div class="col-sm mt-auto mb-auto">
                            <a href="<?= base_url() ?>" class="brand-link float-left">
                                <span class="brand-text font-weight-light h1">
                                    <b>SIAKAD</b> Campus
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <h5>
                    <b><?php echo $title ?></b>
                </h5>
            </div>



            <div class="card-body">
                <?php echo form_open('auth/savereg'); ?>
                <!-- <form id="regForm" action="/auth/regprocess" method="post"> -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Fullname</span>
                    </div>
                    <input name="first_na" type="text" class="form-control" placeholder="First Name" value="<?php echo $first_na = session()->getFlashdata('firstna'); ?>">
                    <input name="last_na" type="text" class="form-control col-sm-5" placeholder="Last Name" value="<?php echo $last_na = session()->getFlashdata('lastna');  ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text fas fa-user fa-sm"></span>
                    </div>
                    <input name="username" type="text" class="form-control col-sm-7" placeholder="Username" value="<?php echo $username = session()->getFlashdata('usern'); ?>">
                    <select name="level" class="form-control col-sm-5" value="<?php echo $level = session()->getFlashdata('lvl'); ?>" placeholder="Select Role">
                        <option value="" selected disabled>Select Role</option>
                        <option value="2" disabled>Moderator</option>
                        <option value="3" disabled>Teacher</option>
                        <option value="4">Student</option>
                        <option value="5">Guest</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text fas fa-phone fa-sm"></span>
                    </div>
                    <input name="phone" type="text" class="form-control col-sm-4" placeholder="Phone Number" value="<?php echo $phone = session()->getFlashdata('phone_num'); ?>">
                    <div class="input-group-prepend">
                        <span class="input-group-text fas fa-envelope fa-sm"></span>
                    </div>
                    <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $email = session()->getFlashdata('mail'); ?>">
                </div>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text fas fa-lock fa-sm"></span>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Password" value="<?php echo $password = session()->getFlashdata('pass'); ?>">
                    <input name="repassword" type="password" class="form-control" placeholder="Retype password" value="<?php echo $repassword = session()->getFlashdata('repass'); ?>">
                </div>


                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-4 ">
                        <button id="RegisterBtn" type="submit" class="btn btn-primary btn-block" onclick="">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- </form> -->
                <?php echo form_close(); ?>


                <br>
                <hr>
                <div class="login-box-footer-msg d-flex justify-content-center">
                    <a href="<?= 'signin' ?>" class="text-center">Already have an account? (Signin)</a>
                </div>
            </div>


            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/adminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/adminLTE/dist/js/adminlte.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>/adminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url() ?>/adminLTE/plugins/toastr/toastr.min.js"></script>



    <!-- Error Toast -->
    <?php
    $error = session()->getFlashdata('error');
    if (!empty($error)) { ?>
        <ul>
            <div id="toast-container" class="toast-top-right">
                <?php ?>
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "3000",
                        "timeOut": "3000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.error("<b><?= esc($error); ?></b>");
                </script>

                <?php ?>
            </div>
        </ul>
    <?php } ?>

    <!-- Errors Toast -->
    <?php
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
        <ul>
            <div id="toast-container" class="toast-top-right">
                <?php foreach ($errors as $error) : ?>
                    <script>
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "showDuration": "300",
                            "hideDuration": "3000",
                            "timeOut": "3000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr.error("<b><?= esc($error); ?></b>");
                    </script>

                <?php endforeach; ?>
            </div>
        </ul>
    <?php } ?>

    <!-- Success Toast -->
    <?php
    $message = session()->getFlashdata('message');
    if (!empty($message)) { ?>
        <ul>
            <div id="toast-container" class="toast-top-right">
                <?php ?>
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "3000",
                        "timeOut": "3000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.success("<b><?= ($message); ?></b>");
                </script>
                <?php ?>
            </div>
        </ul>
    <?php } ?>

    <!-- Info Toast -->
    <?php
    $info = session()->getFlashdata('info');
    if (!empty($info)) { ?>
        <ul>
            <div id="toast-container" class="toast-top-right">
                <?php ?>
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "3000",
                        "timeOut": "3000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.success("<b><?= ($info); ?></b>");
                </script>
                <?php ?>
            </div>
        </ul>
    <?php } ?>

    <!-- Warning Toast -->
    <?php
    $warning = session()->getFlashdata('warning');
    if (!empty($warning)) { ?>
        <ul>
            <div id="toast-container" class="toast-top-right">
                <?php ?>
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "3000",
                        "timeOut": "3000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.success("<b><?= ($warning); ?></b>");
                </script>
                <?php ?>
            </div>
        </ul>
    <?php } ?>


    <!-- Dark/Light Slider -->
    <script>
        var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        var currentTheme = localStorage.getItem('theme');
        var inputFields = document.querySelector('input');

        if (currentTheme) {
            if (currentTheme === 'dark') {
                if (!document.body.classList.contains('dark-mode')) {
                    document.body.classList.add("dark-mode");
                }
                if (inputFields.classList.contains('navbar-light')) {
                    inputFields.classList.add('navbar-dark');
                    inputFields.classList.remove('navbar-light');
                }

            } else {
                localStorage.setItem('theme', 'light');
            }

        }
    </script>



</body>

</html>