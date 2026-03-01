<?php
/**
 * PORTFOLIO BTS SIO SLAM — Adriano Ferreira Da Silva
 * php/contact.php — Traitement du formulaire de contact
 *
 * Usage : action="php/contact.php" dans le formulaire HTML
 */

// --- Configuration ---
define('DEST_EMAIL', 'adrianoferreiradasilva7451@gmail.com'); // ← Mets ton adresse ici
define('SUBJECT',    'Portfolio BTS — Message de contact');

// --- Démarrer la session pour stocker les messages flash ---
session_start();

// --- Vérification de la méthode HTTP ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

// --- Récupération et nettoyage des données ---
$nom     = isset($_POST['nom'])     ? trim(htmlspecialchars($_POST['nom'],     ENT_QUOTES, 'UTF-8')) : '';
$email   = isset($_POST['email'])   ? trim(htmlspecialchars($_POST['email'],   ENT_QUOTES, 'UTF-8')) : '';
$message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8')) : '';

// --- Validation serveur ---
$errors = [];

if (strlen($nom) < 2) {
    $errors[] = 'Le nom doit comporter au moins 2 caractères.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'L\'adresse e-mail est invalide.';
}

if (strlen($message) < 10) {
    $errors[] = 'Le message doit contenir au moins 10 caractères.';
}

// --- Protection anti-spam basique (header injection) ---
if (preg_match('/(\r|\n|%0a|%0d|content-type:|bcc:|cc:)/i', $nom . $email)) {
    $errors[] = 'Contenu suspect détecté.';
}

// --- En cas d'erreur, retour avec message ---
if (!empty($errors)) {
    $_SESSION['form_error']  = implode(' ', $errors);
    $_SESSION['form_nom']    = $nom;
    $_SESSION['form_email']  = $email;
    $_SESSION['form_msg']    = $message;
    header('Location: ../index.php#contact');
    exit;
}

// --- Construction du corps de l'e-mail ---
$body  = "Nouveau message depuis le portfolio BTS de Adriano Ferreira Da Silva\n";
$body .= str_repeat('-', 60) . "\n\n";
$body .= "Nom    : {$nom}\n";
$body .= "Email  : {$email}\n";
$body .= "Date   : " . date('d/m/Y H:i') . "\n\n";
$body .= "Message :\n{$message}\n";

$headers  = "From: noreply@portfolio-adriano.fr\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// --- Envoi de l'e-mail ---
$sent = mail(DEST_EMAIL, SUBJECT, $body, $headers);

// --- Redirection avec message flash ---
if ($sent) {
    $_SESSION['form_success'] = 'Votre message a bien été envoyé ! Je vous répondrai dans les plus brefs délais.';
} else {
    $_SESSION['form_error'] = 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou me contacter directement par LinkedIn.';
}

header('Location: ../index.php#contact');
exit;
