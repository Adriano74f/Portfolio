<?php
/**
 * pages/competences.php — Tableau des compétences
 */
$pageTitle   = 'Compétences';
$currentPage = 'competences';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>
    <style>
        @media (max-width: 768px) {
            .page-wrapper { padding: 16px 12px 56px !important; max-width: 100% !important; overflow-x: hidden !important; }
            .card { padding: 14px 12px !important; }
            .page-header h1 { font-size: 1.5rem !important; }
            .patri-grid,
            .bts-grid,
            .cert-grid,
            .eval-grid,
            .skills-cols,
            .stages-grid,
            .projects-grid,
            .veille-sources-grid { grid-template-columns: 1fr !important; }
            .oral-box { grid-template-columns: 1fr !important; }
            .skills-table-wrap { overflow-x: auto !important; -webkit-overflow-scrolling: touch !important; width: 100% !important; display: block !important; }
            .skills-table { min-width: 460px !important; font-size: .72rem !important; }
            .source-block { overflow: hidden !important; min-width: 0 !important; }
            .source-name { word-break: break-word !important; white-space: normal !important; font-size: .72rem !important; }
            .source-list li, .source-list a { word-break: break-word !important; white-space: normal !important; font-size: .63rem !important; }
            .veille-topic-box { flex-wrap: wrap !important; }
            .hero { grid-template-columns: 1fr !important; text-align: center !important; }
            .hero-chips, .hero-links { justify-content: center !important; }
        }
        @media (max-width: 400px) {
            .page-wrapper { padding: 12px 10px 50px !important; }
            .info-grid { grid-template-columns: 1fr !important; }
            .hero-name { font-size: 1.4rem !important; }
        }
    </style>
