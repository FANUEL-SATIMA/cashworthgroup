<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <meta name="description" content="Cash Worth Group is an investment holding company with subsidiaries and investments spanning consultancy, financial & tax services, property management, trading, and more.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero hero--bg hero--about">
            <div class="container hero__content">
                <h1 class="hero__title reveal">About Cash Worth Group</h1>
                <p class="hero__subtitle reveal delay-2">An investment holding company with a portfolio of subsidiary companies and investments across key sectors.</p>
            </div>
        </section>

        <section class="section" id="about">
            <div class="container">
                <div class="grid grid--2">
                    <div>
                        <h2 class="section__title reveal">Who we are</h2>
                        <p class="reveal">
                            Cash Worth Group is an investment holding company with a portfolio of subsidiaries and investments ranging from business consultancy, financial & tax services, property management, trading, and more.
                        </p>
                        <p class="reveal delay-1">
                            The Group has subsidiary companies operating in Tanzania and a proven track record that is constantly recognized. Cash Worth prides itself on its culture of integrity, innovation, vision, and value creation—investing time and effort in managing and growing companies from the ground up.
                        </p>
                    </div>
                    <div class="card stats">
                        <div class="stats__item">
                            <span class="stats__num" data-counter data-target="1" data-suffix="+">0</span>
                            <span class="stats__label">Countries</span>
                        </div>
                        <div class="stats__item">
                            <span class="stats__num" data-counter data-target="10" data-suffix="+">0</span>
                            <span class="stats__label">Sectors</span>
                        </div>
                        <div class="stats__item">
                            <span class="stats__num">∞</span>
                            <span class="stats__label">Ambition</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt" id="mission">
            <div class="container grid grid--2">
                <div>
                    <h2 class="section__title reveal">Our Mission</h2>
                    <blockquote class="blockquote">“Invested in global prosperity.”</blockquote>
                    <p>To build investment worthy businesses that provide the global community with affordable, customer-centric solutions for their business needs.</p>
                </div>
                <div class="illustration reveal delay-2">
                    <img src="assets/img/mission.svg" alt="Mission illustration">
                </div>
            </div>
        </section>

        <section class="section" id="vision">
            <div class="container grid grid--2">
                <div>
                    <h2 class="section__title reveal">Our Vision</h2>
                    <p>To contribute to Africa’s sustainable development by fostering market leading companies through our focused approach and continuous enhancement of our investors’ value.</p>
                </div>
                <div class="illustration reveal delay-2">
                    <img src="assets/img/vision.svg" alt="Vision illustration">
                </div>
            </div>
        </section>

        <section class="section section--alt" id="values">
            <div class="container">
                <h2 class="section__title reveal">Our Corporate Values</h2>
                <div class="values grid grid--3">
                    <div class="card value reveal">
                        <h3>Quality</h3>
                        <p>Ensure all our services are of indisputable standards.</p>
                    </div>
                    <div class="card value reveal delay-1">
                        <h3>Innovation</h3>
                        <p>Always strive to think outside the box.</p>
                    </div>
                    <div class="card value reveal delay-2">
                        <h3>Professionalism</h3>
                        <p>Provide competent, efficient, and effective services with utmost due diligence.</p>
                    </div>
                    <div class="card value reveal">
                        <h3>Transparency</h3>
                        <p>Exhibit honesty and openness in everything that we do.</p>
                    </div>
                    <div class="card value reveal delay-1">
                        <h3>Sincerity</h3>
                        <p>Act with a sense of ownership and honesty to meet society’s expectations.</p>
                    </div>
                    <div class="card value reveal delay-2">
                        <h3>People Focus</h3>
                        <p>Cultivate a happy and motivated workforce.</p>
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

