<!-- Secao 2: O Chef Eduardo (Foto com Efeito Autoral de Revelacao) -->
<section id="chef" class="py-28 px-6 bg-dark border-t border-neutral-900 gsap-fade-section relative">
    <div class="max-w-6xl mx-auto grid lg:grid-cols-12 gap-16 items-center">
        <!-- Coluna da Foto do Chef com Efeito Nobre (PB com revelacao de cores vibrantes no hover) -->
        <div class="lg:col-span-5 gsap-fade-item">
            <div class="relative p-3 border border-gold/50 bg-gradient-to-b from-[#1c1f26] to-dark-card shadow-2xl rounded-sm group">
                <!-- Brilho dourado de fundo -->
                <div class="absolute -inset-1 bg-gradient-to-r from-gold/25 via-transparent to-gold/25 blur-sm rounded-sm pointer-events-none"></div>

                <div class="overflow-hidden relative rounded-sm">
                    <!-- FOTO COM EFEITO CINEMATOGRAFICO: PB de alto contraste que se transforma em cores naturais e quentes ao passar o cursor -->
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_chef_image()); ?>" 
                        alt="Chef Eduardo preparando massa fresca na cozinha autêntica do Markitos D'Oro" 
                        class="chef-portrait-img w-full h-[520px] object-cover object-center grayscale contrast-125 group-hover:grayscale-0 group-hover:contrast-105 group-hover:scale-105 transition-all duration-700 ease-out"
                        loading="lazy"
                    >
                    <!-- Gradiente sutil inferior para legibilidade -->
                    <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-black/90 via-black/40 to-transparent pointer-events-none"></div>

                    <!-- Selo de identificação nobre -->
                    <div class="absolute bottom-5 left-5 bg-dark/95 backdrop-blur-md border border-gold/60 px-5 py-3 shadow-lg">
                        <span class="text-[10px] uppercase tracking-[0.25em] text-gold font-bold block">Chef de Cozinha & Proprietário</span>
                        <span class="text-sm text-cream font-serif font-bold">Eduardo Markitos</span>
                        <span class="text-[10px] text-neutral-400 block mt-0.5">10 Anos de Maestria nos Fogões</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coluna da Biografia e Filosofia do Chef -->
        <div class="lg:col-span-7 space-y-6 gsap-fade-item">
            <div class="inline-flex items-center space-x-2">
                <span class="w-2 h-2 rounded-full bg-gold"></span>
                <span class="text-gold tracking-[0.25em] uppercase text-xs font-semibold">À Frente da Criação</span>
            </div>
            
            <h2 class="font-serif text-3xl sm:text-5xl font-bold text-cream leading-tight">
                Chef Eduardo: Paixão, Técnica e Raízes
            </h2>
            
            <div class="flex flex-wrap items-center gap-3 text-xs tracking-[0.2em] uppercase text-neutral-400">
                <span class="text-gold font-bold">40 Anos de Idade</span>
                <span>&bull;</span>
                <span class="text-cream">10 Anos Liderando Brigadas</span>
                <span>&bull;</span>
                <span class="text-neutral-400">Neto do Fundador Giuseppe</span>
            </div>

            <div class="w-16 h-[2px] bg-gold"></div>

            <p class="text-neutral-300 font-light leading-relaxed text-base sm:text-lg">
                Com uma década inteira dedicada à liderança culinária e uma vida inteira apaixonado pelos aromas da mesa familiar, o Chef Eduardo combina a disciplina rigorosa das técnicas contemporâneas com a memória afetiva das aldeias da Sicília.
            </p>

            <p class="text-neutral-400 font-light leading-relaxed text-sm sm:text-base">
                Entre o calor do forno tradicional a lenha e o perfume das ervas frescas colhidas no dia, Eduardo faz questão de selecionar pessoalmente cada produtor de sêmola, manteiga alpina e trufas negras. Para ele, cozinhar é um ato sagrado de acolhimento e identidade.
            </p>

            <!-- Citação com Assinatura em Destaque -->
            <blockquote class="border-l-2 border-gold pl-6 py-4 italic text-neutral-200 text-sm sm:text-base leading-relaxed bg-dark-card/70 border border-neutral-800/80 rounded-r-sm">
                "O verdadeiro ouro de um prato não reside no luxo aparente, mas no respeito sagrado ao tempo de cada alimento, na pureza da terra e no afeto genuíno que chega à mesa."
                <span class="block text-gold text-xs not-italic uppercase tracking-widest font-semibold mt-3">
                    &mdash; Chef Eduardo, Restaurante Markitos D'Oro
                </span>
            </blockquote>

            <!-- Badges de Maestria Culinária -->
            <div class="pt-2 flex flex-wrap gap-2.5">
                <span class="luxury-badge">Pasta Fresca Fatta a Mano</span>
                <span class="luxury-badge">Mestre dos Tartufos Italianos</span>
                <span class="luxury-badge">Cozinha Autoral Siciliana</span>
                <span class="luxury-badge">Carta DOCG Curada</span>
            </div>
        </div>
    </div>
</section>
