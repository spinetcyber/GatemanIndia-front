<?php
require_once(__DIR__.'/common/includes.php'); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <title>About Us - GateMan India</title>
        <?php $inc->stylesheet(); ?>
        <?php $inc->javascript(); ?>
    </head>
    <body>
        <header>
        <?php $inc->topheader(['first' => 'about']); ?>
    </header>
    <main>
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">About Us</h1>
                    <p class="col-lg-10 fs-4">GateMan India is a leading provider of automated gate systems and security solutions in India. We specialize in designing, manufacturing, and installing high-quality swing gates, sliding gates, and boom barriers for residential and commercial properties.</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <img src="https://www.ttgateautomation.com/wp-content/uploads/2018/11/Automated_metal_sliding_cantilever_gate.jpg" class="img-fluid img-thumbnail shadow-lg rounded-4" alt="About Us Image" />
                </div>
            </div>
        </div>
    </main>
    <?php $inc->footer(); ?>    
</body>
</html>