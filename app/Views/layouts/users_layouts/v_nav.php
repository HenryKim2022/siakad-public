  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
      <!-- <div class="container ml-0 mr-0 w-100"> -->
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button" data-enable-remember="true" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </a>
          </li>



          <!-- Left navbar links -->
          <ul class="navbar-nav d-flex">
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="<?= base_url('home') ?>" class="nav-link">
                      <i class="fad fa-home nav-icon"></i> Home
                  </a>
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                  <a href="<?= base_url('news') ?>" class="nav-link">
                      <i class="fad fa-newspaper nav-icon"></i> News
                  </a>
              </li>

              <li class="nav-item d-none d-sm-inline-block dropdown">
                  <a id="dropdownSubMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                      <i class="fad fa-question-circle nav-icon"></i> Help
                  </a>
                  <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                      <li><a href="<?= base_url('help/supports') ?>" class="dropdown-item"><i class="fad fa-user-headset nav-icon">
                              </i> Supports
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
                      <li><a href="<?= base_url('help/about-us') ?>" class="dropdown-item"><i class="fad fa-building nav-icon">
                              </i> About Us
                          </a>
                      </li>

                  </ul>

              </li>
          </ul>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" data-widget="signout" href="<?= base_url('auth/signout') ?>" role="button">
                  <i class="fad fa-power-off fa-lg"></i>
              </a>
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
                  <div class="dropdown-item" data-widget="theme-switch" role="button">
                      <div class="row-2" style="height: auto;">
                          <label class="float-left theme-switch ml-0 mr-2 ml-0 mb-0" for="checkbox">
                              <input type="checkbox" id="checkbox">
                              <span class="slider round"></span>
                          </label>
                          <span id="darklight-mode-lbl" class="text-muted text-sm">Light Mode</span>
                      </div>
                  </div>

              </div>
          </li>
      </ul>
      <!-- </div> -->
  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-6 align-self-center">
                      <h1 class="m-0"><b><?php echo $title ?></b></h1>
                  </div><!-- /.col -->
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

      <!-- Main content -->
      <section id="content" class="content">