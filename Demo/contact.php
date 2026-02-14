<?php
require_once(__DIR__.'/common/includes.php'); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <title>Contact Us - GateMan India</title>
        <?php $inc->stylesheet(); ?>
        <?php $inc->javascript(); ?>
    </head>
    <body>
        <header>
        <?php $inc->topheader(['first' => 'contact']); ?>
    </header>
    <main>
        
        <img src="<?php echo $inc->base_url('/assets/images/contact.jpg'); ?>" class="img-fluid w-100" alt="Contact Image" />
        <div class="container py-5">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Contact Us</h1>
            <div class="row">
                <div class="col-lg-7">
                    <p class="lead fw-normal">At GateMan India, we are committed to providing exceptional customer service and support. If you have any questions, inquiries, or feedback, please do not hesitate to contact us. Our team of dedicated professionals is here to assist you with any information you may need about our products and services.</p>
                    <p class="lead fw-normal">We understand that choosing the right solutions for your needs is important, and our knowledgeable team is always ready to guide you with accurate information and expert advice. Whether you are looking for product details, pricing information, installation assistance, or after-sales support, we ensure a prompt and reliable response to every query.</p>
                    <p class="lead fw-normal">Customer satisfaction is our top priority, and we strive to make your experience with GateMan India smooth and hassle-free. We also welcome your feedback and suggestions, as they help us continuously improve our services and better meet your expectations.</p>
                    <p class="lead fw-normal">Reach out to us via phone, email, or by filling out the contact form below. We look forward to connecting with you and serving you with professionalism and care.</p>
                    <p class="lead fw-normal">You can reach us through the following channels:</p>
                    <p><strong>Phone:</strong> +91-123-456-7890</p>
                    <p><strong>Email:</strong> info@gatemanindia.com</p>
                    <p><strong>Address:</strong> 123 Main Street, Mumbai, Maharashtra, India</p>
                    <p><strong>Business Hours:</strong> Monday to Friday, 9:00 AM to 6:00 PM IST</p>
                </div>
                <div class="col-lg-5">
                    <div class="p-3 mb-4 bg-body-tertiary rounded-3">
                        <form action="contact-form.php" method="post">
                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold">Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" required />
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="form-label fw-semibold">Phone</label>
                                <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required />
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required />
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label fw-semibold">Message</label>
                                <textarea class="form-control form-control-lg" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100 fw-bold">Submit</button>
                        </form>
                        <p class="small fw-normal text-danger mt-3 mb-0"><small>We value your feedback and are here to help. Whether you have questions, need support with an order, or want to share your experience, please get in touch - we look forward to assisting you.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php $inc->footer(); ?>    
</body>
</html>