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

    <main class="page-wrapper">

        <div class="page-header">
            <div class="page-icon">✉️</div>
            <h1 data-text="Contact">Contact</h1>
            <p>Disponible pour alternance, stage ou échange professionnel</p>
        </div>

        <?php if ($formSuccess): ?>
            <div class="contact-alert contact-alert--success" role="alert">
                <span class="alert-icon">✔</span>
                <span><?= htmlspecialchars($formSuccess) ?></span>
            </div>
        <?php elseif ($formError): ?>
            <div class="contact-alert contact-alert--error" role="alert">
                <span class="alert-icon">⚠</span>
                <span><?= htmlspecialchars($formError) ?></span>
            </div>
        <?php endif; ?>

        <div class="contact-grid">

            <!-- ── Colonne gauche ── -->
            <div class="contact-left">

                <!-- Coordonnées -->
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

                <!-- Disponibilité -->
                <div class="card">
                    <div class="card-title"><span class="ct-icon">🟢</span>Disponibilité</div>
                    <div class="availability-block">
                        <div class="avail-dot"></div>
                        <div>
                            <p class="avail-title">Disponible</p>
                            <p class="avail-sub">Recherche alternance / stage — Cybersécurité — Rentrée 2026</p>
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

            <!-- ── Colonne droite : formulaire ── -->
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
                               placeholder="Alternance, stage, projet collaboratif..." />
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