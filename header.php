<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-bs-theme="light">
<header class="container">
    <nav class="navbar-expand-lg navbar bg-body-tertiary fixed-top">
      <div class="container-fluidnav">
        <a class="container__navbar-imagem" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/lgcabecalhoescura220.png" alt="Logo da Torcisão Trefilados"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="<?php echo get_template_directory_uri(); ?>/assets/lgcabecalhoescura220.png" alt="Logo da Torcisão Trefilados"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>#quem-somos-section">Quem Somos</a>
              </li>
             <li class="nav-item dropdown has-submenu"> 
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                
                <ul class="dropdown-menu">
                    
                    <li class="nav-item dropend has-submenu-2">
                        <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Barras Trefiladas
                        </a>
                        
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo home_url('/barrabtc'); ?>">BTC - Baixo Teor de Carbono</a></li>
                            <li><a class="dropdown-item" href="<?php echo home_url('/barramtc'); ?>">MTC - Médio Teor de Carbono</a></li>
                            <li><a class="dropdown-item" href="<?php echo home_url('/barraatc'); ?>">ATC - Alto Teor de Carbono</a></li>
                            <li><a class="dropdown-item" href="<?php echo home_url('/barraacoressulfurado'); ?>">Aço Ressulfurado</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropend has-submenu-2">
                        <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Arames Trefilados
                        </a>
                        
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo home_url('/aramebtc'); ?>">BTC - Baixo Teor de Carbono</a></li>
                            <li><a class="dropdown-item" href="<?php echo home_url('/aramemtc'); ?>">MTC - Médio Teor de Carbono</a></li>
                            <li><a class="dropdown-item" href="<?php echo home_url('/arameatc'); ?>">ATC - Alto Teor de Carbono</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropend has-submenu-2">
                        <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Haste de Aterramento
                        </a>
                        
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo home_url('/hastebc'); ?>">Baixa Camada</a></li>
                            <li><a class="dropdown-item" href="<?php echo home_url('/hasteac'); ?>">Alta Camada</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url('/blog'); ?>">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="modo-noturno">
                    <label class="form-check-label" for="modo-noturno">Modo noturno</label>
                  </div></a>
              </li>
            </ul>
            <a href="#formulario-orcamento" class="container__botao-cotacao">Fale com o consultor</a>
          </div>
        </div>
      </div>
    </nav>
</header>
