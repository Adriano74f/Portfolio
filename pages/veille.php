<style>
    /* ── RESPONSIVE MOBILE — styles prioritaires ── */
    @media (max-width: 768px) {
        .page-wrapper   { padding: 16px 12px 56px; max-width: 100%; overflow-x: hidden; }
        .card           { padding: 14px 12px; }
        .page-header h1 { font-size: 1.5rem; }

        .veille-sources-grid { grid-template-columns: 1fr !important; }
        .veille-topic-box    { flex-wrap: wrap; }
        .vt-title            { font-size: .85rem; word-break: break-word; }

        /* Fix dépassement source */
        .source-block  { overflow: hidden; min-width: 0; }
        .source-info   { min-width: 0; overflow: hidden; }
        .source-name   { word-break: break-word; white-space: normal; font-size: .72rem; }
        .source-list   { min-width: 0; }
        .source-list li,
        .source-list a { word-break: break-word; white-space: normal; font-size: .63rem; overflow-wrap: break-word; }
    }
    @media (max-width: 400px) {
        .page-wrapper { padding: 12px 10px 50px; }
    }
</style>
<?php
/**
 * pages/veille.php — Veille technologique
 */
$pageTitle   = 'Veille technologique';
$currentPage = 'veille';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
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

            <div class="article-row">
                <div class="article-num">01</div>
                <div class="article-body">
                    <p class="article-title">Attaque Man-In-The-Middle (MITM) — Démonstration et prévention</p>
                    <p class="article-meta">Veille personnelle + atelier BTS — 2024/2025</p>
                </div>
                <span class="btn-sm" style="opacity:.5;cursor:default;">Pratiqué ✔</span>
            </div>

            <div class="article-row">
                <div class="article-num">02</div>
                <div class="article-body">
                    <p class="article-title">Recrudescence des ransomwares ciblant les collectivités locales en France</p>
                    <p class="article-meta">CERT-FR / ANSSI — 2024</p>
                </div>
                <a class="btn-sm" href="https://www.cert.ssi.gouv.fr/cti/CERTFR-2024-CTI-001/" target="_blank" rel="noopener">Lire →</a>
            </div>

            <div class="article-row">
                <div class="article-num">03</div>
                <div class="article-body">
                    <p class="article-title">Bonnes pratiques Active Directory : sécurisation des GPO et comptes privilégiés</p>
                    <p class="article-meta">ANSSI — Guide d'hygiène informatique</p>
                </div>
                <a class="btn-sm" href="https://www.ssi.gouv.fr/guide/guide-dhygiene-informatique/" target="_blank" rel="noopener">Lire →</a>
            </div>

            <div class="article-row">
                <div class="article-num">04</div>
                <div class="article-body">
                    <p class="article-title">Injection SQL et sécurisation des applications web — OWASP Top 10</p>
                    <p class="article-meta">OWASP Foundation — 2024</p>
                </div>
                <a class="btn-sm" href="https://owasp.org/www-project-top-ten/" target="_blank" rel="noopener">Lire →</a>
            </div>

            <div class="article-row">
                <div class="article-num">05</div>
                <div class="article-body">
                    <p class="article-title">Authentification multi-facteurs (MFA) : pourquoi c'est devenu indispensable</p>
                    <p class="article-meta">The Hacker News — 2025</p>
                </div>
                <a class="btn-sm" href="https://thehackernews.com/search/label/Multi-Factor%20Authentication" target="_blank" rel="noopener">Lire →</a>
            </div>

        </div>
    </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>