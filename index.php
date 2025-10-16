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
    <link rel="icon" type="image/svg+xml" href="assets/img/logo-mark.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="container hero__content">
                <h1 class="hero__title reveal">Invested in global prosperity</h1>
                <p class="hero__subtitle reveal delay-2">An investment holding company with subsidiaries and investments across key sectors in East and Southern Africa.</p>
                <div class="hero__actions reveal delay-3">
                    <a href="divisions.php" class="btn btn--primary">Explore Divisions</a>
                    <a href="contact.php" class="btn btn--ghost">Get in Touch</a>
                </div>
            </div>
        </section>

        <section class="section" id="divisions">
            <div class="container">
                <h2 class="section__title reveal">Business Divisions</h2>
                <div class="grid grid--3">
                    <div class="card division reveal">
                        <h3>Business Consultancy</h3>
                        <p>Strategy, operations, and growth advisory for modern enterprises.</p>
                    </div>
                    <div class="card division reveal delay-1">
                        <h3>Property Management</h3>
                        <p>End-to-end real estate management and investment facilitation.</p>
                    </div>
                    <div class="card division reveal delay-2">
                        <h3>Financial & Tax Services</h3>
                        <p>Accounting, taxation, compliance, and corporate finance solutions.</p>
                    </div>
                    <div class="card division reveal delay-3">
                        <h3>Health & Beauty</h3>
                        <p>Wellness brands focused on quality, accessibility, and trust.</p>
                    </div>
                    <div class="card division reveal">
                        <h3>Commercial Cleaning</h3>
                        <p>Professional hygiene and facility services for businesses.</p>
                    </div>
                    <div class="card division reveal delay-1">
                        <h3>Marketing & PR</h3>
                        <p>Brand strategy, communication, and digital marketing services.</p>
                    </div>
                    <div class="card division reveal delay-2">
                        <h3>Logistics & Transportation</h3>
                        <p>Efficient movement of goods with reliability and scale.</p>
                    </div>
                    <div class="card division reveal delay-3">
                        <h3>IT & Digital Services</h3>
                        <p>Software, cloud, and digital transformation solutions.</p>
                    </div>
                    <div class="card division reveal">
                        <h3>Travel & Tourism</h3>
                        <p>Curated travel experiences and corporate travel management.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt cta">
            <div class="container cta__inner">
                <h2 class="reveal">Let’s build value together</h2>
                <p class="reveal delay-1">Partner with us to create sustainable impact and growth across markets.</p>
                <a href="contact.php" class="btn btn--primary reveal delay-2">Contact Us</a>
            </div>
        </section>

        <section class="section" id="contact">
            <div class="container grid grid--2">
                <div>
                    <h2 class="section__title reveal">Headquarters & Contact</h2>
                    <div class="contact reveal">
                        <h3>Tanzania Office</h3>
                        <p>M03, Oyster Pearl Galleria, Chole Road, Masaki, Dar es Salaam</p>
                        <p>📞 <a href="tel:+255787386142">+255 787 386 142</a></p>
                    </div>
                    <div class="contact reveal delay-1">
                        <h3>South Africa Office</h3>
                        <p>24, 2nd Road, Hyde Park, Sandton, Johannesburg</p>
                        <p>📞 <a href="tel:+27102039360">+27 10 203 9360</a></p>
                    </div>
                    <div class="contact reveal delay-2">
                        <p>✉ <a href="mailto:info@cashworthgroup.com">info@cashworthgroup.com</a></p>
                        <p>🌐 <a href="https://www.cashworthgroup.com/" target="_blank" rel="noopener">www.cashworthgroup.com</a></p>
                    </div>
                </div>
                <form class="card form reveal" action="https://formspree.io/f/xnqekgzz" method="POST">
                    <h3>Send us a message</h3>
                    <label>
                        <span>Name</span>
                        <input type="text" name="name" required>
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" required>
                    </label>
                    <label>
                        <span>Message</span>
                        <textarea name="message" rows="5" required></textarea>
                    </label>
                    <button type="submit" class="btn btn--primary">Submit</button>
                    <p class="form__note">By submitting, you agree to our communication and privacy terms.</p>
                </form>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

