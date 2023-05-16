<?php 
/** 
 * index.php est le modele par défaut du thème
*/ ?> 
<?php get_header(); ?>

<main class="main-accueil">
    <!-- <pre>front-page.php</pre> -->

    <section class="blocflex">
        <div class="bloce">
            <h3 class="titre"> Évènements </h3>
            <?php
                wp_page_menu();
                
            ?>
        </div>
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?> 
        <?php 
        if (in_category("galerie")) {
            get_template_part("template-parts/categorie", "galerie");
        }
        else {
            get_template_part("template-parts/categorie", "4w4");
        }
        ?>
        <?php endwhile ?> 
    <?php endif ?>
    </section>

</main>
</div>

<?php get_footer(); ?> 
</body>
</html>