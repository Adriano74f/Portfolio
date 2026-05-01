<?php
/**
 * includes/header.php
 * $depth : 0 = racine (index.php), 1 = pages/
 */
$base = str_repeat('../', $depth ?? 0);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Portfolio') ?> — Adriano Ferreira Da Silva</title>
    <link rel="stylesheet" href="<?= $base ?>css/style.css">
    <link rel="icon" href="<?= $base ?>img/favicon.ico" type="image/x-icon">
</head>
<body>

<div id="page-overlay"></div>

<!-- ══════════════ TOP NAVIGATION ══════════════ -->
<nav class="topnav" id="topnav" role="navigation" aria-label="Navigation principale">

    <a href="<?= $base ?>index.php" class="topnav-brand">
        <span class="topnav-brand-dot"></span>
        <span class="topnav-brand-name">Adriano <em>F.D.S.</em></span>
    </a>

    <ul class="topnav-links" role="list">
        <li><a href="<?= $base ?>index.php"                    class="topnav-link <?= ($currentPage==='index')         ? 'active':'' ?>">Présentation</a></li>
        <li><a href="<?= $base ?>pages/competences.php"        class="topnav-link <?= ($currentPage==='competences')   ? 'active':'' ?>">Compétences</a></li>
        <li><a href="<?= $base ?>pages/projets.php"            class="topnav-link <?= ($currentPage==='projets')       ? 'active':'' ?>">Projets</a></li>
        <li><a href="<?= $base ?>pages/stages.php"             class="topnav-link <?= ($currentPage==='stages')        ? 'active':'' ?>">Stages</a></li>
        <li><a href="<?= $base ?>pages/veille.php"             class="topnav-link <?= ($currentPage==='veille')        ? 'active':'' ?>">Veille</a></li>
        <li><a href="<?= $base ?>pages/avenir.php"             class="topnav-link <?= ($currentPage==='avenir')        ? 'active':'' ?>">Projet pro</a></li>
        <li><a href="<?= $base ?>pages/certifications.php"     class="topnav-link <?= ($currentPage==='certifications')? 'active':'' ?>">Certifications</a></li>
        <li><a href="<?= $base ?>pages/contact.php"            class="topnav-link <?= ($currentPage==='contact')       ? 'active':'' ?>">Contact</a></li>
    </ul>

    <div class="topnav-socials">
        <a class="social-btn" href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/" target="_blank" rel="noopener" title="LinkedIn">in</a>
        <a class="social-btn" href="https://github.com/Adriano74f"                                    target="_blank" rel="noopener" title="GitHub">gh</a>
        <a class="social-btn" href="<?= $base ?>img/Ferreira-Da-Silva-Adriano-CV.pdf"                 target="_blank"               title="CV">cv</a>
    </div>

    <button class="menu-btn" id="menuBtn" aria-label="Ouvrir le menu" aria-expanded="false">
        <span></span><span></span><span></span>
    </button>

</nav>

<!-- ══════════════ MOBILE DROPDOWN ══════════════ -->
<div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Menu navigation mobile">
    <a href="<?= $base ?>index.php"                class="mobile-link <?= ($currentPage==='index')         ? 'active':'' ?>">🏠 Présentation</a>
    <a href="<?= $base ?>pages/competences.php"    class="mobile-link <?= ($currentPage==='competences')   ? 'active':'' ?>">⚡ Compétences</a>
    <a href="<?= $base ?>pages/projets.php"        class="mobile-link <?= ($currentPage==='projets')       ? 'active':'' ?>">💻 Projets</a>
    <a href="<?= $base ?>pages/stages.php"         class="mobile-link <?= ($currentPage==='stages')        ? 'active':'' ?>">🏢 Stages</a>
    <a href="<?= $base ?>pages/veille.php"         class="mobile-link <?= ($currentPage==='veille')        ? 'active':'' ?>">📡 Veille</a>
    <a href="<?= $base ?>pages/avenir.php"         class="mobile-link <?= ($currentPage==='avenir')        ? 'active':'' ?>">🎯 Projet pro</a>
    <a href="<?= $base ?>pages/certifications.php" class="mobile-link <?= ($currentPage==='certifications')? 'active':'' ?>">🏅 Certifications</a>
    <a href="<?= $base ?>pages/contact.php"        class="mobile-link <?= ($currentPage==='contact')       ? 'active':'' ?>">✉️ Contact</a>
    <div class="mobile-socials">
        <a class="social-btn" href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/" target="_blank" rel="noopener">in</a>
        <a class="social-btn" href="https://github.com/Adriano74f"                                    target="_blank" rel="noopener">gh</a>
        <a class="social-btn" href="<?= $base ?>img/Ferreira-Da-Silva-Adriano-CV.pdf"                 target="_blank">cv</a>
    </div>
</div>

<div class="layout">
    <div class="main-content">