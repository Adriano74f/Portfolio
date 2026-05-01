/**
 * PORTFOLIO ADRIANO — PROFESSIONAL CYBER EDITION
 * js/main.js
 */
(function () {
    'use strict';

    var isMobile = window.matchMedia('(max-width: 768px)').matches;

    /* ══════════════════════════════════════════════════════════════
       1. PAGE TRANSITION — OVERLAY FADE IN/OUT
    ══════════════════════════════════════════════════════════════ */
    var overlay = document.getElementById('page-overlay');
    if (overlay) {
        // Fade out l'overlay au chargement (révèle la page)
        overlay.style.opacity = '1';
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                overlay.style.opacity = '0';
                setTimeout(function () { overlay.style.pointerEvents = 'none'; }, 500);
            });
        });

        // Sur clic d'un lien interne : fade out vers la destination
        document.addEventListener('click', function (e) {
            var link = e.target.closest('a[href]');
            if (!link) return;
            var href = link.getAttribute('href') || '';
            // Ignorer : liens externes, ancres, mailto, target=_blank, boutons PDF
            if (
                link.hasAttribute('target') ||
                href.startsWith('#') ||
                href.startsWith('http') ||
                href.startsWith('mailto') ||
                href.startsWith('tel') ||
                href === ''
            ) return;

            e.preventDefault();
            var dest = href;
            overlay.style.pointerEvents = 'all';
            overlay.style.opacity = '1';
            setTimeout(function () { window.location.href = dest; }, 380);
        });
    }

    /* ══════════════════════════════════════════════════════════════
       2. TOPNAV — SCROLL SHADOW
    ══════════════════════════════════════════════════════════════ */
    var topnav = document.getElementById('topnav');
    if (topnav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 8) {
                topnav.classList.add('scrolled');
            } else {
                topnav.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    /* ══════════════════════════════════════════════════════════════
       3. MENU MOBILE (hamburger + dropdown)
    ══════════════════════════════════════════════════════════════ */
    var menuBtn    = document.getElementById('menuBtn');
    var mobileMenu = document.getElementById('mobileMenu');

    function openMenu() {
        if (!menuBtn || !mobileMenu) return;
        mobileMenu.classList.add('open');
        menuBtn.classList.add('open');
        menuBtn.setAttribute('aria-expanded', 'true');
    }

    function closeMenu() {
        if (!menuBtn || !mobileMenu) return;
        mobileMenu.classList.remove('open');
        menuBtn.classList.remove('open');
        menuBtn.setAttribute('aria-expanded', 'false');
    }

    if (menuBtn) {
        menuBtn.addEventListener('click', function () {
            mobileMenu && mobileMenu.classList.contains('open') ? closeMenu() : openMenu();
        });
    }

    if (mobileMenu) {
        mobileMenu.querySelectorAll('.mobile-link').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
    });

    document.addEventListener('click', function (e) {
        if (
            mobileMenu && mobileMenu.classList.contains('open') &&
            !mobileMenu.contains(e.target) &&
            menuBtn && !menuBtn.contains(e.target)
        ) closeMenu();
    });

    /* ══════════════════════════════════════════════════════════════
       4. NAV LINK ACTIF (fallback JS)
    ══════════════════════════════════════════════════════════════ */
    var current = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.topnav-link, .mobile-link').forEach(function (link) {
        var href = (link.getAttribute('href') || '').split('/').pop();
        if (href === current && !link.classList.contains('active')) {
            link.classList.add('active');
        }
    });

    /* ══════════════════════════════════════════════════════════════
       5. CURSEUR PERSONNALISÉ + TRAÎNÉE + PARTICULES AU CLIC
    ══════════════════════════════════════════════════════════════ */
    if (!isMobile) {
        var dot  = document.createElement('div');
        var ring = document.createElement('div');
        dot.id  = 'cursor-dot';
        ring.id = 'cursor-ring';
        document.body.appendChild(dot);
        document.body.appendChild(ring);

        var mouseX = 0, mouseY = 0;
        var ringX  = 0, ringY  = 0;
        var trailTimer = 0;

        document.addEventListener('mousemove', function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;

            dot.style.left = mouseX + 'px';
            dot.style.top  = mouseY + 'px';

            // Particule de traînée toutes les 45ms
            if (Date.now() - trailTimer > 45) {
                trailTimer = Date.now();
                var t = document.createElement('div');
                t.className = 'cursor-trail';
                var sz = (Math.random() * 3 + 2) + 'px';
                t.style.cssText =
                    'left:' + mouseX + 'px;top:' + mouseY + 'px;' +
                    'width:' + sz + ';height:' + sz + ';' +
                    'background:' + (Math.random() > .5
                        ? 'rgba(0,255,231,' + (Math.random() * .45 + .15) + ')'
                        : 'rgba(0,136,255,' + (Math.random() * .35 + .1) + ')') + ';';
                document.body.appendChild(t);
                setTimeout(function () { t.remove(); }, 580);
            }
        });

        // Ring avec inertie
        (function animateRing() {
            ringX += (mouseX - ringX) * 0.1;
            ringY += (mouseY - ringY) * 0.1;
            ring.style.left = ringX + 'px';
            ring.style.top  = ringY + 'px';
            requestAnimationFrame(animateRing);
        })();

        // Hover éléments cliquables
        var hoverTargets = 'a, button, .card, .topnav-link, .mobile-link, .stage-card, .project-card, .cert-card, .task-item, .info-block, .source-block, .contact-item';

        document.addEventListener('mouseover', function (e) {
            if (e.target.closest(hoverTargets)) {
                ring.classList.add('hover');
                dot.style.transform = 'translate(-50%,-50%) scale(1.7)';
            }
        });

        document.addEventListener('mouseout', function (e) {
            if (e.target.closest(hoverTargets)) {
                ring.classList.remove('hover');
                dot.style.transform = 'translate(-50%,-50%) scale(1)';
            }
        });

        // Clic — explosion élégante
        document.addEventListener('click', function (e) {
            ring.classList.add('click');
            setTimeout(function () { ring.classList.remove('click'); }, 240);

            var colors = ['#00ffe7', '#0088ff', '#ff3c6e', '#ffe100', '#7b2fff'];
            var count  = 10;

            for (var i = 0; i < count; i++) {
                (function (idx) {
                    var p      = document.createElement('div');
                    p.className = 'click-particle';
                    var angle  = (idx / count) * Math.PI * 2;
                    var dist   = 22 + Math.random() * 30;
                    var tx     = Math.cos(angle) * dist;
                    var ty     = Math.sin(angle) * dist;
                    var size   = (Math.random() * 3 + 2) + 'px';
                    var color  = colors[Math.floor(Math.random() * colors.length)];
                    p.style.cssText =
                        'left:' + e.clientX + 'px;top:' + e.clientY + 'px;' +
                        'width:' + size + ';height:' + size + ';' +
                        'background:' + color + ';' +
                        'box-shadow:0 0 6px ' + color + ';';
                    p.style.setProperty('--tx', tx + 'px');
                    p.style.setProperty('--ty', ty + 'px');
                    p.style.animationDelay = (idx * 0.012) + 's';
                    document.body.appendChild(p);
                    setTimeout(function () { p.remove(); }, 820);
                })(i);
            }
        });
    }

    /* ══════════════════════════════════════════════════════════════
       6. SCROLL REVEAL — cascade sur les .card
    ══════════════════════════════════════════════════════════════ */
    var cards = document.querySelectorAll('.card');

    if ('IntersectionObserver' in window && cards.length) {
        cards.forEach(function (c) {
            c.style.opacity   = '0';
            c.style.transform = 'translateY(22px)';
            c.style.transition = 'opacity .48s ease, transform .48s ease';
        });

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry, i) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var idx = Array.from(cards).indexOf(el);
                    setTimeout(function () {
                        el.style.opacity   = '1';
                        el.style.transform = 'translateY(0)';
                    }, Math.min(idx, 4) * 70);
                    io.unobserve(el);
                }
            });
        }, { threshold: 0.04, rootMargin: '0px 0px -10px 0px' });

        cards.forEach(function (c) { io.observe(c); });
    } else {
        cards.forEach(function (c) { c.style.opacity = '1'; c.style.transform = 'none'; });
    }

    /* ══════════════════════════════════════════════════════════════
       7. EFFET 3D TILT SUR LES CARDS (desktop)
    ══════════════════════════════════════════════════════════════ */
    if (!isMobile) {
        document.querySelectorAll('.card').forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                var rect = card.getBoundingClientRect();
                var cx   = rect.left + rect.width  / 2;
                var cy   = rect.top  + rect.height / 2;
                var dx   = (e.clientX - cx) / (rect.width  / 2);
                var dy   = (e.clientY - cy) / (rect.height / 2);
                var rotX = -dy * 3.5;
                var rotY =  dx * 3.5;

                card.style.transform = 'perspective(900px) rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg) translateZ(5px)';
                card.style.boxShadow = '0 0 20px rgba(0,255,231,.07),' + (-dx * 5) + 'px ' + (-dy * 5) + 'px 16px rgba(0,0,0,.28)';

                var shimmer = card.querySelector('.holo-shimmer');
                if (shimmer) {
                    var xPct = ((e.clientX - rect.left) / rect.width  * 100).toFixed(1);
                    var yPct = ((e.clientY - rect.top)  / rect.height * 100).toFixed(1);
                    shimmer.style.background = 'radial-gradient(circle at ' + xPct + '% ' + yPct + '%, rgba(0,255,231,.06), transparent 60%)';
                }
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = '';
                card.style.boxShadow = '';
                var shimmer = card.querySelector('.holo-shimmer');
                if (shimmer) shimmer.style.background = '';
            });
        });
    }

    /* ══════════════════════════════════════════════════════════════
       8. HOLO-SHIMMER DYNAMIQUE sur chaque card
    ══════════════════════════════════════════════════════════════ */
    document.querySelectorAll('.card').forEach(function (card) {
        if (!card.querySelector('.holo-shimmer')) {
            var s = document.createElement('div');
            s.className = 'holo-shimmer';
            card.appendChild(s);
        }
    });

    /* ══════════════════════════════════════════════════════════════
       9. TYPING EFFECT sur le titre de page
    ══════════════════════════════════════════════════════════════ */
    var pageTitle = document.querySelector('.page-header h1');
    if (pageTitle) {
        var text = pageTitle.textContent.trim();
        pageTitle.setAttribute('data-text', text);
        pageTitle.textContent = '';
        var charIdx = 0;
        (function type() {
            if (charIdx < text.length) {
                pageTitle.textContent += text.charAt(charIdx++);
                setTimeout(type, 36 + Math.random() * 18);
            }
        })();
    }

    /* ══════════════════════════════════════════════════════════════
       10. VALIDATION FORMULAIRE CONTACT
    ══════════════════════════════════════════════════════════════ */
    var form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            var nom   = (this.nom     ? this.nom.value     : '').trim();
            var email = (this.email   ? this.email.value   : '').trim();
            var msg   = (this.message ? this.message.value : '').trim();
            var errs  = [];

            if (nom.length < 2)                                errs.push('Le nom doit comporter au moins 2 caractères.');
            if (!email.includes('@') || !email.includes('.'))  errs.push('Adresse e-mail invalide.');
            if (msg.length < 10)                               errs.push('Le message est trop court (10 caractères minimum).');

            if (errs.length) {
                e.preventDefault();
                var box = document.getElementById('formMsg');
                if (!box) { box = document.createElement('div'); box.id = 'formMsg'; form.prepend(box); }
                box.className = 'alert alert-error';
                box.innerHTML = '⚠ ' + errs.join(' ');
                box.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    }

})();