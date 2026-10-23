    <!-- Rodapé Editorial de Alto Padrão -->
    <footer class="bg-dark-deep border-t border-neutral-900 pt-20 pb-12 px-6 sm:px-8 lg:px-12 text-neutral-400">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 pb-16 border-b border-neutral-900/80">
            <!-- Coluna 1: Marca & Manifesto -->
            <div class="space-y-4">
                <a href="#hero" class="scroll-to-top flex items-center space-x-3.5 group cursor-pointer inline-block" title="Voltar ao início">
                    <span class="w-8 h-8 rounded-full border border-gold/60 flex items-center justify-center font-cinzel text-gold text-xs group-hover:border-gold transition-colors">D</span>
                    <span class="font-serif text-xl tracking-widest text-cream uppercase font-bold group-hover:text-gold transition-colors">Markitos D'Oro</span>
                </a>
                <p class="text-xs leading-relaxed text-neutral-500 font-light">
                    Trattoria & Bistrô Contemporâneo de alma siciliana. Fundado pelo avô de Eduardo em 1936, honrando a nobreza da matéria-prima importada e o luxo do tempo em cada prato.
                </p>
                <span class="inline-block text-[10px] tracking-widest uppercase text-gold border border-gold/30 px-3 py-1 font-light">
                    Sicília 1936 &bull; Alta Gastronomia Intimista
                </span>
            </div>

            <!-- Coluna 2: Horários & Turnos -->
            <div class="space-y-3">
                <h4 class="font-serif text-sm uppercase tracking-widest text-cream font-bold">Horários de Atendimento</h4>
                <div class="space-y-2 text-xs text-neutral-400">
                    <div class="flex justify-between border-b border-neutral-900 pb-1">
                        <span>Terça a Quinta</span>
                        <span class="text-cream">19:00 — 23:30</span>
                    </div>
                    <div class="flex justify-between border-b border-neutral-900 pb-1">
                        <span>Sexta e Sábado</span>
                        <span class="text-cream">19:00 — 00:00</span>
                    </div>
                    <div class="flex justify-between border-b border-neutral-900 pb-1">
                        <span>Almoço Fim de Semana</span>
                        <span class="text-cream">12:30 — 16:00</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Segundas-feiras</span>
                        <span class="text-gold">Descanso da Brigada</span>
                    </div>
                </div>
            </div>

            <!-- Coluna 3: Localização & Concierge -->
            <div class="space-y-3">
                <h4 class="font-serif text-sm uppercase tracking-widest text-cream font-bold">Localização & Contato</h4>
                <div class="space-y-2 text-xs text-neutral-400">
                    <p class="leading-relaxed">Alameda dos Sabores Nobres, 1936<br>Jardins / Bairro Gastronômico</p>
                    <p class="text-gold font-medium">concierge@markitosdoro.com.br</p>
                    <p class="text-cream">+55 (11) 99999-9999 (WhatsApp VIP)</p>
                    <p class="text-[11px] text-neutral-500">Valet cortesia no local e adega climatizada.</p>
                </div>
            </div>

            <!-- Coluna 4: Mezanino Privado -->
            <div class="space-y-3">
                <h4 class="font-serif text-sm uppercase tracking-widest text-cream font-bold">Experiências Privadas</h4>
                <p class="text-xs text-neutral-500 leading-relaxed font-light">
                    Disponibilizamos nosso mezanino exclusivo para jantares harmonizados e eventos corporativos intimistas sob encomenda direta com o Chef Eduardo.
                </p>
                <div class="pt-2">
                    <a href="#reservas" class="inline-block bg-neutral-900 hover:bg-gold hover:text-black border border-neutral-800 hover:border-gold text-cream text-[11px] uppercase tracking-widest px-4 py-2 font-medium transition-all">
                        Consultar Mezanino &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Sub-rodapé -->
        <div class="max-w-7xl mx-auto pt-8 flex flex-col md:flex-row items-center justify-between text-[11px] text-neutral-600 space-y-4 md:space-y-0">
            <p>&copy; <?php echo date('Y'); ?> Markitos D'Oro. Todos os direitos reservados. Tradição Siciliana desde 1936.</p>
            <div class="flex space-x-6 text-neutral-500">
                <a href="#historia" class="hover:text-gold transition-colors">Origem</a>
                <a href="#chef" class="hover:text-gold transition-colors">Chef Eduardo</a>
                <a href="#menu" class="hover:text-gold transition-colors">Cardápio</a>
                <a href="#hero" class="scroll-to-top hover:text-gold transition-colors font-medium cursor-pointer">Voltar ao Topo &uarr;</a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
