<?php
/**
 * pages/certifications.php — Certifications
 */
$pageTitle   = 'Certifications';
$currentPage = 'certifications';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

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
                Dans les métiers du développement et de la cybersécurité, les technologies évoluent
                en permanence. Une certification n'est pas qu'un diplôme de plus — c'est une preuve
                concrète, vérifiable et reconnue par les recruteurs, que l'on maîtrise une technologie
                ou un domaine précis à un niveau donné.
            </p>
            <p class="muted" style="margin-top: 10px;">
                Contrairement à un cours en ligne classique, une certification implique une évaluation
                réelle : examen, projet pratique, ou badge numérique vérifié. Elle démontre une démarche
                proactive d'apprentissage, une capacité à se former en autonomie, et une volonté de rester
                à jour dans un secteur qui ne tolère pas le statu quo.
            </p>

            <div class="patri-grid" style="margin-top: 18px;">

                <div class="patri-block">
                    <div class="patri-icon">💼</div>
                    <h3>Valeur sur le marché</h3>
                    <p>
                        Les recruteurs en IT cherchent des profils certifiés. Une certification comme
                        CompTIA Security+ ou AWS Associate est souvent exigée ou valorisée dans les
                        offres d'emploi en cybersécurité et en développement cloud.
                    </p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🧠</div>
                    <h3>Compétences vérifiées</h3>
                    <p>
                        Se certifier oblige à structurer ses connaissances, combler ses lacunes et
                        prouver sa maîtrise. C'est un processus d'apprentissage bien plus rigoureux
                        qu'un simple tutoriel en ligne.
                    </p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🚀</div>
                    <h3>Accélérateur de carrière</h3>
                    <p>
                        Pour un futur professionnel de la cybersécurité, les certifications permettent
                        d'accéder à des postes plus rapidement, de négocier un meilleur salaire,
                        et de crédibiliser son profil face à des candidats plus expérimentés.
                    </p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🔄</div>
                    <h3>Formation continue</h3>
                    <p>
                        Dans un domaine où une faille zero-day peut émerger n'importe quel jour,
                        se certifier régulièrement est une nécessité professionnelle, pas une option.
                        C'est une habitude que je construis dès maintenant.
                    </p>
                </div>

            </div>
        </div>

        <!-- ── Offre de certifications disponibles ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🌐</span>L'offre de certifications — Développement &amp; Cybersécurité</div>

            <p class="muted" style="margin-bottom: 20px;">
                Tour d'horizon des certifications les plus reconnues dans mes deux domaines de prédilection,
                avec leurs caractéristiques et leur coût.
            </p>

            <!-- Développement -->
            <h3 style="font-family: var(--font-display); font-size: .82rem; font-weight: 700; color: var(--c2); text-transform: uppercase; letter-spacing: .1em; margin-bottom: 12px;">
                &lt;/&gt; Certifications Développement
            </h3>

            <table class="skills-table" style="margin-bottom: 28px;">
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
                    <td class="muted">JavaScript / Algo</td>
                    <td class="muted" style="color: var(--c1);">Gratuit</td>
                    <td><a class="btn-sm" href="https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>Responsive Web Design</td>
                    <td class="muted">freeCodeCamp</td>
                    <td class="muted">HTML / CSS</td>
                    <td class="muted" style="color: var(--c1);">Gratuit</td>
                    <td><a class="btn-sm" href="https://www.freecodecamp.org/learn/2022/responsive-web-design/" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>PHP &amp; MySQL — Certification développeur web</td>
                    <td class="muted">OpenClassrooms</td>
                    <td class="muted">PHP / Back-end</td>
                    <td class="muted" style="color: var(--c4);">~29 €/mois</td>
                    <td><a class="btn-sm" href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>Oracle Java SE — Associate (OCA)</td>
                    <td class="muted">Oracle</td>
                    <td class="muted">Java</td>
                    <td class="muted" style="color: var(--c4);">~245 €</td>
                    <td><a class="btn-sm" href="https://education.oracle.com/java-se-17-developer/pexam_1Z0-829" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>Microsoft Certified: Azure Developer Associate</td>
                    <td class="muted">Microsoft</td>
                    <td class="muted">Cloud / Dev</td>
                    <td class="muted" style="color: var(--c4);">~165 €</td>
                    <td><a class="btn-sm" href="https://learn.microsoft.com/fr-fr/certifications/azure-developer/" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>GitHub Foundations</td>
                    <td class="muted">GitHub</td>
                    <td class="muted">Git / DevOps</td>
                    <td class="muted" style="color: var(--c4);">~99 $</td>
                    <td><a class="btn-sm" href="https://resources.github.com/learn/certifications/" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                </tbody>
            </table>

            <!-- Cybersécurité -->
            <h3 style="font-family: var(--font-display); font-size: .82rem; font-weight: 700; color: var(--c1); text-transform: uppercase; letter-spacing: .1em; margin-bottom: 12px;">
                🔐 Certifications Cybersécurité
            </h3>

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
                    <td class="muted" style="color: var(--c1);">Gratuit</td>
                    <td><a class="btn-sm" href="https://secnumacademie.gouv.fr/" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>Cybersecurity Essentials</td>
                    <td class="muted">Cisco NetAcad</td>
                    <td class="muted">Fondamentaux sécu</td>
                    <td class="muted" style="color: var(--c1);">Gratuit</td>
                    <td><a class="btn-sm" href="https://www.netacad.com/courses/cybersecurity-essentials" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>Google Cybersecurity Certificate</td>
                    <td class="muted">Google / Coursera</td>
                    <td class="muted">Cybersécurité pro</td>
                    <td class="muted" style="color: var(--c4);">~49 €/mois</td>
                    <td><a class="btn-sm" href="https://grow.google/certificates/cybersecurity/" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>CompTIA Security+</td>
                    <td class="muted">CompTIA</td>
                    <td class="muted">Sécurité réseau &amp; systèmes</td>
                    <td class="muted" style="color: var(--c3);">~390 €</td>
                    <td><a class="btn-sm" href="https://www.comptia.org/certifications/security" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>Certified Ethical Hacker (CEH)</td>
                    <td class="muted">EC-Council</td>
                    <td class="muted">Pentest / Ethical Hacking</td>
                    <td class="muted" style="color: var(--c3);">~950 €</td>
                    <td><a class="btn-sm" href="https://www.eccouncil.org/train-certify/certified-ethical-hacker-ceh/" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>TryHackMe — Learning Paths</td>
                    <td class="muted">TryHackMe</td>
                    <td class="muted">Pratique / CTF</td>
                    <td class="muted" style="color: var(--c4);">~14 $/mois</td>
                    <td><a class="btn-sm" href="https://tryhackme.com/paths" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                <tr>
                    <td>eJPT — Junior Penetration Tester</td>
                    <td class="muted">eLearnSecurity</td>
                    <td class="muted">Pentest débutant</td>
                    <td class="muted" style="color: var(--c4);">~200 $</td>
                    <td><a class="btn-sm" href="https://ine.com/certifications/ejpt-certification" target="_blank" rel="noopener">Accéder →</a></td>
                </tr>
                </tbody>
            </table>

            <p class="muted" style="margin-top: 14px; font-size: .75rem; font-family: var(--font-mono);">
                ⚡ Prix indicatifs — susceptibles de varier. Beaucoup de plateformes proposent des réductions étudiantes.
            </p>
        </div>

        <!-- ── Mes certifications obtenues ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🏆</span>Mes certifications obtenues</div>
            <div class="cert-grid">

                <!-- JS -->
                <div class="cert-card">
                    <div class="cert-badge-wrap">🟡</div>
                    <div>
                        <p class="cert-name">Apprenez à programmer avec JavaScript</p>
                        <p class="cert-issuer">OpenClassrooms</p>
                        <p class="cert-date">Démarré le 19 sept. 2025 · Terminé</p>
                    </div>
                    <p class="cert-desc">
                        Bases du langage JavaScript : variables, fonctions, manipulation du DOM,
                        événements et interaction avec les pages web.
                    </p>
                    <span class="cert-status">✔ Cours terminé</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://openclassrooms.com" target="_blank" rel="noopener">OpenClassrooms →</a>
                    </div>
                </div>

                <!-- API REST -->
                <div class="cert-card">
                    <div class="cert-badge-wrap">🔵</div>
                    <div>
                        <p class="cert-name">Adoptez les API REST pour vos projets web</p>
                        <p class="cert-issuer">OpenClassrooms</p>
                        <p class="cert-date">Démarré le 7 nov. 2025 · Terminé</p>
                    </div>
                    <p class="cert-desc">
                        Conception et consommation d'API REST : verbes HTTP, JSON, authentification,
                        documentation et bonnes pratiques. Mis en pratique dans mon projet WeatherQuest.
                    </p>
                    <span class="cert-status">✔ Cours terminé</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://openclassrooms.com" target="_blank" rel="noopener">OpenClassrooms →</a>
                    </div>
                </div>

                <!-- Symfony -->
                <div class="cert-card">
                    <div class="cert-badge-wrap">⚫</div>
                    <div>
                        <p class="cert-name">Testez fonctionnellement votre application PHP Symfony</p>
                        <p class="cert-issuer">OpenClassrooms</p>
                        <p class="cert-date">Démarré le 10 oct. 2025 · Terminé</p>
                    </div>
                    <p class="cert-desc">
                        Tests fonctionnels avec Symfony : mise en place d'une suite de tests, Panther,
                        couverture de code et intégration continue.
                    </p>
                    <span class="cert-status">✔ Cours terminé</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://openclassrooms.com" target="_blank" rel="noopener">OpenClassrooms →</a>
                    </div>
                </div>

                <!-- Credly -->
                <div class="cert-card">
                    <div class="cert-badge-wrap">🎖️</div>
                    <div>
                        <p class="cert-name">Badge(s) Credly</p>
                        <p class="cert-issuer">Credly — Adriano Ferreira Da Silva</p>
                        <p class="cert-date">Voir profil Credly pour le détail</p>
                    </div>
                    <p class="cert-desc">
                        Badges numériques obtenus via la plateforme Credly, attestant de compétences
                        vérifiées dans le domaine informatique.
                    </p>
                    <span class="cert-status">✔ Badge(s) obtenu(s)</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://www.credly.com/users/adriano-ferreira-da-silva" target="_blank" rel="noopener">Voir Credly →</a>
                    </div>
                </div>

                <!-- SecNumAcadémie -->
                <div class="cert-card">
                    <div class="cert-badge-wrap">🔐</div>
                    <div>
                        <p class="cert-name">SecNumAcadémie — ANSSI</p>
                        <p class="cert-issuer">ANSSI — Agence nationale de la sécurité des SI</p>
                        <p class="cert-date">En cours de préparation</p>
                    </div>
                    <p class="cert-desc">
                        Mooc cybersécurité de référence en France : sécurité des réseaux, authentification,
                        cryptographie et gestion des risques.
                    </p>
                    <span class="cert-status in-progress">⏳ En cours</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://secnumacademie.gouv.fr/" target="_blank" rel="noopener">ANSSI →</a>
                    </div>
                </div>

            </div>

            <p class="muted" style="margin-top: 16px; font-size: .73rem; font-family: var(--font-mono);">
                ⚡ Page mise à jour régulièrement au fur et à mesure de l'obtention de nouvelles certifications.
            </p>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>