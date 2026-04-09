<?php
/**
 * pages/avenir.php — Mon projet professionnel
 */
$pageTitle   = 'Mon projet professionnel';
$currentPage = 'avenir';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
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
                    <p class="vt-title">Bachelor en Cybersécurité — Bac+3</p>
                    <p class="vt-sub">Poursuite d'études envisagée à la rentrée 2026 — Spécialisation sécurité des systèmes et réseaux</p>
                </div>
            </div>
            <p class="muted">
                Au fil de mes stages et de ma formation en BTS SIO, la cybersécurité s'est imposée comme
                une évidence : c'est le domaine dans lequel je souhaite me spécialiser. La multiplication
                des cyberattaques contre les entreprises et les collectivités, comme j'ai pu l'observer
                directement à la Mairie de Ville-la-Grand, me confirme que ce secteur est en plein essor
                et que les besoins en professionnels qualifiés sont immenses.
            </p>
            <p class="muted">
                Un Bachelor Cybersécurité me permettra d'approfondir les compétences que j'ai commencé
                à développer : sécurité des réseaux, tests d'intrusion, gestion des incidents, conformité
                RGPD et réponse aux cybermenaces.
            </p>
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
            <div class="card-title"><span class="ct-icon">🎓</span>Formations envisagées</div>
            <div class="skills-table-wrap"><div class="skills-table-wrap"><table class="skills-table" role="table" aria-label="Formations Bachelor Cybersécurité">
                        <thead>
                        <tr>
                            <th>Formation</th>
                            <th>Type</th>
                            <th>Durée</th>
                            <th>Points forts</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>Bachelor Cybersécurité</strong></td>
                            <td class="muted">École privée / CFA</td>
                            <td class="muted">1 an (Bac+3)</td>
                            <td class="muted">Spécialisation rapide, alternance possible</td>
                        </tr>
                        <tr>
                            <td><strong>Licence Pro Cybersécurité</strong></td>
                            <td class="muted">Université</td>
                            <td class="muted">1 an (Bac+3)</td>
                            <td class="muted">Tarif accessible, reconnaissance nationale</td>
                        </tr>
                        <tr>
                            <td><strong>BUT Informatique parcours cybersécurité</strong></td>
                            <td class="muted">IUT</td>
                            <td class="muted">1 an (intégration en 3e année)</td>
                            <td class="muted">Diplôme universitaire, polyvalent</td>
                        </tr>
                        </tbody>
                    </table></div></div>
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