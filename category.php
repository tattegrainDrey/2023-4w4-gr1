<?php 
/** 
 * category.php est le modele par défaut pour afficher une archive d'articles de catégorie spécifique
*/ ?> 
<?php get_header(); ?>

<main class="main-accueil">
    <!-- <pre>category.php</pre> -->
    <section class="blocflex">
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?> 
            <article>
            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                <h4><?= wp_trim_words(get_the_excerpt(), 10 ) ?> </h4>

            </article>
        <?php endwhile ?> 
    <?php endif ?>
    </section>

</main>

<?php get_footer(); ?> 
</body>
</html>