<!-- Secao 2: O Chef Eduardo -->
<section id="chef" class="py-28 px-6 bg-dark border-t border-neutral-900 gsap-fade-section relative">
    <div class="max-w-6xl mx-auto grid lg:grid-cols-12 gap-16 items-center">
        <!-- Coluna da Foto do Chef com Efeito Nobre -->
        <div class="lg:col-span-5 gsap-fade-item">
            <div class="relative p-2.5 border border-gold/40 bg-gradient-to-b from-[#181B21] to-dark-card shadow-2xl group">
                <div class="overflow-hidden relative">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_chef_image()); ?>" 
                        alt="Chef Eduardo do Restaurante Markitos D'Oro" 
                        class="chef-portrait-img w-full h-[480px] object-cover grayscale contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700 ease-out"
                        loading="lazy"
                    >
                    <!-- Selo sobreposto -->
                    <div class="absolute bottom-4 left-4 bg-dark/90 backdrop-blur-md border border-gold/40 px-4 py-2">
                        <span class="text-[10px] uppercase tracking-widest text-gold font-bold block">Chef de Cozinha</span>
                        <span class="text-xs text-cream font-serif">Eduardo Markitos</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coluna da Biografia e Manifesto do Chef -->
        <div class="lg:col-span-7 space-y-6 gsap-fade-item">
            <div class="inline-flex items-center space-x-2">
                <span class="w-2 h-2 rounded-full bg-gold"></span>
                <span class="text-gold tracking-[0.25em] uppercase text-xs font-semibold">A Mente Criativa</span>
            </div>
            
            <h2 class="font-serif text-3xl sm:text-5xl font-bold text-cream">
                Chef Eduardo
            </h2>
            
            <div class="flex items-center space-x-3 text-xs tracking-[0.2em] uppercase text-neutral-400">
                <span class="text-gold font-bold">40 Anos de Idade</span>
                <span>&bull;</span>
                <span>10 Anos à Frente dos Fogões</span>
            </div>

            <div class="w-16 h-[2px] bg-gold"></div>

            <p class="text-neutral-300 font-light leading-relaxed text-base sm:text-lg">
                Com uma década dedicada à liderança culinária e uma vida inteira apaixonado pelos sabores da mesa, o Chef Eduardo combina a disciplina rigorosa das cozinhas contemporâneas com a memória afetiva das cozinhas de aldeia.
            </p>

            <p class="text-neutral-400 font-light leading-relaxed text-sm sm:text-base">
                Entre o calor do forno tradicional a lenha e o frescor das ervas aromáticas colhidas no dia, Eduardo faz questão de selecionar pessoalmente cada fornecedor de sêmola, manteiga alpina e trufas frescas. Sua cozinha é autoral, limpa e profundamente ligada ao terroir mediterrâneo.
            </p>

            <!-- Citacao Autografada do Chef -->
            <blockquote class="border-l-2 border-gold pl-6 py-2 italic text-neutral-300 text-sm sm:text-base leading-relaxed bg-dark-card/50">
                "O verdadeiro ouro de um prato não reside na extravagância visual, mas na pureza do ingrediente, no respeito ao tempo e no afeto impresso em cada detalhe que chega à sua mesa."
                <span class="block text-gold text-xs not-italic uppercase tracking-widest font-semibold mt-3">
                    &mdash; Chef Eduardo, Markitos D'Oro
                </span>
            </blockquote>

            <!-- Badges de Especialidade -->
            <div class="pt-2 flex flex-wrap gap-2.5">
                <span class="luxury-badge">Pasta Fatta a Mano</span>
                <span class="luxury-badge">Maestro dei Tartufi</span>
                <span class="luxury-badge">Cucina d'Autore</span>
                <span class="luxury-badge">Carta DOCG</span>
            </div>
        </div>
    </div>
</section>
