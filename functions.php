<?php
/**
 * Markitos D'Oro - Funcoes e Definicoes do Tema
 *
 * @package Markitos_DOro
 * @version 1.1.0
 */

if (!defined('ABSPATH')) {
    exit; // Seguranca contra acesso direto
}

/**
 * Carrega estilos, fontes e scripts modernos (Tailwind, GSAP, Lenis)
 */
function markitos_doro_enqueue_scripts() {
    // 1. Folha de estilos padrao do tema
    wp_enqueue_style('markitos-doro-theme-style', get_stylesheet_uri(), array(), '1.1.0');

    // 2. Estilos personalizados complementares
    if (file_exists(get_template_directory() . '/assets/css/custom.css')) {
        wp_enqueue_style('markitos-doro-custom-css', get_template_directory_uri() . '/assets/css/custom.css', array('markitos-doro-theme-style'), '1.1.0');
    }

    // 3. Google Fonts: Playfair Display + Plus Jakarta Sans + Cinzel Decorative
    wp_enqueue_style(
        'markitos-doro-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // 4. Tailwind CSS via CDN com suporte a utility classes
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);

    // 5. GSAP + ScrollTrigger (Animacoes cinematograficas de reveal e parallax)
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);

    // 6. Lenis (Smooth Scroll contínuo e responsivo)
    wp_enqueue_script('lenis', 'https://unpkg.com/lenis@1.1.9/dist/lenis.min.js', array(), '1.1.9', true);

    // 7. Scripts proprios de animacao e controle de interface
    if (file_exists(get_template_directory() . '/assets/js/animations.js')) {
        wp_enqueue_script('markitos-doro-animations', get_template_directory_uri() . '/assets/js/animations.js', array('gsap', 'gsap-scrolltrigger', 'lenis'), '1.1.0', true);
    }
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script('markitos-doro-main', get_template_directory_uri() . '/assets/js/main.js', array('lenis'), '1.1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'markitos_doro_enqueue_scripts');

/**
 * Configuracoes de suporte nativo do tema WordPress
 */
function markitos_doro_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Registro de menus
    register_nav_menus(array(
        'primary-menu' => __('Menu Principal', 'markitos-doro'),
        'footer-menu'  => __('Menu Rodapé', 'markitos-doro'),
    ));
}
add_action('after_setup_theme', 'markitos_doro_theme_setup');

/**
 * Helper inteligente para obter a foto do Chef Eduardo com fallback resiliente
 */
function markitos_doro_get_chef_image() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    $candidates = array(
        '/assets/images/chef-eduardo.jfif',
        '/assets/images/chef-eduardo.jpg',
        '/assets/chef-eduardo.jpg',
        '/Gemini_Generated_Image_1kr4so1kr4so1kr4.jfif',
    );

    foreach ($candidates as $rel_path) {
        if (file_exists($theme_dir . $rel_path)) {
            return $theme_uri . $rel_path;
        }
    }

    // Fallback para URL na raiz caso o arquivo exista remotamente
    return $theme_uri . '/Gemini_Generated_Image_1kr4so1kr4so1kr4.jfif';
}

/**
 * Registro de Custom Post Type para Pratos / Cardapio Gastronomico
 */
function markitos_doro_register_menu_cpt() {
    $labels = array(
        'name'               => __('Pratos D\'Oro', 'markitos-doro'),
        'singular_name'      => __('Prato', 'markitos-doro'),
        'menu_name'          => __('Cardápio D\'Oro', 'markitos-doro'),
        'add_new'            => __('Adicionar Prato', 'markitos-doro'),
        'add_new_item'       => __('Adicionar Novo Prato', 'markitos-doro'),
        'edit_item'          => __('Editar Prato', 'markitos-doro'),
        'new_item'           => __('Novo Prato', 'markitos-doro'),
        'view_item'          => __('Ver Prato', 'markitos-doro'),
        'search_items'       => __('Buscar Pratos', 'markitos-doro'),
        'not_found'          => __('Nenhum prato cadastrado', 'markitos-doro'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-food',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'            => array('slug' => 'menu-item'),
    );

    register_post_type('prato_doro', $args);

    // Taxonomia para categorias do cardapio
    register_taxonomy('categoria_cardapio', 'prato_doro', array(
        'labels' => array(
            'name'          => __('Categorias da Carta', 'markitos-doro'),
            'singular_name' => __('Categoria', 'markitos-doro'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'categoria-menu'),
    ));
}
add_action('init', 'markitos_doro_register_menu_cpt');
