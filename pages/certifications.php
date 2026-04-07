<?php
/**
 * pages/certifications.php — Certifications & Épreuve orale
 */
$pageTitle   = 'Certifications';
$currentPage = 'certifications';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

    <main class="page-wrapper">

        <div class="page-header">
            <div class="page-icon">🏅</div>
            <h1>Certifications</h1>
            <p>Épreuve orale de certification — BTS SIO · Préparation &amp; résultats</p>
        </div>

        <!-- ── Déroulement de l'épreuve ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🎙️</span>Déroulement de l'épreuve orale</div>

            <div class="oral-box">
                <div class="oral-phase">
                    <div class="oral-phase-label">Phase 1</div>
                    <div class="oral-phase-title">Exposé — 10 min max</div>
                    <p class="oral-phase-sub">
                        Présentation à l'aide des supports de mon choix : mon besoin en compétences complémentaires,
                        ma démarche d'acquisition, la ou les certifications passées et leurs apports dans mon
                        parcours de professionnalisation.
                    </p>
                </div>
                <div class="oral-phase">
                    <div class="oral-phase-label">Phase 2</div>
                    <div class="oral-phase-title">Entretien — 10 min max</div>
                    <p class="oral-phase-sub">
                        Questions de la commission sur la démarche, les choix de certifications,
                        les résultats obtenus et le lien avec le projet professionnel.
                    </p>
                </div>
            </div>
        </div>

        <!-- ── Critères d'évaluation ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">📋</span>Critères d'évaluation de la commission</div>
            <div class="eval-grid">

                <div class="eval-block">
                    <h4>🎯 Pertinence des besoins</h4>
                    <p>
                        La commission évalue la pertinence des besoins exprimés pour étayer mon parcours
                        de professionnalisation vers la cybersécurité.
                    </p>
                </div>

                <div class="eval-block">
                    <h4>🗺️ Connaissance de l'offre</h4>
                    <p>
                        Démontrer que j'ai exploré et compris l'offre de certifications disponibles dans
                        mon domaine de spécialisation.
                    </p>
                </div>

                <div class="eval-block">
                    <h4>🔗 Adéquation avec le projet pro</h4>
                    <p>
                        Montrer que les certifications choisies sont cohérentes avec mon projet professionnel :
                        Bachelor Cybersécurité puis métiers de la sécurité informatique.
                    </p>
                </div>

                <div class="eval-block">
                    <h4>📚 Démarche de préparation</h4>
                    <p>
                        Expliquer comment j'ai préparé chaque certification : plateformes utilisées,
                        temps investi, ressources mobilisées.
                    </p>
                </div>

                <div class="eval-block">
                    <h4>✅ Résultats obtenus</h4>
                    <p>
                        Présenter les résultats concrets : badges obtenus, scores, compétences validées
                        et apports dans ma montée en compétences.
                    </p>
                </div>

            </div>
        </div>

        <!-- ── Mes certifications obtenues ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🏆</span>Certifications obtenues</div>
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

                <!-- Credly placeholder -->
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

                <!-- Certification à venir -->
                <div class="cert-card">
                    <div class="cert-badge-wrap">🔐</div>
                    <div>
                        <p class="cert-name">SecNumAcadémie — ANSSI</p>
                        <p class="cert-issuer">ANSSI — Agence nationale de la sécurité des SI</p>
                        <p class="cert-date">En cours de préparation</p>
                    </div>
                    <p class="cert-desc">
                        Mooc cybersécurité de référence en France : sécurité des réseaux, authentification,
                        cryptographie et gestion des risques. Complémentaire à mon projet de Bachelor.
                    </p>
                    <span class="cert-status in-progress">⏳ En cours</span>
                    <div class="project-links">
                        <a class="btn-sm" href="https://secnumacademie.gouv.fr/" target="_blank" rel="noopener">ANSSI →</a>
                    </div>
                </div>

            </div>

            <p class="muted" style="margin-top:16px; font-size:0.75rem;">
                💡 Cette page sera mise à jour au fur et à mesure de l'obtention de nouvelles certifications
                avant l'oral de certification.
            </p>
        </div>

        <!-- ── Mon discours oral ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🗣️</span>Ma démarche — Points clés pour l'exposé</div>
            <div class="eval-grid">

                <div class="eval-block" style="border-left-color: var(--accent2);">
                    <h4>1. Mon besoin identifié</h4>
                    <p>
                        Renforcer mes compétences en cybersécurité pour préparer mon entrée en Bachelor
                        et me démarquer sur le marché du travail. Les certifications complètent ma formation
                        BTS orientée développement.
                    </p>
                </div>

                <div class="eval-block" style="border-left-color: var(--accent2);">
                    <h4>2. Pourquoi ces certifications</h4>
                    <p>
                        OpenClassrooms pour les compétences techniques directement mobilisées en projet (JS, API REST, PHP).
                        Credly pour des badges reconnus par les employeurs. SecNumAcadémie pour la spécialisation cybersécurité.
                    </p>
                </div>

                <div class="eval-block" style="border-left-color: var(--accent2);">
                    <h4>3. Ce que ça m'a apporté</h4>
                    <p>
                        Application directe : l'API REST a nourri WeatherQuest, JS a enrichi mon portfolio,
                        Symfony m'a appris à tester mes applications. Chaque certification est liée à un projet concret.
                    </p>
                </div>

                <div class="eval-block" style="border-left-color: var(--accent2);">
                    <h4>4. Lien avec mon projet pro</h4>
                    <p>
                        Ces certifications construisent un profil polyvalent développeur / sécurité, cohérent
                        avec l'entrée en Bachelor Cybersécurité et le métier d'analyste ou ingénieur sécurité visé.
                    </p>
                </div>

            </div>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>