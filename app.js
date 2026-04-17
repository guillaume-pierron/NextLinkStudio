/* NextLink Studio — JS */

function toggleMenu() {
  document.getElementById('navMobile').classList.toggle('open');
}

// Fermer le menu si clic en dehors
document.addEventListener('click', function(e) {
  const nav = document.querySelector('.nav-wrapper');
  if (!nav.contains(e.target)) {
    document.getElementById('navMobile').classList.remove('open');
  }
});

// Soumission formulaire (simulation)
function handleSubmit(e) {
  e.preventDefault();
  const btn = e.target.querySelector('.btn-text');
  const loading = e.target.querySelector('.btn-loading');
  btn.style.display = 'none';
  loading.style.display = 'inline';

  setTimeout(() => {
    document.getElementById('contactForm').style.display = 'none';
    document.getElementById('formSuccess').style.display = 'block';
  }, 1400);
}

// Scroll navbar shadow
window.addEventListener('scroll', () => {
  const nav = document.querySelector('.nav-wrapper');
  nav.style.boxShadow = window.scrollY > 20
    ? '0 4px 32px rgba(0,0,0,0.3)'
    : 'none';
});

// Reveal on scroll (léger)
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll(
  '.service-card, .portfolio-card, .testimonial, .pricing-card, .step, .pain-card'
).forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(24px)';
  el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
  observer.observe(el);
});
