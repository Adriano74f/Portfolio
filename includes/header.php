<?php
/**
 * includes/header.php
 * En-tête partagé entre toutes les pages (navbar + ouverture du <body>)
 *
 * Utilisation :
 *   $pageTitle   = "Titre de la page";  // Requis avant l'include
 *   $currentPage = "presentation";      // Clé de la page active
 *   require_once __DIR__ . '/../includes/header.php';
 */

// Profondeur du fichier appelant par rapport à la racine
// Les pages dans /pages/ ont depth=1, index.php depth=0
$depth = $depth ?? 0;
$root  = str_repeat('../', $depth);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle ?? 'Portfolio') ?> — Adriano Ferreira Da Silva</title>
  <meta name="description" content="Portfolio BTS SIO SLAM d'Adriano Ferreira Da Silva — Lycée Gabriel Fauré" />
  <link rel="stylesheet" href="<?= $root ?>css/style.css" />
</head>
<body>

<?php
// Définition des onglets de navigation
$navItems = [
  'index'        => ['label' => 'Présentation', 'icon' => '👤', 'href' => $root . 'index.php'],
  'bts'          => ['label' => 'BTS SIO',      'icon' => '🎓', 'href' => $root . 'pages/bts.php'],
  'stages'       => ['label' => 'Stages',        'icon' => '🏢', 'href' => $root . 'pages/stages.php'],
  'projets'      => ['label' => 'Projets',       'icon' => '💻', 'href' => $root . 'pages/projets.php'],
  'competences'  => ['label' => 'Compétences',   'icon' => '⚡', 'href' => $root . 'pages/competences.php'],
  'veille'       => ['label' => 'Veille',        'icon' => '📡', 'href' => $root . 'pages/veille.php'],
  'avenir'       => ['label' => 'Avenir',        'icon' => '🎯', 'href' => $root . 'pages/avenir.php'],
  'contact'      => ['label' => 'Contact',       'icon' => '✉️', 'href' => $root . 'pages/contact.php'],
];
?>

<!-- ========================================================
     NAVBAR
     ======================================================== -->
<header>
  <nav class="navbar" aria-label="Navigation principale">
    <div class="navbar-inner">

      <!-- Brand -->
      <a class="navbar-brand" href="<?= $root ?>index.php" aria-label="Accueil">
        <div class="navbar-avatar">
          <img src="<?= $root ?>img/Photo.png" alt="Adriano Ferreira Da Silva" />
        </div>
        <div>
          <span class="navbar-name">Adriano Ferreira Da Silva</span>
          <span class="navbar-role">BTS SIO — SLAM</span>
        </div>
      </a>

      <!-- Liens desktop -->
      <ul class="navbar-links" role="list">
        <?php foreach ($navItems as $key => $item): ?>
          <li>
            <a href="<?= htmlspecialchars($item['href']) ?>"
               <?= ($currentPage ?? '') === $key ? 'class="active" aria-current="page"' : '' ?>>
              <span class="nav-icon" aria-hidden="true"><?= $item['icon'] ?></span>
              <?= htmlspecialchars($item['label']) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Bouton hamburger mobile -->
      <button class="navbar-toggle"
              id="navToggle"
              aria-label="Ouvrir le menu"
              aria-expanded="false"
              aria-controls="navMobile">☰</button>

    </div>
  </nav>

  <!-- Menu mobile -->
  <div class="navbar-mobile" id="navMobile" role="dialog" aria-label="Menu mobile">
    <?php foreach ($navItems as $key => $item): ?>
      <a href="<?= htmlspecialchars($item['href']) ?>"
         <?= ($currentPage ?? '') === $key ? 'class="active" aria-current="page"' : '' ?>>
        <span aria-hidden="true"><?= $item['icon'] ?></span>
        <?= htmlspecialchars($item['label']) ?>
      </a>
    <?php endforeach; ?>
  </div>
</header>
