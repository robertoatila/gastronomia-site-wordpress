<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              gold: '#C5A059',
              dark: '#0B0C0E',
              darkCard: '#131519'
            }
          }
        }
      }
    </script>
</head>
<body class="bg-dark text-[#F7F5F0] antialiased selection:bg-gold selection:text-black">

    <!-- Navegação -->
    <header class="fixed top-0 left-0 w-full z-50 bg-[#0B0C0E]/80 backdrop-blur-md border-b border-[#222]">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="font-serif text-2xl tracking-widest text-gold uppercase font-bold">Markitos D'Oro</a>
            <nav class="hidden md:flex items-center space-x-8 text-sm tracking-widest uppercase font-medium text-neutral-300">
                <a href="#historia" class="hover:text-gold transition-colors">Origem 1936</a>
                <a href="#chef" class="hover:text-gold transition-colors">O Chef</a>
                <a href="#menu" class="hover:text-gold transition-colors">A Carta</a>
            </nav>
            <a href="#reservas" class="hidden sm:inline-block border border-gold text-gold hover:bg-gold hover:text-black px-6 py-2.5 text-xs uppercase tracking-widest transition-all duration-300">Reservar Mesa</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center relative px-6 pt-20">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(197,160,89,0.08)_0%,transparent_70%)]"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10 space-y-6">
            <span class="text-gold tracking-[0.3em] uppercase text-xs font-semibold block animate-pulse">Trattoria Contemporânea & Alta Gastronomia</span>
            <h1 class="font-serif text-5xl md:text-7xl font-bold leading-tight gold-gradient-text">A Nobreza dos Ingredientes em Cada Gesto.</h1>
            <p class="text-neutral-400 text-lg md:text-xl font-light max-w-2xl mx-auto">Tradição forjada na Sicília desde 1936, reinventada com precisão intimista e a pureza do ingrediente ouro.</p>
            <div class="pt-4 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#menu" class="bg-gold text-black px-8 py-3.5 uppercase tracking-widest text-xs font-semibold hover:bg-yellow-500 transition-all shadow-lg shadow-gold/10">Descobrir a Carta</a>
                <a href="#historia" class="border border-neutral-700 hover:border-gold px-8 py-3.5 uppercase tracking-widest text-xs font-semibold transition-all">Nossa História</a>
            </div>
        </div>
    </section>

    <!-- Seção: Herança Siciliana (1936) -->
    <section id="historia" class="py-24 px-6 border-t border-neutral-900 bg-[#0e1013]">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <span class="text-gold tracking-widest uppercase text-xs font-semibold">Herança de Família</span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold">Das Colinas da Sicília ao Prato Contemporâneo.</h2>
                <div class="w-12 h-[2px] bg-gold"></div>
                <p class="text-neutral-400 leading-relaxed font-light">
                    Em 1936, no coração das cozinhas da Sicília, o avô de Eduardo firmou um pacto: honrar o solo, o calor do forno e a nobreza de cada insumo. O sufixo <em>D'Oro</em> representa o compromisso com o ingrediente padrão ouro — da colheita manual ao azeite de primeira extração.
                </p>
                <p class="text-neutral-400 leading-relaxed font-light">
                    Preservamos o calor da trattoria tradicional com a disciplina e estética da alta gastronomia atual.
                </p>
            </div>
            <div class="relative p-3 border border-neutral-800 rounded-sm bg-darkCard">
                <div class="p-8 border border-neutral-800/80 space-y-4">
                    <span class="text-6xl font-serif text-gold block">1936</span>
                    <h3 class="font-serif text-xl font-medium">Nove Décadas de Tradição</h3>
                    <p class="text-neutral-500 text-sm">Alquimia gastronômica familiar aliada a ingredientes nobres importados diretamente de produtores artesanais da Itália.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção: O Chef Eduardo -->
    <section id="chef" class="py-24 px-6">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1 relative">
                <div class="border border-gold/30 p-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/chef-eduardo.jpg" alt="Chef Eduardo Markitos D'Oro" class="w-full h-auto object-cover grayscale contrast-125 hover:grayscale-0 transition-all duration-700">
                </div>
            </div>
            <div class="order-1 md:order-2 space-y-6">
                <span class="text-gold tracking-widest uppercase text-xs font-semibold">A Mente Criativa</span>
                <h2 class="font-serif text-3xl md:text-5xl font-bold">Chef Eduardo</h2>
                <span class="text-sm text-neutral-400 tracking-wider uppercase block">10 Anos de Devoção Gastronômica</span>
                <div class="w-12 h-[2px] bg-gold"></div>
                <p class="text-neutral-300 leading-relaxed font-light">
                    Aos 40 anos e com uma década liderando brigadas de cozinha, Eduardo traduz receitas ancestrais em técnica precisa e autoral. Para ele, cada preparação é uma expressão direta de acolhimento e identidade.
                </p>
                <blockquote class="border-l-2 border-gold pl-4 italic text-neutral-400 text-sm">
                    "O ouro de um prato não reside na complexidade excessiva, mas no respeito ao tempo do alimento e à verdade do sabor."
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Seção: Carta e Prato Assinatura -->
    <section id="menu" class="py-24 px-6 bg-[#0e1013] border-t border-neutral-900">
        <div class="max-w-6xl mx-auto space-y-16">
            <div class="text-center space-y-4 max-w-2xl mx-auto">
                <span class="text-gold tracking-widest uppercase text-xs font-semibold">Experiência Gastronômica</span>
                <h2 class="font-serif text-4xl font-bold">Il Menu D'Oro</h2>
                <p class="text-neutral-400 font-light text-sm">Produção artesanal diária e limitada para garantir frescor integral aos cortes e emulsões.</p>
            </div>

            <!-- Prato de Assinatura -->
            <div class="p-8 md:p-12 border border-gold/40 bg-gradient-to-br from-darkCard to-[#1a1712] relative overflow-hidden">
                <span class="absolute top-4 right-4 bg-gold text-black text-[10px] font-bold uppercase tracking-widest px-3 py-1">Prato Assinatura</span>
                <div class="max-w-2xl space-y-4">
                    <h3 class="font-serif text-3xl text-gold font-bold">Tagliolini al Tartufo</h3>
                    <p class="text-neutral-300 font-light leading-relaxed">Massa fresca artesanal estendida diariamente, emulsionada em manteiga de pasto de montanha e finalizada na mesa com lascas de trufas negras frescas de Norcia.</p>
                    <span class="text-xl font-serif text-gold block">R$ 145,00</span>
                </div>
            </div>

            <!-- Grelha de Pratos -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="p-6 border border-neutral-800 bg-darkCard space-y-3">
                    <div class="flex justify-between items-baseline">
                        <h4 class="font-serif text-lg font-semibold text-neutral-200">Burrata Pugliese Affumicata</h4>
                        <span class="text-gold font-serif text-sm">R$ 82,00</span>
                    </div>
                    <p class="text-neutral-500 text-xs leading-relaxed">Burrata artesanal levemente defumada, tomatinhos confitados em azeite extravirgem siciliano e folhas de manjericão fresco.</p>
                </div>

                <div class="p-6 border border-neutral-800 bg-darkCard space-y-3">
                    <div class="flex justify-between items-baseline">
                        <h4 class="font-serif text-lg font-semibold text-neutral-200">Ossobuco alla Milanese</h4>
                        <span class="text-gold font-serif text-sm">R$ 138,00</span>
                    </div>
                    <p class="text-neutral-500 text-xs leading-relaxed">Vitela cozida lentamente por 8 horas ao vinho tinto aromático, acompanhada de risotto aveludado de açafrão em estigmas.</p>
                </div>

                <div class="p-6 border border-neutral-800 bg-darkCard space-y-3">
                    <div class="flex justify-between items-baseline">
                        <h4 class="font-serif text-lg font-semibold text-neutral-200">Carpaccio di Manzo Stagionato</h4>
                        <span class="text-gold font-serif text-sm">R$ 74,00</span>
                    </div>
                    <p class="text-neutral-500 text-xs leading-relaxed">Finas lâminas de mignon curado, lascas de Parmigiano Reggiano D.O.P. 24 meses e gotas de azeite trufado.</p>
                </div>

                <div class="p-6 border border-neutral-800 bg-darkCard space-y-3">
                    <div class="flex justify-between items-baseline">
                        <h4 class="font-serif text-lg font-semibold text-neutral-200">Tiramisù Tradizionale D'Oro</h4>
                        <span class="text-gold font-serif text-sm">R$ 48,00</span>
                    </div>
                    <p class="text-neutral-500 text-xs leading-relaxed">Savoiardi embebidos em espresso italiano e licor Amaretto, camadas de mascarpone fresco e cacau 70%.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservas e Contato -->
    <footer id="reservas" class="py-16 px-6 border-t border-neutral-900 text-center space-y-6">
        <h3 class="font-serif text-2xl text-gold">Viva a Experiência Markitos D'Oro</h3>
        <p class="text-neutral-400 text-sm max-w-md mx-auto">Lugares limitados por turno para garantir a integridade da experiência gastronômica.</p>
        <div>
            <a href="https://wa.me/?text=Olá,%20gostaria%20de%20reservar%20uma%20mesa%20no%20Markitos%20D'Oro." target="_blank" class="bg-gold hover:bg-yellow-500 text-black px-8 py-3 uppercase tracking-widest text-xs font-bold transition-all inline-block">Solicitar Reserva por Mensagem</a>
        </div>
        <p class="text-neutral-600 text-xs pt-12">&copy; <?php echo date('Y'); ?> Markitos D'Oro. Todos os direitos reservados.</p>
    </footer>

    <!-- Inicialização Lenis -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        if (typeof Lenis !== "undefined") {
          const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
          });
          function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
          }
          requestAnimationFrame(raf);
        }
      });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
