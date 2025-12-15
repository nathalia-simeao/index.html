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
                <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#quem-somos-section">Quem Somos</a>
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
          </div>
        </div>
      </div>
    </nav>
</header>
<main>
    <section class="banner-1-section">
        <div class="banner-1-content">
            <h2 class="banner-1-subtitle">O aço que move o seu projeto começa aqui!</h2>
            <h1 class="banner-1-title">
                Descubra as soluções da <br>
                <span class="banner-1-section-orange">Torcisão Trefilados</span>
            </h1>
            <a href="#formulario-orcamento" class="container__botao-cotacao">Fale com o consultor</a>
        </div>
    </section>

    <section id="secao-produtos" class="produtos-section py-5">
    <h2 class="section-produtos-title"><strong>Conheça os Nossos Produtos</strong></h2>
    
    <div class="product-cards-container">
        
        <div class="product-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/barra1.jpg" alt="Barras Trefiladas" class="product-img">
            <h3 class="product-name">Barras Trefiladas</h3>
            <button 
                class="btn-saiba-mais" 
                data-bs-toggle="modal" 
                data-bs-target="#produtoModal" 
                data-product-key="barras-trefiladas">
                Saiba Mais
            </button>
        </div>

        <div class="product-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/haste1.jpg" alt="Haste de Aterramento" class="product-img">
            <h3 class="product-name">Haste de Aterramento</h3>
            <button 
                class="btn-saiba-mais" 
                data-bs-toggle="modal" 
                data-bs-target="#produtoModal" 
                data-product-key="hastes-aterramento">
                Saiba Mais
            </button>
        </div>

        <div class="product-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/arame1.jpg" alt="Arames Trefilados" class="product-img">
            <h3 class="product-name">Arames Trefilados</h3>
            <button 
                class="btn-saiba-mais" 
                data-bs-toggle="modal" 
                data-bs-target="#produtoModal" 
                data-product-key="arames-trefilados">
                Saiba Mais
            </button>
        </div>
        
    </div>
    
    <a href="#formulario-orcamento" class="btn btn-consultor">Fale com o consultor</a>
    

    <div class="modal fade" id="produtoModal" tabindex="-1" aria-labelledby="produtoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modal-torcisao">
      <div class="modal-header">
        <h5 class="modal-title" id="produtoModalLabel">Detalhes do Produto</h5>
      </div>

      <div class="modal-body">
        <div class="dropdown mb-4">
          <button class="btn btn-secondary dropdown-toggle btn-torcisao-dropdown" 
                  type="button" 
                  id="variationDropdown" 
                  data-bs-toggle="dropdown" 
                  aria-expanded="false">
            Selecione o produto
          </button>
          <ul class="dropdown-menu" id="variationList" aria-labelledby="variationDropdown">
          </ul>
        </div>

        <div class="text-center mb-4">
          <div class="row g-2">
            <div class="col-4">
              <img id="productImage1" src="<?php echo get_template_directory_uri(); ?>/assets/barra1.jpg" class="modal-product-img" alt="Imagem do Produto 1">
            </div>
            <div class="col-4">
              <img id="productImage2" src="<?php echo get_template_directory_uri(); ?>/assets/haste1.jpg" class="modal-product-img" alt="Imagem do Produto 2">
            </div>
            <div class="col-4">
              <img id="productImage3" src="<?php echo get_template_directory_uri(); ?>/assets/arame4.jpg" class="modal-product-img" alt="Imagem do Produto 3">
            </div>
          </div>
        </div>

        <div id="productDescription" class="modal-product-description">
          <p>Selecione uma variação acima para ver a descrição e a imagem.</p>
        </div>
      </div>

      <div class="modal-footer justify-content-center">
        <div class="col-auto" id="btnVerDetalhesContainer">
          <!-- botão agora oculto inicialmente -->
          <a href="#" id="btnVerDetalhes" class="btn btn-especificacoes-laranja btn-sm me-3 hidden-btn">
            Ver Detalhes
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

    <section class="banner-2-social-section">
    <div class="banner-2-social-content container"> 
        <h2 class="banner-2-social-title">
     <span class="banner-2-destaque-orange">A Torcisão está no seu dia a dia</span>
        </h2>
        <p class="banner-2-social-subtitle">O aço que molda o futuro e move o mundo, vai do edifício ao talher</p>
    </div>
    </section>

    <section id="quem-somos-section" class="secao-quem-somos py-5">
    <div class="container">
        
        <div class="row mb-5">
            
            <div class="col-lg-6 quem-somos-intro">
                <p class="subtitulo-quem-somos">QUEM SOMOS</p>
                <h2 class="titulo-quem-somos">Torcisão Trefilados</h2>
                
                <p class="subtitulo-destaque border-start border-3 border-torcisao-laranja ps-3 mt-3 mb-4"><strong>
                    Mais do que fornecer barras, arames e haste de aterramento, a Torcisão Trefilados entrega valorização para o seu projeto.
                </strong></p>
                
                <p class="texto-historia">
                    Com mais de 57 anos de história e um padrão de qualidade inquestionável, transformamos matéria-prima de excelência em soluções de alto prestígio para a indústria, construção civil, mineração e energia.
                </p>
                <p class="texto-historia mb-4">
                    Nossa vasta experiência e rigoroso controle técnico garantem que cada produto Torcisão seja uma oportunidade de elevar a qualidade, durabilidade e o nome da sua empresa.
                </p>
                
                <p class="fw-bold mb-3">Descubra o que a excelência Torcisão pode fazer pelo seu negócio.</p>
            </div>
            
            <div class="col-lg-6 prova-social-container d-flex flex-column justify-content-between pt-lg-0 pt-4">
                <button class="btn btn-social-proof" data-bs-toggle="modal" data-bs-target="#modal-vendas">
                    <span class="numero-prova">+100M</span>
                    <span class="descricao-prova">Toneladas vendidas até 2025</span>
                </button>
                
                <button class="btn btn-social-proof" data-bs-toggle="modal" data-bs-target="#modal-satisfacao">
                    <span class="numero-prova">95%</span>
                    <span class="descricao-prova">Nível de satisfação dos clientes</span>
                </button>

                <button class="btn btn-social-proof" data-bs-toggle="modal" data-bs-target="#modal-clientes">
                    <span class="numero-prova">+11 Mil</span>
                    <span class="descricao-prova">Clientes atendidos</span>
                </button>
            </div>

        </div>
        
        <div class="row mb-3 text-center">
            <div class="col-12 d-flex justify-content-between mb-3">
                <button class="btn btn-mvv" type="button" data-bs-toggle="collapse" data-bs-target="#missao-content">Missão</button>
                <button class="btn btn-mvv" type="button" data-bs-toggle="collapse" data-bs-target="#visao-content">Visão</button>
                <button class="btn btn-mvv" type="button" data-bs-toggle="collapse" data-bs-target="#valores-content">Valores</button>
            </div>

            <div class="col-12">
    
    <div id="mvv-accordion-container"> 

        <button class="btn btn-mvv-toggle" type="button" data-bs-toggle="collapse" 
                data-bs-target="#missao-content" aria-expanded="true" 
                aria-controls="missao-content">
        </button>
        
        <div class="collapse mt-2 show" id="missao-content"
             data-bs-parent="#mvv-accordion-container"> <div class="card card-body card-mvv">
                <strong>Missão</strong> Trabalhando com a filosofia de melhorar continuamente processos internos e externos em produtos conforme especificações dos clientes e fornecedores das exigências de tempo, prazo, custo e qualidade, proporcionando assim maior satisfação aos clientes, para os acionistas, para os colaboradores e para os clientes. Pesquisar no mercado em conformidade com as normas e especificações dos clientes para a legislação aplicável a empresa e a documentação pertinente e, presteativamente com qualidade, prazo e preços competitivos.
            </div>
        </div>

        <button class="btn btn-mvv-toggle" type="button" data-bs-toggle="collapse" 
                data-bs-target="#visao-content" aria-expanded="false" 
                aria-controls="visao-content">
        </button>
        
        <div class="collapse mt-2" id="visao-content"
             data-bs-parent="#mvv-accordion-container"> <div class="card card-body card-mvv">
                <strong>Visão</strong> Ser uma indústria metalúrgica sólida e admirada, que atua com foco em crescimento sustentável, valorizando a satisfação dos clientes, colaboradores e fornecedores.
            </div>
        </div>

        <button class="btn btn-mvv-toggle" type="button" data-bs-toggle="collapse" 
                data-bs-target="#valores-content" aria-expanded="false" 
                aria-controls="valores-content">
        </button>
        
        <div class="collapse mt-2" id="valores-content"
             data-bs-parent="#mvv-accordion-container"> <div class="card card-body card-mvv">
                <strong>Valores</strong>Ética, Confiança, Transparência, Seriedade, Humildade, Conscientização sobre o Meio Ambiente e Valorização Social.
            </div>
        </div>

    </div>
