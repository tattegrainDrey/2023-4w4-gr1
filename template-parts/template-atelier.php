<?php
    /**
     * Template name: Atelier
     */
?>
<?php get_header(); ?>
<main class="page">
<?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>Formateur: <?php the_field('formateur'); ?></p>
<p>Date de l'atelier: <?php the_field('date'); ?></p>
<p>Heure de l'atelier: <?php the_field('heure'); ?></p>  
<p>Durée d'un atelier: <?php the_field('duree'); ?> heures</p>
<p>Local de l'atelier: <?php the_field('local'); ?></p>  
<?php endif;?>
</main><!-- #main pour atelier -->
</div>
<?php
get_footer();