<?php
/**
 * Torcisão Trefilados Functions
 * 
 * @package Torcisao_Trefilados
 */

// Enqueue styles and scripts
function torcisao_enqueue_assets() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css', array(), '5.3.0');
    
    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.10.5');
    
    // Google Fonts
    wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Theme stylesheet
    wp_enqueue_style('torcisao-style', get_stylesheet_uri(), array(), '1.0');
    
    // Additional CSS files
    $css_files = array(
        'banner1',
        'cabecalho',
        'footer',
        'form',
        'isosection',
        'posfooter',
        'produtos',
        'provasocial',
        'quemsomos',
        'produto',
        'blog',
        'institucional'
    );
    
    foreach ($css_files as $css_file) {
        if (file_exists(get_template_directory() . '/' . $css_file . '.css')) {
            wp_enqueue_style('torcisao-' . $css_file, get_template_directory_uri() . '/' . $css_file . '.css', array('torcisao-style'), '1.0');
        }
    }
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
    
    // jQuery Mask Plugin
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array('jquery'), '1.14.16', true);
    
    // Theme scripts
    if (file_exists(get_template_directory() . '/script.js')) {
        wp_enqueue_script('torcisao-script', get_template_directory_uri() . '/script.js', array('jquery', 'bootstrap-bundle'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'torcisao_enqueue_assets');

// Theme support
function torcisao_theme_support() {
    // Add title tag support
    add_theme_support('title-tag');
    
    // Add post thumbnails support
    add_theme_support('post-thumbnails');
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'torcisao'),
    ));
}
add_action('after_setup_theme', 'torcisao_theme_support');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Create custom page templates on theme activation
function torcisao_create_pages() {
    // Check if pages already exist
    $pages = array(
        'blog' => 'Blog',
        'barrabtc' => 'Barras BTC',
        'barramtc' => 'Barras MTC',
        'barraatc' => 'Barras ATC',
        'barraacoressulfurado' => 'Barras Aço Ressulfurado',
        'aramebtc' => 'Arames BTC',
        'aramemtc' => 'Arames MTC',
        'arameatc' => 'Arames ATC',
        'hastebc' => 'Haste Baixa Camada',
        'hasteac' => 'Haste Alta Camada',
        'politicadecookies' => 'Política de Cookies',
        'politicadeprivacidade' => 'Política de Privacidade',
        'politicadequalidade' => 'Política de Qualidade',
    );
    
    foreach ($pages as $slug => $title) {
        // Check if page exists
        $page = get_page_by_path($slug);
        
        if (!$page) {
            // Create page
            wp_insert_post(array(
                'post_title'    => $title,
                'post_name'     => $slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '',
            ));
        }
    }
}
add_action('after_switch_theme', 'torcisao_create_pages');
