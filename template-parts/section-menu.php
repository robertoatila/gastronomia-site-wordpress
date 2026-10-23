<!-- Secao 3: Cardapio Sensorial e Prato Assinatura -->
<section id="menu" class="py-28 px-6 bg-[#0E1013] border-t border-neutral-900 gsap-fade-section">
    <div class="max-w-6xl mx-auto space-y-16">
        <!-- Cabecalho da Secao -->
        <div class="text-center space-y-4 max-w-2xl mx-auto gsap-fade-item">
            <div class="inline-flex items-center space-x-2">
                <span class="w-2 h-2 rounded-full bg-gold"></span>
                <span class="text-gold tracking-[0.25em] uppercase text-xs font-semibold">Experiência Sensorial</span>
            </div>
            <h2 class="font-serif text-4xl sm:text-5xl font-bold text-cream">Il Menu D'Oro</h2>
            <p class="text-neutral-400 font-light text-sm sm:text-base leading-relaxed">
                Pratos preparados diariamente em tiragens limitadas pelo Chef Eduardo. Cada receita reflete a nobreza de ingredientes de origem controlada.
            </p>
        </div>

        <!-- PRATO ASSINATURA EM DESTAQUE MASTER -->
        <div class="gsap-fade-item signature-plate-banner p-8 sm:p-12 rounded-sm shadow-2xl">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <div class="inline-flex items-center space-x-2">
                        <span class="bg-gold text-black text-[10px] font-bold uppercase tracking-widest px-3 py-1">
                            Prato Assinatura D'Oro
                        </span>
                        <span class="text-gold text-xs tracking-wider uppercase font-semibold">
                            &bull; Receita Icônica da Casa
                        </span>
                    </div>

                    <h3 class="font-serif text-3xl sm:text-4xl text-gold font-bold">
                        Tagliolini al Tartufo
                    </h3>

                    <p class="text-neutral-200 font-light leading-relaxed text-sm sm:text-base">
                        Massa fresca artesanal preparada na manhã de cada serviço com gemas orgânicas, emulsionada com manteiga alpina pura de alta pastagem e generosamente coroada à mesa com lâminas de trufas negras frescas colhidas em Norcia. Finalizado com flor de sal e azeite extravirgem trufado.
                    </p>

                    <div class="pt-2 flex flex-wrap items-center gap-4 text-xs text-neutral-400">
                        <span class="text-cream font-medium">Harmonização Sugerida:</span>
                        <span class="text-gold border border-gold/30 px-2.5 py-1">Barolo DOCG</span>
                        <span class="text-gold border border-gold/30 px-2.5 py-1">Brunello di Montalcino</span>
                    </div>
                </div>

                <div class="lg:col-span-4 text-center lg:text-right border-t lg:border-t-0 lg:border-l border-gold/30 pt-6 lg:pt-0 lg:pl-8 space-y-3">
                    <span class="text-xs uppercase tracking-widest text-neutral-400 block">Valor por Pessoa</span>
                    <span class="font-serif text-4xl sm:text-5xl text-gold font-bold block">R$ 145,00</span>
                    <a href="#reservas" class="interactive-hover inline-block bg-gold hover:bg-yellow-500 text-black px-6 py-2.5 text-xs uppercase tracking-widest font-bold transition-all">
                        Pedir na Reserva &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Filtros Interativos do Cardapio (Tabs) -->
        <div class="gsap-fade-item flex flex-wrap justify-center gap-3 sm:gap-6 border-b border-neutral-800 pb-4">
            <button class="interactive-hover menu-tab-btn active text-xs uppercase tracking-widest font-bold pb-2 px-2" data-filter="all">
                Todos os Pratos
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="antipasti">
                Antipasti
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="primi">
                Primi Piatti (Massas)
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="secondi">
                Secondi (Carnes & Peixes)
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="dolci">
                Dolci (Sobremesas)
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="vini">
                Carta D'Oro (Vinhos)
            </button>
        </div>

        <!-- Grade de Pratos Interativos com Filtro Instantaneo -->
        <div id="menu-dishes-grid" class="grid md:grid-cols-2 gap-8">
            <!-- Item 1: Burrata -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="antipasti">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Burrata Pugliese con San Daniele</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 86,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Coração de burrata cremosa levemente fumada, presunto cru San Daniele curado 24 meses, tomatinhos confitados em azeite siciliano e focaccia quente.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Franciacorta Brut D'Oro</span>
            </div>

            <!-- Item 2: Carpaccio -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="antipasti">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Carpaccio di Manzo Stagionato</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 78,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Lâminas ultrafinas de filé-mignon marinado, lascas de Parmigiano Reggiano D.O.P. 24 meses, alcaparras crocantes e redução balsâmica de Modena.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Pinot Grigio delle Venezie</span>
            </div>

            <!-- Item 3: Spaghetti Pomodoro -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="primi">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Spaghetti Tradizionale al Pomodoro San Marzano</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 78,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Massa artesanal al dente envolvida em molho de tomates San Marzano biológicos cozidos lentamente por 6 horas, azeite extravirgem e manjericão fresco.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Chianti Classico Riserva</span>
            </div>

            <!-- Item 4: Ravioli -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="primi">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Ravioli di Ricotta e Limone di Siracusa</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 92,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Massa recheada com ricota artesanal de ovelha siciliana e raspas de limão-siciliano, finalizada na manteiga de sálvia dourada e amêndoas tostadas.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Gavi di Gavi DOCG</span>
            </div>

            <!-- Item 5: Ossobuco -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="secondi">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Ossobuco alla Milanese con Risotto allo Zafferano</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 138,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Vitela braseada por 8 horas em redução de vinho tinto siciliano e ervas frescas, acompanhada de risotto aveludado de açafrão verdadeiro em pistilos.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Amarone della Valpolicella</span>
            </div>

            <!-- Item 6: Filetto di Spigola -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="secondi">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Filetto di Spigola in Crosta di Pistacchio</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 132,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Robalo fresco grelhado em crosta crocante de pistácios de Bronte, emulsão cítrica de laranja siciliana e purê de batatas trufadas.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Vermentino di Sardegna</span>
            </div>

            <!-- Item 7: Cannolo Siciliano D'Oro -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="dolci">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Cannolo Siciliano D'Oro con Foglia d'Oro</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 52,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Casquinha crocante com vinho Marsala, recheada na hora com ricota de ovelha aveludada, raspas de laranja cristalizada e folha de ouro comestível 24k.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Vinho Marsala Superiore Riserva</span>
            </div>

            <!-- Item 8: Tiramisu -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="dolci">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Tiramisù Tradizionale al Mascarpone</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 48,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Biscoitos Savoiardi embebidos em espresso italiano e licor Amaretto di Saronno, camadas generosas de creme de mascarpone fresco e cacau puro 70%.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Harmonização: Espresso Markitos D'Oro & Grappa</span>
            </div>

            <!-- Item 9: Vinho Barolo -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="vini">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Barolo DOCG Pio Cesare (Piemonte)</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 680,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    O rei dos vinhos italianos. Estrutura tânica marcante, notas de pétalas de rosa seca, couro nobre e trufas. Harmonização perfeita com o Tagliolini.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Garrafa 750ml &bull; Safra Exclusiva</span>
            </div>

            <!-- Item 10: Negroni D'Oro -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="vini">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Negroni D'Oro Riserva (Signature Cocktail)</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 58,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Gin botânico infusionado com sálvia, vermute tinto envelhecido em barrica de carvalho, Campari amadeirado e névoa aromática de laranja siciliana.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block">Aperitivo clássico reinventado pela casa</span>
            </div>
        </div>
    </div>
</section>
