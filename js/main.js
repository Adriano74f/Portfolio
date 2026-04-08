/**
 * PORTFOLIO ADRIANO — CYBERPUNK HOLOGRAPHIC
 * js/main.js — Effets interactifs futuristes
 */
(function () {
    'use strict';

    const isMobile = window.matchMedia('(max-width: 768px)').matches;

    /* ══════════════════════════════════════════════════════════════
       1. CURSEUR PERSONNALISÉ + TRAÎNÉE + PARTICULES AU CLIC
    ══════════════════════════════════════════════════════════════ */
    if (!isMobile) {
        const dot  = document.createElement('div');
        const ring = document.createElement('div');
        dot.id  = 'cursor-dot';
        ring.id = 'cursor-ring';
        document.body.appendChild(dot);
        document.body.appendChild(ring);

        let mouseX = 0, mouseY = 0;
        let ringX  = 0, ringY  = 0;
        let trailTimer = 0;

        document.addEventListener('mousemove', function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;

            dot.style.left  = mouseX + 'px';
            dot.style.top   = mouseY + 'px';

            // Traînée : une particule toutes les 40ms
            if (Date.now() - trailTimer > 40) {
                trailTimer = Date.now();
                var t = document.createElement('div');
                t.className = 'cursor-trail';
                t.style.left = mouseX + 'px';
                t.style.top  = mouseY + 'px';
                t.style.width  = (Math.random() * 3 + 2) + 'px';
                t.style.height = t.style.width;
                t.style.background = Math.random() > .5
                    ? 'rgba(0,255,231,' + (Math.random() * .5 + .2) + ')'
                    : 'rgba(0,136,255,' + (Math.random() * .4 + .1) + ')';
                document.body.appendChild(t);
                setTimeout(function () { t.remove(); }, 500);
            }
        });

        // Ring suit avec délai (inertie)
        function animateRing() {
            ringX += (mouseX - ringX) * 0.12;
            ringY += (mouseY - ringY) * 0.12;
            ring.style.left = ringX + 'px';
            ring.style.top  = ringY + 'px';
            requestAnimationFrame(animateRing);
        }
        animateRing();

        // Hover sur éléments cliquables
        var hoverTargets = 'a, button, .card, .nav-link, .stage-card, .project-card, .cert-card, .task-item, .info-block, .source-block';
        document.addEventListener('mouseover', function (e) {
            if (e.target.closest(hoverTargets)) {
                ring.classList.add('hover');
                dot.style.transform = 'translate(-50%, -50%) scale(1.6)';
            }
        });
        document.addEventListener('mouseout', function (e) {
            if (e.target.closest(hoverTargets)) {
                ring.classList.remove('hover');
                dot.style.transform = 'translate(-50%, -50%) scale(1)';
            }
        });

        // Clic — explosion de particules
        document.addEventListener('click', function (e) {
            ring.classList.add('click');
            setTimeout(function () { ring.classList.remove('click'); }, 200);

            var colors = ['#00ffe7','#0088ff','#ff3c6e','#ffe100','#7b2fff'];
            var count  = 14;

            for (var i = 0; i < count; i++) {
                (function (i) {
                    var p = document.createElement('div');
                    p.className = 'click-particle';

                    var angle = (i / count) * Math.PI * 2;
                    var dist  = 25 + Math.random() * 35;
                    var tx    = Math.cos(angle) * dist;
                    var ty    = Math.sin(angle) * dist;
                    var size  = (Math.random() * 3 + 2) + 'px';
                    var color = colors[Math.floor(Math.random() * colors.length)];

                    p.style.left       = e.clientX + 'px';
                    p.style.top        = e.clientY + 'px';
                    p.style.width      = size;
                    p.style.height     = size;
                    p.style.background = color;
                    p.style.boxShadow  = '0 0 6px ' + color;
                    p.style.setProperty('--tx', tx + 'px');
                    p.style.setProperty('--ty', ty + 'px');
                    p.style.animationDelay = (i * 0.015) + 's';

                    document.body.appendChild(p);
                    setTimeout(function () { p.remove(); }, 900);
                })(i);
            }
        });
    }

    /* ══════════════════════════════════════════════════════════════
       2. MENU MOBILE
    ══════════════════════════════════════════════════════════════ */
    var menuBtn = document.getElementById('menuBtn');
    var sidebar = document.getElementById('sidebar');
    var overlay = document.getElementById('sidebarOverlay');

    function openSidebar() {
        if (!sidebar || !menuBtn || !overlay) return;
        sidebar.classList.add('open');
        menuBtn.setAttribute('aria-expanded', 'true');
        menuBtn.textContent = '✕';
        overlay.style.display = 'block';
    }

    function closeSidebar() {
        if (!sidebar || !menuBtn || !overlay) return;
        sidebar.classList.remove('open');
        menuBtn.setAttribute('aria-expanded', 'false');
        menuBtn.textContent = '☰';
        overlay.style.display = 'none';
    }

    if (menuBtn) {
        menuBtn.addEventListener('click', function () {
            sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
        });
    }
    if (overlay)  overlay.addEventListener('click', closeSidebar);
    if (sidebar)  sidebar.querySelectorAll('.nav-link').forEach(function (l) { l.addEventListener('click', closeSidebar); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeSidebar(); });

    /* ══════════════════════════════════════════════════════════════
       3. SCROLL REVEAL avec délai en cascade
    ══════════════════════════════════════════════════════════════ */
    var cards = document.querySelectorAll('.card');

    if ('IntersectionObserver' in window && cards.length) {
        cards.forEach(function (c) {
            c.style.opacity   = '0';
            c.style.transform = 'translateY(24px)';
            c.style.transition = 'opacity .5s ease, transform .5s ease';
        });

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry, i) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    setTimeout(function () {
                        el.style.opacity   = '1';
                        el.style.transform = 'translateY(0)';
                    }, i * 65);
                    io.unobserve(el);
                }
            });
        }, { threshold: 0.05, rootMargin: '0px 0px -15px 0px' });

        cards.forEach(function (c) { io.observe(c); });
    } else {
        cards.forEach(function (c) { c.style.opacity = '1'; c.style.transform = 'none'; });
    }

    /* ══════════════════════════════════════════════════════════════
       4. EFFET 3D TILT SUR LES CARDS (desktop)
    ══════════════════════════════════════════════════════════════ */
    if (!isMobile) {
        document.querySelectorAll('.card').forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                var rect   = card.getBoundingClientRect();
                var cx     = rect.left + rect.width  / 2;
                var cy     = rect.top  + rect.height / 2;
                var dx     = (e.clientX - cx) / (rect.width  / 2);
                var dy     = (e.clientY - cy) / (rect.height / 2);
                var rotX   = -dy * 4;
                var rotY   =  dx * 4;

                card.style.transform = 'perspective(800px) rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg) translateZ(4px)';
                card.style.boxShadow = '0 0 20px rgba(0,255,231,.08), ' + (-dx * 6) + 'px ' + (-dy * 6) + 'px 18px rgba(0,0,0,.3)';

                // Shimmer suit la souris
                var shimmer = card.querySelector('.holo-shimmer');
                if (shimmer) {
                    var xPct = ((e.clientX - rect.left) / rect.width  * 100).toFixed(1);
                    var yPct = ((e.clientY - rect.top)  / rect.height * 100).toFixed(1);
                    shimmer.style.background = 'radial-gradient(circle at ' + xPct + '% ' + yPct + '%, rgba(0,255,231,.07), transparent 60%)';
                }
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform  = '';
                card.style.boxShadow  = '';
                var shimmer = card.querySelector('.holo-shimmer');
                if (shimmer) shimmer.style.background = '';
            });
        });
    }

    /* ══════════════════════════════════════════════════════════════
       5. AJOUTER DIV .holo-shimmer À CHAQUE CARD (dynamique)
    ══════════════════════════════════════════════════════════════ */
    document.querySelectorAll('.card').forEach(function (card) {
        if (!card.querySelector('.holo-shimmer')) {
            var s = document.createElement('div');
            s.className = 'holo-shimmer';
            card.appendChild(s);
        }
    });

    /* ══════════════════════════════════════════════════════════════
       6. TYPING EFFECT sur le titre de page
    ══════════════════════════════════════════════════════════════ */
    var pageTitle = document.querySelector('.page-header h1');
    if (pageTitle) {
        var text = pageTitle.textContent;
        pageTitle.setAttribute('data-text', text); // pour glitch CSS
        pageTitle.textContent = '';
        var i = 0;
        var speed = 38;
        (function type() {
            if (i < text.length) {
                pageTitle.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed + Math.random() * 20);
            }
        })();
    }

    /* ══════════════════════════════════════════════════════════════
       7. NAV LINK ACTIF au chargement (fallback JS)
    ══════════════════════════════════════════════════════════════ */
    var current = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.nav-link').forEach(function (link) {
        var href = (link.getAttribute('href') || '').split('/').pop();
        if (href === current && !link.classList.contains('active')) {
            link.classList.add('active');
        }
    });

    /* ══════════════════════════════════════════════════════════════
       8. VALIDATION FORMULAIRE CONTACT
    ══════════════════════════════════════════════════════════════ */
    var form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            var nom   = (this.nom    ? this.nom.value    : '').trim();
            var email = (this.email  ? this.email.value  : '').trim();
            var msg   = (this.message? this.message.value: '').trim();
            var errs  = [];

            if (nom.length < 2)                               errs.push('Le nom doit comporter au moins 2 caractères.');
            if (!email.includes('@') || !email.includes('.')) errs.push('Adresse e-mail invalide.');
            if (msg.length < 10)                              errs.push('Le message est trop court (10 caractères minimum).');

            if (errs.length) {
                e.preventDefault();
                var box = document.getElementById('formMsg');
                if (!box) { box = document.createElement('div'); box.id = 'formMsg'; form.prepend(box); }
                box.className = 'form-error';
                box.style.cssText = 'padding:10px 14px;margin-bottom:14px;border:1px solid rgba(255,60,110,.4);background:rgba(255,60,110,.07);color:#ff3c6e;font-family:var(--font-mono);font-size:.75rem;border-radius:4px;';
                box.innerHTML = '⚠ ' + errs.join(' ');
                box.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    }

})();