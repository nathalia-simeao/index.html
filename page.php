<?php
/**
 * Template for displaying pages
 *
 * @package Torcisao_Trefilados
 */

get_header();
?>

<main>
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="container" style="margin-top: 120px; padding: 40px 0;">
                <h1><?php the_title(); ?></h1>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