</div>
        
        <div class="row text-center mb-4">
            <h3 class="titulo-historia">Nosso crescimento conta a nossa história</h3>
            <p class="subtitulo-historia-light">
                Nossa história é traduzida através de cinco décadas de muito trabalho, dedicação e foco no cliente. Fomentando parcerias longevas e duradouras.
            </p>
        </div>

        <div class="row justify-content-center">
        <div class="col-12 d-flex timeline-container">
        
        <button class="btn btn-timeline-year btn-first-year timeline-highlight" data-has-crown="true"
        data-bs-toggle="modal" data-bs-target="#modal-ano-1968" id="btn-coroa-1968">
        <img
        src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
        alt="Ícone Coroa"
        class="timeline-coroa-icon"
        data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
        data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg"
        draggable="false"
        >
        1968
        </button>

        <button class="btn btn-timeline-year" data-has-crown="false" data-bs-toggle="modal" data-bs-target="#modal-ano-1975">1975</button>
        <button class="btn btn-timeline-year" data-has-crown="false" data-bs-toggle="modal" data-bs-target="#modal-ano-1978">1978</button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-1999" id="btn-coroa-1999" data-has-crown="true">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg" 
                alt="Ícone Coroa" 
                class="timeline-coroa-icon"
                data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
                data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg" 
            >
            1999
        </button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2005" id="btn-coroa-2005" data-has-crown="true">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg" 
                alt="Ícone Coroa" 
                class="timeline-coroa-icon"
                data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
                data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg" 
            >
            2005
        </button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2006">2006</button>
        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2011">2011</button>
        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2013">2013</button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2014" id="btn-coroa-2014" data-has-crown="true">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg" 
                alt="Ícone Coroa" 
                class="timeline-coroa-icon"
                data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
                data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg" 
            >
            2014
        </button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2015">2015</button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2016" id="btn-coroa-2016" data-has-crown="true">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg" 
                alt="Ícone Coroa" 
                class="timeline-coroa-icon"
                data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
                data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg" 
            >
            2016
        </button>

        <button class="btn btn-timeline-year" data-has-crown="true" data-bs-toggle="modal" data-bs-target="#modal-ano-2017" id="btn-coroa-2017">
        <img
        src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
        alt="Ícone Coroa"
        class="timeline-coroa-icon"
        data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
        data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg"
        draggable="false"
        >
        2017
       </button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2019">2019</button>

        <button class="btn btn-timeline-year" data-bs-toggle="modal" data-bs-target="#modal-ano-2022" id="btn-coroa-2022" data-has-crown="true">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg" 
                alt="Ícone Coroa" 
                class="timeline-coroa-icon"
                data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
                data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg" 
            >
            2022
        </button>
    
        <button class="btn btn-timeline-year btn-last-year" data-has-crown="true" data-bs-toggle="modal" data-bs-target="#modal-ano-2024" id="btn-coroa-2024">
        <img
        src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
        alt="Ícone Coroa"
        class="timeline-coroa-icon"
        data-original-src="<?php echo get_template_directory_uri(); ?>/assets/coroa.svg"
        data-hover-src="<?php echo get_template_directory_uri(); ?>/assets/coroacinza.svg"
        draggable="false"
        >
        2024
        </button>
    </div>
