<?php
/**
 * index.php — Page d'accueil / Présentation
 */
$pageTitle   = 'Présentation';
$currentPage = 'index';
$depth       = 0;
require_once __DIR__ . '/includes/header.php';
?>

<main class="page-wrapper">

  <!-- ── Hero ── -->
  <div class="card visible" style="padding: 32px;">
    <div class="hero">
      <div class="hero-avatar">
        <img src="img/Photo.png" alt="Photo de profil — Adriano Ferreira Da Silva" />
      </div>
      <div class="hero-content">
        <h1 class="hero-name">
          <span class="accent-dot"></span>Adriano<br>
          <span>Ferreira Da Silva</span>
        </h1>
        <p class="hero-role">BTS SIO 2 — Option SLAM · Lycée Gabriel Fauré</p>

        <div class="hero-chips">
          <span class="chip accent">SLAM</span>
          <span class="chip">Développement Web</span>
          <span class="chip">PHP · MySQL · HTML/CSS</span>
          <span class="chip">Git / GitHub</span>
        </div>

        <div class="hero-links">
          <a class="btn btn-primary" href="img/Ferreira-Da-Silva-Adriano-CV.pdf" target="_blank">
            📄 Télécharger le CV
          </a>
          <a class="btn btn-secondary" href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/" target="_blank" rel="noopener">
            🔗 LinkedIn
          </a>
          <a class="btn btn-secondary" href="https://github.com/Adriano74f" target="_blank" rel="noopener">
            🐙 GitHub
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ── Infos personnelles ── -->
  <div class="card">
    <div class="card-title">
      <span class="ct-icon">ℹ️</span>Informations personnelles
    </div>
    <div class="info-grid">
      <div class="info-block">
        <div class="ib-label">Nom complet</div>
        <p class="ib-value">Adriano Ferreira Da Silva</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Formation</div>
        <p class="ib-value">BTS SIO 2 — Option SLAM</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Établissement</div>
        <p class="ib-value">Lycée Gabriel Fauré</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Localisation</div>
        <!-- 📝 Mets ta ville -->
        <p class="ib-value">Annecy</p>
      </div>
    </div>
  </div>

  <!-- ── À propos ── -->
  <div class="card">
    <div class="card-title">
      <span class="ct-icon">💬</span>À propos de moi
    </div>
    <p class="muted">
      <!-- 📝 RÉDIGE ICI ta présentation personnelle (3 à 5 phrases).
           Qui es-tu ? Pourquoi l'informatique ? Quelles sont tes motivations ?
           Qu'est-ce qui t'a amené vers le BTS SIO SLAM ? -->
      Passionné par le développement logiciel et les nouvelles technologies, j'ai choisi le BTS SIO
      option SLAM afin d'acquérir des compétences solides en conception et développement d'applications.
      Ces deux années m'ont permis de travailler sur des projets concrets, de découvrir le monde
      professionnel au travers de stages enrichissants, et de développer une réelle expertise
      technique et méthodologique.
    </p>
    <p class="muted">
      <!-- 📝 Ajoute une seconde phrase sur tes centres d'intérêt, tes projets futurs, etc. -->
      Sérieux et curieux, j'aspire à poursuivre mon parcours en intégrant une formation supérieure
      en cybersécurité, tout en continuant à monter en compétences sur les technologies web et les
      bonnes pratiques du développement logiciel.
    </p>
  </div>

  <!-- ── Parcours / Timeline ── -->
  <div class="card">
    <div class="card-title">
      <span class="ct-icon">📅</span>Parcours scolaire & professionnel
    </div>
    <div class="timeline">
      <div class="timeline-item">
        <div class="tl-date">2023 — 2025</div>
        <div class="tl-title">BTS SIO option SLAM — Lycée Gabriel Fauré</div>
        <p class="tl-sub">Formation en développement d'applications, bases de données, réseaux et sécurité informatique.</p>
      </div>
      <div class="timeline-item">
        <div class="tl-date">Juin — Juillet 2025</div>
        <div class="tl-title">Stage 2 — OCI Informatique</div>
        <p class="tl-sub">Du 02/06/25 au 27/06/25 — Maintenance de postes informatiques, diagnostic, interventions techniques.</p>
      </div>
      <div class="timeline-item">
        <div class="tl-date">Juin — Juillet 2024</div>
        <div class="tl-title">Stage 1 — Fnac (SAV / Logistique)</div>
        <p class="tl-sub">Du 03/06/24 au 13/07/24 — Découverte du milieu professionnel, service après-vente et logistique.</p>
      </div>
      <!-- 📝 Ajoute ici ton parcours avant le BTS si pertinent (lycée, bac, etc.) -->
    </div>
  </div>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
