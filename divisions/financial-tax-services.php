<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial & Tax Services - Cash Worth Group</title>
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <meta name="description" content="Financial & Tax Services by Cash Worth Group - Accounting, taxation, compliance, and corporate finance solutions for businesses.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main>
        <section class="hero hero--bg hero--divisions">
            <div class="container hero__content">
                <h1 class="hero__title reveal">Financial & Tax Services</h1>
                <p class="hero__subtitle reveal delay-2">Comprehensive financial solutions and regulatory compliance.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="grid grid--2">
                    <div class="reveal">
                        <h2 class="section__title">Financial Excellence</h2>
                        <p>We provide comprehensive accounting, taxation, compliance, and corporate finance solutions to help businesses maintain financial health and regulatory compliance. Our certified professionals ensure your business stays compliant while optimizing financial performance and growth opportunities.</p>
                        
                        <h3>Why Choose Our Financial Services?</h3>
                        <ul>
                            <li>Certified professionals with extensive industry experience</li>
                            <li>Comprehensive understanding of local and international regulations</li>
                            <li>Advanced financial software and reporting systems</li>
                            <li>Personalized service tailored to your business needs</li>
                        </ul>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Financial Expertise</h3>
                        <p>Our team of certified accountants and financial advisors provides expert guidance to help your business thrive in today's complex financial landscape.</p>
                        <div class="stats">
                            <div class="stats__item">
                                <span class="stats__num">20+</span>
                                <span class="stats__label">Certified Professionals</span>
                            </div>
                            <div class="stats__item">
                                <span class="stats__num">500+</span>
                                <span class="stats__label">Clients Served</span>
                            </div>
                            <div class="stats__item">
                                <span class="stats__num">100%</span>
                                <span class="stats__label">Compliance Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt">
            <div class="container">
                <h2 class="section__title reveal">Our Services</h2>
                <div class="grid grid--3">
                    <div class="card reveal">
                        <h3>Accounting & Bookkeeping</h3>
                        <p>Comprehensive accounting services to maintain accurate financial records and ensure regulatory compliance.</p>
                        <ul>
                            <li>Financial Statement Preparation</li>
                            <li>Monthly & Quarterly Reporting</li>
                            <li>Chart of Accounts Setup</li>
                            <li>Bank Reconciliation Services</li>
                        </ul>
                    </div>
                    <div class="card reveal delay-1">
                        <h3>Tax Planning & Compliance</h3>
                        <p>Strategic tax planning and compliance services to minimize tax liability while ensuring full regulatory compliance.</p>
                        <ul>
                            <li>Corporate Tax Planning</li>
                            <li>Tax Return Preparation</li>
                            <li>Tax Audit Support</li>
                            <li>Transfer Pricing Documentation</li>
                        </ul>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Corporate Finance</h3>
                        <p>Strategic financial advisory services to support business growth and optimize capital structure.</p>
                        <ul>
                            <li>Financial Modeling & Analysis</li>
                            <li>Capital Raising Advisory</li>
                            <li>Merger & Acquisition Support</li>
                            <li>Investment Analysis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title reveal">Specialized Solutions</h2>
                <div class="grid grid--2">
                    <div class="reveal">
                        <p>We provide specialized financial solutions across various industries, ensuring compliance with sector-specific regulations and best practices.</p>
                        
                        <div class="values grid grid--2">
                            <div class="value">
                                <h3>Audit & Assurance</h3>
                                <p>Independent audit services and internal control assessments</p>
                            </div>
                            <div class="value">
                                <h3>Regulatory Compliance</h3>
                                <p>Ensuring adherence to local and international financial regulations</p>
                            </div>
                            <div class="value">
                                <h3>Financial Advisory</h3>
                                <p>Strategic financial planning and business advisory services</p>
                            </div>
                            <div class="value">
                                <h3>Risk Management</h3>
                                <p>Financial risk assessment and mitigation strategies</p>
                            </div>
                        </div>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Get Financial Support</h3>
                        <p>Our financial experts are ready to help you navigate complex financial challenges and opportunities. Contact us for personalized financial solutions.</p>
                        <a href="../contact.php" class="btn btn--primary">Get Financial Advice</a>
                        <p class="form__note">Free initial consultation to assess your financial needs.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt cta">
            <div class="container cta__inner two-column">
                <div class="cta__content reveal">
                    <h2>Secure Your Financial Future</h2>
                    <p class="delay-1">Partner with our financial experts to ensure compliance, optimize performance, and achieve sustainable financial growth.</p>
                    
                    <ul class="delay-2 cta__highlights">
                        <li>✔ Certified professionals with proven expertise</li>
                        <li>✔ Comprehensive compliance and regulatory support</li>
                        <li>✔ Strategic financial planning and advisory services</li>
                    </ul>
                    
                    <p class="cta__note delay-4">Contact us today for expert financial guidance tailored to your business needs.</p>
                </div>
                
                <div class="cta__image reveal delay-2">
                    <img src="../assets/img/hero-divisions.jpg" alt="Financial & Tax Services">
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
