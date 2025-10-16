<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisions</title>
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
                <h1 class="hero__title reveal">Business Divisions</h1>
                <p class="hero__subtitle reveal delay-2">Our diversified portfolio of high-value businesses.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal"><h3>Business Consultancy</h3><p>Strategy, operations, and growth advisory.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal delay-1"><h3>Property Management</h3><p>Real estate operations and investment facilitation.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal delay-2"><h3>Financial & Tax Services</h3><p>Accounting, taxation, and corporate finance.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal delay-3"><h3>Health & Beauty</h3><p>Wellness brands with quality and accessibility.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal"><h3>Commercial Cleaning</h3><p>Professional hygiene and facility services.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal delay-1"><h3>Marketing & PR</h3><p>Brand strategy and digital communications.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal delay-2"><h3>Logistics & Transportation</h3><p>Reliable, scalable movement of goods.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal delay-3"><h3>IT & Digital Services</h3><p>Software, cloud, and digital transformation.</p></div></div>
                    <div class="col-12 col-md-6 col-lg-4"><div class="card division h-100 reveal"><h3>Travel & Tourism</h3><p>Curated experiences and corporate travel.</p></div></div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

