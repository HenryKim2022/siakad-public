<!-- Primary Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light">
    <!-- <div class="container ml-40 mr-40"> -->
    <div class="container mr-50">
        <!-- Left navbar links -->
        <a class="navbar-brand" href="<?= session()->getFlashdata('static_url') ?>">
            <img src="<?= base_url('logo.png') ?>" alt="Siakad Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SIAKAD Campus</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars fa-sm"></span>
        </button>

        <div class="navbar-collapse order-3 collapse" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <!-- <div class="row"> -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link" aria-haspopup="true" aria-expanded="false">
                        <i class="fad fa-home nav-icon"></i> Home
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fad fa-question-circle nav-icon"></i> Help
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li>
                            <a href="<?= base_url('help/supports') ?>" class="dropdown-item">
                                <i class="fad fa-user-headset nav-icon"></i> Supports
                            </a>
                        </li>
                        <!-- Level two dropdown-->
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">
                                <i class="fad fa-address-book nav-icon"></i> Contacts
                            </a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li>
                                    <a tabindex="-1" href="<?= base_url('help/contacts/email-us') ?>" class="dropdown-item">
                                        <i class="fad fa-envelope nav-icon"></i> Emails
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-2" href="<?= base_url('help/contacts/call-us') ?>" class="dropdown-item">
                                        <i class="fad fa-phone-office nav-icon"></i> Phone Numbers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('help/about-us') ?>" class="dropdown-item">
                                <i class="fad fa-building nav-icon"></i> About Us
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Navbar Search -->
                <li class="nav-item">
                    <form class="form-inline">
                        <div class="input-group input-group-sm w-100">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" autocomplete="on">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>
                        </div>
                    </form>




                </li>

            </ul>

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-0 ml-md-3">
                <div class="input-group input-group-sm">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div> -->
            <!-- </form> -->

            <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                      <i class="fas fa-search"></i>
                  </button>
              </form> -->

            <!-- <form class="form-inline ml-0 ml-md-3">
                  <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                          </button>
                      </div>
                  </div>
              </form> -->
        </div>
        <!-- Left navbar Ends -->


        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block" style="display: none; backdrop-filter: blur(10px);">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" autocomplete="on">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>


            <!-- Page Settings Dropdown Menu -->
            <li class="nav-item dropdown justify-content-center align-items-center">
                <a class="nav-link pl-0" data-toggle="dropdown">
                    <i class="fad fa-cog fa-lg"></i>
                    <span class="badge badge-warning navbar-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right justify-content-center align-items-center align-self-sm-center flex-column">

                    <span class="dropdown-header pt-0 pb-0"><i class="fad fa-cog"></i> Page Settings</span>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-widget="fullscreen" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                        <span class="float-right text-muted text-sm">Screen Mode</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-item align-items-center justify-content-center" data-widget="theme-switch" role="button">
                        <div class="row-2" style="height: auto;">
                            <label class="float-left theme-switch ml-0 mr-2 ml-0 mb-0 align-self-sm-center" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <span id="darklight-mode-lbl" class="text-muted text-sm">Light Mode</span>
                        </div>
                    </div>

                </div>
            </li>


            <?php if (session()->get('log') == true) { ?>
                <li class="nav-item">
                    <a class="nav-link pl-0 pr-0" data-widget="signout" href="<?= base_url('auth/signout') ?>" role="button">
                        <i class="fas fa-sign-out-alt fa-lg"></i>
                    </a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link pl-0 pr-0" data-widget="signin" href="<?= base_url('auth/signin') ?>" role="button">
                        <i class="fas fa-sign-in-alt fa-lg"></i>
                    </a>
                </li>
            <?php } ?>




        </ul>

    </div>
</nav>




<!-- /.primary navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <h1 class="m-0"><b><?php echo $title ?></b></h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 align-self-top">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb float-sm-right light-mode breadcrumb-light">
                                <?php echo $breadcrumbs; ?>
                            </ol>
                        </nav>

                    </div>
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



    </div>

    <!-- Main content -->
    <section id="content" class="content">
        <div class="container">