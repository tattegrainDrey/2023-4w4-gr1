<?php 
/** 
 * index.php est le modele par défaut du thème
*/ ?> 
<?php get_header(); ?> 

<main class="main-accueil">
    <!-- <pre>front-page.php</pre> -->
    <h1>Bienvenue au 4w4</h1>  
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?> 
            <article>
                <a href="<?php the_permalink() ?>"><h3><?php the_title() ?> </h3></a>
                <h4><?php the_excerpt() ?> </h4>

            </article>
            <hr>

        <?php endwhile ?> 
    <?php endif ?>

</main>

<?php get_footer(); ?> 
</body>
</html>