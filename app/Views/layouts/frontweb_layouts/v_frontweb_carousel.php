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
                    <?php foreach ($carousel_data as $index => $image) : ?>
                        <div class="carousel-item<?= !$index ? ' active' : '' ?>">
                            <img class="d-block w-100 h-5 unselectable" src="<?= $image['carousel_url'] ?>" alt="<?= $image['carousel_alt'] ?>" />
                            <div class="carousel-caption d-none d-md-block">
                                <div class="card-text m-0">
                                    <div class="bg-dark text-white">
                                        <h5 class="mb-0"><u><?= $image['carousel_title'] ?></u></h5>
                                    </div>
                                    <b>
                                        <p class="text-md-center mt-0 mb-0 bg-dark text-white"><?= $image['carousel_desc'] ?></p>
                                    </b>
                                </div>
                            </div>
                        </div>
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
    </div>