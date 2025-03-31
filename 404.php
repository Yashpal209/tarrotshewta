<?php include('includes/header.php'); ?>

<!-- 404 Section -->
<section class="error-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="error-content p-5 rounded shadow-sm">
                    <h1 class="display-1 fw-bold text-primary">404</h1>
                    <h2 class="mb-4">Page Not Found</h2>
                    <p class="lead mb-4">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <div class="tarot-card mb-4">
                        <img src="images/tarot-card.png" alt="Tarot Card" style="max-width: 150px;">
                    </div>
                    <p>Perhaps the cards can guide you back to your path...</p>
                    <div class="mt-4">
                        <a href="index.php" class="btn btn-primary me-2">Return Home</a>
                        <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .error-section {
        min-height: 70vh;
        display: flex;
        align-items: center;
    }

    .error-content {
        background-color: var(--light-color);
        border: 1px solid rgba(0,0,0,0.1);
    }

    .tarot-card {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
        100% {
            transform: translateY(0px);
        }
    }
</style>

<?php include('includes/footer.php'); ?>
