<?php /*Template Name: Contact */ ?>
<?php get_header(); ?>

<!-- Template contact -->

<h1 class="alegreya">Contactez nous</h1>

<div class="contactFull">
  <div class="formulaireContact">
    <h2 class="alegreya">Formulaire de contact</h2>
    <?php echo do_shortcode( '[contact-form-7 id="206" title="Formulaire de contact 1"]' ); ?>
  </div>

  <div class="contactRight">
    <div class="coordonees">
        <h2 class="alegreya">Mes coordonées</h2>
            <p>Tél : 02 33 33 33 33</p>
            <p>Email : contact@email.com</p>
            <p>Adresse : 10 rrrr rrrrr</p>
    </div>

    <div class="maps">
      <h2 class="alegreya">Où me trouver</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2589.505735999575!2d-1.7685234839166406!3d49.531606279359174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480c92becd2c26d1%3A0x3d7027c6988e8004!2s28+Route+de+Couville%2C+50340+Beno%C3%AEtville!5e0!3m2!1sfr!2sfr!4v1517449692885" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>



<?php get_footer(); ?>