</div>

    </div>

    <style>
    .btn-timeline-year {
        position: relative;
        padding-top: 24px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .timeline-coroa-icon {
        position: absolute;
        top: 6px;
        left: 50%;
        transform: translateX(-50%);
        width: 18px;
        height: 18px;
        object-fit: contain;
        pointer-events: none;
        display: block;
        opacity: 1;
        transition: transform .12s ease, opacity .12s ease;
    }

    .btn-timeline-year:focus .timeline-coroa-icon,
    .btn-timeline-year:hover .timeline-coroa-icon {
        transform: translateX(-50%) translateY(-2px);
        opacity: 0.95;
    }
</style>
    </section>

    <section class="form-section py-5" id="formulario-orcamento">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center order-2 order-lg-0">
                <div class="form-wrapper p-4 p-md-5 rounded-4 bg-white shadow-lg">
                    <h2 class="form-title mb-4">
                        Solicite agora o seu <br> orçamento personalizado
                    </h2>
                    
                    <form action="#" method="POST">
                        
                        <div class="mb-3">
                            <label for="form-nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="form-nome" required>
                        </div>

                        <div class="mb-3">
                            <label for="form-email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="form-email" required>
                        </div>

                        <div class="mb-3">
                            <label for="form-telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="form-telefone" required>
                        </div>
                        
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="politica-privacidade" required>
                            <label class="form-check-label small" for="politica-privacidade">
                                Eu li e aceito a <a href="<?php echo home_url('/politicadeprivacidade.html'); ?>" class="politica-link">Política de Privacidade</a> e concordo com o tratamento dos meus dados para as finalidades descritas.
                            </label>
                        </div>

                        <button type="submit" class="btn-torcisao-form w-100 p-2">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-6 d-flex align-items-center form-destaque-bg order-1 order-lg-0">
                <div class="p-4 p-md-5 text-center text-white">
                    <h3 class="destaque-text">
                        Se é Torcisão, é garantia de durabilidade, segurança e o melhor custo-benefício do mercado.
                    </h3>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="iso-section">
    <a href="https://drive.google.com/file/d/1csvp6XcIvffw2O-F7MXWyL6QPB9ZD-St/view?usp=drive_link" 
       class="iso-banner-wrapper" 
       target="_blank" 
       title="Clique para visualizar o Certificado ISO 9001:2015">
        <p>
            Acesse aqui o nosso certificado de ISO 9001 - 2015
        </p>
    </a>
    </section>
</main>
  
<footer class="main-footer py-5">
    <div class="container">
        
        <div class="row justify-content-center"> 
            
            <div class="col-12 col-lg-10">
                
                <div class="row" style="margin-bottom: 2rem;">
                    <div class="col-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/lgcabecalhoclara220.png" alt="Torcisão Trefilados" style="width: 160px; margin: 0;">
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        
                        <h4 class="footer-column-title-first">Institucional</h4>
                        <ul class="list-unstyled"> <li><a href="<?php echo home_url('/politicadequalidade.html'); ?>">Política de Qualidade</a></li>
                            <li><a href="<?php echo home_url('/politicadeprivacidade.html'); ?>">Política de Privacidade</a></li>
                            <li><a href="<?php echo home_url('/politicadecookies.html'); ?>">Política de Cookies</a></li>
                            <li><a href="<?php echo home_url(); ?>">Início</a></li>
                            <li><a href="#secao-produtos">Produtos</a></li>
                            <li><a href="<?php echo home_url('/blog.html'); ?>">Blog</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        
                        <h4 class="footer-column-title-first">Contatos</h4>
                        <p class="d-flex flex-column mb-4">
                            <a class="contato-link d-flex align-items-center" href="mailto:vendas@torcisao.com.br">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/email.png" alt="Email" class="footer-icon me-2" style="width: 20px;"> 
                                vendas@torcisao.com.br
                            </a>
                            <a class="contato-link d-flex align-items-center mt-2" href="tel:+551123349989">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/telefone.png" alt="Telefone" class="footer-icon me-2" style="width: 20px;"> 
                                (11) 2334-9989
                            </a>
                        </p>
                        
                        <h4>Onde Estamos</h4>
                        <address class="mb-0" style="font-style: normal;">
                            <a 
                                href="https://www.google.com/maps/search/?api=1&query=Rua+Francisco+Pedroso+de                    +Toledo,+138,+Vila+Livieiro,+São+Paulo/SP,+04185-150"
                                target="_blank" 
                                class="contato-link" 
                                style="display: block; text-decoration: none;"
                            >
                                Rua Francisco Pedroso de Toledo, 138<br>
                                Vila Livieiro - São Paulo/SP<br>
                                CEP: 04185-150
                            </a>
                        </address>
                    </div>

                    <div class="col-12 col-md-4 mb-4">
                        
                        <h4 class="footer-column-title-first">Formas de Pagamento</h4>
                        <div class="formas-pagamento-icons d-flex flex-wrap gap-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/visa.png" alt="Visa" style="width: 50px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mastercard.png" alt="Mastercard" style="width: 50px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/elo.png" alt="Elo" style="width: 50px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/boleto.png" alt="Boleto" style="width: 50px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pix.png" alt="Pix" style="width: 50px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/BNDS.png" alt="BNDS" style="width: 50px;">
                        </div>

                        <h4 class="mt-4">Redes Sociais</h4>
                        <div class="social-icons d-flex flex-wrap gap-3 mb-4">
                            <a href="https://www.instagram.com/torcisaotrefilados/" target="_blank" aria-label="Instagram">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="Instagram" class="social-icon" style="width: 35px;">
                            </a>
        
                            <a href="https://web.facebook.com/profile.php?id=61584578055637" target="_blank" aria-label="Facebook">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="Facebook" class="social-icon" style="width: 35px;">
                            </a>
        
                            <a href="https://www.linkedin.com/company/torcis%C3%A3o-trefilados/about/" target="_blank" aria-label="LinkedIn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="LinkedIn" class="social-icon" style="width: 35px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    <div class="post-footer">
    <div class="container d-flex justify-content-between flex-column flex-md-row align-items-center">
        <p class="mb-2 mb-md-0 d-flex align-items-center">
            Somos associados da <img src="<?php echo get_template_directory_uri(); ?>/assets/ciesp.png" alt="Logo CIESP" class="ciesp-logo ms-2" style="max-width: 120px;">
        </p>
        <p class="mb-0">Torcisão Copyright 2025 - Todos os direitos Reservados</p>
    </div>
    </div>

<!-- Modais omitidos para brevidade - mantenha todos os modais do arquivo original aqui -->

<?php wp_footer(); ?>
</body>
</html>
