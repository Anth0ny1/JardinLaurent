<?php /*Template Name: Portfolio */ ?>

<?php get_header(); ?>
<!-- Template Portfolio -->
<?php   $args = array(
    'post_type' => 'portfolio',
    'post-status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
  );

  $the_query = new WP_Query( $args );
?>
<div class="portfolioContainer spaceAround">

  <?php
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();

        $img_id = get_post_thumbnail_id(get_the_ID());
        $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
  ?>

  <div class="photoPortfolio">
      <?php the_post_thumbnail('portfolio', array('alt' => $alt_text, 'title' => get_the_title() )); ?>
      <div class="container">
        <h2 class="titreImagePortfolio alegreya"><?php echo get_the_title() ?></h2>
      </div>
  </div>



  <?php
  }
  wp_reset_postdata();
  } else {
    // no posts found
  }
  ?>

</div>


<?php get_footer(); ?>
