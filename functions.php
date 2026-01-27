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
    
    // Google Fonts dinâmicas
    $font_family = get_theme_mod('torcisao_font_family', 'Montserrat');
    $font_url = '';
    
    $fonts = array();
    if ($font_family !== 'Arial' && $font_family !== 'Helvetica') {
        $fonts[] = $font_family . ':300,400,500,600,700';
    }
    
    if (!empty($fonts)) {
        $font_url = add_query_arg(array(
            'family' => implode('|', $fonts),
            'display' => 'swap',
        ), 'https://fonts.googleapis.com/css2');
        
        wp_enqueue_style('torcisao-google-fonts', $font_url, array(), null);
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
    
    // ===== SEÇÃO: IMAGENS DO SITE =====
    $wp_customize->add_section('torcisao_images', array(
        'title'    => __('Imagens do Site', 'torcisao'),
        'priority' => 50,
    ));
    
    // Imagem do Banner Principal
    $wp_customize->add_setting('torcisao_banner_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'torcisao_banner_image', array(
        'label'    => __('Imagem de Fundo do Banner Principal', 'torcisao'),
        'section'  => 'torcisao_images',
        'settings' => 'torcisao_banner_image',
        'description' => __('Tamanho recomendado: 1920x1080px', 'torcisao'),
    )));
    
    // Logo do Cabeçalho (alternativa ao custom-logo)
    $wp_customize->add_setting('torcisao_logo_header', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'torcisao_logo_header', array(
        'label'    => __('Logo do Cabeçalho (Alternativo)', 'torcisao'),
        'section'  => 'torcisao_images',
        'settings' => 'torcisao_logo_header',
        'description' => __('Use esta opção para substituir o logo padrão', 'torcisao'),
    )));
    
    // Favicon
    $wp_customize->add_setting('torcisao_favicon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'torcisao_favicon', array(
        'label'    => __('Favicon (Ícone do Site)', 'torcisao'),
        'section'  => 'torcisao_images',
        'settings' => 'torcisao_favicon',
        'description' => __('Tamanho recomendado: 512x512px', 'torcisao'),
    )));
    
    // ===== SEÇÃO: VÍDEOS =====
    $wp_customize->add_section('torcisao_videos', array(
        'title'    => __('Vídeos do Site', 'torcisao'),
        'priority' => 55,
    ));
    
    // Vídeo de Fundo do Banner
    $wp_customize->add_setting('torcisao_banner_video', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('torcisao_banner_video', array(
        'label'    => __('Vídeo de Fundo do Banner (URL)', 'torcisao'),
        'section'  => 'torcisao_videos',
        'type'     => 'url',
        'description' => __('URL do vídeo MP4. Deixe em branco para usar imagem.', 'torcisao'),
    ));
    
    // Vídeo Institucional
    $wp_customize->add_setting('torcisao_video_institucional', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('torcisao_video_institucional', array(
        'label'    => __('Vídeo Institucional (YouTube/Vimeo)', 'torcisao'),
        'section'  => 'torcisao_videos',
        'type'     => 'url',
        'description' => __('URL do vídeo do YouTube ou Vimeo', 'torcisao'),
    ));
    
    // ===== SEÇÃO: TIPOGRAFIA =====
    $wp_customize->add_section('torcisao_typography', array(
        'title'    => __('Tipografia (Fontes)', 'torcisao'),
        'priority' => 60,
    ));
    
    // Fonte Principal
    $wp_customize->add_setting('torcisao_font_family', array(
        'default'           => 'Montserrat',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_font_family', array(
        'label'    => __('Fonte Principal', 'torcisao'),
        'section'  => 'torcisao_typography',
        'type'     => 'select',
        'choices'  => array(
            'Montserrat' => 'Montserrat',
            'Roboto'     => 'Roboto',
            'Open Sans'  => 'Open Sans',
            'Lato'       => 'Lato',
            'Poppins'    => 'Poppins',
            'Inter'      => 'Inter',
            'Arial'      => 'Arial',
            'Helvetica'  => 'Helvetica',
        ),
    ));
    
    // Tamanho da Fonte Base
    $wp_customize->add_setting('torcisao_font_size_base', array(
        'default'           => '16',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('torcisao_font_size_base', array(
        'label'    => __('Tamanho da Fonte Base (px)', 'torcisao'),
        'section'  => 'torcisao_typography',
        'type'     => 'number',
        'input_attrs' => array(
            'min'  => 12,
            'max'  => 24,
            'step' => 1,
        ),
    ));
    
    // Tamanho dos Títulos H1
    $wp_customize->add_setting('torcisao_font_size_h1', array(
        'default'           => '48',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('torcisao_font_size_h1', array(
        'label'    => __('Tamanho Títulos H1 (px)', 'torcisao'),
        'section'  => 'torcisao_typography',
        'type'     => 'number',
        'input_attrs' => array(
            'min'  => 24,
            'max'  => 72,
            'step' => 2,
        ),
    ));
    
    // Cor do Texto
    $wp_customize->add_setting('torcisao_text_color', array(
        'default'           => '#2C292A',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_text_color', array(
        'label'    => __('Cor do Texto Principal', 'torcisao'),
        'section'  => 'torcisao_typography',
    )));
    
    // Alinhamento do Texto Banner
    $wp_customize->add_setting('torcisao_banner_text_align', array(
        'default'           => 'left',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_banner_text_align', array(
        'label'    => __('Alinhamento do Texto do Banner', 'torcisao'),
        'section'  => 'torcisao_typography',
        'type'     => 'select',
        'choices'  => array(
            'left'   => 'Esquerda',
            'center' => 'Centro',
            'right'  => 'Direita',
        ),
    ));
    
    // ===== SEÇÃO: CORES DAS SEÇÕES =====
    $wp_customize->add_section('torcisao_section_colors', array(
        'title'    => __('Cores das Seções', 'torcisao'),
        'priority' => 65,
    ));
    
    // Banner Principal
    $wp_customize->add_setting('torcisao_banner_bg_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_banner_bg_color', array(
        'label'    => __('Cor de Fundo - Banner Principal', 'torcisao'),
        'section'  => 'torcisao_section_colors',
    )));
    
    // Seção Produtos
    $wp_customize->add_setting('torcisao_produtos_bg_color', array(
        'default'           => '#E7E5E3',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_produtos_bg_color', array(
        'label'    => __('Cor de Fundo - Seção Produtos', 'torcisao'),
        'section'  => 'torcisao_section_colors',
    )));
    
    // Seção Quem Somos
    $wp_customize->add_setting('torcisao_quemsomos_bg_color', array(
        'default'           => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_quemsomos_bg_color', array(
        'label'    => __('Cor de Fundo - Seção Quem Somos', 'torcisao'),
        'section'  => 'torcisao_section_colors',
    )));
    
    // Seção Formulário
    $wp_customize->add_setting('torcisao_form_bg_color', array(
        'default'           => '#2C292A',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_form_bg_color', array(
        'label'    => __('Cor de Fundo - Seção Formulário', 'torcisao'),
        'section'  => 'torcisao_section_colors',
    )));
    
    // Rodapé
    $wp_customize->add_setting('torcisao_footer_bg_color', array(
        'default'           => '#2C292A',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_footer_bg_color', array(
        'label'    => __('Cor de Fundo - Rodapé', 'torcisao'),
        'section'  => 'torcisao_section_colors',
    )));
    
    // ===== SEÇÃO: EFEITOS E ANIMAÇÕES =====
    $wp_customize->add_section('torcisao_effects', array(
        'title'    => __('Efeitos e Animações', 'torcisao'),
        'priority' => 70,
    ));
    
    // Ativar/Desativar Animações
    $wp_customize->add_setting('torcisao_enable_animations', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('torcisao_enable_animations', array(
        'label'    => __('Ativar Animações', 'torcisao'),
        'section'  => 'torcisao_effects',
        'type'     => 'checkbox',
    ));
    
    // Efeito Hover dos Cards
    $wp_customize->add_setting('torcisao_card_hover_effect', array(
        'default'           => 'lift',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_card_hover_effect', array(
        'label'    => __('Efeito Hover dos Cards', 'torcisao'),
        'section'  => 'torcisao_effects',
        'type'     => 'select',
        'choices'  => array(
            'lift'   => 'Elevar (padrão)',
            'scale'  => 'Aumentar',
            'glow'   => 'Brilho',
            'none'   => 'Sem efeito',
        ),
    ));
    
    // Sombra dos Cards
    $wp_customize->add_setting('torcisao_card_shadow', array(
        'default'           => 'medium',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_card_shadow', array(
        'label'    => __('Sombra dos Cards', 'torcisao'),
        'section'  => 'torcisao_effects',
        'type'     => 'select',
        'choices'  => array(
            'none'   => 'Sem sombra',
            'light'  => 'Leve',
            'medium' => 'Média',
            'heavy'  => 'Forte',
        ),
    ));
    
    // ===== SEÇÃO: ESTILOS DE CAIXAS =====
    $wp_customize->add_section('torcisao_box_styles', array(
        'title'    => __('Estilo das Caixas e Cards', 'torcisao'),
        'priority' => 75,
    ));
    
    // Formato das Bordas
    $wp_customize->add_setting('torcisao_border_radius', array(
        'default'           => '10',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('torcisao_border_radius', array(
        'label'    => __('Arredondamento das Bordas (px)', 'torcisao'),
        'section'  => 'torcisao_box_styles',
        'type'     => 'number',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 50,
            'step' => 5,
        ),
        'description' => __('0 = quadrado, 50 = muito arredondado', 'torcisao'),
    ));
    
    // Estilo das Bordas dos Cards
    $wp_customize->add_setting('torcisao_card_border_style', array(
        'default'           => 'none',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('torcisao_card_border_style', array(
        'label'    => __('Estilo da Borda dos Cards', 'torcisao'),
        'section'  => 'torcisao_box_styles',
        'type'     => 'select',
        'choices'  => array(
            'none'   => 'Sem borda',
            'solid'  => 'Sólida',
            'dashed' => 'Tracejada',
            'dotted' => 'Pontilhada',
        ),
    ));
    
    // Cor da Borda dos Cards
    $wp_customize->add_setting('torcisao_card_border_color', array(
        'default'           => '#E7E5E3',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_card_border_color', array(
        'label'    => __('Cor da Borda dos Cards', 'torcisao'),
        'section'  => 'torcisao_box_styles',
    )));
    
    // Cor de Fundo dos Cards
    $wp_customize->add_setting('torcisao_card_bg_color', array(
        'default'           => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'torcisao_card_bg_color', array(
        'label'    => __('Cor de Fundo dos Cards', 'torcisao'),
        'section'  => 'torcisao_box_styles',
    )));
    
    // Padding dos Cards
    $wp_customize->add_setting('torcisao_card_padding', array(
        'default'           => '20',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('torcisao_card_padding', array(
        'label'    => __('Espaçamento Interno dos Cards (px)', 'torcisao'),
        'section'  => 'torcisao_box_styles',
        'type'     => 'number',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 50,
            'step' => 5,
        ),
    ));
}
add_action('customize_register', 'torcisao_customize_register');

// Output das cores personalizadas no CSS
function torcisao_customizer_css() {
    // Cores
    $primary_color = get_theme_mod('torcisao_primary_color', '#F47C38');
    $secondary_color = get_theme_mod('torcisao_secondary_color', '#2C292A');
    $background_color = get_theme_mod('torcisao_background_color', '#E7E5E3');
    $text_color = get_theme_mod('torcisao_text_color', '#2C292A');
    
    // Imagens e Vídeos
    $banner_image = get_theme_mod('torcisao_banner_image', '');
    $banner_video = get_theme_mod('torcisao_banner_video', '');
    
    // Tipografia
    $font_family = get_theme_mod('torcisao_font_family', 'Montserrat');
    $font_size_base = get_theme_mod('torcisao_font_size_base', 16);
    $font_size_h1 = get_theme_mod('torcisao_font_size_h1', 48);
    $banner_text_align = get_theme_mod('torcisao_banner_text_align', 'left');
    
    // Cores das Seções
    $banner_bg_color = get_theme_mod('torcisao_banner_bg_color', '');
    $produtos_bg_color = get_theme_mod('torcisao_produtos_bg_color', '#E7E5E3');
    $quemsomos_bg_color = get_theme_mod('torcisao_quemsomos_bg_color', '#FFFFFF');
    $form_bg_color = get_theme_mod('torcisao_form_bg_color', '#2C292A');
    $footer_bg_color = get_theme_mod('torcisao_footer_bg_color', '#2C292A');
    
    // Efeitos
    $enable_animations = get_theme_mod('torcisao_enable_animations', true);
    $card_hover_effect = get_theme_mod('torcisao_card_hover_effect', 'lift');
    $card_shadow = get_theme_mod('torcisao_card_shadow', 'medium');
    
    // Estilos de Caixas
    $border_radius = get_theme_mod('torcisao_border_radius', 10);
    $card_border_style = get_theme_mod('torcisao_card_border_style', 'none');
    $card_border_color = get_theme_mod('torcisao_card_border_color', '#E7E5E3');
    $card_bg_color = get_theme_mod('torcisao_card_bg_color', '#FFFFFF');
    $card_padding = get_theme_mod('torcisao_card_padding', 20);
    
    // Sombras
    $shadow_values = array(
        'none'   => 'none',
        'light'  => '0 2px 8px rgba(0, 0, 0, 0.05)',
        'medium' => '0 4px 12px rgba(0, 0, 0, 0.08)',
        'heavy'  => '0 8px 24px rgba(0, 0, 0, 0.15)',
    );
    $box_shadow = isset($shadow_values[$card_shadow]) ? $shadow_values[$card_shadow] : $shadow_values['medium'];
    ?>
    <style type="text/css">
        /* ===== VARIÁVEIS CSS ===== */
        :root {
            --cor-primaria: <?php echo esc_attr($primary_color); ?>;
            --cor-secundaria: <?php echo esc_attr($secondary_color); ?>;
            --cor-de-fundo: <?php echo esc_attr($background_color); ?>;
            --cor-texto: <?php echo esc_attr($text_color); ?>;
            --font-family: '<?php echo esc_attr($font_family); ?>', sans-serif;
            --border-radius: <?php echo esc_attr($border_radius); ?>px;
        }
        
        /* ===== TIPOGRAFIA ===== */
        body {
            background-color: <?php echo esc_attr($background_color); ?>;
            color: <?php echo esc_attr($text_color); ?>;
            font-family: '<?php echo esc_attr($font_family); ?>', sans-serif;
            font-size: <?php echo esc_attr($font_size_base); ?>px;
        }
        
        h1, .banner-1-title {
            font-size: <?php echo esc_attr($font_size_h1); ?>px !important;
        }
        
        /* ===== BANNER PRINCIPAL ===== */
        .banner-1-content {
            text-align: <?php echo esc_attr($banner_text_align); ?> !important;
        }
        
        <?php if ($banner_bg_color) : ?>
        .banner-1-section::before {
            background-color: <?php echo esc_attr($banner_bg_color); ?> !important;
        }
        <?php endif; ?>
        
        <?php if ($banner_image) : ?>
        .banner-1-section {
            background-image: url(<?php echo esc_url($banner_image); ?>) !important;
        }
        .banner-1-section::after {
            background-image: url(<?php echo esc_url($banner_image); ?>) !important;
        }
        <?php endif; ?>
        
        /* ===== CORES DAS SEÇÕES ===== */
        .produtos-section, #secao-produtos {
            background-color: <?php echo esc_attr($produtos_bg_color); ?> !important;
        }
        
        .secao-quem-somos, #quem-somos-section {
            background-color: <?php echo esc_attr($quemsomos_bg_color); ?> !important;
        }
        
        .form-section, #formulario-orcamento {
            background-color: <?php echo esc_attr($form_bg_color); ?> !important;
        }
        
        footer, .footer-section {
            background-color: <?php echo esc_attr($footer_bg_color); ?> !important;
        }
        
        /* ===== ESTILOS DOS CARDS ===== */
        .card, .product-card, .destaque-card-barras, .destaque-card-secundario {
            background-color: <?php echo esc_attr($card_bg_color); ?> !important;
            border-radius: <?php echo esc_attr($border_radius); ?>px !important;
            padding: <?php echo esc_attr($card_padding); ?>px !important;
            box-shadow: <?php echo $box_shadow; ?> !important;
            <?php if ($card_border_style !== 'none') : ?>
            border: 2px <?php echo esc_attr($card_border_style); ?> <?php echo esc_attr($card_border_color); ?> !important;
            <?php endif; ?>
        }
        
        /* ===== EFEITOS HOVER ===== */
        <?php if ($enable_animations) : ?>
            <?php if ($card_hover_effect === 'lift') : ?>
            .card:hover, .product-card:hover, .destaque-card-barras:hover {
                transform: translateY(-5px);
                transition: all 0.3s ease;
            }
            <?php elseif ($card_hover_effect === 'scale') : ?>
            .card:hover, .product-card:hover, .destaque-card-barras:hover {
                transform: scale(1.05);
                transition: all 0.3s ease;
            }
            <?php elseif ($card_hover_effect === 'glow') : ?>
            .card:hover, .product-card:hover, .destaque-card-barras:hover {
                box-shadow: 0 0 20px <?php echo esc_attr($primary_color); ?>;
                transition: all 0.3s ease;
            }
            <?php endif; ?>
        <?php else : ?>
        .card:hover, .product-card:hover, .destaque-card-barras:hover {
            transform: none !important;
        }
        <?php endif; ?>
        
        /* ===== BOTÕES PRIMÁRIOS ===== */
        .btn-primary, .button-primary, .btn-torcisao-laranja, .container__botao-cotacao {
            background-color: <?php echo esc_attr($primary_color); ?> !important;
            border-radius: <?php echo esc_attr($border_radius); ?>px !important;
        }
        
        /* ===== LINKS HOVER ===== */
        a:hover {
            color: <?php echo esc_attr($primary_color); ?>;
        }
        
        /* ===== BORDAS PERSONALIZADAS ===== */
        .border-radius-especial, .product-header-img {
            border-radius: <?php echo esc_attr($border_radius); ?>px !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'torcisao_customizer_css');

// Adicionar favicon personalizado
function torcisao_custom_favicon() {
    $favicon = get_theme_mod('torcisao_favicon', '');
    if ($favicon) {
        echo '<link rel="icon" type="image/png" href="' . esc_url($favicon) . '">' . "\n";
    }
}
add_action('wp_head', 'torcisao_custom_favicon');

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
