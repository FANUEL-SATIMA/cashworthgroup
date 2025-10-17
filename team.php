<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero hero--bg hero--team">
            <div class="container hero__content">
                <h1 class="hero__title reveal">Leadership & Team</h1>
                <p class="hero__subtitle reveal delay-2">Experienced leaders and specialists driving sustainable value creation.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title reveal">Meet our team</h2>
                <div class="row g-3 mt-1">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 reveal">
                            <div class="d-flex align-items-center gap-3">
                                <img src="assets/img/nqobile.png" alt="Portrait" width="78984" height="100">
                                <div>
                                    <h3 class="m-0">Amani N.</h3>
                                    <div class="text-muted">Owner</div>
                                </div>
                            </div>
                            <p class="mt-2 mb-0">Investor and strategist with 15+ years across finance, real estate, and technology.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 reveal delay-1">
                            <div class="d-flex align-items-center gap-3">
                                <img src="assets/img/nqobile.png" alt="Portrait" width="64" height="64">
                                <div>
                                    <h3 class="m-0">Zanele K.</h3>
                                    <div class="text-muted">Owner</div>
                                </div>
                            </div>
                            <p class="mt-2 mb-0">Operations leader specializing in cross-border scaling and process excellence.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 reveal delay-2">
                            <div class="d-flex align-items-center gap-3">
                                <img src="assets/img/nqobile.png" alt="Portrait" width="64" height="64">
                                <div>
                                    <h3 class="m-0">Joseph M.</h3>
                                    <div class="text-muted">Owner</div>
                                </div>
                            </div>
                            <p class="mt-2 mb-0">Finance executive with expertise in capital allocation, risk, and governance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

