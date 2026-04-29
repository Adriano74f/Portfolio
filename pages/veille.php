<?php
/**
 * pages/veille.php — Veille technologique
 */
$pageTitle   = 'Veille technologique';
$currentPage = 'veille';
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
            <div class="page-icon">📡</div>
            <h1>Veille technologique</h1>
            <p>Suivi des évolutions du secteur informatique durant les 2 ans de BTS</p>
        </div>

        <!-- ── Sujet de veille ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🔭</span>Sujet de veille</div>
            <div class="veille-topic-box">
                <span class="vt-icon">🛡️</span>
                <div>
                    <p class="vt-title">Cybersécurité — Menaces, attaques et bonnes pratiques</p>
                    <p class="vt-sub">Sujet suivi depuis septembre 2024 — Impact sur les métiers du réseau et du développement</p>
                </div>
            </div>

            <p class="muted">
                La cybersécurité est devenue un enjeu majeur pour toutes les organisations. Durant mes deux
                années de BTS SIO, j'ai suivi de près les évolutions des menaces informatiques : ransomwares,
                attaques Man-In-The-Middle, phishing ciblé ou encore vulnérabilités réseau. Mes stages à la
                Mairie de Ville-la-Grand et chez OCI Informatique m'ont permis de confronter ces connaissances
                à des situations réelles : VPN, pare-feux, GPO sécurisées, sensibilisation des utilisateurs.
            </p>

            <div style="margin-top: 14px;">
                <p style="font-size:0.72rem; text-transform:uppercase; letter-spacing:1px; color:var(--muted); font-family:var(--font-display); font-weight:700; margin-bottom:8px;">
                    Outils de veille utilisés
                </p>
                <div class="tool-chips">
                    <span class="tool-chip">YouTube — Micode</span>
                    <span class="tool-chip">YouTube — Techno</span>
                    <span class="tool-chip">LinkedIn — ANSSI</span>
                    <span class="tool-chip">LinkedIn — RISKINTEL</span>
                    <span class="tool-chip">Twitter/X — @ANSSI_FR</span>
                    <span class="tool-chip">Twitter/X — @Cybermalveillance</span>
                    <span class="tool-chip">Google Actualités</span>
                </div>
            </div>
        </div>

        <!-- ── Sources ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">🌐</span>Mes sources de veille</div>
            <div class="veille-sources-grid">

                <div class="source-block">
                    <div class="source-logo source-yt">▶</div>
                    <div class="source-info">
                        <p class="source-name">YouTube</p>
                        <ul class="source-list">
                            <li><a href="https://www.youtube.com/@Micode" target="_blank" rel="noopener">Micode</a></li>
                            <li><a href="https://www.youtube.com/@TechnoNerd" target="_blank" rel="noopener">Techno</a></li>
                        </ul>
                    </div>
                </div>

                <div class="source-block">
                    <div class="source-logo source-li">in</div>
                    <div class="source-info">
                        <p class="source-name">LinkedIn</p>
                        <ul class="source-list">
                            <li><a href="https://www.linkedin.com/company/anssi-fr/" target="_blank" rel="noopener">ANSSI</a></li>
                            <li><a href="https://www.linkedin.com/company/riskintel/" target="_blank" rel="noopener">RISKINTEL</a></li>
                        </ul>
                    </div>
                </div>

                <div class="source-block">
                    <div class="source-logo source-x">𝕏</div>
                    <div class="source-info">
                        <p class="source-name">Twitter / X</p>
                        <ul class="source-list">
                            <li><a href="https://twitter.com/ANSSI_FR" target="_blank" rel="noopener">@ANSSI_FR</a></li>
                            <li><a href="https://twitter.com/Cybermalveillance" target="_blank" rel="noopener">@Cybermalveillance</a></li>
                        </ul>
                    </div>
                </div>

                <div class="source-block">
                    <div class="source-logo source-gn">G</div>
                    <div class="source-info">
                        <p class="source-name">Google Actualités</p>
                        <ul class="source-list">
                            <li>Alertes « cybersécurité »</li>
                            <li>Alertes « ransomware France »</li>
                        </ul>
                    </div>
                </div>

                <div class="source-block">
                    <div class="source-logo source-extra">🔐</div>
                    <div class="source-info">
                        <p class="source-name">CERT-FR</p>
                        <ul class="source-list">
                            <li><a href="https://www.cert.ssi.gouv.fr/" target="_blank" rel="noopener">cert.ssi.gouv.fr</a></li>
                            <li>Alertes et avis de sécurité officiels</li>
                        </ul>
                    </div>
                </div>

                <div class="source-block">
                    <div class="source-logo source-extra">📰</div>
                    <div class="source-info">
                        <p class="source-name">The Hacker News</p>
                        <ul class="source-list">
                            <li><a href="https://thehackernews.com/" target="_blank" rel="noopener">thehackernews.com</a></li>
                            <li>Actualités cybermenaces mondiales</li>
                        </ul>
                    </div>
                </div>

                <div class="source-block">
                    <div class="source-logo source-extra">🕵️</div>
                    <div class="source-info">
                        <p class="source-name">Krebs on Security</p>
                        <ul class="source-list">
                            <li><a href="https://krebsonsecurity.com/" target="_blank" rel="noopener">krebsonsecurity.com</a></li>
                            <li>Analyses approfondies d'incidents</li>
                        </ul>
                    </div>
                </div>

                <div class="source-block">
                    <div class="source-logo source-extra">🇫🇷</div>
                    <div class="source-info">
                        <p class="source-name">Cybermalveillance.gouv.fr</p>
                        <ul class="source-list">
                            <li><a href="https://www.cybermalveillance.gouv.fr/" target="_blank" rel="noopener">cybermalveillance.gouv.fr</a></li>
                            <li>Conseils pratiques et signalements</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- ── Articles ── -->
        <div class="card">
            <div class="card-title"><span class="ct-icon">📰</span>Faits marquants suivis</div>
            <div class="veille-articles">

                <!-- Cybersécurité -->
                <div class="veille-section-label">🛡️ Cybersécurité</div>

                <div class="article-row">
                    <div class="article-num">01</div>
                    <div class="article-body">
                        <p class="article-title">Backdoor XZ Utils (CVE-2024-3094) — Attaque supply chain sophistiquée</p>
                        <p class="article-meta">CERT-FR / Andres Freund — Mars 2024 · Une porte dérobée dissimulée dans la bibliothèque de compression XZ Utils a failli compromettre des millions de serveurs Linux. Découverte de justesse par un ingénieur Microsoft.</p>
                    </div>
                    <a class="btn-sm" href="https://www.cert.ssi.gouv.fr/avis/CERTFR-2024-AVI-0257/" target="_blank" rel="noopener">Lire →</a>
                </div>

                <div class="article-row">
                    <div class="article-num">02</div>
                    <div class="article-body">
                        <p class="article-title">Fuite de données Free Telecom — 19 millions de clients exposés</p>
                        <p class="article-meta">ANSSI / CNIL — Octobre 2024 · L'opérateur Free a subi une violation de données massive : IBAN, noms, adresses et données personnelles de 19 millions d'abonnés mis en vente sur des forums cybercriminels.</p>
                    </div>
                    <a class="btn-sm" href="https://www.cybermalveillance.gouv.fr/" target="_blank" rel="noopener">Lire →</a>
                </div>

                <div class="article-row">
                    <div class="article-num">03</div>
                    <div class="article-body">
                        <p class="article-title">Directive NIS2 en vigueur — Renforcement de la cybersécurité en Europe</p>
                        <p class="article-meta">ANSSI / Journal officiel UE — Octobre 2024 · La directive NIS2 impose à des milliers d'entreprises et administrations françaises de renforcer leur sécurité informatique sous peine de sanctions. Élargissement au secteur public et PME critiques.</p>
                    </div>
                    <a class="btn-sm" href="https://www.ssi.gouv.fr/entreprise/reglementation/directive-nis-2/" target="_blank" rel="noopener">Lire →</a>
                </div>

                <div class="article-row">
                    <div class="article-num">04</div>
                    <div class="article-body">
                        <p class="article-title">IA générative au service des cyberattaques — Phishing et deepfakes vocaux</p>
                        <p class="article-meta">ANSSI / The Hacker News — 2024/2025 · Les attaquants utilisent désormais des outils d'IA pour créer des e-mails de phishing indétectables, des faux appels vocaux (voice cloning) et de faux visages en visioconférence pour tromper les victimes.</p>
                    </div>
                    <a class="btn-sm" href="https://www.ssi.gouv.fr/actualite/intelligence-artificielle-et-cybersecurite/" target="_blank" rel="noopener">Lire →</a>
                </div>

                <div class="article-row">
                    <div class="article-num">05</div>
                    <div class="article-body">
                        <p class="article-title">Ransomware sur les collectivités locales — Recrudescence en France</p>
                        <p class="article-meta">CERT-FR / ANSSI — 2024 · Les mairies, hôpitaux et établissements scolaires restent des cibles privilégiées des groupes ransomware (LockBit, ALPHV). L'ANSSI recense une hausse de 30 % des incidents en 2024 sur le secteur public.</p>
                    </div>
                    <a class="btn-sm" href="https://www.cert.ssi.gouv.fr/cti/CERTFR-2024-CTI-001/" target="_blank" rel="noopener">Lire →</a>
                </div>

                <!-- Développement -->
                <div class="veille-section-label" style="margin-top:10px;">💻 Développement</div>

                <div class="article-row">
                    <div class="article-num">06</div>
                    <div class="article-body">
                        <p class="article-title">Rust intégré dans le noyau Linux — Révolution de la sécurité mémoire</p>
                        <p class="article-meta">The Linux Foundation / LWN.net — 2024 · Le noyau Linux accueille ses premiers pilotes écrits en Rust, un langage qui garantit l'absence de bugs mémoire à la compilation. Une avancée majeure contre les failles de type buffer overflow.</p>
                    </div>
                    <a class="btn-sm" href="https://www.kernel.org/doc/html/next/rust/index.html" target="_blank" rel="noopener">Lire →</a>
                </div>

                <div class="article-row">
                    <div class="article-num">07</div>
                    <div class="article-body">
                        <p class="article-title">GitHub Copilot et IA générative — La programmation assistée devient standard</p>
                        <p class="article-meta">GitHub / Stack Overflow Survey — 2024/2025 · Plus de 55 % des développeurs utilisent désormais un outil d'IA dans leur workflow quotidien. GitHub Copilot, Cursor, Claude Code transforment la façon d'écrire et de déboguer du code.</p>
                    </div>
                    <a class="btn-sm" href="https://survey.stackoverflow.co/2024/" target="_blank" rel="noopener">Lire →</a>
                </div>

            </div>
        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>