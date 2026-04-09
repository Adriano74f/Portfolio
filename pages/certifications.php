<?php
/**
 * pages/certifications.php — Certifications
 */
$pageTitle   = 'Certifications';
$currentPage = 'certifications';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>
    <style>
        @media (max-width: 768px) {
            .page-wrapper { padding: 16px 12px 56px !important; max-width: 100% !important; overflow-x: hidden !important; }
            .card { padding: 14px 12px !important; }
            .page-header h1 { font-size: 1.5rem !important; }
            .patri-grid,
            .cert-grid { grid-template-columns: 1fr !important; }
            .skills-table-wrap { overflow-x: auto !important; -webkit-overflow-scrolling: touch !important; width: 100% !important; display: block !important; }
            .skills-table { min-width: 460px !important; font-size: .72rem !important; }
            .skills-table th, .skills-table td { padding: 6px 8px !important; }
        }
        @media (max-width: 400px) {
            .page-wrapper { padding: 12px 10px 50px !important; }
        }
    </style>
<?php /* rien */ ?>

    <main class="page-wrapper">

        <div class="page-header">
            <div class="page-icon">🏅</div>
            <h1 data-text="Certifications">Certifications</h1>
            <p>Compétences validées · Développement &amp; Cybersécurité</p>
        </div>

        <!-- ── Pourquoi se certifier ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🎯</span>Pourquoi se certifier dans nos métiers ?</div>

            <p class="muted">
                Dans les métiers du développement et de la cybersécurité, les technologies évoluent en permanence.
                Une certification est une preuve concrète, vérifiable et reconnue par les recruteurs,
                que l'on maîtrise une technologie ou un domaine précis à un niveau donné.
            </p>
            <p class="muted" style="margin-top:10px;">
                Contrairement à un cours en ligne classique, une certification implique une évaluation réelle :
                examen, projet pratique ou badge numérique vérifié. Elle démontre une démarche proactive
                d'apprentissage, une capacité à se former en autonomie et une volonté de rester à jour
                dans un secteur qui ne tolère pas le statu quo.
            </p>

            <div class="patri-grid" style="margin-top:18px;">

                <div class="patri-block">
                    <div class="patri-icon">💼</div>
                    <h3>Valeur sur le marché</h3>
                    <p>Les recruteurs en IT cherchent des profils certifiés. Une certification comme CompTIA Security+ ou Google Cybersecurity est souvent exigée ou valorisée dans les offres en cybersécurité et développement.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🧠</div>
                    <h3>Compétences vérifiées</h3>
                    <p>Se certifier oblige à structurer ses connaissances, combler ses lacunes et prouver sa maîtrise. C'est un processus bien plus rigoureux qu'un simple tutoriel en ligne.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🚀</div>
                    <h3>Accélérateur de carrière</h3>
                    <p>Pour un futur professionnel de la cybersécurité, les certifications permettent d'accéder à des postes plus rapidement, de négocier un meilleur salaire et de crédibiliser son profil.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🔄</div>
                    <h3>Formation continue</h3>
                    <p>Dans un domaine où une faille zero-day peut émerger n'importe quel jour, se certifier régulièrement est une nécessité professionnelle. C'est une habitude que je construis dès maintenant.</p>
                </div>

            </div>
        </div>

        <!-- ── Offre de certifications ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🌐</span>L'offre de certifications disponibles</div>

            <p class="muted" style="margin-bottom:20px;">
                Tour d'horizon des certifications les plus reconnues dans mes deux domaines de prédilection,
                avec leurs caractéristiques et leur coût indicatif.
            </p>

            <!-- Développement -->
            <h3 style="font-family:var(--font-display);font-size:.82rem;font-weight:700;color:var(--c2);text-transform:uppercase;letter-spacing:.1em;margin-bottom:12px;">
                &lt;/&gt; Développement logiciel
            </h3>

            <div class="skills-table-wrap">
                <table class="skills-table" style="margin-bottom:26px;">
                    <thead>
                    <tr>
                        <th>Certification</th>
                        <th>Organisme</th>
                        <th>Domaine</th>
                        <th>Prix</th>
                        <th>Lien</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>JavaScript Algorithms &amp; Data Structures</td>
                        <td class="muted">freeCodeCamp</td>
                        <td class="muted">JavaScript</td>
                        <td style="color:var(--c1);font-family:var(--font-mono);">Gratuit</td>
                        <td><a class="btn-sm" href="https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>Responsive Web Design</td>
                        <td class="muted">freeCodeCamp</td>
                        <td class="muted">HTML / CSS</td>
                        <td style="color:var(--c1);font-family:var(--font-mono);">Gratuit</td>
                        <td><a class="btn-sm" href="https://www.freecodecamp.org/learn/2022/responsive-web-design/" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>PHP &amp; MySQL — Développeur web</td>
                        <td class="muted">OpenClassrooms</td>
                        <td class="muted">PHP / Back-end</td>
                        <td style="color:var(--c4);font-family:var(--font-mono);">~29 €/mois</td>
                        <td><a class="btn-sm" href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>Oracle Java SE Developer</td>
                        <td class="muted">Oracle</td>
                        <td class="muted">Java</td>
                        <td style="color:var(--c4);font-family:var(--font-mono);">~245 €</td>
                        <td><a class="btn-sm" href="https://education.oracle.com/java-se-17-developer/pexam_1Z0-829" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>GitHub Foundations</td>
                        <td class="muted">GitHub</td>
                        <td class="muted">Git / DevOps</td>
                        <td style="color:var(--c4);font-family:var(--font-mono);">~99 $</td>
                        <td><a class="btn-sm" href="https://resources.github.com/learn/certifications/" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>Azure Developer Associate</td>
                        <td class="muted">Microsoft</td>
                        <td class="muted">Cloud / Dev</td>
                        <td style="color:var(--c4);font-family:var(--font-mono);">~165 €</td>
                        <td><a class="btn-sm" href="https://learn.microsoft.com/fr-fr/certifications/azure-developer/" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Cybersécurité -->
            <h3 style="font-family:var(--font-display);font-size:.82rem;font-weight:700;color:var(--c1);text-transform:uppercase;letter-spacing:.1em;margin-bottom:12px;margin-top:8px;">
                🔐 Cybersécurité
            </h3>

            <div class="skills-table-wrap">
                <table class="skills-table">
                    <thead>
                    <tr>
                        <th>Certification</th>
                        <th>Organisme</th>
                        <th>Domaine</th>
                        <th>Prix</th>
                        <th>Lien</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>SecNumAcadémie</td>
                        <td class="muted">ANSSI</td>
                        <td class="muted">Cybersécurité générale</td>
                        <td style="color:var(--c1);font-family:var(--font-mono);">Gratuit</td>
                        <td><a class="btn-sm" href="https://secnumacademie.gouv.fr/" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>Cybersecurity Essentials</td>
                        <td class="muted">Cisco NetAcad</td>
                        <td class="muted">Fondamentaux sécu</td>
                        <td style="color:var(--c1);font-family:var(--font-mono);">Gratuit</td>
                        <td><a class="btn-sm" href="https://www.netacad.com/courses/cybersecurity-essentials" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>Google Cybersecurity Certificate</td>
                        <td class="muted">Google / Coursera</td>
                        <td class="muted">Cybersécurité pro</td>
                        <td style="color:var(--c4);font-family:var(--font-mono);">~49 €/mois</td>
                        <td><a class="btn-sm" href="https://grow.google/certificates/cybersecurity/" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>CompTIA Security+</td>
                        <td class="muted">CompTIA</td>
                        <td class="muted">Sécurité réseau &amp; systèmes</td>
                        <td style="color:var(--c3);font-family:var(--font-mono);">~390 €</td>
                        <td><a class="btn-sm" href="https://www.comptia.org/certifications/security" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>TryHackMe — Learning Paths</td>
                        <td class="muted">TryHackMe</td>
                        <td class="muted">Pratique / CTF</td>
                        <td style="color:var(--c4);font-family:var(--font-mono);">~14 $/mois</td>
                        <td><a class="btn-sm" href="https://tryhackme.com/paths" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>eJPT — Junior Penetration Tester</td>
                        <td class="muted">eLearnSecurity</td>
                        <td class="muted">Pentest débutant</td>
                        <td style="color:var(--c4);font-family:var(--font-mono);">~200 $</td>
                        <td><a class="btn-sm" href="https://ine.com/certifications/ejpt-certification" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    <tr>
                        <td>Certified Ethical Hacker (CEH)</td>
                        <td class="muted">EC-Council</td>
                        <td class="muted">Pentest avancé</td>
                        <td style="color:var(--c3);font-family:var(--font-mono);">~950 €</td>
                        <td><a class="btn-sm" href="https://www.eccouncil.org/train-certify/certified-ethical-hacker-ceh/" target="_blank" rel="noopener">Accéder →</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <p class="muted" style="margin-top:14px;font-size:.72rem;font-family:var(--font-mono);">
                ⚡ Prix indicatifs susceptibles de varier. Des réductions étudiantes sont souvent disponibles.
            </p>
        </div>

        <!-- ── Mes certifications obtenues ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🏆</span>Mes certifications obtenues</div>
            <div class="cert-grid">

                <div class="cert-card">
                    <div class="cert-badge-wrap">🟡</div>
                    <p class="cert-name">Apprenez à programmer avec JavaScript</p>
                    <p class="cert-issuer">OpenClassrooms</p>
                    <p class="cert-date">Démarré le 19 sept. 2025 · Terminé</p>
                    <p class="cert-desc">Bases du langage JavaScript : variables, fonctions, manipulation du DOM, événements et interaction avec les pages web.</p>
                    <span class="cert-status">✔ Cours terminé</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://openclassrooms.com" target="_blank" rel="noopener">OpenClassrooms →</a>
                    </div>
                </div>

                <div class="cert-card">
                    <div class="cert-badge-wrap">🔵</div>
                    <p class="cert-name">Adoptez les API REST pour vos projets web</p>
                    <p class="cert-issuer">OpenClassrooms</p>
                    <p class="cert-date">Démarré le 7 nov. 2025 · Terminé</p>
                    <p class="cert-desc">Conception et consommation d'API REST : verbes HTTP, JSON, authentification et bonnes pratiques. Appliqué dans WeatherQuest.</p>
                    <span class="cert-status">✔ Cours terminé</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://openclassrooms.com" target="_blank" rel="noopener">OpenClassrooms →</a>
                    </div>
                </div>

                <div class="cert-card">
                    <div class="cert-badge-wrap">⚫</div>
                    <p class="cert-name">Testez fonctionnellement votre application PHP Symfony</p>
                    <p class="cert-issuer">OpenClassrooms</p>
                    <p class="cert-date">Démarré le 10 oct. 2025 · Terminé</p>
                    <p class="cert-desc">Tests fonctionnels avec Symfony : suite de tests, Panther, couverture de code et intégration continue.</p>
                    <span class="cert-status">✔ Cours terminé</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://openclassrooms.com" target="_blank" rel="noopener">OpenClassrooms →</a>
                    </div>
                </div>

                <div class="cert-card">
                    <div class="cert-badge-wrap">🎖️</div>
                    <p class="cert-name">Badge(s) Credly</p>
                    <p class="cert-issuer">Credly — Adriano Ferreira Da Silva</p>
                    <p class="cert-date">Voir profil Credly pour le détail</p>
                    <p class="cert-desc">Badges numériques obtenus via Credly, attestant de compétences vérifiées dans le domaine informatique.</p>
                    <span class="cert-status">✔ Badge(s) obtenu(s)</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://www.credly.com/users/adriano-ferreira-da-silva" target="_blank" rel="noopener">Voir Credly →</a>
                    </div>
                </div>

                <div class="cert-card">
                    <div class="cert-badge-wrap">🔐</div>
                    <p class="cert-name">SecNumAcadémie — ANSSI</p>
                    <p class="cert-issuer">ANSSI</p>
                    <p class="cert-date">En cours de préparation</p>
                    <p class="cert-desc">Mooc cybersécurité de référence en France : réseaux, authentification, cryptographie et gestion des risques.</p>
                    <span class="cert-status in-progress">⏳ En cours</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://secnumacademie.gouv.fr/" target="_blank" rel="noopener">ANSSI →</a>
                    </div>
                </div>

            </div>

            <p class="muted" style="margin-top:16px;font-size:.72rem;font-family:var(--font-mono);">
                ⚡ Page mise à jour régulièrement au fur et à mesure de l'obtention de nouvelles certifications.
            </p>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>