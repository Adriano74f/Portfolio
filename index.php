<?php
/**
 * index.php — Page d'accueil / Présentation
 */
$pageTitle   = 'Présentation';
$currentPage = 'index';
$depth       = 0;
require_once __DIR__ . '/includes/header.php';
?>

    <main class="page-wrapper">

        <!-- ── Hero ── -->
        <div class="card visible" style="padding: 32px;">
            <div class="hero">
                <div class="hero-avatar">
                    <img src="img/Photo.png" alt="Photo de profil — Adriano Ferreira Da Silva" />
                </div>
                <div class="hero-content">
                    <h1 class="hero-name">
                        <span class="accent-dot"></span>Adriano<br>
                        <span>Ferreira Da Silva</span>
                    </h1>
                    <p class="hero-role">BTS SIO 2 — Option SLAM · Lycée Gabriel Fauré</p>

                    <div class="hero-chips">
                        <span class="chip accent">SLAM</span>
                        <span class="chip">Développement Web</span>
                        <span class="chip">PHP · MySQL · HTML/CSS</span>
                        <span class="chip">Git / GitHub</span>
                        <span class="chip">Cybersécurité</span>
                    </div>

                    <div class="hero-links">
                        <a class="btn btn-primary" href="img/Ferreira-Da-Silva-Adriano-CV.pdf" target="_blank">
                            📄 Télécharger le CV
                        </a>
                        <a class="btn btn-secondary" href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/" target="_blank" rel="noopener">
                            🔗 LinkedIn
                        </a>
                        <a class="btn btn-secondary" href="https://github.com/Adriano74f" target="_blank" rel="noopener">
                            🐙 GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── Infos personnelles ── -->
        <div class="card">
            <div class="card-title">
                <span class="ct-icon">ℹ️</span>Informations personnelles
            </div>
            <div class="info-grid">
                <div class="info-block">
                    <div class="ib-label">Nom complet</div>
                    <p class="ib-value">Adriano Ferreira Da Silva</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Formation</div>
                    <p class="ib-value">BTS SIO 2 — Option SLAM</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Établissement</div>
                    <p class="ib-value">Lycée Gabriel Fauré</p>
                </div>
                <div class="info-block">
                    <div class="ib-label">Localisation</div>
                    <p class="ib-value">Annecy, Haute-Savoie</p>
                </div>
            </div>
        </div>

        <!-- ── À propos ── -->
        <div class="card">
            <div class="card-title">
                <span class="ct-icon">💬</span>À propos de moi
            </div>
            <p class="muted">
                Passionné par l'informatique depuis de nombreuses années, j'ai commencé mon parcours
                professionnel avec plusieurs stages en audiovisuel et en maintenance informatique avant
                d'intégrer le BTS SIO option SLAM. Ces expériences m'ont permis de découvrir des
                environnements techniques variés et de confirmer mon goût pour la résolution de problèmes
                complexes et les technologies réseau.
            </p>
            <p class="muted">
                Sérieux et curieux, je souhaite à terme me spécialiser en cybersécurité en intégrant un
                Bachelor, tout en continuant à développer mes compétences en développement web, réseaux
                et administration système acquises au fil de mes stages et projets personnels.
            </p>
        </div>

        <!-- ── Parcours / Timeline ── -->
        <div class="card">
            <div class="card-title">
                <span class="ct-icon">📅</span>Parcours scolaire &amp; professionnel
            </div>
            <div class="timeline">

                <div class="timeline-item">
                    <div class="tl-date">Janvier — Mars 2026</div>
                    <div class="tl-title">Stage — Mairie de Ville-la-Grand · Technicien réseau</div>
                    <p class="tl-sub">Administration réseau, VPN, GPO, sécurisation d'infrastructure, remplacement de 40 postes, sensibilisation cybersécurité.</p>
                </div>

                <div class="timeline-item">
                    <div class="tl-date">2024 — 2026</div>
                    <div class="tl-title">BTS SIO option SLAM — Lycée Gabriel Fauré, Annecy</div>
                    <p class="tl-sub">Formation en développement d'applications, bases de données, réseaux, cybersécurité et gestion de projet.</p>
                </div>

                <div class="timeline-item">
                    <div class="tl-date">Juin — Juillet 2025</div>
                    <div class="tl-title">Stage — OCI Informatique &amp; Digital · Technicien</div>
                    <p class="tl-sub">Maintenance postes, pare-feu Stormshield, Microsoft 365, GPO, mise à jour site web. Thonon-les-Bains.</p>
                </div>

                <div class="timeline-item">
                    <div class="tl-date">Juin — Juillet 2024</div>
                    <div class="tl-title">Stage — TAMTAM MUSIQUE · Technicien audiovisuel</div>
                    <p class="tl-sub">Installation et configuration de matériel audiovisuel, assistance technique lors d'événements. Annemasse.</p>
                </div>

                <div class="timeline-item">
                    <div class="tl-date">Juin — Juillet 2023</div>
                    <div class="tl-title">Stage — Next Vision · Technicien audiovisuel</div>
                    <p class="tl-sub">Installation d'équipements audiovisuels professionnels, maintenance et dépannage. Annemasse.</p>
                </div>

                <div class="timeline-item">
                    <div class="tl-date">Juin — Juillet 2022</div>
                    <div class="tl-title">Stage — TAMTAM MUSIQUE · Technicien audiovisuel</div>
                    <p class="tl-sub">Première immersion en entreprise, montage et démontage de matériel audiovisuel. Annemasse.</p>
                </div>

                <div class="timeline-item">
                    <div class="tl-date">Mai — Juillet 2021</div>
                    <div class="tl-title">Stage — OCI Informatique &amp; Digital · Technicien réparation</div>
                    <p class="tl-sub">Diagnostic et réparation de matériels informatiques, tests et contrôle qualité. Ville-la-Grand.</p>
                </div>

            </div>
        </div>

    </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>