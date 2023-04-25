<?php 
/** single.php est le modele par défaut du thème
*/ ?> 
<?php get_header(); ?> 

<main class="main-article">
    <!-- <pre>single.php</pre> -->
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?> 

            <article>
                <h1><?php the_title() ?> </h1>
                <?php the_content() ?>
            </article>

        <?php endwhile ?> 
    <?php endif ?>

</main>
</div>

<?php get_footer(); ?> 

</body>
</html>