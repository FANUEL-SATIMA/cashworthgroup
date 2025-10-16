<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
                <h1 class="hero__title reveal">Contact Us</h1>
                <p class="hero__subtitle reveal delay-2">Let’s build value together.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-12 col-lg-6">
                        <div class="card reveal">
                            <h3 class="mb-2">Headquarters & Contact</h3>
                            <div class="contact">
                                <h4 class="mb-1">Tanzania Office</h4>
                                <p class="mb-1">The Cube, 67WF+8F3, 35091 Slipway Rd, Dar es Salaam</p>
                                <p class="mb-2">📞 <a class="link-primary" href="tel:+255787386142">+255 787 386 142</a></p>
                            </div>
                            <div class="contact mt-3">
                                <p class="mb-1">✉ <a class="link-primary" href="mailto:info@cashworthgroup.com">info@cashworthgroup.com</a></p>
                                <p>🌐 <a class="link-primary" href="https://www.cashworthgroup.com/" target="_blank" rel="noopener">www.cashworthgroup.com</a></p>
                            </div>
                            <hr class="my-3">
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="p-2 border rounded-3">
                                        <div class="small text-muted">Business Hours</div>
                                        <div>Mon–Fri: 9:00–18:00</div>
                                        <div>Sat: 10:00–14:00</div>
                                        <div>Sun/Public Holidays: Closed</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="p-2 border rounded-3">
                                        <div class="small text-muted">Connect</div>
                                        <div><a class="link-primary" href="#">LinkedIn</a> · <a class="link-primary" href="#">Twitter</a></div>
                                        <div><a class="link-primary" href="#">Facebook</a> · <a class="link-primary" href="#">Instagram</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form class="card form needs-validation reveal" action="https://formspree.io/f/xnqekgzz" method="POST" novalidate>
                            <h3>Send us a message</h3>
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1">Name
                                        <input class="form-control" type="text" name="name" required>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1">Email
                                        <input class="form-control" type="email" name="email" required>
                                        <div class="invalid-feedback">Please provide a valid email.</div>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="form-label mb-1">Phone (optional)
                                        <input class="form-control" type="tel" name="phone" pattern="[0-9+()\-\s]{7,}">
                                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="form-label mb-1">Subject
                                        <select class="form-select" name="subject" required>
                                            <option value="" selected disabled>Choose a subject</option>
                                            <option>General Inquiry</option>
                                            <option>Partnership</option>
                                            <option>Investment</option>
                                            <option>Media</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a subject.</div>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="form-label mb-1">Message
                                        <textarea class="form-control" name="message" rows="5" required></textarea>
                                        <div class="invalid-feedback">Please enter your message.</div>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn--primary mt-1">Submit</button>
                            <div class="alert alert-success d-none mt-2" role="alert" id="contactSuccess">Thanks! We received your message.</div>
                            <p class="form__note">By submitting, you agree to our communication and privacy terms.</p>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="ratio ratio-16x9 card p-0 reveal" style="overflow:hidden;">
                            <iframe src="https://www.google.com/maps?q=The%20Cube%20Slipway%20Rd%20Dar%20es%20Salaam&output=embed" title="Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

