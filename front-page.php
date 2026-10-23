<?php
/**
 * Template Name: Página Inicial Markitos D'Oro
 *
 * @package Markitos_DOro
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // 1. Hero Section: Impacto e Primeira Impressao
    get_template_part('template-parts/section-hero');

    // 2. Historia e Legado Siciliano de 1936
    get_template_part('template-parts/section-historia');

    // 3. O Chef Eduardo (40 anos, 10 anos de fogao)
    get_template_part('template-parts/section-chef');

    // 4. Cardapio Sensorial Completo e Prato Assinatura
    get_template_part('template-parts/section-menu');

    // 5. Atmosfera Intimista e Experiencia Gastronomica
    get_template_part('template-parts/section-experiencia');

    // 6. Solicitacao de Reservas VIP
    get_template_part('template-parts/section-reservas');
    ?>
</main>

<?php
get_footer();
