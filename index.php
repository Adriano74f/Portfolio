<?php
/**
 * PORTFOLIO BTS SIO SLAM — Adriano Ferreira Da Silva
 * index.php — Page principale du portfolio
 */

session_start();

// Récupérer et vider les messages flash (formulaire de contact)
$formSuccess = $_SESSION['form_success'] ?? null;
$formError   = $_SESSION['form_error']   ?? null;
$prevNom     = $_SESSION['form_nom']     ?? '';
$prevEmail   = $_SESSION['form_email']   ?? '';
$prevMsg     = $_SESSION['form_msg']     ?? '';

unset(
    $_SESSION['form_success'],
    $_SESSION['form_error'],
    $_SESSION['form_nom'],
    $_SESSION['form_email'],
    $_SESSION['form_msg']
);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adriano Ferreira Da Silva — Portfolio BTS SIO SLAM</title>
  <meta name="description" content="Portfolio de Adriano Ferreira Da Silva — BTS SIO Option SLAM. Projets, stages, compétences, veille technologique." />

  <!-- CSS Séparé -->
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <div class="wrap">

    <!-- ===================================================
         SIDEBAR
         =================================================== -->
    <aside class="sidebar" aria-label="Navigation latérale">

      <div class="avatar-wrap">
        <img src="img/Photo.jpg" alt="Photo de profil — Adriano Ferreira Da Silva" />
      </div>

      <div class="sidebar-identity">
        <h1><span class="accent-dot"></span>Adriano Ferreira Da Silva</h1>
        <p class="role">BTS SIO — Option SLAM<br>Classe : BTS SIO 2</p>
      </div>

      <div class="divider"></div>

      <nav class="nav" id="navlinks" aria-label="Sections du portfolio">
        <a href="#presentation"><span class="nav-icon">👤</span> Présentation</a>
        <a href="#bts"><span class="nav-icon">🎓</span> BTS SIO / SLAM</a>
        <a href="#stages"><span class="nav-icon">🏢</span> Stages</a>
        <a href="#projets"><span class="nav-icon">💻</span> Projets</a>
        <a href="#veille"><span class="nav-icon">📡</span> Veille</a>
        <a href="#patrimoine"><span class="nav-icon">🗄️</span> Patrimoine</a>
        <a href="#competences"><span class="nav-icon">⚡</span> Compétences</a>
        <a href="#contact"><span class="nav-icon">✉️</span> Contact</a>
      </nav>

      <div class="divider"></div>

      <div class="sidebar-links">
        <a class="sidebar-link"
           href="img/Ferreira-Da-Silva-Adriano-CV.pdf"
           target="_blank"
           aria-label="Télécharger mon CV">
          <span class="link-icon">📄</span>
          Télécharger le CV
        </a>
        <a class="sidebar-link"
           href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/"
           target="_blank"
           rel="noopener"
           aria-label="Mon profil LinkedIn">
          <span class="link-icon">🔗</span>
          LinkedIn
        </a>
        <a class="sidebar-link"
           href="https://github.com/Adriano74f"
           target="_blank"
           rel="noopener"
           aria-label="Mon profil GitHub">
          <span class="link-icon">🐙</span>
          GitHub
        </a>
      </div>

    </aside>

    <!-- ===================================================
         CONTENU PRINCIPAL
         =================================================== -->
    <main class="content">

      <!-- ──────────────────────────────────────────────── -->
      <!-- 1. PRÉSENTATION                                  -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="presentation" class="card" tabindex="0" aria-labelledby="titre-presentation">

        <div class="section-header">
          <div class="section-icon">👤</div>
          <h2 id="titre-presentation">Présentation</h2>
        </div>

        <div class="presentation-grid">
          <div class="info-block">
            <div class="label">Nom complet</div>
            <p class="value">Adriano Ferreira Da Silva</p>
          </div>
          <div class="info-block">
            <div class="label">Formation</div>
            <p class="value">BTS SIO 2 — Option SLAM</p>
          </div>
          <div class="info-block">
            <div class="label">Établissement</div>
            <p class="value">Lycée Gabriel Fauré</p>
          </div>
          <div class="info-block">
            <div class="label">Spécialité</div>
            <p class="value">Solutions Logicielles & Appli. Métiers</p>
          </div>
        </div>

        <p class="muted" style="margin-bottom: 18px;">
          <!-- 📝 À COMPLÉTER : Écris ici 3 à 5 phrases de présentation personnelle.
               Qui es-tu ? Qu'est-ce qui t'a amené à choisir l'informatique ?
               Quelles sont tes motivations et tes ambitions ? -->
          Passionné par le développement logiciel et les nouvelles technologies,
          j'ai choisi le BTS SIO option SLAM afin d'acquérir des compétences solides
          en conception et développement d'applications. Ces deux années m'ont permis
          de travailler sur des projets concrets, de découvrir le monde professionnel
          au travers de stages enrichissants, et de développer une réelle expertise
          technique et méthodologique.
        </p>

        <h3 style="font-size:0.85rem; color:var(--muted); text-transform:uppercase; letter-spacing:1px; margin-bottom:12px; font-family:var(--font-display);">
          Parcours
        </h3>

        <div class="timeline">
          <div class="timeline-item">
            <div class="timeline-date">2023 — 2025</div>
            <div class="timeline-title">BTS SIO option SLAM — Lycée Gabriel Fauré</div>
            <p class="timeline-sub">Formation en développement d'applications, bases de données, réseaux et sécurité.</p>
          </div>
          <div class="timeline-item">
            <div class="timeline-date">Juin — Juillet 2024</div>
            <div class="timeline-title">Stage 1 — Fnac (SAV / Logistique)</div>
            <p class="timeline-sub">Du 03/06/24 au 13/07/24 — Découverte du milieu professionnel et du service logistique.</p>
          </div>
          <div class="timeline-item">
            <div class="timeline-date">Juin 2025</div>
            <div class="timeline-title">Stage 2 — OCI Informatique (Maintenance de postes)</div>
            <p class="timeline-sub">Du 02/06/25 au 27/06/25 — Maintenance de postes informatiques, interventions techniques, audit.</p>
          </div>
        </div>

      </section>

      <!-- ──────────────────────────────────────────────── -->
      <!-- 2. BTS SIO / OPTION SLAM                        -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="bts" class="card" tabindex="0" aria-labelledby="titre-bts">

        <div class="section-header">
          <div class="section-icon">🎓</div>
          <h2 id="titre-bts">BTS SIO — Option SLAM</h2>
        </div>

        <p class="muted">
          Le BTS Services Informatiques aux Organisations (SIO) forme aux métiers du développement
          logiciel et de l'administration des systèmes informatiques. L'option
          <strong style="color:var(--text);">SLAM</strong> — Solutions Logicielles et Applications Métiers —
          est centrée sur la conception, le développement et le déploiement d'applications.
        </p>

        <div class="bts-grid">
          <div class="bts-block">
            <h3>🔨 Compétences développées</h3>
            <ul>
              <li>Conception et développement d'applications web et desktop</li>
              <li>Modélisation de bases de données (MCD, SQL)</li>
              <li>Langages : PHP, Python, Java, HTML/CSS/JS</li>
              <li>Méthodes de conception (UML, Merise)</li>
              <li>Tests, débogage et documentation</li>
              <li>Versioning avec Git / GitHub</li>
            </ul>
          </div>
          <div class="bts-block">
            <h3>📚 Matières principales</h3>
            <ul>
              <li>Développement web et mobile</li>
              <li>Bases de données et administration SQL</li>
              <li>Cybersécurité et protection des données (RGPD)</li>
              <li>Infrastructure et réseaux</li>
              <li>Gestion de projet et support aux utilisateurs</li>
              <li>Communication et expression professionnelle</li>
            </ul>
          </div>
          <div class="bts-block">
            <h3>🎯 Débouchés métiers</h3>
            <ul>
              <li>Développeur web / mobile</li>
              <li>Intégrateur d'applications</li>
              <li>Technicien support applicatif</li>
              <li>Analyste programmeur</li>
              <li>Poursuite en Licence Pro / Bachelor / École d'ingénieur</li>
            </ul>
          </div>
          <div class="bts-block">
            <h3>📋 Épreuves de certification</h3>
            <ul>
              <li>E4 — Support et mise à disposition de services informatiques</li>
              <li>E5 — Administration des systèmes et des réseaux</li>
              <li>E6 — Cybersécurité des services informatiques</li>
              <li>Oral professionnel sur le portfolio (PPE)</li>
            </ul>
          </div>
        </div>

      </section>

      <!-- ──────────────────────────────────────────────── -->
      <!-- 3. STAGES                                        -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="stages" class="card" tabindex="0" aria-labelledby="titre-stages">

        <div class="section-header">
          <div class="section-icon">🏢</div>
          <h2 id="titre-stages">Expériences en entreprise</h2>
        </div>

        <div class="stages-grid">

          <!-- Stage 1 -->
          <div class="stage-card">
            <div class="stage-header">
              <h3 class="stage-company">OCI Informatique</h3>
              <span class="stage-badge">Stage 2</span>
            </div>
            <p class="stage-period">📅 02 juin 2025 — 27 juin 2025</p>
            <p class="stage-role">Technicien maintenance de postes informatiques</p>
            <ul class="stage-tasks">
              <li>Maintenance préventive et curative de postes Windows</li>
              <li>Diagnostic et résolution d'incidents matériels et logiciels</li>
              <li>Installation et configuration de systèmes d'exploitation</li>
              <li>Gestion d'inventaire et audit du parc informatique</li>
              <!-- 📝 Ajoute ici d'autres tâches réalisées lors de ce stage -->
            </ul>
          </div>

          <!-- Stage 2 -->
          <div class="stage-card">
            <div class="stage-header">
              <h3 class="stage-company">Fnac</h3>
              <span class="stage-badge">Stage 1</span>
            </div>
            <p class="stage-period">📅 03 juin 2024 — 13 juillet 2024</p>
            <p class="stage-role">SAV / Logistique</p>
            <ul class="stage-tasks">
              <li>Réception et traitement des produits en SAV</li>
              <li>Gestion des stocks et de la logistique interne</li>
              <li>Accueil et orientation des clients</li>
              <li>Utilisation des outils de gestion de caisse et d'inventaire</li>
              <!-- 📝 Ajoute ici d'autres tâches réalisées lors de ce stage -->
            </ul>
          </div>

        </div>

        <!-- 📝 Bilan de stage (facultatif mais valorisant pour l'oral) -->
        <p class="muted" style="margin-top:16px;">
          Ces deux stages m'ont permis de confronter les connaissances théoriques acquises
          en cours avec la réalité du terrain. Le stage chez OCI Informatique m'a
          particulièrement initié aux bonnes pratiques de maintenance informatique
          et à la rigueur nécessaire dans un environnement professionnel.
        </p>

      </section>

      <!-- ──────────────────────────────────────────────── -->
      <!-- 4. PROJETS (PPE + Personnels)                   -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="projets" class="card" tabindex="0" aria-labelledby="titre-projets">

        <div class="section-header">
          <div class="section-icon">💻</div>
          <h2 id="titre-projets">Projets réalisés</h2>
        </div>

        <p class="muted" style="margin-bottom: 18px;">
          Projets réalisés dans le cadre du BTS (PPE) et en autonomie.
          Chaque projet a contribué au développement de mes compétences techniques et méthodologiques.
        </p>

        <div class="projects-grid">

          <!-- Projet 1 — PPE -->
          <article class="project-card">
            <div class="project-card-header">
              <h3>[[Titre projet PPE 1]]</h3>
              <span class="project-type">PPE</span>
            </div>
            <p class="project-desc">
              <!-- 📝 Décris ici le projet : objectif, contexte, ce que tu as fait -->
              Application web développée dans le cadre du BTS permettant [décrire la fonctionnalité principale].
            </p>
            <div class="project-techs">
              <span class="tech-tag">PHP</span>
              <span class="tech-tag">MySQL</span>
              <span class="tech-tag">HTML/CSS</span>
              <span class="tech-tag">JavaScript</span>
            </div>
            <div class="project-links">
              <a class="btn-link" href="[[lien_github]]" target="_blank" rel="noopener">GitHub →</a>
              <!-- <a class="btn-link" href="[[lien_demo]]" target="_blank">Démo</a> -->
            </div>
          </article>

          <!-- Projet 2 — PPE -->
          <article class="project-card">
            <div class="project-card-header">
              <h3>[[Titre projet PPE 2]]</h3>
              <span class="project-type">PPE</span>
            </div>
            <p class="project-desc">
              <!-- 📝 Décris ici le second projet PPE -->
              Projet de gestion [décrire l'application], réalisé en équipe dans le cadre du BTS.
            </p>
            <div class="project-techs">
              <span class="tech-tag">Java</span>
              <span class="tech-tag">SQL</span>
              <span class="tech-tag">UML</span>
            </div>
            <div class="project-links">
              <a class="btn-link" href="[[lien_github]]" target="_blank" rel="noopener">GitHub →</a>
            </div>
          </article>

          <!-- Projet Personnel -->
          <article class="project-card">
            <div class="project-card-header">
              <h3>Portfolio BTS</h3>
              <span class="project-type perso">Personnel</span>
            </div>
            <p class="project-desc">
              Conception et développement de ce portfolio personnel en PHP/HTML/CSS/JS
              pour présenter mon parcours, mes compétences et mes projets lors de l'oral du BTS SIO.
            </p>
            <div class="project-techs">
              <span class="tech-tag">PHP</span>
              <span class="tech-tag">HTML5</span>
              <span class="tech-tag">CSS3</span>
              <span class="tech-tag">JavaScript</span>
            </div>
            <div class="project-links">
              <a class="btn-link" href="https://github.com/Adriano74f" target="_blank" rel="noopener">GitHub →</a>
            </div>
          </article>

          <!-- 📝 Ajoute d'autres projets ici en dupliquant un bloc <article class="project-card"> -->

        </div>

      </section>

      <!-- ──────────────────────────────────────────────── -->
      <!-- 5. VEILLE TECHNOLOGIQUE                         -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="veille" class="card" tabindex="0" aria-labelledby="titre-veille">

        <div class="section-header">
          <div class="section-icon">📡</div>
          <h2 id="titre-veille">Veille technologique</h2>
        </div>

        <div class="veille-topic">
          <span class="veille-topic-icon">🤖</span>
          <div class="veille-topic-text">
            <h3><!-- 📝 Sujet de veille --> Intelligence Artificielle & Automatisation du développement</h3>
            <p>Thème suivi depuis septembre 2024 — Impact sur les pratiques SLAM et le développement logiciel</p>
          </div>
        </div>

        <p class="muted">
          <!-- 📝 Rédige ici 4 à 6 phrases résumant ta veille : qu'as-tu observé ?
               Quelles sont les évolutions majeures ? Comment cela impacte-t-il le métier de développeur ?
               Quels outils/langages/frameworks ont évolué ? -->
          L'intelligence artificielle transforme en profondeur le secteur du développement logiciel.
          Des outils comme GitHub Copilot ou ChatGPT permettent désormais aux développeurs d'automatiser
          la génération de code, de détecter des bugs et d'accélérer la documentation.
          Cette évolution ne remplace pas les développeurs mais modifie leurs compétences requises :
          la capacité à prompt et à valider du code généré devient essentielle.
          La montée en puissance des LLMs (Large Language Models) ouvre également de nouvelles perspectives
          en matière de cybersécurité et de tests automatisés.
        </p>

        <div>
          <p class="muted" style="margin-bottom: 8px; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; font-family: var(--font-display); font-weight: 600;">Outils de veille utilisés</p>
          <div class="veille-tools">
            <span class="tool-chip">Google Alerts</span>
            <span class="tool-chip">Feedly</span>
            <span class="tool-chip">Dev.to</span>
            <span class="tool-chip">GitHub Trending</span>
            <span class="tool-chip">LinkedIn</span>
            <!-- 📝 Ajoute tes outils réels -->
          </div>
        </div>

        <div style="margin-top: 16px;">
          <p class="muted" style="margin-bottom: 10px; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; font-family: var(--font-display); font-weight: 600;">Articles et sources suivis</p>
          <div class="veille-articles">

            <div class="article-item">
              <div class="article-num">01</div>
              <div class="article-content">
                <h4><!-- 📝 Titre article 1 -->[Titre article 1]</h4>
                <p><!-- 📝 Source + date --> Source — Date de parution</p>
              </div>
              <a class="btn-link" href="#" target="_blank" rel="noopener">Lire →</a>
            </div>

            <div class="article-item">
              <div class="article-num">02</div>
              <div class="article-content">
                <h4>[Titre article 2]</h4>
                <p>Source — Date de parution</p>
              </div>
              <a class="btn-link" href="#" target="_blank" rel="noopener">Lire →</a>
            </div>

            <div class="article-item">
              <div class="article-num">03</div>
              <div class="article-content">
                <h4>[Titre article 3]</h4>
                <p>Source — Date de parution</p>
              </div>
              <a class="btn-link" href="#" target="_blank" rel="noopener">Lire →</a>
            </div>

            <!-- 📝 Ajoute autant d'articles que nécessaire -->

          </div>
        </div>

      </section>

      <!-- ──────────────────────────────────────────────── -->
      <!-- 6. GESTION DU PATRIMOINE INFORMATIQUE           -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="patrimoine" class="card" tabindex="0" aria-labelledby="titre-patrimoine">

        <div class="section-header">
          <div class="section-icon">🗄️</div>
          <h2 id="titre-patrimoine">Gestion du patrimoine informatique</h2>
        </div>

        <p class="muted" style="margin-bottom: 16px;">
          La gestion du patrimoine informatique regroupe l'ensemble des activités liées
          à l'inventaire, la maintenance, la mise à jour et la sécurisation des équipements
          et logiciels d'une organisation.
        </p>

        <div class="patrimoine-grid">

          <div class="patri-block">
            <div class="patri-icon">📦</div>
            <h3>Inventaire</h3>
            <p>
              Utilisation de GLPI pour la gestion et le suivi du parc informatique.
              Méthode d'audit des postes, recueil d'informations matérielles et logicielles.
              <!-- 📝 Complète avec tes expériences réelles chez OCI ou en TP -->
            </p>
          </div>

          <div class="patri-block">
            <div class="patri-icon">🔧</div>
            <h3>Maintenance</h3>
            <p>
              Procédures de maintenance préventive (mises à jour OS et logiciels)
              et curative (diagnostic de pannes matérielles et logicielles).
              Application lors du stage chez OCI Informatique.
            </p>
          </div>

          <div class="patri-block">
            <div class="patri-icon">🛡️</div>
            <h3>Sécurisation</h3>
            <p>
              Mise en place de politiques de mots de passe, gestion des droits utilisateurs,
              configuration de pare-feu de base, et sensibilisation aux bonnes pratiques RGPD.
            </p>
          </div>

          <div class="patri-block">
            <div class="patri-icon">💾</div>
            <h3>Sauvegarde & Continuité</h3>
            <p>
              Stratégies de sauvegarde (règle 3-2-1), gestion des restaurations,
              plans de reprise d'activité basiques. <!-- 📝 Complète avec tes pratiques -->
            </p>
          </div>

        </div>

      </section>

      <!-- ──────────────────────────────────────────────── -->
      <!-- 7. COMPÉTENCES                                  -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="competences" class="card" tabindex="0" aria-labelledby="titre-competences">

        <div class="section-header">
          <div class="section-icon">⚡</div>
          <h2 id="titre-competences">Compétences</h2>
        </div>

        <div class="skills-categories">
          <div class="skill-category">
            <h3>🌐 Développement Web</h3>
            <div class="skill-tags">
              <span class="skill-tag good">HTML5</span>
              <span class="skill-tag good">CSS3</span>
              <span class="skill-tag good">PHP</span>
              <span class="skill-tag">JavaScript</span>
              <span class="skill-tag">Bootstrap</span>
            </div>
          </div>
          <div class="skill-category">
            <h3>🗃️ Bases de données</h3>
            <div class="skill-tags">
              <span class="skill-tag good">MySQL</span>
              <span class="skill-tag">SQL Server</span>
              <span class="skill-tag">phpMyAdmin</span>
            </div>
          </div>
          <div class="skill-category">
            <h3>💻 Langages</h3>
            <div class="skill-tags">
              <span class="skill-tag good">PHP</span>
              <span class="skill-tag">Python</span>
              <span class="skill-tag">Java</span>
              <span class="skill-tag">C#</span>
            </div>
          </div>
          <div class="skill-category">
            <h3>🛠️ Outils & Méthodes</h3>
            <div class="skill-tags">
              <span class="skill-tag good">Git / GitHub</span>
              <span class="skill-tag good">PhpStorm</span>
              <span class="skill-tag">VS Code</span>
              <span class="skill-tag">UML / Merise</span>
              <span class="skill-tag">GLPI</span>
            </div>
          </div>
        </div>

        <h3 style="font-size:0.75rem; color:var(--muted); text-transform:uppercase; letter-spacing:1px; margin-bottom:12px; font-family:var(--font-display);">Tableau synthèse</h3>

        <table class="skills-table" role="table" aria-label="Tableau des compétences">
          <thead>
            <tr>
              <th>Compétence</th>
              <th>Niveau</th>
              <th>Expérience</th>
              <th>Démontrable</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>HTML / CSS</td>
              <td><span class="level-badge inter">Intermédiaire</span></td>
              <td class="muted">BTS, projets, portfolio</td>
              <td class="tick-yes">✔</td>
            </tr>
            <tr>
              <td>PHP / MySQL</td>
              <td><span class="level-badge inter">Intermédiaire</span></td>
              <td class="muted">BTS, PPE, projets perso</td>
              <td class="tick-yes">✔</td>
            </tr>
            <tr>
              <td>JavaScript</td>
              <td><span class="level-badge debut">Débutant</span></td>
              <td class="muted">Notions en cours et projets</td>
              <td class="tick-yes">✔</td>
            </tr>
            <tr>
              <td>Python</td>
              <td><span class="level-badge debut">Débutant</span></td>
              <td class="muted">Initiation en cours BTS</td>
              <td class="tick-no">✗</td>
            </tr>
            <tr>
              <td>Java</td>
              <td><span class="level-badge debut">Débutant</span></td>
              <td class="muted">PPE Java, cours</td>
              <td class="tick-yes">✔</td>
            </tr>
            <tr>
              <td>Git / GitHub</td>
              <td><span class="level-badge inter">Intermédiaire</span></td>
              <td class="muted">Tous les projets BTS</td>
              <td class="tick-yes">✔</td>
            </tr>
            <tr>
              <td>SQL / MySQL</td>
              <td><span class="level-badge inter">Intermédiaire</span></td>
              <td class="muted">PPE, exercices, projets</td>
              <td class="tick-yes">✔</td>
            </tr>
            <tr>
              <td>Maintenance PC</td>
              <td><span class="level-badge inter">Intermédiaire</span></td>
              <td class="muted">Stage OCI Informatique</td>
              <td class="tick-yes">✔</td>
            </tr>
            <!-- 📝 Ajoute ou modifie les compétences selon ta réalité -->
          </tbody>
        </table>

      </section>

      <!-- ──────────────────────────────────────────────── -->
      <!-- 8. CONTACT                                      -->
      <!-- ──────────────────────────────────────────────── -->
      <section id="contact" class="card" tabindex="0" aria-labelledby="titre-contact">

        <div class="section-header">
          <div class="section-icon">✉️</div>
          <h2 id="titre-contact">Contact</h2>
        </div>

        <!-- Messages flash PHP -->
        <?php if ($formSuccess): ?>
          <div class="form-success" role="alert">
            <span>✅</span>
            <?= htmlspecialchars($formSuccess) ?>
          </div>
        <?php elseif ($formError): ?>
          <div class="form-error" role="alert">
            <span>⚠️</span>
            <?= htmlspecialchars($formError) ?>
          </div>
        <?php endif; ?>

        <div class="contact-grid">

          <!-- Infos de contact -->
          <div class="contact-info">
            <div class="contact-item">
              <span class="ci-icon">📧</span>
              <a href="mailto:adriano.ferreiradasilva74@gmail.com" style="color:var(--text)">
                adriano.ferreiradasilva74@gmail.com
              </a>
            </div>
            <div class="contact-item">
              <span class="ci-icon">📱</span>
              <span>07 69 49 34 74</span>
            </div>
            <div class="contact-item">
              <span class="ci-icon">🔗</span>
              <a href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/" target="_blank" rel="noopener">
                LinkedIn — Adriano Ferreira Da Silva
              </a>
            </div>
            <div class="contact-item">
              <span class="ci-icon">🐙</span>
              <a href="https://github.com/Adriano74f" target="_blank" rel="noopener">
                GitHub — Adriano74f
              </a>
            </div>
            <div class="contact-item">
              <span class="ci-icon">📄</span>
              <a href="img/Ferreira-Da-Silva-Adriano-CV.pdf" target="_blank">
                Télécharger le CV (PDF)
              </a>
            </div>
          </div>

          <!-- Formulaire de contact -->
          <form class="contact-form" id="contactForm" action="php/contact.php" method="POST" novalidate>

            <div class="form-group">
              <label for="nom">Nom complet</label>
              <input
                type="text"
                id="nom"
                name="nom"
                required
                placeholder="Prénom NOM"
                value="<?= htmlspecialchars($prevNom) ?>"
                autocomplete="name"
              />
            </div>

            <div class="form-group">
              <label for="email">Adresse e-mail</label>
              <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="exemple@mail.com"
                value="<?= htmlspecialchars($prevEmail) ?>"
                autocomplete="email"
              />
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea
                id="message"
                name="message"
                required
                placeholder="Bonjour, je vous contacte au sujet de..."
                rows="5"
              ><?= htmlspecialchars($prevMsg) ?></textarea>
            </div>

            <button type="submit" class="btn-submit">Envoyer le message →</button>

          </form>

        </div>

      </section>

    </main>
  </div>

  <!-- JS Séparé — chargé en fin de body pour de meilleures performances -->
  <script src="js/main.js"></script>

</body>
</html>
