<?php 
/** 
 * category.php est le modele par défaut pour afficher une archive d'articles de catégorie spécifique
*/ ?> 
<?php get_header(); ?>

<main class="category">
    <!-- <pre>category.php</pre> -->
   <section class="blocflex">
   <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
    //   création d'une nouvelle requête
      $query = new WP_Query( $args );
    //   tout le reste de l'extraction de données est basée sur la nouvelle requête contenue dans $query
      if ( $query->have_posts() ) :
      while(have_posts()): the_post(); ?> 
      <?php 
      if (in_category("galerie")) {
         get_template_part("template-parts/categorie", "galerie");
        }

      else {
         get_template_part("template-parts/categorie", "4w4");
      }
      
      endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>
</div>



<?php get_footer(); ?> 
</body>
</html>