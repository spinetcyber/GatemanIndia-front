<?php
require_once(__DIR__.'/common/includes.php'); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <title>Our Services - GateMan India</title>
        <?php $inc->stylesheet(); ?>
        <?php $inc->javascript(); ?>
    </head>
    <body>
        <header>
        <?php $inc->topheader(['first' => 'services']); ?>
    </header>
    <main>
        
        <img src="<?php echo $inc->base_url('/assets/images/services.jpg'); ?>" class="img-fluid w-100" alt="Services Image" />
        <div class="container py-5">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Our Services</h1>
            <p class="lead fw-normal">GateMan India provides a wide range of automated gate systems and security solutions tailored to meet the needs of residential and commercial clients across India.</p>
            <p class="lead fw-normal">Our services include the design, manufacturing, installation, and maintenance of high-quality swing gates, sliding gates, and boom barriers. We also offer customized solutions to enhance security and convenience for our customers.</p>
            <p class="lead fw-normal">Our team of experienced professionals works closely with clients to understand their specific requirements and provide personalized solutions that ensure the safety and security of their properties. We are committed to delivering exceptional service and support throughout the entire process, from consultation to after-sales service.</p>
            <p class="lead fw-normal">Whether you need an automated gate system for your home, office, or industrial facility, GateMan India has the expertise and resources to provide you with the best solutions that meet your needs and budget. Contact us today to learn more about our services and how we can help you secure your property with our state-of-the-art gate automation systems.</p>
            <p class="lead fw-semibold">Our services include:</p>
            <ul class="lead fw-normal">
                <li>Design and consultation: We work closely with our clients to understand their specific requirements and provide personalized solutions that meet their needs and budget.</li>
                <li>Manufacturing: We use high-quality materials and advanced technology to manufacture durable and reliable gate systems that ensure the safety and security of our clients' properties.</li>
                <li>Installation: Our team of experienced professionals ensures that the installation process is smooth and efficient, minimizing disruption to our clients' daily activities.</li>
                <li>Maintenance and support: We offer comprehensive maintenance and support services to ensure that our clients' gate systems continue to operate smoothly and efficiently, providing long-term security and convenience.</li>
            </ul>
        </div>
    </main>
    <?php $inc->footer(); ?>    
</body>
</html>