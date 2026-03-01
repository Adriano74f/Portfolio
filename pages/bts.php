<?php
/**
 * pages/bts.php — Présentation du BTS SIO option SLAM
 */
$pageTitle   = 'BTS SIO — SLAM';
$currentPage = 'bts';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

<main class="page-wrapper">

  <div class="page-header">
    <div class="page-icon">🎓</div>
    <h1>BTS SIO — Option SLAM</h1>
    <p>Services Informatiques aux Organisations · Solutions Logicielles et Applications Métiers</p>
  </div>

  <!-- ── Présentation générale ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">📋</span>Présentation de la formation</div>
    <p class="muted">
      Le BTS Services Informatiques aux Organisations (SIO) est une formation de niveau Bac+2 qui prépare
      aux métiers de l'informatique. L'option <strong style="color:var(--text)">SLAM</strong>
      (Solutions Logicielles et Applications Métiers) est axée sur la conception,
      le développement et le déploiement d'applications informatiques à destination des organisations.
    </p>
    <p class="muted">
      Cette formation alterne entre cours théoriques, travaux pratiques et mises en situation professionnelles
      (PPE — Projets Professionnels Encadrés) qui permettent d'acquérir une expérience concrète du
      développement logiciel et de la gestion de projet.
    </p>
  </div>

  <!-- ── Grille des blocs ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">🔨</span>Contenu de la formation</div>
    <div class="bts-grid">

      <div class="bts-block">
        <h3>💻 Développement logiciel</h3>
        <ul>
          <li>Langages : PHP, Java, Python, HTML5, CSS3, JavaScript</li>
          <li>Conception orientée objet (POO)</li>
          <li>Développement web front-end et back-end</li>
          <li>Développement d'applications desktop (Java, C#)</li>
          <li>Intégration de solutions logicielles</li>
        </ul>
      </div>

      <div class="bts-block">
        <h3>🗃️ Bases de données</h3>
        <ul>
          <li>Modélisation : Merise (MCD, MLD), UML</li>
          <li>Langage SQL : requêtes, jointures, procédures stockées</li>
          <li>Administration MySQL, SQLite</li>
          <li>Conception et optimisation de schémas</li>
        </ul>
      </div>

      <div class="bts-block">
        <h3>🛡️ Cybersécurité & RGPD</h3>
        <ul>
          <li>Sensibilisation à la sécurité informatique</li>
          <li>Bonnes pratiques de développement sécurisé</li>
          <li>Protection des données personnelles (RGPD)</li>
          <li>Gestion des droits et accès</li>
        </ul>
      </div>

      <div class="bts-block">
        <h3>🌐 Infrastructure & Réseaux</h3>
        <ul>
          <li>Architecture client/serveur</li>
          <li>Protocoles réseaux (TCP/IP, HTTP, FTP, SSH)</li>
          <li>Administration système Linux et Windows</li>
          <li>Virtualisation (VirtualBox)</li>
        </ul>
      </div>

      <div class="bts-block">
        <h3>📁 Gestion de projet</h3>
        <ul>
          <li>Méthodes agiles (Scrum, Kanban)</li>
          <li>Versioning avec Git et GitHub</li>
          <li>Documentation technique et fonctionnelle</li>
          <li>Tests unitaires et recettes</li>
        </ul>
      </div>

      <div class="bts-block">
        <h3>🎯 Débouchés</h3>
        <ul>
          <li>Développeur web / mobile</li>
          <li>Intégrateur d'applications</li>
          <li>Analyste programmeur</li>
          <li>Licence Pro / Bachelor Informatique</li>
          <li>École d'ingénieur (Bac+5)</li>
        </ul>
      </div>

    </div>
  </div>

  <!-- ── Épreuves ── -->
  <div class="card">
    <div class="card-title"><span class="ct-icon">📝</span>Épreuves de certification</div>
    <table class="skills-table" role="table">
      <thead>
        <tr>
          <th>Épreuve</th>
          <th>Intitulé</th>
          <th>Format</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>E4</strong></td>
          <td class="muted">Support et mise à disposition de services informatiques</td>
          <td class="muted">Oral — Portfolio</td>
        </tr>
        <tr>
          <td><strong>E5</strong></td>
          <td class="muted">Administration des systèmes et des réseaux</td>
          <td class="muted">Écrit + TP</td>
        </tr>
        <tr>
          <td><strong>E6</strong></td>
          <td class="muted">Cybersécurité des services informatiques</td>
          <td class="muted">Oral — Cas pratique</td>
        </tr>
        <tr>
          <td><strong>PPE</strong></td>
          <td class="muted">Projets Professionnels Encadrés — présentation orale</td>
          <td class="muted">Oral jury</td>
        </tr>
      </tbody>
    </table>
  </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
