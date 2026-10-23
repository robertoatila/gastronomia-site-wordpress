/**
 * Markitos D'Oro - Interatividade do Menu e Formulario de Reserva VIP
 */
document.addEventListener('DOMContentLoaded', function () {
  // 1. Filtros Interativos do Cardapio (Tabs)
  const tabButtons = document.querySelectorAll('.menu-tab-btn');
  const menuItems = document.querySelectorAll('.menu-dish-card');

  if (tabButtons.length > 0 && menuItems.length > 0) {
    tabButtons.forEach((btn) => {
      btn.addEventListener('click', function () {
        tabButtons.forEach((b) => b.classList.remove('active', 'border-gold', 'text-gold'));
        this.classList.add('active', 'border-gold', 'text-gold');

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
            card.style.transform = 'scale(0.96)';
            setTimeout(() => {
              card.classList.add('menu-item-hidden');
            }, 250);
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

  // 3. Montagem Dinamica da Reserva VIP via WhatsApp
  const reservationForm = document.getElementById('reservation-form');
  if (reservationForm) {
    reservationForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const nome = document.getElementById('res-nome') ? document.getElementById('res-nome').value.trim() : '';
      const pessoas = document.getElementById('res-pessoas') ? document.getElementById('res-pessoas').value : '2';
      const data = document.getElementById('res-data') ? document.getElementById('res-data').value : '';
      const turno = document.getElementById('res-turno') ? document.getElementById('res-turno').value : 'Jantar (20:00)';
      const notas = document.getElementById('res-notas') ? document.getElementById('res-notas').value.trim() : '';

      const mensagem = `Olá, Concierge do Markitos D'Oro! Gostaria de solicitar uma reserva VIP:%0A%0A` +
        `• *Nome:* ${encodeURIComponent(nome || 'Cliente Convidado')}%0A` +
        `• *Lugares:* ${encodeURIComponent(pessoas)} pessoa(s)%0A` +
        `• *Data:* ${encodeURIComponent(data || 'A combinar')}%0A` +
        `• *Turno:* ${encodeURIComponent(turno)}%0A` +
        (notas ? `• *Observações:* ${encodeURIComponent(notas)}%0A` : '') +
        `%0AAguardo confirmação para viver a experiência D'Oro.`;

      // Numero de WhatsApp corporativo do restaurante
      const phone = '5511999999999';
      window.open(`https://wa.me/${phone}?text=${mensagem}`, '_blank');
    });
  }
});
