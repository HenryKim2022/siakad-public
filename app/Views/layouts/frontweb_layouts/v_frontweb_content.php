<div class="row">
    <div class="container">
        <?php if ($title == "Front Page" || $title == "News") { ?>
            <?= view('layouts/frontweb_layouts/v_frontweb_carousel'); ?>
        <?php } ?>
    </div>


    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title: Main 1</h5>
                <p class="card-text">
                <div style="overflow-x: hidden;">
                    <?php if ($isi) {
                        echo view($isi);
                    }
                    ?>
                </div>
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">Card title: Main 2</h5>

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
    <div class="col-sm-4">
        <div class="card collapsed-card">
            <div class="card-header">
                <h5 class="card-title m-0">Countdown</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <!-- PRODUCT LIST -->
        <div class="card collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Recently Added News</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                    <li class="item">
                        <div class="product-img">
                            <img src="adminLTE/dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Samsung TV
                                <span class="badge badge-warning float-right">$1800</span></a>
                            <span class="product-description">
                                Samsung 32" 1080p 60Hz LED Smart HDTV.
                            </span>
                        </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <div class="product-img">
                            <img src="adminLTE/dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">PlayStation 4
                                <span class="badge badge-success float-right">$399</span></a>
                            <span class="product-description">
                                PlayStation 4 500GB Console (PS4)
                            </span>
                        </div>
                    </li>
                    <!-- /.item -->
                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All News</a>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->


        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title m-0"><i class="fas fa-map-marker-alt mr-2" data-toggle="modal" data-target="#modal-add-std-data"></i>Campus Location</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-add-std-data">
                        <i class="fad fa-globe-asia"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body card-body-cascade text-center p-1">
                <!--Google map-->
                <div id="map-container-google-7" class="z-depth-1-half map-container-5 w-100" style="height: 300px">
                    <iframe class="w-100 h-100" src="https://maps.google.com/maps?q=InstitutTeknologiIndonesia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0" allowfullscreen="true"></iframe>
                </div>
            </div>
        </div>

    </div>
    <!-- /.col-md-6 -->

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0">Featured y</h5>
            </div>
            <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title m-0">Featured z</h5>
            </div>
            <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
</div>


<!-- Modal add student -->
<div class="modal fade modal-xl" id="modal-add-std-dataxxx">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header pt-2 pb-2">
                <h4 class="modal-title">Add Student Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--Google map-->
                <div id="map-container-google-7" class="z-depth-1-half map-container-5" style="height: 65vh; width:auto;">
                    <iframe class="w-100 h-100" src="https://maps.google.com/maps?q=InstitutTeknologiIndonesia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0" allowfullscreen="true"></iframe>
                </div>

                <!--Google map-->
                <!-- <div id="map-container-google-13" class="z-depth-1-half map-container-7" style="height: 400px">
                    <iframe src="https://maps.google.com/maps?q=Intitut%20Teknologi%20Indonesia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div> -->

            </div>
            <!-- <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-info btn-md waves-effect waves-light">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
                <button type="button" class="btn btn-outline-info btn-md waves-effect waves-light" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>
            </div> -->
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button id="AddStudentBtn" type="submit" class="btn btn-outline-light" style="display: none">Save changes</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- Modal -->
<div class="modal fade" id="modal-add-std-data" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-map-marker-alt mr-2"></i>Campus Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--Google map-->
                <div id="map-container-google-7" class="z-depth-1-half map-container-5" style="height: 65vh; width:auto;">
                    <iframe class="w-100 h-100" src="https://maps.google.com/maps?q=InstitutTeknologiIndonesia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0" allowfullscreen="true"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>




</div>
<!-- /.container -->