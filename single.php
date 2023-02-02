<?php 
/** single.php est le modele par défaut du thème
*/ ?> 
<?php get_header(); ?> 

<main>
    <pre>single.php</pre>
    <h1>Bienvenue au 4w4</h1>  
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?> 
            <article>
                <h3><?php the_title() ?> </h3>
                <h4><?php the_content() ?> </h4>

            </article>
            <hr>

        <?php endwhile ?> 
    <?php endif ?>

</main>

<?php get_footer(); ?> 

</body>
</html>