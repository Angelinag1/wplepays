<?php get_header();?>


<div class="container pt-5 pb-5">

<div class="row">
    <div class="col-md-6">
    <i class="fa-solid fa-arrow-left-long"></i><?php previous_post_link('%link', 'Page précédent'); ?>
    </div>
    <div class="col-md-6 text-right">
        <?php next_post_link('%link', 'Page suivant'); ?>
    </div>
</div>

    <?php if(has_post_thumbnail(  )):?>
    <img src="<?php the_post_thumbnail_url(  );?>" alt="<?php the_title();?>">
 <?php endif;?>
    <h1><?php the_title( );?></h1>


<?php if (have_posts(  )) : while (have_posts(  )):the_post(  );?>
    
<?php the_content(  );?>

<?php endwhile; endif;?>

</div>
<?php get_footer();?>
