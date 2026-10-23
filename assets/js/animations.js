/**
 * Markitos D'Oro - Motor de Animações Cinemáticas e Smooth Scroll
 * Lenis 1.1 + GSAP ScrollTrigger
 */
document.addEventListener('DOMContentLoaded', function () {
  // 1. Inicializacao do Lenis Smooth Scroll Fluido (Sem travamentos e sem latência)
  let lenis = null;
  if (typeof Lenis !== 'undefined') {
    lenis = new Lenis({
      duration: 0.85,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      orientation: 'vertical',
      gestureOrientation: 'vertical',
      smoothWheel: true,
      wheelMultiplier: 0.9,
      touchMultiplier: 1.4,
      syncTouch: false, // Mantém a resposta nativa do toque em celulares
      infinite: false,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Integracao com GSAP ScrollTrigger
    if (typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    }

    // Interceptacao da Logo e Botoes de Topo: Deslize continuo para o topo sem recarregar pagina
    document.querySelectorAll('.scroll-to-top, #site-logo-link').forEach((btn) => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        lenis.scrollTo(0, {
          duration: 1.0,
          easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        });
      });
    });

    // Rolagem Suave com Compensacao de Cabecalho para todos os links internos
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      if (anchor.classList.contains('scroll-to-top') || anchor.id === 'site-logo-link') {
        return;
      }

      anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId && targetId !== '#' && targetId.startsWith('#')) {
          const targetEl = document.querySelector(targetId);
          if (targetEl) {
            e.preventDefault();
            lenis.scrollTo(targetEl, {
              offset: -75,
              duration: 0.95,
              easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            });
          }
        }
      });
    });
  } else {
    // Fallback nativo
    document.querySelectorAll('.scroll-to-top, #site-logo-link').forEach((btn) => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });
  }

  // 2. Revelacoes Cinemáticas com GSAP ScrollTrigger
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Revelacao escalonada do Hero
    gsap.from('.hero-reveal', {
      opacity: 0,
      y: 28,
      stagger: 0.12,
      duration: 0.85,
      ease: 'power3.out',
      delay: 0.1,
    });

    // Secoes em Fade-Up no Scroll
    const animatedSections = document.querySelectorAll('.gsap-fade-section');
    animatedSections.forEach((section) => {
      gsap.from(section.querySelectorAll('.gsap-fade-item'), {
        scrollTrigger: {
          trigger: section,
          start: 'top 85%',
          toggleActions: 'play none none none',
        },
        opacity: 0,
        y: 26,
        stagger: 0.09,
        duration: 0.75,
        ease: 'power2.out',
      });
    });
  }
});
