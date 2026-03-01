/**
 * PORTFOLIO BTS SIO SLAM — Adriano Ferreira Da Silva
 * js/main.js — Scripts principaux
 */

(function () {
  'use strict';

  /* ============================================================
     1. REVEAL AU SCROLL (IntersectionObserver)
     ============================================================ */
  const cards = document.querySelectorAll('.card');

  const revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          // Décalage léger pour un effet en cascade
          setTimeout(() => {
            entry.target.classList.add('visible');
          }, idx * 60);
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.08, rootMargin: '0px 0px -40px 0px' }
  );

  cards.forEach((card) => revealObserver.observe(card));

  /* ============================================================
     2. NAVIGATION — Smooth scroll + Highlight actif
     ============================================================ */
  const navLinks   = document.querySelectorAll('.nav a');
  const sectionIds = Array.from(navLinks).map((a) =>
    a.getAttribute('href')
  );

  navLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute('href'));
      if (!target) return;

      // Retirer active de tous, puis ajouter au cliqué
      navLinks.forEach((n) => n.classList.remove('active'));
      link.classList.add('active');

      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  // Highlight selon position de scroll
  const sectionEls = sectionIds.map((id) => document.querySelector(id));

  function updateActiveNav() {
    const scrollY = window.scrollY + 120;
    let currentIdx = 0;

    sectionEls.forEach((sec, i) => {
      if (sec && sec.offsetTop <= scrollY) currentIdx = i;
    });

    navLinks.forEach((n) => n.classList.remove('active'));
    if (navLinks[currentIdx]) navLinks[currentIdx].classList.add('active');
  }

  window.addEventListener('scroll', updateActiveNav, { passive: true });
  updateActiveNav(); // Appel initial

  /* ============================================================
     3. FORMULAIRE CONTACT — Validation côté client
     ============================================================ */
  const form = document.getElementById('contactForm');

  if (form) {
    form.addEventListener('submit', function (e) {
      const nameVal  = (this.nom?.value   || '').trim();
      const emailVal = (this.email?.value || '').trim();
      const msgVal   = (this.message?.value || '').trim();

      const errors = [];

      if (nameVal.length < 2)        errors.push('Votre nom doit comporter au moins 2 caractères.');
      if (!emailVal.includes('@') || !emailVal.includes('.'))
                                      errors.push('Adresse e-mail invalide.');
      if (msgVal.length < 10)        errors.push('Votre message doit contenir au moins 10 caractères.');

      if (errors.length > 0) {
        e.preventDefault();
        showFormMessage('error', errors.join(' '));
      }
    });
  }

  function showFormMessage(type, msg) {
    // Supprimer ancienne alerte si elle existe
    const old = document.getElementById('formMsg');
    if (old) old.remove();

    const div = document.createElement('div');
    div.id = 'formMsg';
    div.className = type === 'error' ? 'form-error' : 'form-success';
    div.innerHTML = `<span>${type === 'error' ? '⚠️' : '✅'}</span> ${msg}`;

    form.insertAdjacentElement('beforebegin', div);
    div.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }

  /* ============================================================
     4. TOOLTIPS LÉGERS SUR LES SKILLS (facultatif)
     ============================================================ */
  document.querySelectorAll('[data-tooltip]').forEach((el) => {
    el.addEventListener('mouseenter', (e) => {
      const tip = document.createElement('div');
      tip.className = 'tooltip';
      tip.textContent = el.dataset.tooltip;
      document.body.appendChild(tip);

      const rect = el.getBoundingClientRect();
      tip.style.cssText = `
        position: fixed;
        top: ${rect.top - tip.offsetHeight - 8 + window.scrollY}px;
        left: ${rect.left + rect.width / 2 - tip.offsetWidth / 2}px;
        background: rgba(8,11,16,0.95);
        border: 1px solid rgba(94,255,168,0.2);
        color: #e6eef6;
        padding: 5px 10px;
        border-radius: 8px;
        font-size: 12px;
        pointer-events: none;
        z-index: 9999;
        white-space: nowrap;
      `;
    });

    el.addEventListener('mouseleave', () => {
      document.querySelectorAll('.tooltip').forEach((t) => t.remove());
    });
  });

})();
