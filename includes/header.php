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

<div class="layout">

    <!-- ══════════════════════════════
         SIDEBAR
    ══════════════════════════════ -->
    <aside class="sidebar" id="sidebar" role="navigation" aria-label="Navigation principale">

        <!-- Identité -->
        <div class="sidebar-identity">
            <div class="avatar-wrap">
                <img src="<?= $base ?>img/Photo.png"
                     alt="Photo de profil Adriano Ferreira Da Silva"
                     onerror="this.style.display='none'">
                <div class="avatar-ring"></div>
            </div>
            <p class="sidebar-name">Adriano<br>Ferreira Da Silva</p>
            <p class="sidebar-role">BTS SIO · SLAM</p>
            <div class="status-badge">
                <span class="status-dot"></span>
                Disponible
            </div>
        </div>

        <!-- Navigation -->
        <nav class="sidebar-nav">

            <p class="nav-section-label">// Navigation</p>

            <a href="<?= $base ?>index.php"
               class="nav-link <?= ($currentPage === 'index') ? 'active' : '' ?>">
                <span class="nav-icon">🏠</span> Présentation
            </a>

            <a href="<?= $base ?>pages/bts.php"
               class="nav-link <?= ($currentPage === 'bts') ? 'active' : '' ?>">
                <span class="nav-icon">🎓</span> BTS SIO — SLAM
            </a>

            <a href="<?= $base ?>pages/competences.php"
               class="nav-link <?= ($currentPage === 'competences') ? 'active' : '' ?>">
                <span class="nav-icon">⚡</span> Compétences
            </a>

            <a href="<?= $base ?>pages/projets.php"
               class="nav-link <?= ($currentPage === 'projets') ? 'active' : '' ?>">
                <span class="nav-icon">💻</span> Projets
            </a>

            <a href="<?= $base ?>pages/stages.php"
               class="nav-link <?= ($currentPage === 'stages') ? 'active' : '' ?>">
                <span class="nav-icon">🏢</span> Stages
            </a>

            <a href="<?= $base ?>pages/patrimoine.php"
               class="nav-link <?= ($currentPage === 'patrimoine') ? 'active' : '' ?>">
                <span class="nav-icon">🗄️</span> Patrimoine
            </a>

            <a href="<?= $base ?>pages/veille.php"
               class="nav-link <?= ($currentPage === 'veille') ? 'active' : '' ?>">
                <span class="nav-icon">📡</span> Veille
            </a>

            <a href="<?= $base ?>pages/certifications.php"
               class="nav-link <?= ($currentPage === 'certifications') ? 'active' : '' ?>">
                <span class="nav-icon">🏅</span> Certifications
            </a>

            <a href="<?= $base ?>pages/avenir.php"
               class="nav-link <?= ($currentPage === 'avenir') ? 'active' : '' ?>">
                <span class="nav-icon">🎯</span> Projet pro
            </a>

            <a href="<?= $base ?>pages/contact.php"
               class="nav-link <?= ($currentPage === 'contact') ? 'active' : '' ?>">
                <span class="nav-icon">✉️</span> Contact
            </a>

        </nav>

        <!-- Footer sidebar -->
        <div class="sidebar-footer">
            <div class="sidebar-socials">
                <a class="social-btn"
                   href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/"
                   target="_blank" rel="noopener" title="LinkedIn">in</a>
                <a class="social-btn"
                   href="https://github.com/Adriano74f"
                   target="_blank" rel="noopener" title="GitHub">gh</a>
                <a class="social-btn"
                   href="<?= $base ?>img/Ferreira-Da-Silva-Adriano-CV.pdf"
                   target="_blank" title="Télécharger le CV">cv</a>
            </div>
        </div>

    </aside>

    <!-- Overlay mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ══════════════════════════════
         CONTENU PRINCIPAL
    ══════════════════════════════ -->
    <div class="main-content">

        <!-- Topbar mobile uniquement -->
        <div class="topbar">
            <span class="topbar-brand">Adriano F.D.S.</span>
            <button class="menu-btn" id="menuBtn" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
        </div>

<?php /* Les divs .main-content et .layout sont fermés dans footer.php */ ?>