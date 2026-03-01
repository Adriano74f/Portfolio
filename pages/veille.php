<?php
/**
 * pages/veille.php — Veille technologique
 */
$pageTitle   = 'Veille technologique';
$currentPage = 'veille';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

<main class="page-wrapper">

  <div class="page-header">
    <div class="page-icon">📡</div>
    <h1>Veille technologique</h1>
    <p>Suivi des évolutions du secteur informatique durant les 2 ans de BTS</p>
  </div>

  <!-- ── Sujet de veille ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🔭</span>Sujet de veille</div>
    <div class="veille-topic-box">
      <span class="vt-icon">🤖</span>
      <div>
        <!-- 📝 Remplace par ton vrai sujet de veille -->
        <p class="vt-title">Intelligence Artificielle & Automatisation du développement</p>
        <p class="vt-sub">Sujet suivi depuis septembre 2024 — Impact sur les pratiques SLAM</p>
      </div>
    </div>

    <p class="muted">
      <!-- 📝 RÉDIGE ICI ton résumé de veille (4 à 6 phrases) :
           - Quelles évolutions as-tu observées sur ce sujet ?
           - Quels sont les faits marquants ?
           - Quel impact cela a sur le métier de développeur / technicien informatique ?
           - Quelles sources as-tu utilisées ? -->
      L'intelligence artificielle transforme en profondeur le secteur du développement logiciel.
      Des outils comme GitHub Copilot ou ChatGPT permettent désormais aux développeurs d'automatiser
      la génération de code, de détecter des bugs et d'accélérer la documentation.
      Cette évolution ne remplace pas les développeurs mais modifie les compétences requises :
      la capacité à prompt et à valider du code généré devient essentielle.
      La montée en puissance des LLMs ouvre également de nouvelles perspectives en matière de
      cybersécurité et de tests automatisés.
    </p>

    <div>
      <p style="font-size:0.72rem; text-transform:uppercase; letter-spacing:1px; color:var(--muted); font-family:var(--font-display); font-weight:700; margin-bottom:8px;">
        Outils de veille utilisés
      </p>
      <div class="tool-chips">
        <!-- 📝 Remplace par tes vrais outils -->
        <span class="tool-chip">Google Alerts</span>
        <span class="tool-chip">Feedly</span>
        <span class="tool-chip">Dev.to</span>
        <span class="tool-chip">GitHub Trending</span>
        <span class="tool-chip">LinkedIn</span>
      </div>
    </div>
  </div>

  <!-- ── Articles ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">📰</span>Articles et sources suivis</div>
    <div class="veille-articles">

      <div class="article-row">
        <div class="article-num">01</div>
        <div class="article-body">
          <!-- 📝 Remplace par ton vrai titre et ta source -->
          <p class="article-title">[[Titre de l'article 1]]</p>
          <p class="article-meta">[[Source]] — [[Date de parution]]</p>
        </div>
        <a class="btn-sm" href="#" target="_blank" rel="noopener">Lire →</a>
      </div>

      <div class="article-row">
        <div class="article-num">02</div>
        <div class="article-body">
          <p class="article-title">[[Titre de l'article 2]]</p>
          <p class="article-meta">[[Source]] — [[Date de parution]]</p>
        </div>
        <a class="btn-sm" href="#" target="_blank" rel="noopener">Lire →</a>
      </div>

      <div class="article-row">
        <div class="article-num">03</div>
        <div class="article-body">
          <p class="article-title">[[Titre de l'article 3]]</p>
          <p class="article-meta">[[Source]] — [[Date de parution]]</p>
        </div>
        <a class="btn-sm" href="#" target="_blank" rel="noopener">Lire →</a>
      </div>

      <!-- 📝 Ajoute autant d'articles que tu souhaites en dupliquant un bloc .article-row -->

    </div>
  </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
