/**
 * Markitos D'Oro - Motor de Animacoes GSAP + Lenis Otimizado
 */
document.addEventListener('DOMContentLoaded', function () {
  // 1. Inicializacao do Lenis Smooth Scroll Fluido (Sem travamentos)
  let lenis = null;
  if (typeof Lenis !== 'undefined') {
    lenis = new Lenis({
      duration: 1.1,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      orientation: 'vertical',
      gestureOrientation: 'vertical',
      smoothWheel: true,
      wheelMultiplier: 1.0,
      touchMultiplier: 1.8,
      infinite: false,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Integracao Lenis com GSAP ScrollTrigger
    if (typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    }

    // Rolagem Suave para Links Internos (#historia, #chef, #menu, #reservas)
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId && targetId !== '#') {
          const targetEl = document.querySelector(targetId);
          if (targetEl) {
            e.preventDefault();
            lenis.scrollTo(targetEl, {
              offset: -75,
              duration: 1.2,
            });
          }
        }
      });
    });
  }

  // 2. Custom Gold Follower Cursor (Com deteccao precisa)
  const cursor = document.getElementById('custom-cursor');
  const cursorDot = document.getElementById('custom-cursor-dot');

  if (cursor && cursorDot && window.matchMedia('(pointer: fine)').matches) {
    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let cursorX = mouseX;
    let cursorY = mouseY;

    window.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      cursorDot.style.left = `${mouseX}px`;
      cursorDot.style.top = `${mouseY}px`;
    });

    function animateCursor() {
      cursorX += (mouseX - cursorX) * 0.22;
      cursorY += (mouseY - cursorY) * 0.22;
      cursor.style.left = `${cursorX}px`;
      cursor.style.top = `${cursorY}px`;
      requestAnimationFrame(animateCursor);
    }
    requestAnimationFrame(animateCursor);

    // Expansao magnetica em elementos interativos
    const hoverElements = document.querySelectorAll('a, button, .interactive-hover, .gold-glow-card, input, select, textarea');
    hoverElements.forEach((el) => {
      el.addEventListener('mouseenter', () => cursor.classList.add('hovering'));
      el.addEventListener('mouseleave', () => cursor.classList.remove('hovering'));
    });
  }

  // 3. Revelacoes Cinemáticas GSAP
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Revelacao inicial do Hero
    gsap.from('.hero-reveal', {
      opacity: 0,
      y: 35,
      stagger: 0.15,
      duration: 1.0,
      ease: 'power3.out',
      delay: 0.1,
    });

    // Secoes com efeito Fade-Up no Scroll
    const animatedSections = document.querySelectorAll('.gsap-fade-section');
    animatedSections.forEach((section) => {
      gsap.from(section.querySelectorAll('.gsap-fade-item'), {
        scrollTrigger: {
          trigger: section,
          start: 'top 85%',
          toggleActions: 'play none none none',
        },
        opacity: 0,
        y: 30,
        stagger: 0.12,
        duration: 0.85,
        ease: 'power2.out',
      });
    });
  }
});
