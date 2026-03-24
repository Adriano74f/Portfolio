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
                        <li>Langages : PHP, Java, Python, HTML5, CSS3, JavaScript, TypeScript</li>
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
                    <h3>🛡️ Cybersécurité &amp; RGPD</h3>
                    <ul>
                        <li>Sensibilisation à la sécurité informatique</li>
                        <li>Simulations d'attaques (MITM, injection SQL, DDoS)</li>
                        <li>Bonnes pratiques de développement sécurisé</li>
                        <li>Protection des données personnelles (RGPD)</li>
                        <li>Gestion des droits et accès</li>
                    </ul>
                </div>

                <div class="bts-block">
                    <h3>🌐 Infrastructure &amp; Réseaux</h3>
                    <ul>
                        <li>Architecture client/serveur</li>
                        <li>Protocoles réseaux (TCP/IP, HTTP, FTP, SSH)</li>
                        <li>Administration système Linux et Windows</li>
                        <li>Virtualisation (VirtualBox)</li>
                        <li>Active Directory, GPO, VPN</li>
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

        <!-- ── Projets illustrant la filière ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🗂️</span>Projets réalisés illustrant la filière SLAM</div>
            <p class="muted" style="margin-bottom: 16px;">
                Voici une sélection de projets concrets réalisés durant le BTS qui illustrent les différentes
                compétences de la filière SLAM. Les documentations associées sont disponibles au téléchargement.
            </p>

            <div class="projects-grid">

                <!-- GSB -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>GSB — Gestion des rapports de visites</h3>
                        <span class="project-type-ppe">PPE · Développement</span>
                    </div>
                    <p class="project-desc">
                        Application web MVC complète pour le laboratoire fictif Galaxy Swiss Bourdin.
                        Illustre la conception de bases de données, le développement back-end structuré
                        et la modélisation UML.
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
                        <!-- <a class="btn-sm" href="../assets/docs/gsb-documentation.pdf" target="_blank">📄 Documentation</a> -->
                    </div>
                </article>

                <!-- 2FA -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>Authentification 2FA</h3>
                        <span class="project-type-ppe">PPE · Sécurité</span>
                    </div>
                    <p class="project-desc">
                        Implémentation d'une authentification double facteur en PHP.
                        Illustre les compétences en sécurité applicative, gestion de sessions
                        et bonnes pratiques de développement sécurisé.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Sécurité web</span>
                        <span class="tech-tag">TOTP</span>
                        <span class="tech-tag">CSRF</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/2FA" target="_blank" rel="noopener">GitHub →</a>
                        <!-- <a class="btn-sm" href="../assets/docs/2fa-documentation.pdf" target="_blank">📄 Documentation</a> -->
                    </div>
                </article>

                <!-- WeatherQuest -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>WeatherQuest — Application météo</h3>
                        <span class="project-type-ppe">PPE · Mobile &amp; API</span>
                    </div>
                    <p class="project-desc">
                        Application Android Java consommant une API REST météo.
                        Illustre l'intégration d'API tierces, le développement mobile
                        et la gestion des flux de données JSON.
                    </p>
                    <div class="tech-tags">
                        <span class="tech-tag">Java</span>
                        <span class="tech-tag">Android</span>
                        <span class="tech-tag">API REST</span>
                        <span class="tech-tag">JSON</span>
                    </div>
                    <div class="project-links">
                        <a class="btn-sm" href="https://github.com/Adriano74f/WeatherQuest" target="_blank" rel="noopener">GitHub →</a>
                        <!-- <a class="btn-sm" href="../assets/docs/weatherquest-documentation.pdf" target="_blank">📄 Documentation</a> -->
                    </div>
                </article>

                <!-- Forum Instagram -->
                <article class="project-card">
                    <div class="project-top">
                        <h3>Forum style Instagram</h3>
                        <span class="project-type-perso">Personnel · Full-Stack</span>
                    </div>
                    <p class="project-desc">
                        Forum web complet avec publication de posts, commentaires, gestion de profils
                        et authentification. Illustre le développement full-stack, la gestion de fichiers
                        et la sécurité des formulaires.
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

            </div>

            <p class="muted" style="margin-top: 16px; font-size: 0.8rem;">
                💡 Les documentations techniques (cahier des charges, MCD, diagrammes UML) peuvent être
                fournies sur demande lors de la présentation orale.
            </p>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>