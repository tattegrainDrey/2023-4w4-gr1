<?php
    /**
    * affiche un article bloc qui s'integre dans les liste des cours qu'accede avec category cours
    *
    */
    
    $titre = get_the_title();
    $sigle = substr($titre, 0, 7);
    $grand_titre = substr($titre, 7, -6);
    $duree = "46h";
?>
<article>
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $grand_titre; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 20) ?></p>
    <h6><?= $duree; ?></h6>
</article>