<?php /*Template Name: Accueil */ ?>

<?php get_header(); ?>

<?php
  $image_id = get_field('banniere', 6);
  $taille_image = 'banniere';

  $image_produit_id = get_field('produitaccueil', 6);
  $image_portfolio_id = get_field('portfolioaccueil', 6);

  $taille_image_accueil = 'imageAccueil';
?>

<?php echo wp_get_attachment_image($image_id, $taille_image);?>

<img src="https://dummyimage.com/1920x500/000/fff" alt="">

<div class="wrap">

  <h1 class="titreSite">Le jardin de Laurent</h1>

  <p class="presentationSite">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in viverra tellus, vel ultricies nisi. Praesent iaculis diam nisi. Cras vel blandit est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin, leo vel luctus hendrerit, sem ante egestas est, eu eleifend mi elit eu tellus. Maecenas suscipit in felis at auctor. Curabitur vel elit vitae dui tempus efficitur. Nunc fringilla massa ac urna rhoncus consectetur. Morbi ullamcorper pulvinar finibus. Cras congue libero ac ligula placerat gravida. Curabitur eu pretium metus. In lacinia, ipsum eget molestie eleifend, augue ante tristique eros, ut aliquam ante lorem nec metus. Etiam semper dolor erat.
    Vivamus blandit erat eget nisl placerat ultricies. Suspendisse potenti. Aenean scelerisque ultricies arcu, mollis vulputate diam aliquam ac. Nulla tristique dui a neque auctor hendrerit. Ut mollis ex a vestibulum gravida. Cras nulla tellus, pretium a dui vitae, finibus fringilla metus. Nullam nunc nisl, interdum eget orci vel, tincidunt ornare nisl. Nulla facilisi. Suspendisse diam quam, fermentum at nisl id, mollis maximus magna. Donec sollicitudin condimentum sapien. Aliquam nibh lectus, consectetur in maximus et, cursus id libero.
  </p>

  <div class="row spaceAround produitsPortfolio">
    <div class="produitsContainerAccueil">
        <h2 class="alegreya">Mes produits</h2>

        <a href="<?php echo esc_url( home_url( '/mes-produits' ) ); ?>"><?php echo wp_get_attachment_image($image_produit_id, $taille_image_accueil);?></a>
    </div>

    <div class="portfolioContainerAccueil">
        <h2 class="alegreya">Porfolio</h2>

        <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php echo wp_get_attachment_image($image_portfolio_id, $taille_image_accueil);?></a>
    </div>
  </div>

</div>



<?php get_footer(); ?>
