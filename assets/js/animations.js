/**
 * Markitos D'Oro - Motor de Animacoes Cinemáticas e Smooth Scroll
 * Desenvolvido com GSAP, ScrollTrigger e Lenis calibrado para resposta tátil instantânea
 */
document.addEventListener('DOMContentLoaded', function () {
  // 1. Inicializacao do Lenis com Física Tátil Suave (Sem latência ou sensação borrachuda)
  let lenis = null;
  if (typeof Lenis !== 'undefined') {
    lenis = new Lenis({
      duration: 0.85,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      orientation: 'vertical',
      gestureOrientation: 'vertical',
      smoothWheel: true,
      wheelMultiplier: 0.9,
      touchMultiplier: 1.5,
      syncTouch: false, // Mantém a física nativa no toque para evitar travamentos em celulares
      infinite: false,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Sincronizacao perfeita com GSAP ScrollTrigger
    if (typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    }

    // INTERCEPTACAO DO LOGO: Deslizar suavemente ate o topo SEM DAR F5 OU RECARREGAR
    const scrollToTopElements = document.querySelectorAll('.scroll-to-top, #site-logo-link');
    scrollToTopElements.forEach((btn) => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        lenis.scrollTo(0, {
          duration: 1.1,
          easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        });
      });
    });

    // ROLAGEM SUAVE PARA TODOS OS LINKS DE ANCORA (#historia, #chef, #menu, #experiencia, #reservas)
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      // Ignora links que apenas recarregam ou o topo ja tratado
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
              duration: 1.0,
              easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            });
          }
        }
      });
    });
  } else {
    // Fallback nativo caso o Lenis nao carregue
    document.querySelectorAll('.scroll-to-top, #site-logo-link').forEach((btn) => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });
  }

  // 2. Cursor Magnetico Dourado Minimalista
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
      cursorX += (mouseX - cursorX) * 0.25;
      cursorY += (mouseY - cursorY) * 0.25;
      cursor.style.left = `${cursorX}px`;
      cursor.style.top = `${cursorY}px`;
      requestAnimationFrame(animateCursor);
    }
    requestAnimationFrame(animateCursor);

    // Expansao sobre botoes e links
    const hoverElements = document.querySelectorAll('a, button, .interactive-hover, .gold-glow-card, input, select, textarea');
    hoverElements.forEach((el) => {
      el.addEventListener('mouseenter', () => cursor.classList.add('hovering'));
      el.addEventListener('mouseleave', () => cursor.classList.remove('hovering'));
    });
  }

  // 3. Revelacoes Cinemáticas com GSAP ScrollTrigger
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Revelacao escalonada do Hero
    gsap.from('.hero-reveal', {
      opacity: 0,
      y: 30,
      stagger: 0.12,
      duration: 0.9,
      ease: 'power3.out',
      delay: 0.1,
    });

    // Secoes que surgem com elegancia durante o scroll
    const animatedSections = document.querySelectorAll('.gsap-fade-section');
    animatedSections.forEach((section) => {
      gsap.from(section.querySelectorAll('.gsap-fade-item'), {
        scrollTrigger: {
          trigger: section,
          start: 'top 85%',
          toggleActions: 'play none none none',
        },
        opacity: 0,
        y: 28,
        stagger: 0.1,
        duration: 0.8,
        ease: 'power2.out',
      });
    });
  }
});
