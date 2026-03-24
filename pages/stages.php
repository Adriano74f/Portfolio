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
            <p>Stages effectués durant les 2 années de BTS SIO SLAM et avant la formation</p>
        </div>

        <!-- ── Grille des stages ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">📋</span>Récapitulatif des stages</div>
            <div class="stages-grid">

                <!-- Stage 5 — Mairie de Ville-la-Grand -->
                <div class="stage-card">
                    <div class="stage-top">
                        <h3 class="stage-company">Mairie de Ville-la-Grand</h3>
                        <span class="badge badge-purple">Stage 5 · BTS 2</span>
                    </div>
                    <p class="stage-period">📅 Janvier 2026 — Mars 2026 (3 mois)</p>
                    <p class="stage-role">🎯 Technicien réseau</p>
                    <ul class="stage-tasks">
                        <li>Administration réseau et infrastructure informatique municipale</li>
                        <li>Mise en place et configuration de VPN pour les agents</li>
                        <li>Gestion des GPO (Group Policy Objects) et présentation aux équipes</li>
                        <li>Création de comptes utilisateurs / groupes et gestion des droits</li>
                        <li>Sécurisation de visiophones pour plusieurs écoles de la commune</li>
                        <li>Sensibilisation des utilisateurs à la cybersécurité</li>
                        <li>Rédaction de documentations techniques et rapports hebdomadaires</li>
                    </ul>
                </div>

                <!-- Stage 4 — OCI Informatique -->
                <div class="stage-card">
                    <div class="stage-top">
                        <h3 class="stage-company">OCI Informatique &amp; Digital</h3>
                        <span class="badge badge-green">Stage 4 · BTS 1</span>
                    </div>
                    <p class="stage-period">📅 Juin 2025 — Juillet 2025 (2 mois)</p>
                    <p class="stage-role">🎯 Technicien</p>
                    <ul class="stage-tasks">
                        <li>Configuration et résolution de pannes d'imprimantes réseau</li>
                        <li>Remplacement et migration de postes informatiques</li>
                        <li>Maintenance de sessions utilisateurs sous Windows</li>
                        <li>Mise en place de pare-feu Stormshield sur des postes</li>
                        <li>Configuration de boîtes mail avec licences Microsoft 365</li>
                        <li>Réalisation d'une stratégie de groupe (GPO) pour la configuration de mails</li>
                        <li>Mise à jour de contenu sur le site web de l'entreprise</li>
                    </ul>
                </div>

                <!-- Stage 3 — TAMTAM MUSIQUE 2024 -->
                <div class="stage-card">
                    <div class="stage-top">
                        <h3 class="stage-company">TAMTAM MUSIQUE</h3>
                        <span class="badge badge-blue">Stage 3</span>
                    </div>
                    <p class="stage-period">📅 Juin 2024 — Juillet 2024 (2 mois)</p>
                    <p class="stage-role">🎯 Technicien audiovisuel</p>
                    <ul class="stage-tasks">
                        <li>Installation et configuration de matériel audiovisuel</li>
                        <li>Assistance technique lors d'événements et de productions</li>
                        <li>Câblage et raccordement des équipements son et lumière</li>
                        <li>Support technique et maintenance du parc matériel</li>
                    </ul>
                </div>

                <!-- Stage 2 — Next Vision 2023 -->
                <div class="stage-card">
                    <div class="stage-top">
                        <h3 class="stage-company">Next Vision</h3>
                        <span class="badge badge-orange">Stage 2</span>
                    </div>
                    <p class="stage-period">📅 Juin 2023 — Juillet 2023 (2 mois)</p>
                    <p class="stage-role">🎯 Technicien audiovisuel</p>
                    <ul class="stage-tasks">
                        <li>Installation et paramétrage d'équipements audiovisuels professionnels</li>
                        <li>Maintenance et dépannage de matériels son et image</li>
                        <li>Assistance lors de prestations et événements</li>
                    </ul>
                </div>

                <!-- Stage 1 — TAMTAM MUSIQUE 2022 -->
                <div class="stage-card">
                    <div class="stage-top">
                        <h3 class="stage-company">TAMTAM MUSIQUE</h3>
                        <span class="badge badge-yellow">Stage 1</span>
                    </div>
                    <p class="stage-period">📅 Juin 2022 — Juillet 2022 (2 mois)</p>
                    <p class="stage-role">🎯 Technicien audiovisuel</p>
                    <ul class="stage-tasks">
                        <li>Découverte du métier de technicien audiovisuel en environnement professionnel</li>
                        <li>Installation d'équipements et assistance lors de productions</li>
                        <li>Apprentissage des procédures de montage et démontage de matériel</li>
                    </ul>
                </div>

                <!-- Stage 0 — OCI 2021 -->
                <div class="stage-card">
                    <div class="stage-top">
                        <h3 class="stage-company">OCI Informatique &amp; Digital</h3>
                        <span class="badge badge-grey">Stage 0</span>
                    </div>
                    <p class="stage-period">📅 Mai 2021 — Juillet 2021 (3 mois)</p>
                    <p class="stage-role">🎯 Technicien réparation</p>
                    <ul class="stage-tasks">
                        <li>Diagnostic et réparation de matériels informatiques (PC, périphériques)</li>
                        <li>Tests et contrôle qualité avant restitution au client</li>
                        <li>Première immersion dans un environnement informatique professionnel</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- ── Bilan stage BTS 2 : Mairie de Ville-la-Grand ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🔍</span>Mairie de Ville-la-Grand — Bilan détaillé</div>

            <div class="info-grid" style="margin-bottom: 20px;">
                <div class="info-block">
                    <div class="ib-label">Entreprise</div>
                    <p class="ib-value">Mairie de Ville-la-Grand</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Durée</div>
                    <p class="ib-value">3 mois</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Secteur</div>
                    <p class="ib-value">Administration publique / DSI</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Poste</div>
                    <p class="ib-value">Technicien réseau</p>
                </div>
            </div>

            <p class="muted">
                Ce stage en mairie m'a permis d'évoluer dans un environnement réseau complexe et réglementé.
                J'ai participé activement à des projets concrets : déploiement de VPN, mise en place de GPO,
                sécurisation d'infrastructure et remplacement massif de postes (40 postes en une semaine).
                J'ai également rédigé des documentations techniques et sensibilisé les utilisateurs à la cybersécurité,
                renforçant ainsi mes compétences aussi bien techniques que relationnelles.
            </p>

            <div class="divider"></div>

            <h3 style="font-size:0.8rem; font-family:var(--font-display); text-transform:uppercase; letter-spacing:0.8px; color:var(--muted); margin-bottom:12px;">
                Compétences mobilisées
            </h3>
            <div class="tech-tags">
                <span class="tech-tag">Active Directory</span>
                <span class="tech-tag">GPO</span>
                <span class="tech-tag">VPN</span>
                <span class="tech-tag">GLPI</span>
                <span class="tech-tag">Cybersécurité réseau</span>
                <span class="tech-tag">Windows Server</span>
                <span class="tech-tag">Scripting</span>
                <span class="tech-tag">Documentation technique</span>
            </div>
        </div>

        <!-- ── Bilan stage BTS 1 : OCI Informatique ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🔍</span>OCI Informatique &amp; Digital — Bilan détaillé</div>

            <div class="info-grid" style="margin-bottom: 20px;">
                <div class="info-block">
                    <div class="ib-label">Entreprise</div>
                    <p class="ib-value">OCI Informatique &amp; Digital</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Durée</div>
                    <p class="ib-value">2 mois</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Secteur</div>
                    <p class="ib-value">Maintenance &amp; services informatiques</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Poste</div>
                    <p class="ib-value">Technicien</p>
                </div>
            </div>

            <p class="muted">
                Ce stage chez OCI m'a permis de mettre en pratique les connaissances acquises en BTS SIO
                sur des environnements clients réels. J'ai pu intervenir sur des problématiques variées :
                pare-feu Stormshield, déploiement Microsoft 365, gestion de GPO et maintenance de postes.
                L'autonomie demandée m'a amené à rechercher des solutions techniques par moi-même,
                une compétence clé pour la vie professionnelle.
            </p>

            <div class="divider"></div>

            <h3 style="font-size:0.8rem; font-family:var(--font-display); text-transform:uppercase; letter-spacing:0.8px; color:var(--muted); margin-bottom:12px;">
                Compétences mobilisées
            </h3>
            <div class="tech-tags">
                <span class="tech-tag">Stormshield</span>
                <span class="tech-tag">Microsoft 365</span>
                <span class="tech-tag">GPO</span>
                <span class="tech-tag">Maintenance Windows</span>
                <span class="tech-tag">Réseaux informatiques</span>
                <span class="tech-tag">Diagnostic matériel</span>
            </div>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>