<?php 
/** 
 * index.php est le modele par défaut du thème
*/ ?> 
<?php get_header(); ?>

<main class="main-accueil">
    <!-- <pre>front-page.php</pre> -->
    <section class="blocflex">
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?> 
            <article>
                <a href="<?php the_permalink() ?>">
                <h3><?php the_title() ?></h3>
                <h4><?= wp_trim_words(get_the_excerpt(), 10 ) ?> </h4>
                </a>
            </article>
        <?php endwhile ?> 
    <?php endif ?>
    </section>

</main>

<?php get_footer(); ?> 
</body>
</html>