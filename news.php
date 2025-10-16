<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="icon" type="image/svg+xml" href="assets/img/logo-mark.svg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="container hero__content">
                <h1 class="hero__title reveal">News & Insights</h1>
                <p class="hero__subtitle reveal delay-2">Updates across our portfolio and markets.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card h-100 reveal">
                            <h3>Quarterly Investment Update</h3>
                            <p class="mb-2 text-muted">Oct 2025</p>
                            <p>Highlights from our latest quarter and outlook across key sectors.</p>
                            <a class="btn btn--ghost mt-1" href="#">Read more</a>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card h-100 reveal delay-1">
                            <h3>Technology Partnership Announced</h3>
                            <p class="mb-2 text-muted">Sep 2025</p>
                            <p>Accelerating digital transformation across the Group’s portfolio.</p>
                            <a class="btn btn--ghost mt-1" href="#">Read more</a>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card h-100 reveal delay-2">
                            <h3>Real Estate Milestone</h3>
                            <p class="mb-2 text-muted">Aug 2025</p>
                            <p>New property management initiatives to enhance tenant experience.</p>
                            <a class="btn btn--ghost mt-1" href="#">Read more</a>
                        </article>
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

