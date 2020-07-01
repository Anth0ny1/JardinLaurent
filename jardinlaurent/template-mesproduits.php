<?php /*Template Name: Mes produits */ ?>
<?php get_header(); ?>
<!-- Template Mes produits -->

<?php   $args = array(
    'post_type' => 'produit',
    'post-status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
  );

  $the_query = new WP_Query( $args );
?>
<div class="produitsContainerFull">

<?php
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();

  $img_id = get_post_thumbnail_id(get_the_ID());
  $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
?>
<div class="produitsContainerSingle">
  <!-- <h2>Produit n°1</h2> -->
  <h2 class="josefin"><?php echo get_the_title() ?></h2>
    <?php the_post_thumbnail('portfolio', array('alt' => $alt_text, 'title' => get_the_title() )); ?>

    <!-- <img src="https://dummyimage.com/300x300/000/fff" alt=""> -->

    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" title="Contact" class="contactProduit">Prendre contact</a>
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
