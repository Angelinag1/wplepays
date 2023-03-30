<?php get_header();?>

<div class="container pt-5 pb-5">

    <h1><?php the_title(  );?></h1>
    <?php if (have_posts(  )) : while (have_posts(  )):the_post(  );?>

    <?php the_content(  );?>

<?php endwhile; endif;?>
    <div class="jumbotron" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_posts()[0]->ID); ?>');background-repeat: no-repeat; background-size:cover">
  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 1,
      'orderby' => 'date',
      'order' => 'DESC'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
       <div class="p-4">

       <h1><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>
        <a class="btn btn-success" href="<?php the_permalink(); ?>" role="button">Lire la suite</a>
       
       </div>

      <?php }
      wp_reset_postdata();
    }
  ?>
</div>


        <hr>

        <div class="row h-50">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="col-md-4">
                <div class="card">
                    <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                    <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-success">Lire la suite</a>
                    </div>
                </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
            </div>

</div>
    

<?php get_footer();?>