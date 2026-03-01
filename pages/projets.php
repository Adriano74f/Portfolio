<?php
/**
 * pages/projets.php — Projets PPE et personnels
 */
$pageTitle   = 'Projets';
$currentPage = 'projets';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

<main class="page-wrapper">

  <div class="page-header">
    <div class="page-icon">💻</div>
    <h1>Projets réalisés</h1>
    <p>Projets encadrés (PPE) et projets personnels développés durant le BTS</p>
  </div>

  <!-- ── PPE ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🏫</span>Projets Professionnels Encadrés (PPE)</div>

    <div class="projects-grid">

      <!-- PPE 1 — À COMPLÉTER -->
      <article class="project-card">
        <div class="project-top">
          <h3>[[Titre PPE 1]]</h3>
          <span class="project-type-ppe">PPE</span>
        </div>
        <p class="project-desc">
          <!-- 📝 Décris ici le projet : objectif, contexte, ton rôle, ce que tu as développé. -->
          Application web réalisée dans le cadre du BTS permettant de [décrire la fonctionnalité principale].
          Rôle : Développeur principal — conception, développement back-end, tests.
        </p>
        <div class="tech-tags">
          <span class="tech-tag">PHP</span>
          <span class="tech-tag">MySQL</span>
          <span class="tech-tag">HTML/CSS</span>
          <span class="tech-tag">JavaScript</span>
        </div>
        <div class="project-links">
          <a class="btn-sm" href="[[lien_github]]" target="_blank" rel="noopener">GitHub →</a>
          <!-- <a class="btn-sm" href="[[lien_demo]]" target="_blank">Démo</a> -->
        </div>
      </article>

      <!-- PPE 2 — À COMPLÉTER -->
      <article class="project-card">
        <div class="project-top">
          <h3>[[Titre PPE 2]]</h3>
          <span class="project-type-ppe">PPE</span>
        </div>
        <p class="project-desc">
          <!-- 📝 Décris ici le second projet PPE -->
          Projet de gestion [décrire l'application], réalisé en équipe dans le cadre du BTS.
          Rôle : Analyse, modélisation UML, développement des modules [X] et [Y].
        </p>
        <div class="tech-tags">
          <span class="tech-tag">Java</span>
          <span class="tech-tag">SQL</span>
          <span class="tech-tag">UML</span>
        </div>
        <div class="project-links">
          <a class="btn-sm" href="[[lien_github]]" target="_blank" rel="noopener">GitHub →</a>
        </div>
      </article>

      <!-- 📝 Dupliquer ce bloc pour ajouter d'autres PPE -->

    </div>
  </div>

  <!-- ── Projets personnels ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🛠️</span>Projets personnels</div>

    <div class="projects-grid">

      <!-- Portfolio -->
      <article class="project-card">
        <div class="project-top">
          <h3>Portfolio BTS</h3>
          <span class="project-type-perso">Personnel</span>
        </div>
        <p class="project-desc">
          Conception et développement de ce portfolio personnel en PHP/HTML/CSS/JS avec architecture
          multi-pages, navbar responsive, formulaire de contact PHP et animations au scroll.
          Réalisé pour la présentation de l'oral BTS SIO.
        </p>
        <div class="tech-tags">
          <span class="tech-tag">PHP</span>
          <span class="tech-tag">HTML5</span>
          <span class="tech-tag">CSS3</span>
          <span class="tech-tag">JavaScript</span>
        </div>
        <div class="project-links">
          <a class="btn-sm" href="https://github.com/Adriano74f" target="_blank" rel="noopener">GitHub →</a>
        </div>
      </article>

      <!-- 📝 Ajoute ici tes autres projets personnels -->

    </div>
  </div>

  <!-- ── Synthèse ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">📊</span>Bilan des compétences développées</div>
    <p class="muted">
      Ces projets m'ont permis de développer une approche méthodique du développement logiciel :
      analyse des besoins, modélisation, développement itératif, tests et déploiement.
      Ils constituent des preuves concrètes de mes compétences techniques et de ma capacité
      à mener un projet de bout en bout.
    </p>
    <div class="tech-tags" style="margin-top: 12px;">
      <span class="tech-tag">Analyse des besoins</span>
      <span class="tech-tag">Modélisation UML</span>
      <span class="tech-tag">Développement Full-Stack</span>
      <span class="tech-tag">Tests & débogage</span>
      <span class="tech-tag">Versioning Git</span>
      <span class="tech-tag">Documentation</span>
    </div>
  </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
