<!-- Secao 3: Cardapio Autoral com Fotos de Alta Gastronomia -->
<section id="menu" class="py-16 sm:py-20 lg:py-24 px-6 sm:px-8 lg:px-12 bg-[#0E1013] border-t border-neutral-900 gsap-fade-section scroll-mt-20">
    <div class="max-w-7xl mx-auto space-y-14">
        <!-- Cabecalho Editorial do Cardapio -->
        <div class="text-center space-y-4 max-w-2xl mx-auto gsap-fade-item">
            <span class="text-gold tracking-[0.3em] uppercase text-xs font-semibold block">Gastronomia de Origem</span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-cream">Cardápio Autoral & Seleção do Chef</h2>
            <p class="text-neutral-400 font-light text-sm sm:text-base leading-relaxed">
                Pratos preparados diariamente em pequenas levas pelo Chef Eduardo. Cada receita homenageia a alta qualidade dos insumos importados com certificação italiana.
            </p>
        </div>

        <!-- PRATO ASSINATURA COM FOTOGRAFIA EM DESTAQUE MASTER -->
        <div class="gsap-fade-item signature-plate-banner p-6 sm:p-10 lg:p-12 rounded-sm shadow-2xl">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <!-- Foto do Prato Assinatura: Enquadramento Preciso na Laminação da Trufa -->
                <div class="lg:col-span-5 relative overflow-hidden rounded-sm group">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('tagliolini-tartufo')); ?>" 
                        alt="Tagliolini al Tartufo Negro fresco - Prato Assinatura Markitos D'Oro" 
                        class="w-full h-72 sm:h-80 lg:h-96 object-cover object-[center_35%] group-hover:scale-105 transition-transform duration-700 ease-out"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                    <span class="absolute bottom-4 left-4 bg-black/85 border border-gold/40 text-gold text-[10px] uppercase tracking-widest font-bold px-3 py-1">
                        Massa Fresca Fatta a Mano
                    </span>
                </div>

                <!-- Detalhes do Prato Assinatura -->
                <div class="lg:col-span-7 space-y-5">
                    <div class="inline-flex items-center space-x-2">
                        <span class="bg-gold text-black text-[10px] font-bold uppercase tracking-widest px-3 py-1">
                            Prato Assinatura D'Oro
                        </span>
                        <span class="text-gold text-xs tracking-wider uppercase font-semibold">
                            &bull; Norcia &bull; Alpes Italianos
                        </span>
                    </div>

                    <h3 class="font-serif text-3xl sm:text-4xl text-gold font-bold">
                        Tagliolini al Tartufo Negro
                    </h3>

                    <p class="text-neutral-200 font-light leading-relaxed text-sm sm:text-base">
                        Massa fresca artesanal estendida e cortada manualmente na manhã de cada serviço com gemas de ovos caipiras, cozida em 90 segundos e emulsionada em manteiga pura de pastagem alpina. Coroada à mesa com lâminas generosas de trufas negras frescas colhidas em Norcia, flor de sal e azeite extravirgem trufado.
                    </p>

                    <div class="pt-2 flex flex-wrap items-center justify-between gap-4 border-t border-neutral-800 pt-4">
                        <div class="space-y-1">
                            <span class="text-[11px] uppercase tracking-wider text-neutral-400 block font-light">Harmonização do Sommelier</span>
                            <span class="text-sm font-serif text-cream">Barolo DOCG ou Brunello di Montalcino</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="font-serif text-3xl sm:text-4xl text-gold font-bold">R$ 145,00</span>
                            <a href="#reservas" class="bg-gold hover:bg-yellow-500 text-black px-6 py-3 text-xs uppercase tracking-widest font-bold transition-all shadow-md shadow-gold/15">
                                Reservar &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtros Interativos do Cardapio (Tabs Elegantes) -->
        <div class="gsap-fade-item flex flex-wrap justify-center gap-3 sm:gap-6 border-b border-neutral-800 pb-4">
            <button class="menu-tab-btn active text-xs uppercase tracking-widest font-bold pb-2 px-3 text-gold border-b-2 border-gold" data-filter="all">
                Todos os Pratos
            </button>
            <button class="menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-3" data-filter="antipasti">
                Antipasti
            </button>
            <button class="menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-3" data-filter="primi">
                Massas Frescas (Primi)
            </button>
            <button class="menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-3" data-filter="secondi">
                Carnes & Peixes (Secondi)
            </button>
            <button class="menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-3" data-filter="dolci">
                Sobremesas (Dolci)
            </button>
            <button class="menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-3" data-filter="vini">
                Vinhos & Coquetéis
            </button>
        </div>

        <!-- Grade de Pratos COM FOTOGRAFIAS GASTRONÔMICAS LOCAIS E AUTÊNTICAS -->
        <div id="menu-dishes-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 1. Burrata Pugliese con San Daniele -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="antipasti">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('burrata-pugliese')); ?>" 
                        alt="Burrata Pugliese con San Daniele" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Puglia D.O.P.</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Burrata Pugliese con San Daniele</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 86</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Burrata cremosa artesanal da Puglia, fatias nobres de presunto cru San Daniele curado 24 meses, tomatinhos frescos, folhas de rúcula e azeite siciliano extravirgem.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Taça: Franciacorta Brut D'Oro
                    </span>
                </div>
            </div>

            <!-- 2. Carpaccio di Manzo Stagionato -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="antipasti">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('carpaccio-manzo')); ?>" 
                        alt="Carpaccio di Manzo Stagionato" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Modena 24M</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Carpaccio di Manzo Stagionato</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 78</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Finas lâminas de filé-mignon marinado com ervas silvestres, lascas de Parmigiano Reggiano D.O.P. 24 meses, alcaparras crocantes e redução balsâmica tradicional de Modena.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Taça: Pinot Grigio delle Venezie
                    </span>
                </div>
            </div>

            <!-- 3. Spaghetti Pomodoro San Marzano -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="primi">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('spaghetti-pomodoro')); ?>" 
                        alt="Spaghetti Tradizionale al Pomodoro San Marzano" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">San Marzano D.O.P.</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Spaghetti al Pomodoro San Marzano</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 78</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Spaghetti artesanal al dente envolvido em molho de tomates San Marzano biológicos cozidos lentamente por 6 horas, manjericão fresco e queijo parmesão ralado na hora.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Taça: Chianti Classico Riserva
                    </span>
                </div>
            </div>

            <!-- 4. Ravioli di Ricotta e Limone -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="primi">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('ravioli-ricotta')); ?>" 
                        alt="Ravioli di Ricotta e Limone di Siracusa" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Sicília IGP</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Ravioli di Ricotta e Limone</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 92</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Massa recheada com ricota artesanal de ovelha siciliana e raspas de limão-siciliano de Siracusa, finalizada na manteiga de sálvia dourada, tomatinhos e amêndoas tostadas.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Taça: Gavi di Gavi DOCG
                    </span>
                </div>
            </div>

            <!-- 5. Filetto di Manzo al Barolo -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="secondi">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('ossobuco-risotto')); ?>" 
                        alt="Filetto di Manzo con Riduzione al Barolo" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Barolo DOCG</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Filetto di Manzo al Barolo</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 138</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Medalhão alto de filé-mignon grelhado ao ponto perfeito com redução encorpada de vinho Barolo DOCG, grãos de pimenta-preta, manteiga aromatizada e brotos frescos.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Taça: Amarone della Valpolicella
                    </span>
                </div>
            </div>

            <!-- 6. Spigola in Crosta di Pistacchio -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="secondi">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('spigola-pistacchio')); ?>" 
                        alt="Filetto di Spigola in Crosta di Pistacchio" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Pistacchio Bronte</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Spigola in Crosta di Pistacchio</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 132</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Lombo nobre de robalo selado na frigideira com pele estaladiça, crosta de pistácios de Bronte, emulsão cítrica de laranja siciliana e brotos frescos.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Taça: Vermentino di Sardegna
                    </span>
                </div>
            </div>

            <!-- 7. Cannolo Siciliano D'Oro -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="dolci">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('cannolo-siciliano')); ?>" 
                        alt="Cannolo Siciliano D'Oro con Ricotta e Pistacchi" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Sicília 1936</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Cannolo Siciliano D'Oro</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 52</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Casquinha estaladiça artesanal frita na hora com vinho Marsala, recheio aveludado de ricota fresca de ovelha, açúcar de confeiteiro e pistache triturado.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Dose: Marsala Superiore Riserva
                    </span>
                </div>
            </div>

            <!-- 8. Tiramisu Tradizionale -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="dolci">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('tiramisu-tradizionale')); ?>" 
                        alt="Tiramisù Tradizionale al Mascarpone" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Espresso & Amaretto</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Tiramisù Tradizionale</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 48</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Biscoitos Savoiardi embebidos em espresso italiano e licor Amaretto di Saronno, camadas generosas de creme fresco de mascarpone e cacau puro 70%.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Espresso Markitos & Grappa
                    </span>
                </div>
            </div>

            <!-- 9. Barolo DOCG -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="vini">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('barolo-docg')); ?>" 
                        alt="Barolo DOCG Pio Cesare" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Piemonte DOCG</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Barolo DOCG Pio Cesare</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 680</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            O rei dos vinhos italianos. Estrutura tânica potente, notas de pétalas de rosa seca, couro nobre e trufas. Harmonização perfeita com o Tagliolini al Tartufo.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Garrafa 750ml &bull; Safra Selecionada
                    </span>
                </div>
            </div>

            <!-- 10. Negroni D'Oro -->
            <div class="menu-dish-card dish-card border border-neutral-800/90 rounded-sm overflow-hidden flex flex-col justify-between" data-category="vini">
                <div class="relative overflow-hidden aspect-[16/10]">
                    <img 
                        src="<?php echo esc_url(markitos_doro_get_dish_image('negroni-doro')); ?>" 
                        alt="Negroni D'Oro Riserva" 
                        class="w-full h-full object-cover object-center" 
                        loading="lazy"
                    >
                    <span class="absolute top-3 left-3 luxury-tag">Signature Drink</span>
                </div>
                <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                    <div class="space-y-2">
                        <div class="flex justify-between items-baseline gap-2">
                            <h4 class="font-serif text-lg font-semibold text-cream">Negroni D'Oro Riserva</h4>
                            <span class="text-gold font-serif text-base font-bold whitespace-nowrap">R$ 58</span>
                        </div>
                        <p class="text-neutral-400 text-xs leading-relaxed font-light">
                            Gin botânico infusionado com sálvia fresca, vermute tinto envelhecido em barrica de carvalho, Campari amadeirado e névoa aromática de laranja siciliana.
                        </p>
                    </div>
                    <span class="text-[11px] text-gold/80 font-serif pt-2 block border-t border-neutral-900">
                        Aperitivo clássico da casa
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
