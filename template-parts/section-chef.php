<!-- Secao 2: Chef Eduardo (Cozinha Autoral e Persona) -->
<section id="chef" class="py-16 sm:py-20 lg:py-24 px-6 sm:px-8 lg:px-12 bg-dark border-t border-neutral-900 gsap-fade-section relative overflow-hidden">
    <div class="max-w-6xl mx-auto grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
        <!-- Coluna da Foto do Chef: Enquadramento Nobre com Revelação de Cores no Hover -->
        <div class="lg:col-span-5 gsap-fade-item">
            <div class="relative p-2.5 sm:p-3 border border-gold/45 bg-gradient-to-b from-[#1c1f26] to-dark-card shadow-2xl rounded-sm group">
                <!-- Brilho dourado ambiental de fundo -->
                <div class="absolute -inset-1 bg-gradient-to-r from-gold/15 via-transparent to-gold/15 blur-sm rounded-sm pointer-events-none"></div>

                <div class="overflow-hidden relative rounded-sm">
                    <!-- FOTO AUTORAL: P&B de alto contraste siciliano que floresce em cores naturais e quentes ao passar o cursor -->
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_chef_image()); ?>" 
                        alt="Chef Eduardo preparando massa fresca na cozinha autêntica do Markitos D'Oro" 
                        class="chef-portrait-img w-full h-[400px] sm:h-[440px] lg:h-[480px] object-cover object-top grayscale contrast-125 group-hover:grayscale-0 group-hover:contrast-105 group-hover:scale-105 transition-all duration-700 ease-out"
                        loading="lazy"
                    >
                    <!-- Gradiente sutil inferior -->
                    <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-black/90 via-black/40 to-transparent pointer-events-none"></div>

                    <!-- Cartão de Identificação Elegante e Compacto -->
                    <div class="absolute bottom-3 left-3 right-3 bg-dark/95 backdrop-blur-md border border-gold/50 px-4 py-2.5 flex items-center justify-between shadow-lg">
                        <div>
                            <span class="text-[9px] uppercase tracking-[0.25em] text-gold font-bold block">Chef Executivo & Dono</span>
                            <span class="text-sm text-cream font-serif font-bold">Eduardo Markitos</span>
                        </div>
                        <span class="text-[10px] uppercase tracking-wider text-neutral-400 border-l border-neutral-800 pl-3">
                            10 Anos de Liderança
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coluna da Biografia e Filosofia da Cozinha -->
        <div class="lg:col-span-7 space-y-5 gsap-fade-item">
            <div class="space-y-2">
                <span class="text-gold tracking-[0.3em] uppercase text-xs font-semibold block">À Frente da Criação</span>
                
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-cream leading-tight">
                    Chef Eduardo: Paixão, Técnica e Raízes
                </h2>
                
                <div class="flex flex-wrap items-center gap-2.5 text-xs tracking-wider uppercase text-neutral-400 pt-0.5">
                    <span class="text-gold font-semibold">40 Anos de Idade</span>
                    <span>&bull;</span>
                    <span class="text-cream">10 Anos Liderando os Fogões</span>
                    <span>&bull;</span>
                    <span class="text-neutral-400">Neto de Fundador Siciliano</span>
                </div>
            </div>

            <div class="w-12 h-[2px] bg-gold"></div>

            <p class="text-neutral-300 font-light leading-relaxed text-sm sm:text-base">
                Com uma década inteira dedicada à liderança culinária e uma vida inteira nutrida pela memória afetiva da Sicília de 1936, o Chef Eduardo combina a disciplina rigorosa das técnicas contemporâneas com o respeito inegociável ao tempo de cada alimento.
            </p>

            <p class="text-neutral-400 font-light leading-relaxed text-xs sm:text-sm">
                Entre o calor do forno tradicional a lenha e o perfume das ervas colhidas no dia, Eduardo seleciona pessoalmente cada produtor de sêmola, manteiga alpina e trufas de Norcia. Para ele, cozinhar é um ritual de acolhimento e memória viva.
            </p>

            <!-- Citação do Chef -->
            <blockquote class="border-l-2 border-gold pl-5 py-3 italic text-neutral-200 text-xs sm:text-sm leading-relaxed bg-dark-card/60 border border-neutral-800/80 rounded-r-sm">
                "O verdadeiro ouro de um prato não reside na extravagância visual, mas no respeito sagrado ao tempo de cada alimento e no afeto genuíno que chega à mesa."
                <span class="block text-gold text-[11px] not-italic uppercase tracking-widest font-semibold mt-2">
                    &mdash; Chef Eduardo, Markitos D'Oro
                </span>
            </blockquote>

            <!-- Selos de Maestria Perfeitamente Alinhados -->
            <div class="pt-2 flex flex-wrap gap-2">
                <span class="luxury-badge text-[10px] py-1.5 px-3">Pasta Fresca Fatta a Mano</span>
                <span class="luxury-badge text-[10px] py-1.5 px-3">Tartufos Frescos de Norcia</span>
                <span class="luxury-badge text-[10px] py-1.5 px-3">Cozinha Autoral Siciliana</span>
                <span class="luxury-badge text-[10px] py-1.5 px-3">Carta DOCG Curada</span>
            </div>
        </div>
    </div>
</section>
