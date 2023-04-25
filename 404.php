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
            <h2>Nos choix de cours</h2>
            <?php
                wp_nav_menu(array(
                    "menu"=>"cours",
                    "container" => "div"
                )
                )
            ?>
        </div>
        <div class="notesmenu404">
            <h2>Les notes de cours</h2>
            <?php
                wp_nav_menu(array(
                    "menu"=>"4w4",
                    "container" => "div"
                )
                )
            ?>
        </div>
</main>
</div>
<?php get_footer(); ?>

</body>

</html>