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

                <!-- PPE — GSB Gestion des rapports de visites -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>GSB — Gestion des rapports de visites</h3>
                        <span class="project-type-ppe">PPE</span>
                    </div>
                    <p class="project-desc">
                        Application web de gestion des rapports de visites médicales pour le laboratoire fictif
                        Galaxy Swiss Bourdin. Conception de la base de données, développement back-end MVC
                        et interface d'administration. Projet fil rouge du BTS SIO.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">TypeScript</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">MVC</span>
                        <span class="tech-tag">UML</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/GSB-Gestion-rapports-visites" target="_blank" rel="noopener">GitHub →</a>
                    </div>
                </article>

                <!-- PPE — WeatherQuest -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>WeatherQuest — Application météo Android</h3>
                        <span class="project-type-ppe">PPE</span>
                    </div>
                    <p class="project-desc">
                        Application Android développée en Java consommant une API météo externe (OpenWeatherMap).
                        Affichage des conditions météo en temps réel, gestion des erreurs réseau
                        et interface utilisateur adaptée aux mobiles.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">Java</span>
                        <span class="tech-tag">Android</span>
                        <span class="tech-tag">API REST</span>
                        <span class="tech-tag">JSON</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/WeatherQuest" target="_blank" rel="noopener">GitHub →</a>
                    </div>
                </article>

                <!-- PPE — DiiageCustomerApp -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>DiiageCustomerApp — Gestion de clients</h3>
                        <span class="project-type-ppe">PPE</span>
                    </div>
                    <p class="project-desc">
                        Application de gestion de clients développée en C# dans le cadre d'un projet collaboratif.
                        Interface graphique WPF, opérations CRUD complètes et connexion à une base de données
                        relationnelle SQL.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">C#</span>
                        <span class="tech-tag">.NET</span>
                        <span class="tech-tag">WPF</span>
                        <span class="tech-tag">SQL</span>
                        <span class="tech-tag">UML</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/DiiageCustomerApp" target="_blank" rel="noopener">GitHub →</a>
                    </div>
                </article>

            </div>
        </div>

        <!-- ── Projets personnels ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🛠️</span>Projets personnels</div>

            <div class="projects-grid">

                <!-- Projet 2FA -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>Authentification 2FA</h3>
                        <span class="project-type-perso">Personnel</span>
                    </div>
                    <p class="project-desc">
                        Implémentation d'une authentification à double facteur en PHP avec plusieurs couches
                        de sécurité : TOTP, protection contre les attaques brute-force, gestion sécurisée
                        des sessions et protection CSRF.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Sécurité web</span>
                        <span class="tech-tag">TOTP</span>
                        <span class="tech-tag">Sessions</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/2FA" target="_blank" rel="noopener">GitHub →</a>
                    </div>
                </article>

                <!-- NoteProPratique -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>NoteProPratique</h3>
                        <span class="project-type-perso">Personnel</span>
                    </div>
                    <p class="project-desc">
                        Application web de prise de notes professionnelle développée en PHP.
                        Interface responsive, gestion des comptes utilisateurs et stockage
                        en base de données MySQL.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">CSS3</span>
                        <span class="tech-tag">Responsive</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/NoteProPratique" target="_blank" rel="noopener">GitHub →</a>
                    </div>
                </article>

                <!-- Forum-Instagram -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>Forum style Instagram</h3>
                        <span class="project-type-perso">Personnel</span>
                    </div>
                    <p class="project-desc">
                        Forum web inspiré d'Instagram : publication de posts avec images, système de commentaires,
                        gestion des profils utilisateurs et authentification sécurisée.
                        Projet complet full-stack en PHP.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">HTML/CSS</span>
                        <span class="tech-tag">Upload fichiers</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/Forum-Instagram" target="_blank" rel="noopener">GitHub →</a>
                    </div>
                </article>

                <!-- Portfolio -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>Portfolio BTS</h3>
                        <span class="project-type-perso">Personnel</span>
                    </div>
                    <p class="project-desc">
                        Conception et développement de ce portfolio en PHP/HTML/CSS/JS avec architecture
                        multi-pages, navbar responsive, formulaire de contact et animations au scroll.
                        Réalisé pour la présentation de l'oral BTS SIO.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">HTML5</span>
                        <span class="tech-tag">CSS3</span>
                        <span class="tech-tag">JavaScript</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/Portfolio" target="_blank" rel="noopener">GitHub →</a>
                    </div>
                </article>

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
                <span class="tech-tag">Sécurité applicative</span>
                <span class="tech-tag">Tests &amp; débogage</span>
                <span class="tech-tag">Versioning Git</span>
                <span class="tech-tag">API REST</span>
                <span class="tech-tag">Documentation</span>
            </div>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>