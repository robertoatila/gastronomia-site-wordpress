# 🍝 Markitos D'Oro — Trattoria Contemporânea & Alta Gastronomia

> Plataforma web de alta fidelidade visual e imersão sensorial desenvolvida para o restaurante e bistrô **Markitos D'Oro**, unindo a herança familiar siciliana iniciada em **1936** com a estética e a velocidade da alta gastronomia moderna.

---

## 📖 1. Conceito da Marca & O Significado "D'Oro"

O conceito do **Markitos D'Oro** equilibra a alma rústica da trattoria mediterrânea tradicional com a elegância minimalista de um bistrô intimista contemporâneo:
* **Origem Familiar (1936):** Fundado nas colinas ensolaradas da Sicília pelo avô do Chef Eduardo. A premissa histórica e inegociável da família é: *ingredientes nobres não necessitam de artifícios*.
* **A Aplicação do Conceito "D'Oro":** O ouro não representa ostentação vazia. Representa a **nobreza e pureza da matéria-prima**:
  * A gema dourada de ovos caipiras na massa aberta à mão;
  * O azeite extravirgem siciliano de primeira prensagem a frio;
  * O respeito sagrado ao tempo de cocção e descanso dos alimentos;
  * O valor inestimável de receitas familiares transmitidas por três gerações.
* **Prato Assinatura D'Oro:** **Tagliolini al Tartufo Negro** — Massa fresca artesanal preparada na manhã de cada serviço com gemas de ovos caipiras, emulsão sedosa de manteiga alpina pura e lâminas generosas de trufas negras frescas colhidas em Norcia, finalizadas à mesa com flor de sal e azeite trufado. Harmonização sugerida: *Barolo DOCG* ou *Brunello di Montalcino*.

---

## 👨‍🍳 2. Persona do Negócio: Chef Eduardo

* **Idade:** 40 anos.
* **Experiência:** 10 anos dedicados à liderança culinária e comando de cozinhas de alta gastronomia.
* **Filosofia de Vida:** Combina a disciplina das técnicas contemporâneas internacionais com a memória afetiva das cozinhas de aldeia sicilianas. Entre o calor da lenha e o frescor das ervas colhidas no dia, Eduardo escolhe pessoalmente cada produto e desenha pratos concebidos para despertar memórias e encantar os sentidos.
* **Citação do Chef:**
  > *"O verdadeiro ouro de um prato não reside na extravagância visual, mas na pureza do ingrediente, no respeito ao tempo e no afeto impresso em cada detalhe que chega à sua mesa."*

---

## ⚡ 3. Stack Tecnológica & Performance 95+

