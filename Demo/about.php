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
        <img src="./images/about-us.jpg" class="img-fluid w-100" alt="About Us Image" />
        <div class="container px-4 py-5">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">About Us</h1>
            <p class="lead fw-normal">Whether you need an automated gate system for your home, office, or industrial facility, GateMan India has the expertise and resources to provide you with the best solutions that meet your needs and budget. Contact us today to learn more about our products and services and how we can help you secure your property with our state-of-the-art gate automation systems.</p>
            <p class="lead fw-normal">GateMan India is a leading provider of automated gate systems and security solutions in India. We specialize in designing, manufacturing, and installing high-quality swing gates, sliding gates, and boom barriers for residential and commercial properties.</p>
            <p class="lead fw-normal">With years of experience in the industry, we have built a reputation for delivering reliable and innovative gate automation solutions that enhance the security and convenience of our customers' properties. Our team of skilled professionals works closely with clients to understand their specific needs and provide customized solutions that meet their requirements and budget.</p>
            <p class="lead fw-normal">At GateMan India, we are committed to providing exceptional customer service and support throughout the entire process, from consultation to after-sales service. We use high-quality materials and advanced technology to ensure that our gate systems are durable, efficient, and easy to use.</p>
        </div>
    </main>
    <?php $inc->footer(); ?>    
</body>
</html>