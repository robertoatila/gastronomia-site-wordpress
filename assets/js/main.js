/**
 * Markitos D'Oro - Interatividade de Abas do Cardápio e Concierge VIP no WhatsApp
 */
document.addEventListener('DOMContentLoaded', function () {
  // 1. Filtros Interativos das Categorias do Cardapio (Tabs)
  const tabButtons = document.querySelectorAll('.menu-tab-btn');
  const menuItems = document.querySelectorAll('.menu-dish-card');

  if (tabButtons.length > 0 && menuItems.length > 0) {
    tabButtons.forEach((btn) => {
      btn.addEventListener('click', function () {
        tabButtons.forEach((b) => {
          b.classList.remove('active', 'text-gold');
          b.classList.add('text-neutral-400');
        });
        this.classList.add('active', 'text-gold');
        this.classList.remove('text-neutral-400');

        const filter = this.getAttribute('data-filter');

        menuItems.forEach((card) => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.classList.remove('menu-item-hidden');
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'scale(1)';
            }, 30);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.97)';
            setTimeout(() => {
              card.classList.add('menu-item-hidden');
            }, 200);
          }
        });
      });
    });
  }

  // 2. Menu Mobile Drawer Toggle
  const mobileToggle = document.getElementById('mobile-menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu-drawer');
  if (mobileToggle && mobileMenu) {
    mobileToggle.addEventListener('click', function () {
      mobileMenu.classList.toggle('hidden');
    });

    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });
  }

  // 3. Montagem Dinâmica de Solicitação de Reserva VIP no WhatsApp
  const reservationForm = document.getElementById('reservation-form');
  if (reservationForm) {
    reservationForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const nome = document.getElementById('res-nome') ? document.getElementById('res-nome').value.trim() : '';
      const pessoas = document.getElementById('res-pessoas') ? document.getElementById('res-pessoas').value : '2 pessoas (Mesa Intimista)';
      const data = document.getElementById('res-data') ? document.getElementById('res-data').value : '';
      const turno = document.getElementById('res-turno') ? document.getElementById('res-turno').value : 'Jantar • 1º Turno (19:30)';
      const notas = document.getElementById('res-notas') ? document.getElementById('res-notas').value.trim() : '';

      const mensagem = `Olá, Concierge do Markitos D'Oro! Gostaria de solicitar uma reserva VIP:%0A%0A` +
        `• *Titular:* ${encodeURIComponent(nome || 'Cliente Convidado')}%0A` +
        `• *Lugares:* ${encodeURIComponent(pessoas)}%0A` +
        `• *Data:* ${encodeURIComponent(data || 'A combinar')}%0A` +
        `• *Turno:* ${encodeURIComponent(turno)}%0A` +
        (notas ? `• *Observações/Celebração:* ${encodeURIComponent(notas)}%0A` : '') +
        `%0AAguardo confirmação para viver a experiência D'Oro.`;

      // Número WhatsApp oficial do restaurante
      const phone = '5511999999999';
      window.open(`https://wa.me/${phone}?text=${mensagem}`, '_blank');
    });
  }
});