<?php
?>

    <main class="page-wrapper">

        <div class="page-header">
            <div class="page-icon">⚡</div>
            <h1>Compétences</h1>
            <p>Compétences techniques et transversales développées durant le BTS SIO SLAM</p>
        </div>

        <!-- ── Téléchargement tableau de synthèse ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">📥</span>Tableau de synthèse officiel — Épreuve E4/E5</div>
            <p class="muted" style="margin-bottom: 16px;">
                Le tableau de synthèse recense l'ensemble des réalisations professionnelles réalisées
                en formation et en milieu professionnel, avec les compétences associées du référentiel BTS SIO.
            </p>
            <a href="../assets/docs/tableau_synthese_BTS_SIO.xlsx"
               download="Tableau_synthese_BTS_SIO_Ferreira_Da_Silva_Adriano.xlsx"
               class="btn-download">
                <span>📊</span> Télécharger le tableau de synthèse (.xlsx)
            </a>
        </div>

        <!-- ── Tâches importantes illustrées ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">📂</span>Tâches marquantes — Documents associés</div>
            <p class="muted" style="margin-bottom: 18px;">
                Sélection des réalisations les plus significatives, illustrées par leur documentation technique.
                Ces tâches démontrent concrètement les compétences du référentiel BTS SIO.
            </p>

            <div class="tasks-list">

                <div class="task-item">
                    <div class="task-icon">🛡️</div>
                    <div class="task-content">
                        <p class="task-title">Mise en place d'une authentification à double facteur (2FA)</p>
                        <p class="task-context">Formation BTS · PHP · Sécurité applicative · Compétence : Développer la présence en ligne</p>
                    </div>
                    <a class="btn-download" href="../assets/docs/tache-2fa.pdf" download>
                        📄 Documentation
                    </a>
                </div>

                <div class="task-item">
                    <div class="task-icon">🌐</div>
                    <div class="task-content">
                        <p class="task-title">Réalisation d'un nouveau GLPI sécurisé à la Mairie</p>
                        <p class="task-context">Stage Mairie de Ville-la-Grand · GLPI · Réseaux · Compétence : Gérer le patrimoine informatique</p>
                    </div>
                    <a class="btn-download" href="../assets/docs/tache-glpi.pdf" download>
                        📄 Documentation
                    </a>
                </div>

                <div class="task-item">
                    <div class="task-icon">🔒</div>
                    <div class="task-content">
                        <p class="task-title">Mise en place de VPN et formation utilisateurs</p>
                        <p class="task-context">Stage Mairie de Ville-la-Grand · VPN · Réseau · Compétence : Mettre à disposition un service informatique</p>
                    </div>
                    <a class="btn-download" href="../assets/docs/tache-vpn.pdf" download>
                        📄 Documentation
                    </a>
                </div>

                <div class="task-item">
                    <div class="task-icon">⚙️</div>
                    <div class="task-content">
                        <p class="task-title">Réalisation et présentation de GPO (Group Policy Objects)</p>
                        <p class="task-context">Stage Mairie de Ville-la-Grand · Active Directory · Windows Server · Compétence : Gérer le patrimoine informatique</p>
                    </div>
                    <a class="btn-download" href="../assets/docs/tache-gpo.pdf" download>
                        📄 Documentation
                    </a>
                </div>

                <div class="task-item">
                    <div class="task-icon">🕵️</div>
                    <div class="task-content">
                        <p class="task-title">Simulation de cyberattaques sur Kali Linux (MITM, SQL, DDoS)</p>
                        <p class="task-context">Formation BTS · Kali Linux · Cybersécurité · Compétence : Organiser son développement professionnel</p>
                    </div>
                    <a class="btn-download" href="../assets/docs/tache-kali.pdf" download>
                        📄 Documentation
                    </a>
                </div>

                <div class="task-item">
                    <div class="task-icon">📜</div>
                    <div class="task-content">
                        <p class="task-title">Script de création de comptes utilisateurs en masse</p>
                        <p class="task-context">Stage Mairie de Ville-la-Grand · Scripting · Active Directory · Compétence : Gérer le patrimoine informatique</p>
                    </div>
                    <a class="btn-download" href="../assets/docs/tache-script.pdf" download>
                        📄 Documentation
                    </a>
                </div>

            </div>

            <p class="muted" style="margin-top: 16px; font-size: 0.75rem;">
                💡 Les fichiers PDF seront disponibles en plaçant vos documents dans
                <code style="font-family: var(--font-mono); color: var(--accent2);">assets/docs/</code>.
                Les noms de fichiers sont à adapter selon vos documents réels.
            </p>
        </div>

        <!-- ── Vue d'ensemble ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🏷️</span>Vue d'ensemble</div>
            <div class="skills-cols">

                <div class="skill-col">
                    <h3>🌐 Développement Web</h3>
                    <div class="skill-tags">
                        <span class="skill-tag good">HTML5</span>
                        <span class="skill-tag good">CSS3</span>
                        <span class="skill-tag good">PHP</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Bootstrap</span>
                    </div>
                </div>

                <div class="skill-col">
                    <h3>🗃️ Bases de données</h3>
                    <div class="skill-tags">
                        <span class="skill-tag good">MySQL</span>
                        <span class="skill-tag">SQL Server</span>
                        <span class="skill-tag">phpMyAdmin</span>
                    </div>
                </div>

                <div class="skill-col">
                    <h3>💻 Langages</h3>
                    <div class="skill-tags">
                        <span class="skill-tag good">PHP</span>
                        <span class="skill-tag">Java</span>
                        <span class="skill-tag">TypeScript</span>
                        <span class="skill-tag">C#</span>
                        <span class="skill-tag">Python</span>
                    </div>
                </div>

                <div class="skill-col">
                    <h3>🛡️ Réseau &amp; Sécurité</h3>
                    <div class="skill-tags">
                        <span class="skill-tag good">Active Directory</span>
                        <span class="skill-tag good">GPO</span>
                        <span class="skill-tag good">VPN</span>
                        <span class="skill-tag">Stormshield</span>
                        <span class="skill-tag">Cybersécurité</span>
                        <span class="skill-tag">Kali Linux</span>
                    </div>
                </div>

                <div class="skill-col">
                    <h3>🛠️ Outils &amp; Méthodes</h3>
                    <div class="skill-tags">
                        <span class="skill-tag good">Git / GitHub</span>
                        <span class="skill-tag good">GLPI</span>
                        <span class="skill-tag good">PhpStorm</span>
                        <span class="skill-tag">VS Code</span>
                        <span class="skill-tag">UML / Merise</span>
                        <span class="skill-tag">Microsoft 365</span>
                    </div>
                </div>

            </div>
            <p style="font-size:0.72rem; color:var(--muted); margin-top:12px; font-family: var(--font-mono);">
                <span style="color:var(--accent)">■</span> Vert = compétence maîtrisée et démontrable
            </p>
        </div>

        <!-- ── Tableau détaillé ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">📊</span>Tableau synthèse des compétences</div>

            <table class="skills-table" role="table" aria-label="Tableau des compétences BTS SIO SLAM">
                <thead>
                <tr>
                    <th>Compétence</th>
                    <th>Niveau</th>
                    <th>Contexte d'acquisition</th>
                    <th>Démontrable</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>HTML / CSS</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">BTS, projets, portfolio</td><td class="tick-yes">✔</td></tr>
                <tr><td>PHP</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">BTS, PPE, projets perso</td><td class="tick-yes">✔</td></tr>
                <tr><td>MySQL / SQL</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">BTS, PPE, exercices</td><td class="tick-yes">✔</td></tr>
                <tr><td>JavaScript</td><td><span class="lv-badge lv-debut">Débutant</span></td><td class="muted">Notions BTS, portfolio</td><td class="tick-yes">✔</td></tr>
                <tr><td>TypeScript</td><td><span class="lv-badge lv-debut">Débutant</span></td><td class="muted">Projets BTS (GSB, API REST)</td><td class="tick-yes">✔</td></tr>
                <tr><td>Java</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">PPE Java, WeatherQuest</td><td class="tick-yes">✔</td></tr>
                <tr><td>C#</td><td><span class="lv-badge lv-debut">Débutant</span></td><td class="muted">Projet DiiageCustomerApp</td><td class="tick-yes">✔</td></tr>
                <tr><td>Python</td><td><span class="lv-badge lv-debut">Débutant</span></td><td class="muted">Initiation BTS</td><td class="tick-no">✗</td></tr>
                <tr><td>Active Directory / GPO</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">Stage Mairie, Stage OCI</td><td class="tick-yes">✔</td></tr>
                <tr><td>VPN</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">Stage Mairie de Ville-la-Grand</td><td class="tick-yes">✔</td></tr>
                <tr><td>Pare-feu Stormshield</td><td><span class="lv-badge lv-debut">Débutant</span></td><td class="muted">Stage OCI Informatique</td><td class="tick-yes">✔</td></tr>
                <tr><td>Cybersécurité / Kali Linux</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">BTS — simulations MITM, SQL, DDoS</td><td class="tick-yes">✔</td></tr>
                <tr><td>Authentification 2FA</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">Projet personnel PHP</td><td class="tick-yes">✔</td></tr>
                <tr><td>Git / GitHub</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">Tous les projets BTS</td><td class="tick-yes">✔</td></tr>
                <tr><td>GLPI</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">Stage Mairie, cours BTS</td><td class="tick-yes">✔</td></tr>
                <tr><td>Microsoft 365 / Exchange</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">Stage OCI, Stage Mairie</td><td class="tick-yes">✔</td></tr>
                <tr><td>Maintenance PC</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">OCI 2021 &amp; 2025, Mairie</td><td class="tick-yes">✔</td></tr>
                <tr><td>Documentation technique</td><td><span class="lv-badge lv-inter">Intermédiaire</span></td><td class="muted">Stages, BTS</td><td class="tick-yes">✔</td></tr>
                </tbody>
            </table>
        </div>

        <!-- ── Compétences transversales ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🤝</span>Compétences transversales</div>
            <div class="skills-cols">
                <div class="skill-col">
                    <h3>🗣️ Communication</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Expression écrite</span>
                        <span class="skill-tag">Présentation orale</span>
                        <span class="skill-tag">Documentation technique</span>
                        <span class="skill-tag">Sensibilisation utilisateurs</span>
                    </div>
                </div>
                <div class="skill-col">
                    <h3>🧩 Organisation</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Gestion des priorités</span>
                        <span class="skill-tag">Travail en équipe</span>
                        <span class="skill-tag">Autonomie</span>
                        <span class="skill-tag">Veille technologique</span>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>