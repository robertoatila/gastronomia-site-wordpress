<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
    <script>
      // Paleta nobre e tipografia editorial do Markitos D'Oro
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              gold: {
                DEFAULT: '#C5A059',
                light: '#E7C986',
                dark: '#9E7D3B',
              },
              dark: {
                DEFAULT: '#0B0C0E',
                card: '#131519',
                surface: '#1A1D23',
                deep: '#060708',
              },
              cream: '#F7F5F0',
              salvia: '#2D4A3E',
            },
            fontFamily: {
              serif: ['"Playfair Display"', 'Georgia', 'serif'],
              sans: ['"Plus Jakarta Sans"', 'sans-serif'],
              cinzel: ['"Cinzel Decorative"', 'serif'],
            }
          }
        }
      }
    </script>
</head>
<body <?php body_class('bg-dark text-cream antialiased selection:bg-gold selection:text-black'); ?>>

    <!-- Custom Follower Cursor -->
    <div id="custom-cursor" class="custom-cursor hidden md:block"></div>
    <div id="custom-cursor-dot" class="custom-cursor-dot hidden md:block"></div>

    <!-- Navegacao Superior de Alto Padrao -->
    <header class="fixed top-0 left-0 w-full z-50 glass-nav border-b border-neutral-900/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Logotipo: Clicar nele faz transição suave até o topo sem dar F5 / reload -->
            <a href="#hero" id="site-logo-link" class="scroll-to-top flex items-center space-x-3 group cursor-pointer" title="Voltar ao início">
                <span class="w-9 h-9 rounded-full border border-gold/60 flex items-center justify-center font-cinzel text-gold text-sm group-hover:border-gold group-hover:bg-gold/10 transition-all duration-300">
                    D
                </span>
                <div class="flex flex-col">
                    <span class="font-serif text-xl tracking-[0.2em] text-cream uppercase font-bold group-hover:text-gold transition-colors">Markitos D'Oro</span>
                    <span class="text-[9px] tracking-[0.3em] uppercase text-gold/80 font-medium -mt-0.5">Trattoria & Bistrô Siciliano &bull; 1936</span>
                </div>
            </a>

            <!-- Links de Navegacao Editorial Desktop -->
            <nav class="hidden lg:flex items-center space-x-8 text-xs tracking-[0.25em] uppercase font-semibold text-neutral-300">
                <a href="#historia" class="hover:text-gold transition-colors py-2">A Casa & Origem</a>
                <a href="#chef" class="hover:text-gold transition-colors py-2">Chef Eduardo</a>
                <a href="#menu" class="hover:text-gold transition-colors py-2">Cardápio Autoral</a>
                <a href="#experiencia" class="hover:text-gold transition-colors py-2">A Experiência</a>
                <a href="#reservas" class="hover:text-gold transition-colors py-2">Reservas</a>
            </nav>

            <!-- Atendimento & CTA Desktop -->
            <div class="hidden sm:flex items-center space-x-5">
                <span class="hidden xl:inline-block text-[11px] uppercase tracking-wider text-neutral-400 font-light border-r border-neutral-800 pr-5">
                    Terça a Domingo &bull; 19h às 23h30
                </span>
                <a href="#reservas" class="interactive-hover border border-gold/80 text-gold hover:bg-gold hover:text-black px-6 py-2.5 text-xs uppercase tracking-[0.2em] font-semibold transition-all duration-300">
                    Reservar Mesa
                </a>
            </div>

            <!-- Botao Hamburguer Mobile -->
            <button id="mobile-menu-toggle" class="lg:hidden text-cream hover:text-gold p-2 focus:outline-none" aria-label="Abrir Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Menu Mobile Drawer -->
        <div id="mobile-menu-drawer" class="hidden lg:hidden bg-dark-card border-b border-neutral-800 px-6 py-6 space-y-4">
            <nav class="flex flex-col space-y-4 text-sm tracking-widest uppercase font-medium text-neutral-300">
                <a href="#historia" class="hover:text-gold">A Casa & Origem</a>
                <a href="#chef" class="hover:text-gold">Chef Eduardo</a>
                <a href="#menu" class="hover:text-gold">Cardápio Autoral</a>
                <a href="#experiencia" class="hover:text-gold">A Experiência</a>
                <a href="#reservas" class="hover:text-gold">Reservas</a>
            </nav>
            <div class="pt-4 border-t border-neutral-800">
                <a href="#reservas" class="block text-center bg-gold text-black px-6 py-3 text-xs uppercase tracking-widest font-bold">
                    Solicitar Reserva VIP
                </a>
            </div>
        </div>
    </header>
