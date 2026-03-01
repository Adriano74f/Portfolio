<?php
/**
 * pages/patrimoine.php — Gestion du patrimoine informatique
 */
$pageTitle   = 'Patrimoine informatique';
$currentPage = 'patrimoine';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

<main class="page-wrapper">

  <div class="page-header">
    <div class="page-icon">🗄️</div>
    <h1>Gestion du patrimoine informatique</h1>
    <p>Inventaire, maintenance, sécurisation et continuité du parc informatique</p>
  </div>

  <!-- ── Intro ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">📋</span>Définition et enjeux</div>
    <p class="muted">
      La gestion du patrimoine informatique désigne l'ensemble des activités permettant à une
      organisation de maîtriser ses ressources informatiques tout au long de leur cycle de vie :
      acquisition, déploiement, maintenance, mise à jour et retrait.
    </p>
    <p class="muted">
      Dans le cadre du BTS SIO et de mes stages, j'ai eu l'occasion d'appliquer ces notions
      en situation réelle, notamment lors de mon stage chez OCI Informatique.
    </p>
  </div>

  <!-- ── Grille 4 blocs ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🔧</span>Domaines couverts</div>
    <div class="patri-grid">

      <div class="patri-block">
        <div class="patri-icon">📦</div>
        <h3>Inventaire</h3>
        <p>
          Utilisation de GLPI pour le recensement et le suivi du parc informatique.
          Collecte des informations matérielles (CPU, RAM, stockage) et logicielles
          (OS, licences). <!-- 📝 Complète avec tes expériences concrètes -->
        </p>
      </div>

      <div class="patri-block">
        <div class="patri-icon">🔧</div>
        <h3>Maintenance</h3>
        <p>
          Procédures de maintenance préventive (mises à jour OS et logiciels, nettoyage)
          et curative (diagnostic de pannes, remplacement de composants).
          Appliqué en stage chez OCI Informatique.
        </p>
      </div>

      <div class="patri-block">
        <div class="patri-icon">🛡️</div>
        <h3>Sécurisation</h3>
        <p>
          Mise en place de politiques de mots de passe robustes, gestion des droits
          utilisateurs (principe du moindre privilège), configuration pare-feu de base,
          sensibilisation RGPD et chiffrement des données sensibles.
        </p>
      </div>

      <div class="patri-block">
        <div class="patri-icon">💾</div>
        <h3>Sauvegarde & Continuité</h3>
        <p>
          Application de la règle 3-2-1 (3 copies, 2 supports différents, 1 hors site).
          Procédures de restauration. Plans de reprise d'activité basiques.
          <!-- 📝 Ajoute tes pratiques concrètes -->
        </p>
      </div>

    </div>
  </div>

  <!-- ── Expérience terrain ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🏢</span>Application en entreprise — OCI Informatique</div>
    <p class="muted">
      <!-- 📝 Décris ici en détail ce que tu as fait chez OCI Informatique en matière de gestion du parc :
           - Quels outils as-tu utilisés (GLPI, tableur, autre) ?
           - As-tu réalisé un inventaire ? Sur combien de postes ?
           - Quelles procédures de maintenance as-tu appliquées ?
           - As-tu rencontré des pannes ? Comment les as-tu résolues ? -->
      Lors de mon stage chez OCI Informatique, j'ai participé à la gestion du parc informatique
      de plusieurs clients. J'ai notamment réalisé des interventions de maintenance sur des
      postes Windows, appliqué des procédures de mise à jour et participé à l'audit du parc
      à l'aide des outils mis à disposition.
    </p>

    <div class="divider"></div>

    <h3 style="font-size:0.8rem; font-family:var(--font-display); text-transform:uppercase; letter-spacing:0.8px; color:var(--muted); margin-bottom:12px;">
      Outils et technologies utilisés
    </h3>
    <div class="tech-tags">
      <span class="tech-tag">GLPI</span>
      <span class="tech-tag">Windows 10/11</span>
      <span class="tech-tag">Active Directory</span>
      <span class="tech-tag">Audit matériel</span>
      <!-- 📝 Modifie selon les vrais outils -->
    </div>
  </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
