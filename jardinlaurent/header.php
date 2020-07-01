<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jardinlaurent
 */
 $image_id = get_field('logo', 6);
 $taille_image = 'logo';

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="spaceAround">
		<!-- HEADER -->
		<!-- <h1>
			<?php echo get_bloginfo('name'); ?>
		</h1> -->

		<div class="logoHeader">
			<a href=""><?php echo wp_get_attachment_image($image_id, $taille_image);?></a>

			<!-- <p>Situé en normandie</p> -->
		</div>

		<div class="navHeader">
			<ul>
				<li class="first"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Accueil">Accueil</a></li>
				<li><a href="<?php echo esc_url( home_url( '/mes-produits' ) ); ?>" title="Mes produits">Mes produits</a></li>
				<li><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" title="Portfolio">Portfolio</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" title="Contact">Contact</a></li>
			</ul>
		</div>

		<!-- <div class="contactHeader">
			<h2>Contactez nous : </h2>
			<p>Tél : 02 33 33 33 33</p>
			<p>Email : contact@email.com</p>
			<p>Adresse : 10 rue rrrr rrrr </p>
		</div> -->

		<!-- HEADER AU DESSUS -->
	</header>

	<div id="content" class="site-content">
