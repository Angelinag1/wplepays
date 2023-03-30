<?php get_header(); ?>
<!-- PAGE DE RECHERCHE -->
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if ( have_posts() ) : ?>
        <h1>Résultats de recherche pour : <?php echo get_search_query(); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="card mb-4">
          <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url( 'blog-medium' );?>" alt="<?php the_title( );?>" class="img-fluid mb-3 img-thumbnail">
                <?php endif;?>
            <div class="card-body">
              <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
        <?php the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __( '« Précédent', 'textdomain' ),
          'next_text' => __( 'Suivant »', 'textdomain' ),
        ) ); ?>
      <?php else : ?>
        <p>Aucun résultat ne correspond à votre recherche.</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
