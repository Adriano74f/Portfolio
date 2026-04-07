/**
 * PORTFOLIO BTS SIO SLAM — Adriano Ferreira Da Silva
 * js/main.js
 */
(function () {
    'use strict';

    /* ══════════════════════════════════════════════
       MENU MOBILE — Sidebar toggle
    ══════════════════════════════════════════════ */
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    function openSidebar() {
        sidebar.classList.add('open');
        menuBtn.setAttribute('aria-expanded', 'true');
        menuBtn.textContent = '✕';
        overlay.style.display = 'block';
    }

    function closeSidebar() {
        sidebar.classList.remove('open');
        menuBtn.setAttribute('aria-expanded', 'false');
        menuBtn.textContent = '☰';
        overlay.style.display = 'none';
    }

    if (menuBtn && sidebar && overlay) {
        menuBtn.addEventListener('click', function () {
            sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
        });

        overlay.addEventListener('click', closeSidebar);

        // Fermer aussi si on clique sur un lien de nav (mobile)
        sidebar.querySelectorAll('.nav-link').forEach(function (link) {
            link.addEventListener('click', closeSidebar);
        });

        // Fermer si Échap
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeSidebar();
        });
    }

    /* ══════════════════════════════════════════════
       SCROLL REVEAL — Apparition des cards
    ══════════════════════════════════════════════ */
    var cards = document.querySelectorAll('.card');

    if ('IntersectionObserver' in window && cards.length) {
        // Retirer l'animation CSS statique pour laisser JS gérer
        cards.forEach(function (card) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.45s ease, transform 0.45s ease';
        });

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry, i) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    setTimeout(function () {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }, i * 60);
                    io.unobserve(el);
                }
            });
        }, { threshold: 0.06, rootMargin: '0px 0px -20px 0px' });

        cards.forEach(function (c) { io.observe(c); });
    } else {
        // Fallback sans IntersectionObserver
        cards.forEach(function (c) {
            c.style.opacity = '1';
            c.style.transform = 'none';
        });
    }

    /* ══════════════════════════════════════════════
       ACTIVE NAV — Souligner la page courante
       (utile si la classe PHP n'est pas définie)
    ══════════════════════════════════════════════ */
    var current = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav-link').forEach(function (link) {
        var href = link.getAttribute('href').split('/').pop();
        if (href === current && !link.classList.contains('active')) {
            link.classList.add('active');
        }
    });

    /* ══════════════════════════════════════════════
       VALIDATION FORMULAIRE CONTACT
    ══════════════════════════════════════════════ */
    var form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            var nom   = (this.nom   ? this.nom.value   : '').trim();
            var email = (this.email ? this.email.value : '').trim();
            var msg   = (this.message ? this.message.value : '').trim();
            var errs  = [];

            if (nom.length < 2)                               errs.push('Le nom doit comporter au moins 2 caractères.');
            if (!email.includes('@') || !email.includes('.')) errs.push('Adresse e-mail invalide.');
            if (msg.length < 10)                              errs.push('Le message est trop court (10 caractères minimum).');

            if (errs.length) {
                e.preventDefault();
                var box = document.getElementById('formMsg');
                if (!box) {
                    box = document.createElement('div');
                    box.id = 'formMsg';
                    form.prepend(box);
                }
                box.className = 'form-error';
                box.innerHTML = '⚠️ ' + errs.join(' ');
                box.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    }

})();