* **Core:** WordPress 6.x / 7.x nativo (PHP 8.4 no Debian EC2)
* **Design System & Estilização:** [Tailwind CSS](https://tailwindcss.com/) com paleta personalizada (*Nero Vulcano, Ouro Champanhe, Creme Siciliano, Salvia*)
* **Motor de Animações Cinemáticas:**
  * **[Lenis](https://github.com/darkroomengineering/lenis):** Smooth scroll calibrado com física tátil instantânea (sem travamentos e sem latência).
  * **[GSAP 3 + ScrollTrigger](https://greensock.com/gsap/):** Revelações escalonadas e animações suaves no scroll.
  * **Cursor Nativo e Responsivo:** Cursor limpo e tátil, sem artifícios gráficos intrusivos.
* **Cardápio Visual com Fotografias de Alta Definição:** Cada prato conta com fotografia gastronômica dedicada, origem dos insumos, harmonização e abas interativas por categoria.
* **Governança & Regras:** Diretrizes documentadas nos arquivos `.cursorrules` e `RULES.md`.

---

## 📂 4. Estrutura do Repositório (Tema WordPress)

```text
gastronomia-site-wordpress/
├── .cursorrules                   # Regras de engenharia e diretrizes de design
├── RULES.md                       # Documento oficial de governança visual e código
├── README.md                      # Documentação técnica oficial e completa
├── style.css                      # Folha de estilos e declaração obrigatória do tema
├── functions.php                  # Enfileiramento de scripts, fontes, CPTs e helpers
├── header.php                     # Topbar com enquadramento nobre e navegação fluida
├── footer.php                     # Rodapé editorial, horários, endereço e copyright
├── front-page.php                 # Template da página inicial do WordPress
├── index.php                      # Template mestre e fallback universal
├── Gemini_Generated_Image_...jfif # Fotografia oficial em alta resolução do Chef Eduardo
├── assets/
│   ├── css/
│   │   └── custom.css             # Estilização de cartões, fotografias e abas
│   └── js/
│       ├── main.js                # Interatividade de abas e reservas no WhatsApp
│       └── animations.js          # Orquestração do GSAP e Lenis Smooth Scroll
└── template-parts/
    ├── section-hero.php           # Primeira impressão editorial: impacto e tipografia
    ├── section-historia.php       # O Legado Siciliano (1936 até Hoje) com linha do tempo
    ├── section-chef.php           # Retrato em cores reais e manifesto do Chef Eduardo
    ├── section-menu.php           # Cardápio autoral com fotos de alta gastronomia
    ├── section-experiencia.php    # A experiência no salão: intimismo, silêncio e calma
    └── section-reservas.php       # Formulário VIP integrado diretamente com WhatsApp
```

---

## ☁️ 5. Guia Completo na AWS EC2 (Debian 11 ou 12)

### A. Regras de Entrada no Security Group (Firewall da AWS)
No console da AWS > **EC2 > Security Groups > Inbound Rules**, garanta as regras:
* **Porta 22 (SSH):** Acesso ao terminal.
* **Porta 80 (HTTP):** Acesso web ao WordPress.
* **Porta 443 (HTTPS):** Acesso seguro com certificado SSL.

---

### B. Associar o Endereço IP Elástico (Elastic IP)
Para evitar que o IP mude ao reiniciar a máquina:
1. No console da AWS > **EC2 > Elastic IPs**.
2. Selecione o IP alocado (`54.225.139.150`).
3. Clique em **Ações > Associar endereço IP elástico**.
4. Selecione a sua instância do Debian e confirme a associação.

---

### C. Atualizar o IP Elástico no Banco de Dados MariaDB
No terminal da EC2:

```bash
sudo mariadb -u wpuser -p -e "USE wordpress; UPDATE wp_options SET option_value='http://54.225.139.150' WHERE option_name IN ('siteurl', 'home');"
```

---

### D. Ajustar os Limites de Upload do PHP no Servidor
Para permitir fotografias pesadas em alta resolução:

```bash
sudo sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 32M/' /etc/php/*/apache2/php.ini
sudo sed -i 's/post_max_size = 8M/post_max_size = 32M/' /etc/php/*/apache2/php.ini
sudo systemctl restart apache2
```

---

### E. Configurar Permissões Seguras no Linux
No terminal da EC2:

```bash
sudo chown -R www-data:www-data /var/www/html
sudo find /var/www/html/ -type d -exec chmod 755 {} \;
sudo find /var/www/html/ -type f -exec chmod 644 {} \;
```

---

## 🔄 6. Ciclo de Versionamento de Código (Git Workflow)

```mermaid
flowchart LR
    A["Dev Local (D:\gastronomia-site-wordpress)"] -->|"git commit & git push"| B["GitHub (Main)"]
    B -->|"git pull origin main"| C["AWS EC2 (Debian /var/www/html)"]
```

### Para Atualizar a Produção na AWS EC2
Basta conectar via SSH à sua instância EC2 e rodar:

```bash
cd /var/www/html/wp-content/themes/markitos-doro
sudo git pull origin main
sudo chown -R www-data:www-data /var/www/html/wp-content/themes/markitos-doro
```
