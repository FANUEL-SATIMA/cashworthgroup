<?php
// Compute site base URL from the first path segment, e.g. "/cashworth/" on localhost
$scriptPath = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
$segments = explode('/', trim($scriptPath, '/'));
$firstSegment = isset($segments[0]) ? $segments[0] : '';
$base_url = '/' . ($firstSegment !== '' ? $firstSegment . '/' : '');
?>
<footer class="footer">
    <div class="container">
        <div class="footer__main">
            <div class="footer__section footer__brand">
                <div class="footer__logo">
                    <img src="<?php echo $base_url; ?>assets/img/logo.png" alt="Cash Worth Group" class="footer__logo-img">
                    <span class="footer__logo-text">Cash Worth Group</span>
                </div>
                <div class="footer__social">
                    <a href="https://www.linkedin.com/jobs/view/fleet-manager-at-cashworth-group-4179995716/?originalSubdomain=tz" class="footer__social-link" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/cashworth_travels/" class="footer__social-link" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7z"/>
                            <path d="M12 7.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5m0-2A6.5 6.5 0 1 0 18.5 12 6.5 6.5 0 0 0 12 5.5z"/>
                            <circle cx="17.5" cy="6.5" r="1.25"/>
                        </svg>
                    </a>
                    <a href="#" class="footer__social-link" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="footer__section">
                <h4 class="footer__heading">Company</h4>
                <ul class="footer__links">
                    <li><a href="<?php echo $base_url; ?>about.php">About Us</a></li>
                    <li><a href="<?php echo $base_url; ?>divisions.php">Our Divisions</a></li>
                    <li><a href="<?php echo $base_url; ?>team.php">Our Team</a></li>
                    <li><a href="<?php echo $base_url; ?>news.php">News & Updates</a></li>
                </ul>
            </div>
            
            <div class="footer__section">
                <h4 class="footer__heading">Contact</h4>
                <div class="footer__contact">
                    <div class="footer__contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="footer__contact-icon">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <span>The Cube, 67WF+8F3, 35091 Slipway Rd, Dar es Salaam</span>
                    </div>
                    <div class="footer__contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="footer__contact-icon">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <a href="tel:+255787386142">+255 787 386 142</a>
                    </div>
                    <div class="footer__contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="footer__contact-icon">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <a href="mailto:info@cashworthgroup.com">info@cashworthgroup.com</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__section">
                <h4 class="footer__heading">Business Hours</h4>
                <div class="footer__hours">
                    <div class="footer__hours-item">
                        <span>Monday - Friday</span>
                        <span>9:00 AM - 6:00 PM</span>
                    </div>
                    <div class="footer__hours-item">
                        <span>Saturday</span>
                        <span>10:00 AM - 2:00 PM</span>
                    </div>
                    <div class="footer__hours-item">
                        <span>Sunday & Holidays</span>
                        <span>Closed</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer__bottom">
            <div class="footer__copyright">
                <p>© <span id="year"></span> Cash Worth Group. All rights reserved.</p>
            </div>
            <div class="footer__legal">
                <a href="#" class="footer__legal-link">Privacy Policy</a>
                <a href="#" class="footer__legal-link">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

