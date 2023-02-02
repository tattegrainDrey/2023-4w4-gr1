<?php 
/** index.php est le modele par défaut du thème
*/ ?> 
<?php get_header(); ?> 

<main>
    <pre>front-page.php</pre>
    <h1>Bienvenue au 4w4</h1>  
    <?php
        if (have_posts()):
            while(have_posts()):
                the_post();
                //the_title('<h3>','</h3>');
            ?> 
            <article>
            <h3><?php the_title();?></h3>
            <h6>Extrait :<h6><?php the_excerpt(); ?>
            <h6>Contenu :<h6><?php the_content();
            endwhile; ?>
            </article>
    <?php endif; ?>
</main>

<?php get_footer(); ?> 

</body>
</html>