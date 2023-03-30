<?php
/*
Template Name: Carousel
*/
?>
<?php get_header(); ?>

<script type="text/javascript">
 jQuery(function() { 
 jQuery("#foo1").carouFredSel({
 items : 3,
 scroll : {
 items : 1,
 duration : 1000,
 pauseDuration : 2000
 },
 auto : false,
 prev : "#foo1_prev",
 next : "#foo1_next"
 }).parent().css("margin", "auto"); 
 });
 </script>

<div class="list_carousel"> 

<a id="foo1_prev" href="#"><span>Précédent</span></a>
<a id="foo1_next" href="#"><span>Suivant</span></a>
<ul id="foo1">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post->ID
  );

  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           echo '<li>';
           echo wp_get_attachment_image( $attachment->ID, 'thumbnail' );
           echo '<p>';
           echo apply_filters( 'the_title', $attachment->post_title );
           echo '</p></li>';
          }
     }

 endwhile; endif; ?>
</ul>

</div>
<?php get_template_part('carousel')?>
<?php get_footer(); ?>