<?php
/**
 * pages/contact.php — Page de contact avec formulaire
 */
session_start();

// Récupérer et vider les messages flash
$formSuccess = $_SESSION['form_success'] ?? null;
$formError   = $_SESSION['form_error']   ?? null;
$prevNom     = $_SESSION['form_nom']     ?? '';
$prevEmail   = $_SESSION['form_email']   ?? '';
$prevMsg     = $_SESSION['form_msg']     ?? '';

unset(
    $_SESSION['form_success'],
    $_SESSION['form_error'],
    $_SESSION['form_nom'],
    $_SESSION['form_email'],
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
    <h1>Contact</h1>
    <p>Vous souhaitez me contacter ? N'hésitez pas à utiliser le formulaire ou mes réseaux.</p>
  </div>

  <!-- Messages flash PHP -->
  <?php if ($formSuccess): ?>
    <div class="form-success" role="alert" style="margin-bottom: 20px;">
      <span>✅</span> <?= htmlspecialchars($formSuccess) ?>
    </div>
  <?php elseif ($formError): ?>
    <div class="form-error" role="alert" style="margin-bottom: 20px;">
      <span>⚠️</span> <?= htmlspecialchars($formError) ?>
    </div>
  <?php endif; ?>

  <div class="card">
    <div class="contact-layout">

      <!-- Infos de contact -->
      <div class="contact-items">
        <div class="card-title" style="margin-bottom: 14px;"><span class="ct-icon">📋</span>Coordonnées</div>

        <div class="contact-item">
          <span class="ci-icon">📧</span>
          <a href="mailto:adriano.ferreiradasilva74@gmail.com" style="color:var(--text);">
            adriano.ferreiradasilva74@gmail.com
          </a>
        </div>

        <div class="contact-item">
          <span class="ci-icon">📱</span>
          <span>07 69 49 34 74</span>
        </div>

        <div class="contact-item">
          <span class="ci-icon">🔗</span>
          <a href="https://www.linkedin.com/in/adriano-ferreira-da-silva-382138339/"
             target="_blank" rel="noopener">
            LinkedIn — Adriano Ferreira Da Silva
          </a>
        </div>

        <div class="contact-item">
          <span class="ci-icon">🐙</span>
          <a href="https://github.com/Adriano74f" target="_blank" rel="noopener">
            GitHub — Adriano74f
          </a>
        </div>

        <div class="contact-item">
          <span class="ci-icon">📄</span>
          <a href="../img/Ferreira-Da-Silva-Adriano-CV.pdf" target="_blank">
            Télécharger le CV (PDF)
          </a>
        </div>
      </div>

      <!-- Formulaire -->
      <form class="contact-form"
            id="contactForm"
            action="../php/contact.php"
            method="POST"
            novalidate>

        <div class="card-title" style="margin-bottom: 14px;"><span class="ct-icon">✏️</span>Envoyer un message</div>

        <div class="form-group">
          <label for="nom">Nom complet</label>
          <input
            type="text"
            id="nom"
            name="nom"
            required
            placeholder="Prénom NOM"
            value="<?= htmlspecialchars($prevNom) ?>"
            autocomplete="name"
          />
        </div>

        <div class="form-group">
          <label for="email">Adresse e-mail</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            placeholder="exemple@mail.com"
            value="<?= htmlspecialchars($prevEmail) ?>"
            autocomplete="email"
          />
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea
            id="message"
            name="message"
            required
            rows="5"
            placeholder="Bonjour, je vous contacte au sujet de..."
          ><?= htmlspecialchars($prevMsg) ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="align-self: flex-start;">
          Envoyer le message →
        </button>

      </form>

    </div>
  </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
