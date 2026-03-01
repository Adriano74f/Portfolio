<?php
/**
 * pages/stages.php — Expériences en entreprise
 */
$pageTitle   = 'Stages';
$currentPage = 'stages';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

<main class="page-wrapper">

  <div class="page-header">
    <div class="page-icon">🏢</div>
    <h1>Expériences en entreprise</h1>
    <p>Stages effectués durant les 2 années de BTS SIO SLAM</p>
  </div>

  <!-- ── Grille des stages ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">📋</span>Récapitulatif des stages</div>
    <div class="stages-grid">

      <!-- Stage 2 — OCI Informatique -->
      <div class="stage-card">
        <div class="stage-top">
          <h3 class="stage-company">OCI Informatique</h3>
          <span class="badge badge-green">Stage 2</span>
        </div>
        <p class="stage-period">📅 02 juin 2025 — 27 juin 2025 (4 semaines)</p>
        <p class="stage-role">🎯 Technicien maintenance de postes informatiques</p>
        <ul class="stage-tasks">
          <li>Maintenance préventive et curative de postes sous Windows</li>
          <li>Diagnostic et résolution d'incidents matériels et logiciels</li>
          <li>Installation et configuration de systèmes d'exploitation</li>
          <li>Gestion d'inventaire et audit du parc informatique</li>
          <!-- 📝 Complète avec les vraies tâches réalisées chez OCI -->
        </ul>
      </div>

      <!-- Stage 1 — Fnac -->
      <div class="stage-card">
        <div class="stage-top">
          <h3 class="stage-company">Fnac</h3>
          <span class="badge badge-blue">Stage 1</span>
        </div>
        <p class="stage-period">📅 03 juin 2024 — 13 juillet 2024 (6 semaines)</p>
        <p class="stage-role">🎯 SAV / Logistique</p>
        <ul class="stage-tasks">
          <li>Réception et traitement des produits en service après-vente</li>
          <li>Gestion des stocks et de la logistique interne</li>
          <li>Accueil et orientation des clients en magasin</li>
          <li>Utilisation des outils de gestion de caisse et d'inventaire</li>
          <!-- 📝 Complète avec les vraies tâches réalisées à la Fnac -->
        </ul>
      </div>

    </div>
  </div>

  <!-- ── Détail stage 2 ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🔍</span>OCI Informatique — Bilan détaillé</div>

    <div class="info-grid" style="margin-bottom: 20px;">
      <div class="info-block">
        <div class="ib-label">Entreprise</div>
        <p class="ib-value">OCI Informatique</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Durée</div>
        <p class="ib-value">4 semaines</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Secteur</div>
        <p class="ib-value">Maintenance informatique</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Poste</div>
        <p class="ib-value">Technicien de maintenance</p>
      </div>
    </div>

    <p class="muted">
      <!-- 📝 RÉDIGEZ ICI un bilan de votre stage chez OCI Informatique :
           - Qu'avez-vous appris ?
           - Quelles compétences techniques avez-vous développées ?
           - Comment s'est passée votre intégration ?
           - Quels ont été vos apports à l'entreprise ?
           - Quelles difficultés avez-vous rencontrées et comment les avez-vous surmontées ? -->
      Ce stage chez OCI Informatique m'a permis de mettre en pratique les connaissances théoriques
      acquises lors de ma formation en BTS SIO. J'ai pu intervenir sur des postes clients réels,
      diagnostiquer des pannes matérielles et logicielles, et appliquer des procédures de maintenance
      dans un environnement professionnel.
    </p>

    <div class="divider"></div>

    <h3 style="font-size:0.8rem; font-family:var(--font-display); text-transform:uppercase; letter-spacing:0.8px; color:var(--muted); margin-bottom:12px;">
      Compétences mobilisées
    </h3>
    <div class="tech-tags">
      <span class="tech-tag">Maintenance Windows</span>
      <span class="tech-tag">Diagnostic matériel</span>
      <span class="tech-tag">GLPI</span>
      <span class="tech-tag">Active Directory</span>
      <span class="tech-tag">Audit de parc</span>
      <!-- 📝 Modifie selon les vraies compétences utilisées -->
    </div>
  </div>

  <!-- ── Détail stage 1 ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🔍</span>Fnac — Bilan détaillé</div>

    <div class="info-grid" style="margin-bottom: 20px;">
      <div class="info-block">
        <div class="ib-label">Entreprise</div>
        <p class="ib-value">Fnac</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Durée</div>
        <p class="ib-value">6 semaines</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Secteur</div>
        <p class="ib-value">Commerce / Distribution</p>
      </div>
      <div class="info-block">
        <div class="ib-label">Poste</div>
        <p class="ib-value">SAV / Logistique</p>
      </div>
    </div>

    <p class="muted">
      <!-- 📝 Bilan du stage Fnac : qu'avez-vous appris ? Quelles tâches avez-vous réalisées ?
           Comment ce stage vous a-t-il apporté des compétences utiles pour votre BTS ? -->
      Ce premier stage m'a permis de découvrir l'environnement professionnel et de développer
      des compétences transversales essentielles : rigueur, organisation, travail en équipe et
      relation client. Bien que centré sur la logistique, j'ai pu observer et participer aux
      processus liés à la gestion des équipements informatiques en SAV.
    </p>

    <div class="divider"></div>

    <h3 style="font-size:0.8rem; font-family:var(--font-display); text-transform:uppercase; letter-spacing:0.8px; color:var(--muted); margin-bottom:12px;">
      Compétences développées
    </h3>
    <div class="tech-tags">
      <span class="tech-tag">Gestion des stocks</span>
      <span class="tech-tag">Relation client</span>
      <span class="tech-tag">Outils de caisse</span>
      <span class="tech-tag">Travail en équipe</span>
      <span class="tech-tag">Organisation</span>
    </div>
  </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
