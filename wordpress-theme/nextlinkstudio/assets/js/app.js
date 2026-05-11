/* NextLink Studio — JS */

/* ── MENU MOBILE ── */
function toggleMenu() {
  const navMobile = document.getElementById('navMobile');
  const menuToggle = document.querySelector('.menu-toggle');
  const isOpen = navMobile.classList.toggle('open');
  if (menuToggle) menuToggle.classList.toggle('active');
  document.body.style.overflow = isOpen ? 'hidden' : '';
  if (!isOpen) {
    document.querySelectorAll('.nav-mobile-group.open').forEach(g => g.classList.remove('open'));
  }
}

function toggleExpertise(btn) {
  btn.closest('.nav-mobile-group').classList.toggle('open');
}

document.addEventListener('click', function(e) {
  const nav = document.querySelector('.nav-wrapper');
  const navMobile = document.getElementById('navMobile');
  const menuToggle = document.querySelector('.menu-toggle');
  if (nav && !nav.contains(e.target) && !navMobile.contains(e.target) && navMobile.classList.contains('open')) {
    navMobile.classList.remove('open');
    if (menuToggle) menuToggle.classList.remove('active');
    document.body.style.overflow = '';
    document.querySelectorAll('.nav-mobile-group.open').forEach(g => g.classList.remove('open'));
  }
});


/* ── PARALLAX ── */
(function () {
  const heroBg = document.querySelector('.hero-parallax-bg');
  const painEl = document.querySelector('.pain');
  const painBg = document.querySelector('.pain-parallax-bg');
  let ticking = false;

  function update() {
    const scrollY = window.scrollY;
    if (heroBg) {
      heroBg.style.transform = 'translateY(' + (scrollY * 0.5) + 'px)';
    }
    if (painBg && painEl) {
      const offset = (scrollY - painEl.offsetTop) * 0.4;
      painBg.style.transform = 'translateY(' + offset + 'px)';
    }
    ticking = false;
  }

  window.addEventListener('scroll', function () {
    if (!ticking) {
      requestAnimationFrame(update);
      ticking = true;
    }
  }, { passive: true });

  update();
})();

/* ── NAV TRANSPARENTE → BLANCHE AU SCROLL ── */
(function () {
  const nav = document.querySelector('.nav-wrapper');
  if (!nav) return;

  const hasHero = !!document.querySelector('.hero');

  function updateNav() {
    if (window.scrollY > 10 || !hasHero) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', updateNav, { passive: true });
  updateNav();
})();

/* ── FORMULAIRE CONTACT ── */
function handleSubmit(e) {
  e.preventDefault();
  const btnText = e.target.querySelector('.btn-text');
  const btnLoading = e.target.querySelector('.btn-loading');
  if (btnText) btnText.style.display = 'none';
  if (btnLoading) btnLoading.style.display = 'inline';

  setTimeout(() => {
    const form = document.getElementById('contactForm');
    const success = document.getElementById('formSuccess');
    if (form) form.style.display = 'none';
    if (success) success.style.display = 'block';
  }, 1400);
}

/* ── FILTRE RÉALISATIONS ── */
function filtrer(btn, cat) {
  document.querySelectorAll('.filtre').forEach(f => f.classList.remove('active'));
  btn.classList.add('active');

  document.querySelectorAll('.portfolio-card-full').forEach(card => {
    if (cat === 'tous' || card.dataset.cat === cat) {
      card.style.display = '';
    } else {
      card.style.display = 'none';
    }
  });
}

/* ── FAQ ACCORDION ── */
function toggleFaq(btn) {
  const answer = btn.nextElementSibling;
  const isOpen = btn.classList.contains('open');

  document.querySelectorAll('.faq-question.open').forEach(q => {
    q.classList.remove('open');
    q.nextElementSibling.classList.remove('open');
  });

  if (!isOpen) {
    btn.classList.add('open');
    answer.classList.add('open');
  }
}

/* ── LEAD MAGNET ── */
function handleLeadMagnet(e) {
  e.preventDefault();
  const form = e.target;
  const success = form.parentElement.querySelector('.lead-magnet-success');
  form.style.display = 'none';
  if (success) success.style.display = 'block';
}

/* ── SCROLL REVEAL ── */
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.08 });

document.querySelectorAll(
  '.service-card, .portfolio-card, .portfolio-card-full, .pricing-card, .pricing-card-page, .step, .pain-card, .preview-card, .ef-item, .deliverable-item, .option-item, .faq-item, .resultat-item, .logo-item, .bm-item'
).forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(24px)';
  el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
  observer.observe(el);
});

/* ── TESTIMONIALS NAV ── */
(function () {
  const cards = Array.from(document.querySelectorAll('.tm-card'));
  if (!cards.length) return;
  const N = cards.length;
  let featuredIdx = 1;

  function update() {
    const prev = (featuredIdx - 1 + N) % N;
    const next = (featuredIdx + 1) % N;
    cards.forEach(function (c, i) {
      c.classList.remove('tm-featured', 'tm-hidden');
      if (i === featuredIdx) {
        c.classList.add('tm-featured');
      } else if (i !== prev && i !== next) {
        c.classList.add('tm-hidden');
      }
    });
  }

  window.tmNav = function (dir) {
    featuredIdx = (featuredIdx + dir + N) % N;
    update();
  };

  update();
})();

/* ── RÉALISATIONS PREVIEW — cascade reveal ── */
(function () {
  const grid = document.querySelector('.realisations-preview .portfolio-grid--triple');
  if (!grid) return;
  const gridObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        gridObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  gridObserver.observe(grid);
})();

/* ── SPOTLIGHT VISUAL REVEAL + FLOAT ── */
(function () {
  const spotlightObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        spotlightObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.spotlight-visual').forEach(el => {
    spotlightObserver.observe(el);
  });
})();

/* ── EXPERTISE NAV ACTIVE ON SCROLL ── */
const expertiseSections = document.querySelectorAll('.expertise-section');
if (expertiseSections.length) {
  const navLinks = document.querySelectorAll('.expertise-nav a');
  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(a => {
          const isActive = a.href.includes(id);
          a.style.color = isActive ? 'var(--purple-vivid)' : '';
          a.style.borderColor = isActive ? 'var(--purple)' : '';
          a.style.backgroundColor = isActive ? 'var(--purple-soft)' : '';
        });
      }
    });
  }, { threshold: 0.4 });

  expertiseSections.forEach(s => sectionObserver.observe(s));
}
