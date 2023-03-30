<?php

/** index.php est le modele par défaut du thème
 */ ?>
<?php get_header(); ?>

<main class="e404">
    <!-- <pre>404.php</pre> -->
        <h1>Erreur 404</h1>
        <div class="search404">
            <h2>Page introuvable, vous pouvez tenter une recherche</h2>
            <?php
                get_search_form();
             ?>
        </div>
        <div class="coursmenu404">
            <p>Nos choix de cours</p>
            <div>Items Cours Menu Placeholder</div>
        </div>
        <div class="notesmenu404">
            <p>Les notes de cours</p>
            <div>Items Notes Menu Placeholder</div>
        </div>
</main>
</div>
<?php get_footer(); ?>

</body>

</html>