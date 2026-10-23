<!-- Secao 5: Reservas VIP e Contato -->
<section id="reservas" class="py-28 px-6 bg-[#0E1013] border-t border-neutral-900 gsap-fade-section">
    <div class="max-w-4xl mx-auto space-y-12">
        <div class="text-center space-y-4 gsap-fade-item">
            <div class="inline-flex items-center space-x-2">
                <span class="w-2 h-2 rounded-full bg-gold"></span>
                <span class="text-gold tracking-[0.25em] uppercase text-xs font-semibold">Reserva VIP & Concierge</span>
            </div>
            <h2 class="font-serif text-4xl sm:text-5xl font-bold text-cream">
                Viva a Experiência Markitos D'Oro
            </h2>
            <p class="text-neutral-400 font-light text-sm sm:text-base max-w-xl mx-auto leading-relaxed">
                Devido à produção artesanal diária do Chef Eduardo, operamos sob reserva antecipada. Preencha seus dados para conectar diretamente com o nosso Concierge no WhatsApp.
            </p>
        </div>

        <!-- Formulario Interativo de Reserva VIP -->
        <div class="p-8 sm:p-12 border border-gold/40 bg-dark-card rounded-sm shadow-2xl gsap-fade-item">
            <form id="reservation-form" class="space-y-6">
                <div class="grid sm:grid-cols-2 gap-6">
                    <!-- Nome Completo -->
                    <div class="space-y-2">
                        <label for="res-nome" class="block text-xs uppercase tracking-widest text-neutral-300 font-medium">Nome do Titular da Mesa</label>
                        <input 
                            type="text" 
                            id="res-nome" 
                            required 
                            placeholder="Ex: Dr. Fernando Albuquerque" 
                            class="w-full bg-dark border border-neutral-800 focus:border-gold px-4 py-3 text-sm text-cream placeholder-neutral-600 focus:outline-none transition-colors"
                        >
                    </div>

                    <!-- Quantidade de Pessoas -->
                    <div class="space-y-2">
                        <label for="res-pessoas" class="block text-xs uppercase tracking-widest text-neutral-300 font-medium">Lugares à Mesa</label>
                        <select 
                            id="res-pessoas" 
                            class="w-full bg-dark border border-neutral-800 focus:border-gold px-4 py-3 text-sm text-cream focus:outline-none transition-colors"
                        >
                            <option value="2 pessoas (Mesa Intimista)">2 pessoas (Mesa Intimista)</option>
                            <option value="4 pessoas (Mesa Gastronômica)">4 pessoas (Mesa Gastronômica)</option>
                            <option value="6 pessoas (Mesa da Família)">6 pessoas (Mesa da Família)</option>
                            <option value="8+ pessoas (Mezanino Privado)">8+ pessoas (Mezanino Privado)</option>
                        </select>
                    </div>

                    <!-- Data Desejada -->
                    <div class="space-y-2">
                        <label for="res-data" class="block text-xs uppercase tracking-widest text-neutral-300 font-medium">Data Pretendida</label>
                        <input 
                            type="date" 
                            id="res-data" 
                            required 
                            class="w-full bg-dark border border-neutral-800 focus:border-gold px-4 py-3 text-sm text-cream focus:outline-none transition-colors"
                        >
                    </div>

                    <!-- Turno Desejado -->
                    <div class="space-y-2">
                        <label for="res-turno" class="block text-xs uppercase tracking-widest text-neutral-300 font-medium">Turno</label>
                        <select 
                            id="res-turno" 
                            class="w-full bg-dark border border-neutral-800 focus:border-gold px-4 py-3 text-sm text-cream focus:outline-none transition-colors"
                        >
                            <option value="Jantar - Primeiro Turno (19:30)">Jantar &bull; 1º Turno (19:30)</option>
                            <option value="Jantar - Segundo Turno (21:30)">Jantar &bull; 2º Turno (21:30)</option>
                            <option value="Almoço Executivo de Fim de Semana (13:00)">Almoço Fim de Semana (13:00)</option>
                        </select>
                    </div>
                </div>

                <!-- Observacoes Especiais -->
                <div class="space-y-2">
                    <label for="res-notas" class="block text-xs uppercase tracking-widest text-neutral-300 font-medium">Observações Gastronômicas ou Comemorações</label>
                    <textarea 
                        id="res-notas" 
                        rows="3" 
                        placeholder="Ex: Aniversário de casamento, preferência pelo Tagliolini al Tartufo, restrições alimentares..."
                        class="w-full bg-dark border border-neutral-800 focus:border-gold px-4 py-3 text-sm text-cream placeholder-neutral-600 focus:outline-none transition-colors"
                    ></textarea>
                </div>

                <!-- Botao de Envio -->
                <div class="pt-2 text-center">
                    <button 
                        type="submit" 
                        class="interactive-hover w-full sm:w-auto bg-gold hover:bg-yellow-500 text-black px-10 py-4 uppercase tracking-[0.2em] text-xs font-bold transition-all shadow-xl shadow-gold/20"
                    >
                        Solicitar Reserva com o Concierge no WhatsApp &rarr;
                    </button>
                    <p class="text-[11px] text-neutral-500 mt-3 font-light">
                        Você será redirecionado para o WhatsApp oficial com a mensagem pré-configurada.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>
