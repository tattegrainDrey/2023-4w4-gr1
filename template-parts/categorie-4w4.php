<?php
    /**
    * affiche un article bloc qui s'integre dans les liste des cours qu'accede avec category cours
    *
    */
    $titre = get_the_title();
    if (substr($titre,0,1)== '0'){
        $titre = substr($titre,1);
    }
?>
<article class="blocflex__article">
    <?php the_post_thumbnail('medium'); ?> 
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p class="cat4w4"><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>