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

    <!-- Navegacao Superior com Enquadramento Perfeito -->
    <header class="fixed top-0 left-0 w-full z-50 glass-nav border-b border-neutral-900/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 h-20 flex items-center justify-between">
            <!-- Logotipo: Clicar nele executa deslize suave ao topo sem recarregar a pagina -->
            <a href="#hero" id="site-logo-link" class="scroll-to-top flex items-center space-x-3.5 group cursor-pointer" title="Voltar ao início">
                <span class="w-10 h-10 rounded-full border border-gold/60 flex items-center justify-center font-cinzel text-gold text-base group-hover:border-gold group-hover:bg-gold/10 transition-all duration-300">
                    D
                </span>
                <div class="flex flex-col">
                    <span class="font-serif text-lg sm:text-xl tracking-[0.18em] text-cream uppercase font-bold group-hover:text-gold transition-colors">Markitos D'Oro</span>
                    <span class="text-[9px] tracking-[0.28em] uppercase text-gold/75 font-medium -mt-0.5">Trattoria Siciliana &bull; 1936</span>
                </div>
            </a>

            <!-- Links de Navegacao Desktop (Espacamento generoso e equilibrado) -->
            <nav class="hidden lg:flex items-center space-x-7 xl:space-x-9 text-xs tracking-[0.22em] uppercase font-semibold text-neutral-300">
                <a href="#historia" class="hover:text-gold transition-colors py-2">Origem 1936</a>
                <a href="#chef" class="hover:text-gold transition-colors py-2">Chef Eduardo</a>
                <a href="#menu" class="hover:text-gold transition-colors py-2">Cardápio</a>
                <a href="#experiencia" class="hover:text-gold transition-colors py-2">A Experiência</a>
                <a href="#reservas" class="hover:text-gold transition-colors py-2">Reservas</a>
            </nav>

            <!-- CTA Desktop (Sem textos amontoados) -->
            <div class="hidden sm:flex items-center">
                <a href="#reservas" class="border border-gold/70 text-gold hover:bg-gold hover:text-black px-6 py-2.5 text-xs uppercase tracking-[0.2em] font-semibold transition-all duration-300 shadow-sm shadow-gold/10">
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
                <a href="#historia" class="hover:text-gold py-1">Origem 1936</a>
                <a href="#chef" class="hover:text-gold py-1">Chef Eduardo</a>
                <a href="#menu" class="hover:text-gold py-1">Cardápio</a>
                <a href="#experiencia" class="hover:text-gold py-1">A Experiência</a>
                <a href="#reservas" class="hover:text-gold py-1">Reservas</a>
            </nav>
            <div class="pt-4 border-t border-neutral-800">
                <a href="#reservas" class="block text-center bg-gold text-black px-6 py-3 text-xs uppercase tracking-widest font-bold">
                    Solicitar Reserva VIP
                </a>
            </div>
        </div>
    </header>
