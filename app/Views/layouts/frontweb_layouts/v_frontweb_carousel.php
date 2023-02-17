    <div class="card">
        <div class="card-body">
            <div id="carouselid" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselid" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselid" data-slide-to="1"></li>
                    <li data-target="#carouselid" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="d-block w-100 h-5 unselectable" src="<?= base_url('public/carousel/1.png') ?>" draggable="false" (dragstart)="false;" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 unselectable" src="<?= base_url('public/carousel/2.png') ?>" draggable="false" (dragstart)="false;" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="card-text m-0">
                                <div class="bg-dark text-white">
                                    <h5 class="mb-0"><u>AAAAAAAAAAAAAAAAAAAAAAAAAAA</u></h5>
                                </div>
                                <b>
                                    <p class="text-md-center mt-0 mb-0 bg-dark text-white">BBBBBBBBBBBBBB</p>
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 unselectable" src="<?= base_url('public/carousel/3.png') ?>" draggable="false" (dragstart)="false;" alt="Third slide">
                    </div>
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