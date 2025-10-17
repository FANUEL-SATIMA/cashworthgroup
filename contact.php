<?php
$statusSuccess = false;
$statusError = '';
$errors = [];
$old = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $old = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
    ];

    if ($name === '') { $errors['name'] = 'Name is required.'; }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors['email'] = 'Valid email is required.'; }
    if ($subject === '') { $errors['subject'] = 'Subject is required.'; }
    if ($message === '' || strlen($message) < 10) { $errors['message'] = 'Message must be at least 10 characters.'; }

    if (!$errors) {
        $to = 'info@cashworthgroup.com';
        $mailSubject = 'Website contact: ' . $subject;
        $body = "You have a new contact form submission from Cash Worth Group website.\r\n\r\n"
              . 'Name: ' . $name . "\r\n"
              . 'Email: ' . $email . "\r\n"
              . 'Phone: ' . ($phone ?: 'N/A') . "\r\n"
              . 'Subject: ' . $subject . "\r\n\r\n"
              . "Message:\r\n" . $message . "\r\n";

        $headers = [];
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-Type: text/plain; charset=UTF-8';
        $headers[] = 'From: Cash Worth Group <no-reply@cashworthgroup.com>';
        if ($email) { $headers[] = 'Reply-To: ' . $email; }

        $sent = @mail($to, $mailSubject, $body, implode("\r\n", $headers));
        if ($sent) {
            $statusSuccess = true;
            $old = [];
        } else {
            // Fallback: persist submission locally so it isn't lost
            $saveDir = __DIR__ . '/storage/contact_submissions';
            if (!is_dir($saveDir)) {
                @mkdir($saveDir, 0775, true);
            }
            $saveFile = $saveDir . '/' . date('Y-m-d') . '.jsonl';
            $payload = json_encode([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message,
                'createdAt' => date('c'),
                'delivery' => 'stored-local',
            ], JSON_UNESCAPED_UNICODE);
            @file_put_contents($saveFile, $payload . PHP_EOL, FILE_APPEND | LOCK_EX);

            // Consider submission successful for the user experience
            $statusSuccess = true;
            $statusError = '';
            $old = [];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero hero--bg hero--contact">
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
                        <?php if ($statusSuccess): ?>
                            <div class="alert alert-success" role="alert">Thanks! We received your message and will get back to you soon.</div>
                        <?php elseif ($statusError || $errors): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php if ($statusError): echo htmlspecialchars($statusError); endif; ?>
                                <?php if ($errors): ?>
                                    <ul class="mb-0">
                                        <?php foreach ($errors as $e): ?>
                                            <li><?php echo htmlspecialchars($e); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <form class="card form needs-validation reveal" action="" method="POST" novalidate>
                            <h3>Send us a message</h3>
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1">Name
                                        <input class="form-control" type="text" name="name" value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1">Email
                                        <input class="form-control" type="email" name="email" value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>" required>
                                        <div class="invalid-feedback">Please provide a valid email.</div>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="form-label mb-1">Phone (optional)
                                        <input class="form-control" type="tel" name="phone" pattern="[0-9+()\-\s]{7,}" value="<?php echo htmlspecialchars($old['phone'] ?? ''); ?>">
                                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="form-label mb-1">Subject
                                        <select class="form-select" name="subject" required>
                                            <option value="" disabled <?php echo empty($old['subject']) ? 'selected' : ''; ?>>Choose a subject</option>
                                            <option <?php echo (isset($old['subject']) && $old['subject']==='General Inquiry') ? 'selected' : ''; ?>>General Inquiry</option>
                                            <option <?php echo (isset($old['subject']) && $old['subject']==='Partnership') ? 'selected' : ''; ?>>Partnership</option>
                                            <option <?php echo (isset($old['subject']) && $old['subject']==='Investment') ? 'selected' : ''; ?>>Investment</option>
                                            <option <?php echo (isset($old['subject']) && $old['subject']==='Media') ? 'selected' : ''; ?>>Media</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a subject.</div>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="form-label mb-1">Message
                                        <textarea class="form-control" name="message" rows="5" required><?php echo htmlspecialchars($old['message'] ?? ''); ?></textarea>
                                        <div class="invalid-feedback">Please enter your message.</div>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn--primary mt-1">Submit</button>
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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var successAlert = document.querySelector('.alert.alert-success');
        if (successAlert) {
            setTimeout(function () {
                if (successAlert && successAlert.parentNode) {
                    successAlert.parentNode.removeChild(successAlert);
                }
            }, 5000); // auto-hide after 5 seconds
        }
    });
    </script>
</body>
</html>

