<?php
/**
 * pages/contact.php
 */
session_start();

$formSuccess = $_SESSION['form_success'] ?? null;
$formError   = $_SESSION['form_error']   ?? null;
$prevNom     = $_SESSION['form_nom']     ?? '';
$prevEmail   = $_SESSION['form_email']   ?? '';
$prevMsg     = $_SESSION['form_msg']     ?? '';

unset(
        $_SESSION['form_success'], $_SESSION['form_error'],
        $_SESSION['form_nom'],     $_SESSION['form_email'],
        $_SESSION['form_msg']
);

$pageTitle   = 'Contact';
$currentPage = 'contact';
$depth       = 1;
require_once __DIR__ . '/../includes/header.php';
?>

    <style>
        /* ── Reset liens — écrase le bleu navigateur ── */
        .contact-item,
        .contact-item:link,
        .contact-item:visited,
        .contact-item:hover,
        .contact-item:active {
            color: #d0e8ff !important;
            text-decoration: none !important;
        }

        /* ── Layout ── */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.6fr;
            gap: 20px;
            align-items: start;
        }
        .contact-left { display: flex; flex-direction: column; gap: 20px; }

        /* ── Alertes flash ── */
        .contact-alert {
            display: flex; align-items: center; gap: 10px;
            padding: 12px 16px; border-radius: 4px;
            font-family: 'Share Tech Mono', monospace; font-size: .78rem;
        }
        .contact-alert--success { background: rgba(0,255,231,.07); border: 1px solid rgba(0,255,231,.3); color: #00ffe7; }
        .contact-alert--error   { background: rgba(255,60,110,.07); border: 1px solid rgba(255,60,110,.3); color: #ff3c6e; }

        /* ── Blocs coordonnées ── */
        .contact-items { display: flex; flex-direction: column; gap: 7px; }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 12px 14px;
            border-radius: 4px;
            background: #0a1828;
            border: 1px solid rgba(0,255,231,.12);
            transition: border-color .2s, transform .2s, background .2s;
        }
        .contact-item:hover {
            border-color: rgba(0,255,231,.3) !important;
            background: rgba(0,255,231,.05) !important;
            transform: translateX(4px);
        }

        /* Icône colorée */
        .ci-icon-wrap {
            width: 38px; height: 38px;
            border-radius: 4px;
            display: flex; align-items: center; justify-content: center;
            font-size: .85rem; font-weight: 700;
            flex-shrink: 0;
            border: 1px solid rgba(0,255,231,.15);
        }
        .ci-mail     { background: rgba(0,255,231,.08);   color: #00ffe7 !important; }
        .ci-phone    { background: rgba(0,136,255,.08);   color: #0088ff !important; }
        .ci-linkedin { background: rgba(10,102,194,.15);  color: #4db8ff !important; font-family: serif; font-size: 1rem; }
        .ci-github   { background: rgba(167,139,250,.08); color: #a78bfa !important; }
        .ci-cv       { background: rgba(255,225,0,.08);   color: #ffe100 !important; font-size: .62rem; font-family: 'Share Tech Mono', monospace; }

        .ci-body { flex: 1; min-width: 0; }

        .ci-label {
            font-family: 'Share Tech Mono', monospace;
            font-size: .54rem; text-transform: uppercase;
            letter-spacing: .1em; color: #3d6080;
            margin-bottom: 2px;
        }
        .ci-value {
            font-size: .8rem; color: #d0e8ff !important;
            font-family: 'Rajdhani', sans-serif; font-weight: 600;
            white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
        }
        .ci-arrow { color: #3d6080; font-family: monospace; font-size: .85rem; flex-shrink: 0; }
        .contact-item:hover .ci-arrow { color: #00ffe7; }

        /* ── Disponibilité ── */
        .availability-block {
            display: flex; align-items: center; gap: 12px;
            padding: 13px 15px;
            background: rgba(0,255,231,.04);
            border: 1px solid rgba(0,255,231,.16);
            border-radius: 4px; margin-bottom: 12px;
        }
        .avail-dot {
            width: 10px; height: 10px; border-radius: 50%;
            background: #00ffe7; box-shadow: 0 0 8px #00ffe7;
            flex-shrink: 0;
            animation: pulse-dot 1.8s ease-in-out infinite;
        }
        .avail-title {
            font-family: 'Rajdhani', sans-serif;
            font-size: .88rem; font-weight: 700;
            color: #00ffe7; text-transform: uppercase; letter-spacing: .06em;
        }
        .avail-sub {
            font-family: 'Share Tech Mono', monospace;
            font-size: .6rem; color: #7faac8; margin-top: 2px;
        }

        /* ── Formulaire ── */
        .contact-form-card { height: 100%; }
        .contact-form { display: flex; flex-direction: column; gap: 16px; }

        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .form-group { display: flex; flex-direction: column; gap: 7px; }

        .form-group label {
            font-family: 'Share Tech Mono', monospace;
            font-size: .62rem; text-transform: uppercase;
            letter-spacing: .1em; color: #7faac8;
        }
        .form-required { color: #ff3c6e; margin-left: 2px; }

        /* ── INPUTS — solution fond blanc + autofill ── */
        .form-group input,
        .form-group textarea {
            /* Fond sombre forcé */
            background-color: #071020 !important;
            background: #071020 !important;
            /* Texte clair */
            color: #d0e8ff !important;
            /* Bordure */
            border: 1px solid rgba(0,255,231,.15) !important;
            border-radius: 4px;
            padding: 11px 14px;
            font-family: 'Exo 2', sans-serif;
            font-size: .85rem;
            outline: none;
            width: 100%;
            resize: vertical;
            transition: border-color .2s, box-shadow .2s;
            /* Supprime le style navigateur */
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        /* Autofill Chrome/Safari — fond sombre forcé */
        .form-group input:-webkit-autofill,
        .form-group input:-webkit-autofill:hover,
        .form-group input:-webkit-autofill:focus,
        .form-group textarea:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #071020 inset !important;
            box-shadow: 0 0 0 1000px #071020 inset !important;
            -webkit-text-fill-color: #d0e8ff !important;
            caret-color: #00ffe7;
            border: 1px solid rgba(0,255,231,.15) !important;
        }

        /* Placeholder */
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #3d6080 !important;
            font-family: 'Share Tech Mono', monospace;
            font-size: .7rem;
            opacity: 1;
        }

        /* Focus */
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: rgba(0,255,231,.45) !important;
            box-shadow: 0 0 0 2px rgba(0,255,231,.08), 0 0 16px rgba(0,255,231,.08) !important;
            background: #07121f !important;
        }

        .form-group textarea { min-height: 145px; }

        .form-footer {
            display: flex; align-items: center;
            justify-content: space-between;
            gap: 12px; flex-wrap: wrap; padding-top: 4px;
        }
        .form-note {
            font-family: 'Share Tech Mono', monospace;
            font-size: .58rem; color: #3d6080; letter-spacing: .04em;
        }

        /* ── Responsive ── */
        @media (max-width: 768px) {
            .contact-grid { grid-template-columns: 1fr; }
            .form-row     { grid-template-columns: 1fr; }
            .form-footer  { flex-direction: column; align-items: flex-start; }
            .ci-value     { font-size: .74rem; }
        }
    </style>

    <main class="page-wrapper">

        <div class="page-header">
            <div class="page-icon">✉️</div>
            <h1 data-text="Contact">Contact</h1>
            <p>Disponible pour alternance, stage ou échange professionnel</p>
        </div>

        <?php if ($formSuccess): ?>
            <div class="contact-alert contact-alert--success" role="alert">
                <span>✔</span>
                <span><?= htmlspecialchars($formSuccess) ?></span>
            </div>
        <?php elseif ($formError): ?>
            <div class="contact-alert contact-alert--error" role="alert">
                <span>⚠</span>
                <span><?= htmlspecialchars($formError) ?></span>
            </div>
        <?php endif; ?>

        <div class="contact-grid">

            <!-- ── Colonne gauche ── -->
            <div class="contact-left">

                <div class="card">
                    <div class="card-title"><span class="ct-icon">📡</span>Coordonnées</div>
                    <div class="contact-items">

                        <a class="contact-item" href="mailto:adriano.ferreiradasilva74@gmail.com">
                            <div class="ci-icon-wrap ci-mail">✉</div>
                            <div class="ci-body">
                                <p class="ci-label">Email</p>
                                <p class="ci-value">adriano.ferreiradasilva74@gmail.com</p>
                            </div>
                            <span class="ci-arrow">→</span>
                        </a>

                        <a class="contact-item" href="tel:+33769493474">
                            <div class="ci-icon-wrap ci-phone">☎</div>
                            <div class="ci-body">
                                <p class="ci-label">Téléphone</p>
                                <p class="ci-value">07 69 49 34 74</p>
                            </div>
                        </a>

                        <a class="contact-item"
                           href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/"
                           target="_blank" rel="noopener">
                            <div class="ci-icon-wrap ci-linkedin">in</div>
                            <div class="ci-body">
                                <p class="ci-label">LinkedIn</p>
                                <p class="ci-value">Adriano Ferreira Da Silva</p>
                            </div>
                            <span class="ci-arrow">→</span>
                        </a>

                        <a class="contact-item"
                           href="https://github.com/Adriano74f"
                           target="_blank" rel="noopener">
                            <div class="ci-icon-wrap ci-github">⌥</div>
                            <div class="ci-body">
                                <p class="ci-label">GitHub</p>
                                <p class="ci-value">Adriano74f</p>
                            </div>
                            <span class="ci-arrow">→</span>
                        </a>

                        <a class="contact-item"
                           href="../img/Ferreira-Da-Silva-Adriano-CV.pdf"
                           target="_blank">
                            <div class="ci-icon-wrap ci-cv">CV</div>
                            <div class="ci-body">
                                <p class="ci-label">Curriculum Vitae</p>
                                <p class="ci-value">Télécharger le CV (PDF)</p>
                            </div>
                            <span class="ci-arrow">↓</span>
                        </a>

                    </div>
                </div>

                <div class="card">
                    <div class="card-title"><span class="ct-icon">🟢</span>Disponibilité</div>
                    <div class="availability-block">
                        <div class="avail-dot"></div>
                        <div>
                            <p class="avail-title">Disponible</p>
                            <p class="avail-sub">Alternance / stage Cybersécurité — Rentrée 2026</p>
                        </div>
                    </div>
                    <div class="info-grid">
                        <div class="info-block">
                            <div class="ib-label">Localisation</div>
                            <p class="ib-value">Annecy — Haute-Savoie</p>
                        </div>
                        <div class="info-block">
                            <div class="ib-label">Mobilité</div>
                            <p class="ib-value">Région AuRA &amp; télétravail</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ── Formulaire ── -->
            <div class="card contact-form-card">
                <div class="card-title"><span class="ct-icon">✏️</span>Envoyer un message</div>

                <form class="contact-form"
                      id="contactForm"
                      action="../php/contact.php"
                      method="POST"
                      novalidate>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom complet <span class="form-required">*</span></label>
                            <input type="text" id="nom" name="nom" required
                                   placeholder="Prénom NOM"
                                   value="<?= htmlspecialchars($prevNom) ?>"
                                   autocomplete="name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse e-mail <span class="form-required">*</span></label>
                            <input type="email" id="email" name="email" required
                                   placeholder="exemple@mail.com"
                                   value="<?= htmlspecialchars($prevEmail) ?>"
                                   autocomplete="email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet"
                               placeholder="Alternance, stage, projet..." />
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span class="form-required">*</span></label>
                        <textarea id="message" name="message" required
                                  placeholder="Bonjour Adriano, je vous contacte au sujet de..."
                        ><?= htmlspecialchars($prevMsg) ?></textarea>
                    </div>

                    <div class="form-footer">
                        <p class="form-note">* Champs obligatoires</p>
                        <button type="submit" class="btn btn-primary">
                            Envoyer le message →
                        </button>
                    </div>

                </form>
            </div>

        </div>

    </main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>