<?php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisions</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero hero--bg hero--divisions">
            <div class="container hero__content">
                <h1 class="hero__title reveal">Business Divisions</h1>
                <p class="hero__subtitle reveal delay-2">Our diversified portfolio of high-value businesses.</p>
                <div class="hero__actions reveal delay-3">
                    <a href="#divisions-overview" class="btn btn--primary">View All Divisions</a>
                    <a href="contact.php" class="btn btn--ghost">Get in Touch</a>
                </div>
            </div>
        </section>

        <section class="section" id="divisions-overview">
            <div class="container">
                <h2 class="section__title reveal">Explore Our Divisions</h2>
                <p class="reveal delay-1">Click on any division below to learn more about our comprehensive services and expertise.</p>
                <div class="grid grid--3">
                    <a href="divisions/business-consultancy.php" class="card division reveal">
                        <h3>Business Consultancy</h3>
                        <p>Strategy, operations, and growth advisory for modern enterprises.</p>
                    </a>
                    <a href="divisions/property-management.php" class="card division reveal delay-1">
                        <h3>Property Management</h3>
                        <p>End-to-end real estate management and investment facilitation.</p>
                    </a>
                    <a href="divisions/financial-tax-services.php" class="card division reveal delay-2">
                        <h3>Financial & Tax Services</h3>
                        <p>Accounting, taxation, compliance, and corporate finance solutions.</p>
                    </a>
                    <a href="divisions/health-beauty.php" class="card division reveal delay-3">
                        <h3>Health & Beauty</h3>
                        <p>Wellness brands focused on quality, accessibility, and trust.</p>
                    </a>
                    <a href="divisions/commercial-cleaning.php" class="card division reveal">
                        <h3>Commercial Cleaning</h3>
                        <p>Professional hygiene and facility services for businesses.</p>
                    </a>
                    <a href="divisions/marketing-pr.php" class="card division reveal delay-1">
                        <h3>Marketing & PR</h3>
                        <p>Brand strategy, communication, and digital marketing services.</p>
                    </a>
                    <a href="divisions/logistics-transportation.php" class="card division reveal delay-2">
                        <h3>Logistics & Transportation</h3>
                        <p>Efficient movement of goods with reliability and scale.</p>
                    </a>
                    <a href="divisions/it-digital-services.php" class="card division reveal delay-3">
                        <h3>IT & Digital Services</h3>
                        <p>Software, cloud, and digital transformation solutions.</p>
                    </a>
                    <a href="divisions/travel-tourism.php" class="card division reveal">
                        <h3>Travel & Tourism</h3>
                        <p>Curated travel experiences and corporate travel management.</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="section" id="business-consultancy">
            <div class="container">
                <h2 class="section__title reveal">Business Consultancy</h2>
                <div class="grid grid--2">
                    <div class="reveal">
                        <p>Our business consultancy division provides comprehensive strategy, operations, and growth advisory services for modern enterprises across Africa. We help organizations navigate complex business challenges and unlock their full potential.</p>
                        <h3>Services Include:</h3>
                        <ul>
                            <li>Strategic Planning & Business Development</li>
                            <li>Operations Optimization</li>
                            <li>Market Analysis & Entry Strategies</li>
                            <li>Organizational Transformation</li>
                            <li>Performance Management</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Get Consultation</a>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Why Choose Our Consultancy?</h3>
                        <p>With deep local market knowledge and international best practices, we deliver tailored solutions that drive measurable results for our clients.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt" id="property-management">
            <div class="container">
                <h2 class="section__title reveal">Property Management</h2>
                <div class="grid grid--2">
                    <div class="card reveal">
                        <h3>Comprehensive Property Solutions</h3>
                        <p>From residential to commercial properties, we provide end-to-end real estate management and investment facilitation services.</p>
                    </div>
                    <div class="reveal delay-2">
                        <p>Our property management division specializes in maximizing property value through professional management, strategic investments, and tenant satisfaction.</p>
                        <h3>Our Services:</h3>
                        <ul>
                            <li>Property Acquisition & Investment Analysis</li>
                            <li>Tenant Management & Relations</li>
                            <li>Maintenance & Facility Management</li>
                            <li>Property Valuation & Appraisal</li>
                            <li>Real Estate Development Consulting</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Explore Properties</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="financial-tax-services">
            <div class="container">
                <h2 class="section__title reveal">Financial & Tax Services</h2>
                <div class="grid grid--2">
                    <div class="reveal">
                        <p>We provide comprehensive accounting, taxation, compliance, and corporate finance solutions to help businesses maintain financial health and regulatory compliance.</p>
                        <h3>Service Areas:</h3>
                        <ul>
                            <li>Accounting & Bookkeeping</li>
                            <li>Tax Planning & Compliance</li>
                            <li>Audit & Assurance Services</li>
                            <li>Corporate Finance & Advisory</li>
                            <li>Regulatory Compliance</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Get Financial Advice</a>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Expert Financial Guidance</h3>
                        <p>Our certified professionals ensure your business stays compliant while optimizing financial performance and growth opportunities.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt" id="health-beauty">
            <div class="container">
                <h2 class="section__title reveal">Health & Beauty</h2>
                <div class="grid grid--2">
                    <div class="card reveal">
                        <h3>Wellness & Beauty Brands</h3>
                        <p>We develop and manage wellness brands focused on quality, accessibility, and trust in the health and beauty sector.</p>
                    </div>
                    <div class="reveal delay-2">
                        <p>Our health and beauty division creates innovative products and services that promote wellness and confidence across diverse markets.</p>
                        <h3>Brand Portfolio:</h3>
                        <ul>
                            <li>Skincare & Beauty Products</li>
                            <li>Health Supplements & Vitamins</li>
                            <li>Personal Care Products</li>
                            <li>Wellness Services</li>
                            <li>Beauty Retail Operations</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Discover Products</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="commercial-cleaning">
            <div class="container">
                <h2 class="section__title reveal">Commercial Cleaning</h2>
                <div class="grid grid--2">
                    <div class="reveal">
                        <p>Professional hygiene and facility services for businesses, ensuring clean, safe, and healthy work environments.</p>
                        <h3>Cleaning Services:</h3>
                        <ul>
                            <li>Office & Commercial Cleaning</li>
                            <li>Industrial Facility Maintenance</li>
                            <li>Sanitization & Disinfection</li>
                            <li>Carpet & Upholstery Care</li>
                            <li>Window & Exterior Cleaning</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Request Service</a>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Professional Standards</h3>
                        <p>We maintain the highest standards of cleanliness and safety, using eco-friendly products and advanced cleaning technologies.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt" id="marketing-pr">
            <div class="container">
                <h2 class="section__title reveal">Marketing & PR</h2>
                <div class="grid grid--2">
                    <div class="card reveal">
                        <h3>Brand Strategy & Communication</h3>
                        <p>We develop comprehensive brand strategies and digital marketing campaigns that resonate with your target audience.</p>
                    </div>
                    <div class="reveal delay-2">
                        <p>Our marketing and PR division helps businesses build strong brands and effective communication strategies across digital and traditional channels.</p>
                        <h3>Marketing Services:</h3>
                        <ul>
                            <li>Brand Strategy & Identity</li>
                            <li>Digital Marketing & Social Media</li>
                            <li>Public Relations & Media Relations</li>
                            <li>Content Creation & Copywriting</li>
                            <li>Marketing Analytics & Reporting</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Start Marketing</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="logistics-transportation">
            <div class="container">
                <h2 class="section__title reveal">Logistics & Transportation</h2>
                <div class="grid grid--2">
                    <div class="reveal">
                        <p>Efficient movement of goods with reliability and scale. Our logistics division ensures seamless supply chain management across Africa.</p>
                        <h3>Logistics Solutions:</h3>
                        <ul>
                            <li>Freight & Cargo Services</li>
                            <li>Warehouse Management</li>
                            <li>Supply Chain Optimization</li>
                            <li>Cross-Border Logistics</li>
                            <li>Last-Mile Delivery</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Get Quote</a>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Reliable Transportation</h3>
                        <p>With extensive networks and modern fleet management, we ensure your goods reach their destination safely and on time.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt" id="it-digital-services">
            <div class="container">
                <h2 class="section__title reveal">IT & Digital Services</h2>
                <div class="grid grid--2">
                    <div class="card reveal">
                        <h3>Digital Transformation</h3>
                        <p>We provide software, cloud, and digital transformation solutions that modernize business operations and drive innovation.</p>
                    </div>
                    <div class="reveal delay-2">
                        <p>Our IT and digital services division helps businesses leverage technology to improve efficiency, reduce costs, and enhance customer experiences.</p>
                        <h3>Technology Services:</h3>
                        <ul>
                            <li>Software Development & Custom Solutions</li>
                            <li>Cloud Migration & Management</li>
                            <li>Digital Transformation Consulting</li>
                            <li>IT Infrastructure & Support</li>
                            <li>Cybersecurity & Data Protection</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Digital Solutions</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="travel-tourism">
            <div class="container">
                <h2 class="section__title reveal">Travel & Tourism</h2>
                <div class="grid grid--2">
                    <div class="reveal">
                        <p>Curated travel experiences and corporate travel management services that showcase the best of Africa while providing exceptional service.</p>
                        <h3>Travel Services:</h3>
                        <ul>
                            <li>Corporate Travel Management</li>
                            <li>Leisure Travel Planning</li>
                            <li>Group Tours & Events</li>
                            <li>Business Travel Solutions</li>
                            <li>Travel Insurance & Support</li>
                        </ul>
                        <a href="contact.php" class="btn btn--primary">Plan Travel</a>
                    </div>
                    <div class="card reveal delay-2">
                        <h3>Memorable Experiences</h3>
                        <p>We create unforgettable travel experiences that combine business efficiency with the beauty and culture of Africa.</p>
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

