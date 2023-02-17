   <!-- Main content -->
   <section class="content">
       <div class="container-fluid">
           <div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header">
                           <div class="col-sm-2 btn-group flex-wrap pl-0 justify-content-center align-content-sm-center w-fit-contents">
                               <button type="button" class="btn btn-block btn-secondary btn-xs rounded-lg ">
                                   Add Guest
                               </button>

                           </div>

                       </div>
                       <!-- /.card-header -->
                       <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped table-sm text-sm w-100" cellspacing="0">
                               <thead>
                                   <tr>
                                       <th class="text-sm-center">Actions</th>
                                       <th class="text-sm-center">#</th>
                                       <th class="align-middle text-sm">Nim</th>
                                       <th class="align-middle text-sm">Fullname</th>
                                       <th class="align-middle text-sm">Gender</th>
                                       <th class="align-middle text-sm">Place & DoB</th>
                                       <th class="align-middle text-sm">Address</th>
                                       <th class="align-middle text-sm">Email</th>
                                       <th class="align-middle text-sm">Phone</th>
                                       <th class="align-middle text-sm">Dad Name</th>
                                       <th class="align-middle text-sm">Dad Address</th>
                                       <th class="align-middle text-sm">Dad Phone</th>
                                       <th class="align-middle text-sm">Mom Name</th>
                                       <th class="align-middle text-sm">Mom Address</th>
                                       <th class="align-middle text-sm min-w-100">Mom Phone</th>

                                   </tr>
                               </thead>
                               <tbody>
                                   <?php $i = 1; ?>
                                   <?php foreach ($student_data as $std_data) : ?>
                                       <tr class="justify-contents-center align-items-sm-center">
                                           <td class="align-middle text-center">
                                               <div class="row">
                                                   <a class="nav-link" href="<?= base_url('details') ?>">
                                                       <i class="nav-icon fas fa-eye"></i>
                                                   </a>
                                                   <a class="nav-link" href="<?= base_url('edits') ?>">
                                                       <i class="nav-icon fas fa-edit"></i>
                                                   </a>
                                                   <a class="nav-link" href="<?= base_url('delete') ?>">
                                                       <i class="nav-icon fas fa-trash"></i>
                                                   </a>
                                               </div>
                                           </td>
                                           <td class="align-middle text-center"><?= $i++; ?></td>
                                           <td class="align-middle"><?= $std_data['nim']; ?></td>
                                           <td class="align-middle"><?= $std_data['first_na']; ?> <?= $std_data['last_na']; ?></td>
                                           <td class="align-middle"><?= $std_data['gender']; ?></td>
                                           <td class="align-middle"><?= $std_data['birth_loc']; ?>, <?= $std_data['birth_date']; ?></td>
                                           <td class="align-middle"><?= $std_data['std_addr']; ?></td>
                                           <td class="align-middle"><?= $std_data['std_email']; ?></td>
                                           <td class="align-middle"><?= $std_data['std_phone']; ?></td>
                                           <td class="align-middle"><?= $std_data['dad_na']; ?></td>
                                           <td class="align-middle"><?= $std_data['std_addr']; ?></td>
                                           <td class="align-middle"><?= $std_data['std_phone']; ?></td>
                                           <td class="align-middle"><?= $std_data['mom_na']; ?></td>
                                           <td class="align-middle"><?= $std_data['mom_addr']; ?></td>
                                           <td class="align-middle"><?= $std_data['mom_phone']; ?></td>

                                       </tr>
                                   <?php endforeach; ?>
                               </tbody>
                           </table>




                           <hr>

                       </div>
                       <!-- /.card-body -->
                   </div>
                   <!-- /.card -->
               </div>
               <!-- /.col -->
           </div>




       </div>
       <!-- /.row -->
       </div>
       <!-- /.container-fluid -->
   </section>
   <!-- /.content -->