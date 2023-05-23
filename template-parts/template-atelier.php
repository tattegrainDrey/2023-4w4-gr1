<?php
    /**
     * Template name: Atelier
     */
?>
<?php get_header(); ?>
<main class="pageatelier">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('thumbnail', ['class' => 'img-atelier']) ?> 
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<div>
<table>
    <tr>
        <th>Formateur: </th>
        <td><?php the_field('formateur'); ?></td>
    </tr>
    <tr>
        <th>Date de l'atelier: </th>
        <td><?php the_field('date'); ?></td>
    </tr>
    <tr>
        <th>Heure de l'atelier: </th>
        <td><?php the_field('heure'); ?></td>
    </tr>
    <tr>
        <th>Durée d'un atelier: </th>
        <td><?php the_field('duree'); ?></td>
    </tr>
    <tr>
        <th>Local de l'atelier: </th>
        <td><?php the_field('local'); ?></td>
    </tr>
</table>
</div>
<?php endif;?>
</main><!-- #main pour atelier -->
</div>
<?php
get_footer();