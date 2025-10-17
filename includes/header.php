<?php
// Compute site base URL from the first path segment, e.g. "/cashworth/" on localhost
$scriptPath = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
$segments = explode('/', trim($scriptPath, '/'));
$firstSegment = isset($segments[0]) ? $segments[0] : '';
$base_url = '/' . ($firstSegment !== '' ? $firstSegment . '/' : '');
?>
<header class="header" id="top">
    <div class="container header__inner">
        <a href="<?php echo $base_url; ?>index.php#top" class="logo">
            <img src="<?php echo $base_url; ?>assets/img/logo.png" alt="Cash Worth Group" class="logo__img">
            <!-- <span class="logo__text">Cash Worth Group</span> -->
        </a>
        <nav class="nav" id="nav">
            <a href="<?php echo $base_url; ?>about.php" class="nav__link">About</a>
            <a href="<?php echo $base_url; ?>divisions.php" class="nav__link">Divisions</a>
            <a href="<?php echo $base_url; ?>team.php" class="nav__link">Team</a>
            <a href="<?php echo $base_url; ?>news.php" class="nav__link">News</a>
            <a href="<?php echo $base_url; ?>contact.php" class="nav__link nav__cta">Contact</a>
        </nav>
        <button class="nav-toggle" id="navToggle" aria-label="Open Menu" aria-expanded="false">
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
        </button>
    </div>
</header>

