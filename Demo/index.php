<?php
require_once(__DIR__.'/common/includes.php'); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <title>GateMan India - Welcome to the automatic gate system world</title>
        <?php $inc->stylesheet(); ?>
        <?php $inc->javascript(); ?>
    </head>
    <body>
        <header>
        <?php $inc->topheader(['first' => 'home']); ?>
    </header>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="min-height: 250px; width: 100%;">
            <div class="carousel-indicators"> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/homeslider/1.jpg" class="d-block w-100" alt="..." style="min-height: 250px; object-fit: cover;" />
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/homeslider/2.jpg" class="d-block w-100" alt="..." style="min-height: 250px; object-fit: cover;" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/homeslider/3.jpg" class="d-block w-100" alt="..." style="min-height: 250px; object-fit: cover;" />
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div> <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
        </div>
        <section class="bg-body-tertiary">
            <div class="container py-5">
                <h1 class="text-center display-3 mb-5">Our Products</h1>
                <div class="row text-center">
                    <div class="col-xxl-3 col-md-6 mb-3">
                        <img src="https://static.vecteezy.com/system/resources/previews/049/063/352/non_2x/simple-icon-of-a-double-swing-gate-providing-security-vector.jpg" alt="" class="img-fluid img-thumbnail bd-placeholder-img rounded-4" />
                        <title>Placeholder</title>
                        <h2 class="fw-normal">Swing Gates</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                        <p><a class="text-decoration-none" href="#">View details &raquo;</a></p>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-3">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/049/063/398/small/automatic-sliding-gate-system-controlling-access-to-private-property-vector.jpg" alt="" class="img-fluid img-thumbnail bd-placeholder-img rounded-4" />
                        <h2 class="fw-normal">Sliding Gates</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel. This is the second column.</p>
                        <p><a class="text-decoration-none" href="#">View details &raquo;</a></p>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-3">
                        <img src="https://static.vecteezy.com/system/resources/previews/021/568/162/non_2x/automatic-gate-icon-on-white-vector.jpg" alt="" class="img-fluid img-thumbnail bd-placeholder-img rounded-4" />
                        <h2 class="fw-normal">Automatic Gates</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel. This is the third column.</p>
                        <p><a class="text-decoration-none" href="#">View details &raquo;</a></p>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-3">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/052/623/120/small/automatic-barrier-gate-closing-access-point-vector.jpg" alt="" class="img-fluid img-thumbnail bd-placeholder-img rounded-4" />
                        <h2 class="fw-normal">Boom Barrier</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel. This is the fourth column.</p>
                        <p><a class="text-decoration-none" href="#">View details &raquo;</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">What is <span class="text-body-secondary">Swing Gates?</span></h2>
                        <p class="lead">Swing gates are traditional, hinged barriers that open inward or outward like a door, offering a secure and elegant entrance for residential, commercial, and industrial properties.</p>
                        <p class="lead">Available as single or double-leaf, they can be manual or automated, with common materials including steel, wood, and aluminum. These gates require clear arc space to operate and typically last 10-30 years with proper maintenance.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="https://www.newgate.uk.com/wp-content/uploads/2019/07/Manual-Swing-Gate-4.5m-2.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-4" />
                    </div>
                </div>
                <hr class="featurette-divider my-5">
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">What is <span class="text-body-secondary">Sliding Gates?</span></h2>
                        <p class="lead">Sliding gates are space-efficient, secure, and durable solutions for residential and commercial entrances, operating by moving horizontally along a track or via a cantilever system.</p>
                        <p class="lead">Ideal for limited-space, wide, or sloping driveways, they offer enhanced security and wind resistance. Automated models use rack-and-pinion technology, providing convenience, safety sensors, and non-reversible motors for secure, locked positioning. </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="https://www.newgate.uk.com/wp-content/uploads/2019/07/Automatic-Sliding-Gate-8m-5.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-4" />
                    </div>
                </div>
                <hr class="featurette-divider my-5">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">What is <span class="text-body-secondary">Boom Barriers?</span></h2>
                        <p class="lead">Boom barriers, also known as boom gates, are automated or manual gates with a long pivoting arm (the boom) that rises and lowers to control vehicle and sometimes pedestrian access through a checkpoint, entrance, or exit, commonly seen at parking lots, toll plazas, and secure facilities to manage traffic and enhance security by physically blocking unauthorized entry.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="https://qodenext.com/wp-content/uploads/2024/08/what-is-boom-barrier-system.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-4" />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $inc->footer(); ?>    
</body>
</html>