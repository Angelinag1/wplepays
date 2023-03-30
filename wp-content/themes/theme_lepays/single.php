<?php get_header();?>

<div class="container pt-5 pb-5">
    <?php if(has_post_thumbnail(  )):?>
    <img src="<?php the_post_thumbnail_url(  );?>" alt="<?php the_title();?>">
 <?php endif;?>
    <h1><?php the_title( );?></h1>


<?php if (have_posts(  )) : while (have_posts(  )):the_post(  );?>

<p><?php echo get_the_date( 'd/m/Y');?></p>

    <?php the_content(  );?>

<?php endwhile; endif;?>
<div class="row">
    <div class="col-md-6">
        <?php previous_post_link('%link', 'Article précédent'); ?>
    </div>
    <div class="col-md-6 text-right">
        <?php next_post_link('%link', 'Article suivant'); ?>
    </div>
</div>

</div>
<?php get_footer();?>