    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <?php
                                $user_img = !empty($student_data['std_photo']) ? $student_data['std_photo'] : 'default.png';
                                ?>
                                <img src="<?php echo base_url() . '/photo/' . $user_img ?>" class="profile-user-img img-fluid img-circle" alt="Profile Picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $student_data['first_na'] ?>
                                <?= $student_data['last_na'] ?></h3>

                            <p class="text-muted text-center">
                                (<?= $student_data['nim'] ?>)
                            </p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <!-- <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">AAA</a>
                                </li> -->

                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item mr-2 align-self-center">
                                    <a href="<?= base_url('admin/students-data/'); ?>" class="btn nav-icon fas fa-angle-left fa-lg btn-primary btn-flat rounded ml-1 mr-1"></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#dataaccount" data-toggle="tab">Data
                                        Account</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">BioData</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body" style="overflow-x: scrool;">
                            <div class="tab-content">
                                <div class="tab-pane" id="dataaccount">
                                    <!-- Data Account -->
                                    <div class="post clearfix">
                                        <h1>BLA</h1>
                                    </div>
                                    <!-- /.Data Account -->
                                </div>

                                <!-- /.tab-pane -->
                                <div class="active tab-pane" id="biodata">
                                    <!-- The Bio Data -->
                                    <div class="post clearfix">
                                        <div class="dataTables_scroll">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td style="width: 150px;">Nim</td>
                                                    <td style="width: 30px;"> : </td>
                                                    <td><?= $student_data['nim']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Fullname</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['first_na']; ?>
                                                        <?= $student_data['last_na']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['gender']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Place & Date of Birth</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['birth_loc']; ?>,
                                                        <?= $student_data['birth_date']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Student Address</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['std_addr']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Student Email</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['std_email']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Student Phone</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['std_phone']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Dad Name</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['dad_na']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Dad Address</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['dad_addr']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Dad Phone</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['dad_phone']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mom Name</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['mom_na']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mom Address</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['mom_addr']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mom Phone</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['mom_phone']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Registered At</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['created_at']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Updated At</td>
                                                    <td> : </td>
                                                    <td><?= $student_data['updated_at']; ?></td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I agree to the <a href="#">terms and
                                                            conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->