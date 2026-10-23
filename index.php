<?php
/**
 * O template principal de fallback do tema Markitos D'Oro
 *
 * @package Markitos_DOro
 * @version 1.1.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // Carrega todas as seções modulares da experiência Markitos D'Oro
    get_template_part('template-parts/section-hero');
    get_template_part('template-parts/section-historia');
    get_template_part('template-parts/section-chef');
    get_template_part('template-parts/section-menu');
    get_template_part('template-parts/section-experiencia');
    get_template_part('template-parts/section-reservas');
    ?>
</main>

<?php
get_footer();
