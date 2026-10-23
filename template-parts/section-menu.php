<!-- Secao 3: Cardapio Autoral e Prato Assinatura D'Oro -->
<section id="menu" class="py-28 px-6 bg-[#0E1013] border-t border-neutral-900 gsap-fade-section">
    <div class="max-w-6xl mx-auto space-y-16">
        <!-- Cabecalho Editorial do Cardapio (Adeus 'IL MENU' generico) -->
        <div class="text-center space-y-4 max-w-2xl mx-auto gsap-fade-item">
            <span class="text-gold tracking-[0.3em] uppercase text-xs font-semibold block">Gastronomia de Origem</span>
            <h2 class="font-serif text-4xl sm:text-5xl font-bold text-cream">Cardápio Autoral & Seleção do Chef</h2>
            <p class="text-neutral-400 font-light text-sm sm:text-base leading-relaxed">
                Pratos preparados diariamente em pequenas levas artesanais pelo Chef Eduardo. Cada receita homenageia a alta qualidade dos insumos importados com certificação italiana.
            </p>
        </div>

        <!-- PRATO ASSINATURA: TAGLIOLINI AL TARTUFO EM DESTAQUE MASTER -->
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
                        Tagliolini al Tartufo Negro
                    </h3>

                    <p class="text-neutral-200 font-light leading-relaxed text-sm sm:text-base">
                        Massa fresca artesanal aberta manualmente na manhã de cada serviço com gemas de ovos caipiras, emulsionada com manteiga pura de pastagem alpina e generosamente coroada à mesa com lâminas de trufas negras frescas colhidas em Norcia. Finalizado com flor de sal e azeite extravirgem trufado.
                    </p>

                    <div class="pt-2 flex flex-wrap items-center gap-4 text-xs text-neutral-400">
                        <span class="text-cream font-medium">Harmonização Sugerida:</span>
                        <span class="text-gold border border-gold/40 px-3 py-1 bg-dark/60">Barolo DOCG</span>
                        <span class="text-gold border border-gold/40 px-3 py-1 bg-dark/60">Brunello di Montalcino</span>
                    </div>
                </div>

                <div class="lg:col-span-4 text-center lg:text-right border-t lg:border-t-0 lg:border-l border-gold/30 pt-6 lg:pt-0 lg:pl-8 space-y-3">
                    <span class="text-xs uppercase tracking-widest text-neutral-400 block font-light">Valor por Pessoa</span>
                    <span class="font-serif text-4xl sm:text-5xl text-gold font-bold block">R$ 145,00</span>
                    <a href="#reservas" class="interactive-hover inline-block bg-gold hover:bg-yellow-500 text-black px-7 py-3 text-xs uppercase tracking-widest font-bold transition-all shadow-lg shadow-gold/15">
                        Incluir na Reserva &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Filtros Interativos do Cardapio (Tabs Elegantes) -->
        <div class="gsap-fade-item flex flex-wrap justify-center gap-4 sm:gap-8 border-b border-neutral-800 pb-4">
            <button class="interactive-hover menu-tab-btn active text-xs uppercase tracking-widest font-bold pb-2 px-2 text-gold border-b-2 border-gold" data-filter="all">
                Todos os Pratos
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="antipasti">
                Antipasti & Entradas
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="primi">
                Massas Artesanais (Primi)
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="secondi">
                Carnes & Peixes (Secondi)
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="dolci">
                Sobremesas (Dolci)
            </button>
            <button class="interactive-hover menu-tab-btn text-xs uppercase tracking-widest font-medium text-neutral-400 hover:text-gold pb-2 px-2" data-filter="vini">
                Vinhos & Coquetelaria
            </button>
        </div>

        <!-- Grade de Pratos com Detalhes Gastronomicos -->
        <div id="menu-dishes-grid" class="grid md:grid-cols-2 gap-8">
            <!-- Item 1: Burrata -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="antipasti">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Burrata Pugliese con San Daniele</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 86,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Coração de burrata cremosa levemente fumada, presunto cru San Daniele curado durante 24 meses, tomatinhos confitados em azeite siciliano e focaccia quente do nosso forno.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Franciacorta Brut D'Oro</span>
            </div>

            <!-- Item 2: Carpaccio -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="antipasti">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Carpaccio di Manzo Stagionato</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 78,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Finas lâminas de filé-mignon marinado com ervas silvestres, lascas de Parmigiano Reggiano D.O.P. 24 meses, alcaparras crocantes e redução tradicional balsâmica de Modena.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Pinot Grigio delle Venezie</span>
            </div>

            <!-- Item 3: Spaghetti Pomodoro -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="primi">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Spaghetti Tradizionale al Pomodoro San Marzano</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 78,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Massa artesanal al dente envolvida em molho de tomates San Marzano biológicos cozinhados lentamente por 6 horas, finalizada com azeite extravirgem dourado e manjericão fresco.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Chianti Classico Riserva</span>
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
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Gavi di Gavi DOCG</span>
            </div>

            <!-- Item 5: Ossobuco -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="secondi">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Ossobuco alla Milanese con Risotto allo Zafferano</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 138,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Vitela braseada por 8 horas em redução aromática de vinho tinto siciliano e ervas frescas, acompanhada de risotto aveludado de açafrão verdadeiro em pistilos.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Amarone della Valpolicella</span>
            </div>

            <!-- Item 6: Filetto di Spigola -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="secondi">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Filetto di Spigola in Crosta di Pistacchio</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 132,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Robalo fresco grelhado em crosta estaladiça de pistácios de Bronte, emulsão cítrica de laranja siciliana e purê rústico de batatas trufadas.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Vermentino di Sardegna</span>
            </div>

            <!-- Item 7: Cannolo Siciliano D'Oro -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="dolci">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Cannolo Siciliano D'Oro con Foglia d'Oro</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 52,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Casquinha estaladiça com vinho Marsala, recheada no momento do serviço com ricota aveludada de ovelha, raspas de laranja cristalizada e folha de ouro comestível 24k.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Vinho Marsala Superiore Riserva</span>
            </div>

            <!-- Item 8: Tiramisu -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="dolci">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Tiramisù Tradizionale al Mascarpone</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 48,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Biscoitos Savoiardi embebidos em espresso italiano e licor Amaretto di Saronno, camadas generosas de creme fresco de mascarpone e cacau puro 70%.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Harmonização: Espresso Markitos D'Oro & Grappa</span>
            </div>

            <!-- Item 9: Vinho Barolo -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="vini">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Barolo DOCG Pio Cesare (Piemonte)</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 680,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    O rei dos vinhos italianos. Estrutura tânica potente, notas de pétalas de rosa seca, couro nobre e trufas. Harmonização perfeita com o Tagliolini al Tartufo.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Garrafa 750ml &bull; Safra Selecionada</span>
            </div>

            <!-- Item 10: Negroni D'Oro -->
            <div class="menu-dish-card gold-glow-card p-6 border border-neutral-800 bg-dark-card space-y-3" data-category="vini">
                <div class="flex justify-between items-baseline">
                    <h4 class="font-serif text-lg font-semibold text-cream">Negroni D'Oro Riserva (Signature Cocktail)</h4>
                    <span class="text-gold font-serif text-base font-bold">R$ 58,00</span>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">
                    Gin botânico infusionado com sálvia fresca, vermute tinto envelhecido em barrica de carvalho, Campari amadeirado e névoa aromática de óleo essencial de laranja siciliana.
                </p>
                <span class="text-[10px] text-neutral-500 uppercase tracking-widest block font-light">Aperitivo clássico reinterpretado pela casa</span>
            </div>
        </div>
    </div>
</section>
