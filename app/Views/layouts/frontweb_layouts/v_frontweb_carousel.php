    <div class="card">
        <div class="card-body">
            <div id="carouselid" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <?php {
                        $i = 0;
                        foreach ($carousel_data as $index => $image) :
                            echo "<li data-target='#carouselid' data-slide-to='$i' class='active'></li>";
                            $i++;
                        endforeach;
                    } ?>
                </ol>
                <div class="carousel-inner">

                    <!-- Carousel from DB -->
                    <?php $j = 0;
                    foreach ($carousel_data as $index => $image) : ?>
                        <!-- Animation Condif -->
                        <?php
                        if ($j == 0) {
                            $title_anim = " bounceInDown";
                            $h3_anim = " bounceInUp";
                            $btn_anim = " zoomInRight";
                        } else if ($j == 1) {
                            $title_anim = " bounceInLeft";
                            $h3_anim = " bounceInRight";
                            $btn_anim = " zoomInUp";
                        } else if ($j == 2) {
                            $title_anim = " zoomInLeft";
                            $h3_anim = " flipInX";
                            $btn_anim = " lightSpeedIn";
                        } else {
                            $j = 0;
                        } ?>
                        <!-- /.Animation Conif -->

                        <div class="carousel-item<?= !$index ? ' active' : '' ?>">
                            <img class="d-block w-100 h-5 unselectable" src="<?= $image['carousel_url'] ?>" alt="<?= $image['carousel_alt'] ?>" />
                            <div class="carousel-caption">
                                <div class="card-text m-0">
                                    <div class="bg-dark text-white">
                                        <h3 data-animation="animated<?= $title_anim ?>" class="mb-0"><u><?= $image['carousel_title'] ?></u></h3>
                                    </div>
                                    <b>
                                        <p data-animation="animated<?= $h3_anim ?>" class="text-md-center mt-0 mb-0 bg-dark text-white"><?= $image['carousel_desc'] ?></p>
                                    </b>
                                    <button class="btn btn-primary btn-lg" data-animation="animated<?= $btn_anim ?>">Button</button>
                                </div>
                            </div>
                        </div>
                        <?php $j++; ?>
                    <?php endforeach; ?>

                    <!-- /.Carousel from DB -->
                </div>

                <a class="carousel-control-prev" href="#carouselid" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselid" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--  -->
        <!--  -->




    </div>