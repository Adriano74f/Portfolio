/**
 * PORTFOLIO BTS SIO SLAM — Adriano Ferreira Da Silva
 * js/main.js
 */
(function () {
  'use strict';

  /* ── Reveal au scroll ── */
  const cards = document.querySelectorAll('.card');
  if (cards.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((e, i) => {
        if (e.isIntersecting) {
          setTimeout(() => e.target.classList.add('visible'), i * 70);
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.07, rootMargin: '0px 0px -30px 0px' });
    cards.forEach(c => io.observe(c));
  }

  /* ── Menu mobile toggle ── */
  const toggle  = document.getElementById('navToggle');
  const mobileMenu = document.getElementById('navMobile');

  if (toggle && mobileMenu) {
    toggle.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open);
      toggle.textContent = open ? '✕' : '☰';
    });

    // Fermer si on clique sur un lien
    mobileMenu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        toggle.textContent = '☰';
        toggle.setAttribute('aria-expanded', 'false');
      });
    });

    // Fermer si clic extérieur
    document.addEventListener('click', (e) => {
      if (!toggle.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.remove('open');
        toggle.textContent = '☰';
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ── Validation formulaire contact ── */
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', function (e) {
      const nom   = (this.nom?.value   || '').trim();
      const email = (this.email?.value || '').trim();
      const msg   = (this.message?.value || '').trim();
      const errs  = [];

      if (nom.length < 2)                              errs.push('Le nom doit comporter au moins 2 caractères.');
      if (!email.includes('@') || !email.includes('.')) errs.push('E-mail invalide.');
      if (msg.length < 10)                              errs.push('Le message est trop court (10 caractères min).');

      if (errs.length) {
        e.preventDefault();
        let box = document.getElementById('formMsg');
        if (!box) { box = document.createElement('div'); box.id = 'formMsg'; form.prepend(box); }
        box.className = 'form-error';
        box.innerHTML = '⚠️ ' + errs.join(' ');
        box.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  }

})();
