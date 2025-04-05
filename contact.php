<?php include('includes/header.php'); ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="section-title">Get In Touch</h2>
                <p>If you have any questions or need more information about our services, please feel free to get in touch with us. We're here to help and would love to hear from you.</p>

                <div class="  mt-4">
                    <div class="contact-item d-flex align-items-center mb-3">
                        <div class="icon me-3">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <div class="content">
                            <h5 class="mb-1">Our Location</h5>
                            <p class="mb-0">
                            Samlong, Ranchi, Jharkhand 834001
                            </p>
                        </div>
                    </div>

                    <div class="contact-item d-flex align-items-center mb-3">
                        <div class="icon me-3">
                            <i class="fas fa-phone fa-2x text-primary"></i>
                        </div>
                        <div class="content">
                            <h5 class="mb-1">Phone Number</h5>
                            <p class="mb-0"><a href="tel:+919876543210">+91 9876543210</a></p>
                        </div>
                    </div>

                    <div class="contact-item d-flex align-items-center mb-3">
                        <div class="icon me-3">
                            <i class="fas fa-envelope fa-2x text-primary"></i>
                        </div>
                        <div class="content">
                            <h5 class="mb-1">Email Address</h5>
                            <p class="mb-0"><a href="mailto:tarrotshewta@gmail.com">tarrotshewta@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="contact-item d-flex align-items-center mb-3">
                        <div class="icon me-3">
                            <i class="fas fa-clock fa-2x text-primary"></i>
                        </div>
                        <div class="content">
                            <h5 class="mb-1">Working Hours</h5>
                            <p class="mb-0">Monday - Saturday: 10:00 AM - 7:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <div class=" mt-4">
                    <h5>Connect With Us</h5>
                    <div class="d-flex mt-2">
                        <a href="#" class="social-icon me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon me-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form-wrapper p-4 border rounded shadow-sm bg-white">
                    <h3 class="mb-4">Send us a Message</h3>
                    <form id="contactForm" action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="privacy" required>
                            <label class="form-check-label" for="privacy">I agree to the <a href="privacy.php">privacy policy</a></label>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-4">Find Us on the Map</h2>
                <div class="map-wrapper rounded shadow overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16368.594496852378!2d85.34236636009022!3d23.355555163065862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e22963f73c35%3A0x118d163a9529cfb0!2sSamlong%2C%20Ranchi%2C%20Jharkhand!5e1!3m2!1sen!2sin!4v1743406564342!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title text-center">Frequently Asked Questions</h2>
                <p class="lead">Find answers to common questions about our services.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How can I book a session?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can book a session by visiting our <a href="booking.php">booking page</a>, calling us directly at +91 87970-68771, or by sending us an email at tarrotshewta@gmail.com. We'll get back to you as soon as possible to confirm your appointment.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you offer online sessions?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer online sessions via video call or phone call for clients who cannot visit us in person. The process and accuracy remain the same as in-person readings.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What should I prepare for my first session?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                For your first session, it's helpful to come with an open mind and specific questions you'd like addressed. You don't need to bring any special items unless specifically requested for your particular reading or healing service.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How long does a session typically last?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Session duration varies based on the service. Most tarot readings last 30-60 minutes, while healing sessions may take 60-90 minutes. We'll inform you of the expected duration when you book your appointment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .social-icon {
        width: 40px;
        height: 40px;
        background-color: var(--primary-color);
        color: var(--light-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background-color: var(--secondary-color);
        color: var(--light-color);
    }

    .contact-item .icon {
        color: var(--secondary-color);
    }

    .contact-form-wrapper {
        background-color: var(--light-color);
    }

    .map-wrapper {
        width: 100%;
        height: 450px;
    }

    .accordion-button:not(.collapsed) {
        background-color: rgba(40, 186, 202, 0.1);
        color: var(--primary-color);
    }

    .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(40, 186, 202, 0.25);
    }
</style>

<?php include('includes/footer.php'); ?>
