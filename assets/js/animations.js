/**
 * Markitos D'Oro - Motor de Animacoes GSAP + Lenis + Cursor Magnetico
 */
document.addEventListener('DOMContentLoaded', function () {
  // 1. Inicializacao do Lenis Smooth Scroll
  let lenisInstance = null;
  if (typeof Lenis !== 'undefined') {
    lenisInstance = new Lenis({
      duration: 1.25,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      orientation: 'vertical',
      smoothWheel: true,
      wheelMultiplier: 0.95,
      touchMultiplier: 1.5,
    });

    function raf(time) {
      lenisInstance.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Integracao Lenis com GSAP ScrollTrigger
    if (typeof ScrollTrigger !== 'undefined') {
      lenisInstance.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenisInstance.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    }
  }

  // 2. Custom Gold Follower Cursor
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
      cursorX += (mouseX - cursorX) * 0.18;
      cursorY += (mouseY - cursorY) * 0.18;
      cursor.style.left = `${cursorX}px`;
      cursor.style.top = `${cursorY}px`;
      requestAnimationFrame(animateCursor);
    }
    requestAnimationFrame(animateCursor);

    // Efeito hover nos elementos interativos
    const hoverElements = document.querySelectorAll('a, button, .interactive-hover, .gold-glow-card, input, select, textarea');
    hoverElements.forEach((el) => {
      el.addEventListener('mouseenter', () => cursor.classList.add('hovering'));
      el.addEventListener('mouseleave', () => cursor.classList.remove('hovering'));
    });
  }

  // 3. Animacoes GSAP de Revelacao e ScrollTrigger
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Revelacao suave do Hero
    gsap.from('.hero-reveal', {
      opacity: 0,
      y: 40,
      stagger: 0.18,
      duration: 1.2,
      ease: 'power3.out',
      delay: 0.2,
    });

    // Seletor geral de secoes para animacao fade-up ao rolar
    const animatedSections = document.querySelectorAll('.gsap-fade-section');
    animatedSections.forEach((section) => {
      gsap.from(section.querySelectorAll('.gsap-fade-item'), {
        scrollTrigger: {
          trigger: section,
          start: 'top 82%',
          toggleActions: 'play none none none',
        },
        opacity: 0,
        y: 35,
        stagger: 0.12,
        duration: 0.9,
        ease: 'power2.out',
      });
    });

    // Parallax suave na imagem do Chef
    const chefImg = document.querySelector('.chef-portrait-img');
    if (chefImg) {
      gsap.to(chefImg, {
        scrollTrigger: {
          trigger: '#chef',
          start: 'top bottom',
          end: 'bottom top',
          scrub: 1,
        },
        y: -25,
        ease: 'none',
      });
    }
  }
});
