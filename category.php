<?php 
/** 
 * category.php est le modele par défaut pour afficher une archive d'articles de catégorie spécifique
*/ ?> 
<?php get_header(); ?>

<main class="main-accueil category">
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
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
               <h3 class="animate__animated animate__jello"><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h3>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>



<?php get_footer(); ?> 
</body>
</html>