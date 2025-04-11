<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact Us</h5>
                <p>
                    Samlong, Ranchi, Jharkhand 834001
                </p>
                <p><strong>Phone:</strong> <a href="tel:+917061887689" style="color: #b7b0b6;">+91 7061887689</a></p>
                <p><strong>Email:</strong> <a href="mailto:tarrotwithshweta@gmail.com" style="color: #b7b0b6;">tarrotwithshweta@gmail.com</a></p>
                <div class="social-links mt-3">
                    <!-- <a href="http://twitter.com/" class="social-icon"><i class="fab fa-twitter"></i></a> -->
                    <a href="https://www.facebook.com/tarrotwithshweta" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/tarrotwithshweta/" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <!-- <a href="https://www.linkedin.com/" class="social-icon"><i class="fab fa-linkedin-in"></i></a> -->
                    <a href="https://youtube.com/shorts/8zDRuzNhMFo?si=uxKQrQHtVORQKs6Q" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Useful Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="terms.php">Terms & Conditions</a></li>
                    <li><a href="privacy.php">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Our Services</h5>
                <ul class="list-unstyled">
                    <li><a class="dropdown-item" href="reader.php">Tarrot reader</a></li>
                    <li><a class="dropdown-item" href="numerologist.php">Numerologist </a></li>
                    <li><a class="dropdown-item" href="healer.php">Healer</a></li>
                    <li><a class="dropdown-item" href="name.php">Name Corrector</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="map-section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-uppercase">Our Location</h5>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16368.594496852378!2d85.34236636009022!3d23.355555163065862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e22963f73c35%3A0x118d163a9529cfb0!2sSamlong%2C%20Ranchi%2C%20Jharkhand!5e1!3m2!1sen!2sin!4v1743406564342!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright py-3 text-center">
        <div class="container">
            <p class="m-0">Copyright &copy; <strong>Tarrot with Shweta</strong>. All Rights Reserved</p>
            <p class="m-0 small">Designed by <a href="https://www.jharkhanditservices.com/">Jharkhand IT Services Software Pvt. Ltd</a></p>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<!-- jQuery (Required) -->

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Initialize Owl Carousel -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".testimonial-slider", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
        $(".hero-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });
</script>
<script>
    var swiper = new Swiper(".key-slider", {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 20,
        speed: 3000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        freeMode: true,
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            480: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 4
            }
        }
    });
</script>
<script src="js/main.js"></script>
</body>

</html>