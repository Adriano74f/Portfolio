<?php
/**
 * includes/footer.php
 * Ferme .main-content et .layout ouverts dans header.php
 */
?>

<footer class="footer">
    <p>
        © <?= date('Y') ?> Adriano Ferreira Da Silva —
        Portfolio BTS SIO SLAM —
        <a href="<?= $base ?? '' ?>pages/contact.php">Contact</a>
    </p>
</footer>

</div><!-- /.main-content -->
</div><!-- /.layout -->

<script src="<?= $base ?? '' ?>js/main.js"></script>
</body>
</html>