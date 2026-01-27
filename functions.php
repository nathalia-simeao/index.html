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
    
    // Add custom header support
    add_theme_support('custom-header');
    
    // Add custom background support
    add_theme_support('custom-background');
    
    // Add automatic feed links
    add_theme_support('automatic-feed-links');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'torcisao'),
        'footer' => __('Menu Rodapé', 'torcisao'),
    ));
}
add_action('after_setup_theme', 'torcisao_theme_support');

// Register widget areas
function torcisao_widgets_init() {
    // Footer Widget Area 1
    register_sidebar(array(
        'name'          => __('Rodapé - Coluna 1', 'torcisao'),
        'id'            => 'footer-1',
        'description'   => __('Área de widgets para a primeira coluna do rodapé', 'torcisao'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    // Footer Widget Area 2
    register_sidebar(array(
        'name'          => __('Rodapé - Coluna 2', 'torcisao'),
        'id'            => 'footer-2',
        'description'   => __('Área de widgets para a segunda coluna do rodapé', 'torcisao'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    // Footer Widget Area 3
    register_sidebar(array(
        'name'          => __('Rodapé - Coluna 3', 'torcisao'),
        'id'            => 'footer-3',
        'description'   => __('Área de widgets para a terceira coluna do rodapé', 'torcisao'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    // Footer Widget Area 4
    register_sidebar(array(
        'name'          => __('Rodapé - Coluna 4', 'torcisao'),
        'id'            => 'footer-4',
        'description'   => __('Área de widgets para a quarta coluna do rodapé', 'torcisao'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    // Sidebar Widget Area
    register_sidebar(array(
        'name'          => __('Barra Lateral', 'torcisao'),
        'id'            => 'sidebar-1',
        'description'   => __('Área de widgets para a barra lateral', 'torcisao'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'torcisao_widgets_init');

// Customizer - Cores e Configurações
function torcisao_customize_register($wp_customize) {
    
    // ===== SEÇÃO: CORES DO SITE =====
    $wp_customize->add_section('torcisao_colors', array(
        'title'    => __('Cores do Site', 'torcisao'),
        'priority' => 30,
    ));
    
    // Cor Primária (Laranja)
    $wp_customize->add_setting('torcisao_primary_color', array(
        'default'           => '#F47C38',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_primary_color', array(
        'label'    => __('Cor Primária (Laranja)', 'torcisao'),
        'section'  => 'torcisao_colors',
        'settings' => 'torcisao_primary_color',
    )));
    
    // Cor Secundária (Cinza Escuro)
    $wp_customize->add_setting('torcisao_secondary_color', array(
        'default'           => '#2C292A',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_secondary_color', array(
        'label'    => __('Cor Secundária (Cinza Escuro)', 'torcisao'),
        'section'  => 'torcisao_colors',
        'settings' => 'torcisao_secondary_color',
    )));
    
    // Cor de Fundo
    $wp_customize->add_setting('torcisao_background_color', array(
        'default'           => '#E7E5E3',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_background_color', array(
        'label'    => __('Cor de Fundo (Cinza Claro)', 'torcisao'),
        'section'  => 'torcisao_colors',
        'settings' => 'torcisao_background_color',
    )));
    
    // ===== SEÇÃO: INFORMAÇÕES DE CONTATO =====
    $wp_customize->add_section('torcisao_contact', array(
        'title'    => __('Informações de Contato', 'torcisao'),
        'priority' => 35,
    ));
    
    // Telefone
    $wp_customize->add_setting('torcisao_phone', array(
        'default'           => '(11) 2221-9400',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_phone', array(
        'label'    => __('Telefone', 'torcisao'),
        'section'  => 'torcisao_contact',
        'type'     => 'text',
    ));
    
    // WhatsApp
    $wp_customize->add_setting('torcisao_whatsapp', array(
        'default'           => '(11) 98899-6080',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_whatsapp', array(
        'label'    => __('WhatsApp', 'torcisao'),
        'section'  => 'torcisao_contact',
        'type'     => 'text',
    ));
    
    // Email
    $wp_customize->add_setting('torcisao_email', array(
        'default'           => 'contato@torcisao.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('torcisao_email', array(
        'label'    => __('Email', 'torcisao'),
        'section'  => 'torcisao_contact',
        'type'     => 'email',
    ));
    
    // Endereço
    $wp_customize->add_setting('torcisao_address', array(
        'default'           => 'Rua Exemplo, 123 - São Paulo/SP',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('torcisao_address', array(
        'label'    => __('Endereço', 'torcisao'),
        'section'  => 'torcisao_contact',
        'type'     => 'textarea',
    ));
    
    // ===== SEÇÃO: REDES SOCIAIS =====
    $wp_customize->add_section('torcisao_social', array(
        'title'    => __('Redes Sociais', 'torcisao'),
        'priority' => 40,
    ));
    
    // Facebook
    $wp_customize->add_setting('torcisao_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('torcisao_facebook', array(
        'label'    => __('Facebook URL', 'torcisao'),
        'section'  => 'torcisao_social',
        'type'     => 'url',
    ));
    
    // Instagram
    $wp_customize->add_setting('torcisao_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('torcisao_instagram', array(
        'label'    => __('Instagram URL', 'torcisao'),
        'section'  => 'torcisao_social',
        'type'     => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('torcisao_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('torcisao_linkedin', array(
        'label'    => __('LinkedIn URL', 'torcisao'),
        'section'  => 'torcisao_social',
        'type'     => 'url',
    ));
    
    // YouTube
    $wp_customize->add_setting('torcisao_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('torcisao_youtube', array(
        'label'    => __('YouTube URL', 'torcisao'),
        'section'  => 'torcisao_social',
        'type'     => 'url',
    ));
    
    // ===== SEÇÃO: TEXTOS DO RODAPÉ =====
    $wp_customize->add_section('torcisao_footer_text', array(
        'title'    => __('Textos do Rodapé', 'torcisao'),
        'priority' => 45,
    ));
    
    // Texto de Copyright
    $wp_customize->add_setting('torcisao_copyright', array(
        'default'           => '© 2025 Torcisão Trefilados. Todos os direitos reservados.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_copyright', array(
        'label'    => __('Texto de Copyright', 'torcisao'),
        'section'  => 'torcisao_footer_text',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'torcisao_customize_register');

// Output das cores personalizadas no CSS
function torcisao_customizer_css() {
    $primary_color = get_theme_mod('torcisao_primary_color', '#F47C38');
    $secondary_color = get_theme_mod('torcisao_secondary_color', '#2C292A');
    $background_color = get_theme_mod('torcisao_background_color', '#E7E5E3');
    ?>
    <style type="text/css">
        :root {
            --cor-primaria: <?php echo esc_attr($primary_color); ?>;
            --cor-secundaria: <?php echo esc_attr($secondary_color); ?>;
            --cor-de-fundo: <?php echo esc_attr($background_color); ?>;
        }
        
        /* Botões primários */
        .btn-primary, .button-primary {
            background-color: <?php echo esc_attr($primary_color); ?> !important;
        }
        
        /* Links hover */
        a:hover {
            color: <?php echo esc_attr($primary_color); ?>;
        }
        
        /* Backgrounds */
        body {
            background-color: <?php echo esc_attr($background_color); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'torcisao_customizer_css');

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
