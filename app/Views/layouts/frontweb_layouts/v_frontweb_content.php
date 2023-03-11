<div class="row">
    <div class="container">
        <?php if ($title == "Front Page" || $title == "News") { ?>
            <?= view('layouts/frontweb_layouts/v_frontweb_carousel'); ?>
        <?php } ?>
    </div>


    <div class="col-lg-8 min-h-50vh">
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
    <div class="col-sm-4 min-h-25vh">
        <div class="card">
            <div class="card-header" data-card-widget="collapse">
                <h5 class="card-title cd-card-title m-0"><i class="fas fa-clock fas-beat-fade mr-2"></i>Countdown <strong>Campus</strong></h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body text-primary justify-content-center align-items-center m-auto">
                <?= view('layouts/plugins/v_countdown_v2') ?>


                <div class="text-center justify-content-center align-items-center">
                    <h6 class="bg-light p-2 border-top border-bottom mt-3 mb-2">Cd title</h6>
                    <a href="">This is countdown descriptions</a>
                </div>
                
            </div>
        </div>

        <!-- ARTICLE LIST -->
        <div class="card">
            <div class="card-header" data-card-widget="collapse">
                <h3 class="card-title">Recently Added Articles</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 no-wrap" style="height: 35vh; overflow-y: auto">
                <ul class="products-list product-list-in-card pl-2 pr-2 list-group-small">
                    <li class="item">
                        <div class="product-img">
                            <img src="adminLTE/dist/img/default-150x150.png" alt="Article Img" class="img-size-50">
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
                            <img src="adminLTE/dist/img/default-150x150.png" alt="Article Img" class="img-size-50">
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
                    <li class="item">
                        <div class="product-img">
                            <img src="adminLTE/dist/img/default-150x150.png" alt="Article Img" class="img-size-50">
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
                    <div class="collapse products-list product-list-in-card" id="moreArticles">
                        <h6 class="bg-light p-2 border-top border-bottom mb-0">More articles</h6>
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
                                <img src="adminLTE/dist/img/default-150x150.png" alt="Article Img" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 99
                                    <span class="badge badge-success float-right">$399</span></a>
                                <span class="product-description">
                                    PlayStation 9 500GB Console (PS4)
                                </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="adminLTE/dist/img/default-150x150.png" alt="Article Img" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 40
                                    <span class="badge badge-success float-right">$399</span></a>
                                <span class="product-description">
                                    PlayStation 40 500GB Console (PS4)
                                </span>
                            </div>
                        </li>
                        <!-- /.item -->


                        <!-- <span id="dots">...</span><span id="more"> -->
                        <!-- </span> -->
                    </div>



                    <!-- More -->
                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase" data-toggle="collapse" data-target="#moreArticles" aria-expanded="false" aria-controls="moreArticles">View More</a>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->


        <div class="card card-primary card-outline collapsed-card">
            <div class="card-header" data-card-widget="collapse">
                <h5 class="card-title m-0"><i class="fas fa-map-marker-alt mr-2" data-toggle="modal" data-target="#modal-add-std-data"></i>Campus Location</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-add-std-data">
                        <i class="fad fa-globe-asia"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body card-body-cascade text-center p-1">
                <!--Google map-->
                <div id="map-container-google-7" class="z-depth-1-half map-container-5">
                    <iframe class="w-100 min-vh-25" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3880557741604!2d106.67352851413878!3d-6.343763863830325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5ab3d01e03b%3A0xb98f4c27e24202ec!2sInstitut%20Teknologi%20Indonesia%20(ITI)!5e0!3m2!1sen!2sid!4v1678435459490!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <script>

            </script>
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
                    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3880557741604!2d106.67352851413878!3d-6.343763863830325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5ab3d01e03b%3A0xb98f4c27e24202ec!2sInstitut%20Teknologi%20Indonesia%20(ITI)!5e0!3m2!1sen!2sid!4v1678435459490!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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