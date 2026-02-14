<?php
require_once(__DIR__.'/../common/includes.php'); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <title>Photo Gallery - GateMan India</title>
        <?php $inc->stylesheet(); ?>
        <?php $inc->javascript(); ?>
        <script type="text/javascript" src="<?php echo $inc->base_url('/assets/js/masonry.pkgd.min.js'); ?>"></script>
    </head>
    <body>
        <header>
        <?php $inc->topheader(['first' => 'about']); ?>
    </header>
    <main>
        <div class="container py-5">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Photo Gallery</h1>
            <?php 
            $photos = range(1, 8);
            shuffle($photos);
            ?>
            <div class="row" data-masonry='{"percentPosition": true }'>
                <?php
                for($i = 1; $i <= count($photos); $i++) { ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-4">
                        <img src="<?php echo $inc->base_url('/assets/images/photo-gallery/'.($photos[$i-1]).'.jpg'); ?>" class="card-img" alt="Gallery Image <?php echo ($i - 1); ?>" />
                        <div class="card-img-overlay">
                            <button type="button" class="btn btn-success btn-lg btn-zoom opacity-75 position-absolute top-50 start-50 translate-middle fw-bold" data-id="<?php echo $i; ?>" data-bs-toggle="modal" data-bs-target="#PhotoGalleryModal">
                                <i class="fa-solid fa-expand"></i>
                            </button>
                        </div>
                        <!-- <div class="card-body">
                            <h5 class="card-title mb-0">Gallery Image <?php echo ($photos[$i-1]); ?></h5>
                        </div> -->
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="PhotoGalleryModal" aria-hidden="true" id="PhotoGalleryModal">
                <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable bg-transparent">
                    <div class="modal-content bg-transparent border-0">
                        <div class="modal-header text-bg-success border-bottom-0 py-2">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Photo Gallery</h1>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-transparent p-0 border-0">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner bg-transparent">
                                    <?php
                                    for($i = 1; $i <= count($photos); $i++) {
                                    ?>
                                    <div class="carousel-item <?php echo $i == 1 ? 'active' : ''; ?>">
                                        <img src="<?php echo $inc->base_url('/assets/images/photo-gallery/'.($photos[$i-1]).'.jpg'); ?>" class="d-block w-100" alt="Gallery Image <?php echo $i; ?>" />
                                    </div>
                                    <?php } ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php $inc->footer(); ?>
    <script type="text/javascript" async>
        var carouselElement = document.getElementById('carouselExample');
        const carousel = new bootstrap.Carousel(carouselElement, {
            interval: false,
            wrap: true,
            touch: false
        });
        document.querySelectorAll('.btn-zoom').forEach(button => {
            button.addEventListener('click', function() {
                if (!carousel) {
                    carousel = new bootstrap.Carousel(carouselElement, {
                        interval: false,
                        wrap: true,
                        touch: false
                    });
                }
                carousel.to(this.dataset.id - 1);
            });
        });
    </script>
</body>
</html>