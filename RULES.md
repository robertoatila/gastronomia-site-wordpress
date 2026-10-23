# 📜 Regras de Engenharia, Design & Governança — Markitos D'Oro

Este documento estabelece as diretrizes inegociáveis de design, código e arquitetura para o tema e a plataforma web do restaurante **Markitos D'Oro**.

---

## 🎨 1. Diretrizes de Design & Anti-Slop Visual

* **Zero Clichês Visuais de IA:**
  * É proibido o uso de "bolinhas pulsantes", pontinhos verdes ou dourados piscando (`animate-ping`, `animate-pulse`) como ornamento genérico de seções.
  * O design deve transmitir a sobriedade, a calma e o requinte de uma trattoria de luxo iniciada na Sicília em 1936.
* **Cursor Nativo do Navegador:**
  * Não utilizar círculos magnéticos ou bolinhas seguidoras de cursor. O cursor nativo do sistema operacional oferece resposta tátil imediata, sem latência em trackpads e mouses de alta precisão.
* **Tipografia Editorial:**
  * **Títulos e Destaques:** *Playfair Display* (serifada, imponente, elegante e clássica).
  * **Textos de Leitura:** *Plus Jakarta Sans* (sem serifa, neutra, limpa e legível).
  * **Brasão e Detalhes:** *Cinzel Decorative*.
* **Paleta Oficial D'Oro:**
  * **Nero Vulcano:** `#0B0C0E` (fundo principal intimista a meia-luz).
  * **Superfícies & Cartões:** `#131519` e `#1A1D23`.
  * **Ouro Nobre / Champanhe:** `#C5A059` e `#E7C986`.
  * **Creme Siciliano:** `#F7F5F0` (farinha biológica e contraste suave).
  * **Verde Sálvia:** `#2D4A3E` (ervas frescas de horta e detalhes botânicos).

---

## 💻 2. Engenharia de Frontend & Responsividade 360°

* **Enquadramento do Cabeçalho (Header):**
  * O menu fixo deve ser espaçoso e arejado. Logo à esquerda, navegação concisa ao centro e botão de reserva à direita.
  * Nunca amontoar blocos de horários, endereços ou múltiplos telefones na barra de navegação superior.
* **Transições e Rolagem Suave:**
  * **Lenis Smooth Scroll:** Calibrado em `0.85s` com física tátil instantânea e `syncTouch: false` para não interferir na rolagem nativa de celulares.
  * O clique no logotipo ou links internos (`#historia`, `#chef`, `#menu`, `#experiencia`, `#reservas`) deve realizar um deslizamento contínuo sem nunca dar F5 / recarregar a página.
* **Fotografia Gastronômica no Cardápio:**
  * Todos os pratos devem possuir fotografias reais, apetitosas e com iluminação quente.
  * Uso obrigatório de `loading="lazy"` para garantir nota 95+ no Google PageSpeed.
  * Efeito suave de zoom (`scale-105`) no hover dos pratos.
* **Responsividade Multi-Dispositivo:**
  * Testado e ajustado para celulares (360px a 480px), tablets (768px a 1024px) e monitores ultrawide (1440px a 1920px).

---

## 🏛️ 3. Arquitetura do Tema WordPress

* Todas as seções devem ser mantidas modulares na pasta `template-parts/`:
  * `section-hero.php` — Primeira impressão e impacto.
  * `section-historia.php` — Linha do tempo de 1936 até hoje.
  * `section-chef.php` — Retrato e manifesto do Chef Eduardo.
  * `section-menu.php` — Cardápio com fotos e destaque do Tagliolini al Tartufo.
  * `section-experiencia.php` — Os 4 rituais intimistas do salão.
  * `section-reservas.php` — Formulário VIP integrado ao WhatsApp.
* Centralizar o carregamento de estilos e scripts no arquivo `functions.php`.
* Garantir suporte à barra de administração do WordPress (`.admin-bar`).

---

## 🔄 4. Protocolo de Versionamento e Deploy na AWS

```text
[VS Code Local (D:\gastronomia-site-wordpress)]
                     │
                     ▼ git commit & git push
[GitHub (robertoatila/gastronomia-site-wordpress)]
                     │
                     ▼ sudo git pull origin main
[AWS EC2 Debian (/var/www/html/wp-content/themes/markitos-doro)]
```

* **Regra de Ouro:** Nunca editar arquivos do tema diretamente no servidor da AWS. Toda alteração deve ser testada localmente, commitada no GitHub e puxada na AWS com `git pull origin main`.
