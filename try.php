
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
      
        .key {
            width: 100%;
            padding: 20px;
        }
        .swiper {
            width: 90%;
            max-width: 1200px;
            padding: 20px;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .feature-card {
            text-align: center;
            padding: 15px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: auto;
        }
        .feature-card img {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>

    <section class="key bg-light py-4">
        <div class="container text-center">
            <div class="swiper key-slider p-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/recycling.svg" alt="Recycle">
                            <h5 class="mb-1 fw-bold">Recycle</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/fireproof.png" alt="Fire Retardant">
                            <h5 class="mb-1 fw-bold">Fire Retardant</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/water.png" alt="Water Resistant">
                            <h5 class="mb-1 fw-bold">Water Resistant</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/reliability.png" alt="High Durability">
                            <h5 class="mb-1 fw-bold">High Durability</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/save-the-world.png" alt="Eco-Friendly">
                            <h5 class="mb-1 fw-bold">Eco-Friendly</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/audio.png" alt="Sound Insulation">
                            <h5 class="mb-1 fw-bold">Sound Insulation</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/shield.png" alt="Scratch  Resistant">
                            <h5 class="mb-1 fw-bold">Scratch Resistant</h5>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="img/icons/water-resistant.png" alt="Water Resistant">
                            <h5 class="mb-1 fw-bold">Weather Resistant</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
                320: { slidesPerView: 1 },
                480: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 4 }
            }
        });
    </script>

