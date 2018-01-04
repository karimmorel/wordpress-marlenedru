


<?php
/**
 * Template Name: Idée cadeaux page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bakes And Cakes
 */

get_header();

?>
<section class="special" id="events" 
>
<div class="container">
    <header class="header">
        <h1 class="main-title">Découvrez les coffrets</h1>
    </header>
    <div class="row">
        <div class="columns-12">

            <?php
            if ( get_query_var('paged') ) $paged = get_query_var('paged');
            if ( get_query_var('page') ) $paged = get_query_var('page');

            $query = new WP_Query( array( 'post_type' => 'coffret', 'paged' => $paged ) );

            if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="special-post">
                    <div class="img-holder">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text-holder">
                        <h3 class="title"><a href="<?php the_field('lien_coffret'); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- show pagination here -->
        <?php else : ?>
            <!-- show 404 error here -->
        <?php endif; ?>
    </div>
</div>
</div>            
</section>






<section class="featured" id="product">
    <header class="header"><h1 class="main-title">Besoin d'une idée cadeau ?</h1><p>Retrouvez des apéritifs et sirops artisanaux en ligne.</p>
    </header>           <ul class="featured-slider">
        <?php
        if ( get_query_var('paged') ) $paged = get_query_var('paged');
        if ( get_query_var('page') ) $paged = get_query_var('page');

        $query = new WP_Query( array( 'post_type' => 'produit', 'paged' => $paged ) );

        if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <li>
                <div class="img-holder">
                    <a href="<?php the_field('lien_produit') ?>">
                       <img width="235" height="235" src="<?php the_field('image_produit') ?>" class="attachment-bakes-and-cakes-product-thumb size-bakes-and-cakes-product-thumb wp-post-image" sizes="(max-width: 235px) 100vw, 235px" />                       </a>
                   </div>
                   <div class="text-holder">
                    <a href="<?php the_field('lien_produit') ?>"><strong class="name"><?php the_title() ?><br/><br/><?php the_field('prix_produit');?> &#8364;</strong></a>                        
                </div>
            </li>
        <?php endwhile; wp_reset_postdata(); ?>
        <!-- show pagination here -->
    <?php else : ?>
        <!-- show 404 error here -->
    <?php endif; ?>
</ul>
</section>



<?php 

get_footer();

?>
