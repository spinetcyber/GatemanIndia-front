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
        <?php $inc->topheader(['first' => 'services']); ?>
    </header>
    <main>
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Our Services</h1>
            <div class="row g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <p class="fs-4">GateMan India provides a wide range of automated gate systems and security solutions tailored to meet the needs of residential and commercial clients across India.</p>
                    <p class="fs-4">Our services include the design, manufacturing, installation, and maintenance of high-quality swing gates, sliding gates, and boom barriers. We also offer customized solutions to enhance security and convenience for our customers.</p>
                    <p class="fs-4">Our team of experienced professionals works closely with clients to understand their specific requirements and provide personalized solutions that ensure the safety and security of their properties. We are committed to delivering exceptional service and support throughout the entire process, from consultation to after-sales service.</p>
                    <p class="fs-4">Whether you need an automated gate system for your home, office, or industrial facility, GateMan India has the expertise and resources to provide you with the best solutions that meet your needs and budget. Contact us today to learn more about our services and how we can help you secure your property with our state-of-the-art gate automation systems.</p>
                    
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <img src="https://www.ttgateautomation.com/wp-content/uploads/2018/11/Automated_metal_sliding_cantilever_gate.jpg" class="img-fluid img-thumbnail shadow-lg rounded-4" alt="About Us Image" />
                    <p class="fs-4">Our services include:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Design and consultation: We work closely with our clients to understand their specific requirements and provide personalized solutions that meet their needs and budget.</li>
                        <li class="list-group-item">Manufacturing: We use high-quality materials and advanced technology to manufacture durable and reliable gate systems that ensure the safety and security of our clients' properties.</li>
                        <li class="list-group-item">Installation: Our team of experienced professionals ensures that the installation process is smooth and efficient, minimizing disruption to our clients' daily activities.</li>
                        <li class="list-group-item">Maintenance and support: We offer comprehensive maintenance and support services to ensure that our clients' gate systems continue to operate smoothly and efficiently, providing long-term security and convenience.</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php $inc->footer(); ?>    
</body>
</html>