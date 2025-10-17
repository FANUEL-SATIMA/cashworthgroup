<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CashWorth Group is an investment holding company operating across Africa, building and managing high-value businesses with a focus on excellence, innovation, and long-term value.">
    <meta name="keywords" content="CashWorth Group, investment holding, Africa, Tanzania, South Africa, consultancy, financial services, real estate, logistics, technology, marketing">
    <meta name="author" content="CashWorth Group">
    <title>Cash Worth Group</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero hero--bg hero--home">
            <div class="container hero__content">
                <h1 class="hero__title reveal">Invested in global prosperity</h1>
                <p class="hero__subtitle reveal delay-2">An investment holding company with subsidiaries and investments across key sectors in East and Southern Africa.</p>
                <div class="hero__actions reveal delay-3">
                    <a href="divisions.php" class="btn btn--primary">Explore Divisions</a>
                    <a href="contact.php" class="btn btn--ghost">Get in Touch</a>
                </div>
            </div>
        </section>


        <section class="section" id="what-we-do">
            <div class="container">
                <h2 class="section__title reveal">What We Do</h2>
                <div class="grid grid--3">
                    <div class="card reveal">
                        <h3>Invest</h3>
                        <p>We build and back high‑value businesses across strategic sectors in Africa.</p>
                    </div>
                    <div class="card reveal delay-1">
                        <h3>Operate</h3>
                        <p>Hands‑on leadership to drive operational excellence and sustainable growth.</p>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Partner</h3>
                        <p>Long‑term partnerships with founders, institutions, and stakeholders.</p>
                    </div>
                </div>
                <div class="hero__actions reveal delay-3" style="margin-top:24px;">
                    <a href="about.php" class="btn btn--primary">Learn About Us</a>
                    <a href="contact.php" class="btn btn--ghost">Start a Conversation</a>
                </div>
            </div>
        </section>

        <section class="section" id="stats">
            <div class="container">
                <h2 class="section__title reveal">Trusted by leading organizations</h2>
                <div id="statsCarousel" class="carousel slide reveal" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#statsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#statsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#statsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center gap-3">
                                <div class="card p-3 text-center" style="min-width:240px;">
                                    <span style="font-weight:700; letter-spacing:.4px;">Serengeti Holdings</span>
                                </div>
                                <div class="card p-3 text-center" style="min-width:240px;">
                                    <span style="font-weight:700; letter-spacing:.4px;">Kilimanjaro Bank</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center gap-3">
                                <div class="card p-3 text-center" style="min-width:240px;">
                                    <span style="font-weight:700; letter-spacing:.4px;">Azania Logistics</span>
                                </div>
                                <div class="card p-3 text-center" style="min-width:240px;">
                                    <span style="font-weight:700; letter-spacing:.4px;">Dar Health</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center gap-3">
                                <div class="card p-3 text-center" style="min-width:240px;">
                                    <span style="font-weight:700; letter-spacing:.4px;">Mlimani Properties</span>
                                </div>
                                <div class="card p-3 text-center" style="min-width:240px;">
                                    <span style="font-weight:700; letter-spacing:.4px;">Southern Traders</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#statsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#statsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="section" id="testimonials">
            <div class="container">
                <h2 class="section__title reveal">What our clients say</h2>
                <div id="testimonialsCarousel" class="carousel slide reveal" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card p-4 text-center">
                                <p class="mb-2" style="font-size:18px;">“Cash Worth delivered beyond expectations — operational efficiency improved and time‑to‑market dropped significantly.”</p>
                                <div class="small text-muted">Head of Operations, Serengeti Holdings</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card p-4 text-center">
                                <p class="mb-2" style="font-size:18px;">“Their team combines strategic clarity with flawless execution. We saw measurable ROI within the first quarter.”</p>
                                <div class="small text-muted">CFO, Kilimanjaro Bank</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card p-4 text-center">
                                <p class="mb-2" style="font-size:18px;">“Reliable partners — proactive, data‑driven, and easy to work with across multiple workstreams.”</p>
                                <div class="small text-muted">Managing Director, Azania Logistics</div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="section section--alt cta">
    <div class="container cta__inner two-column">
        <!-- Left Content -->
        <div class="cta__content reveal">
            <h2>Let’s Build Value Together</h2>
            <p class="delay-1">Partner with us to create sustainable growth, drive innovation, and unlock new market opportunities.</p>

            <ul class="delay-2 cta__highlights">
                <li>✔ Trusted by leading organizations across Africa and beyond</li>
                <li>✔ Tailored solutions backed by data-driven strategies</li>
                <li>✔ Long-term partnerships focused on measurable outcomes</li>
            </ul>

            <p class="cta__note delay-4">Have a specific challenge in mind? Let’s discuss how we can solve it together.</p>
        </div>

        <!-- Right Image -->
        <div class="cta__image reveal delay-2">
            <img src="assets/img/hero-about.jpg" alt="Partnership and Growth">
        </div>
    </div>
</section>


        <section class="section" id="contact">
            <div class="container grid grid--2">
                <div class="reveal">
                    <div class="ratio ratio-16x9 card p-0" style="overflow:hidden;">
                        <iframe src="https://www.google.com/maps?q=The%20Cube%2035091%20Slipway%20Rd%20Dar%20es%20Salaam&output=embed" title="Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div>
                    <h2 class="section__title reveal">Headquarters & Contact</h2>
                    <div class="contact reveal">
                        <h3>Tanzania Office</h3>
                        <p>The Cube, 35091 Slipway Rd, Dar es Salaam</p>
                        <p>📞 <a href="tel:+255787386142">+255 787 386 142</a></p>
                    </div>
                    <div class="contact reveal delay-2">
                        <p>✉ <a href="mailto:info@cashworthgroup.com">info@cashworthgroup.com</a></p>
                        <p>🌐 <a href="https://www.cashworthgroup.com/" target="_blank" rel="noopener">www.cashworthgroup.com</a></p>
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

