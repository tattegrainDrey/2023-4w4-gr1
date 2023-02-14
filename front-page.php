<?php 
/** 
 * index.php est le modele par défaut du thème
*/ ?> 
<?php get_header(); ?>

<main class="main-accueil">
    <!-- <pre>front-page.php</pre> -->
    <h1>Bienvenue au 4w4</h1> 
    <section class="blocflex">
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?> 
            <article>
            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                <h4><?= wp_trim_words(get_the_excerpt(), 20 ) ?> </h4>

            </article>
            <hr>

        <?php endwhile ?> 
    <?php endif ?>
    </section>

</main>

<?php get_footer(); ?> 
</body>
</html>