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
                                $user_img = !empty(session()->get('photo')) ? session()->get('photo') : 'default.png';
                                ?>
                                <img src="<?php echo base_url() . '/photo/' . $user_img ?>" class="profile-user-img img-fluid img-circle" alt="Profile Picture">
                            </div>

                            <h3 class="profile-username text-center"><?= session()->get('first_na'); ?> <?= session()->get('last_na'); ?></h3>

                            <p class="text-muted text-center">
                                (<?php if (session()->get('level') == 1) {
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
                                    ?>)
                            </p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <!-- <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">AAA</a>
                                </li>
                               -->
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
                                    <a href="<?= base_url('home/'); ?>" class="btn nav-icon fas fa-angle-left fa-lg btn-primary btn-flat rounded ml-1 mr-1"></a>
                                </li>
                                <li class="nav-item"><a class="nav-link active" href="#dataaccount" data-toggle="tab">Data Account</a></li>
                                <li class="nav-item"><a class="nav-link" href="#biodata" data-toggle="tab">BioData</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="dataaccount">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="dataTables_scroll">
                                            <table id="data_table" class="table table-striped">
                                                <!-- php echo form_open('auth/editreg'); ?> -->

                                                <tr>
                                                    <td style="width: 150px;">First Name</td>
                                                    <td style="width: 30px;"> : </td>
                                                    <td>
                                                        <input name="first_na" class="no-border" value="<?= session()->get('first_na'); ?>"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px;">Last Name</td>
                                                    <td style="width: 30px;"> : </td>
                                                    <td>
                                                        <input name="last_na" class="no-border" value="<?= session()->get('last_na'); ?>"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td> : </td>
                                                    <td>
                                                        <input name="username" class="no-border" value="<?= session()->get('username'); ?>"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Level Account</td>
                                                    <td> : </td>
                                                    <td>
                                                        <?php
                                                        $usrLevel = "";
                                                        if (session()->get('level') == 1) {
                                                            $usrLevel = 'admin';
                                                        } else if (session()->get('level') == 2) {
                                                            $usrLevel = 'moderator';
                                                        } else if (session()->get('level') == 3) {
                                                            $usrLevel = 'teacher';
                                                        } else if (session()->get('level') == 4) {
                                                            $usrLevel = 'student';
                                                        } else if (session()->get('level') == 5) {
                                                            $usrLevel = 'guest';
                                                        }
                                                        ?>

                                                        <input name="level" class="no-border" value="<?= $usrLevel; ?>" disabled></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td> : </td>
                                                    <td>
                                                        <input name="phone" class="no-border" value="<?= session()->get('phone'); ?>"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td> : </td>
                                                    <td>
                                                        <input name="email" class="no-border" value="<?= session()->get('email'); ?>"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td> : </td>
                                                    <td>
                                                        <input name="password" class="no-border" value="<?= session()->get('password'); ?>"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>IP</td>
                                                    <td> : </td>
                                                    <td>
                                                        <input class="no-border" value="<?= session()->get('user_ip'); ?>" disabled></input>
                                                    </td>

                                                </tr>

                                                <!-- php echo form_close(); ?> -->
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->


                                <div class="tab-pane" id="biodata">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">

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
                                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
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