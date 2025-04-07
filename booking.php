<?php include('includes/header.php'); ?>

<!-- Page Header -->
<div class="page-header ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">Book a Session</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Booking Section -->
<section class="booking-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="booking-form-wrapper p-4 border rounded shadow-sm bg-white">
                    <h2 class="section-title text-center mb-4">Book Your Session with Tarrot Shewta</h2>
                    <p class="text-center fw-bold mb-4">Fill out the form below to schedule your appointment. We'll get back to you to confirm the details.</p>

                    <form id="bookingForm" action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address<span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number<span style="color: red;">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="service" class="form-label">Select Service<span style="color: red;">*</span></label>
                            <select class="form-select" id="service" name="service" required>
                                <option value="" selected disabled>Choose a service...</option>
                                <option value="tarot-reading">Tarot Card Reading</option>
                                <option value="numerology">Numerology</option>
                                <option value="vaastu">Vaastu</option>
                                <option value="angel-healing">Angel Healing</option>
                                <option value="meditation">Meditation</option>
                                <option value="reiki-healing">Reiki Healing</option>
                                <option value="vedic-astrology">Vedic Astrology</option>
                                <option value="lama-fera">Lama Fera</option>
                                <option value="akashic-records">Akashic Records</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="sessionType" class="form-label">Session Type<span style="color: red;">*</span></label>
                            <select class="form-select" id="sessionType" name="sessionType" required>
                                <option value="" selected disabled>Choose session type...</option>
                                <option value="in-person">In-Person</option>
                                <option value="video-call">Video Call</option>
                                <option value="phone-call">Phone Call</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="preferredDate" class="form-label">Preferred Date<span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="preferredDate" name="preferredDate" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="preferredTime" class="form-label">Preferred Time<span style="color: red;">*</span></label>
                                <select class="form-select" id="preferredTime" name="preferredTime" required>
                                    <option value="" selected disabled>Select a time...</option>
                                    <option value="10:00">10:00 AM</option>
                                    <option value="11:00">11:00 AM</option>
                                    <option value="12:00">12:00 PM</option>
                                    <option value="13:00">1:00 PM</option>
                                    <option value="14:00">2:00 PM</option>
                                    <option value="15:00">3:00 PM</option>
                                    <option value="16:00">4:00 PM</option>
                                    <option value="17:00">5:00 PM</option>
                                    <option value="18:00">6:00 PM</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alternateDate" class="form-label">Alternate Date (Optional)</label>
                            <input type="date" class="form-control" id="alternateDate" name="alternateDate">
                        </div>

                        <div class="mb-3">
                            <label for="questions" class="form-label">Questions or Concerns</label>
                            <textarea class="form-control" id="questions" name="questions" rows="4" placeholder="Please share any specific questions or concerns you'd like addressed during your session."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="hearAbout" class="form-label">How did you hear about us?</label>
                            <select class="form-select" id="hearAbout" name="hearAbout">
                                <option value="" selected disabled>Select an option...</option>
                                <option value="search">Search Engine</option>
                                <option value="social">Social Media</option>
                                <option value="friend">Friend Referral</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termsAgree" required>
                            <label class="form-check-label" for="termsAgree">I agree to the <a href="terms.php">terms and conditions</a><span style="color: red;">*</span></label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="marketingAgree">
                            <label class="form-check-label" for="marketingAgree">I would like to receive updates and special offers via email</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Book Now</button>

                        <div class="mt-3 small text-muted">
                            <p><span style="color: red;">*</span> Required fields</p>
                            <p><b>Note:</b> You will receive a confirmation email once your booking is processed. Payment details will be shared after booking confirmation.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title text-center">Our Pricing</h2>
                <p class="lead">Choose a package that suits your needs</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card h-100 text-center border rounded p-4 shadow-sm bg-white">
                    <div class="pricing-header mb-4">
                        <h3 class="pricing-title">Basic</h3>
                        <h4 class="pricing-price">₹1,500</h4>
                        <p class="pricing-duration">Single Session</p>
                    </div>
                    <div class="pricing-body mb-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>30-minute consultation</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>One area of focus</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Basic tarot reading</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Email support</li>
                            <li class="text-muted mb-2"><i class="fas fa-times me-2"></i>Follow-up session</li>
                            <li class="text-muted mb-2"><i class="fas fa-times me-2"></i>Personalized report</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#bookingForm" class="btn btn-outline-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card h-100 text-center border rounded p-4 shadow bg-white position-relative">
                    <div class="popular-badge position-absolute top-0 end-0 bg-primary text-white px-3 py-1 small rounded-start">Most Popular</div>
                    <div class="pricing-header mb-4">
                        <h3 class="pricing-title">Standard</h3>
                        <h4 class="pricing-price">₹3,500</h4>
                        <p class="pricing-duration">3 Sessions</p>
                    </div>
                    <div class="pricing-body mb-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>60-minute consultation</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Multiple areas of focus</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Detailed tarot reading</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Email & phone support</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>One follow-up session</li>
                            <li class="text-muted mb-2"><i class="fas fa-times me-2"></i>Personalized report</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#bookingForm" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card h-100 text-center border rounded p-4 shadow-sm bg-white">
                    <div class="pricing-header mb-4">
                        <h3 class="pricing-title">Premium</h3>
                        <h4 class="pricing-price">₹7,500</h4>
                        <p class="pricing-duration">Full Package</p>
                    </div>
                    <div class="pricing-body mb-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>90-minute consultation</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Comprehensive analysis</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Advanced tarot reading</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Priority support</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Two follow-up sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Detailed personalized report</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#bookingForm" class="btn btn-outline-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <p>Need a custom package? <a href="contact.php">Contact us</a> for personalized services.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="booking-faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title text-center">Booking FAQ</h2>
                <p class="lead">Common questions about our booking process</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="bookingFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="bookingHeadingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bookingCollapseOne" aria-expanded="true" aria-controls="bookingCollapseOne">
                                What happens after I submit the booking form?
                            </button>
                        </h2>
                        <div id="bookingCollapseOne" class="accordion-collapse collapse show" aria-labelledby="bookingHeadingOne" data-bs-parent="#bookingFaqAccordion">
                            <div class="accordion-body">
                                After submitting the booking form, you will receive an automatic email confirmation. Within 24 hours, we will contact you to confirm your appointment time and provide payment details.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="bookingHeadingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bookingCollapseTwo" aria-expanded="false" aria-controls="bookingCollapseTwo">
                                What is your cancellation policy?
                            </button>
                        </h2>
                        <div id="bookingCollapseTwo" class="accordion-collapse collapse" aria-labelledby="bookingHeadingTwo" data-bs-parent="#bookingFaqAccordion">
                            <div class="accordion-body">
                                We request at least 24 hours notice for cancellations. Cancellations made with less than 24 hours notice may be subject to a cancellation fee of 50% of the session cost. If you need to reschedule, please contact us as soon as possible.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="bookingHeadingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bookingCollapseThree" aria-expanded="false" aria-controls="bookingCollapseThree">
                                What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="bookingCollapseThree" class="accordion-collapse collapse" aria-labelledby="bookingHeadingThree" data-bs-parent="#bookingFaqAccordion">
                            <div class="accordion-body">
                                We accept various payment methods including UPI, bank transfer, credit/debit cards, and cash (for in-person sessions). Payment details will be provided after your booking is confirmed.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="bookingHeadingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bookingCollapseFour" aria-expanded="false" aria-controls="bookingCollapseFour">
                                Do I need to pay in advance?
                            </button>
                        </h2>
                        <div id="bookingCollapseFour" class="accordion-collapse collapse" aria-labelledby="bookingHeadingFour" data-bs-parent="#bookingFaqAccordion">
                            <div class="accordion-body">
                                Yes, a 50% deposit is required to secure your booking. The remaining balance can be paid before or at the time of your session, depending on the session type.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <!-- Swiper Container -->
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">

                <!-- Testimonial Item 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>Hi Mam, I want to book a health reading for my sister. Please tell me the charges. Also, I want to thank you because I took a reading regarding my husband's job, and he got it last month as you predicted. Your readings are to the point. Thank you so much, Mam!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="images/user.png" alt="Manpreet Kaur">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Manpreet Kaur</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>Hi Mam, I want to book a health reading for my sister. Please tell me the charges. Also, I want to thank you because I took a reading regarding my husband's job, and he got it last month as you predicted. Your readings are to the point. Thank you so much, Mam!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="images/user.png" alt="Simran Chawla">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Simran Chawla</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>Hi Mam, I want to book a health reading for my sister. Please tell me the charges. Also, I want to thank you because I took a reading regarding my husband's job, and he got it last month as you predicted. Your readings are to the point. Thank you so much, Mam!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="images/user.png" alt="Neha Sharma">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Neha Sharma</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>Hi Mam, I want to book a health reading for my sister. Please tell me the charges. Also, I want to thank you because I took a reading regarding my husband's job, and he got it last month as you predicted. Your readings are to the point. Thank you so much, Mam!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="images/user.png" alt="Priya Verma">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Priya Verma</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item 5 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>Hi Mam, I want to book a health reading for my sister. Please tell me the charges. Also, I want to thank you because I took a reading regarding my husband's job, and he got it last month as you predicted. Your readings are to the point. Thank you so much, Mam!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-author-img">
                                <img src="images/user.png" alt="Anjali Mehta">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Anjali Mehta</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="testimonials.php" class="btn btn-primary">See More Testimonials...</a>
            </div>
        </div>
    </div>
</section>


<style>
    .pricing-card {
        transition: all 0.3s ease;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
    }

    .pricing-price {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 0;
    }

    .pricing-duration {
        color: var(--text-color);
        font-size: 0.9rem;
    }

    .popular-badge {
        transform: translateY(-1px);
        z-index: 1;
    }
</style>

<script>
    // Set minimum date for date pickers to today
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('preferredDate').min = today;
        document.getElementById('alternateDate').min = today;
    });
</script>

<?php include('includes/footer.php'); ?>
