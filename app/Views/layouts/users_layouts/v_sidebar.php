 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?= base_url() ?>" class="brand-link">
         <img src="<?= base_url() ?>/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light"><b>SIAKAD</b> Campus</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="pull-left image">
                 <?php
                    $user_img = !empty(session()->get('photo')) ? session()->get('photo') : 'default.png';
                    ?>
                 <a href="<?= base_url('myprofile') ?>">
                     <img src="<?php echo base_url() . '/photo/' . $user_img ?>" class="img-circle elevation-2" alt="Profile Picture">
                 </a>

             </div>

             <div class="info">

                 <div class="fullname overflow-scroll mb-0">
                     <a href="<?= base_url('myprofile') ?>">
                         <?= session()->get('first_na'); ?> <?= session()->get('last_na'); ?>
                     </a>
                 </div>


                 <a class="d-block">
                     <div class="text-muted text-sm mt-0" style="align-items: center; font-size: 13px;">
                         <i class="fa fa-circle fa-xs text-success"></i>
                         <?php if (session()->get('level') == 1) {
                                echo 'Admin';
                            } else if (session()->get('level') == 2) {
                                echo 'Moderator';
                            } else if (session()->get('level') == 3) {
                                echo 'Teacher';
                            } else if (session()->get('level') == 4) {
                                echo 'Student';
                            } else if (session()->get('level') == 5) {
                                echo 'Guest';
                            }
                            ?>
                     </div>
                 </a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <div class="addtionalsb sidebar-collapse collapse" id="sidebarCollapse">
                     <ul class="nav nav-pills nav-sidebar flex-column">
                     </ul>
                 </div>
                 <!-- ### Addtional Sidebars -->




                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url('adminLTE/index1.html') ?>" class="nav-link" target="_blank">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v1</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url('adminLTE/index2.html') ?>" class="nav-link active" target="_blank">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v2</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url('adminLTE/index3.html') ?>" class="nav-link" target="_blank">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v3</p>
                             </a>
                         </li>
                     </ul>
                 </li>



                 <!-- Admin Menu -->
                 <?php if (session()->get('level') == 1) { ?>
                     <li class="nav-header">ADMIN</li>
                     <li class="nav-item">
                         <a href="<?= base_url('/admin/m1') ?>" class="nav-link">
                             <i class="nav-icon fas fa-th"></i>
                             <p>
                                 Admin 1
                                 <span class="right badge badge-danger">New</span>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="<?= base_url('/admin/study-department-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Study Departments Data</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="<?= base_url('/admin/study-subjects-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Study Subjects Data</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item dmasternav">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fad fa-database"></i>
                             <p class="nav-body">
                                 Data Master
                                 <i class="fas fa-angle-left right"></i>
                                 <span class="badge badge-info right ctrdm">0</span>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item dmi">
                                 <a href="<?= base_url('/admin/moderators-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Moderators Data</p>
                                 </a>
                             </li>
                             <li class="nav-item dmi">
                                 <a href="<?= base_url('/admin/teachers-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Teachers Data</p>
                                 </a>
                             </li>
                             <li class="nav-item dmi">
                                 <a href="<?= base_url('/admin/students-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Students Data</p>
                                 </a>
                             </li>
                             <li class="nav-item dmi">
                                 <a href="<?= base_url('/admin/guests-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Guests Data</p>
                                 </a>
                             </li>

                         </ul>
                     </li>
                 <?php } ?>



                 <!-- Moderator Menu -->
                 <?php if (session()->get('level') == 1 || session()->get('level') == 2) { ?>
                     <li class="nav-header">MODERATOR</li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fad fa-database"></i>
                             <p>
                                 Data Master
                                 <i class="fas fa-angle-left right"></i>
                                 <span class="badge badge-info right">3</span>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="<?= base_url('/moderator/teachers-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Teachers Data</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="<?= base_url('/moderator/students-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Students Data</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="<?= base_url('/moderator/students-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Guests Data</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 <?php } ?>


                 <!-- Teacher Menu -->
                 <?php if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3) { ?>
                     <li class="nav-header">TEACHER</li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fad fa-database"></i>
                             <p>
                                 Data Master
                                 <i class="fas fa-angle-left right"></i>
                                 <span class="badge badge-info right">2</span>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="<?= base_url('/teacher/students-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Students Data</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="<?= base_url('/teacher/guests-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Guests Data</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 <?php } ?>


                 <!-- Student Menu -->
                 <?php if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3 || session()->get('level') == 4) { ?>
                     <li class="nav-header">STUDENT</li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fad fa-book"></i>
                             <p>
                                 Data Master
                                 <i class="fas fa-angle-left right"></i>
                                 <span class="badge badge-info right">2</span>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="<?= base_url('/student/view/students-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>See Students Data</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="<?= base_url('/student/view/guests-data') ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>See Guests Data</p>
                                 </a>
                             </li>

                         </ul>
                     </li>
                 <?php } ?>


                 <!-- Guest Menu -->
                 <?php if (session()->get('level') == 1 || session()->get('level') == 5) { ?>
                     <li class="nav-header">GUEST</li>
                     <li class="nav-item">
                         <a href="<?= base_url('/guest/view/teachers-data') ?>" class="nav-link">
                             <i class="fas fa-circle nav-icon"></i>
                             <p>See Teachers Data</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?= base_url('/guest/view/students-data') ?>" class="nav-link">
                             <i class="fas fa-circle nav-icon"></i>
                             <p>See Students Data</p>
                         </a>
                     </li>

                 <?php } ?>

                 <div class="addtional-nav">
                     <li class="nav-header">
                         <hr class="bg-gray mt-0 mb-0">
                     </li>
                     <li class="nav-item">
                         <a href="<?= base_url('help') ?>" class="nav-link">
                             <i class="nav-icon fad fa-question-circle"></i>
                             <p>
                                 Help
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="<?= base_url('help/supports') ?>" class="nav-link">
                                     <i class="fad fa-user-headset nav-icon"></i>
                                     <p>Supports</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="<?= base_url('help/contacts') ?>" class="nav-link">
                                     <i class="fad fa-address-book nav-icon"></i>
                                     <p>
                                         Contacts
                                         <i class="right fas fa-angle-left"></i>
                                     </p>
                                 </a>
                                 <ul class="nav nav-treeview">
                                     <li class="nav-item">
                                         <a href="<?= base_url('help/contacts/email-us') ?>" class="nav-link">
                                             <i class="fad fa-envelope nav-icon"></i>
                                             <p>Emails</p>
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="<?= base_url('help/contacts/call-us') ?>" class="nav-link">
                                             <i class="fad fa-phone-office nav-icon"></i>
                                             <p>Phone Numbers</p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>

                             <li class="nav-item">
                                 <a href="<?= base_url('help/about-us') ?>" class="nav-link">
                                     <i class="fad fa-building nav-icon"></i>
                                     <p>Abouts</p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                 </div>


                 <br><br><br>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>