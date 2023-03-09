   <!-- Main content -->
   <section class="content">
       <div class="container-fluid">
           <div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header">
                           <!-- <div class="col-sm-2 btn-group flex-wrap pl-0 justify-content-center align-content-sm-center w-fit-contents">
                               <button type="button" class="btn btn-block btn-secondary btn-xs rounded-lg ">
                                   Add Student
                               </button>
                           </div> -->

                           <button type="button" class="btn btn-primary btn-flat rounded" data-toggle="modal" data-target="#modal-add-std-data">
                               <i class="fad fa-plus-circle nav-icon"></i>
                               Add Student
                           </button>


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
                                           <td class="text-center py-0 align-middle">
                                               <div class="btn-group btn-group-sm p-2">
                                                   <a href="students-data/details-<?= $std_data['nim']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                   <a href="students-data/edit-<?= $std_data['nim']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                   <a href="students-data/delete-<?= $std_data['nim']; ?>" class="btn btn-danger" onClick="return confirm('Delete Data <?= $std_data['first_na']; ?> <?= $std_data['last_na']; ?> (<?= $std_data['nim']; ?>)?')"><i class="fas fa-trash"></i></a>
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

                           <!-- <br> -->
                           <!-- <hr> -->

                       </div>
                       <!-- /.card-body -->
                   </div>
                   <!-- /.card -->
               </div>
               <!-- /.col -->
           </div>


           <!-- Modal add student -->
           <div class="modal fade" id="modal-add-std-data">
               <div class="modal-dialog">
                   <div class="modal-content bg-secondary">
                       <div class="modal-header pt-2 pb-2">
                           <h4 class="modal-title">Add Student Data</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <?php echo form_open('admin/students-data/add'); ?>
                           <!-- <form id="regForm" action="<?= 'students-data/add' ?>" method="post"> -->
                           <!-- csrf_field(); ?> -->
                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <span class="input-group-text fas fa-user fa-sm"></span>
                               </div>
                               <input name="add_nim" type="text" class="form-control" placeholder="Nim">
                           </div>
                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <span class="input-group-text" id="">Fullname</span>
                               </div>
                               <input name="add_first_na" type="text" class="form-control" placeholder="First Name">
                               <input name="add_last_na" type="text" class="form-control col-sm-5" placeholder="Last Name">
                           </div>
                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <span class="input-group-text fas fa-map-marker-edit fa-lg"></span>
                               </div>
                               <input name="add_birth_loc" id="add_birth_loc" type="text" class="form-control col-sm" placeholder="Birth Location">
                           </div>
                           <div class="form-group">
                               <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text fad fa-birthday-cake fa-sm"></span>
                                   </div>
                                   <input name="add_birth_date" type="text" class="form-control">
                                   <select name="add_gender" class="form-control col-sm-5">
                                       <option selected disabled>Select Gender</option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                   </select>
                               </div>
                           </div>

                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <span class="input-group-text fas fa-map-marker-edit fa-lg"></span>
                               </div>
                               <input name="add_std_addr" type="text" class="form-control col-sm" placeholder="Student Residence Address">

                           </div>

                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <span class="input-group-text fas fa-phone fa-sm"></span>
                               </div>
                               <input name="add_std_phone" type="text" class="form-control col-sm-4" placeholder="Phone Number">
                               <div class="input-group-prepend">
                                   <span class="input-group-text fas fa-envelope fa-sm"></span>
                               </div>
                               <input name="add_std_email" type="email" class="form-control" placeholder="Email">
                           </div>

                           <div class="row">
                               <div class="col-8">

                               </div>
                               <!-- <div class="col-4 ">
                                   <button id="RegisterBtn" type="submit" class="btn btn-primary btn-block" onclick="">Register</button>
                               </div> -->
                               <!-- /.col -->
                           </div>




                       </div>
                       <div class="modal-footer justify-content-between">
                           <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                           <button id="AddStudentBtn" type="submit" class="btn btn-outline-light">Save changes</button>
                       </div>
                       <!-- </form> -->
                       <?php echo form_close(); ?>
                   </div>
                   <!-- /.modal-content -->
               </div>
               <!-- /.modal-dialog -->
           </div>
           <!-- /.modal -->



       </div>
       <!-- /.row -->
       </div>
       <!-- /.container-fluid -->
   </section>
   <!-- /.content -->