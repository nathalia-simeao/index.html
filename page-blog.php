<?php
/**
 * Template Name: Blog
 *
 * @package Torcisao_Trefilados
 */

get_header();
?>

<main>
    <section class="blog-hero">
        <div class="blog-container-hero"> 
            <h1 class="display-4 fw-bold blog-title text-center">Blog Torcisão - Inovação e Qualidade</h1>
            
            <p class="blog-subtitle text-muted text-center">Acompanhe as últimas tendências e novidades do setor.</p> 
            
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar por palavra-chave..." aria-label="Buscar" id="blog-search-input">
                        <button class="btn btn-torcisao-laranja" type="button">Buscar</button> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-content py-4">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <h2 class="fw-bold blog-title mb-4">Artigos Mais Recentes</h2> 
                    
                    <?php
                    // Query para posts
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    
                    $blog_query = new WP_Query($args);
                    
                    if ($blog_query->have_posts()) :
                        $first_post = true;
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                            if ($first_post) :
                                $first_post = false;
                    ?>
                    
                    <article class="card post-card shadow-sm border-0 mb-5 post-destaque">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'card-img-top blog-post-image rounded-top')); ?>
                        <?php endif; ?>
                        <div class="card-body">
                            <span class="badge badge-qualidade">QUALIDADE</span>
                            <h3 class="card-title fw-bold post-title mt-2"><?php the_title(); ?></h3>
                            <p class="card-text text-muted small post-meta">Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
                            <p class="card-text post-summary"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-torcisao-laranja">Leia o Artigo Completo</a>
                        </div>
                    </article>
                    
                    <?php else : ?>
                    
                    <article class="card post-card border-0 mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid rounded-start post-thumbnail')); ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body py-3">
                                    <span class="badge bg-info">ARTIGO</span>
                                    <h3 class="card-title post-title"><?php the_title(); ?></h3>
                                    <p class="card-text text-muted small post-meta">Publicado em <?php echo get_the_date(); ?></p>
                                    <p class="card-text post-summary-compact"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-link link-torcisao p-0">Continuar Lendo &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <?php 
                            endif;
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p>Nenhum artigo encontrado. Em breve teremos novidades!</p>
                    <?php endif; ?>
                    
                </div>
                
                <!-- Sidebar -->
                <aside class="col-lg-4">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h4 class="fw-bold blog-sidebar-title">Categorias</h4>
                            <ul class="list-unstyled">
                                <?php
                                $categories = get_categories();
                                foreach ($categories as $category) :
                                ?>
                                <li class="mb-2">
                                    <a href="<?php echo get_category_link($category->term_id); ?>" class="link-torcisao">
                                        <?php echo $category->name; ?> (<?php echo $category->count; ?>)
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
