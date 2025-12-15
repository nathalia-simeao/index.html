<?php
/**
 * Template Name: Produto - Barras BTC
 *
 * @package Torcisao_Trefilados
 */

get_header();
?>

<main>
    <div class="container product-page-header pt-4 pb-1 text-center">
        <h1 class="product-main-title fw-bold mb-4">
            Barras Trefiladas - Baixo Teor de Carbono - 1006 a 1020 
        </h1>
        <!-- Product image carousel -->
        <div id="carousel-barrabtc" class="carousel slide product-carousel mb-3" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-barrabtc" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-barrabtc" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-barrabtc" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-barrabtc" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/barra4.jpg" class="d-block w-100" alt="Barras Trefiladas - Imagem 1">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/barra3.jpg" class="d-block w-100" alt="Barras Trefiladas - Imagem 2">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/barra2.webp" class="d-block w-100" alt="Barras Trefiladas - Imagem 3">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/barra1.jpg" class="d-block w-100" alt="Barras Trefiladas - Imagem 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-barrabtc" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-barrabtc" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>

    <section class="product-info-cards container mt-3 mb-5">
        <div class="row">
            
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 p-3 p-md-4 destaque-card-barras">
                    <h3 class="card-title h5">Características</h3>
                    <p class="card-text small">
                        A barra trefilada se caracterizada por sua alta precisão dimensional, superfície lisa e acabamento superior, obtidos através de um processo a frio que melhora suas propriedades mecânicas, como resistência à tração, escoamento e dureza. Essa combinação de características a torna ideal para aplicações que exigem tolerâncias mais justas e um alto padrão de qualidade. 
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 p-3 p-md-4 destaque-card-barras">
                    <h3 class="card-title h5">Aplicabilidade</h3>
                    <p class="card-text small">
                        <strong>Sua aplicação é vasta, abrangendo:</strong> Fixadores, Autopeças, Cesto Metálico, Rack Metálico, Molas Helicoidais, Amortecedores e outros.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 p-3 p-md-4 destaque-card-barras">
                    <h3 class="card-title h5">Segmento</h3>
                    <p class="card-text small">
                        <ul>
                            <li>Máquina e Equipamentos</li>
                            <li>Construção Civil</li>
                            <li>Estruturas Metálicas</li>
                            <li>Ferramentas Manuais</li>
                            <li>Eletrodomésticos</li>
                            <li>Quatro Rodas</li>
                            <li>Duas Rodas</li>
                            <li>Pesados</li>
                            <li>Náutica</li>
                            <li>Linha Branca</li>
                            <li>Móveis</li>
                            <li>Vazador</li>
                            <li>Bombas</li>
                            <li>Motores Elétricos</li>
                        </ul>
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 p-3 p-md-4 destaque-card-barras">
                    <h3 class="card-title h5">Especificações</h3>
                    <p class="card-text small">
                        <ul>
                            <li><strong>Bitola/Diâmetro</strong>: De 2,00mm até 15,88mm</li>
                            <li><strong>Tolerância</strong>: Sob consulta</li>
                            <li><strong>Acondicionamento</strong>: Feixes Embalados</li>
                            <li><strong>Perfil</strong>: Redondo.</li>
                            <li><strong>Acabamento</strong>: Trefilado ou trefilado polido.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resto do conteúdo da página -->
    <div class="container my-5">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
