<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jardinlaurent
 */
 $image_id = get_field('logo', 6);
 $taille_image = 'logo';
?>

	</div><!-- #content -->
<!-- FOOTER DESSOUS -->
	<footer id="colophon" class="site-footer spaceAround">
		<div class="wrap">

		<div class="logoFooter">
			<a href=""><?php echo wp_get_attachment_image($image_id, $taille_image);?></a>
		</div>

<div class="containerFooter">

	<div class="contactFooter">
		<h2 class="alegreya">Contactez nous</h2>
			<p>Par tél : 02 33 33 33 33</p>
			<p>Par mail : contact@email.com</p>
			<p>Directement chez moi : 10 rue rrrr rrrr</p>
	</div>

	<div class="navFooter">
		<ul>
			<li class="first"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Accueil">Accueil</a></li>
			<li><a href="<?php echo esc_url( home_url( '/mes-produits' ) ); ?>" title="Mes produits">Mes produits</a></li>
			<li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" title="Portfolio">Portfolio</a></li>
			<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" title="Contact">Contact</a></li>
		</ul>
	</div>

</div>

	<div class="mapsFooter">
		<h2 class="alegreya">Où me trouver ?</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2589.505735999575!2d-1.7685234839166406!3d49.531606279359174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480c92becd2c26d1%3A0x3d7027c6988e8004!2s28+Route+de+Couville%2C+50340+Beno%C3%AEtville!5e0!3m2!1sfr!2sfr!4v1517449692885" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>


		<div class="portfolioFooter">
			<h2 class="alegreya">Mes dernières réalisations</h2>
			<?php   $args = array(
			    'post_type' => 'portfolio',
			    'post-status' => 'publish',
			    'posts_per_page' => 10,
			    'orderby' => 'date',
			    'order' => 'DESC',
			  );

			  $the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
			  while ( $the_query->have_posts() ) {
			    $the_query->the_post();

			      $img_id = get_post_thumbnail_id(get_the_ID());
			      $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
			?>

			    <a href="<?php get_the_permalink() ?>" class="miniFooter"><?php the_post_thumbnail('miniFooter', array('alt' => $alt_text, 'title' => get_the_title() )); ?></a>

			<?php
			}
			wp_reset_postdata();
			} else {
			  // no posts found
			}
			?>
		</div>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
