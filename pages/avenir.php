<?php
/**
 * pages/avenir.php — Mon projet professionnel
 */
$pageTitle   = 'Mon projet professionnel';
$currentPage = 'avenir';
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
            <div class="page-icon">🎯</div>
            <h1>Mon projet professionnel</h1>
            <p>Après le BTS SIO — Bachelor Cybersécurité &amp; perspectives d'avenir</p>
        </div>

        <!-- ── Objectif ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🚀</span>Mon objectif après le BTS</div>
            <div class="veille-topic-box">
                <span class="vt-icon">🔐</span>
                <div>
                    <p class="vt-title">Bachelor Cybersécurité — Guardia School · Lyon</p>
                    <p class="vt-sub">Rentrée septembre 2026 · Bac+3 · Spécialisation offensive &amp; défensive</p>
                </div>
            </div>
            <p class="muted" style="margin-top:14px;">
                Mon BTS SIO m'a offert deux casquettes : développeur et technicien réseau/sécurité.
                En entreprise, c'est lors de mes stages que j'ai découvert concrètement la cybersécurité —
                configuration de VPN et pare-feux Stormshield, gestion d'incidents, simulations d'attaques
                sur Kali Linux — et c'est là que j'ai compris que c'était cette voie qui m'animait vraiment.
            </p>
            <p class="muted" style="margin-top:10px;">
                Le développement m'a beaucoup appris mais m'intéresse finalement moins que la sécurité.
                Analyser des menaces, comprendre les attaques pour mieux les contrer, défendre des
                infrastructures : c'est ce qui me motive. Je souhaite donc basculer du développement pur
                vers la cybersécurité et approfondir cette spécialité avec un Bachelor dédié.
            </p>
        </div>

        <!-- ── Le Bachelor en cybersécurité, c'est quoi ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🎓</span>Le Bachelor Cybersécurité — en quoi ça consiste ?</div>

            <p class="muted" style="margin-bottom:18px;">
                Le Bachelor Cybersécurité est un diplôme de niveau Bac+3 qui forme des spécialistes
                capables d'intervenir aussi bien en défense (protection des systèmes) qu'en attaque
                (tests d'intrusion). C'est une formation opérationnelle, centrée sur la pratique,
                qui débouche directement sur des métiers comme analyste SOC, pentesteur ou ingénieur sécurité.
            </p>

            <div class="patri-grid">

                <div class="patri-block">
                    <div class="patri-icon">⚔️</div>
                    <h3>Ethical Hacking &amp; Pentest</h3>
                    <p>Techniques d'intrusion légales : reconnaissance, exploitation de vulnérabilités,
                    post-exploitation, rédaction de rapports. Outils : Kali Linux, Metasploit, Burp Suite, Nmap.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🛡️</div>
                    <h3>Défense &amp; Blue Team</h3>
                    <p>SIEM, analyse de logs, détection d'intrusions (IDS/IPS), réponse à incident, forensique
                    numérique et investigation post-attaque pour comprendre ce qui s'est passé.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🌐</div>
                    <h3>Sécurité réseau &amp; Cloud</h3>
                    <p>Sécurisation des architectures réseau, segmentation, VPN, pare-feux, et introduction
                    à la sécurité des environnements cloud (AWS, Azure). Base directement liée à mon BTS.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🔍</div>
                    <h3>OSINT &amp; Renseignement</h3>
                    <p>Collecte d'informations en source ouverte, profilage de cibles, threat intelligence
                    et veille sur les groupes de menaces. Compétence clé pour l'analyse de risques.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">📋</div>
                    <h3>Gouvernance &amp; Conformité</h3>
                    <p>Cadres réglementaires (RGPD, ISO 27001, NIS2), politique de sécurité, gestion des
                    risques et audit de conformité. Indispensable dans un contexte professionnel.</p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🖥️</div>
                    <h3>Scripting &amp; Automatisation</h3>
                    <p>Python et Bash pour automatiser des tâches de sécurité : scans, traitement de logs,
                    création d'outils personnalisés. Le code devient un outil au service de la sécurité.</p>
                </div>

            </div>
        </div>

        <!-- ── Pourquoi Guardia School ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🏫</span>Pourquoi Guardia School ?</div>
            <div class="veille-topic-box" style="margin-bottom:14px;">
                <span class="vt-icon">📍</span>
                <div>
                    <p class="vt-title">Guardia School — Lyon</p>
                    <p class="vt-sub">École spécialisée en cybersécurité · Formation Bachelor Bac+3 · Alternance possible</p>
                </div>
            </div>
            <div class="patri-grid">
                <div class="patri-block">
                    <div class="patri-icon">🎯</div>
                    <h3>100 % cybersécurité</h3>
                    <p>Guardia School est une école entièrement dédiée à la cybersécurité. Les formations
                    sont conçues par des professionnels du secteur, avec une approche orientée terrain
                    dès la première année.</p>
                </div>
                <div class="patri-block">
                    <div class="patri-icon">🤝</div>
                    <h3>Alternance &amp; insertion</h3>
                    <p>Le Bachelor peut se faire en alternance, ce qui permet d'acquérir une expérience
                    professionnelle concrète tout en étudiant et de faciliter l'insertion dans le marché
                    du travail à l'issue de la formation.</p>
                </div>
                <div class="patri-block">
                    <div class="patri-icon">🏙️</div>
                    <h3>Écosystème lyonnais</h3>
                    <p>Lyon est l'une des métropoles françaises les plus actives en cybersécurité,
                    avec de nombreuses entreprises et ESN spécialisées. Un environnement idéal
                    pour développer son réseau professionnel.</p>
                </div>
            </div>
        </div>

        <!-- ── Lien avec les compétences acquises ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🔗</span>Ce que le BTS m'a apporté pour cette voie</div>
            <div class="patri-grid">

                <div class="patri-block">
                    <div class="patri-icon">🌐</div>
                    <h3>Réseaux &amp; Infrastructure</h3>
                    <p>
                        Configuration de VPN, pare-feux Stormshield, GPO, Active Directory et remplacement
                        de parcs informatiques en stage. Des bases solides pour aborder la sécurité réseau
                        en Bachelor.
                    </p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">🕵️</div>
                    <h3>Attaques &amp; Défense</h3>
                    <p>
                        Simulation de cyberattaques sur Kali Linux (MITM, injection SQL, DDoS, ARP Spoofing),
                        atelier de sensibilisation en BTS, et mise en place de pratiques de sécurité en entreprise.
                    </p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">💻</div>
                    <h3>Développement sécurisé</h3>
                    <p>
                        Projet d'authentification 2FA en PHP, sécurisation d'API REST et application des
                        bonnes pratiques OWASP dans le cadre de mes projets personnels et scolaires.
                    </p>
                </div>

                <div class="patri-block">
                    <div class="patri-icon">📋</div>
                    <h3>Gestion &amp; Documentation</h3>
                    <p>
                        Rédaction de documentations techniques, rapports de stage hebdomadaires, GLPI,
                        gestion de tickets et sensibilisation utilisateurs : des compétences essentielles
                        dans un rôle de cybersécurité opérationnelle.
                    </p>
                </div>

            </div>
        </div>

        <!-- ── Formations visées ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🗺️</span>Formations envisagées</div>
            <div class="skills-table-wrap">
                <table class="skills-table" role="table" aria-label="Formations Bachelor Cybersécurité">
                    <thead>
                    <tr>
                        <th>Formation</th>
                        <th>École</th>
                        <th>Type</th>
                        <th>Durée</th>
                        <th>Points forts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="border-left:2px solid var(--c1);">
                        <td><strong>Bachelor Cybersécurité</strong> <span style="font-family:var(--font-mono);font-size:.55rem;color:var(--c1);background:rgba(0,255,231,.08);border:1px solid rgba(0,255,231,.2);padding:1px 6px;border-radius:2px;margin-left:4px;">✔ Choix retenu</span></td>
                        <td style="color:var(--c1);font-family:var(--font-mono);font-size:.7rem;font-weight:700;">Guardia School · Lyon</td>
                        <td class="muted">École privée / Alternance</td>
                        <td class="muted">1 an (Bac+3)</td>
                        <td class="muted">100 % cyber, alternance, insertion pro</td>
                    </tr>
                    <tr>
                        <td><strong>Licence Pro Cybersécurité</strong></td>
                        <td class="muted">Université</td>
                        <td class="muted">Universitaire</td>
                        <td class="muted">1 an (Bac+3)</td>
                        <td class="muted">Tarif accessible, reconnaissance nationale</td>
                    </tr>
                    <tr>
                        <td><strong>BUT Informatique — parcours cybersécurité</strong></td>
                        <td class="muted">IUT</td>
                        <td class="muted">Universitaire</td>
                        <td class="muted">1 an (3e année)</td>
                        <td class="muted">Diplôme universitaire, polyvalent</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ── Métiers ciblés ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">💼</span>Métiers visés à terme</div>
            <div class="skills-cols">
                <div class="skill-col">
                    <h3>🔐 Court terme (Bac+3)</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Technicien SOC (Security Operations Center)</span>
                        <span class="skill-tag">Analyste cybersécurité</span>
                        <span class="skill-tag">Administrateur sécurité réseau</span>
                        <span class="skill-tag">Pentesteur junior</span>
                    </div>
                </div>
                <div class="skill-col">
                    <h3>🚀 Moyen terme (Bac+5 envisagé)</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Ingénieur cybersécurité</span>
                        <span class="skill-tag">Responsable sécurité des systèmes d'information (RSSI)</span>
                        <span class="skill-tag">Consultant en sécurité informatique</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>