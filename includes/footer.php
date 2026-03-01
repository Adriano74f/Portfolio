<?php
/**
 * includes/footer.php
 * Pied de page partagé — ferme le <body> et charge le JS
 */
?>

  <footer class="footer">
    <p>
      © <?= date('Y') ?> Adriano Ferreira Da Silva —
      Portfolio BTS SIO SLAM —
      <a href="<?= $root ?? '' ?>pages/contact.php">Contact</a>
    </p>
  </footer>

  <script src="<?= $root ?? '' ?>js/main.js"></script>
</body>
</html>
